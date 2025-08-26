<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

// Prevent raw PHP warnings from breaking JSON
ini_set('display_errors', 0);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/scripts/elastic_config.php';

$index = 'ruskin_works';

// Collect GET params safely
$query        = $_GET['q']           ?? '';
$typeFilter   = $_GET['typeFilter']  ?? '';
$persName     = $_GET['persName']    ?? '';
$placeName    = $_GET['placeName']   ?? '';
$geogName     = $_GET['geogName']    ?? '';
$orgName      = $_GET['orgName']     ?? '';
$bodyTitle    = $_GET['bodyTitle']   ?? '';
$nameType     = $_GET['nameType']    ?? '';
$nameValue    = $_GET['nameValue']   ?? '';
$persNameType = $_GET['persNameType'] ?? '';
$placeNameType = $_GET['placeNameType'] ?? '';
$geogNameType = $_GET['geogNameType'] ?? '';
$orgNameType   = $_GET['orgNameType'] ?? '';
$bodyTitleType = $_GET['bodyTitleType'] ?? '';

$page    = max(1, intval($_GET['page'] ?? 1));
$perPage = max(1, min(50, intval($_GET['per_page'] ?? 10)));
$from    = ($page - 1) * $perPage;

$must = [];

// ---- QUERY BUILDING ----
if ($query !== '') {
    $must[] = [
        'multi_match' => [
            'query'    => $query,
            'fields'   => ['title^3', 'content'],
            'type'     => 'most_fields',
            'operator' => 'and'
        ]
    ];
}

if ($persName !== '') {
    $must[] = ['match_phrase' => ['persNames' => $persName]];
    if ($persNameType !== '' && $persNameType !== 'all') {
        if ($bodyTitleType === 'other') {
            $knownTypes = [
                'book','manuscript','poem','essay','artwork','composite',
                'lesson','bibliography_text','letter','anthology','archive'
            ];
            $must[] = [
                'bool' => [
                    'must_not' => [
                        ['terms' => ['bodyTitleTypes' => array_map('strtolower', $knownTypes)]]
                    ]
                ]
            ];
        } else {
            $must[] = ['term' => ['persNameTypes' => strtolower($persNameType)]];
        }
    }
}

if ($bodyTitle !== '') {
    $must[] = ['match_phrase' => ['bodyTitles' => $bodyTitle]];
    if ($bodyTitleType !== '' && $bodyTitleType !== 'all') {
        $must[] = ['term' => ['bodyTitleTypes' => strtolower($bodyTitleType)]];
    }
}

if ($placeName !== '') {
    $must[] = ['match_phrase' => ['placeNames' => $placeName]];
    if ($placeNameType !== '' && $placeNameType !== 'all') {
        $must[] = ['term' => ['placeNameTypes' => $placeNameType]];
    }
}

if ($geogName !== '') {
    $must[] = ['match_phrase' => ['geogNames' => $geogName]];
    if ($geogNameType !== '' && $geogNameType !== 'all') {
        $must[] = ['term' => ['geogNameTypes' => $geogNameType]];
    }
}

if ($orgName !== '') {
    $must[] = ['match_phrase' => ['orgNames' => $orgName]];
    if ($orgNameType !== '' && $orgNameType !== 'all') {
        $must[] = ['term' => ['orgNameTypes' => $orgNameType]];
    }
}

if ($nameValue !== '') {
    $must[] = ['match_phrase' => ['names' => $nameValue]];
    if ($nameType !== '' && $nameType !== 'all') {
        $must[] = ['term' => ['nameTypes' => strtolower($nameType)]];
    }
}

if ($typeFilter !== '') {
    $parts   = explode(':', $typeFilter);
    $mainType = $parts[0] ?? '';
    $subType  = $parts[1] ?? '';

    $directoryMap = [
        'apparatus' => 'apparatuses',
        'figures'   => 'figures',
        'glosses'   => 'glosses',
        'letters'   => 'letters',
        'notes'     => 'notes',
        'witness'   => 'witnesses',
    ];

    if (isset($directoryMap[$mainType])) {
        $must[] = ['term' => ['directory' => $directoryMap[$mainType]]];
    } elseif ($mainType !== '') {
        $must[] = ['term' => ['type' => $mainType]];
    }

    if ($subType !== '') {
        $must[] = ['term' => ['subtype' => $subType]];
    }
}

if (empty($must)) {
    echo json_encode(['results' => []]);
    exit;
}

// ---- SEARCH BODY ----
$body = [
    'query' => [
        'function_score' => [
            'query' => ['bool' => ['must' => $must]],
            'functions' => [
                ['filter' => ['term' => ['directory' => 'apparatuses']], 'weight' => 4],
                ['filter' => ['term' => ['directory' => 'witnesses']], 'weight' => 3],
                ['filter' => ['term' => ['directory' => 'notes']], 'weight' => 2],
                ['filter' => ['term' => ['directory' => 'glosses']], 'weight' => 1],
                ['filter' => ['term' => ['directory' => 'figures']], 'weight' => 1],
            ],
            'score_mode' => 'sum',
            'boost_mode' => 'multiply'
        ]
    ],
    'highlight' => [
        'pre_tags' => ['<strong>'],
        'post_tags'=> ['</strong>'],
        'fields' => [
            'title'      => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'content'    => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'persNames'  => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'placeNames' => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'orgNames'   => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'geogNames'  => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'names'      => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'bodyTitles' => ['fragment_size' => 150, 'number_of_fragments' => 1],
        ]
    ],
    'from' => $from,
    'size' => $perPage,
    'track_total_hits' => true
];

// ---- EXECUTION ----
try {
    $response = $client->search(['index' => $index, 'body' => $body]);

    $results    = [];
    $seenTitles = [];
    $seenPaths  = [];

    foreach ($response['hits']['hits'] as $hit) {
        $source  = $hit['_source'];
        $filename = $source['filename'] ?? '';
        $relativePath = $source['relative_path'] ?? '';
        $title   = trim($source['title'] ?? '');

        if (!$relativePath || !$title) continue;

        $pathKey  = strtolower($relativePath);
        $titleKey = strtolower($title);

        if (in_array($pathKey, $seenPaths, true) || in_array($titleKey, $seenTitles, true)) {
            continue;
        }

        $seenPaths[]  = $pathKey;
        $seenTitles[] = $titleKey;

        $snippet = '';
        if (isset($hit['highlight'])) {
            $highlighted = reset($hit['highlight']);
            $snippet     = $highlighted[0];
        } else {
            $snippet = mb_substr(strip_tags($source['content'] ?? ''), 0, 200) . '...';
        }

        $relativeCleanPath = preg_replace('#^(gen/_xml/|_Completed/|_In_Process/)?#', '', $relativePath);
        $relativeCleanPath = preg_replace('/\.xml$/', '', $relativeCleanPath);
        $link = '/' . $relativeCleanPath;

        $results[] = [
            'title'    => $title,
            'snippet'  => $snippet,
            'filename' => $filename,
            'link'     => $link
        ];
    }

    $totalResults = $response['hits']['total']['value'] ?? 0;
    $totalPages   = $perPage > 0 ? (int)ceil($totalResults / $perPage) : 1;

    if (isset($_GET['page']) || isset($_GET['per_page'])) {
        echo json_encode([
            'results'    => $results,
            'pagination' => [
                'current_page'  => $page,
                'per_page'      => $perPage,
                'total_results' => $totalResults,
                'total_pages'   => $totalPages,
                'has_previous'  => $page > 1,
                'has_next'      => $page < $totalPages,
                'from'          => $from + 1,
                'to'            => min($from + $perPage, $totalResults)
            ]
        ]);
    } else {
        echo json_encode(['results' => $results]);
    }

} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'error'   => 'Elasticsearch query failed',
        'message' => $e->getMessage()
    ]);
}

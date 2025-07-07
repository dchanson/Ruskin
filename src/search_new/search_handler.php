<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()
    ->setHosts(['localhost:9200'])
    ->setHttpClientOptions([
        'headers' => [
            'Accept' => 'application/vnd.elasticsearch+json; compatible-with=8'
        ]
    ])
    ->build();

$index = 'ruskin_works';
$query = $_GET['q'] ?? '';
$typeFilter = $_GET['typeFilter'] ?? '';
$persName = $_GET['persName'] ?? '';
$placeName = $_GET['placeName'] ?? '';
$geogName = $_GET['geogName'] ?? '';
$orgName = $_GET['orgName'] ?? '';
$nameType = $_GET['nameType'] ?? '';
$nameValue = $_GET['nameValue'] ?? '';
$persNameType = $_GET['persNameType'] ?? '';
$placeNameType = $_GET['placeNameType'] ?? '';
$geogNameType = $_GET['geogNameType'] ?? '';
$orgNameType = $_GET['orgNameType'] ?? '';


$page = max(1, intval($_GET['page'] ?? 1));
$perPage = max(1, min(50, intval($_GET['per_page'] ?? 10)));
$from = ($page - 1) * $perPage;

$must = [];

if (!empty($query)) {
    $must[] = [
        'multi_match' => [
            'query' => $query,
            'fields' => ['title^3', 'content'],
            'type' => 'most_fields',
            'operator' => 'and'
        ]
    ];
}

if (!empty($persName)) {
    $must[] = [
        'match_phrase' => [
            'persNames' => $persName
        ]
    ];
    if (!empty($persNameType) && $persNameType !== 'all') {
        $must[] = [
            'term' => ['persNameTypes' => $persNameType]
        ];
    }
}

if (!empty($placeName)) {
    $must[] = [
        'match_phrase' => [
            'placeNames' => $placeName
        ]
    ];
    if (!empty($placeNameType) && $placeNameType !== 'all') {
        $must[] = [
            'term' => ['placeNameTypes' => $placeNameType]
        ];
    }
}

if (!empty($geogName)) {
    $must[] = [
        'match_phrase' => [
            'geogNames' => $geogName
        ]
    ];
    if (!empty($geogNameType) && $geogNameType !== 'all') {
        $must[] = [
            'term' => ['geogNameTypes' => $geogNameType]
        ];
    }
}

if (!empty($orgName)) {
    $must[] = [
        'match_phrase' => [
            'orgNames' => $orgName
        ]
    ];
    if (!empty($orgNameType) && $orgNameType !== 'all') {
        $must[] = [
            'term' => ['orgNameTypes' => $orgNameType]
        ];
    }
}

if (!empty($nameType) && !empty($nameValue)) {
    $must[] = [
        'match' => [
            "names_by_type_suggest.$nameType.input" => $nameValue
        ]
    ];
}



if (!empty($typeFilter)) {
    $parts = explode(':', $typeFilter);
    $type = $parts[0] ?? '';
    $subtype = $parts[1] ?? '';

    if (!empty($type)) {
        $must[] = ['term' => ['type' => $type]];
    }
    if (!empty($subtype)) {
        $must[] = ['term' => ['subtype' => $subtype]];
    }
}

if (empty($must)) {
    echo json_encode([]);
    exit;
}

$body = [
    'query' => [
        'function_score' => [
            'query' => [
                'bool' => [
                    'must' => $must
                ]
            ],
            'functions' => [
                ['filter' => ['term' => ['directory' => 'apparatuses']], 'weight' => 4],
                ['filter' => ['term' => ['directory' => 'witnesses']], 'weight' => 3],
                ['filter' => ['term' => ['directory' => 'notes']], 'weight' => 2],
                ['filter' => ['term' => ['directory' => 'glosses']], 'weight' => 1],
                ['filter' => ['term' => ['directory' => 'figures']], 'weight' => 1]
            ],
            'score_mode' => 'sum',
            'boost_mode' => 'multiply'
        ]
    ],
    'highlight' => [
        'pre_tags' => ['<strong>'],
        'post_tags' => ['</strong>'],
        'fields' => [
            'title' => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'content' => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'persNames' => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'placeNames' => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'orgNames' => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'geogNames' => ['fragment_size' => 150, 'number_of_fragments' => 1],
        ]
    ],
    'from' => $from,
    'size' => $perPage,
    'track_total_hits' => true
];

try {
    $response = $client->search([
        'index' => $index,
        'body' => $body
    ]);

    $results = [];
    $seenTitles = [];
    $seenPaths = [];

    foreach ($response['hits']['hits'] as $hit) {
        $source = $hit['_source'];
        $filename = $source['filename'] ?? '';
        $relativePath = $source['relative_path'] ?? '';
        $title = trim($source['title'] ?? '');

        if (!$relativePath || !$title) continue;

        $pathKey = strtolower($relativePath);
        $titleKey = strtolower($title);

        if (in_array($pathKey, $seenPaths) || in_array($titleKey, $seenTitles)) {
            continue;
        }

        $seenPaths[] = $pathKey;
        $seenTitles[] = $titleKey;

        $snippet = '';
        if (isset($hit['highlight'])) {
            $highlighted = reset($hit['highlight']);
            $snippet = $highlighted[0];
        } else {
            $snippet = mb_substr(strip_tags($source['content'] ?? ''), 0, 200) . '...';
        }

        
        $relativeCleanPath = preg_replace('#^(gen/_xml/|_Completed/|_In_Process/)?#', '', $relativePath);
        $relativeCleanPath = preg_replace('/\.xml$/', '', $relativeCleanPath);
        $link = '/' . $relativeCleanPath;

        $results[] = [
            'title' => $title,
            'snippet' => $snippet,
            'filename' => $filename,
            'link' => $link
        ];
    }

    $totalResults = $response['hits']['total']['value'];
    $totalPages = ceil($totalResults / $perPage);
    
    if (isset($_GET['page']) || isset($_GET['per_page'])) {
        echo json_encode([
            'results' => $results,
            'pagination' => [
                'current_page' => $page,
                'per_page' => $perPage,
                'total_results' => $totalResults,
                'total_pages' => $totalPages,
                'has_previous' => $page > 1,
                'has_next' => $page < $totalPages,
                'from' => $from + 1,
                'to' => min($from + $perPage, $totalResults)
            ]
        ]);
    } else {
        echo json_encode($results);
    }

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
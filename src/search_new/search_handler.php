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
$filter = $_GET['filter'] ?? 'all';

$fieldMap = [
    'all' => ['title^3', 'content'],
    'title' => ['title^5'],
    'content' => ['content']
];

$fields = $fieldMap[$filter] ?? ['title', 'content'];

// Build query body
$body = [
    'query' => [
        'function_score' => [
            'query' => [
                'multi_match' => [
                    'query' => $query,
                    'fields' => $fields,
                    'type' => $filter === 'title' ? 'phrase' : 'most_fields',
                    'operator' => 'and'
                ]
            ],
            'functions' => [
                ['filter' => ['term' => ['directory' => 'apparatuses']], 'weight' => 4],
                ['filter' => ['term' => ['directory' => 'witnesses']], 'weight' => 3],
                ['filter' => ['term' => ['directory' => 'notes']], 'weight' => 2],
                ['filter' => ['term' => ['directory' => 'glosses']], 'weight' => 1]
            ],
            'score_mode' => 'sum',
            'boost_mode' => 'multiply',
            'min_score' => 0.1
        ]
    ],
    'highlight' => [
        'pre_tags' => ['<strong>'],
        'post_tags' => ['</strong>'],
        'fields' => array_fill_keys(
            array_map(fn($f) => preg_replace('/\^.+$/', '', $f), $fields), // remove ^boost
            [
                'fragment_size' => 150,
                'number_of_fragments' => 1
            ]
        )
    ],
    'size' => 50
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

        //  Deduplicate
        if (in_array($pathKey, $seenPaths) || in_array($titleKey, $seenTitles)) {
            continue;
        }

        $seenPaths[] = $pathKey;
        $seenTitles[] = $titleKey;

        // Highlight or fallback
        $snippet = '';
        if (isset($hit['highlight'])) {
            $highlighted = reset($hit['highlight']);
            $snippet = $highlighted[0];
        } else {
            $snippet = $filter === 'title' ? $title : (mb_substr(strip_tags($source['content'] ?? ''), 0, 200) . '...');
        }

        //  Normalize path
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

    echo json_encode($results);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

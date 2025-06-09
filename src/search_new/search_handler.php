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
    'all' => ['title', 'content'],
    'title' => ['title'],
    'content' => ['content']
];

$fields = $fieldMap[$filter] ?? ['title', 'content'];

$body = [
    'query' => [
        'function_score' => [
            'query' => [
                'multi_match' => [
                    'query' => $query,
                    'fields' => $fields,
                    'type' => 'most_fields'
                ]
            ],
            'functions' => [
                ['filter' => ['term' => ['directory' => 'apparatuses']], 'weight' => 4],
                ['filter' => ['term' => ['directory' => 'witnesses']], 'weight' => 3],
                ['filter' => ['term' => ['directory' => 'notes']], 'weight' => 2],
                ['filter' => ['term' => ['directory' => 'glosses']], 'weight' => 1]
            ],
            'score_mode' => 'sum',
            'boost_mode' => 'multiply'
        ]
    ],
    'highlight' => [
        'pre_tags' => ['<strong>'],
        'post_tags' => ['</strong>'],
        'fields' => array_fill_keys($fields, [
            'fragment_size' => 150,
            'number_of_fragments' => 1
        ])
    ]
];


try {
    $response = $client->search([
        'index' => $index,
        'body' => $body
    ]);

    $results = [];
    $seen = [];

    foreach ($response['hits']['hits'] as $hit) {
        $source = $hit['_source'];
        $filename = $source['filename'];
        if (!isset($source['relative_path'])) continue;
        $relativePath = $source['relative_path'];

        if (!$relativePath || in_array($relativePath, $seen)) {
            continue;
        }
        $seen[] = $relativePath;

        $snippet = '';
        if (isset($hit['highlight'])) {
            $highlighted = reset($hit['highlight']);
            $snippet = $highlighted[0];
        } else {
            $snippet = mb_substr(strip_tags($source['content']), 0, 200) . '...';
        }

        $relativeCleanPath = preg_replace('#^(gen/_xml/|_Completed/|_In_Process/)?#', '', $source['relative_path']);
        $relativeCleanPath = preg_replace('/\.xml$/', '', $relativeCleanPath);
        $link = '/' . $relativeCleanPath;


        $results[] = [
            'title' => $source['title'],
            'snippet' => $snippet,
            'filename' => $filename,
            'link' => $link
        ];
    }

    echo json_encode($results);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

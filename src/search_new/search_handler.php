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
        'multi_match' => [
            'query' => $query,
            'fields' => $fields,
            'type' => 'most_fields'
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

    foreach ($response['hits']['hits'] as $hit) {
        $source = $hit['_source'];

        // Use highlighted snippet if available
        $snippet = '';
        if (isset($hit['highlight'])) {
            $highlighted = reset($hit['highlight']);
            $snippet = $highlighted[0];
        } else {
            $snippet = mb_substr(strip_tags($source['content']), 0, 200) . '...';
        }

        // Build results
        $results[] = [
            'title' => $source['title'],
            'snippet' => $snippet,
            'filename' => $source['filename'],
            'link' => '/webpages/' . pathinfo($source['filename'], PATHINFO_FILENAME) . '.html'
        ];
    }

    echo json_encode($results);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

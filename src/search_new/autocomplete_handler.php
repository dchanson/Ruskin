<?php
header('Content-Type: application/json');
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
$term = $_GET['term'] ?? '';
$type = $_GET['type'] ?? 'person';

$field = $type === 'place' ? 'placeNames_suggest' : 'persNames_suggest';

if (!$term) {
    echo json_encode([]);
    exit;
}

$body = [
    'suggest' => [
        'name-suggest' => [
            'prefix' => $term,
            'completion' => [
                'field' => $field,
                'fuzzy' => ['fuzziness' => 1]
            ]
        ]
    ]
];

try {
    $response = $client->search([
        'index' => $index,
        'body' => $body
    ]);

    $options = $response['suggest']['name-suggest'][0]['options'];
    $results = array_unique(array_map(fn($opt) => $opt['text'], $options));
    echo json_encode(array_values($results));
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

<?php
require __DIR__ . '/../../vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;

$caPath = __DIR__ . '/../../../elastic/certs/ca/ca.crt';

$client = ClientBuilder::create()
    ->setHosts(['https://localhost:9200'])
    ->setBasicAuthentication('elastic', 'Sapiens0nlin3')
    ->setHttpClientOptions([
        'verify' => $caPath,
        'headers' => [
            'Accept' => 'application/vnd.elasticsearch+json; compatible-with=8',
        ],
    ])
    ->build();

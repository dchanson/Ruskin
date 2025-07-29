<?php
require __DIR__ . '/../../vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;

function loadEnvFile($filePath)
{
    if (!file_exists($filePath)) return;
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) continue;
        list($key, $value) = explode('=', $line, 2);
        putenv("$key=$value");
    }
}

loadEnvFile(dirname(__DIR__, 3) . '/.env');

putenv('ELASTIC_USE_GUZZLE=true');

$host = getenv('ES_HOST') ?: 'https://localhost:9200';
$user = getenv('ES_USER') ?: 'elastic';
$pass = getenv('ES_PASS') ?: '';
$caPath = __DIR__ . '/../../../elastic/certs/ca/ca.crt';

$client = ClientBuilder::create()
    ->setHosts([$host])
    ->setBasicAuthentication($user, $pass)
    ->setHttpClientOptions([
        'verify' => $caPath,
        'headers' => [
            'Accept' => 'application/vnd.elasticsearch+json; compatible-with=8',
        ],
    ])
    ->build();

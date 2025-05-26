<?php

require 'src/vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;

$INDEX_NAME = 'ruskin_works';
$DATA_DIR = dirname(__DIR__, 3) . '/_xml';

$client = ClientBuilder::create()
    ->setHosts(['localhost:9200'])
    ->setHttpClientOptions([
        'headers' => [
            'Accept' => 'application/vnd.elasticsearch+json; compatible-with=8'
        ]
    ])
    ->build();

function init_index($client, $INDEX_NAME) {
    try {
        if (!$client->indices()->exists(['index' => $INDEX_NAME])) {
            $client->indices()->create(['index' => $INDEX_NAME]);
            echo "✅ Created index: $INDEX_NAME\n";
        } else {
            echo "ℹ️ Index already exists: $INDEX_NAME\n";
        }
    } catch (Exception $e) {
        echo "❌ Failed to initialize index: " . $e->getMessage() . "\n";
        exit;
    }
}

function parse_and_index_file($client, $filepath, $INDEX_NAME) {
    global $DATA_DIR;

    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->load($filepath);

    $xpath = new DOMXPath($doc);
    $xpath->registerNamespace("tei", "http://www.tei-c.org/ns/1.0");

    $titleNode = $xpath->query('//tei:title')->item(0);
    $bodyNode = $xpath->query('//tei:body')->item(0);

    $title = $titleNode ? trim($titleNode->textContent) : "Untitled";
    $titleType = $titleNode && $titleNode->hasAttribute("type") ? $titleNode->getAttribute("type") : "unknown";
    $content = $bodyNode ? trim($bodyNode->textContent) : "";

    $absoluteFilePath = realpath($filepath);
    $absoluteBasePath = realpath($DATA_DIR);
    $relativePath = ltrim(str_replace('\\', '/', substr($absoluteFilePath, strlen($absoluteBasePath))), '/');

    $document = [
        'title' => $title,
        'title_type' => $titleType,
        'content' => $content,
        'filename' => basename($filepath),
        'relative_path' => $relativePath
    ];

    try {
        $client->index([
            'index' => $INDEX_NAME,
            'id' => sha1($relativePath),
            'body' => $document
        ]);
        echo "📄 Indexed: $filepath\n";
    } catch (Exception $e) {
        echo "❌ Failed to index $filepath: " . $e->getMessage() . "\n";
    }
}

function index_all($client, $DATA_DIR, $INDEX_NAME) {
    if (!is_dir($DATA_DIR)) {
        echo "❌ Data folder not found at $DATA_DIR\n";
        return;
    }

    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($DATA_DIR));
    $xmlFound = false;

    foreach ($rii as $file) {
        if (!$file->isDir() && strtolower($file->getExtension()) === 'xml') {
            $xmlFound = true;
            parse_and_index_file($client, $file->getPathname(), $INDEX_NAME);
        }
    }

    if (!$xmlFound) {
        echo "⚠️ No XML files found to index in $DATA_DIR\n";
    }
}

try {
    $info = $client->info();
    echo "✅ Connected to Elasticsearch\n";
    echo "Cluster: {$info['cluster_name']}, Version: {$info['version']['number']}\n\n";

    init_index($client, $INDEX_NAME);
    index_all($client, $DATA_DIR, $INDEX_NAME);

    echo "\n🏁 Done indexing.\n";
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}

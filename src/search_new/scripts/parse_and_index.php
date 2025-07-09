<?php
require __DIR__ . '/../../vendor/autoload.php';

putenv('ELASTIC_USE_GUZZLE=true');

use Elastic\Elasticsearch\ClientBuilder;

$INDEX_NAME = 'ruskin_works';
$DATA_DIR = dirname(__DIR__, 3) . '/_xml/_Completed';

$client = ClientBuilder::create()
    ->setHosts(['localhost:9200'])
    ->setHttpClientOptions([
        'headers' => [
            'Accept' => 'application/vnd.elasticsearch+json; compatible-with=8'
        ]
    ])
    ->build();

function init_index($client, $INDEX_NAME)
{
    try {
        try {
            $indexExists = $client->indices()->exists(['index' => $INDEX_NAME])->asBool();
        } catch (Exception $e) {
            $indexExists = false;
        }

        if ($indexExists) {
            $client->indices()->delete(['index' => $INDEX_NAME]);
            echo " Deleted existing index: $INDEX_NAME\n";
        } else {
            echo " Index doesn't exist yet: $INDEX_NAME\n";
        }

        $mapping = [
            'index' => $INDEX_NAME,
            'body' => [
                'mappings' => [
                    'properties' => [
                        'title' => ['type' => 'text', 'analyzer' => 'standard'],
                        'content' => ['type' => 'text', 'analyzer' => 'standard'],
                        'filename' => ['type' => 'keyword'],
                        'relative_path' => [
                            'type' => 'text',
                            'fields' => [
                                'keyword' => ['type' => 'keyword', 'ignore_above' => 256]
                            ]
                        ],
                        'directory' => ['type' => 'keyword'],
                        'type' => ['type' => 'keyword'],
                        'subtype' => ['type' => 'keyword'],
                        'names' => ['type' => 'text', 'analyzer' => 'standard'],
                        'persNames' => ['type' => 'text', 'analyzer' => 'standard'],
                        'placeNames' => ['type' => 'text', 'analyzer' => 'standard'],
                        'geogNames' => ['type' => 'text', 'analyzer' => 'standard'],
                        'orgNames' => ['type' => 'text', 'analyzer' => 'standard'],
                        'persNames_suggest' => ['type' => 'completion'],
                        'placeNames_suggest' => ['type' => 'completion'],
                        'geogNames_suggest' => ['type' => 'completion'],
                        'orgNames_suggest' => ['type' => 'completion'],
                        'names_suggest' => ['type' => 'completion'],
                        'persNameTypes' => ['type' => 'keyword'],
                        'placeNameTypes' => ['type' => 'keyword'],
                        'geogNameTypes' => ['type' => 'keyword'],
                        'orgNameTypes' => ['type' => 'keyword'],
                        'nameTypes' => ['type' => 'keyword'],
                    ]
                ]
            ]
        ];

        $client->indices()->create($mapping);
        echo " Created index with mapping: $INDEX_NAME\n";
    } catch (Exception $e) {
        echo " Failed to initialize index: " . $e->getMessage() . "\n";
        exit;
    }
}

function parse_and_index_file($client, $filepath, $INDEX_NAME)
{
    global $DATA_DIR;

    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    if (!$doc->load($filepath)) {
        echo "⚠️ Failed to load XML: $filepath\n";
        return;
    }

    $xpath = new DOMXPath($doc);
    $xpath->registerNamespace("tei", "http://www.tei-c.org/ns/1.0");

    $titleNode = $xpath->query('//tei:title')->item(0);
    $title = $titleNode ? trim($titleNode->textContent) : "Untitled";

    $bodyNode = $xpath->query('//tei:body')->item(0);
    $content = $bodyNode ? trim($bodyNode->textContent) : "";

    $firstDiv = $bodyNode ? $xpath->query('.//tei:div', $bodyNode)->item(0) : null;

    $divType = ($firstDiv instanceof DOMElement && $firstDiv->hasAttribute("type")) ? $firstDiv->getAttribute("type") : "unknown";
    $divSubType = ($firstDiv instanceof DOMElement && $firstDiv->hasAttribute("subtype")) ? $firstDiv->getAttribute("subtype") : "unknown";

    $absoluteFilePath = realpath($filepath);
    $absoluteBasePath = realpath($DATA_DIR);
    $relativePath = ltrim(str_replace('\\', '/', substr($absoluteFilePath, strlen($absoluteBasePath))), '/');
    $folderType = explode('/', $relativePath)[0] ?? 'unknown';

    $otherName = $xpath->query('//tei:name');
    $names = [];
    foreach ($otherName as $node) {
        $text = trim($node->textContent);
        if ($text !== '') {
            $names[] = $text;
        }
    }

    $nameTypes = [];
    foreach ($otherName as $node) {
        if ($node instanceof DOMElement) {
            $type = $node->getAttribute('type') ?: 'unknown';
            $nameTypes[] = $type;
        }
    }


    $person = $xpath->query('//tei:persName');
    $persNames = [];
    foreach ($person as $name) {
        $text = trim($name->textContent);
        if ($text !== '') {
            $persNames[] = $text;
        }
    }

    $persNameTypes = [];
    foreach ($person as $name) {
        if ($name instanceof DOMElement) {
            $type = $name->getAttribute('type') ?: 'unknown';
            $persNameTypes[] = $type;
        }
    }

    $places = $xpath->query('//tei:placeName');
    $placeNames = [];
    foreach ($places as $place) {
        $text = trim($place->textContent);
        if ($text !== '') {
            $placeNames[] = $text;
        }
    }

    $placeNameTypes = [];
    foreach ($places as $place) {
        if ($place instanceof DOMElement) {
            $type = $place->getAttribute('type') ?: 'unknown';
            $placeNameTypes[] = $type;
        }
    }

    $geogs = $xpath->query('//tei:geogName');
    $geogNames = [];
    foreach ($geogs as $location) {
        $text = trim($location->textContent);
        if ($text !== '') {
            $geogNames[] = $text;
        }
    }

    $geogNameTypes = [];
    foreach ($geogs as $location) {
        if ($location instanceof DOMElement) {
            $type = $location->getAttribute('type') ?: 'unknown';
            $geogNameTypes[] = $type;
        }
    }

    $orgs = $xpath->query('//tei:orgName');
    $orgNames = [];
    foreach ($orgs as $org) {
        $text = trim($org->textContent);
        if ($text !== '') {
            $orgNames[] = $text;
        }
    }

    $orgNameTypes = [];
    foreach ($orgs as $org) {
        if ($org instanceof DOMElement) {
            $type = $org->getAttribute('type') ?: 'unknown';
            $orgNameTypes[] = $type;
        }
    }

    $documentId = sha1($relativePath);

    $document = [
        'title' => $title,
        'content' => $content,
        'filename' => basename($filepath),
        'relative_path' => $relativePath,
        'directory' => $folderType,
        'type' => $divType,
        'subtype' => $divSubType,
        'names' => implode(' ', $names),
        'persNames' => implode(' ', $persNames),
        'placeNames' => implode(' ', $placeNames),
        'orgNames' => implode(' ', $orgNames),
        'geogNames' => implode(' ', $geogNames),
        'persNames_suggest' => ['input' => array_values(array_unique($persNames))],
        'placeNames_suggest' => ['input' => array_values(array_unique($placeNames))],
        'orgNames_suggest' => ['input' => array_values(array_unique($orgNames))],
        'geogNames_suggest' => ['input' => array_values(array_unique($geogNames))],
        'names_suggest' => ['input' => array_values(array_unique($names))],
        'persNameTypes' => array_values(array_unique($persNameTypes)),
        'placeNameTypes' => array_values(array_unique($placeNameTypes)),
        'geogNameTypes' => array_values(array_unique($geogNameTypes)),
        'orgNameTypes' => array_values(array_unique($orgNameTypes)),
        'nameTypes' => array_values(array_unique($nameTypes))
    ];


    try {
        $client->index([
            'index' => $INDEX_NAME,
            'id' => $documentId,
            'body' => $document
        ]);
        echo " Indexed: $relativePath\n";
    } catch (Exception $e) {
        echo " Failed to index $filepath: " . $e->getMessage() . "\n";
    }
}

function index_all($client, $DATA_DIR, $INDEX_NAME)
{
    if (!is_dir($DATA_DIR)) {
        echo " Data folder not found at $DATA_DIR\n";
        return;
    }

    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($DATA_DIR));
    $xmlFound = false;
    $indexed = 0;
    $skipped = 0;

    foreach ($rii as $file) {
        if (!$file->isDir() && strtolower($file->getExtension()) === 'xml') {
            $xmlFound = true;

            if (strpos($file->getFilename(), '.') === 0) {
                $skipped++;
                continue;
            }

            parse_and_index_file($client, $file->getPathname(), $INDEX_NAME);
            $indexed++;
        }
    }

    if (!$xmlFound) {
        echo "⚠️ No XML files found to index in $DATA_DIR\n";
    } else {
        echo "\n Summary: $indexed files indexed, $skipped files skipped\n";
    }
}

try {
    $info = $client->info();
    echo " Connected to Elasticsearch\n";
    echo "Cluster: {$info['cluster_name']}, Version: {$info['version']['number']}\n\n";

    init_index($client, $INDEX_NAME);
    index_all($client, $DATA_DIR, $INDEX_NAME);

    $client->indices()->refresh(['index' => $INDEX_NAME]);

    echo "\n🏁 Done indexing and refreshed index.\n";
} catch (Exception $e) {
    echo " Error: " . $e->getMessage() . "\n";
}

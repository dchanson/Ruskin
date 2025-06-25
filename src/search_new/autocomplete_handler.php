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
                'size' => 10,
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

    $options = $response['suggest']['name-suggest'][0]['options'] ?? [];
    $results = array_unique(array_map(fn($opt) => $opt['text'], $options));
    
    // Sort with normalized matching (ignore spaces, keep dots)
    $sortedResults = array_values($results);
    usort($sortedResults, function($a, $b) use ($term) {
        $aScore = calculateNormalizedMatchScore($a, $term);
        $bScore = calculateNormalizedMatchScore($b, $term);
        
        
        return $bScore - $aScore;
    });
    
    echo json_encode($sortedResults);
    
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

function normalizeText($text) {
    // Remove only spaces, keep dots, convert to lowercase
    return strtolower(preg_replace('/\s/', '', $text));
}

function calculateNormalizedMatchScore($text, $term) {
    $normalizedText = normalizeText($text);
    $normalizedTerm = normalizeText($term);
    
    $score = 0;
    
    if ($normalizedText === $normalizedTerm) {
        return 1000;
    }
    
    if (strpos($normalizedText, $normalizedTerm) === 0) {
        return 500 + (100 - strlen($text)); }
    
    $matchingChars = 0;
    $minLength = min(strlen($normalizedText), strlen($normalizedTerm));
    for ($i = 0; $i < $minLength; $i++) {
        if ($normalizedText[$i] === $normalizedTerm[$i]) {
            $matchingChars++;
        } else {
            break;
        }
    }
    
    if (strlen($normalizedTerm) > 0) {
        $prefixScore = ($matchingChars / strlen($normalizedTerm)) * 300;
        $score += $prefixScore;
    }
    
    if (strpos($normalizedText, $normalizedTerm) !== false) {
        $score += 100;
    }
    
    $score += (100 - strlen($text)) / 10;
    
    return $score;
}
?>
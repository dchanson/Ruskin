<?php
header('Content-Type: application/json');
require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/scripts/elastic_config.php';

$index = 'ruskin_works';
$term = $_GET['term'] ?? '';
$type = preg_replace('/[^a-zA-Z0-9_]/', '', ($_GET['type'] ?? 'names'));

$fieldMap = [
    'person' => 'persNames_suggest',
    'place'  => 'placeNames_suggest',
    'geog'   => 'geogNames_suggest',
    'org'    => 'orgNames_suggest',
    'names'  => 'names_suggest',
    'title' => 'bodyTitles_suggest'
];

if (!isset($fieldMap[$type])) {
    $field = $fieldMap['names'];
} else {
    $field = $fieldMap[$type];
}

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
    usort($sortedResults, function ($a, $b) use ($term) {
        return calculateNormalizedMatchScore($b, $term) - calculateNormalizedMatchScore($a, $term);
    });

    echo json_encode($sortedResults);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

function normalizeText($text)
{
    return strtolower(preg_replace('/\s+/', '', $text));
}

function calculateNormalizedMatchScore($text, $term)
{
    $normalizedText = normalizeText($text);
    $normalizedTerm = normalizeText($term);
    $score = 0;

    if ($normalizedText === $normalizedTerm) {
        return 1000;
    }

    if (str_starts_with($normalizedText, $normalizedTerm)) {
        return 500 + (100 - strlen($text));
    }

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
        $score += ($matchingChars / strlen($normalizedTerm)) * 300;
    }

    if (strpos($normalizedText, $normalizedTerm) !== false) {
        $score += 100;
    }

    $score += (100 - strlen($text)) / 10;

    return $score;
}

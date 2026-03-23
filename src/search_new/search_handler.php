<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

// Prevent raw PHP warnings from breaking JSON
ini_set('display_errors', '0');
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/scripts/elastic_config.php';

$index = 'ruskin_works';

// ============================================================
// Collect GET params safely
// ============================================================
$query         = $_GET['q']              ?? '';
$typeFilter    = $_GET['typeFilter']     ?? '';
$persName      = $_GET['persName']       ?? '';
$placeName     = $_GET['placeName']      ?? '';
$geogName      = $_GET['geogName']       ?? '';
$orgName       = $_GET['orgName']        ?? '';
$bodyTitle     = $_GET['bodyTitle']      ?? '';
$nameType      = $_GET['nameType']       ?? '';
$nameValue     = $_GET['nameValue']      ?? '';
$persNameType  = $_GET['persNameType']   ?? '';
$placeNameType = $_GET['placeNameType']  ?? '';
$geogNameType  = $_GET['geogNameType']   ?? '';
$orgNameType   = $_GET['orgNameType']    ?? '';
$bodyTitleType = $_GET['bodyTitleType']  ?? '';

$page    = max(1, intval($_GET['page']     ?? 1));
$perPage = max(1, min(50, intval($_GET['per_page'] ?? 10)));
$from    = ($page - 1) * $perPage;

// ============================================================
// Build the bool → must clauses (unchanged from original)
// ============================================================
$must = [];

if ($query !== '') {
    $must[] = [
        'multi_match' => [
            'query'    => $query,
            'fields'   => ['title^3', 'content'],
            'type'     => 'most_fields',
            'operator' => 'and',
            'fuzziness' => 'AUTO',
            'prefix_length' => 1
        ]
    ];
}

if ($persName !== '') {
    $must[] = ['match_phrase' => ['persNames' => $persName]];
    if ($persNameType !== '' && $persNameType !== 'all') {
        if ($persNameType === 'other') {
            $knownTypes = [
                'book', 'manuscript', 'poem', 'essay', 'artwork', 'composite',
                'lesson', 'bibliography_text', 'letter', 'anthology', 'archive',
            ];
            $must[] = [
                'bool' => [
                    'must_not' => [
                        ['terms' => ['persNameTypes' => array_map('strtolower', $knownTypes)]],
                    ],
                ],
            ];
        } else {
            $must[] = ['term' => ['persNameTypes' => strtolower($persNameType)]];
        }
    }
}

if ($bodyTitle !== '') {
    $must[] = ['match_phrase' => ['bodyTitles' => $bodyTitle]];
    if ($bodyTitleType !== '' && $bodyTitleType !== 'all') {
        if ($bodyTitleType === 'other') {
            $knownTypes = [
                'book', 'manuscript', 'poem', 'essay', 'artwork', 'composite',
                'lesson', 'bibliography_text', 'letter', 'anthology', 'archive',
            ];
            $must[] = [
                'bool' => [
                    'must_not' => [
                        ['terms' => ['bodyTitleTypes' => array_map('strtolower', $knownTypes)]],
                    ],
                ],
            ];
        } else {
            $must[] = ['term' => ['bodyTitleTypes' => strtolower($bodyTitleType)]];
        }
    }
}

if ($placeName !== '') {
    $must[] = ['match_phrase' => ['placeNames' => $placeName]];
    if ($placeNameType !== '' && $placeNameType !== 'all') {
        $must[] = ['term' => ['placeNameTypes' => $placeNameType]];
    }
}

if ($geogName !== '') {
    $must[] = ['match_phrase' => ['geogNames' => $geogName]];
    if ($geogNameType !== '' && $geogNameType !== 'all') {
        $must[] = ['term' => ['geogNameTypes' => $geogNameType]];
    }
}

if ($orgName !== '') {
    $must[] = ['match_phrase' => ['orgNames' => $orgName]];
    if ($orgNameType !== '' && $orgNameType !== 'all') {
        $must[] = ['term' => ['orgNameTypes' => $orgNameType]];
    }
}

if ($nameValue !== '') {
    $must[] = ['match_phrase' => ['names' => $nameValue]];
    if ($nameType !== '' && $nameType !== 'all') {
        $must[] = ['term' => ['nameTypes' => strtolower($nameType)]];
    }
}

if ($typeFilter !== '') {
    if ($typeFilter === 'bibliography') {
        $must[] = ['term' => ['relative_path.keyword' => 'notes/bibliography.xml']];
    } else {
        $parts    = explode(':', $typeFilter);
        $mainType = $parts[0] ?? '';
        $subType  = $parts[1] ?? '';

        $directoryMap = [
            'apparatus' => 'apparatuses',
            'figures'   => 'figures',
            'glosses'   => 'glosses',
            'letters'   => 'letters',
            'notes'     => 'notes',
            'witness'   => 'witnesses',
        ];

        if (isset($directoryMap[$mainType])) {
            $must[] = ['term' => ['directory' => $directoryMap[$mainType]]];
        } elseif ($mainType !== '') {
            $must[] = ['term' => ['type' => $mainType]];
        }

        if ($subType !== '') {
            $must[] = ['term' => ['subtype' => $subType]];
        }
    }
}

// Nothing to search for
if (empty($must)) {
    echo json_encode(['results' => [], 'suggestions' => []]);
    exit;
}

// ============================================================
// Primary search body (exact match with function_score)
// ============================================================
$body = [
    'query' => [
        'function_score' => [
            'query' => ['bool' => ['must' => $must]],
            'functions' => [
                ['filter' => ['term' => ['directory' => 'apparatuses']], 'weight' => 4],
                ['filter' => ['term' => ['directory' => 'witnesses']],   'weight' => 3],
                ['filter' => ['term' => ['directory' => 'notes']],       'weight' => 2],
                ['filter' => ['term' => ['directory' => 'glosses']],     'weight' => 1],
                ['filter' => ['term' => ['directory' => 'figures']],     'weight' => 1],
            ],
            'score_mode'  => 'sum',
            'boost_mode'  => 'multiply',
        ],
    ],
    'highlight' => [
        'pre_tags'  => ['<strong>'],
        'post_tags' => ['</strong>'],
        'fields'    => [
            'title'      => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'content'    => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'persNames'  => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'placeNames' => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'orgNames'   => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'geogNames'  => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'names'      => ['fragment_size' => 150, 'number_of_fragments' => 1],
            'bodyTitles' => ['fragment_size' => 150, 'number_of_fragments' => 1],
        ],
    ],
    'suggest' => [
    'text' => $query,
    'did_you_mean' => [
        'phrase' => [
            'field' => 'title',
            'size' => 1,
            'gram_size' => 3,
            'direct_generator' => [
                [
                    'field' => 'title',
                    'suggest_mode' => 'always'
                ]
            ]
        ]
    ]
],
    'from' => $from,
    'size' => $perPage,
    'track_total_hits' => true
];

// ============================================================
// Helper: "Did you mean?" suggestions via fuzzy + phrase suggest
// ============================================================
/**
 * Queries Elasticsearch with fuzziness enabled and the phrase
 * suggester to propose alternative search terms when the exact
 * query returns zero results.
 *
 * Returns an associative array with two keys:
 *   - fuzzy_titles : unique titles from fuzzy-matched documents
 *   - phrase_suggestions : corrected phrases from the suggest API
 */
function getDidYouMeanSuggestions(string $query, $client, string $index): array
{
    $suggestions = [
        'fuzzy_titles'      => [],
        'phrase_suggestions' => [],
    ];

    if ($query === '') {
        return $suggestions;
    }

    // --- Strategy 1: Fuzzy document match (title + content) ----
    try {
        $fuzzyParams = [
            'index' => $index,
            'body'  => [
                'query' => [
                    'bool' => [
                        'should' => [
                            [
                                'match' => [
                                    'title' => [
                                        'query'     => $query,
                                        'fuzziness' => 'AUTO',
                                        'operator'  => 'and',
                                    ],
                                ],
                            ],
                            [
                                'match' => [
                                    'content' => [
                                        'query'     => $query,
                                        'fuzziness' => 'AUTO',
                                    ],
                                ],
                            ],
                        ],
                        'minimum_should_match' => 1,
                    ],
                ],
                '_source' => ['title'],
                'size'    => 5,
            ],
        ];

        $fuzzyResponse = $client->search($fuzzyParams);

        $seen = [];
        foreach ($fuzzyResponse['hits']['hits'] ?? [] as $hit) {
            $title = trim($hit['_source']['title'] ?? '');
            if ($title !== '' && !isset($seen[strtolower($title)])) {
                $seen[strtolower($title)]            = true;
                $suggestions['fuzzy_titles'][] = $title;
            }
        }
    } catch (\Throwable $e) {
        error_log('Fuzzy suggestion query failed: ' . $e->getMessage());
    }

    // --- Strategy 2: Phrase suggester on title + content --------
    try {
        $suggestParams = [
            'index' => $index,
            'body'  => [
                'suggest' => [
                    'title_suggestion' => [
                        'text'   => $query,
                        'phrase' => [
                            'field'            => 'title',
                            'size'             => 3,
                            'gram_size'        => 3,
                            'direct_generator' => [
                                [
                                    'field'        => 'title',
                                    'suggest_mode' => 'popular',
                                ],
                            ],
                            'highlight' => [
                                'pre_tag'  => '<em>',
                                'post_tag' => '</em>',
                            ],
                        ],
                    ],
                    'content_suggestion' => [
                        'text'   => $query,
                        'phrase' => [
                            'field'            => 'content',
                            'size'             => 3,
                            'gram_size'        => 3,
                            'direct_generator' => [
                                [
                                    'field'        => 'content',
                                    'suggest_mode' => 'popular',
                                ],
                            ],
                            'highlight' => [
                                'pre_tag'  => '<em>',
                                'post_tag' => '</em>',
                            ],
                        ],
                    ],
                ],
                'size' => 0,   // we only care about suggestions, not hits
            ],
        ];

        $suggestResponse = $client->search($suggestParams);

        $phraseSeen = [];
        foreach (['title_suggestion', 'content_suggestion'] as $key) {
            foreach ($suggestResponse['suggest'][$key] ?? [] as $entry) {
                foreach ($entry['options'] ?? [] as $option) {
                    $text      = trim($option['text'] ?? '');
                    $highlight = $option['highlighted'] ?? '';
                    $lowerText = strtolower($text);

                    if ($text !== '' && $lowerText !== strtolower($query) && !isset($phraseSeen[$lowerText])) {
                        $phraseSeen[$lowerText] = true;
                        $suggestions['phrase_suggestions'][] = [
                            'text'        => $text,
                            'highlighted' => $highlight,
                            'score'       => $option['score'] ?? 0,
                        ];
                    }
                }
            }
        }

        // Sort phrase suggestions by score descending
        usort($suggestions['phrase_suggestions'], function ($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        // Limit to top 5
        $suggestions['phrase_suggestions'] = array_slice($suggestions['phrase_suggestions'], 0, 5);
    } catch (\Throwable $e) {
        error_log('Phrase suggestion query failed: ' . $e->getMessage());
    }

    return $suggestions;
}

// ============================================================
// Helper: Format a single hit into the response shape
// ============================================================
function formatHit(array $hit): ?array
{
    $source       = $hit['_source'];
    $filename     = $source['filename']      ?? '';
    $relativePath = $source['relative_path'] ?? '';
    $title        = trim($source['title']    ?? '');

    if (!$relativePath || !$title) {
        return null;
    }

    // Snippet from highlight or content fallback
    $snippet = '';
    if (isset($hit['highlight'])) {
        $highlighted = reset($hit['highlight']);
        $snippet     = $highlighted[0] ?? '';
    }
    if ($snippet === '') {
        $snippet = mb_substr(strip_tags($source['content'] ?? ''), 0, 200) . '...';
    }

    // Build link
    $relativeCleanPath = preg_replace('#^(gen/_xml/|_Completed/|_In_Process/)?#', '', $relativePath);
    $relativeCleanPath = preg_replace('/\.xml$/', '', $relativeCleanPath);
    $link = '/' . $relativeCleanPath;

    return [
        'title'    => $title,
        'snippet'  => $snippet,
        'filename' => $filename,
        'link'     => $link,
    ];
}

// ============================================================
// Execute primary search
// ============================================================
try {
    $response = $client->search(['index' => $index, 'body' => $body]);

    $suggestion = null;
    if (!empty($response['suggest']['did_you_mean'][0]['options'])) {
        $suggestion = $response['suggest']['did_you_mean'][0]['options'][0]['text'];
        if ($suggestion === $query) {
            $suggestion = null;
        }
    }

    $results    = [];
    $seenTitles = [];
    $seenPaths  = [];

    foreach ($response['hits']['hits'] as $hit) {
        $formatted = formatHit($hit);
        if ($formatted === null) continue;

        $pathKey  = strtolower($hit['_source']['relative_path'] ?? '');
        $titleKey = strtolower($formatted['title']);

        if (in_array($pathKey, $seenPaths, true) || in_array($titleKey, $seenTitles, true)) continue;

        $seenPaths[]  = $pathKey;
        $seenTitles[] = $titleKey;
        $results[]    = $formatted;
    }

    $totalResults = $response['hits']['total']['value'] ?? 0;
    $totalPages   = $perPage > 0 ? (int) ceil($totalResults / $perPage) : 1;

    // Get "did you mean?" suggestions when there are no results
    $suggestions = empty($results)
        ? getDidYouMeanSuggestions($query, $client, $index)
        : ['fuzzy_titles' => [], 'phrase_suggestions' => []];

    // Build ONE output array
    $output = [
        'results'    => $results,
        'suggestion' => $suggestion,
        'suggestions' => $suggestions,
    ];

    if (isset($_GET['page']) || isset($_GET['per_page'])) {
        $output['pagination'] = [
            'current_page'  => $page,
            'per_page'      => $perPage,
            'total_results' => $totalResults,
            'total_pages'   => $totalPages,
            'has_previous'  => $page > 1,
            'has_next'      => $page < $totalPages,
            'from'          => $totalResults > 0 ? $from + 1 : 0,
            'to'            => min($from + $perPage, $totalResults),
        ];
    }

    // Single echo — only one JSON payload
    echo json_encode($output);

} catch (\Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'error'       => 'Elasticsearch query failed',
        'message'     => $e->getMessage(),
        'results'     => [],
        'suggestions' => [],
    ]);
}
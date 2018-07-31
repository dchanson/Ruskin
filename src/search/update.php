<?php
require_once(__DIR__ . '/../header.inc.php');
require_once __DIR__ . '/search_utils.inc.php';

/**************************************************\
 * | Description: Extract keywords from XML files     |
 * |              and populate the SQL database.      |
 * |                                                  |
 * | Authors: Elena, Garth                            |
 * \**************************************************/


$config = r_get_config();
$config = $config['DB'];

$xml_folder = $config['XML_FOLDER'];
$database = $config['DATABASE_NAME'];

// Check that the user is logged in.
if (!(isset($_POST['password']) AND $_POST['password'] == $config['UPDATE_TOOL_PASSWORD'])) {
    showLoginForm();
    die;
}

// Turn off output buffering so output is immediately printed to the screen rather than waiting until the entire page finishes downloading.
ob_implicit_flush(1);

// Override default execution time limit of 30 seconds, and allow the script to execute for as long as it needs.
set_time_limit(0);

// Only report errors. Do not report warnings.
error_reporting(E_ERROR);

$db_conn = mysqli_connect($config['HOST'], $config['USERNAME'], $config['PASSWORD'], $database);

// Attempt to connect to the MySQL server.
if (mysqli_connect_errno()) {
    die("Failed to connect to the MySQL server: " . mysqli_connect_error());
}

// Define an array to the hold the names of the files in our directory.
$files = array();

try {
    $it = new RecursiveDirectoryIterator($xml_folder);
    $display = Array('xml');
    foreach (new RecursiveIteratorIterator($it) as $file) {
        if (in_array(strtolower(array_pop(explode('.', $file))), $display)) {
            array_push($files, $file);
        }
    }
} catch (UnexpectedValueException $e) {
    die("Can not open directory: $xml_folder");
}

// Count the total number of XML files we have.
$total_files = count($files);

// Keep track of which XML file we are on.
$current_file = 0;

// Keep track of the files that were successfully added to the database.
$success_count = 0;

// Keep track of the files that were skipped due to malformed XML.
$malformed_count = 0;

// Keep track of the files that were missing on the site.
$missing_count = 0;

// Keep track of the database errors.
$database_errors = 0;

// Keep track of keywords that are indexed.
$keyword_count = 0;

// Keep track of files that were not needed.
$not_needed = 0;

// Keep track of empty keyword tags.
$empty_keywords = 0;

// Keep track of tags that have tags inside them.
$tags_in_tags = 0;

// Keep track of skipped handShift tags.
$handshift_tags = 0;

// Keep track of connectivity errors.
$connectivity_error = 0;

// Keep track of the number of duplicate tags.
$duplicate_tags = 0;

echo '<h2>Ruskin XML parser</h2><h3>Parsing ' . $total_files . ' XML files</h3>';

recreateTables($db_conn);

// Iterate through the files in our directory.
foreach ($files AS $entry) {
    // Print 64k spaces so that our output buffer reaches the necessary size to be flushed to the browser.
    echo str_repeat(' ', 4096);

    // Path to XML file.
    $filename = $entry;

    $current_file++;
    echo '<br />Progress: <b>' . round($current_file / $total_files * 100, 1) . '%</b> ';

    // Skip the XML file if it has malformed code.
    if (($stuff = simplexml_load_file($filename)) === FALSE) {
        echo "<br /><br /><span style='color: red; font-weight: bold;'>FAILED: '" . $filename . "' (malformed XML)</span>";
        $malformed_count++;
        continue;
    }

    // Get doctype.
    $doctype = $stuff->teiHeader->attributes();

    // Get title.
    $title = $stuff->teiHeader->fileDesc->titleStmt->title;

    // Check if div exists.
    if ($stuff->text->body->div !== NULL) {
        // Get divtype if div exists.
        $divtype = $stuff->text->body->div->attributes()->type;
        $subtype = $stuff->text->body->div->attributes()->subtype;
    } else {
        // Make divtype blank if it does not exist.
        $divtype = '';
        $subtype = '';
    }

    // Check if this is a poem.
    if ($divtype == 'poem') {
        // If this is a poem, get poem info.
        $ispoem = '1';
        $meter = $stuff->text->body->div->attributes()->met;
        $rhyme = $stuff->text->body->div->attributes()->rhyme;
    } else {
        // If this is not a poem, set poem info to defaults.
        $ispoem = '0';
        $meter = '';
        $rhyme = '';
    }

    // Open the file and extract "body text"
    $rawTextStuff = file_get_contents($filename);

    // Get start position of the text tag.
    $start = strpos($rawTextStuff, '<text>');

    // Get the end position of the text tag.
    $end = strpos($rawTextStuff, '</text>');

    // Check that the start and end positions were successfully retrieved.
    if ($start !== FALSE AND $end !== FALSE) {
        $text = substr($rawTextStuff, $start + 6, $end - $start - 6);
    } else {
        $text = '';
    }

    if ($doctype == 'witness' AND $divtype == 'title') {
        echo "<br /><br /><span style='color: green; font-weight: bold;'>SKIPPING '" . $filename . "' (links to a .inc.php file and is not needed)</span>";
        $not_needed++;
        continue;
    }

    // Determine the URL of the file on the website.
    $url = construct_url($filename, $divtype, $doctype);

    // Constrcut an SQL query to insert the document into the MySQL database.
    $insert = "INSERT INTO `" . mysqli_real_escape_string($db_conn, $database) . "`.`documents` (
		`title`,
		`doctype`,
		`divtype`,
		`subtype`,
		`rhyme`,
		`meter`,
		`ispoem`,
		`text`,
		`url`
	) VALUES (
		'" . mysqli_real_escape_string($db_conn, $doctype) . "',
		'" . mysqli_real_escape_string($db_conn, $divtype) . "',
		'" . mysqli_real_escape_string($db_conn, $subtype) . "',
		'" . mysqli_real_escape_string($db_conn, $title) . "',
		'" . mysqli_real_escape_string($db_conn, $rhyme) . "',
		'" . mysqli_real_escape_string($db_conn, $meter) . "',
		'" . mysqli_real_escape_string($db_conn, $ispoem) . "',
		'" . mysqli_real_escape_string($db_conn, $text) . "',
		'" . mysqli_real_escape_string($db_conn, $url) . "'
	);";

    // Perform the mysql query.
    if (mysqli_query($db_conn, $insert)) {
        echo "<br /><br /><span style='color: green; font-weight: bold;'>SUCCESS: '" . $filename . "'</span>";
        $docid = mysqli_insert_id($db_conn);
        $success_count++;
    } else {
        // If there was an error performing the query, output the error.
        echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error with the mysql query: " . mysqli_error($db_conn) . "</span>";
        $database_errors++;
    }

    $strdivpos = strpos($text, '<div');
    $enddivpos = strpos($text, '>', $strdivpos);
    $text = substr($text, $enddivpos + 1);
    $counter = 0;

    // Call function to insert keyword in database.
    insertKeyword($docid, 'title', '', '', $title, 'title');

    // Loop through each keyword in the body text of the XML document. Keywords are identified by having 'corresp'
    while (strpos($text, 'corresp="') !== false) {
        // Extract entire keyword tag. EXAMPLE: <persName corresp="#WGC">W. G. Collingwood
        $correspLocation = strpos($text, 'corresp="');

        // Extract the tag name. EXAMPLE: persName
        $leftBracketLocation = rstrpos($text, '<', $correspLocation);
        $keywordEnd = strpos($text, ' ', $leftBracketLocation);
        $tagName = substr($text, $leftBracketLocation, $keywordEnd - $leftBracketLocation);

        // Skip over handshift tags.
        if ($tagName == 'handShift') {
            $newStart = strpos($text, '>', $correspLocation);
            $text = substr($text, $newStart + 1);
            $handshift_tags++;
            echo "<br /><span style='color: orange; font-weight: bold;'>SKIPPING tag: '" . $tagName . "'</span>";
            continue;
        }

        // Form the keyword's ending tag. EXAMPLE: </persName>
        $endingTag = '</' . $tagName . '>';

        $rightBracketLocation = strpos($text, $endingTag, $correspLocation);
        $keyword = substr($text, $leftBracketLocation - 1, ($rightBracketLocation - $leftBracketLocation) + 1);

        // Remove this keyword tag from the text so the while loop can iterate to the next available tag.
        $text = substr($text, $rightBracketLocation + 1);

        // Extract tag. EXAMPLE: persName
        $endOfTag = strpos($keyword, ' ');
        $tag = substr($keyword, 1, $endOfTag - 1);

        // Extract corresp. EXAMPLE: #WGC
        $correspStartLocation = strpos($keyword, 'corresp="') + 9;
        $correspEndLocation = strpos($keyword, '"', $correspStartLocation);
        $corresp = substr($keyword, $correspStartLocation, $correspEndLocation - $correspStartLocation);

        // If corresp starts with #, then remove it.
        if (substr($corresp, 0, 1) == '#') {
            $corresp = substr($corresp, 1);
        }

        // Extract keyword contents. EXAMPLE: W. G. Collingwood
        $contentStartPosition = strpos($keyword, '>') + 1;
        $content = substr($keyword, $contentStartPosition);

        // If this tag has a tag inside it that we skipped, take note of it.
        if (strpos($content, 'corresp="') !== false) {
            $tags_in_tags++;
            echo "<br /><span style='color: orange; font-weight: bold;'>MERGING tag(s) inside of tag: '" . $tagName . "'</span>";
        }

        // Strip any HTML from our tag's content.
        $content = strip_tags($content);

        // If the keyword is empty, then increment our counter.
        if (strlen($content) == 0) {
            $empty_keywords++;
            echo "<br /><span style='color: orange; font-weight: bold;'>SKIPPING empty tag: '" . $tagName . "'</span>";
            continue;
        }

        // Extract type if it exists. EXAMPLE: poem
        if (strpos($keyword, 'type="') !== false) {
            $typeStartPosition = strpos($keyword, 'type="') + 6;
            $typeEndPosition = strpos($keyword, '"', $typeStartPosition);
            $type = substr($keyword, $typeStartPosition, $typeEndPosition - $typeStartPosition);
        } else {
            $type = '';
        }

        insertKeyword($docid, $tag, $type, $corresp, $content, $keyword);
    }
    break;
}

// Show some stats about the parsed files.
echo '<h2>Parsing complete!</h2>
<b>Stats:
<br />Documents indexed: ' . $success_count . '
<br />Keywords indexed: ' . $keyword_count . '
<br />Empty keywords: ' . $empty_keywords . '
<br />Handshift keywords that were skipped: ' . $handshift_tags . '
<br />Keywords that were inside of other keywords and were merged: ' . $tags_in_tags . '
<br />Identical keywords that were skipped after appearing multiple times in the same document: ' . $duplicate_tags . '
<br />Documents skipped due to malformed XML: ' . $malformed_count . '
<br />Documents skipped that were missing on website (such as some drawings/figures that have not yet been added to the showcase): ' . $missing_count . '
<br />Documents skipped due to a connectivity issue with the server: ' . $connectivity_error . '
<br />Documents skipped that were not needed (in the witnesses folder on the site): ' . $not_needed . '
<br />Database errors: ' . $database_errors . '</b>';

// Close the connection to our MySQL server.
mysqli_close($db_conn);

?>

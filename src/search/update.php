<?php
/**************************************************\
| Description: Extract keywords from XML files     |
|              and populate the SQL database.      |
|                                                  |
| Authors: Elena, Garth                            |
\**************************************************/



// Load MySQL credentials from config file.
include('config.php');

// Check that the user is logged in.
if (!(isset($_POST['password']) AND $_POST['password'] == $updateToolPassword)) {
	echo '
<div style="
    width: 300px;
    background: #ddd;
    padding: 25px;
    border-radius: 8px;
    border: 1px solid #888;
    box-shadow: 5px 5px 10px #BBB;
    margin: auto;
    margin-top: 100px;
    font-family: sans-serif;
">
	<form action="" method="post">
		<span style="font-weight: bold;">Ruskin Search Engine - Update Tool:</span>';
		
		if (isset($_POST['password']) AND $_POST['password'] != $updateToolPassword) {
			echo '<br><br><span style="color: #FF660A;font-weight: bold;">Password incorrect!</span>';
		}
		
		echo '<br><br><input type="text" name="password" placeholder="Password"><br><br>
		<input type="submit" name="submit" value=" Login ">
	</form>
</div>';
	die();
}

// Turn off output buffering so output is immediately printed to the screen rather than waiting until the entire page finishes downloading.
ob_implicit_flush(1);

// Override default execution time limit of 30 seconds, and allow the script to execute for as long as it needs.
set_time_limit(0);

// Only report errors. Do not report warnings.
error_reporting(E_ERROR);



// Function to construct the URL to the PHP file on the Ruskin website that corresponds to a given XML file.
function construct_url($filename, $divtype, $doctype) {
	global $entry;
	
	// Base URL of website.
	$url = 'http://english.selu.edu/humanitiesonline/ruskin/';
	
	// Use the divtype of the file to determine which folder the file is located on the site.
	if ($doctype == 'witness') {
		$url .= 'showcase/';
	} elseif ($divtype == 'note') {
		$url .= 'notes/';
	} elseif ($divtype == 'apparatus') {
		$url .= 'apparatuses/';
	} elseif ($divtype == 'glosses') {
		$url .= 'glosses/';
	} elseif ($divtype == 'essay') {
		$url .= 'essays/';
	} elseif ($divtype == 'webpage') {
		$url .= 'webpages/';
	}
	
	// add glosses doctype
	
	// Change the extension of the file from .XML to .PHP
	$url .= str_replace('xml', 'php', $entry);
	
	return $url;
}

// Function that checks the response code of a URL on the Ruskin server. This is used for checking if a file exists (200 code) or if a file does not exist on the server (404 code).
function get_response($url) {
	// Wait 1/10 of a second between requests. This is needed so that we don't accidentally DOS attack the Ruskin server.
	//usleep(100000);
	
	// Initiate the CURL handle.
	$curl_handle = curl_init();
	
	// Give our URL to CURL.
	curl_setopt($curl_handle, CURLOPT_URL, $url);
	
	// Tell CURL not to output the page contents to the screen. We only care about the response code.
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
	
	// Tell CURl to timeout the connection in 3 seconds if the server does not respond.
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 5);
	
	// Perform the CURL operation.
	curl_exec($curl_handle);
	
	// Check if there was an error performing the CURL operation.
	if (!curl_errno($curl_handle)) {
		// If there was no error, then grab the connection info from our CURL session.
		$connection_info = curl_getinfo($curl_handle);
		
		// Extract the HTTP response code from our CURL session.
		$code = $connection_info['http_code'];
	} else {
		// If there was an error performing the CURL operation, then leave the response code blank.
		$code = '';
	}
	
	// Close our CURL session.
	curl_close($curl_handle);
	
	// Return our HTTP response code for the URL we accessed from the Ruskin server. This should usually be either 200 or 404.
	return $code;
}

// Function to insert keywords into database.
function insertKeyword($docid, $tag, $type, $corresp, $content, $keyword) {
	global $db_conn, $database, $keyword_count, $database_errors, $duplicate_tags;
	
	$insertkeywords = "INSERT INTO `" . mysql_real_escape_string($database) . "`.`keywords` (
	`docid`,
	`tag`,
	`type`,
	`corresp`,
	`content`,
	`metaphone`,
	`keyword`
	) VALUES (
		'" . mysql_real_escape_string($docid) . "',
		'" . mysql_real_escape_string($tag) . "',
		'" . mysql_real_escape_string($type) . "',
		'" . mysql_real_escape_string($corresp) . "',
		'" . mysql_real_escape_string($content) . "',
		'" . mysql_real_escape_string(metaphone($content)) . "',
		'" . mysql_real_escape_string($keyword) . "'
	);";
	
	// Perform the mysql query.
	if (mysql_query($insertkeywords)) {
		echo "<br /><span style='color: blue; font-weight: bold;'>SUCCESS, added keyword: '" .$content . "'</span>";
		$keyword_count++;
	} else {
		// If there was an error performing the query, output the error.
		if (strpos(mysql_error(), 'Duplicate') !== false) {
			//echo "<br /><span style='color: orange; font-weight: bold;'>SKIPPING duplicate keyword in this document: '" . $tag . "' with content '" . $content . "'</span>";
			$duplicate_tags++;
		} else {
			echo "<br /><span style='color: red; font-weight: bold;'>There was an error with the mysql query: " . mysql_error() . "</span>";
			$database_errors++;
		}
	}
}

function rstrpos($haystack, $needle, $offset){
	$size = strlen($haystack);
	$pos = strpos(strrev($haystack),$needle,$size-$offset);
	
	if($pos === false){
		return false;
	}
	
	return $size - $pos;
}

// Attempt to open our directory.
if ($handle = opendir($xml_folder)) {
	
	// Attempt to connect to the MySQL server.
	if (!$db_conn = mysql_connect($servername, $username, $password)) {
		die("Failed to connect to the MySQL server: " . mysql_error());
	}
	
	// Attempt to connect to the database.
	if (!mysql_select_db($database)) {
		die("Failed to select the database: " . $database);
	}
	
	// Define an array to the hold the names of the files in our directory.
	$files = array();
	
	// Loop through each file in our directory.
    while (false !== ($entry = readdir($handle))) {
		// Don't parse . or .. since these are directories.
        if ($entry != "." && $entry != "..") {
			// Add our file entry to the array.
			array_push($files, $entry);
		}
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
	
	// Attempt to remove the documents table.
	if (mysql_query("DROP TABLE `documents`;")) {
		echo "<br /><br /><span style='color: green; font-weight: bold;'>Successfully removed `documents` table.</span>";
	} else {
		echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error removing the `documents` table: " . mysql_error() . "</span>";
		die();
	}
	
	// Attempt to recreate the documents table.
	if (mysql_query("
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `doctype` text NOT NULL,
  `divtype` text NOT NULL,
  `subtype` text NOT NULL,
  `rhyme` text NOT NULL,
  `meter` text NOT NULL,
  `ispoem` tinyint(1) NOT NULL,
  `text` mediumtext NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;")) {
		echo "<br /><br /><span style='color: green; font-weight: bold;'>Successfully recreated `documents` table.</span>";
	} else {
		echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error recreating the `documents` table: " . mysql_error() . "</span>";
		die();
	}
	
	// Attempt to remove the keywords table.
	if (mysql_query("DROP TABLE `keywords`;")) {
		echo "<br /><br /><span style='color: green; font-weight: bold;'>Successfully removed `keywords` table.</span>";
	} else {
		echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error removing the `keywords` table: " . mysql_error() . "</span>";
		die();
	}
	
	// Attempt to recreate the keywords table.
	if (mysql_query("
CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int(11) NOT NULL auto_increment,
  `docid` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `corresp` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `metaphone` varchar(255) NOT NULL,
  `keyword` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `docid` (`docid`,`tag`,`type`,`content`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;")) {
		echo "<br /><br /><span style='color: green; font-weight: bold;'>Successfully recreated `keywords` table.</span>";
	} else {
		echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error recreating the `keywords` table: " . mysql_error() . "</span>";
		die();
	}
	
	echo "<br /><br />";
	
	// Iterate through the files in our directory.
	foreach ($files AS $entry) {
		// Print 64k spaces so that our output buffer reaches the necessary size to be flushed to the browser.
		echo str_repeat(' ', 4096);
		
		// Path to XML file.
		$filename = $xml_folder . $entry;
		
		$current_file++;
		echo '<br />Progress: <b>' . round($current_file / $total_files * 100, 1) .  '%</b> ';
		
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
			$text = substr($rawTextStuff, $start + 6, $end-$start -6);
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
		
		// Determine whether the requested URL exists.
		$code = get_response($url);
		
		// If response code is not 200 or 404, then we know there was a connection error.
		// If this is the case, then retry getting the document again.
		if ($code != '200' AND $code != '404') {
			$code = get_response($url);
		}
		
		if ($code == '404') {
			echo "<br /><br /><span style='color: red; font-weight: bold;'>FAILED '" . $filename . "' (missing)</span>";
			$missing_count++;
			continue;
		} elseif ($code != '200') {
			echo "<br /><br /><span style='color: red; font-weight: bold;'>FAILED '" . $filename . "' (could not connect to the server)</span>";
			$connectivity_error++;
			continue;
		}
		
		// Constrcut an SQL query to insert the document into the MySQL database.
		$insert = "INSERT INTO `" . mysql_real_escape_string($database) . "`.`documents` (
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
			'" . mysql_real_escape_string($title) . "',
			'" . mysql_real_escape_string($doctype) . "',
			'" . mysql_real_escape_string($divtype) . "',
			'" . mysql_real_escape_string($subtype) . "',
			'" . mysql_real_escape_string($rhyme) . "',
			'" . mysql_real_escape_string($meter) . "',
			'" . mysql_real_escape_string($ispoem) . "',
			'" . mysql_real_escape_string($text) . "',
			'" . mysql_real_escape_string($url) . "'
		);";
		
		// Perform the mysql query.
		if (mysql_query($insert)) {
			echo "<br /><br /><span style='color: green; font-weight: bold;'>SUCCESS: '" . $filename . "'</span>";
			$docid = mysql_insert_id($db_conn);
			$success_count++;
		} else {
			// If there was an error performing the query, output the error.
			echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error with the mysql query: " . mysql_error() . "</span>";
			$database_errors++;
		}
		
		$strdivpos = strpos($text,'<div');
		$enddivpos = strpos($text,'>',$strdivpos);
		$text = substr($text,$enddivpos + 1);	
		$counter = 0;
		
		// Call function to insert keyword in database.
		insertKeyword($docid, 'title', '', '', $title, 'title');
		
		// Loop through each keyword in the body text of the XML document. Keywords are identified by having 'corresp'
		while (strpos($text, 'corresp="') !== false) {
			// Extract entire keyword tag. EXAMPLE: <persName corresp="#WGC">W. G. Collingwood
			$correspLocation = strpos($text,'corresp="');
			
			// Extract the tag name. EXAMPLE: persName
			$leftBracketLocation = rstrpos($text, '<' , $correspLocation);
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
			$keyword = substr($text, $leftBracketLocation - 1, ($rightBracketLocation - $leftBracketLocation)+1);

			// Remove this keyword tag from the text so the while loop can iterate to the next available tag.
			$text = substr($text, $rightBracketLocation + 1);
			
			// Extract tag. EXAMPLE: persName
			$endOfTag = strpos($keyword, ' ');
			$tag = substr($keyword, 1, $endOfTag -1);
			
			// Extract corresp. EXAMPLE: #WGC
			$correspStartLocation = strpos($keyword, 'corresp="') + 9;
			$correspEndLocation = strpos($keyword, '"', $correspStartLocation);
			$corresp = substr($keyword, $correspStartLocation, $correspEndLocation - $correspStartLocation);
			
			// If corresp starts with #, then remove it.
			if (substr($corresp, 0, 1) == '#'){
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
	mysql_close($db_conn);
	
	// Close our directory handle.
    closedir($handle);
} else {
	// Output an error message if the XML directory couldn't be opened.
	echo "Sorry, there was an error opening the XML directory. Check your code!";
}
?>
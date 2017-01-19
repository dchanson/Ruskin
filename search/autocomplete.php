<?php

// Load MySQL credentials from config file.
include('config.php');

// Attempt to connect to the MySQL server.
if (!$db_conn = mysql_connect($servername, $username, $password)) {
	die("Failed to connect to the MySQL server: " . mysql_connect_errno());
}

// Attempt to connect to the database.
if (!mysql_select_db($database)) {
	die("Failed to select the database: " . $database);
}

if (isset($_GET['autoComplete'])) {
	// Always search for '%rus%'
	$query = "SELECT DISTINCT(REPLACE(REPLACE(REPLACE(`content`, '.',''), '!',''), ',','')) AS `content` FROM `keywords` WHERE `content` LIKE '" . mysql_real_escape_string($_GET['autoComplete']) . "%' OR `content` LIKE '% " . mysql_real_escape_string($_GET['autoComplete']) . "%' ";
	
	// Search for the metaphone if the user has types at least 4 characters.
	if (strlen($_GET['autoComplete']) >= 4) {
		$query .= "OR `metaphone` LIKE '" . mysql_real_escape_string(metaphone($_GET['autoComplete'])) . "%' OR `metaphone` LIKE '% " . mysql_real_escape_string(metaphone($_GET['autoComplete'])) . "%' ";
	}
	
	// Fetch the number of words that would have been returned from this autocomplete search.
	$numberOfResults = mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS `result` FROM (" . $query . ") AS my_first_query "));
	
	// If there are no results OR if the user has typed a decently sized word (at least 4 characters long) and there are few results (less than 5), then search for autocomplete suggestions with all possible transposition combinations and words that are off by 1 letter.
	if ($numberOfResults['result'] == 0 OR (strlen($_GET['autoComplete']) >= 4 AND $numberOfResults['result'] < 5)) {
		// Include all possible combinations of letter transpositions. Example: ruskin vs rsukin
		for ($i = 0; $i + 1 < strlen($_GET['autoComplete']); $i++) {
			$query .= "OR `content` LIKE '" . mysql_real_escape_string(substr($_GET['autoComplete'], 0, $i)) . mysql_real_escape_string(substr($_GET['autoComplete'], $i + 1, 1)) . mysql_real_escape_string(substr($_GET['autoComplete'], $i, 1)) . mysql_real_escape_string(substr($_GET['autoComplete'], $i + 2)) . "%' OR `content` LIKE '% " . mysql_real_escape_string(substr($_GET['autoComplete'], 0, $i)) . mysql_real_escape_string(substr($_GET['autoComplete'], $i + 1, 1)) . mysql_real_escape_string(substr($_GET['autoComplete'], $i, 1)) . mysql_real_escape_string(substr($_GET['autoComplete'], $i + 2)) . "%' ";
		}
		
		// Include all words that are off by just 1 letter.
		for ($i = 0; $i < strlen($_GET['autoComplete']); $i++) {
			$query .= "OR `content` LIKE '" . mysql_real_escape_string(substr($_GET['autoComplete'], 0, $i)) . '_' . mysql_real_escape_string(substr($_GET['autoComplete'], $i + 1)) . "%' OR `content` LIKE '% " . mysql_real_escape_string(substr($_GET['autoComplete'], 0, $i)) . '_' . mysql_real_escape_string(substr($_GET['autoComplete'], $i + 1)) . "%' ";
		}
	}
	
	// Show results, shortest first.
	$query .= "ORDER BY LENGTH(`content`) ASC LIMIT 0, 5;";
	
	$results = mysql_query($query);
	
	$counter = 0;
	while ($row = mysql_fetch_assoc($results)) {
		$counter++;
		
		$hiddenCharacters = array(
		"'",
		'"',
		'’',
		'`',
		'“',
		'”'
		);
		
		foreach ($hiddenCharacters AS $hide) {
			$row['content'] = str_replace($hide, '', $row['content']);
			$row['content'] = str_replace(htmlentities($hide), '', $row['content']);
		}
		
		$row['content'] = preg_replace('/&([#x1234567890ABCDEFabcdef])+;/', '', $row['content']);
		
		echo "<span id=\"result" . $counter . "\" onclick=\"setAutoCompleteText('" . $row['content'] . "');\">" . $row['content'] . "</span>";
	}
}

?>
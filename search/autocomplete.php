<?php

// Load MySQL credentials from config file.
require('config.php');

$db_conn = mysqli_connect($servername, $username, $password, $database);

// Attempt to connect to the MySQL server.
if (mysqli_connect_errno()) {
	die("Failed to connect to the MySQL server: " . mysqli_connect_error());
}

if (isset($_GET['autoComplete'])) {
	// Always search for '%rus%'
	$query = "SELECT DISTINCT(REPLACE(REPLACE(REPLACE(`content`, '.',''), '!',''), ',','')) AS `content_mapped` FROM `keywords` WHERE `content` LIKE '" . mysqli_real_escape_string($db_conn, $_GET['autoComplete']) . "%' OR `content` LIKE '% " .
	mysqli_real_escape_string($db_conn, $_GET['autoComplete']) . "%' ";

	// Search for the metaphone if the user has types at least 4 characters.
	if (strlen($_GET['autoComplete']) >= 4) {
		$query .= "OR `metaphone` LIKE '" . mysqli_real_escape_string($db_conn, metaphone($_GET['autoComplete'])) . "%' OR `metaphone` LIKE '% " . mysqli_real_escape_string($db_conn, metaphone($_GET['autoComplete'])) . "%' ";
	}

	// Fetch the number of words that would have been returned from this autocomplete search.
	$numberOfResults = mysqli_fetch_assoc(mysqli_query($db_conn, "SELECT COUNT(*) AS `result` FROM (" . $query . ") AS my_first_query "));

	// If there are no results OR if the user has typed a decently sized word (at least 4 characters long) and there are few results (less than 5), then search for autocomplete suggestions with all possible transposition combinations and words that are off by 1 letter.
	if ($numberOfResults['result'] == 0 OR (strlen($_GET['autoComplete']) >= 4 AND $numberOfResults['result'] < 5)) {
		// Include all possible combinations of letter transpositions. Example: ruskin vs rsukin
		for ($i = 0; $i + 1 < strlen($_GET['autoComplete']); $i++) {
			$query .= "OR `content` LIKE '" .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], 0, $i)) .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], $i + 1, 1)) .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], $i, 1)) .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], $i + 2)) .
			"%' OR `content` LIKE '% " .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], 0, $i)) .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], $i + 1, 1)) .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], $i, 1)) .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], $i + 2)) . "%' ";
		}

		// Include all words that are off by just 1 letter.
		for ($i = 0; $i < strlen($_GET['autoComplete']); $i++) {
			$query .= "OR `content` LIKE '" .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], 0, $i)) . '_' .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], $i + 1)) .
			"%' OR `content` LIKE '% " .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], 0, $i)) . '_' .
			mysqli_real_escape_string($db_conn, substr($_GET['autoComplete'], $i + 1)) . "%' ";
		}
	}

	// Show results, shortest first.
	$query .= "ORDER BY LENGTH(`content_mapped`) ASC LIMIT 0, 5;";

	$results = mysqli_query($db_conn, $query);

	$counter = 0;
	while ($row = mysqli_fetch_assoc($results)) {
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
			$row['content_mapped'] = str_replace($hide, '', $row['content_mapped']);
			$row['content_mapped'] = str_replace(htmlentities($hide), '', $row['content_mapped']);
		}

		$row['content_mapped'] = preg_replace('/&([#x1234567890ABCDEFabcdef])+;/', '', $row['content_mapped']);

		echo "<span id=\"result" . $counter . "\" onclick=\"setAutoCompleteText('" . $row['content_mapped'] . "');\">" . $row['content_mapped'] . "</span>";
	}
}

?>

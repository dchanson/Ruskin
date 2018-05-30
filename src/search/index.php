<?php
require('../header.inc.php');

// Load MySQL credentials from config file.
include('config.php');

$db_conn = mysqli_connect($servername, $username, $password, $database);

// Attempt to connect to the MySQL server.
if (mysqli_connect_errno()) {
	die("Failed to connect to the MySQL server: " . mysqli_connect_error());
}

function fixTag($tag, $capitalize, $pluralize) {

	if ($pluralize) {
		$newTagNames = array(
			'geogName' => 'geographic names',
			'persName' => 'person names',
			'placeName' => 'place names',
			'orgName' => 'organization names',
			'title' => 'titles',
			'name' => 'names',
			'pen_name' => 'pen_names',
			'building' => 'buildings',
			'book' => 'books',
			'poem' => 'poems',
			'manuscript' => 'manuscripts',
			'anthology' => 'anthologies',
			'archive' => 'archives',
			'bibliography' => 'bibliographies',
			'engraving' => 'engravings',
			'essay' => 'essays',
			'periodical' => 'periodicals',
			'reference' => 'references',
			'autobiography' => 'autobiographies',
			'biography' => 'biographies',
			'magazine' => 'magazines',
			'novel' => 'novels',
			'archive_digital' => 'digital archives',
			'archive_nondigital' => 'nondigital archives',
			'bibliography_text' => 'bibliography texts',
			'composite' => 'composites',
			'gloss' => 'glosses',
			'lesson' => 'lessons',
			'program' => 'programs',
			'sermon' => 'sermons',
			'story' => 'stories',
			'peom' => 'peoms',
			'guidebook' => 'guidebooks',
			'map' => 'maps',
			'painting' => 'paintings',
			'book_chapter' => 'book chapters',
			'memoir' => 'memoirs',
			'building' => 'buildings',
			'sketch' => 'sketches',
			'composition' => 'compositions',
			'work' => 'works',
			'letter' => 'letters',
			'scripture' => 'scriptures',
			'drawing' => 'drawings',
			'catalog_auction' => 'catalog auctions',
			'dictionary' => 'dictionaries',
			'tale' => 'tales',
			'article' => 'articles',
			'constellation' => 'constellations'
		);
	} else {
		$newTagNames = array(
			'geogName' => 'geographic name',
			'persName' => 'person name',
			'placeName' => 'place name',
			'orgName' => 'organization name'
		);
	}

	if (array_key_exists($tag, $newTagNames)) {
		$tag = $newTagNames[$tag];
	}

	if ($capitalize) {
		$tag = strtoupper(substr($tag, 0, 1)) . substr($tag, 1);
	}

	$tag = str_replace('_', ' ', $tag);

	return $tag;
}

function createSearchQuery() {
	global $db_conn;
	// This is our base query. We will add constraints to make this query longer
	// depending on which filters are active.
	if (isset($_GET['full_text_of_document'])) {
		$query = "SELECT * FROM `documents` WHERE `documents`.`text` LIKE '%" . mysqli_real_escape_string($db_conn, $_GET['keyword']) . "%' ";
	} else {
		$query = "SELECT
		`documents`.`id`,
		`documents`.`title`,
		`documents`.`doctype`,
		`documents`.`divtype`,
		`documents`.`subtype`,
		`documents`.`rhyme`,
		`documents`.`meter`,
		`documents`.`ispoem`,
		`documents`.`text`,
		`documents`.`url`,
		`keywords`.`tag`,
		`keywords`.`type`,
		`keywords`.`corresp`,
		`keywords`.`content`
		FROM `documents`, `keywords` WHERE `documents`.`id`=`keywords`.`docid` AND `keywords`.`content` LIKE '%" . mysqli_real_escape_string($db_conn, $_GET['keyword']) . "%' ";
	}

	if (isset($_GET['divtype_document']) AND $_GET['divtype_document'] != '') {
		$query .= "AND `documents`.`divtype` LIKE '" . mysqli_real_escape_string($db_conn, $_GET['divtype_document']) . "' ";
	}

	if (isset($_GET['tag_keywords']) AND $_GET['tag_keywords'] != '' AND !isset($_GET['full_text_of_document'])) {
		$query .= "AND `keywords`.`tag` LIKE '%" . mysqli_real_escape_string($db_conn, $_GET['tag_keywords']) . "%' ";
	}

	if (isset($_GET['type_keywords']) AND $_GET['type_keywords'] !='' AND !isset($_GET['full_text_of_document'])){
		$query .= "AND `keywords`.`type` LIKE '%" . mysqli_real_escape_string($db_conn, $_GET['type_keywords']) . "%' ";
	}

	// Finds all poems, and then from these peoms, search for the ones with a title containing "Calais"
	// SELECT * FROM (SELECT * FROM `documents` WHERE `ispoem` = '1') AS my_first_query WHERE `title` LIKE '%Calais%'

	// SELECT * FROM `keywords` WHERE `docid` IN (SELECT `id` AS `docid` FROM `documents` WHERE `ispoem` = 1) AND `tag` LIKE '%persName%'
	// Look in the documents table, and find all documents that are peoms. Then grab the id, and rename this to docid. Then using this list of docids, fetch all keywords
	// that exist in one of those documents IF that keyword is a persName keyword.

	// SELECT * FROM `documents`, `keywords` WHERE `documents`.`id`=`keywords`.`docid` AND `documents`.`ispoem` = 1 AND `keywords`.`tag` LIKE '%persName%'
	// Here is an easier implementation of the query above.

	//echo 'Here is our query: ' . $query;
	return $query;
}

if (isset($_GET['keyword']) AND strlen($_GET['keyword']) >= 3) {
	$_GET['keyword'] = str_replace('“', '&#x201C;', $_GET['keyword']);
	$_GET['keyword'] = str_replace('”', '&#x201D;', $_GET['keyword']);

	$query = createSearchQuery();

	$numberOfDocuments = mysqli_fetch_assoc(mysqli_query($db_conn, "SELECT COUNT(DISTINCT(`id`)) AS `result` FROM (" . $query . ") AS my_first_query "));
	$numberOfResults = mysqli_fetch_assoc(mysqli_query($db_conn, "SELECT COUNT(*) AS `result` FROM (" . $query . ") AS my_first_query "));

	if ($numberOfResults['result'] == 0) {
		$_GET['full_text_of_document'] = true;
		$query = createSearchQuery();
		$numberOfDocuments = mysqli_fetch_assoc(mysqli_query($db_conn, "SELECT COUNT(DISTINCT(`id`)) AS `result` FROM (" . $query . ") AS my_first_query "));
		$numberOfResults = mysqli_fetch_assoc(mysqli_query($db_conn, "SELECT COUNT(*) AS `result` FROM (" . $query . ") AS my_first_query "));
	}
}

if (isset($_GET['full_text_of_document']) AND $_GET['full_text_of_document'] == true) {
	$full_text_checkmark = 'checked';
}else{
	$full_text_checkmark = '';
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>The Early Ruskin Manuscripts, Advanced Search Results</title>
	<link href="<?php echo r_build_url('styles.css'); ?>" rel="stylesheet" type="text/css">
	<link href="searchStyle.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="<?php echo r_build_url('images/ruskin_icon.png'); ?>">
</head>
<body>
	<?php include("../navigation.inc.php"); ?>
		<form action="" method="get" style="background: white;">
			<fieldset>
				<legend>Advanced Search</legend>
				<div class="searchFields">
					<table>
						<tr>
							<td>
								<input
									class="searchbox"
									type="text"
									name="keyword"
									id="keyword"
									placeholder="Search for a keyword or phrase..."
									onkeyup="fetchAutoComplete(this.value);"
									onblur="hideAutoComplete();"
									mouseover="inFocus();"
									mouseout="outFocus();"
									value="<?php echo isset($_GET['keyword'])?$_GET['keyword']:''; ?>"
									autocomplete="off" />
									<input type="submit" name="submit" value=" Search " /></br>
								<div class="autoCompleteResults" id="autoCompleteResults" mouseover="inFocus();" mouseout="outFocus();"></div>
								<label
									id="full_text_of_document_label"
									><input type="checkbox"
									name="full_text_of_document"
									onclick="toggle();"
									id="full_text_of_document"
									value="true"
									<?php echo $full_text_checkmark;
									?> />Search full text of documents</label><br /><br />
							</td>
							<td>
								<table class="innerTable">
									<tr>
										<td>Search in:</td>
										<td>
											<select name="divtype_document" id="divtype_document">
												<option value="">All documents</option>
												<?php
													$documentTypeDropdown = mysqli_query($db_conn, "SELECT DISTINCT(`divtype`) FROM `documents` WHERE `divtype` != 'webpage';");
													while ($documentTypeRow = mysqli_fetch_assoc($documentTypeDropdown)) {
														$capitalizedDocumentType = strtoupper(substr($documentTypeRow['divtype'], 0, 1)) . substr($documentTypeRow['divtype'], 1);

														echo '<option value="' . $documentTypeRow['divtype'] . '" ';

														if (isset($_GET['divtype_document']) AND $_GET['divtype_document'] == $documentTypeRow['divtype']) {
															echo 'selected';
														}

														$newTagNames = array(
															'Apparatus' => 'Apparatuses',
															'Poem' => 'Poems',
															'Note' => 'Notes',
															'Essay' => 'Essays'
														);

														if (array_key_exists($capitalizedDocumentType, $newTagNames)) {
															$capitalizedDocumentType = $newTagNames[$capitalizedDocumentType];
														}

														echo '>' . $capitalizedDocumentType . '</option>';
													}
												?>
											</select>
										</td>
										<td>
										</td>
									</tr>
									<tr>
										<td>Show:</td>
										<td>
											<select name="tag_keywords" id="tag_keywords" onchange="addSubtype(this.selectedIndex); toggle();">
												<option value="">All keywords</option>
												<?php
													$tagDropdown = mysqli_query($db_conn, "SELECT DISTINCT(`tag`) FROM `keywords` WHERE `tag` != 'ref' AND `tag` != 'cell' AND `tag` != 'date';");
													while ($tagRow = mysqli_fetch_assoc($tagDropdown)) {
														echo '<option value="' . $tagRow['tag'] . '" ';

														if (isset($_GET['tag_keywords']) AND $_GET['tag_keywords'] == $tagRow['tag']) {
															echo 'selected';
														}

														echo '>' . fixTag($tagRow['tag'], true, true) . '</option>';
													}
												?>
											</select>
										</td>
										<td>
											<?php
												$tagDropdown = mysqli_query($db_conn, "SELECT DISTINCT(`tag`) FROM `keywords` WHERE `tag` != 'ref' AND `tag` != 'cell' AND `tag` != 'date';");

												$subtypeCounter = 0;
												$makeAppear = 0;

												while ($tagRow = mysqli_fetch_assoc($tagDropdown)) {
													$subtypeCounter++;

													$subtypeDropdown = mysqli_query($db_conn, "SELECT DISTINCT(`type`) FROM `keywords` WHERE `tag` LIKE '" . mysqli_real_escape_string($db_conn, $tagRow['tag']) . "' AND `type` NOT LIKE '';");

													if (mysqli_num_rows($subtypeDropdown) > 0) {
														echo '<select class="subtype" name="type_keywords' . $subtypeCounter . '" id="type_keywords' . $subtypeCounter . '">
																<option value="">Any kind of ' . fixTag($tagRow['tag'], false, false) . '</option>';

														if (isset($_GET['type_keywords']) AND $_GET['type_keywords'] == '' AND isset($_GET['tag_keywords']) AND $_GET['tag_keywords'] == $tagRow['tag']) {
															$makeAppear = $subtypeCounter;
														}

														while ($subtypeRow = mysqli_fetch_assoc($subtypeDropdown)) {
															echo "\n" . '<option value="' . $subtypeRow['type'] . '" ';

															if (isset($_GET['type_keywords']) AND $_GET['type_keywords'] == $subtypeRow['type']) {
																echo 'selected';
																$makeAppear = $subtypeCounter;
															}

															echo '>' . fixTag($subtypeRow['type'], true, true) . '</option>';
														}

														echo "\n" . '</select>' . "\n";
													}
												}
											?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</fieldset>
		</form>

	<div class="content">


		<script type ="text/javascript">
		document.onload = toggle();
		document.onload = makeAppear();
		var focus = false;

		function toggle() {
			var full_text_of_document = document.getElementsByName('full_text_of_document')[0];
			var tag_keywords_filter = document.getElementsByName('tag_keywords')[0];
			var full_text_of_document_label = document.getElementById('full_text_of_document_label');

			if (tag_keywords_filter.selectedIndex != 0) {
				full_text_of_document.disabled = true;
				full_text_of_document_label.className = "labelDisabled";
			}

			if (full_text_of_document.checked == true) {
				tag_keywords_filter.disabled = true;
				addSubtype();
			}

			if (tag_keywords_filter.selectedIndex == 0 && full_text_of_document.checked == false) {
				full_text_of_document.disabled = false;
				tag_keywords_filter.disabled = false;
				full_text_of_document_label.className = "";
			}

			console.log("Toggle function was called");
		}

		function fetchAutoComplete(searchTerm) {
			var resultBox = document.getElementById("autoCompleteResults");

			if (searchTerm.length > 2) {
				var xhttp = new XMLHttpRequest();

				xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
						if (xhttp.responseText.length > 0) {
							resultBox.innerHTML = xhttp.responseText;
							resultBox.style.display = 'block';
							console.log("Showing results of autocomplete search.");
						} else {
							console.log("Autcomplete search returned no results!");
							resultBox.style.display = 'none';
						}
					}
				};

				xhttp.open("GET", "autocomplete.php?autoComplete=" + searchTerm, true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send();
				console.log("Sent an autocomplete request for term: " + searchTerm);
			} else {
				resultBox.style.display = 'none';
			}
		}

		function inFocus() {
			focus = true;
			console.log("IN FOCUS.");
		}

		function outFocus() {
			focus = false;
			console.log("OUT FOCUS.");
		}

		function hideAutoComplete() {
			var resultBox = document.getElementById("autoCompleteResults");

			setTimeout(function(){
				if (!focus) {
					resultBox.style.display = 'none';
					console.log("HIDE AUTOCOMPLETE.");
				}
			}, 200);
		}

		function setAutoCompleteText(text) {
			var resultBox = document.getElementById("keyword");
			resultBox.value = text;
			console.log("SET AUTOCOMPLETE TEXT.");
		}

		function addSubtype(indexOfElement) {
			var totalSubtypes = <?php echo $subtypeCounter; ?>;

			if (typeof oldId == "undefined") {
				oldId = 0;
			}

			if (oldId != 0) {
				document.getElementsByName('type_keywords')[0].name = 'type_keywords' + oldId;
			}

			for (var i = 1; i <= totalSubtypes; i++) {
				if (document.getElementsByName('type_keywords' + i)[0] != null) {
					document.getElementsByName('type_keywords' + i)[0].style.display = 'none';
					document.getElementsByName('type_keywords' + i)[0].selectedIndex = 0;
				}
			}

			if (document.getElementsByName('type_keywords' + indexOfElement)[0] != null) {
				document.getElementsByName('type_keywords' + indexOfElement)[0].style.display = 'initial';
				document.getElementsByName('type_keywords' + indexOfElement)[0].name = 'type_keywords';
				oldId = indexOfElement;
			} else {
				oldId = 0;
			}
		}

		function makeAppear() {
			var makeAppearNum = <?php echo $makeAppear; ?>;
			console.log('Make this id appear ' + makeAppearNum);
			if (typeof oldId == "undefined") {
				oldId = 0;
			}

			if (typeof document.getElementsByName('type_keywords' + makeAppearNum)[0] != "undefined") {
				document.getElementsByName('type_keywords' + makeAppearNum)[0].style.display = 'initial';
				document.getElementsByName('type_keywords' + makeAppearNum)[0].name = 'type_keywords';
				oldId = makeAppearNum;
			}
		}
		</script>
<?php

if (isset($_GET['keyword'])) {
	// Check to make sure the user searched for a keyword that is at least 3 characters long.
	if (strlen($_GET['keyword']) < 3) {
		die('<br /><span style="font-weight: bold; color: red;">Sorry, please try searching with a keyword that is at least 3 characters long.</span>');
	}

	$resultsPerPage = 5;

	if ($numberOfResults['result'] > $resultsPerPage) {
		if (isset($_GET['page'])) {
			$startPage = ($_GET['page'] - 1) * $resultsPerPage;
		} else {
			$startPage = 0;
		}
		$query .= " LIMIT " . mysqli_real_escape_string($db_conn, $startPage) ."," . mysqli_real_escape_string($db_conn, $resultsPerPage);
	}

	$results = mysqli_query($db_conn, $query);

	echo '<div class="container results-container">
	<h2>Search results for <span class="italic">"' . $_GET['keyword'] . '"</span> :</h2>
	<h3>Found <span style="background-color: #94FF00;padding: 3px;font-weight: bold;">' . $numberOfResults['result'] . '</span> results in <span style="background-color: #94FF00;padding: 3px;font-weight: bold;">' . $numberOfDocuments['result'] . '</span> documents:</h3>
			<div class="divider"></div>';

	while ($row = mysqli_fetch_assoc($results)) {

		if (isset($row['keyboard']) and $row['keyword'] == 'title') {
			$matchingText = $row['content'];
		} elseif (isset($_GET['full_text_of_document'])) {
			$row['text'] = strip_tags($row['text']);

			$matchLocation = stripos($row['text'], $_GET['keyword']);

			if ($matchLocation > 250) {
				$startLocation = strpos($row['text'], ' ', $matchLocation - 250);
			} else {
				$startLocation = 0;
			}

			$row['text'] = substr($row['text'], $startLocation, 500);

			$startingSpace = strpos($row['text'], '>') + 1;
			$endingSpace = strrpos($row['text'], '<');

			$matchingText = '...' . trim(substr($row['text'], $startingSpace, $endingSpace - $startingSpace)) . '...';
			$matchingText = str_ireplace($_GET['keyword'], '<span style="background-color: #FFBF49;padding: 2px;font-weight: bold;">' . $_GET['keyword'] . '</span>', $matchingText);
		} else {
			$row['text'] = strip_tags($row['text']);

			$matchLocation = stripos($row['text'], $row['content']);

			if ($matchLocation > 250) {
				$startLocation = strpos($row['text'], ' ', $matchLocation - 250);
			} else {
				$startLocation = 0;
			}

			$row['text'] = substr($row['text'], $startLocation, 500);

			$startingSpace = strpos($row['text'], '>') + 1;
			$endingSpace = strrpos($row['text'], '<');

			$matchingText = '...' . trim(substr($row['text'], $startingSpace, $endingSpace - $startingSpace)) . '...';
			$matchingText = str_ireplace($row['content'], '<span style="background-color: #FFBF49;padding: 2px;font-weight: bold;">' . $row['content'] . '</span>', $matchingText);
		}

		if (isset($_GET['full_text_of_document'])) {
			echo '<div style="background: #eee;padding: 15px;border-radius: 8px;border: 1px solid #aaa;margin-bottom: 10px;">
			<span style="font-size: 18px;color: #609;"><a href="' . $row['url'] . '">' . $row['title'] . '</a></span><br />
			<span style="margin-top: 10px;margin-bottom: 10px;display: block;">Document: <b>' . $row['divtype'] . '</b></span>
			<span style="font-style: italic;">"' . $matchingText . '"</span><br />
			</div>';
		} else {
			if ($row['type'] != '') {
				echo '<div style="background: #eee;padding: 15px;border-radius: 8px;border: 1px solid #aaa;margin-bottom: 10px;">
				<span style="font-size: 18px;color: #609;"><a href="' . $row['url'] . '">' . $row['title'] . '</a></span><br />
				<span style="margin-top: 10px;display: block;">Document: <b>' . $row['divtype'] . '</b></span>
				<span style="display: block;margin-bottom: 10px;">Keyword: <b>' . fixTag($row['tag'], false, false) . ' (' . fixTag($row['type'], false, false) . ')</b></span>
				<span style="font-style: italic;">"' . $matchingText . '"</span><br />
				</div>';
			} else {
				echo '<div style="background: #eee;padding: 15px;border-radius: 8px;border: 1px solid #aaa;margin-bottom: 10px;">
				<span style="font-size: 18px;color: #609;"><a href="' . $row['url'] . '">' . $row['title'] . '</a></span><br />
				<span style="margin-top: 10px;display: block;">Document: <b>' . $row['divtype'] . '</b></span>
				<span style="display: block;margin-bottom: 10px;">Keyword: <b>' . fixTag($row['tag'], false, false) . '</b></span>
				<span style="font-style: italic;">"' . $matchingText . '"</span><br />
				</div>';
			}
		}

	}

	echo '<div class="searchPages">';

	$totalPages = ceil($numberOfResults['result'] / $resultsPerPage);

	if ($totalPages > 0) {
		$newGET = '';
		foreach ($_GET AS $key => $value) {
			if ($key == 'page') {
				continue;
			}
			$newGET .= $key . '=' . htmlspecialchars($value) . '&';
		}

		if (isset($_GET['page'])) {
			$requestedPage = $_GET['page'];
		} else {
			$requestedPage = 1;
		}

		if ($requestedPage <= 4) {
			for ($currentPage = 1; $currentPage <= 5 AND $currentPage <= $totalPages; $currentPage++) {
				if ($currentPage == $requestedPage) {
					echo '<b><a class="selectedPage" href="?' . $newGET . 'page=' . $currentPage . '">' . $currentPage . '</a></b> ';
				} else {
					echo '<a href="?' . $newGET . 'page=' . $currentPage . '">' . $currentPage . '</a> ';
				}
			}

			if ($totalPages > 5) {
				echo '... <a href="?' . $newGET . 'page=' . $totalPages . '">' . $totalPages . '</a>';
			}
		}

		if ($requestedPage > 4 AND $requestedPage <= $totalPages - 4) {
			echo '<a href="?' . $newGET . 'page=1">1</a> ... ';
			echo '<a href="?' . $newGET . 'page=' . ($requestedPage - 1) . '">' . ($requestedPage - 1) . '</a> ';
			echo '<b><a class="selectedPage" href="?' . $newGET . 'page=' . $requestedPage . '">' . $requestedPage . '</a></b> ';
			echo '<a href="?' . $newGET . 'page=' . ($requestedPage + 1) . '">' . ($requestedPage + 1) . '</a> ';
			echo '... <a href="?' . $newGET . 'page=' . $totalPages . '">' . $totalPages . '</a>';
		}

		if ($requestedPage > $totalPages - 4 AND $totalPages > 5) {
			echo '<a href="?' . $newGET . 'page=1">1</a> ... ';
			for ($currentPage = $totalPages - 4; $currentPage <= $totalPages; $currentPage++) {
				if ($currentPage == $requestedPage) {
					echo '<b><a class="selectedPage" href="?' . $newGET . 'page=' . $currentPage . '">' . $currentPage . '</a></b> ';
				} else {
					echo '<a href="?' . $newGET . 'page=' . $currentPage . '">' . $currentPage . '</a> ';
				}
			}
		}
	}
	echo '</div>
	</div>';

}

?></div>
	</body>
</html>

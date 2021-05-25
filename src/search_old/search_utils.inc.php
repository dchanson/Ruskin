<?php
require_once __DIR__ . '/../header.inc.php';

function showLoginForm()
{
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

    echo '<br><br><input type="password" name="password" placeholder="Password"><br><br>
		<input type="submit" name="submit" value=" Login ">
	</form>
</div>';
}


// Function to construct the URL to the PHP file on the Ruskin website that corresponds to a given XML file.
function construct_url($filename, $divtype, $doctype)
{
    global $entry;

    $filenames = explode('/', $filename);
    $filename = $filenames[count($filenames) - 1];
    echo $filename;

    // Base URL of website.
    $url = r_build_url('');

    // Use the divtype of the file to determine which folder the file is located on the site.
    if ($doctype == 'witness') {
        $url .= 'witnesses/';
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
    $url .= str_replace('xml', 'php', $filename);

    return $url;
}

// Function that checks the response code of a URL on the Ruskin server. This is used for checking if a file exists (200 code) or if a file does not exist on the server (404 code).
function get_response($url)
{
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
function insertKeyword($docid, $tag, $type, $corresp, $content, $keyword)
{
    global $db_conn, $database, $keyword_count, $database_errors, $duplicate_tags;

    $insertkeywords = "INSERT INTO `" . mysqli_real_escape_string($db_conn, $database) . "`.`keywords` (
	`docid`,
	`tag`,
	`type`,
	`corresp`,
	`content`,
	`metaphone`,
	`keyword`
	) VALUES (
		'" . mysqli_real_escape_string($db_conn, $docid) . "',
		'" . mysqli_real_escape_string($db_conn, $tag) . "',
		'" . mysqli_real_escape_string($db_conn, $type) . "',
		'" . mysqli_real_escape_string($db_conn, $corresp) . "',
		'" . mysqli_real_escape_string($db_conn, $content) . "',
		'" . mysqli_real_escape_string($db_conn, metaphone($content)) . "',
		'" . mysqli_real_escape_string($db_conn, $keyword) . "'
	);";

    // Perform the mysql query.
    if (mysqli_query($db_conn, $insertkeywords)) {
        echo "<br /><span style='color: blue; font-weight: bold;'>SUCCESS, added keyword: '" . $content . "'</span>";
        $keyword_count++;
    } else {
        // If there was an error performing the query, output the error.
        if (strpos(mysqli_error($db_conn), 'Duplicate') !== false) {
            //echo "<br /><span style='color: orange; font-weight: bold;'>SKIPPING duplicate keyword in this document: '" . $tag . "' with content '" . $content . "'</span>";
            $duplicate_tags++;
        } else {
            echo "<br /><span style='color: red; font-weight: bold;'>There was an error with the mysql query: " . mysqli_error($db_conn) . "</span>";
            echo "<br /><span style='color: red; font-weight: bold;'>Query: ".$insertkeywords." end query</span>";
            $database_errors++;
        }
    }
}

function rstrpos($haystack, $needle, $offset)
{
    $size = strlen($haystack);
    $pos = strpos(strrev($haystack), $needle, $size - $offset);

    if ($pos === false) {
        return false;
    }

    return $size - $pos;

}

function recreateTables($db_conn)
{

    // Attempt to remove the documents table.
    if (mysqli_query($db_conn, "DROP TABLE IF EXISTS `documents`;")) {
        echo "<br /><br /><span style='color: green; font-weight: bold;'>Successfully removed `documents` table.</span>";
    } else {
        echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error removing the `documents` table: " . mysqli_error($db_conn) . "</span>";
        die();
    }


// Attempt to recreate the documents table.
    if (mysqli_query($db_conn, "
CREATE TABLE IF NOT EXISTS `documents` (
`id` INT(11) NOT NULL AUTO_INCREMENT,
`title` TEXT NOT NULL,
`doctype` TEXT NOT NULL,
`divtype` TEXT NOT NULL,
`subtype` TEXT NOT NULL,
`rhyme` TEXT NOT NULL,
`meter` TEXT NOT NULL,
`ispoem` TINYINT(1) NOT NULL,
`text` MEDIUMTEXT NOT NULL,
`url` TEXT NOT NULL,
PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;")) {
        echo "<br /><br /><span style='color: green; font-weight: bold;'>Successfully recreated `documents` table.</span>";
    } else {
        echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error recreating the `documents` table: " . mysqli_error($db_conn) . "</span>";
        die();
    }

// Attempt to remove the keywords table.
    if (mysqli_query($db_conn, "DROP TABLE IF EXISTS `keywords`;")) {
        echo "<br /><br /><span style='color: green; font-weight: bold;'>Successfully removed `keywords` table.</span>";
    } else {
        echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error removing the `keywords` table: " . mysqli_error($db_conn) . "</span>";
        die();
    }

// Attempt to recreate the keywords table.
    if (mysqli_query($db_conn, "
CREATE TABLE IF NOT EXISTS `keywords` (
`id` INT(11) NOT NULL AUTO_INCREMENT,
`docid` INT(11) NOT NULL,
`tag` VARCHAR(255) NOT NULL,
`type` VARCHAR(255) NOT NULL,
`corresp` TEXT NOT NULL,
`content` TEXT NOT NULL,
`metaphone` TEXT NOT NULL,
`keyword` TEXT NOT NULL,
PRIMARY KEY  (`id`),
UNIQUE KEY `docid` (`docid`,`tag`,`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;")) {
        echo "<br /><br /><span style='color: green; font-weight: bold;'>Successfully recreated `keywords` table.</span>";
    } else {
        echo "<br /><br /><span style='color: red; font-weight: bold;'>There was an error recreating the `keywords` table: " . mysqli_error($db_conn) . "</span>";
        die();
    }


    echo "<br /><br />";

}

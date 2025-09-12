<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="http://js.arcgis.com/3.14/esri/css/esri.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="http://js.arcgis.com/3.14/"></script>
    <link rel = "stylesheet" href="style.css">


</head>
<header>
    <div id="header" style="display: block; background-color: #3B5786;">
        <div class="rightArea">
            <div class="logo">
                <a target="_blank" style="cursor: default;">
                    <img alt="Map Tour Logo" class="headerLogoImg" src="http://i446.photobucket.com/albums/qq183/coryclapp/ruskin_logo_zpsz32unfpj.jpg">
                </a>
            </div>
        </div>
        <div class="textArea" style="width: 829px;">
            <h1 class="title" tabindex="0" style="margin-top: 40px;">Ruskins Journey</h1>
            <h2 class="subtitle" tabindex="-1" style="height: 32px;"></h2>
        </div>
    </div>
</header>

<body>
<div id="wrap">

    <div id="main" class="clearfix">

    </div>

</div>

<div id="footer">
<div class="toggle"><i class="fa fa-arrow-up"></i></div>
    <div class= "timeline">
	<?php
$mysqli = new mysqli("localhost", "root", "", "maps");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM `location`";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["name"], $row["date"]);
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

?>

	</div>
</div>


<div id="mapDiv"></div>
<script src="script.js"></script>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
	$("#footer").click(function(){
		$(this).toggleClass("opened")
	})
</script>
</body>
</html>

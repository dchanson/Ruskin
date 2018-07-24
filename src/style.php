<?php
require_once "header.inc.php";

$directory = r_get_config()['SCSS_DIRECTORY'];

scss_server::serveFrom($directory);

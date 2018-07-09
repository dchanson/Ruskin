<?php
$paths = array('./', '../', '../../');
$root_path = './';

foreach ($paths  as $path){
  $filename = $path.'config.json';
  
  if (file_exists($filename)){
    $root_path = $path;
    break;
  };
}
$contents = file_get_contents($root_path."config.json") or die("unable to load config.json");
$json = json_decode($contents);

// MySQL server credentials.
$servername = $json->DB->HOST;
$username = $json->DB->USERNAME;
$password = $json->DB->PASSWORD;
$database = $json->DB->DATABASE_NAME;
$xml_folder = $json->DB->XML_FOLDER;

// Login credentials for the update tool.
$updateToolPassword = $json->DB->UPDATE_TOOL_PASSWORD;
?>

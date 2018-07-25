<?php
if(!isset($_REQUEST['open']))die;

$open = $_REQUEST['open'];
$open = preg_replace("/(\.\.\/)/","", $open);
$open = preg_replace("/\.xml$/", ".php", $open);

$path = dirname(__DIR__);

if(strpos($open, $path) != 0){
  die("You can not open external links.");
}

$open = str_replace($path, "../gen", $open);

require $open;
<?php
require_once 'header.inc.php';

if(!isset($_REQUEST['open']))die;

$open = $_REQUEST['open'];
$open = preg_replace("/(\.\.\/)/","", $open);
$open = preg_replace("/\.xml$/", ".php", $open);

$path = dirname(__DIR__)."/_xml/";

if(strpos($open, $path) != 0){
  die("You can not open external links.");
}

$open = str_replace($path, "", $open);
$open = str_replace("_Completed/", "", $open);
$open = str_replace("_In_Process/", "", $open);

$open = r_build_url($open);

include $open;

// echo $open;
die;
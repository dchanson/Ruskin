<?php

require_once 'vendor/autoload.php';

if(!defined('RUSKIN_CONFIG_PATH')){
    define('RUSKIN_CONFIG_PATH', 'config.json.php');
}

$path = __DIR__.'/'.RUSKIN_CONFIG_PATH;
if(file_exists($path)){
    require_once $path;
}else{
	die('Config file could not be loaded');
}

if(!function_exists('r_build_url')){
	function r_build_url($path){
		global $r_config;

		return $r_config['BASE'] . '/' . $path;
	}
}

if(!function_exists('r_build_search_url')){
	function r_build_search_url($path){
		global $r_config;

		return $r_config['SEARCH_HOST'] . '/' . $path;
	}
}

if(!function_exists('r_get_base')){
	function r_get_base(){
		global $r_config;
		return $r_config['BASE'];
	}
}

if(!function_exists('r_get_config')){
  function r_get_config(){
    global $r_config;
    return $r_config;
  }
}

if(!function_exists('r_server_base')){
  function r_server_base(){
    if(!defined('ROOT_PATH')){
      die('root path not set. r_server_base() can not be obtained.');
    }
    return ROOT_PATH;
  }
}

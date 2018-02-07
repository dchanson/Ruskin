<?php

if(!defined('RUSKIN_CONFIG_PATH')){
    define('RUSKIN_CONFIG_PATH', 'config.json');
}
$r_config = null;

if(file_exists(RUSKIN_CONFIG_PATH)){
    $json = file_get_contents(RUSKIN_CONFIG_PATH);
    $r_config = json_decode($json, true);
}else{
	$r_config = [
		'BASE'=> 'http://english.selu.edu/humanitiesonline/ruskin/'
	];
}

if(!function_exists('r_build_url')){
	function r_build_url($path){
		global $r_config;
		return "";
	}
}

if(!function_exists('r_get_base')){
	function r_get_base(){
		global $r_config;
		return $r_config['BASE'];
	}
}
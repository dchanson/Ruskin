<?php
define('ROOT_PATH', './');
require_once('./header.inc.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever">
   
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset&#x003D;UTF-8">
      <title>ERM Homepage Introduction</title><?php require_once(ROOT_PATH."layout_includes/site_top.inc.php"); ?>
        <link href="<?php echo r_build_url("style.php?p=site_styles.scss"); ?>" rel="stylesheet" type="text/css">
      <style>
      
      .main>iframe {
        width: 100%;
        height: 100%;
        border: none;
      }
      </style>
      
      <script>
      $(function(){
        $('.main>iframe').css('height', window.innerHeight)
      })
      </script>
   </head>
   
   <?php require_once(ROOT_PATH."layout_includes/navigation.inc.php"); ?>
   
   
   <div class="main" id="">
     
      <iframe src="<?php echo r_build_search_url("search?".$_SERVER['QUERY_STRING']); ?>">Loading...</iframe>
      
      
   </div>
   
   
   
</html>
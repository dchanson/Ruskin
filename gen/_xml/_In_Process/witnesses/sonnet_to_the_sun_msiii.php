<?php
$paths = array('./', '../', '../../');
$root_path = './';

foreach ($paths  as $path){
$filename = $path.'header.inc.php';

if (file_exists($filename)){
$root_path = $path;
break;
};
}
define('ROOT_PATH', $root_path);
require_once($root_path."header.inc.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

define("FILE_NAME", <<<EOT
"Sonnet to the Sun"
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229173.jpg msiii/1229174.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"Sonnet to the Sun"</span></div>
   <div class="poem" id="">
      
      <h1 class="page-title">SONNET TO THE SUN</h1>
      
      <div class="lg-stanza">
         <span class="l">SUN let us see thy beams arise</span><br/>
         <span class="l">A happy prospect to our eyes</span><br/>
         <div id="1229174" class="pb"></div>
         <div class="pageNum-top-center"><span class="space" style="padding-left:5.6em"> </span>41</div><br/>
         <span class="l">Sun now deign to shed around</span><br/>
         <span class="l">A warmth upon the warming ground</span><br/>
         <span class="l">Sun now let us see thy beams
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
         <span class="l">Gild the last expiring gleams</span><br/>
         <span class="l">Array the clouds in clothes of gold</span><br/>
         <span class="l">Shape them in many a curious mould</span><br/>
         <span class="l">This is all I have to say</span><br/>
         <span class="l">Sun now now thou may<div 
          class="subst-del s-subst s-del" >s</div><div 
          class="s-subst s-add s-overwrite s-inline">y</div>st awa<div 
              class="add-below" 
              style="left:NaNem"><div class="full"></div></div>
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
         </div>
      
      
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
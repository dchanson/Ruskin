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
“Lochleven”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229184.jpg msiii/1229185.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Lochleven”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:2.4em"> </span>lochleven</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.4em"> </span><span class="placeName-LOCHLEVENCAS"><b><span class="caps">L</span><span class="smallcaps">ochleven</span></b></span> <b>is your castle there</b><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lochleven_glosses_contextual#ISYOURCASTLETHERE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">when tis so long when cried aloud</span><br/>
            <span class="l">was boat is near when <span class="persName-MQS">queen of scots</span></span><br/>
            <span class="l">stepped in the boat and rowed from<div 
              class="add-below" 
              style="left:13.6em">s<span class="unclear-faded-CWB">h</span><span class="gap" style="padding-left:0.4em"> </span>ar</div> shore<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lochleven_glosses_contextual#QUEENSBOATGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">when waves were gliding
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">oars were sliding</span><br/>
            <div id="1229185v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>63</div><br/>                  
            <span class="l">oer the wide expanse of you</span><br/>
            <span class="l">now fish and waves are gliding</span><br/>
            <span class="l">and fishing boats are sliding</span><br/>
            <span class="l">but before twas all as quiet
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">as the day</span><br/>
            <span class="l">when we may say</span><br/>
            <span class="l">not a leaf is stirring now</span><br/>
            </div>
         </div>
   </div><br/><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
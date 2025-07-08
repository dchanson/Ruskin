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
“Ragland Castle”
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Ragland Castle”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">“Ragland Castle”</h1>
         
         <div class="lg-stanza">
            <span class="l">O <span class="placeName-RAGLAN">Ragland</span>, beauty as you are,</span><br/>
            <span class="l">Ruined arches, towers and views,</span><br/>
            <span class="l">Not ruined views but fine ones,</span><br/>
            <span class="l">Your Gothic arches and your falling towers,</span><br/>
            <span class="l">With keystones, moats and drawbridges,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Your mice‐house moss and burnt up grass</span><br/>
            <span class="l">For mice to pull and line their falling dwellings,</span><br/>
            <span class="l">Your spiral towers and holes for mice to live in,</span><br/>
            <span class="l">Your dungeons, splits<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#SPLITGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> and drawbridges,</span><br/>
            <span class="l">Battlements, courts, and lodges,—
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">So, <span class="placeName-RAGLAN">Ragland</span>, as I have described you,</span><br/>
            <span class="l">I must take leave of you.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
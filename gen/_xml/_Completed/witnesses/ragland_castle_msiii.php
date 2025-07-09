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
msiii/1229184.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Ragland Castle”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:3.6em"> </span>ragland castle</div>
         
         <div class="lg-stanza">
            
            <span class="l"><span class="caps-doubleletter">O</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_textual#DOUBLELETTER" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> <span class="smallcaps"><span class="placeName-RAGLAN">ragland</span></span> beauty as you <div 
              class="add-above" 
              style="left:10.0em"><span class="metamark-unknown">×</span></div>ar<span class="overwriting">e</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#CROSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>ruined arches towers and views</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>not ruined views but fine ones</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your gothic arches and your falling towers.</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>with keystones moats and drawbridges<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#MOATS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your mice‐house moss and burnt up grass<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#MOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>for mice to pull and line their falling dwellings</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your spiral towers<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#SPIRALTOWERS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> and holes for mice to live in</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your dungeons splits<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#SPLITGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> and drawbridges</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>battlements courts and lodges
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>so <span class="placeName-RAGLAN">ragland</span> as I have described you</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>I must take leave of you</span><br/>
            </div>
         </div>
   </div><br/><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
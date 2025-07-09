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
“The Needless Alarm”
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Needless Alarm”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">T</span><span class="smallcaps">he</span> <span class="caps">N</span><span class="smallcaps">eedless</span> <span class="caps">A</span><span class="smallcaps">larm</span></h1>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">A</span><span class="smallcaps">mong</span> the rushes lived a mouse</span><br/>
            <span class="l">with a pretty little house</span><br/>
            <span class="l">made of rushes tall and high</span><br/>
            <span class="l">that to the skies were heard to sigh</span><br/>
            <span class="l">while one night while she was sleeping
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">comes a dog that then was peeping</span><br/>
            <span class="l">and had found her out in spite</span><br/>
            <span class="l">of her good wall for then his sight</span><br/>
            <span class="l">was better than our mouses</span><br/>
            <span class="l"><span class="space" style="padding-left:10.0em"> </span>so<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_needless_alarm_glosses_textual#COLLINGWOODSSOGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">she was obliged to yield to foe</span><br/>
            <span class="l">when frightened was the dog just then</span><br/>
            <span class="l">at the scratching of a hen</span><br/>
            <span class="l">so of<span class="supplied-WGC">[f]</span> he ran and little mouse</span><br/>
            <span class="l">was left in safety with her house.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
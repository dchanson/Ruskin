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
msi/1229146.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Needless Alarm”</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div class="half"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:1.6em"> </span><span class="del-erasure">The needless alarm</span><span class="add-overwriting"><span class="space" style="padding-left:0.4em"> </span>poem IIII</span><br/><span class="space" style="padding-left:1.6em"> </span>the needless alarm</div>
         <div class="half"></div>
         <br/>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.4em"> </span><div 
          class="subst-del s-subst s-del" ><span class="unclear-CWB">am</span></div><div 
          class="s-subst s-add s-overwrite s-inline"><span class="caps">A</span><span class="smallcaps">m</span></div><span class="smallcaps">ong</span> the rushes lived a mouse</span><br/>
            <span class="l">with a pretty little house</span><br/>
            <span class="l">made of rushes tall and high</span><br/>
            <span class="l">that to the skies were heard to<span class="runover" style="left:10.8em"><span class="g-runover">|</span>sigh<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_needless_alarm_glosses_textual#RUNOVER" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span></span><br/>
            <span class="l">while one night while she was
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div><span class="runover" style="left:10.4em"><span class="g-runover">|</span>sleeping<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_needless_alarm_glosses_textual#RUNOVER" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span></span><br/>
            <span class="l">comes a dog that then was peeping</span><br/>
            <div id="1229146r" class="pb"></div>
            <div class="pageNum-top-right">103</div><br/>
            <span class="l">and had found her out in spite</span><br/>
            <span class="l">of her good wall for then<span class="runover" style="left:3.2em">his sight</span></span><br/>
            <span class="l">was better than our mouses<span class="runover" style="left:2.8em">so</span></span><br/>
            <span class="l">she was obliged to yield to
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:10.0em">foe</span></span><br/>
            <span class="l">when frightened was the<span class="runover" style="left:2.0em">dog just then</span></span><br/>
            <span class="l">at the scratching of a hen</span><br/>
            <span class="l">so of he ran and little mous<div 
              class="add-above" 
              style="left:10.4em">e</div></span><br/>
            <span class="l">was left in safety with<span class="runover" style="left:2.4em">her house</span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
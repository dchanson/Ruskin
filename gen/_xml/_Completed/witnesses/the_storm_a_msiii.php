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
“The Storm” [Version A]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229188.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Storm” [Version A]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="1229188r" class="pb"></div>
         <div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>69</div><br/>
         
         <div class="title"><span class="space" style="padding-left:2.8em"> </span>The storm</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">S</span><span class="smallcaps">ee</span> the collecting clouds upon the hill</span><br/>
            <span class="l">See the collecting roughness of the rill</span><br/>
            <span class="l">Hark to the wind it howls among the<br/><span class="space" style="padding-left:12.8em"> </span>trees</span><br/>
            <span class="l">And the high rising wind the pigs<div 
              class="add-above" 
              style="left:12.0em">x</div> do see</span><br/>
            <span class="l">See from the skies the shower of<br/><span class="space" style="padding-left:10.0em"> </span>pelting snow
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And hear how much the sheep and cattle<br/><span class="space" style="padding-left:13.2em"> </span>low</span><br/>
            <span class="l">From the dark cloud a flash of lightning<br/><span class="space" style="padding-left:13.6em"> </span>plays</span><br/>
            <span class="l">And down upon the ground a woman<br/><span class="space" style="padding-left:12.4em"> </span>lies</span><br/>
            <span class="l">Struck by the lightnings flash the<br/><span class="space" style="padding-left:3.2em"> </span>thunder follows fast</span><br/>
            <span class="l">With fury from the skies the light<br/><span class="space" style="padding-left:2.0em"> </span><span class="add"><span class="metamark-unclear">bad</span></span><span class="space" style="padding-left:0.8em"> </span>nings cast<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_storm_a_glosses_textual#BAD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            </div>
         </div>
   </div><div class="half"></div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
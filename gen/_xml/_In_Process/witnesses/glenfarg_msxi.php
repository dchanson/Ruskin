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
"Title of Work"
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"Title of Work"</span></div>
   <div class="witness">
      <div class="poem" id="">
         <span class="head" id="">GLEN OF GLENFARG</span>
         
         <div class="lg-stanza">
            <span class="l">P<span class="smallcaps">apa</span>, how pretty those icicles are</span><br/>
            <span class="l">That are seen so near that are seen so far</span><br/>
            <span class="l">Those dropping waters that come from the rocks</span><br/>
            <span class="l">And many a hole <div 
          class="subst-del s-subst s-del" >a</div><div 
          class="s-subst s-add s-inline">l</div>ike the haunt of a fox</span><br/>
            <span class="l">That silvery stream that runs babbling along
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <div id="1229869" class="pb"></div>
            <span class="l"><span class="doubleletter-fill"><span class="caps">M</span></span>aking a murmuring dancing song</span><br/>
            <span class="l">Tho<div 
          class="subst-del s-subst s-del" >u</div><div 
          class="s-subst s-add s-inline">s</div>e trees that stand waving upon the rocks side</span><br/>
            <span class="l">And men that like spectres among them glide</span><br/>
            <span class="l">And waterfalls that are heard from far</span><br/>
            
            <span class="l">And come in sight when very near
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">And the water wheel that turns slowly round</span><br/>
            <span class="l"><span class="doubleletter-fill"><span class="caps">G</span></span>rinding the corn that requires to bee ground</span><br/>
            <span class="l">And mountains at a distance seen</span><br/>
            <span class="l">And rivers winding through the plain</span><br/>
            <span class="l">And quarries with their craggy stones
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">And t<div 
          class="subst-del s-subst s-del" >y</div><div 
          class="s-subst s-add s-inline">h</div>e wind among them moans</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
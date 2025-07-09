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
150. "There is a solemn silence on the scene" Witness
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>150. "There is a solemn silence on the scene" Witness</span></div>
   <div class="essay" id="">
      
      <h1 class="page-title">150. "There is a solemn silence on the scene" Witness</h1>
      
      <div class="p">150. “There is a solemn silence on the scene,” <span class="date-1831-12">December 1831</span> to <span class="date-1832-01">January 1832</span>, 
                    MS VIII. Previously unpublished.</div>
      
      
      <div class="p">See no. 148 for dating.</div>
      </div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">There is a solemn silence on the scene</h1>
         
         <div class="lg-stanza">
            <span class="l">There is a solemn silence on the scene</span><br/>
            <span class="l">Scarce broken by the mountain breezes sigh</span><br/>
            <span class="l">From <div 
          class="subst-del s-subst s-del" >???????</div><div 
          class="s-subst s-add s-inline">deep ravine</div><span class="del">hold</span> come forth & sailing by</span><br/>
            <span class="l">The distant ocean rolling on serene</span><br/>
            <span class="l">Its smiling waters gilded by the beam
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">That glows upon the bosom of the tide</span><br/>
            <span class="l">Boundless and mighty as its <div 
          class="subst-del s-subst s-del" >ripples</div><div 
          class="s-subst s-add s-inline">billows</div> ride</span><br/>
            <span class="l">Scattered with gold by the departing <div 
          class="subst-del s-subst s-del" >beam</div><div 
          class="s-subst s-add s-inline">gleam</div></span><br/>
            <span class="l"><div 
          class="subst-del s-subst s-del" >Rolling their</div><div 
          class="s-subst s-add s-inline">In thousand</div> little circles <div 
          class="subst-del s-subst s-del" >to the shore</div><div 
          class="s-subst s-add s-inline">as they sweep</div></span><br/>
            <span class="l">To roll them on its sands to break and die 
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">The sun that sinks <div 
          class="subst-del s-subst s-del" >below them hath ???</div><div 
          class="s-subst s-add s-inline">to ocean pillowed sleep</div> </span><br/>
            <span class="l"><div 
          class="subst-del s-subst s-del" >????? of a ???? sky</div><div 
          class="s-subst s-add s-inline">Bids slowly and adieu to earth and sky</div></span><br/>
            <span class="l">The dews of evening this departure weep </span><br/>
            <span class="l">And night her head sinks down upon the deep</span><br/>
            </div>
         </div>
   </div>
   <div class="essay" id="">
      
      <div class="p">L. 12, 13 written above heavily canceled lines.</div>
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
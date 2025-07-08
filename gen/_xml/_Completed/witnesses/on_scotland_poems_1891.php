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
“On Scotland” [“Farewell to Scotland”]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“On Scotland” [“Farewell to Scotland”]</span></div>
   <div class="witness">
      <div class="poem" id="">             
         
         <h1 class="page-title"><span class="caps">F</span><span class="smallcaps">arewell to</span> <span class="placeName-SCOTLAND"><span class="caps">S</span><span class="smallcaps">cotland</span></span></h1>
         
         <div class="lg-stanza">
            <span class="l">O what a change from pretty <span class="placeName-PERTH">Perth</span> so near,</span><br/>
            <span class="l">To dreary heather, and to streams so clear,—</span><br/>
            <span class="l">To rocks, and stones! Upon the dreary way</span><br/>
            <span class="l">No sun is shining, as on sprightly May.</span><br/>
            <span class="l">Again it changes to the winding <span class="geogName-EARN">Earn</span>,—
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">ʼTis shallow water, but it has no fern;</span><br/>
            <span class="l">But it is precious for its shining drops;</span><br/>
            <span class="l">And sometimes from the <span class="geogName-EARN">river</span> a fish pops.</span><br/>
            <span class="l">Again it changes to a steep, steep hill,</span><br/>
            <span class="l">And it is cold, do anything you will.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">In short, such changes <span class="placeName-SCOTLAND">Scotland</span> does now take,</span><br/>
            <span class="l">That I canʼt tell them, and<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_scotland_glosses_contextual_#COLLINGWOODSENDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l"><span class="space" style="padding-left:11.2em"> </span><i>an end I make</i></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
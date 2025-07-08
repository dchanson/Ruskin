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
“COLOGNE.” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_poems_1891" target="_self"></a><br/></div>
   <div class="fileName"><span>“COLOGNE.” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">COLOGNE</span>.</h1>
         
         <div class="lg-stanza">
            <span class="l">T<span class="smallcaps">HE</span> noon was past, the sun was low,</span><br/> 
            <span class="l">Yet still we felt his arid glow;</span><br/> 
            <span class="l">From the red sand, reflected glare</span><br/>
            <span class="l">Deadened the breeze, and fired the air.</span><br/> 
            <span class="l">The open sky was misty grey;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">The clouds in mighty masses lay,</span><br/> 
            <span class="l">That, heaped on the horizon high,</span><br/>
            <span class="l">Marked <span class="geogName-ALPS">Alpine</span> outlines on the sky.</span><br/> 
            <span class="l">Long had we toiled to gain a brow<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#GAINABROWGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">On which we stood triumphant now,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/> 
            <div id="" class="pb"></div>
            <span class="l">While the white mist was certain sign</span><br/>
            <span class="l">Where took his course the mighty <span class="geogName-RHINE">Rhine</span>.</span><br/> 
            <span class="l">Hills in the distant haze were seen,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#SIEBENGEBIRGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/> 
            <span class="l">And wide expanse of plain between,</span><br/> 
            <span class="l">Whose desert length, without a tree,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/> 
            <span class="l">Was stretched in vast monotony.</span><br/> 
            <span class="l">We drove adown that hill amain;</span><br/> 
            <span class="l">We past along the shadeless plain;</span><br/> 
            <span class="l">Rested we now where, uncontrolled,</span><br/> 
            <span class="l">The <span class="geogName-RHINE">Rhine</span> his bursting billows rolled;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/> 
            <span class="l">And ever, ever fierce and free</span><br/> 
            <span class="l">Bore broadly onward to the sea.</span><br/> 
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
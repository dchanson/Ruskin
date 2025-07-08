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
“Via Mala” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Via Mala” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">VIA MALA</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/via_mala_poem_glosses_contextual#VIAMALAPASSINGTHEALPSCLUSTER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l">O<span class="smallcaps">ur</span> path is on the precipice!</span><br/>
            <span class="l">How far, far down those waters hiss</span><br/> 
            <span class="l">That like an avalanche below</span><br/>
            <span class="l">Whirl on a stream of foamy snow!<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/via_mala_poem_glosses_contextual#VIAMALAPRECIPICE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/> 
            <span class="l">Iʼve seen the <span class="geogName-RHINE">Rhine</span> when in his pride,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/> 
            <span class="l">All unresisted, undefied,</span><br/>
            <span class="l">Rolled smoothly on his aged tide.</span><br/>
            <span class="l">Iʼve seen the <span class="geogName-RHINE">Rhine</span> with younger wave</span><br/>
            <span class="l">Oʼer every obstacle to rave.</span><br/>
            <span class="l">I see the <span class="geogName-RHINE">Rhine</span> in his native wild
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Is still a mighty mountain child,—</span><br/>
            <span class="l">How rocked upon his tortuous bed!</span><br/>
            <span class="l">Came up, from the abyss of dread,</span><br/>
            <span class="l">The deafening roar with softened sound,—</span><br/>
            <span class="l">Murmuring up from the profound
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Of distance dark, where light of day</span><br/>
            <span class="l">Pierced not the thick, damp, twilight grey,</span><br/>
            <span class="l">To the precipices sharp and sheer</span><br/>
            <span class="l">Whence the white foam looked up so clear.</span><br/>
            <span class="l">On looking oʼer the barrier
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">From that rock‐shelf, that hung so high</span><br/>
            <span class="l">ʼTwixt the far depth and the blue sky,</span><br/>
            <span class="l">Above, beside, around there stood</span><br/>
            <span class="l">The difficult crags in order rude</span><br/>
            <span class="l">Soaring to the thin, cold upper air,—
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Looked forth unnaturally clear,</span><br/>
            <span class="l">Jagged with many a piny spear.</span><br/>
            <span class="l">And here and there a patch of snow</span><br/>
            <span class="l">Contrasted strangely with the glow</span><br/>
            <span class="l">Of the red, rough, mighty cliffs, and shed
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">A strange, cold light through the yawning dread</span><br/>
            <span class="l">Of the abyssy gulph below.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
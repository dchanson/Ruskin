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
“Calais” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_poems_1891" target="_self"></a><br/></div>
   <div class="fileName"><span>“Calais” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">CALAIS</span>.</h1>
         
         <div class="lg-stanza">
            <span class="l">T<span class="smallcaps">HE</span> sands are in the sunlight sleeping,</span><br/>
            <span class="l">[The tide upon the bar is leaping;]<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_poem_glosses_textual#CALAISPOEMLINE2" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Again, again for evermore</span><br/>
            <span class="l">Haste the light curlings to the shore,</span><br/>
            <div id="" class="pb"></div><span class="l">And yet advance and yet retreat
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">5</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">On playful childhoodʼs daring feet,</span><br/>
            <span class="l">That seeks within its sandy cell</span><br/>
            <span class="l">The pebble bright, or purple shell.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_glosses_contextual#CALAISPOEMSHELL" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Far in its clear expanse, lay wide</span><br/>
            <span class="l">Unruffledly that ocean tide,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">10</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Stretching away where paler grew</span><br/>
            <span class="l">The heavenʼs bright unclouded blue.</span><br/>
            <span class="l">And, far away in distance dying,</span><br/>
            <span class="l">Old <span class="placeName-ENGLAND">England</span>ʼs cliffy coast was lying;</span><br/>
            <span class="l">And beautiful as summer cloud
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">15</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">By the low sun empurpled proud.</span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">Strange, that a space from shore to shore</span><br/>
            <span class="l">So soon, so easily passed oʼer,</span><br/>
            <span class="l">Should yet a wide distinction place</span><br/>
            <span class="l">ʼTwixt man and man, ʼtwixt race and race!
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">20</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Sudden and marked the change you find,—</span><br/>
            <span class="l">Religion, language, even mind;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_glosses_contextual#CALAISPOEMDISTINCTION" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">That you might think that narrow span</span><br/>
            <span class="l">Marked the varieties of man.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
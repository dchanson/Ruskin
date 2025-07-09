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
“The Descent” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Descent” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">THE DESCENT</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_poem_glosses_textual#THEDESCENTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l">A <span class="smallcaps">FEARFUL</span> mountain wall, whose sweep<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_glosses_contextual#THEDESCENTPASSINGTHEALPSCLUSTER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">At one sheer plunge, six thousand feet,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_glosses_contextual#SIXTHOUSANDFEETGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">Stoops to the valley; on each side</span><br/>
            <span class="l">Is tossed a very ocean tide,</span><br/>
            <span class="l">Of surgy, snowy mountain crest;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And all along that hillʼs steep breast</span><br/>
            <span class="l">With snake‐like coilings, wound our way<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_glosses_contextual#WOUNDOURWAYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">On narrow shelves of rock, that lay</span><br/>
            <span class="l">Almost oʼerhanging, and so sheer,</span><br/>
            <span class="l">ʼTwas terror to look down, so near
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">To such a precipice of fear.</span><br/>
            <div id="" class="pb"></div>
            <span class="l">And far before, and far behind,</span><br/>
            <span class="l">We tracked our dread wayʼs mazy wind,</span><br/>
            <span class="l">Continuous and descending, low,</span><br/>
            <span class="l">At length looked up to the white snow
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">From the deep valley, it would seem</span><br/>
            <span class="l">Incredible, a very dream,</span><br/>
            <span class="l">That we had scaled a ridge so high,</span><br/>
            <span class="l">Or climbed so near the domy sky;</span><br/>
            <span class="l">And we wound on, beside the course
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Of a roaring torrentʼs flashing force;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_glosses_contextual#SCALEDARIDGESOHIGH" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l">And many a fall of minor stream</span><br/>
            <span class="l">Down the smooth rooks came thundering,</span><br/>
            <span class="l">Or in white sheets of gauzy foam</span><br/>
            <span class="l">Mingled with archy iris shone
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Among the forest pines.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
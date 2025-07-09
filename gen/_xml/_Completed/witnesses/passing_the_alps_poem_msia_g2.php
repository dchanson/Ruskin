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
“Passing the Alps” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msia_g2/12180625.jpg msia_g2/12180626.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msia_g2" target="_self"></a><br/></div>
   <div class="fileName"><span>“Passing the Alps” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="12180625" class="pb"></div>
         
         <h1 class="page-title"><span class="title-poem-JRPASSINGTHEALPSPOEM">Passing the <span class="geogName-ALPS">Alps</span></span>.</h1>
         
         <div class="lg-stanza">
            <span class="l">To day we pass the <span class="geogName-ALPS">Alps</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/passing_the_alps_poem_glosses_contextual#PASSTHEALPSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> to day</span><br/>
            <span class="l">High oer the barrier winds our way
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">325</a></div></span><br/>
            <span class="l">The barrier of boundless length<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/passing_the_alps_poem_glosses_contextual#BARRIERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">The Queen of nations,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/passing_the_alps_poem_glosses_contextual#QUEENOFNATIONSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> in her strength</span><br/>
            <span class="l">Considered its recesses lone
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Beseeming bulwark for her throne</span><br/>
            <span class="l">Until her Carthaginian foe
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">330</a></div></span><br/>
            <span class="l">Had soiled the yet unsullied snow</span><br/>
            <span class="l">The eagle drove from her retreat</span><br/>
            <span class="l">And woke the echoes from their sleep
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">That neer had answered before</span><br/>
            <span class="l">Save to the Avalanches roar.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/passing_the_alps_poem_glosses_contextual#CARTHAGINIANFOEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">335</a></div></span><br/>
            <span class="l">Methinks upon the mountain side</span><br/>
            <span class="l">I see the billows of that tide</span><br/>
            <span class="l">Of men and horses headlong driven
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <div id="12180626" class="pb"></div>
            <span class="l">As clouds before the blast of heaven</span><br/>
            <span class="l">That ever change their hurrying form
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">340</a></div></span><br/>
            <span class="l">In dark foreboding of the storm</span><br/>
            <span class="l">When the low suns last light is shed</span><br/>
            <span class="l">In glowing streaks of swarthy red
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">And from his cave with fitful swell</span><br/>
            <span class="l">Wakes the wild tempest sounding shell
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">345</a></div></span><br/>
            <span class="l">So see the plumes in dark array</span><br/>
            <span class="l">Roll on their yet untrodden way</span><br/>
            <span class="l">Unbroken, yet with dreadful sweep
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Mark you that stormy changeful deep</span><br/>
            <span class="l">Wave after wave is eddying on
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">350</a></div></span><br/>
            <span class="l">And crested casque, and morion,</span><br/>
            <span class="l">Flash frequent, as the lightning flies</span><br/>
            <span class="l">Among the armies of the skies.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">But fiercer storm is gathering now</span><br/>
            <span class="l">Than ever broke on <span class="geogName-ALPS">Alpine</span> brow
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">355</a></div></span><br/>
            <span class="l">And wild shall the confusion be</span><br/>
            <span class="l">The strife of that tremendous sea,</span><br/>
            <span class="l">When bursting from the <span class="geogName-ALPS">Alpine</span> chain,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">It meets the storm on Cannæs plain.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/passing_the_alps_poem_glosses_contextual#CANNAESPLAINGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span></span><br/>
            </div> 
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“Lago di Como” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Lago di Como” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="title-poem-JRLAGODICOMO"><span class="caps">LAGO DI COMO</span></span></h1>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">I</span><span class="smallcaps">T</span> was a little peaceful bay<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_glosses_contextual#PEACEFULBAY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Beneath the precipices grey,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_glosses_contextual#PRECIPICES" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">Lay deep and blue and calm, but clear</span><br/>
            <span class="l">As is the sapphire; and you saw</span><br/>
            <div id="" class="pb"></div>
            <span class="l">The precipices sharp and sheer,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And the white cloudsʼ careering war,</span><br/>
            <span class="l">And the blue sky, and the high hills</span><br/>
            <span class="l">ʼNeath the cold waters where they slept</span><br/>
            <span class="l">Seemed fed by thousand mountain rills</span><br/>
            <span class="l">Flowed upward from the crystal depth.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">And all along that quiet bay<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_poem_glosses_textual#QUIETBAY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">A range of little shipping lay,</span><br/>
            <span class="l">With their red flags drooped downward right,</span><br/>
            <span class="l">And sheltered by their awnings white</span><br/>
            <span class="l">From the high sunʼs red, scorching look,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">That oʼer the living waters shook</span><br/>
            <span class="l">A blaze of hot and swarthy glow.</span><br/>
            <span class="l">When we had launchèd from below</span><br/>
            <span class="l">The shade of the tall cliffs, and came</span><br/>
            <span class="l">Where <span class="geogName-">Como</span> rolled his breast of flame,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Down southward winding far away,</span><br/>
            <span class="l">The olivesʼ tints of gentle grey</span><br/>
            <span class="l">Stooped to his borders, from between</span><br/>
            <span class="l">The hillsʼ uncultivated green.</span><br/>
            <span class="l">And orange‐groves him girded round,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Blossoming oʼer him fragrantly;</span><br/>
            <span class="l">And in the sleep of his profound</span><br/>
            <span class="l">White villages shone silently.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_poem_glosses_textual#WHITEVILLAGES" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">And from our prow the rippleʼs flash</span><br/>
            <span class="l">Threw forth its little sparkles paly;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">The light sound of the oarsʼ dash</span><br/>
            <span class="l">Came dancing on the waters gaily.</span><br/>
            <span class="l">There was blue above, and blue below,</span><br/>
            <span class="l">And the gleam of the eternal snow.</span><br/>
            <span class="l">Forth from the fastnesses it came
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Of the high <span class="geogName-ALPS">Alps</span>ʼ retiring chain.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_poem_glosses_textual#FASTNESSES" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l">And all along the shore, whereʼer</span><br/>
            <span class="l">The storm‐winds wont to chafe the wave,</span><br/>
            <span class="l">The crucifix is shrined there;</span><br/>
            <span class="l">That <span class="persName-scriptural-JESUSCHRIST">Christ</span> may hear the passioned prayer
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">—May hear, may pity, and may save!</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
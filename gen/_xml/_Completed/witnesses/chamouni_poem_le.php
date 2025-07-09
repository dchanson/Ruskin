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
“Chamouni” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Chamouni” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">The wreathing clouds are fleeting fast,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/chamouni_glosses_contextual#MWREATHINGCLOUDSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Deep shade upon the hills they cast,</span><br/>
            <span class="l">While through their openings ever show</span><br/>
            <span class="l">Enormous pyramids of snow;</span><br/>
            <span class="l">Scarce can you tell in middle air
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">If cloud or mountain rises there,</span><br/>
            <span class="l">Yet may you mark the glittering light</span><br/>
            <span class="l">That glances from the glaciered height;</span><br/>
            <span class="l">And you may mark the shades that sever</span><br/>
            <span class="l">The throne where winter sits for ever,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">The avalancheʼs thunder rolling,</span><br/>
            <span class="l">No summer heat his reign controlling;</span><br/>
            <span class="l">The gloomy tyrant in his pride</span><br/>
            <span class="l">Spreads his dominion far and wide,</span><br/>
            <span class="l">Till, set with many an icy gem,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/> 
            <span class="l">Rises his cliffy diadem.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/chamouni_glosses_contextual#MCLIFFYDIADEMGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            </div>
         <div id="" class="pb"></div> 
         
         <div class="lg-stanza">
            <span class="l">Above a steepy crag we wound</span><br/>
            <span class="l">Where gloomy <span class="name--PINE">pine</span>s his forehead crowned;</span><br/>
            <span class="l">And heard we, with a sullen swell,</span><br/>
            <span class="l">The turbid <span class="geogName-ARVE">Arve</span> dash through the dell;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">You might have thought it, moaning by,</span><br/>
            <span class="l">Wail for the loss of liberty;</span><br/>
            <span class="l">For high the rocks whose mighty screen</span><br/>
            <span class="l">Confined the narrow pass between,</span><br/>
            <span class="l">And many a mass of <span class="name--GRANITE">granite</span> grey
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Opposed the torrentʼs forceful way;</span><br/>
            <span class="l">So headlong rushed the lightning tide,</span><br/>
            <span class="l">No pass was there for aught beside;</span><br/>
            <span class="l">And we high oʼer those cliffs so sheer</span><br/>
            <span class="l">Must climb the mountain barrier,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">Until unfolded to the eye</span><br/>
            <span class="l">The fruitful fields of <span class="placeName-CHAMOUNI">Chamouni</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/chamouni_glosses_contextual#STEEPYCRAGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">It lay before us, as a child</span><br/>
            <span class="l">Of beauty in the desert wild;</span><br/>
            <span class="l">Full strange it seemed that thing so fair,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">So fairy‐like, could harbour there;</span><br/>
            <span class="l">For fields of bending corn there grew</span><br/>
            <span class="l">Close to the glacierʼs wintry blue;</span><br/>
            <span class="l">And saw we the same sun‐ray shine</span><br/>
            <span class="l">On pasture gay and mountain pine,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">Whose dark and spiry forests rose</span><br/>
            <span class="l">Till mingled with eternal snows</span><br/>
            <span class="l">That climbed into the clear blue sky</span><br/>
            <span class="l">In peaked, impending majesty.</span><br/>
            <span class="l">ʼTis passing strange that such a place
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">In an its native loveliness</span><br/>
            <span class="l">Should, pent within those wilds so lone,</span><br/>
            <span class="l">For many ages pass unknown—</span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">Unknown save by a simple few<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/chamouni_poem_glosses_textual#STANZABREAKGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Who their own valley only knew,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">Nor dared the mountain ridge that bound</span><br/>
            <span class="l">That lovely vale with terrors round;</span><br/>
            <span class="l">That lived secluded from mankind,</span><br/>
            <span class="l">Contented yet in heart and mind;</span><br/>
            <span class="l">That lived within that world alone,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">A world of beauty of their own.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/chamouni_glosses_contextual#UNKNOWNCHAMOUNIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l">And now <span class="placeName-SWITZERLAND">Helvetia</span>ʼs cliffy reign</span><br/>
            <span class="l">Contains not in her <span class="geogName-ALPS">Alpine</span> chain,</span><br/>
            <span class="l">In valley deep, on mountain high,</span><br/>
            <span class="l">A race like those of <span class="placeName-CHAMOUNI">Chamouni</span>;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <div id="" class="pb"></div>
            <span class="l">For they have loved, at dawn of day,</span><br/>
            <span class="l">To trace the chamoisʼ fearful way,</span><br/>
            <span class="l">Or on the toppling shelf of snow</span><br/>
            <span class="l">With crags above and clouds below;</span><br/>
            <span class="l">Or on the peak whose spiry head
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
            <span class="l">Is beetling oʼer abysses dread,</span><br/>
            <span class="l">Where place for foot, and grasp for hand,</span><br/>
            <span class="l">Is all the hunter can command;</span><br/>
            <span class="l">Or on the glacierʼs rigid wave</span><br/>
            <span class="l">Where he may find a chasmy grave;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/chamouni_glosses_contextual#RACEOFHUNTERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
            <span class="l">Returning with his spoils at even</span><br/>
            <span class="l">Ere the red sun hath left the heaven.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
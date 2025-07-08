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
“Lille” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX18v-19r.jpg msix/MSIX19v-20r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Lille” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX18v" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l">Oh red the blushing east awoke</span><br/>
            <span class="l">And bright the morn on <span class="placeName-CASSEL">Cassel</span> broke</span><br/>
            <span class="l">Along the green hillside we flew,</span><br/>
            <span class="l">Flashed the clear sunshine in the dew</span><br/>
            <span class="l">That on the clustering herbage hung
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">That to the tangled copse‐wood clung</span><br/>
            <span class="l">That shot like stars through every shade</span><br/>
            <span class="l">And glanced on every wildwood glade.</span><br/>
            <span class="l">At length by many a wind descending</span><br/>
            <span class="l">That ever to the plain were bending
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Farther, and farther still we pressed</span><br/>
            <span class="l">From <span class="placeName-CASSEL">Cassel</span>s insulated<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#INSULATEDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> crest</span><br/>
            <span class="l">That back retiring fainter still,</span><br/>
            <div id="MSIX19r" class="pb"></div>
            <span class="l">Showed the rich outlines of its hill,</span><br/>
            <span class="l">And faded in the purple haze,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">That spoke the coming noontide blaze.</span><br/>
            <span class="l">That noontide blaze delayed not long</span><br/>
            <span class="l">On Tournays towʼrs<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#TOURNAYSTOWERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> twas fierce and strong</span><br/>
            <span class="l">And ere we gained the middle way</span><br/>
            <span class="l">The glow was like an Afric day
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Full upon <span class="placeName-LILLE">Lille</span>s high ramparts round<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#LILLESHIGHRAMPARTSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">On massive wall and moated mound</span><br/>
            <span class="l">Shot the fierce sun his glaring ray</span><br/>
            <span class="l">As bent we on our burning way</span><br/>
            <span class="l">Till past the narrow drawbridge length
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">The massive gates portcullised strength</span><br/>
            <span class="l">And moat whose waves found steepy shore<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#LILLESTEEPYSHORE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l">Where forward high the bastion bore<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#LILLEHUGE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span></span><br/>
            <span class="l">And where the sentinels were set</span><br/>
            <span class="l">High on the dizzy parapet
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">Till the last portals echoes woke,</span><br/>
            <span class="l">And <span class="placeName-LILLE">Lille</span> upon us sudden broke</span><br/>
            <span class="l">Giving to view another scene,</span><br/>
            <span class="l">So clear, so noble, so serene,</span><br/>
            <div id="MSIX19v" class="pb"></div>
            <span class="l">Twould seem enchantments varied hue
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">On palace street and avenue</span><br/>
            <span class="l">Those ancient piles rose huge and high,</span><br/>
            <span class="l">In rich irregularity</span><br/>
            <span class="l">Colossal form and figure fair,</span><br/>
            <span class="l">Seemed moving, breathing, living there,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">The vaulted arch where sunlight pure</span><br/>
            <span class="l">Might never pierce the deep obscure</span><br/>
            <span class="l">Where broadly barred, the ancient door,</span><br/>
            <span class="l">Was with rich carving imaged oer</span><br/>
            <span class="l">The bending Gothic gable roof
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">Of past magnificence gave proof</span><br/>
            <span class="l">The modern windows formal square,</span><br/>
            <span class="l">With Saxon arch was mingled there</span><br/>
            <span class="l">Whose stern recesses dark and deep</span><br/>
            <span class="l">The figured iron stanchions<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#LILLESTANCHIONS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> keep.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_poem_glosses_textual#LILLEDRAWINGSPACE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="space" style="padding-left:2.0em"> </span>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
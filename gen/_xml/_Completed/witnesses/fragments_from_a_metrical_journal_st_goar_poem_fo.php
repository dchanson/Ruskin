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
“Fragments from a Metrical Journal: St. Goar” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
fo/fragments_2.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_fo" target="_self"></a><br/></div>
   <div class="fileName"><span>“Fragments from a Metrical Journal: St. Goar” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><i>St. Goar</i>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARWGCGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l">Past a rock with frowning front,</span><br/>
            <span class="l">Wrinkled by the tempestʼs brunt,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARLORELEIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">By the <span class="geogName-RHINE">Rhine</span> we downward bore</span><br/>
            <span class="l">Upon the village of <span class="placeName-STGOAR">St. Goar</span>.</span><br/>
            <span class="l">Bosomed deep among the hills,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Here old <span class="geogName-RHINE">Rhine</span> his current stills,</span><br/>
            <span class="l">Loitering the banks between,</span><br/>
            <span class="l">As if, enamoured of the scene,</span><br/>
            <span class="l">He had forgot his onward way</span><br/>
            <span class="l">For a live‐long summer day.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Grim the crags through whose dark cleft,</span><br/>
            <span class="l">Behind, he hath a passage reft;</span><br/>
            <span class="l">While, gaunt as gorge of hunted boar,</span><br/>
            <span class="l">Dark yawns the foaming pass before,</span><br/>
            <span class="l">Where the tormented waters rage,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Like demons in their <span class="placeName-fictional-STYX">Stygian</span> cage,</span><br/>
            <span class="l">In giddy eddies whirling round</span><br/>
            <span class="l">With a sullen choking sound;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARWHIRLPOOLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">Or flinging far the scattering spray,</span><br/>
            <span class="l">Oʼer the peaked rocks that bar his way.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <div id="" class="pb"></div>
            <span class="l">—No marvel that the spell‐bound <span class="geogName-RHINE">Rhine</span>,</span><br/>
            <span class="l">Like giant overcome with wine,</span><br/>
            <span class="l">Should <i>here</i> relax his angry frown,</span><br/>
            <span class="l">And, soothed to slumber, lay him down</span><br/>
            <span class="l">Amid the vine‐clad banks, that lave
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/> 
            <span class="l">Their tresses in his placid wave.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
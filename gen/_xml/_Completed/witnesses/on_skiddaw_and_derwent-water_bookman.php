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
>“On Skiddaw and Derwentwater”
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>>“On Skiddaw and Derwentwater”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l"><span class="geogName-SKIDDAW"><span class="caps">S</span>kiddaw</span>! upon thy cliffs the sun shines bright;</span><br/> 
            <span class="l">Yet only for a moment; then gives place</span><br/> 
            <span class="l">Unto a playful cloud, which on thy brow</span><br/>
            <span class="l">Sports wantonly, soon melting into air;</span><br/>
            <span class="l">But shadowing first thy side of broken green,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And making more intense the sunʼs return.</span><br/>
            <span class="l">Then, in the morning, on thy head, those clouds</span><br/>
            <span class="l">Rest, as upon a couch, and give fair scope</span><br/> 
            <span class="l">To fancyʼs play: and airy fortresses,</span><br/>
            <span class="l">Towers, banners, spears, and battlements appear,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Chasing each other off;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#CHASEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> and in their turn</span><br/>
            <span class="l">Are vanquished too, dissolving like the mould</span><br/>
            <span class="l">Thatʼs trampled by the foot of urchin boy;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#SKIDDAWCOMEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">And, rolling down, though once so firmly bound</span><br/>
            <span class="l">By roots tenacious, while the upward spoiler
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Climbs on to invade the hidden eagleʼs nest.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#STRAGGLERGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l"><span class="geogName-SKIDDAW"><span class="caps">S</span>kiddaw</span>! majestic, giant‐natureʼs work,</span><br/>
            <span class="l">Though less than <span class="geogName-ANDES">Andes</span>, or the <span class="geogName-ALPS">Alpine</span> heights,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_contextual#HIGHERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Yet pyramids<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_contextual#PYRAMIDSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> to thee are nothing, they at best</span><br/> 
            <span class="l">Are but gigantic tombs,—the work of art.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Proud nature makes no tombs, save where the snow</span><br/>
            <span class="l">The fleecy locks of winter fall around,</span><br/>
            <span class="l">A <span class="caps">M</span>ausoleum for the careless swain;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#WHITETOMBGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span><br/>
            <span class="l">Or where the ocean swallows navies down,</span><br/>
            <span class="l">Or yawning earthquake covers cities vast,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Shroudless, engulfed, without a knell or tear;</span><br/>
            <span class="l">Or where another <span class="placeName-HERCULANEUM">Herculaneum</span> falls;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_contextual#HERCULANEUMGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">Or the great day of fire the general grave.</span><br/>
            <span class="l">These are the tombs she makes, and buries all</span><br/>
            <span class="l">Beneath them, but the soul; that . . . scorns the dust.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#HAPPYDAYGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">Now <span class="geogName-DERWENTWATER"><span class="caps">D</span>erwentwater</span> comes,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#COMESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span> a looking‐glass</span><br/>
            <span class="l">Wherein reflected are the mountainʼs heights;</span><br/>
            <span class="l">For thouʼrt a mirror framed in rocks and woods.</span><br/>
            <span class="l">Upon thee, seeming mounts arise, and trees,</span><br/>
            <span class="l">And seeming rivulets, that charm the eye;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">All on thee painted by a master hand,</span><br/>
            <span class="l">Which not a critic can well criticise.</span><br/>
            <span class="l">But to disturb thee oft bluff <span class="persName-fictional-AEOLUS">Eolus</span></span><br/>
            <span class="l">Descends upon thy heath‐top with his breath;</span><br/>
            <span class="l">Thy polished surface is a boy at play,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">Who labours at the snow to make a man,</span><br/>
            <span class="l">And when heʼs made, he strikes it into ruin.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#MADEITGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span></span><br/>
            <span class="l">So when thouʼst made a picture, thou dost play</span><br/>
            <span class="l">At tearing it to pieces. Trees do first</span><br/>
            <span class="l">Tremble as if a monstrous heart of <span class="name--OAK">oak</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">Were but an <span class="name--ASPEN">aspen</span> leaf, and then, as if</span><br/>
            <span class="l">It were a cobweb in the tempest.</span><br/>
            <span class="l">Thus like <span class="persName-fictional-PENELOPE">Penelope</span> thou weavʼst a web.</span><br/>
            <span class="l">And then thou dost undo it; thouʼrt like her</span><br/>
            <span class="l">Because thouʼrt fair and full of labour too.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_contextual#PENELOPEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            </div>
         
         
         <span class="space" style="padding-left:24.8em"> </span>
         
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
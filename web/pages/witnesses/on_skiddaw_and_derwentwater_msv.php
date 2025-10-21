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
"Title of Work"
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="http://erm.selu.edu/">Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>"Title of Work"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="title-poem-JRONSKIDDAWANDDERWENTWATERMSV">On Skiddaw and Derwent Water</span></h1>
         
         <div class="lg-stanza">
            <span class="l">Ruskin was a certainly a poet.</span><br/>
            <span class="l">Even his early work did show it.</span><br/>
            
         </div>
         <span class="l"><span class="geogName-SKIDDAW"></span>upon thy heights the sun shines</span><br/>
         <span class="l">bright</span><br/>
         <span class="l">But only for a moment then gives place
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
         <span class="l">Unto a playful cloud which on thy brow</span><br/>
         <span class="l">Sports wantonly then floats away in air</span><br/>
         
         <span class="l">Throwing its shadow on thy towering height</span><br/>
         <span class="l">And darkening for a moment they green side &#x005B;ride?&#x005D;</span><br/>
         <span class="l">But adds unto its beauty as it makes
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
         <span class="l">The sun more bright when it again appears.</span><br/>
         <span class="l">Then in the morning on thy brow those</span><br/>
         <span class="l">clouds</span><br/>
         <span class="l">Rest as upon a couch and give fair scope</span><br/>
         <span class="l">For fancys play and airy fortresses <span class="gloss-inline">
          <a href="http://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses2#FORTRESSESGLOSS" target="_blank" class="inactive">
          
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
         <span class="l">And towers battlements and all appear</span><br/>
         <span class="l">Chasing each other off and in their turn</span><br/>
         <span class="l">Are chased by the others. But enough</span><br/>
         <span class="l">I've treated of the clouds <span class="gloss-inline">
          <a href="http://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses2#PAUSEPERIOD" target="_blank" class="inactive">
          
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> Now <span class="geogName-SKIDDAW">Skiddaw</span> come</span><br/>
         <span class="l">Noble and grand and beauteous clothed with
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
         <span class="l">green</span><br/>
         <span class="l">And yet but scantily. And in some parts</span><br/>
         <span class="l">A bare terrific cliff precipitate</span><br/>
         <span class="l">Descends with only here and there a bush</span><br/>
         <span class="l">A straggler with its roots fixed in the stone
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
         <span class="l">And bare a scraggy as befits the soil.</span><br/>
         <span class="l"><span class="geogName-SKIDDAW">Skiddaw</span> majestic giant natures work</span><br/>
         <span class="l">Lower than <span class="geogName-ALPS">Alps</span> or <span class="geogName-ANDES">Andes</span>. Pyrenee&#x003D;s</span><br/>
         <span class="l">Are all much higher But those works of art</span><br/>
         <span class="l">Those giant works of art <span class="gloss-inline">
          <a href="http://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses#PYRAMIDSGLOSS" target="_blank" class="inactive">
          
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> with thee compared
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
         
         <span class="l">Sink into nothing. All that art can do</span><br/>
         <span class="l">Is nothing beside thee. The touch of man</span><br/>
         
         <span class="l">Raised pigmy mountains but gigantic tombs</span><br/>
         <span class="l">The touch of nature raised the mountains brow</span><br/>
         <span class="l">But made no tombs at all save where the snow
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
         <span class="l">The fleecy locks of winter fall around</span><br/>
         <span class="l">And form a frail memorial for the sain</span><br/>
         <span class="l">Who wanders far from home and meets his</span><br/>
         <span class="l">death</span><br/>
         <span class="l">Amidst the cold of Winter. But no more
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
         <span class="l">On this sad subject on this happy day <span class="gloss-inline">
          <a href="http://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses#HAPPYDAYGLOSS" target="_blank" class="inactive">
          
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
         <span class="l">Now <span class="geogName-DERWENTWATER">Derwent Water</span> come A looking glass</span><br/>
         <span class="l">Wherein reflected are the mountains height</span><br/>
         <span class="l">As in a mirror framed in rocks and woods.</span><br/>
         <span class="l">So upon thee there is a seeming mount
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
         <span class="l">A seeming tree a seming rivulet</span><br/>
         <span class="l">All upon thee are painted by a hand</span><br/>
         <span class="l">Which not a critic can well criticise</span><br/>
         <span class="l">But to disturb thee oft bluf <span class="persName-fictional-AEOLUS">Eolus</span></span><br/>
         <span class="l">Descends upon the mountains With his
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
         <span class="l">breath</span><br/>
         <span class="l">Thy polished surface is a boy at play</span><br/>
         <span class="l">Who labours at the snow to make a man</span><br/>
         <span class="l">And when he&#x003D;s made it knocks it down</span><br/>
         <span class="l">again
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
         <span class="l">So when thou&#x003D;st made a picture thou dost</span><br/>
         <span class="l">play</span><br/>
         
         <span class="l">At tearing it to pieces Trees do first</span><br/>
         <span class="l">Tremble as if a monstrous heart of Oak</span><br/>
         <span class="l">Were but an aspen leaf and then as if
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
         <span class="l">It were a cobweb in the tempests blow</span><br/>
         <span class="l">Thus like <span class="persName-fictional-PENELOPE">Penelope</span> thou weavst a web</span><br/>
         <span class="l">And then thou dost undo it. Thou&#x003D;rt like her</span><br/>
         <span class="l">Because thourt fair and oft deceiving too</span><br/>
         <span class="l">Sweet <span class="geogName-DERWENTWATER">Derwent</span> on thy winding shore
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
         <span class="l">Beside thy mountain forests hoar</span><br/>
         <span class="l">There would I like to wander still</span><br/>
         <span class="l">And drink from out the rippling rill</span><br/>
         <span class="l">Which from thy mountain head doth fall</span><br/>
         <span class="l">And mingles with the eagles call
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
         <span class="l">While on Helvellyn thunder roars</span><br/>
         <span class="l">Re-echoed by all Derwents shores</span><br/>
         <span class="l">And where the lightning flashes still</span><br/>
         <span class="l">Reflected in the mountain rill.</span><br/>
         
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
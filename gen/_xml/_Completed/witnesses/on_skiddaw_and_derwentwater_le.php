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
“Title of Work”
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url(""); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>&#x201C;Title of Work&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="page-title"><span class="caps">ON</span> <span class="geogName-SKIDDAW"><span class="caps">SKIDDAW</span></span> <span class="caps">AND</span> <span class="geogName-DERWENTWATER"><span class="caps">DERWENT WATER</span></span></div>
         
         <div class="lg-stanza">
            <span class="l"><span class="geogName-SKIDDAW">S</span>! upon thy cliffs the sun shines bright;</span><br/>
            <span class="l">But only for a moment: then gives place</span><br/>
            <span class="l">Unto a playful cloud, which on thy brow</span><br/>
            <span class="l">Sports wantonly,&#x2014;then floats away in air,</span><br/>
            <span class="l">Throwing its shadow on thy green side,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">But adds unto its beauty, as it makes</span><br/>
            <span class="l">The sun more birht when it again appears.</span><br/>
            <span class="l">Thus in the morning on thy brow those clouds</span><br/>
            <span class="l">Rest as upon a couch, and give fair scope</span><br/>
            <span class="l">For fancy&#x02BC;s play, and airy fortresses,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">And towers, battlements, and all appear</span><br/>
            <span class="l">Chasing each other off, and in their turn</span><br/>
            <span class="l">Are chased by the others.  But enough</span><br/>
            <span class="l">I've treated of the clouds.  Now <span class="geogName-SKIDDAW">Skiddaw</span> come</span><br/>
            <span class="l">Noble, and grand, and beauteous, clothed with green,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">And yet but scantily.  And in some parts</span><br/>
            <span class="l">A bare, terrifc cliff precipitate</span><br/>
            <span class="l">Descends, with only here and there a bush,</span><br/>
            <span class="l">A straggler with its roots fixed in the stone</span><br/>
            <span class="l">And bare and scraggy as befits the soil.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l"><span class="geogName-SKIDDAW">Skiddaw</span>, majestic !  Giant Nature&#x02BC;s work !</span><br/>
            <span class="l">Lower than <span class="geogName-ALPS">Alps</span> or <span class="geogName-ANDES">Andes</span>. <span class="geogName-PYRENEES">Pyrenees</span></span><br/>
            <span class="l">Are all much higher. But those works of Art,</span><br/>
            <span class="l">Those giant works of Art, with thee compared,</span><br/>
            <span class="l">Sink into nothing; all that Art can do
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Is nothing beside thee.  The touch of man</span><br/>
            <span class="l">Raised pigmy mountains, but gigantic tombs,</span><br/>
            <span class="l">The touch of Nature raised the mountain's brow,</span><br/>
            <span class="l">But made no tombs at all, save where the snow&#x2014;</span><br/>
            <span class="l">The fleecy locks of winter fall around
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">And form a frail memorial for the swain</span><br/>
            <span class="l">Who wanders far from home, and meets his death</span><br/>
            <span class="l">Amidst the cold of winter.  But no more</span><br/>
            <span class="l">On this sad subject on this happy day</span><br/>
            
            <span class="l">Now <span class="geogName-DERWENTWATER">Derwent Water</span> come !&#x2014;a looking&#x2010;glass
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Wherein reflected are the mountain's heights,</span><br/>
            <span class="l">As in a mirror, framed in rocks and woods;</span><br/>
            <span class="l">So upon thee there is a seeming mount,</span><br/>
            <span class="l">A seeming tree, a seeming rivulet</span><br/>
            <span class="l">All upon thee are painted by a hand
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">Which not a critic can well criticise.</span><br/>
            <span class="l">But to disturb thee oft, bluff <span class="persName-fictional-AEOLUS">Eolus</span></span><br/>
            <span class="l">Descends upon the mountains, with his breath,</span><br/>
            <span class="l">Thy polished surface is a boy at play</span><br/>
            <span class="l">Who labours at the snow to make a man,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">And when he's made it, knocks it down again ; &#x2014;</span><br/>
            <span class="l">So when thou&#x02BC;st made a picture thou dost play</span><br/>
            <span class="l">At tearing it to pieces.  Trees do first</span><br/>
            <span class="l">Tremble, as if a monstrous heart of oak</span><br/>
            <span class="l">Were but an aspen leaf; and then as if
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">It were a cobweb in the tempest&#x02BC;s blow.</span><br/>
            <span class="l">Thus like <span class="persName-fictional-PENELOPE">Penelope</span> thou weav&#x02BC;st a web</span><br/>
            <span class="l">And then thou dost undo it.  Thou&#x02BC;rt like her</span><br/>
            <span class="l">Because thou&#x02BC;rt fair, and oft deceiving too.</span><br/>
            
            <span class="l">Sweet <span class="geogName-DERWENTWATER">Derwent</span>, on thy winding shore,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">Beside thy mountain forests boar,</span><br/>
            <span class="l">There would I like to wander still,</span><br/>
            <span class="l">And drink from out the rippling rill,</span><br/>
            <span class="l">Which from thy mountain&#x2010;head doth</span><br/>
            <span class="l">And mingles with the eagles&#x02BC; call ;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l">While on <span class="geogName-HELVELLYN">Helvellyn&#x02BC;s</span> thunder roars,</span><br/>
            <span class="l">ReȐechoed by all <span class="geogName-DERWENTWATER">Derwent&#x02BC;s</span> shores ;</span><br/>
            <span class="l">And where the lightning flashes still,</span><br/>
            <span class="l">Reflected in the mountain rill</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
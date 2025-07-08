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
“St. Goar” [St Goar] [section title] ["St. Goar"] [poem] "St. Goar" [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX42v-43r.jpg msix/MSIX42v-43r.jpg msix/MSIX43v-44r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>[St Goar] [section title]</span></div><div id="MSIX35R" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="title-composite-JRSTGOARCOMP">[<span class="smallcaps">ST GOAR</span>]</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>["St. Goar"] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <span class="space" style="padding-left:4.4em"> </span>
         
         <div class="lg-stanza">
            <span class="l">We<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> past a rock, whose bare front ever,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARWGCGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l">Had borne the brunt of wind, & weather,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARLORELEIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And downwards by the <span class="placeName-RHINE">Rhine</span> we bore,</span><br/>
            <span class="l">Upon the village of <span class="placeName-STGOAR">St Goar</span>,</span><br/>
            <span class="l">That mid the hills embosomed lay,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Where the <span class="placeName-RHINE">Rhine</span> checked his onward way,</span><br/>
            <span class="l">And lay the mighty crags between,</span><br/>
            <span class="l">As if, enamoured of the scene,</span><br/>
            <span class="l">He loved not on his way to wind,</span><br/>
            <span class="l">And leave a scene so fair behind
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <div id="MSIX43r" class="pb"></div>
            <span class="l">For grim the chasm, through whose cleft,</span><br/>
            <span class="l">The waters had a passage reft,</span><br/>
            <span class="l">And gaunt the gorge that yawned before</span><br/>
            <span class="l">Through which, emerging, they must roar,</span><br/>
            <span class="l">No marvel they should love to rest,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">And peaceful spread their placid breast,</span><br/>
            <span class="l">Before, in fury driving dread,</span><br/>
            <span class="l">Tormented on their rocky bed,</span><br/>
            <span class="l">Or flinging far their scattering spray,</span><br/>
            <span class="l">Oʼer the peaked rocks that barred their way,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Wave upon wave at random tossed,</span><br/>
            <span class="l">Or in the giddy whirlpool lost,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARWHIRLPOOLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">And now are undisturbed sleeping,</span><br/>
            <span class="l">No more on rocks those billows beating,</span><br/>
            <span class="l">But lightly laughing laps the tide,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Where stoop the vineyards to his side.</span><br/>
            </div>
         <span class="space" style="padding-left:2.0em"> </span>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>"St. Goar" [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <span class="space" style="padding-left:3.6em"> </span>
         
         <div class="p"><span class="placeName-STGOAR">St. Goar</span> is the least and sweetest place<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_prose_glosses_textual#STGOARPROSEBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span>
            <br/>on all the <span class="placeName-RHINE">Rhine</span>. There is <span class="placeName-GODESBERG">Godesberg</span>, with
                    <br/>its hilltop crested with <span class="placeName-GODESBURG">ruins</span>, there is 
                    <br/><span class="placeName-ANDERNACH">Andernacht</span> with its venerable remains 
                    <br/>of antiquity, there is <span class="placeName-EHRENBREITSTEIN">Ehrenbreitstein,</span> upon
                    <br/>whose cliff never traitor stood, looking out,
                    <br/>far away over its rich sea of champaign, yet
                    <br/>there is nothing like <span class="placeName-STGOAR">St Goar</span>. It has a 
                    <br/>lone hill beauty, the little scene around
                    <br/>it, is exceeding small, but it has a mod‐
                    <br/>est secluded loveliness. You look on <span class="placeName-ANDERNACH">An‐
                    <br/>dernacht</span> with veneration, on <span class="placeName-EHRENBREITSTEIN">Ehrenbreit‐
                <div id="MSIX44r" class="pb"></div>
               <br/>stein</span> with awe, but on <span class="placeName-STGOAR">St. Goar</span> with
                    <br/>love.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARLOVEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></div>
         
         <div class="p">There is a voice in all nature; List to
                    <br/>the rave of the mad sea; Speaks it not
                    <br/>eloquently, does it not tell of its green,
                    <br/>weedy caverns, and its coral towers, and
                    <br/>and<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_prose_glosses_textual#STGOARAND" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span> the high hills and shelly vallies, far,
                    <br/>far beneath its cold blue.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARSKULLSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> List to the
                    <br/>song of the summer breeze, does it not
                    <br/>tell of the blue heavens, and the white
                    <br/>clouds, and other climes, and other sea‐
                    <br/>sons, and spicy gales and myrtle bow‐
                    <br/>ers, and sweet things far away. How
                    <br/>sweetly the <span class="geogName-RHINE">Rhine</span> sings at <span class="placeName-STGOAR">St Goar</span>,
                    <br/>and it tells of the arched grottoes of the
                    <br/>glacier, and the crags of the far <span class="geogName-ALPS">Alps</span>, &
                    <br/>how it joys to dash against tall rock
                    <br/>once more.
                </div>
         <span class="space" style="padding-left:1.2em"> </span>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
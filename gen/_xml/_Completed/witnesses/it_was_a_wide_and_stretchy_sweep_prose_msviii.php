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
“It was a wide stretchy sweep” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII61v-62r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“It was a wide stretchy sweep” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII62r" class="pb"></div>
         <div class="pageNum-top-right">62</div><br/>
         
         <div class="p">It was a wide stretchy sweep of lovely blue champaign,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_prose_glosses_textual#PLACEMENT" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> richly<br/>
                   cultivated, and beautifully wooded, and bounded by magnificent<br/>
                   mountain ranges, here fading away, faint and blue & cloudlike<br/>
                   toward the south,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#SOUTH" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> there distinct and near and lofty, with the<br/>
                   green cultivation climbing up their broad flanks. I had read, that<br/>
                   the snowy summit of the <span class="geogName-MONTTITLIS">Mont Titlis</span>, was visible from <span class="placeName-STRASBOURG">Strasburg</span>,<br/>
                   the consequence of which marvellous information was, that I metamor‐<br/>
                   phosed every cloud I saw into a mountain, strained my eyes<br/>
                   with looking for that which was out of sight,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#TITLIS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> and <span class="unclear-smudged-">had</span> at last,<br/>
                   very nearly argued myself into a conviction, that blue hills<br/>
                   were white <span class="unclear-smudges-">ones</span> until our entrance into the narrow dell above<br/>
                   mentioned, precluded all farther observations upon the clouds.—<br/></div>
         
         <div class="p">A swiss Cottage is a celebrated thing, celebrated far and wide—<br/>
                   it has modelled the Tivolian villas of—<span class="placeName-HIGHTGATE">Highgate</span> and <span class="placeName-HAMPSTEAD">Hamp<br/>
                       stead</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#HIGHGATE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> the mock waterfalls <span class="del-strikethrough">of</span> and crocodile stools of the Coliseum<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#COLISEUM" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span><br/>
                   have extended its fame, and much it delighted me when first<br/>
                   the wide projecting wooden roof and carved galleries and external<br/>
                   stairs looked out to greet us from among the dark pines— What<br/>
                   a host of associations and recollections tumbled in upon me.<br/>
                   Mountains avalanches, glaciers, cottages, <span class="persName-HANNIBAL">Hannibal</span>, vinegar,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#VINEGAR" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> <span class="persName-fictional_person-WT">Tell</span>, <span class="geogName-ALPS">Alps</span><br/>
                   apples, tyrants and crossbows, came crowding into my brain jumbled<br/>
                   together in most admired disorder, I thought of nothing connected<br/>
                   the whole day</div>  
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“The Source of Arveron” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Source of Arveron” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <h1 class="page-title"><span class="title-essay-JRSOURCEOFTHEARVERON">The Source of Arveron</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/source_of_the_arveron_prose_glosses_textual#SOURCEOFTHEARVERONTITLE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="p">W<span class="smallcaps">hat</span> a delicious thing is a reverie, that total abstraction from all 
                    <br/>things present—that stilly, dreamy, waking vision that places you where 
                    <br/>you are not, that carries you where you wish to be, that presents the past 
                    <br/>to your recollection, and the future to your fancy, so forcibly, so impressively, 
                    <br/>so lovelily, throwing a glow on every circumstance, and a halo on every 
                    <br/>feature, giving the vivid, the magic colouring of the dream to the defined 
                    <br/>and distinct recollection of the reality. It is thus that I look back upon 
                    <br/>our first walk at <span class="placeName-CHAMOUNI">Chamouni</span>, to the Source of the <span class="geogName-ARVERON">Arveron</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/source_of_the_arveron_prose_glosses_contextual#WALKTOTHESOURCE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> What varieties 
                    <br/>of childish beauty we met with in that short walk, every little mountaineer 
                    <br/>was a perfect picture; one little fellow insisted upon conducting us to the 
                    <br/>source, and as <i>notre guide principale</i> piloted us proudly through the crowd 
                    <br/>of little fry who were lying in wait, all expecting a similar distinction, 
                    <br/>but who, finding the post of honour preoccupied, followed very gravely <i>en
                    <br/>suite</i>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/source_of_the_arveron_prose_glosses_contextual#VARIETIESOFCHILDISHBEAUTY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> 
                    “Voilà la source,” quoth our <i>petit conducteur</i>, as we emerged from a 
                    <br/>dark wood of pines bordering on the waves of the flowing <span class="geogName-ARVERON">Arveron</span>. It was 
                    <br/>exceeding lovely. The day had been one continued succession of storms, 
                    <br/>but the eve was breaking and giving fair promise of a sunny morrow. 
                    <br/>Right in front a few exhausted but lingering tempest clouds shadowed 
                    <br/>the dark masses of pine that girdle the <span class="geogName-MONTANVERT">Montanvert</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/source_of_the_arveron_prose_glosses_contextual#MONTANVERT" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> but farther to 
                    <br/>the west broke away into fleecy masses, scarcely distinguishable from the 
                    <br/>eternal snow that flashed through their openings, and farther still a serene 
                    <br/>evening sky glowed peacefully. A lurid, ominous light pervaded the 
                    <br/>whole air, that stormy and murky lume, the effect of the strange combat 
                    <br/>between the sun and tempest; the one casting the whole body of gigantic<div id="" class="pb"></div>
            <br/>mountains into a dreary darkness, the other pouring a stream of red, 
                    <br/>ghostly, dusky light up the valley, that caught as it past the projecting 
                    <br/> pinnacled spires of the <span class="geogName-BOSSONS">glacier des Bossons</span>, which flashed dazzling forth 
                    <br/>from the gloom of the ribbed crags as the lightning leaps from the 
                    <br/>thunder cloud. A low, hollow, melancholy echoing was heard issuing from 
                    <br/>the recesses of the mountains, the last sighing of the passing‐away tempest, 
                    <br/>the last murmurs of the storm spirit as he yielded up his reign; it past 
                    <br/>away, and the blue rigidness of the transparent cavern of the glacier woke 
                    <br/>rosily to the departing sun.</div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“The Rhine” [titled composite section] “The Rhine” [section title] ["The Rhine"] [essay] “The Rhine” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Rhine” [section title]</span></div>
   <div class="title" id="">
      <span class="head" id=""><span class="title-composite-JRTHERHINECOMP"><span class="caps">THE RHINE</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#THERHINETITLE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>["The Rhine"] [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">Tbe traditions of the <span class="geogName-RHINE">Rhine</span> have long since been celebrated, and I 
                    <br/>hope long will be so, for the terror and amusement, if not the benefit, of 
                    <br/>the rising generation. The two districts of the <span class="geogName-RHINE">Rhine</span> and the <span class="geogName-HARZ">Hartz</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#HARTZ" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> 
            <br/>have been selected from time immemorial as fitting theatres for the 
                    <br/>gambols of brownies, fairies, gnomes, and all other fashionable hobgoblins 
                    <br/>of every shape, sort, and size; and the consequence is, that a midnight 
                    <br/>walk through the forests of the <span class="geogName-HARZ">Hartz</span>, or the vaulted chambers of 
                    <br/><span class="placeName-RHEINFELS">Rheinfels</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#RHEINFELS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> would be considered, by many persons possessʼd of considerable 
                    <br/>strength of nerve in the day‐time and in places not haunted, as a very 
                    <br/>disagreeable, if not positively dangerous affair. Marvel not, therefore, 
                    <br/>reader, if I inform you that I considered myself upon suspicious, if not 
                    <br/>enchanted, or even haunted ground, as soon as we came in sight of the 
                    <br/>crags of <span class="geogName-DRACHENFELS">Drachenfels</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#DRACHENFELS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span>, and that my thirst for ancient rhyme or story 
                    <br/>became considerably augmented as we advanced farther into that wilder‐
                    <br/>ness of rock and fortress, which must be traversed by the voyageur who 
                    <br/>passes between <span class="placeName-EHRENBREITSTEIN">Ehrenbreitstein</span> and <span class="placeName-STGOAR">St. Goar</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#TRADITIONS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> I could not hope for much 
                    <br/>true dictionary<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_prose_glosses_textual#TRADITIONARY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> lore from most of the personages whom we encountered 
                    <br/>on any of our perambulations, judging from their countenances, at least. 
                    <br/>I do not, at present, remember any physiognomies which exhibit so much 
                    <br/>of, let me see, a combination of the stupidity, lifelessness, and laziness of 
                    <br/>the owl, with the ugliness of the monkey, as do those of the generality of 
                    <br/>the German peasantry and lower classes;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#GERMANPEASANTRY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> and I was therefore not particu‐
                    <br/>larly tempted to interrogate any of them upon the subject before alluded 
                    <br/>to, until at length Fortune threw an individual in my way who appeared 
                    <br/>likely to be able to answer any inquiries which I might make, entirely to 
                    <br/>my own satisfaction.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#FORTUNE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span></div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Rhine” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">We saw it where its billow swells</span><br/>
            <span class="l">Beneath the ridge of <span class="placeName-DRACHENFELS">Drachenfels</span>;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#DRACHENFELS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span></span><br/>
            <span class="l">We saw it where its ripples ride</span><br/>
            <span class="l">ʼNeath <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span>ʼs beetling pride;</span><br/>
            <span class="l">We saw it where its whirlpools roar
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Among the rocks of gaunt <span class="placeName-STGOAR">St. Goar</span>—</span><br/> 
            <span class="l">In all its aspect is as fair!</span><br/>
            <span class="l">That aspect changes everywhere.</span><br/>
            <span class="l">From <span class="geogName-RHAETIANALPS">Rhætian</span> and Dinaric crest,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#DINARIC" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span></span><br/>
            <span class="l">From the wild waters to the west,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_poem_glosses_textual#FOAMGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">From fearful <span class="placeName-SPLUGEN">Splügen</span>ʼs glaciered head,</span><br/> 
            <span class="l">The mighty torrent dashes, dread;</span><br/><div id="" class="pb"></div>
            <span class="l">And, swelled by every Alpine snow,</span><br/>
            <span class="l">Now see it chase these clffs below,</span><br/>
            <span class="l">On whose high summits deeply rent
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Rise many a fortress battlement,</span><br/>
            <span class="l">Seeming the lords of rock and hill,</span><br/> 
            <span class="l">And mighty in their ruin still.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
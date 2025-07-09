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
“The Rhine” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msvii/MSVII161v-162r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msvii" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Rhine” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">The Rhine<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_poem_glosses_textual#HANDGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#THERHINETITLE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l">We saw it where its billow swells</span><br/>
            <span class="l">Beneath the ridge of <span class="placeName-DRACHENFELS">Drachenfells</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#DRACHENFELS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">We saw it where its ripples ride</span><br/>
            <span class="l">Neath <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span>ʼs beetling pride</span><br/>
            <span class="l">We saw it where its whirlpools roar
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Among the rocks of gaunt <span class="placeName-STGOAR">St Goar</span></span><br/> 
            <span class="l">In all its aspect is as fair</span><br/>
            <span class="l">That aspect changes everywhere</span><br/>
            <span class="l">From <span class="geogName-RHAETIANALPS">Rhetian</span> and <span class="geogName-DINARICALPS">Dinaric</span> crest<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#DINARIC" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">Foam the <span class="del-strikethrough">wild</span> wild waters to the west<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_poem_glosses_textual#FOAMGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">From fearful <span class="placeName-SPLUGEN">Splugen</span>s glaciered head</span><br/> 
            <span class="l">The mighty torrent dashes dread</span><br/><div id="" class="pb"></div>
            <span class="l">And swelled by every Alpine snow</span><br/>
            <span class="l">Now see it chase these cliffs below</span><br/>
            <span class="l">On whose high summits deeply rent
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Rise many a fortress battlement</span><br/>
            <span class="l">Seeming the lords of rock & hill</span><br/> 
            <span class="l">And mighty in their ruin still.</span><br/>
            </div>
         </div>
   </div>
   <div class="date" id="">
      <span class="space" style="padding-left:12.4em"> </span>1833.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_poem_glosses_textual#DATELINEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span>
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
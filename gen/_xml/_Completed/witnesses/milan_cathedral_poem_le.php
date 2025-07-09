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
“Milan Cathedral” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Milan Cathedral” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">MILAN CATHEDRAL</span></h1>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">T</span><span class="smallcaps">HE</span> heat of summer day is sped;</span><br/>
            <span class="l">On far <span class="geogName-MONTEROSA">Mont Rose</span> the sun is red;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/milan_cathedral_poem_glosses_contextual#MONTEROSAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And mark you <span class="placeName-MILAN">Milan</span>ʼs marble pile</span><br/>
            <span class="l">Glow with the mellow rays awhile!</span><br/>
            <div id="" class="pb"></div>
            <span class="l">Lo, there relieved,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/milan_cathedral_poem_glosses_contextual#RELIEVEDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> his front so high
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">On the blue sky of <span class="placeName-">Italy</span>!</span><br/>
            <span class="l">While higher still above him bear,</span><br/>
            <span class="l">And slender in proportion fair,</span><br/>
            <span class="l">Fretted with Gothic carving well,</span><br/>
            <span class="l">Full many a spiry pinnacle;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">And dazzling bright as <span class="geogName-MONTEROSA">Rosa</span>ʼs crest,</span><br/>
            <span class="l">Each with his sculptured statue prest,</span><br/>
            <span class="l">They seem to stand in that thin air</span><br/>
            <span class="l">As on a thread of gossamer.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/milan_cathedral_poem_glosses_contextual#SPIRYPINNACLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">You think the evening zephyrʼs play
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Could sweep them from their post away,</span><br/>
            <span class="l">And bear them on its sportful wing</span><br/>
            <span class="l">As autumn leaves, wild scattering.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
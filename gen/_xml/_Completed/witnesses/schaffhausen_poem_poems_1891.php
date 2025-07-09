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
“Schaffhausen” [“Entrance to Schaffhausen”] [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_poems_1891" target="_self"></a><br/></div>
   <div class="fileName"><span>“Schaffhausen” [“Entrance to Schaffhausen”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">[<span class="caps">ENTRANCE TO SCHAFFHAUSEN</span>.]<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_textual#SCHAFFHAUSENTITLEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l">T<span class="smallcaps">HE</span> eve was darkening, as we climbed</span><br/> 
            <span class="l">The summit of the hill;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#THEALPSTHEALPSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And, cradled ʼmid the mountain‐pine,</span><br/> 
            <span class="l">The wind was lying still.</span><br/>
            <span class="l">Beneath the forests shadowy
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/> 
            <span class="l">Long time our path wound on;</span><br/>
            <span class="l">One narrow strip of starry sky</span><br/>
            <span class="l">Between the dark firs shone.</span><br/> 
            <span class="l">The drowsy gnats had ceased their song,</span><br/>
            <span class="l">The birds upon the boughs were sleeping,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/> 
            <span class="l">And stealthily across our path</span><br/> 
            <span class="l">The leveret<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/schaffhausen_poem_glosses_textual#LEVERETGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> was leaping.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
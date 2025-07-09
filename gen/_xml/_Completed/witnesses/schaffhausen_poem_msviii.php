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
“Schaffhausen” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII70v-71r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Schaffhausen” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVIII70v" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-">Schaffhausen</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_textual#SCHAFFHAUSENTITLEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">The eve was darkening, as we climbed,</span><br/>
            <span class="l">The summit of the hill,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#THEALPSTHEALPSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And cradled mid the mountain pine,</span><br/>
            <span class="l">The <span class="del-strikethrough">breeze</span> <div 
              class="add-above" 
              style="left:2.4em">wind</div> was lying still 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1151</a></div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/schaffhausen_poem_glosses_textual#LINENUMBERINGGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">Beneath the forests shadowy,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Long time our path wound on,</span><br/>
            <span class="l">One narrow strip of starry sky,</span><br/>
            <span class="l">Between the dark firs shone, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1155</a></div></span><br/>
            <span class="l">The drowsy gnats had ceased their song 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)"><span class="del-strikethrough">11</span></a></div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/schaffhausen_poem_glosses_textual#DELETEDNUMBERGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l">The birds upon the bough were sleeping,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">And stealthily across our path,</span><br/>
            <span class="l">The leveret<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/schaffhausen_poem_glosses_textual#LEVERETGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span> was leaping,</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
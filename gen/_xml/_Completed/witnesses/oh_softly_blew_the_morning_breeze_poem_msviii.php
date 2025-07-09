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
“Oh softly blew the morning breeze” [“Chiavenna”] [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII62v-63r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Oh softly blew the morning breeze” [“Chiavenna”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">oh softly blew<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_textual#CHIAVENNATITLE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> the mo<div 
          class="s-subst s-add s-overwrite s-inline">r</div><div 
          class="subst-del s-subst s-del" >u</div>n<div 
          class="s-subst s-add s-overwrite s-inline">i</div><div 
          class="subst-del s-subst s-del" >t</div>ng breeze<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_textual#MOUNTINGBREEZE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">810</a></div></span><br/>
            <span class="l">Through <span class="placeName-CHIAVENNA">Chiavenna</span>s <span class="name--MYRTLE">myrtle trees</span>,</span><br/>
            <span class="l">And oer the green hills viny spread</span><br/>
            <span class="l">That rose in many a rounded head</span><br/>
            <span class="l">Beneath the <span class="geogName-ALPS">Alpine</span> rocks of red
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And the fresh snow had fallʼn that night
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">815</a></div></span><br/>
            <span class="l">And sprinkled with its mantle white</span><br/>
            <span class="l">The mountain amphitheatre</span><br/>
            <span class="l">That rose around us far and near</span><br/>
            <span class="l">Though in such far confusion hurled
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">They looked to rule oer all the world
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">820</a></div></span><br/>
            <span class="l">And the white clouds seemed to immerse,</span><br/>
            <span class="l">Another ruinʼd universe.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_contextual#MOUNTAINAMPHITHEATRE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
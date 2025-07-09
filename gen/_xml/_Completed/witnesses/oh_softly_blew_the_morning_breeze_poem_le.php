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

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Oh softly blew the morning breeze” [“Chiavenna”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">CHIAVENNA</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_textual#CHIAVENNATITLE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l">O<span class="smallcaps">H</span>, softly blew the mounting breeze<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_textual#MOUNTINGBREEZE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">Through <span class="placeName-CHIAVENNA">Chiavenna</span>ʼs <span class="name--MYRTLE">myrtle trees</span>,</span><br/>
            <span class="l">And oʼer the green hillsʼ viny spread,</span><br/> 
            <span class="l">That rose in many a rounded head</span><br/>
            <span class="l">Beneath the Alpine rocks of red.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And the fresh snow had fallʼn that night,</span><br/> 
            <span class="l">And sprinkled with its mantle white</span><br/>
            <span class="l">The mountain amphitheatre</span><br/>
            <span class="l">That rose around us far and near,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_contextual#MOUNTAINAMPHITHEATRE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Though in such far confusion hurled
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">They looked to rule oʼer all the world;</span><br/> 
            <span class="l">And the white clouds seemed to immerse</span><br/>
            <span class="l">Another ruined universe.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
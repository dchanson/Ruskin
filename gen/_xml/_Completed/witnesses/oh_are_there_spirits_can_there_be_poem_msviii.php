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
"Oh are there spirits, can there be" [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIIIp52-53.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>"Oh are there spirits, can there be" [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">     
         <div class="half"></div>
         
         <div class="lg-stanza">
            <span class="l">Oh are there spirits, can there be</span><br/>
            <span class="l">Things of such wondrous mystery</span><br/>
            <span class="l">Oh are there spirits, can a mind</span><br/>
            <span class="l">Float bodiless and unconfined</span><br/>
            <span class="l">Or can the air the earth, the sea
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">510</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Be filled with immortality</span><br/>
            <span class="l">Some say that in the cold moonlight</span><br/>
            <span class="l">There hovereth many a changing sprite</span><br/>
            <span class="l">Some say the wind, and who can tell</span><br/>
            <span class="l">Bears spirits voices in its swell
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">515</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">But if upon our mortal sense</span><br/>
            <span class="l">There rules <span class="del-strikethrough">a <span class="unclear-">un(?)</span></span> unearthly influence</span><br/>
            <span class="l">If there be sprites in earth or air,</span><br/>
            <span class="l">They surely have their dwelling there<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_are_there_spirits_can_there_be_glosses_contextual#SPRITESINEARTHORAIR" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
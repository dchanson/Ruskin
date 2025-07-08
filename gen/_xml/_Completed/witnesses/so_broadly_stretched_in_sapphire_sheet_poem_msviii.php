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
“So broadly stretched in sapphire sheet” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII78v-79r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self">Back to apparatus</a><br/></div>
   <div class="fileName"><span>“So broadly stretched in sapphire sheet” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">So broadly stretched in sapphire sheet<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_an_eve_of_summer_mild_poem_glosses_textual#SOBROADLYSTRETCHED" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Another heaven neath our feet
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1370</a></div></span><br/>
            <span class="l">Of deeper, darker lovelier blue</span><br/>
            <span class="l">It seemed that we were sailing through</span><br/>
            <span class="l">Those aether fields, so pure, so high
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Above the concave of the sky
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">40</a></div></span><br/>
            <span class="l">Where nor storm nor tempest cometh nigh
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1375</a></div></span><br/>
            <span class="l">And the moon she sits in her majesty</span><br/>          
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
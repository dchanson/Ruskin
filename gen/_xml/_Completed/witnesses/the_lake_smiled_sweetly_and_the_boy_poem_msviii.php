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
“The lake smiled sweetly and the boy” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII70v-71r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self">Back to apparatus</a><br/></div>
   <div class="fileName"><span>“The lake smiled sweetly and the boy” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVIII70v" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l">The lake smiled sweetly, and the boy,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_lake_smiled_sweetlly_and_the_boy_poem_glosses_textual#STATUSGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Who lay upon its border sleeping,</span><br/>
            <span class="l">Dreamed that he plunged beneath with joy,</span><br/>
            <span class="l">And heard a sound like billows beating</span><br/>
            <span class="l">Or like the angels hymns that rise,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">From the high thrones of <span class="placeName-scriptural-HEAVEN">Paradise</span>,</span><br/>
            <div id="MSVIII71r" class="pb"></div>
            <div class="pageNum-top-right">71</div><br/>
            <span class="l">And, as he woke him from his sleep,</span><br/>
            <span class="l">(The vision floats before him)</span><br/>
            <span class="l">High oer his head the waters leap</span><br/>
            <span class="l">And voices murmured from the deep.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">“I snatch the sleeper into sleep)<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_lake_smiled_sweetlly_and_the_boy_poem_glosses_textual#PARENGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">And whirl my white waves oer him.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
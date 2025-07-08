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
“Cologne” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII60v-61r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Cologne” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-">Cologne</span>.</div>
         
         <div class="p">And this is the birth place of <span class="persName-PPR">Rubens</span>. Sink these<br/> 
                    french bad roads<span class="g-terminal_comma">,</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> <span class="del-strikethrough">f</span> A long days journey over them<br/> 
                    under a burning <div 
          class="subst-del s-subst s-del" >s</div><div 
          class="s-subst s-add s-overwrite s-inline">S</div>un, together with a perambulation<br/> 
                    on a damp evening at <span class="persName-">Aix la Chapelle</span>, so knocked<br/> 
                    me up, that I was forced to diet it, and quiet it<br/> 
                    And could not stir out to see <span class="del-strikethrough">the</span> <span class="persName-PPR">Rubens</span>ʼ last picture<br/> 
                    the masterpiece of the master, the <span class="title-artwork-RUBENSCRUCIFIXIONSTPETER">crucifixion of <span class="persName-STPETER">St<br/> 
                    Peter</span></span>, bequeathed by him at his death to his native<br/> 
                    city, and, yet more, his birthchamber, — fragment,<br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
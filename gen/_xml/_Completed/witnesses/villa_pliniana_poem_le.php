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
“Villa Pliniana” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Villa Pliniana” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps"><span class="placeName-building-VILLAPLINIANINA">Villa Pliniana</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/villa_pliniana_poem_glosses_textual#PUBLICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="lg-stanza">                
            <span class="l">I <span class="smallcaps">love</span> to hear the names of those</span><br/>
            <span class="l">Who long ago have past away,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/villa_pliniana_poem_glosses_contextual#PLINYVILLAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Though now their names be drowned by clay.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/villa_pliniana_poem_glosses_textual#CLAIMEDGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">And who would stand where they repose,</span><br/>
            <span class="l">And look upon their dust, and say
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">That this was <span class="persName-TRAJAN">Trajan</span>, and below</span><br/>
            <span class="l">This foot of mine, lies cold and low,</span><br/>
            <span class="l">Earth, which compounded long ago</span><br/>
            <span class="l">What held the soul of <span class="persName-JULIUSCAESAR">Cæsar</span>.</span><br/>
            <span class="l">How peaceful is the turbulence
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Of spirits, whose high deeds long hence</span><br/>
            <span class="l">Shall still be told as now!</span><br/>
            <span class="l">How strange those mighty powers that hurled</span><br/>
            <span class="l">With change and terror oʼer the world</span><br/>
            <span class="l">Should pass away, we know not how!
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">That one would wonder how a thing</span><br/>
            <span class="l">So temporary, perishing,</span><br/>
            <span class="l">Should dare such deeds, or work such change</span><br/>
            <span class="l">Iʼ the texture of the world.</span><br/>
            <span class="l">There have been many mighty,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">And many more renowned;</span><br/>
            <span class="l">The ignoble and the glorious</span><br/>
            <span class="l">Are underneath the ground.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
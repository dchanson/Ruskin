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
“Lille” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Lille” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p"><i>Passeport, monsieur, sʼil vous plait</i>. I hate fortified towns, in general, 
                    <br/>that is.—Their houses are like barracks, their public buildings like prisons, 
                    <br/>their population like so many rats in a rat trap; they are arduous to get 
                    <br/>in,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#GETIN" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> difficult to get out, and disagreeable to remain in. To all this, how‐
                    <br/>ever, <span class="placeName-LILLE">Lille</span> is an exception, except in one circumstance—its difficulty of access. 
                    <br/>We were detained after a long dayʼs journey under a burning sun, hot, 
                    <br/>hungry, and stupid, while our passport was examined. Slowly the sentinel 
                    <br/>unfolded the paper, spelled over its contents with tiresome coolness and 
                    <br/>provoking minuteness, slowly returned it, and then came—<i>Passez</i>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#PASSPORT" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> And 
                    <br/>pass we did right gladly. <span class="placeName-LILLE">Lille</span> is a beautiful, a most beautiful town. I 
                    <br/>have seen none equal to it, for grandeur of effect, for the massive magni‐
                    <br/>ficence of its edifices, for the palace like nobility of its streets, except 
                    <br/><span class="placeName-GENOA">Genoa</span>. The day also on which we entered it was almost Italian, the sky 
                    <br/>was of such a deep and unbroken blue, and a stream of rich, glowing, 
                    <br/>tawny light shot upon the full fretwork and elaborate carving of the upper 
                    <br/>parts of the houses; but their bases, owing to the narrowness of the 
                    <br/>streets and the enormous height of the opposing buildings, were wrapt in 
                    <br/>shade, deep, gloomily deep, when contrasted with the flood of sunshine 
                    <br/>that glanced on the gable roofs, and almost gave to life<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#GAVETOLIFE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> the many statues 
                    <br/>of the <span class="persName-VIRGINMARY">Virgin</span>, that stood beneath their Gothic niches, really very respect‐
                    <br/>ably sculptured, at every angle of the streets.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#SHADE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
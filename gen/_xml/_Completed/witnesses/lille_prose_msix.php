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
msix/MSIX19v-20r.jpg msix/MSIX20v-21r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Lille” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX20r" class="pb"></div>       
         
         <div class="p">Passeport, Monsieur, sʼil vous plait—. I hate
                    <br/>fortified towns, in general, that is.— Their<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span>
            <br/>houses, are like barracks, their public buildings,
                    <br/>like prisons, their population, like so many rats
                    <br/>in a rat trap, they are arduous to get in,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#GETIN" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> dif‐
                    <br/>ficult to get out, and disagreeable to remain in.
                    <br/>To all this however, <span class="placeName-LILLE">Lille</span> is an exception, except in
                    <br/>one circumstance, its difficulty of access.— We were
                    <br/>detained after a long days journey, under a bur<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#WORDDIVISIONBURNING" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span>
            <br/>ning sun, hot, hungry, and stupid, while our
                    <br/>passport was examined. Slowly the sentinel<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span>
            <br/>unfolded the paper, spelled over its contents with
                    <br/>tiresome coolness, and provoking minuteness
                    <br/>slowly returned it, and then came— Passez.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#PASSPORT" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span>
            <br/>And pass we did, right gladly.— <span class="placeName-LILLE">Lille</span> is a 
            <div id="MSIX20v" class="pb"></div>
            <br/>beautiful, a most beautiful town,— I have seen
                    <br/>none equal to it, for grandeur of effect, for the
                    <br/>massive magnificence, of its edifices, for the pal‐
                    <br/>ace like nobility of its streets, except <span class="placeName-GENOA">Genoa</span>.— The
                    <br/>day also on which we entered it was almost
                    <br/>Italian, the sky was of such a deep and unbro‐
                    <br/>ken blue, and a stream of rich, glowing, tawny
                    <br/>light shot upon the full fretwork, & elaborate
                    <br/>carving, of the upper parts of the houses — but
                    <br/>their bases, owing to the narrowness of the streets
                    <br/>and the enormous height of the opposing build‐
                    <br/>ings, were wrapt in shade, deep, gloomily deep
                    <br/>when contrasted with the flood of sunshine, that
                    <br/>glanced on the gable roofs, and almost gave to
                    <br/>life<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#GAVETOLIFE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span> the many statues of the <span class="persName-VIRGINMARY">virgin</span>, that stood
                    <br/>beneath their Gothic niches, really very respec‐
                    <br/>tably sculptured, at every angle of the streets.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#SHADE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></div>
         <span class="space" style="padding-left:1.6em"> </span>   
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
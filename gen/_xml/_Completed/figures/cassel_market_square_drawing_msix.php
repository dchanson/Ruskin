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
“Cassel” Drawing 4 of 4
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX17v-18r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Cassel” Drawing 4 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCASSELMARKETSQUAREMSIX">Vignette, Cassel Hôtel de Ville and Market Square</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a street with quaint architecture—in the foreground market women” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:344 n. 1).</div>
         
         
         <div class="p">The vignette is drawn in the manner of <a href="/notes/prout_samuel_note" target="_self">Samuel Prout (<span class="date-1783">1783</span>–<span class="date-1852">1852</span>)</a>, 
                        suggesting without specifically copying such marketplace scenes as 
                        <span class="title-artwork-PROUTDEVILLEBRUSSELS"><i>Hotel de Ville Brussels</i></span> and 
                        <span class="title-artwork-PROUTGHENT"><i>Ghent</i></span> in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-artwork-PROUTSKETCHES"><i>Facsimiles of Sketches Made in Flanders and Germany</i></span></a>. 
                        <span class="persName-JR">Ruskin</span> may have based the vignette on a larger sketch, probably made during the tour, 
                        <a href="/notes/bibliography#JRHOTELDEVILLECASSEL" target="_self"><span class="title-artwork-JRHOTELDEVILLECASSEL">“<span class="placeName-building-HOTELDEVILLECASSEL">Hotel de Ville, <span class="placeName-CASSEL">Cassel</span></span>”</span></a>. 
                        See <a href="/notes/drawings_1833_note" target="_self">Drawings from the Tour of 1833</a>, and 
                        <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#COMPOSITEILLUSTRATEDTRAVELOGUEILLUS" target="_self">Missing and Unidentified Drawings for the Composite‐Genre Illustrated Travelogue (MS IX) and Related 1833 Tour Sketches</a>.</div>
         
         
         <div class="p">The Renaissance <span class="placeName-building-NOBLECOURCASSEL">Hôtel de Ville</span> in <span class="placeName-CASSEL">Cassel</span> 
                        was nearly totally destroyed by German bombing in <span class="date-1940-05">May 1940</span>.</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
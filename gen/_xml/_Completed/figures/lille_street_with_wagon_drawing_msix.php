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
“Lille” Drawing 1 of 2
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX18v-19r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Lille” Drawing 1 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRLILLESTREETMSIX">Vignette, Lille Street with Wagon</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a street, with waggon and horses in the foreground” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:344 n. 2). 
                        The vignette is drawn in the manner of <a href="/notes/prout_samuel_note" target="_self">Samuel Prout (<span class="date-1783">1783</span>–<span class="date-1852">1852</span>)</a>, 
                        suggesting without specifically copying <span class="title-artwork-PROUTGHENT">“Ghent”</span> 
                        in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-artwork-PROUTSKETCHES"><i>Facsimiles of Sketches Made in Flanders and Germany</i></span> (<span class="date-1833">1833</span>)</a>, 
                        but at a considerably reduced scale.</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> is believed to have made a tour sketch of a subject in <span class="placeName-LILLE">Lille</span>, 
                        but the location of the sketch is unknown; see <a href="/notes/drawings_1833_note" target="_self">Drawings from the <span class="date-1833-05-14-1833-08-19">Tour of 1833</span></a>.</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
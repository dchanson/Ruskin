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
 “Cologne ” Drawing 1 of 1
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX31v-32r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span> “Cologne ” Drawing 1 of 1</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCOLOGNEBAYENTURMMSIX">Vignette, Cologne Bayenturm and Wharf</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “a sketch of <span class="placeName-COLOGNE">Cologne</span>: the <span class="geogName-RHINE">Rhine</span>, bridge, 
                        and unfinished cathedral in the distance; in the foreground to the left, tower and shipping” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:351 n. 3).</div>
         
         <div class="p">The drawing is a copy of <span class="title-artwork-PROUTCOLOGNE"><i>Cologne</i></span>, by 
                        <a href="/notes/prout_samuel_note" target="_self"><span class="persName-SP">Samuel Prout</span> (<span class="date-1783-1852">1783–1852</span>)</a>, 
                        from <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-artwork-PROUTSKETCHES"><i>Facsimiles of Sketches Made in Flanders and Germany</i></span></a> 
                        (<span class="date-1833">1833</span>). <span class="persName-SP">Prout</span>ʼs lithograph depicts a river scene, 
                        dominated by the thirteenth‐century <span class="placeName-building-BAYENTURM">Bayenturm</span>, 
                        the southern watch tower and city gate of the medieval city wall. <span class="persName-JR">Ruskin</span> omits the foreground figures sitting on the wharf in <span class="persName-SP">Prout</span>ʼs scene, 
                        and he eliminates much of the wharf itself, which strongly defines the horizontal axis of <span class="persName-SP">Prout</span>ʼs foreground. 
                        <span class="persName-JR">Ruskin</span> does pick up from <span class="persName-SP">Prout</span>, however, 
                        the old bridge of boats extending horizontally across the river from the vicinity of the cathedral, defining the north horizon of the picture. 
                        At the same time, he brings closer the distant buildings in the north along the river, rendering <span class="placeName-building-STPETERCATHEDRAL">Cologne Cathedral</span> more distinct. 
                        <span class="persName-JR">Ruskin</span> sketches the medieval crane that stood atop the southern tower of the cathedral for centuries. The silhouette of the cathedral shows the phase 
                        at which construction was suspended from the fourteenth through the mid‐nineteenth centuries, from the completion of the Gothic choir in <span class="date-1322">1322</span> to the resumption 
                        of construction of the south towers in <span class="date-1842-1880">1842–80</span>.</div>
         
         <div class="p"><span class="persName-CFS">Clarkson Stanfield</span> chose a view similar to Proutʼs for the title‐page vignette, 
                        <span class="title-artwork-CFSCOLOGNE"><i><span class="placeName-COLOGNE">Cologne</span></i></span>, for 
                        <span class="title-annual-HEATHSANNUAL1833"><i>Heathʼs Picturesque Annual for <span class="date-1833">1833</span></i></span>. 
                        Fishermen sit on the wharf repairing nets, with the <span class="placeName-building-BAYENTURM">Bayenturm</span> to their left, 
                        and the city behind them—its medieval landmarks distinct on the skyline 
                        (<a href="/notes/bibliography#HEATHSANNUAL1833" target="_self"><span class="persName-LR">Ritchie</span>, <span class="title-annual-HEATHSANNUAL1833"><i>Travelling Sketches on the Rhine, and in Belgium and Holland</i></span></a>, title page).</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
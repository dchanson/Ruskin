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
“Andernacht” Drawing 1 of 1
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX35v-36r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Andernacht” Drawing 1 of 1</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         <h1 class="page-title"><span class="title-artwork-JRANDERNACHTTOWERMSIX"><span class="placeName-ANDERNACH">Andernach</span> <span class="placeName-building-ANDERNACHCRANE">Crane</span>, <span class="placeName-building-ANDERNACHROUNDTOWER">Round Tower</span>, and <span class="placeName-building-STMARYASSUMPTIONANDERNACH">Cathedral</span></span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of a wooded, high‐banked river, with towers and a church in the distance” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:354 n. 2). 
                        The sketch shows a grouping of <span class="placeName-ANDERNACH">Andernach</span>ʼs most familiar medieval buildings. 
                        In the sketch, standing closest to the river, is the sixteenth‐century <span class="placeName-building-ANDERNACHCRANE">crane</span>; 
                        in the middle distance, the fifteenth‐century <span class="placeName-building-ANDERNACHROUNDTOWER">round tower</span>; 
                        and in the far distance, the towers of <span class="placeName-building-STMARYASSUMPTIONANDERNACH">St. Mary Assumption Cathedral</span>. 
                        In the drawing, <span class="persName-JR">Ruskin</span> would seem to have crowded these buildings closer together than they could in fact have been seen in a single view, 
                        but <span class="persName-CFS">Clarkson Stanfield</span> grouped them similarly for the engraving, <span class="title-artwork-CFSANDERNACH"><span class="placeName-ANDERNACH"><i>Andernach</i></span></span> 
                        (<a href="/notes/bibliography#HEATHSANNUAL1833" target="_self"><span class="persName-LR">Ritchie</span>, <span class="title-annual-HEATHSANNUAL1833"><i>Travelling Sketches on the Rhine</i> [<i>Heathʼs Picturesque Annual for <span class="date-1833">1833</span></i>]</span></a>, 154 opp.).
                    </div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
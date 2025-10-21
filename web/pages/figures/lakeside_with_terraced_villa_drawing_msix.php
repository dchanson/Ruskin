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
Lakeside with Terraced Villa [drawing]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX54v-55r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>Lakeside with Terraced Villa &#x005B;drawing&#x005D;</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRLAKESIDEWITHTERRACEDVILLAMSIX">Lakeside with Terraced Villa Drawing (Isola Bella?)</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as &#x201C;a lake&#x2010;side, with terraced gardens, hills behind&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The image strongly suggests a view of <span class="geogName-ISOLABELLA">Isola Bella</span> in <span class="geogName-LAKEMAGGIORE">Lago Maggiore</span>, 
                        facing the end of the island where the terraced gardens rise from the level of the lake. The drawing shows the vertical cypresses and statues 
                        decorating the terraces, and the horizontal arched wall extending to the right of the terraces. According to the 
                        <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCDOMODOSSOLAILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTSILLUS">List of Proposed Additional Contents for the &#x201C;Account&#x201D;&#x2014;Illustrations</span></a>), 
                        <span class="persName-JR">Ruskin</span> intended a drawing of <span class="geogName-ISOLABELLA">Isola Bella</span> for the proposed section of the work entitled 
                        <span class="title-composite-JRDOMODOSSOLACOMP">&#x201C;<span class="placeName-DOMODOSSOLA">Domo d&#x02BC;Ossola</span>&#x201D;</span>. 
                        On one day of their tour, the Ruskins traveled to this mountain town from the island in <span class="geogName-LAKEMAGGIORE">Lago Maggiore</span>. 
                        (For the Ruskins&#x02BC; visit to the gardens on <span class="geogName-ISOLABELLA">Isola Bella</span>, see the entry with gloss for 
                        <span class="title-composite-JRDOMODOSSOLACOMP">&#x201C;<span class="placeName-DOMODOSSOLA">Domo d&#x02BC;Ossola</span>&#x201D;</span> in 
                        the <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCDOMODOSSOLA");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">Proposed Additional Contents</span></a>.)
         </div>
         
         
         <div class="p">Of course, <span class="persName-JR">Ruskin</span> may have meant the drawing for another villa. According to <a href="/notes/richardson_mary_note" target="_self"><span class="persName-MRC">Mary Richardson</span></a>, 
                        while staying at <span class="placeName-CADENABBIA">Cadenabbia</span>, the Ruskins visited a number of villas on <span class="geogName-LAKECOMO">Lake Como</span> where they admired terraced gardens extending down to the lakeside, 
                        such as <span class="name--VILLASOMMARIVA">Villa Sommariva</span>, <span class="placeName-VILLAPLINIANINA">Villa Pliniana</span>, and <span class="name--">Villa Melzi</span> 
                        (<a href="/notes/bibliography#RFT48" target="_self"><span class="title-manuscript-RFT48">Diary of Mary Richardson</span>, 1833</a>, 43&#x2013;45). None of these seems likely, however, to have suggested a view 
                        oriented away from the villa itself and presenting only the terraces of the garden&#x2014;a view unique to an island villa like <span class="placeName-building-ISOLABELLAPALACE">Isola Bella</span>, where the visitor can circle around the structures.
         </div>
         
         
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
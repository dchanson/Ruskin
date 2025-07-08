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
Mountain Gorge Drawing
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX49v-50r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>Mountain Gorge Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINGORGEMSIX">Entrance to Gondo Gallery</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as a “a mountain gorge” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The drawing is a copy of <span class="persName-WBI">William Brockedon</span>ʼs chapter‐title vignette for “The Pass of the Simplon”, 
                        <span class="title-artwork-"><i>The Great Gallery near Gondo</i></span>, 
                        engraved by <span class="persName-EFF">Edward Finden</span>, in <a href="/notes/bibliography#BROCKEDONILLUSTRATIONS" target="_self"><span class="title-book-BROCKEDONILLUSTRATIONS"><i>Illustrations of the Passes of the Alps</i></span></a> (vol. 2, “The Pass of the Simplon ”, title page).</div>
         
         
         <div class="p">According to <span class="persName-JR">Ruskin</span>ʼs <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCFAREWELLTOITALYILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the Account of a Tour on the Continent</span></a>, 
                        he destined this drawing for a section entitled <span class="title-composite-JRFAREWELLCOMP">“Farewell to <span class="placeName-ITALY">Italy”</span></span>, 
                        referring to the crossing into <span class="placeName-SWITZERLAND">Switzerland</span> via the <span class="geogName-SIMPLON">Simplon Pass</span>. 
                        Along with the vignette, a copy of another plate from <span class="persName-WBI">Brockedon</span>ʼs <span class="geogName-SIMPLON">Simplon</span> chapter, 
                        <span class="title-artwork-WBIVALDOSSOLADEFILE"><i>Val dʼOssola from the Defile of the Dovedro</i></span>, were to be placed
                        in reverse order from their appearance in the <span class="title-book-BROCKEDONILLUSTRATIONS"><i>Illustrations</i></span>, 
                        since the Ruskinsʼ itinerary carried them in the opposite direction from <span class="persName-WBI">Brockedon</span>ʼs imagined traveler.</div>
         
         
         <div class="p"><span class="persName-WBI">Brockedon</span> dwells on “<i>les belles horreurs</i> of the <span class="geogName-SIMPLON">Simplon</span>”, 
                        particularly the narrow <span class="geogName-GONDOGORGE">Gondo Gorge</span>, where several dramatic features converge to form the scene in the vignette: 
                        “the rocky and perpendicular bases of the mountains approach more closely, 
                        leaving only space for the road and the foaming torrent [of the <span class="geogName-DIVERIARIVER">Diveria River</span>], which the latter in some places entirely usurps; 
                        and in such places the road is carried through galleries cut in the rocks. . . . [T]he wonder of this part of the road is the great gallery, which is formed just below the place 
                        where a bridge leads from the right to the left bank of the <span class="geogName-DIVERIARIVER">Dovedro [i.e., Diveria]</span>. The ravine appears to be closed in, 
                        and the only passage is by one of the most stupendous works ever accomplished—a gallery, cut through the <span class="name--GRANITE">granite</span>, 
                        596 English feet long, which at the opening on the Italian side crosses the waterfall of the <span class="geogName-FRASSINONE">Frassinone</span>: 
                        this torrent, falling from a great height, rushes through the bridge thrown across it, and descends above 100 feet into the <span class="geogName-DOVEDRO">Dovedro</span>, where the latter river, 
                        forming a cataract, meets the waters of the <span class="geogName-FRASSINONE">Frassinone</span> in horrible commotion: it is a spot unrivalled in its astonishing effect”
                        (<a href="/notes/bibliography#BROCKEDONILLUSTRATIONS" target="_self"><span class="persName-WBI">Brockedon</span>, <span class="title-book-BROCKEDONILLUSTRATIONS"><i>Illustrations of the Passes of the Alps</i></span></a> (vol. 2, “The Pass of the Simplon ”, 12; 
                        see also <a href="/notes/bibliography#EBELTRAVELLERSGUIDE" target="_self"><span class="persName-JGE">Ebel</span>, <span class="title-book-EBELTRAVELLERSGUIDE"><i>Travellerʼs Guide through Switzerland</i></span></a>, 84–85, 
                        in which the river forming the cataract is also named the <span class="geogName-FRASSINONE">Alpirnbach</span>—today, the <span class="geogName-FRASSINONE">Alpjerbach</span> and <span class="geogName-FRASSINONE">Alpjerfall</span>).</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
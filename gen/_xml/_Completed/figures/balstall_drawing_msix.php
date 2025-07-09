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
Unascribed Drawing 2 of 8 for Account of a Tour on the Continent (MS IX)
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX50v-51r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>Unascribed Drawing 2 of 8 for Account of a Tour on the Continent (MS IX)</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRBALSTALLMSIX">Vignette after “Ancient Fortress and Rocky peak / Above the vale of Balstall”</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as “mountain heights, a castle on one” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The drawing is a vignette based on an original drawing by <span class="persName-JR">Ruskin</span>, which he entitled 
                        <span class="title-artwork-JRBALSTALL1833">“Ancient Fortress and Rocky peak. / Above the vale of <span class="placeName-BALSTHAL">Balstall</span>, <span class="geogName-JURA">Jura</span>”</span>, 
                        and which is one of two sketches on the sheet <a href="/notes/bibliography#JRBALSTALLANDMONTBLANC" target="_self"><span class="title-artwork-JRBALSTALLANDMONTBLANC"><i>Balsthal; Mont Blanc from Geneva</i></span></a>, 
                        Ruskin Library, <span class="placeName-LANCASTER">Lancaster</span>. <span class="title-artwork-JRBALSTALL1833">“Ancient Fortress and Rocky peak”</span> 
                        is reproduced in <a href="/notes/bibliography#WALTONDRAWINGS" target="_self"><span class="persName-PHW">Walton</span>, <span class="title-book-WALTONDRAWINGS"><i>Drawings of John Ruskin</i></span></a> (p. 15).</div>
         
         
         <div class="p">According to <span class="persName-JR">Ruskin</span>ʼs <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">Plan for Continuation of the Account of a Tour on the Continent</span></a>, 
                        he intended a section entitled <span class="title-composite-JRBALSTALLCOMP">“Balstall”</span>, falling between the sections 
                        <span class="title-composite-JRTHERHINECOMP">“Rhine”</span> and <span class="title-composite-JRNEUFCHATELCOMP">“Neufchatel”</span>, 
                        and it was to be illustrated by a scene that could well refer to this drawing: “Fortress. View of <span class="geogName-ALPS">Alps</span>”. 
                        See <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCBALSTALLILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents: Balstall</span></a>; see also 
                        <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#COMPOSITEILLUSTRATEDTRAVELOGUEILLUS" target="_self">Account of a Tour on the Continent: Missing and Unidentified Drawings for the Composite‐Genre Illustrated Travelogue (<span class="title-manuscript-MSIX">MS IX</span>) and Related <span class="date-1833">1833</span> Tour Sketches</a>; 
                        and <a href="/notes/drawings_1833_note" target="_self">Drawings from the Tour of 1833</a>.</div>
         
         
         <div class="p">The location is <span class="placeName-BALSTHAL">Balsthal</span>, in the canton of <span class="placeName-SOLEURE">Solothurn</span>, 
                        <span class="placeName-SWITZERLAND">Switzerland</span>. Of the two castles in the valley, this drawing apparently represents the 
                        <span class="placeName-building-NEUFALKENSTEINCASTLE">Neu‐Falkenstein Castle</span>. In his <span class="date-1838">1838</span> 
                        guidebook to <span class="placeName-SWITZERLAND">Switzerland</span>, <span class="persName-JM">John Murray III</span> comments on these 
                        “imposing ruins of the <span class="placeName-building-NEUFALKENSTEINCASTLE"><i>Castle of Falkenstein</i></span>, 
                        surmounted by its circular <span class="name--FALKENSTEINDONJON">Donjon</span>, [which] rise midway between the two roads to 
                        <span class="placeName-BASLE">Bâle</span> [i.e., <span class="placeName-BASLE">Basel</span>], 
                        by the <span class="placeName-HAUENSTEIN">Hauenstein</span> and by the <span class="geogName-PASSWANG">Passwang</span> 
                        [i.e., two mountain passes in the <span class="geogName-JURA">Jura</span>] which unite here. This position gave to its ancient owners 
                        the powers of levying blackmail upon each of these passes. It belonged at one time to <span class="persName-RVONWART">Rudolph von Wart</span>, 
                        who was broken on the wheel for his share in the murder of the [Habsburg] <span class="persName-ALBERTI">Emperor Albert</span> [i.e., <span class="persName-ALBERTI">Albrecht I</span> (<span class="date-1250-1308">ca. 1250–1308</span>)], 
                        and was consoled in his agony by the presence and fortitude of his wife” 
                        (<a href="/notes/bibliography#MURRAYSHANDBOOKSWITZERLAND1838" target="_self"><span class="title-book-MURRAYSHANDBOOKSWITZERLAND1838"><i>Hand‐book for Travellers in <span class="placeName-SWITZERLAND">Switzerland</span></i></span></a>, 9–10).</div>
         
         
         <div class="p">The fortitude of the assassinʼs wife at the scene of his torture is memorialized by <span class="persName-FDH">Felicia Hemans</span> 
                        in an <span class="date-1826">1826</span> poem, <span class="title-poem-">“Gertrude, or Fidelity till Death”</span>, 
                        collected in <span class="title-anthology-HEMANSRECORDSOFWOMAN"><i>Records of Woman: With Other Poems</i></span> (<span class="date-1828">1828</span>). 
                        <span class="persName-SJWOLFSON">Susan Wolfson</span> points out that <span class="persName-FDH">Hemans</span> depicts <span class="persName-ALBERTI">Albrecht</span>ʼs death in another poem of the period, 
                        <span class="title-poem-">“A Monarchʼs Death‐Bed”</span> in <a href="/notes/bibliography#FRIENDSHIPSOFFERING1826" target="_self"><span class="title-annual-FRIENDSHIPSOFFERING1826"><i>Friendshipʼs Offering: A Literary Album</i></span> (<span class="date-1826">1826</span>)</a>, 1–2. 
                        See <a href="/notes/bibliography#HEMANSSELECTEDPOEMS" target="_self"><span class="persName-FDH">Hemans</span>, <span class="title-book-HEMANSSELECTEDPOEMS"><i>Selected Poems</i></span>, ed. <span class="persName-SJWOLFSON">Wolfson</span></a>, 356–58. 
                        In the latter poem, <span class="persName-ALBERTI">Albrecht</span>ʼs sole comforter is a peasant woman on the riverbank where he was murdered. 
                        For the political significance of this regicide respecting the alliances among Swiss communities on the one hand, and dynastic rivalries on the other, 
                        see <a href="/notes/bibliography#CHURCHHEADSWITZERLAND" target="_self"><span class="persName-CHCHURCH">Church</span> and <span class="persName-RCHEAD">Head</span>, <span class="title-book-CHURCHHEADSWITZERLAND"><i>Concise History of Switzerland</i></span></a>, 25).</div>
         
         
         <div class="p">In <span class="date-1798">1798</span>, <span class="placeName-building-NEUFALKENSTEINCASTLE">Neu‐Falkenstein Castle</span> was burned by peasants under the leadership of <span class="persName-ROSSLIJEAN">Johann Brunner (“Rössli Jean”)</span> 
                        at the start of the <span class="date-1798-1803">Helvetic Revolution</span>, when French Revolutionary troops invaded <span class="placeName-SWITZERLAND">Switzerland</span> 
                        with the aim of establishing a sister <span class="date-1798-1803">Helvetic Republic</span>.</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
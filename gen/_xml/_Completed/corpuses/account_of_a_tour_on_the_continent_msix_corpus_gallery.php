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
Gallery of untitled vignettes Mountain Gorge Drawing Unascribed Drawing 2 of 8 for Account of a Tour on the Continent (MS IX) River Drawing Mountain Scene with Chalet Drawing Mountain Scene with Boulder Lake Scene with Building on Piers Lakeside with Terraced Villa [drawing] Mountain Aiguilles Drawing
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX49v-50r.jpg msix/MSIX50v-51r.jpg msix/MSIX51v-52r.jpg msix/MSIX52v-53r.jpg msix/MSIX53v-54r.jpg msix/MSIX53v-54r.jpg msix/MSIX54v-55r.jpg msix/MSIX55v-56r.jpg
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
   </div><div id="" class="pb"></div>
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
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>River Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRRIVERMSIX">River Drawing</span></h1>
         Pen and ink, approx. ? × ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as “a river between steep banks, snow mountains in the distance” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1).
                        The intended location and a possible original image that <span class="persName-JR">Ruskin</span> may have copied are unknown. Note that the drawingʼs width requires it to have been affixed 
                        to <span class="title-manuscript-MSIX">MS IX</span> broadside; this drawing, therefore, like <a href="<?php echo r_build_url("figures/the_meuse_liege_drawing_msix.php");?>" target="_self"><span class="title-artwork-JRTHEMEUSELIEGEMSIX">Liège</span></a>, 
                        could not have accommodated text on the same page.
                        
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Mountain Scene with Chalet Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINCHALETMSIX">Mountain Scene (Alps?) with Chalet</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as “a mountain scene, châlet in foreground” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1).
                        The original image that <span class="persName-JR">Ruskin</span> may have copied is unknown, but evidence in the 
                        <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCSTRASBURGILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the “Account” (Table 2, Illustrations)</span></a> 
                        for the section <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_pcs_corpus_strasburgcomp" target="_self"><span class="title-composite-JRSTRASBURGCOMP">“<span class="placeName-STRASBOURG">Strasburg</span>”</span></a> 
                        suggests that this drawing may correspond to a proposed illustration that Ruskin entitled “The swiss cottages”.</div>
         
         <div class="p">The connection between Swiss cottages and Strasbourg in Ruskin's mind is the opening to the Black Forest. His poem 
                        <a href="<?php echo r_build_url("witnesses/oh_the_morn_looked_bright_on_hill_and_dale_poem_msviii.php");?>" target="_self"><span class="title-poem-JROHTHEMORNLOOKEDBRIGHT">“Oh the morn looked bright on hill and dale”</span></a> 
                        focuses on the departure from Strasbourg and Kehl, leading into the Black Forest through the valley of the Kinzig River where it empties into the Rhine; 
                        and his essay <a href="<?php echo r_build_url("witnesses/it_was_a_wide_and_stretchy_sweep_prose_msviii.php");?>" target="_self"><span class="title-essay-JRITWASAWIDEANDSTRETCHYSWEEP">“It was a wide and stretchy sweep of lovely blue champaign”</span></a> 
                        marks the family's first view of that "celebrated thing", the "Swiss cottage". They were in fact encountering the architecture of the Black Forest house, 
                        not the Alpine chalet, but British guidebooks similarly encouraged the perception of the Black Forest as "Swiss" in character (see the contextual glosses attached to 
                        <a href="<?php echo r_build_url("witnesses/oh_the_morn_looked_bright_on_hill_and_dale_poem_msviii.php");?>" target="_self"><span class="title-poem-JROHTHEMORNLOOKEDBRIGHT">“Oh the morn looked bright on hill and dale”</span></a>). 
                        Whatever the source of Ruskin's drawing, it appears to depict an Alpine scene, not the Black Forest.</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Mountain Scene with Boulder</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINBOULDERMSIX">Mountain Scene with Boulder Drawing</span></h1>
         Pen and ink, approx. ? × ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as “a mountain scene” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The foreground is taken up by a large boulder and a pine. Approaching the declivity between these obstacles, a male figure, accompanied by a dog, carries a bundle on his shoulder.
                        The intended location and a possible original image that <span class="persName-JR">Ruskin</span> may have copied are unknown. On the same page, the drawing is pasted above another drawing,
                        <a href="<?php echo r_build_url("figures/");?>" target="_self"><span class="title-artwork-JRLAKEWITHBUILDINGONPIERSMSIX">Lake Scene with Building on Piers</span></a>; 
                        however, no connection between the drawings is evident, except for their similar, comparatively small rectangular shapes, which made their pairing convenient.
                        
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Lake Scene with Building on Piers</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRLAKEWITHBUILDINGONPIERSMSIX">Lake Scene with Building on Piers</span></h1>
         Pen and ink, approx. ? × ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as “a lake with a house on piers islanded on it” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The lake is surrounded by mountains, and the building on piers is surrounded by two sailboats and a rowboat with passengers. Vaguely sketched figures appear to stand or lean 
                        inside the balustrade enclosing the first story of the building, which is tall and narrow with two high windows. Its peaked roof is pierced by dormers, from one of which 
                        a pole extends hung with ragged banners or cloths. On the same page, the drawing is pasted below another drawing,
                        <a href="<?php echo r_build_url("figures/");?>" target="_self"><span class="title-artwork-JRMOUNTAINBOULDERMSIX">Mountain Scene with Boulder Drawing</span></a>; 
                        however, no connection between the drawings is evident, except for their similar, comparatively small rectangular shapes, which made their pairing convenient.
                        
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Lakeside with Terraced Villa [drawing]</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRLAKESIDEWITHTERRACEDVILLAMSIX">Lakeside with Terraced Villa Drawing (Isola Bella?)</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as “a lake‐side, with terraced gardens, hills behind” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The image strongly suggests a view of <span class="geogName-ISOLABELLA">Isola Bella</span> in <span class="geogName-LAKEMAGGIORE">Lago Maggiore</span>, 
                        facing the end of the island where the terraced gardens rise from the level of the lake. The drawing shows the vertical cypresses and statues 
                        decorating the terraces, and the horizontal arched wall extending to the right of the terraces. According to the 
                        <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCDOMODOSSOLAILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTSILLUS">List of Proposed Additional Contents for the “Account”—Illustrations</span></a>), 
                        <span class="persName-JR">Ruskin</span> intended a drawing of <span class="geogName-ISOLABELLA">Isola Bella</span> for the proposed section of the work entitled 
                        <span class="title-composite-JRDOMODOSSOLACOMP">“<span class="placeName-DOMODOSSOLA">Domo dʼOssola</span>”</span>. 
                        On one day of their tour, the Ruskins traveled to this mountain town from the island in <span class="geogName-LAKEMAGGIORE">Lago Maggiore</span>. 
                        (For the Ruskinsʼ visit to the gardens on <span class="geogName-ISOLABELLA">Isola Bella</span>, see the entry with gloss for 
                        <span class="title-composite-JRDOMODOSSOLACOMP">“<span class="placeName-DOMODOSSOLA">Domo dʼOssola</span>”</span> in 
                        the <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCDOMODOSSOLA");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">Proposed Additional Contents</span></a>.)</div>
         
         
         <div class="p">Of course, <span class="persName-JR">Ruskin</span> may have meant the drawing for another villa. According to <a href="/notes/richardson_mary_note" target="_self"><span class="persName-MRC">Mary Richardson</span></a>, 
                        while staying at <span class="placeName-CADENABBIA">Cadenabbia</span>, the Ruskins visited a number of villas on <span class="geogName-LAKECOMO">Lake Como</span> where they admired terraced gardens extending down to the lakeside, 
                        such as <span class="name--VILLASOMMARIVA">Villa Sommariva</span>, <span class="placeName-VILLAPLINIANINA">Villa Pliniana</span>, and <span class="name--">Villa Melzi</span> 
                        (<a href="/notes/bibliography#RFT48" target="_self"><span class="title-manuscript-RFT48">Diary of Mary Richardson</span>, 1833</a>, 43–45). None of these seems likely, however, to have suggested a view 
                        oriented away from the villa itself and presenting only the terraces of the garden—a view unique to an island villa like <span class="placeName-building-ISOLABELLAPALACE">Isola Bella</span>, where the visitor can circle around the structures.</div>
         
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Mountain Aiguilles Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINAIGUILLESMSIX">Mountain Aiguilles Drawing</span></h1>
         Pen and ink, approx. ? × ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as “aiguilles” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1).
                        The intended location and a possible original image that <span class="persName-JR">Ruskin</span> may have copied are unknown. 
                        The distant aiguilles are drawn with a light touch to suggest distance. In the darker foreground, a tiny figure perches precariously at the edge of a jutting rock to survey the scene.
                        
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
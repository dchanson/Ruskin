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
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>Mountain Gorge Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINGORGEMSIX">Entrance to Gondo Gallery</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as a &#x201C;a mountain gorge&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The drawing is a copy of <span class="persName-WBI">William Brockedon</span>&#x02BC;s chapter&#x2010;title vignette for &#x201C;The Pass of the Simplon&#x201D;, 
                        <span class="title-artwork-"><i>The Great Gallery near Gondo</i></span>, 
                        engraved by <span class="persName-EFF">Edward Finden</span>, in <a href="/notes/bibliography#BROCKEDONILLUSTRATIONS" target="_self"><span class="title-book-BROCKEDONILLUSTRATIONS"><i>Illustrations of the Passes of the Alps</i></span></a> (vol. 2, &#x201C;The Pass of the Simplon &#x201D;, title page).
         </div>
         
         
         <div class="p">According to <span class="persName-JR">Ruskin</span>&#x02BC;s <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCFAREWELLTOITALYILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the Account of a Tour on the Continent</span></a>, 
                        he destined this drawing for a section entitled <span class="title-composite-JRFAREWELLCOMP">&#x201C;Farewell to <span class="placeName-ITALY">Italy&#x201D;</span></span>, 
                        referring to the crossing into <span class="placeName-SWITZERLAND">Switzerland</span> via the <span class="geogName-SIMPLON">Simplon Pass</span>. 
                        Along with the vignette, a copy of another plate from <span class="persName-WBI">Brockedon</span>&#x02BC;s <span class="geogName-SIMPLON">Simplon</span> chapter, 
                        <span class="title-artwork-WBIVALDOSSOLADEFILE"><i>Val d&#x02BC;Ossola from the Defile of the Dovedro</i></span>, were to be placed
                        in reverse order from their appearance in the <span class="title-book-BROCKEDONILLUSTRATIONS"><i>Illustrations</i></span>, 
                        since the Ruskins&#x02BC; itinerary carried them in the opposite direction from <span class="persName-WBI">Brockedon</span>&#x02BC;s imagined traveler.
         </div>
         
         
         <div class="p"><span class="persName-WBI">Brockedon</span> dwells on &#x201C;<i>les belles horreurs</i> of the <span class="geogName-SIMPLON">Simplon</span>&#x201D;, 
                        particularly the narrow <span class="geogName-GONDOGORGE">Gondo Gorge</span>, where several dramatic features converge to form the scene in the vignette: 
                        &#x201C;the rocky and perpendicular bases of the mountains approach more closely, 
                        leaving only space for the road and the foaming torrent &#x005B;of the <span class="geogName-DIVERIARIVER">Diveria River</span>&#x005D;, which the latter in some places entirely usurps; 
                        and in such places the road is carried through galleries cut in the rocks. . . . &#x005B;T&#x005D;he wonder of this part of the road is the great gallery, which is formed just below the place 
                        where a bridge leads from the right to the left bank of the <span class="geogName-DIVERIARIVER">Dovedro &#x005B;i.e., Diveria&#x005D;</span>. The ravine appears to be closed in, 
                        and the only passage is by one of the most stupendous works ever accomplished&#x2014;a gallery, cut through the <span class="name--GRANITE">granite</span>, 
                        596 English feet long, which at the opening on the Italian side crosses the waterfall of the <span class="geogName-FRASSINONE">Frassinone</span>: 
                        this torrent, falling from a great height, rushes through the bridge thrown across it, and descends above 100 feet into the <span class="geogName-DOVEDRO">Dovedro</span>, where the latter river, 
                        forming a cataract, meets the waters of the <span class="geogName-FRASSINONE">Frassinone</span> in horrible commotion: it is a spot unrivalled in its astonishing effect&#x201D;
                        (<a href="/notes/bibliography#BROCKEDONILLUSTRATIONS" target="_self"><span class="persName-WBI">Brockedon</span>, <span class="title-book-BROCKEDONILLUSTRATIONS"><i>Illustrations of the Passes of the Alps</i></span></a> (vol. 2, &#x201C;The Pass of the Simplon &#x201D;, 12; 
                        see also <a href="/notes/bibliography#EBELTRAVELLERSGUIDE" target="_self"><span class="persName-JGE">Ebel</span>, <span class="title-book-EBELTRAVELLERSGUIDE"><i>Traveller&#x02BC;s Guide through Switzerland</i></span></a>, 84&#x2013;85, 
                        in which the river forming the cataract is also named the <span class="geogName-FRASSINONE">Alpirnbach</span>&#x2014;today, the <span class="geogName-FRASSINONE">Alpjerbach</span> and <span class="geogName-FRASSINONE">Alpjerfall</span>).
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Unascribed Drawing 2 of 8 for Account of a Tour on the Continent (MS IX)</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRBALSTALLMSIX">Vignette after &#x201C;Ancient Fortress and Rocky peak / Above the vale of Balstall&#x201D;</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as &#x201C;mountain heights, a castle on one&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The drawing is a vignette based on an original drawing by <span class="persName-JR">Ruskin</span>, which he entitled 
                        <span class="title-artwork-JRBALSTALL1833">&#x201C;Ancient Fortress and Rocky peak. / Above the vale of <span class="placeName-BALSTHAL">Balstall</span>, <span class="geogName-JURA">Jura</span>&#x201D;</span>, 
                        and which is one of two sketches on the sheet <a href="/notes/bibliography#JRBALSTALLANDMONTBLANC" target="_self"><span class="title-artwork-JRBALSTALLANDMONTBLANC"><i>Balsthal; Mont Blanc from Geneva</i></span></a>, 
                        Ruskin Library, <span class="placeName-LANCASTER">Lancaster</span>. <span class="title-artwork-JRBALSTALL1833">&#x201C;Ancient Fortress and Rocky peak&#x201D;</span> 
                        is reproduced in <a href="/notes/bibliography#WALTONDRAWINGS" target="_self"><span class="persName-PHW">Walton</span>, <span class="title-book-WALTONDRAWINGS"><i>Drawings of John Ruskin</i></span></a> (p. 15).
         </div>
         
         
         <div class="p">According to <span class="persName-JR">Ruskin</span>&#x02BC;s <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">Plan for Continuation of the Account of a Tour on the Continent</span></a>, 
                        he intended a section entitled <span class="title-composite-JRBALSTALLCOMP">&#x201C;Balstall&#x201D;</span>, falling between the sections 
                        <span class="title-composite-JRTHERHINECOMP">&#x201C;Rhine&#x201D;</span> and <span class="title-composite-JRNEUFCHATELCOMP">&#x201C;Neufchatel&#x201D;</span>, 
                        and it was to be illustrated by a scene that could well refer to this drawing: &#x201C;Fortress. View of <span class="geogName-ALPS">Alps</span>&#x201D;. 
                        See <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCBALSTALLILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents: Balstall</span></a>; see also 
                        <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#COMPOSITEILLUSTRATEDTRAVELOGUEILLUS" target="_self">Account of a Tour on the Continent: Missing and Unidentified Drawings for the Composite&#x2010;Genre Illustrated Travelogue (<span class="title-manuscript-MSIX">MS IX</span>) and Related <span class="date-1833">1833</span> Tour Sketches</a>; 
                        and <a href="/notes/drawings_1833_note" target="_self">Drawings from the Tour of 1833</a>.
         </div>
         
         
         <div class="p">The location is <span class="placeName-BALSTHAL">Balsthal</span>, in the canton of <span class="placeName-SOLEURE">Solothurn</span>, 
                        <span class="placeName-SWITZERLAND">Switzerland</span>. Of the two castles in the valley, this drawing apparently represents the 
                        <span class="placeName-building-NEUFALKENSTEINCASTLE">Neu&#x2010;Falkenstein Castle</span>. In his <span class="date-1838">1838</span> 
                        guidebook to <span class="placeName-SWITZERLAND">Switzerland</span>, <span class="persName-JM">John Murray III</span> comments on these 
                        &#x201C;imposing ruins of the <span class="placeName-building-NEUFALKENSTEINCASTLE"><i>Castle of Falkenstein</i></span>, 
                        surmounted by its circular <span class="name--FALKENSTEINDONJON">Donjon</span>, &#x005B;which&#x005D; rise midway between the two roads to 
                        <span class="placeName-BASLE">Bâle</span> &#x005B;i.e., <span class="placeName-BASLE">Basel</span>&#x005D;, 
                        by the <span class="placeName-HAUENSTEIN">Hauenstein</span> and by the <span class="geogName-PASSWANG">Passwang</span> 
                        &#x005B;i.e., two mountain passes in the <span class="geogName-JURA">Jura</span>&#x005D; which unite here. This position gave to its ancient owners 
                        the powers of levying blackmail upon each of these passes. It belonged at one time to <span class="persName-RVONWART">Rudolph von Wart</span>, 
                        who was broken on the wheel for his share in the murder of the &#x005B;Habsburg&#x005D; <span class="persName-ALBERTI">Emperor Albert</span> &#x005B;i.e., <span class="persName-ALBERTI">Albrecht I</span> (<span class="date-1250-1308">ca. 1250&#x2013;1308</span>)&#x005D;, 
                        and was consoled in his agony by the presence and fortitude of his wife&#x201D; 
                        (<a href="/notes/bibliography#MURRAYSHANDBOOKSWITZERLAND1838" target="_self"><span class="title-book-MURRAYSHANDBOOKSWITZERLAND1838"><i>Hand&#x2010;book for Travellers in <span class="placeName-SWITZERLAND">Switzerland</span></i></span></a>, 9&#x2013;10).
         </div>
         
         
         <div class="p">The fortitude of the assassin&#x02BC;s wife at the scene of his torture is memorialized by <span class="persName-FDH">Felicia Hemans</span> 
                        in an <span class="date-1826">1826</span> poem, <span class="title-poem-">&#x201C;Gertrude, or Fidelity till Death&#x201D;</span>, 
                        collected in <span class="title-anthology-HEMANSRECORDSOFWOMAN"><i>Records of Woman: With Other Poems</i></span> (<span class="date-1828">1828</span>). 
                        <span class="persName-SJWOLFSON">Susan Wolfson</span> points out that <span class="persName-FDH">Hemans</span> depicts <span class="persName-ALBERTI">Albrecht</span>&#x02BC;s death in another poem of the period, 
                        <span class="title-poem-">&#x201C;A Monarch&#x02BC;s Death&#x2010;Bed&#x201D;</span> in <a href="/notes/bibliography#FRIENDSHIPSOFFERING1826" target="_self"><span class="title-annual-FRIENDSHIPSOFFERING1826"><i>Friendship&#x02BC;s Offering: A Literary Album</i></span> (<span class="date-1826">1826</span>)</a>, 1&#x2013;2. 
                        See <a href="/notes/bibliography#HEMANSSELECTEDPOEMS" target="_self"><span class="persName-FDH">Hemans</span>, <span class="title-book-HEMANSSELECTEDPOEMS"><i>Selected Poems</i></span>, ed. <span class="persName-SJWOLFSON">Wolfson</span></a>, 356&#x2013;58. 
                        In the latter poem, <span class="persName-ALBERTI">Albrecht</span>&#x02BC;s sole comforter is a peasant woman on the riverbank where he was murdered. 
                        For the political significance of this regicide respecting the alliances among Swiss communities on the one hand, and dynastic rivalries on the other, 
                        see <a href="/notes/bibliography#CHURCHHEADSWITZERLAND" target="_self"><span class="persName-CHCHURCH">Church</span> and <span class="persName-RCHEAD">Head</span>, <span class="title-book-CHURCHHEADSWITZERLAND"><i>Concise History of Switzerland</i></span></a>, 25).
         </div>
         
         
         <div class="p">In <span class="date-1798">1798</span>, <span class="placeName-building-NEUFALKENSTEINCASTLE">Neu&#x2010;Falkenstein Castle</span> was burned by peasants under the leadership of <span class="persName-ROSSLIJEAN">Johann Brunner (&#x201C;Rössli Jean&#x201D;)</span> 
                        at the start of the <span class="date-1798-1803">Helvetic Revolution</span>, when French Revolutionary troops invaded <span class="placeName-SWITZERLAND">Switzerland</span> 
                        with the aim of establishing a sister <span class="date-1798-1803">Helvetic Republic</span>.
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>River Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRRIVERMSIX">River Drawing</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as &#x201C;a river between steep banks, snow mountains in the distance&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1).
                        The intended location and a possible original image that <span class="persName-JR">Ruskin</span> may have copied are unknown. Note that the drawing&#x02BC;s width requires it to have been affixed 
                        to <span class="title-manuscript-MSIX">MS IX</span> broadside; this drawing, therefore, like <a href="<?php echo r_build_url("figures/the_meuse_liege_drawing_msix.php");?>" target="_self"><span class="title-artwork-JRTHEMEUSELIEGEMSIX">Liège</span></a>, 
                        could not have accommodated text on the same page.
                        
         
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Mountain Scene with Chalet Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINCHALETMSIX">Mountain Scene (Alps?) with Chalet</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as &#x201C;a mountain scene, châlet in foreground&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1).
                        The original image that <span class="persName-JR">Ruskin</span> may have copied is unknown, but evidence in the 
                        <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCSTRASBURGILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the &#x201C;Account&#x201D; (Table 2, Illustrations)</span></a> 
                        for the section <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_pcs_corpus_strasburgcomp" target="_self"><span class="title-composite-JRSTRASBURGCOMP">&#x201C;<span class="placeName-STRASBOURG">Strasburg</span>&#x201D;</span></a> 
                        suggests that this drawing may correspond to a proposed illustration that Ruskin entitled &#x201C;The swiss cottages&#x201D;.
         </div>
         
         <div class="p">The connection between Swiss cottages and Strasbourg in Ruskin's mind is the opening to the Black Forest. His poem 
                        <a href="<?php echo r_build_url("witnesses/oh_the_morn_looked_bright_on_hill_and_dale_poem_msviii.php");?>" target="_self"><span class="title-poem-JROHTHEMORNLOOKEDBRIGHT">&#x201C;Oh the morn looked bright on hill and dale&#x201D;</span></a> 
                        focuses on the departure from Strasbourg and Kehl, leading into the Black Forest through the valley of the Kinzig River where it empties into the Rhine; 
                        and his essay <a href="<?php echo r_build_url("witnesses/it_was_a_wide_and_stretchy_sweep_prose_msviii.php");?>" target="_self"><span class="title-essay-JRITWASAWIDEANDSTRETCHYSWEEP">&#x201C;It was a wide and stretchy sweep of lovely blue champaign&#x201D;</span></a> 
                        marks the family's first view of that "celebrated thing", the "Swiss cottage". They were in fact encountering the architecture of the Black Forest house, 
                        not the Alpine chalet, but British guidebooks similarly encouraged the perception of the Black Forest as "Swiss" in character (see the contextual glosses attached to 
                        <a href="<?php echo r_build_url("witnesses/oh_the_morn_looked_bright_on_hill_and_dale_poem_msviii.php");?>" target="_self"><span class="title-poem-JROHTHEMORNLOOKEDBRIGHT">&#x201C;Oh the morn looked bright on hill and dale&#x201D;</span></a>). 
                        Whatever the source of Ruskin's drawing, it appears to depict an Alpine scene, not the Black Forest.
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Mountain Scene with Boulder</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINBOULDERMSIX">Mountain Scene with Boulder Drawing</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as &#x201C;a mountain scene&#x201D; 
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
         Pen and ink, approx. ? &#x00D7; ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as &#x201C;a lake with a house on piers islanded on it&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The lake is surrounded by mountains, and the building on piers is surrounded by two sailboats and a rowboat with passengers. Vaguely sketched figures appear to stand or lean 
                        inside the balustrade enclosing the first story of the building, which is tall and narrow with two high windows. Its peaked roof is pierced by dormers, from one of which 
                        a pole extends hung with ragged banners or cloths. On the same page, the drawing is pasted below another drawing,
                        <a href="<?php echo r_build_url("figures/");?>" target="_self"><span class="title-artwork-JRMOUNTAINBOULDERMSIX">Mountain Scene with Boulder Drawing</span></a>; 
                        however, no connection between the drawings is evident, except for their similar, comparatively small rectangular shapes, which made their pairing convenient.
                        
         
         
      </div>
   </div><div id="" class="pb"></div>
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
   <div class="fileName"><span>Mountain Aiguilles Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINAIGUILLESMSIX">Mountain Aiguilles Drawing</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as &#x201C;aiguilles&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1).
                        The intended location and a possible original image that <span class="persName-JR">Ruskin</span> may have copied are unknown. 
                        The distant aiguilles are drawn with a light touch to suggest distance. In the darker foreground, a tiny figure perches precariously at the edge of a jutting rock to survey the scene.
                        
         
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
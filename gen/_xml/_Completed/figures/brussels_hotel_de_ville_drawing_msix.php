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
“Brussels” Drawing 1 of 3
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Brussels” Drawing 1 of 3</span></div>
   <div class="figure">
      <div class="photogravure" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRHOTELDEVILLEBRUSSELSPROUTCOPY"><span class="placeName-building-HOTELDEVILLEBRUSSELS">Hôtel de Ville</span>, <span class="placeName-BRUSSELS">Brussels</span></span></h1>
         “Copy reduced to miniature scale” of <span class="persName-SP">Samuel Prout</span>, <span class="title-artwork-PROUTDEVILLEBRUSSELS"><i>Hotel de Ville Brussells</i></span> in 
                        <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-book-PROUTSKETCHES"><i>Facsimiles of Sketches Made in <span class="placeName-FLANDERS">Flanders</span> and <span class="placeName-GERMANY">Germany</span></i></span></a>. Location unknown?
         
         
         <div class="p">In the <span class="title-exhibition-FINEARTSOCIETYRUSKINSTURNERS1878"><span class="date-1878">1878</span> Fine Art Society exhibition of <span class="persName-JR">Ruskin</span>ʼs collection of <span class="persName-JMWT">Turner</span> drawings</span>, 
                        <span class="persName-JR">Ruskin</span> showed his own “copy from <span class="persName-SP">Prout</span>ʼs wonderful drawing” 
                        of the <span class="placeName-building-HOTELDEVILLEBRUSSELS">Brussels Hôtel de Ville</span> found in the artistʼs “<span class="title-book-PROUTSKETCHES">sketches in <span class="placeName-FLANDERS">Flanders</span> and <span class="placeName-GERMANY">Germany</span></span>”, 
                        which <span class="persName-JR">Ruskin</span> had “made at home (<span class="placeName-building-HERNE">Herne Hill</span>), with other such, to ‘illustrate’ my <span class="title-composite-JRACCOUNTTOUR">diary of that first Continental Travel</span>”—that is, 
                        the <span class="title-composite-JRACCOUNTTOUR">“Account”</span> 
                        (<span class="title-catalogue-JRNOTESONMYOWNDRAWINGS1878">“Notes on My Own Drawings and Engravings”</span>, in <span class="title-catalogue-JRNOTESBYMRRUSKIN1878"><i>Notes by <span class="persName-JR">Mr. Ruskin</span> on His Drawings by the Late <span class="persName-JMWT">J. M. W. Turner, R.A.</span></i></span>
                        [<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <i>Works</i></a>, 13:505]). Six years earlier, <span class="persName-JR">Ruskin</span> may also have shown this drawing, along with two other copies after <span class="persName-SP">Prout</span> made in his youth, 
                        to illustrate one of the <span class="date-1872">1872</span> <span class="placeName-OXFORD">Oxford</span> lectures on engraving that were later published as <span class="title-book-JRARIADNE"><i>Ariadne Florentina</i></span>. On this occasion, he may have shown his audience the entirety of <span class="title-manuscript-MSIX">MS IX</span>, 
                        rather than exhibiting <span class="persName-SP">Prout</span> copies separately from this context (see <a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <i>Works</i></a>, 22:368). 
                        For the <span class="date-1878">1878</span> exhibition, however, the <span class="placeName-building-HOTELDEVILLEBRUSSELS">Hôtel de Ville</span> drawing must have been mounted separately from <span class="title-manuscript-MSIX">MS IX</span>, whether or not it had ever been pasted into the manuscript (see 
                        see <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#COMPOSITEILLUSTRATEDTRAVELOGUEILLUS" target="_self">Missing and Unidentified Drawings for the Composite‐Genre Illustrated Travelogue [<span class="title-manuscript-MSIX">MS IX</span>] and Related <span class="date-1833">1833</span> Tour Sketches</a>).</div>
         
         
         <div class="p"><span class="persName-JR">Ruskin</span> took care to distinguish his copy of <span class="persName-SP">Prout</span>ʼs <span class="title-artwork-PROUTDEVILLEBRUSSELS"><span class="placeName-building-HOTELDEVILLEBRUSSELS"><i>Hotel de Ville Brussells</i></span></span> from his own <span class="date-1833">1833</span> on‐site tour sketch, 
                        <span class="title-artwork-JRHOTELDEVILLEBRUSSELSPML"><i><span class="placeName-building-HOTELDEVILLEBRUSSELS">Hotel de Ville</span>, <span class="placeName-BRUSSELS">Brussels</span></i></span> (see 
                        <a href="/notes/drawings_1833_note" target="_self">Drawings from the <span class="date-1833-05-14-1833-08-19">Tour of 1833</span></a>). What is not clear 
                        is the identification and provenance of <span class="persName-JR">Ruskin</span>ʼs copy after <span class="persName-SP">Prout</span>—or rather copies, since two different imitations of <span class="persName-SP">Prout</span>ʼs lithograph emerge 
                        in the record after <span class="date-1900">1900</span>. According to the <span class="title-catalogue-CATALOGUEOFRUSKINSDRAWINGSLE">“Catalogue of <span class="persName-JR">Ruskin</span>ʼs Drawings”</span> compiled for the <span class="title-book-JRWORKSLE">Library Edition</span>, 
                        two different copies by <span class="persName-JR">Ruskin</span> of <span class="persName-SP">Prout</span>ʼs <span class="title-artwork-PROUTDEVILLEBRUSSELS"><span class="placeName-building-HOTELDEVILLEBRUSSELS"><i>Hotel de Ville Brussells</i></span></span> existed—one, 
                        a drawing now identified with a piece held by the Ruskin Library, <span class="placeName-LANCASTER">Lancaster</span>, 
                        <a href="/notes/bibliography#JRHOTELDEVILLEBRUSSELSPROUT" target="_self"><span class="title-artwork-JRHOTELDEVILLEBRUSSELSPROUT"><i><span class="placeName-building-HOTELDEVILLEBRUSSELS">Hotel de Ville</span>, <span class="placeName-BRUSSELS">Brussels</span>, after <span class="persName-SP">Samuel Prout</span></i></span></a>, 
                        (6 3/4 × 4 1/4 inches, pen and ink with pencil wash, signed but untitled by <span class="persName-JR">Ruskin</span>); and two, a “copy reduced to miniature scale” of the preceding copy after <span class="persName-SP">Prout</span> (specifications and current location unknown) 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-books-JRWORKSLE"><i>Works</i></span></a>, 38:276 [nos. 1358, 1359]). 
                        Which of these drawings did <span class="persName-JR">Ruskin</span> exhibit in <span class="date-1872">1872</span> and <span class="date-1878">1878</span>, respectively? The description of the larger drawing—apparently the one held by the Ruskin Library, with its “pencil wash”—corresponds to what <span class="persName-JR">Ruskin</span> characterized 
                        in the <span class="date-1878">1878</span> <span class="title-catalogue-JRNOTESONMYOWNDRAWINGS1878">“Notes on My Own Drawings”</span> as the drawingʼs “most wholesome discipline;—the grey wash 
                        being now introduced when the pencil shade was impossible, but not carelessly or licentiously” (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSLE"><i>Works</i></span></a>, 13:505). 
                        At almost 7 inches in height, however, this drawing could not have fit into the half‐page vertical space above the section title, <span class="title-composite-JRBRUSSELSCOMP">“<span class="placeName-BRUSSELS">Brussels</span>”</span>, 
                        in the 8 × 6 1/2‐inch <span class="title-manuscript-MSIX">MS IX</span>.</div>
         
         
         <div class="p">The existence of two versions—a larger and a smaller, vignette‐sized version—is supported, albeit inconclusively so, by additional exhibition history at the 
                        <span class="title-exhibition-RUSKINEXHIBITIONCONISTON1900"><span class="date-1900">1900</span> <span class="persName-JR">Ruskin</span> Memorial Exhibition, Mechanicsʼ Institution, <span class="placeName-CONISTON">Coniston</span></span>. 
                        According to <span class="persName-WGC">W. G. Collingwood</span>ʼs <a href="/notes/bibliography#WGCRUSKINEXHIBITION1900" target="_self"><span class="title-catalogue-WGCRUSKINEXHIBITION1900">catalogue</span></a> for the 
                        exhibition, item no. 10 was a copy after a <span class="persName-SP">Prout</span> lithograph, but reduced to a “miniature scale”. (Specifically, item no. 10 was a miniaturization 
                        of <span class="persName-JR">Ruskin</span>ʼs copy of <span class="persName-SP">Prout</span>ʼs <span class="title-artwork-PROUTDEVILLEBRUSSELS"><span class="placeName-building-HOTELDEVILLEBRUSSELS"><i>Hotel de Ville Brussells</i></span></span>, 
                        according to the <span class="title-catalogue-CATALOGUEOFRUSKINSDRAWINGSLE">“Catalogue of <span class="persName-JR">Ruskin</span>ʼs Drawings”</span> compiled for the <span class="title-book-JRWORKSLE">Library Edition</span> 
                        [<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSLE"><i>Works</i></span></a>, 38:276, no. 1359]. 
                        Inconveniently, <span class="persName-WGC">Collingwood</span>ʼs catalogue entry does not identify the subject, but states merely that the source of <span class="persName-JR">Ruskin</span>ʼs miniature copy was a <span class="persName-SP">Prout</span> lithograph “like” what had served as the source for no. 9 in the exhibition, which was <span class="persName-JR">Ruskin</span>ʼs 
                        <a href="/notes/bibliography#JRHOTELDEVILLELOUVAINPROUT" target="_self"><span class="date-1835">1835</span> copy after <span class="persName-SP">Prout</span>ʼs lithograph, <span class="title-artwork-PROUTLOUVAIN"><span class="placeName-building-HOTELDEVILLELEUVEN"><i>Hotel de Ville Louvain</i></span></span></a> 
                        (i.e., <span class="placeName-LEUVEN">Leuven</span>) from <span class="title-book-PROUTSKETCHES"><i>Facsimiles of Sketches Made in <span class="placeName-FLANDERS">Flanders</span> and <span class="placeName-GERMANY">Germany</span></i></span>. 
                        It is odd that the exhibition set up a comparison of larger and smaller copies after <span class="persName-SP">Prout</span> of differing Renaissance hôtels de ville in <span class="placeName-BELGIUM">Belgium</span>, rather than of the same building. 
                        In <span class="date-1900">1900</span>, the larger drawing may not have been at hand, however: in <span class="title-book-JRPRAETERITA"><i>Praeterita</i></span>, <span class="persName-JR">Ruskin</span> says that this drawing was kept at <span class="placeName-OXFORD">Oxford</span>  
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-books-JRWORKSLE"><i>Works</i></span></a>, 35:81).</div>
         
         
         <div class="p">One might be tempted to apply <span class="persName-OCCAM">Occam</span>ʼs razor and declare <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span>ʼs two entries for drawings after <span class="persName-SP">Prout</span>ʼs <span class="title-artwork-PROUTDEVILLEBRUSSELS"><span class="placeName-building-HOTELDEVILLEBRUSSELS"><i>Hotel de Ville Brussells</i></span></span> 
                        in the <span class="title-catalogue-CATALOGUEOFRUSKINSDRAWINGSLE">“Catalogue of <span class="persName-JR">Ruskin</span>ʼs Drawings”</span> as referring to one and the same drawing; 
                        however, the most stubborn fact confronting us today is that the larger, surviving drawing will not fit the space above <span class="title-composite-JRBRUSSELSCOMP">“<span class="placeName-BRUSSELS">Brussels</span>”</span> 
                        in the <span class="title-manuscript-MSIX">MS IX</span> fair copy of the <span class="title-composite-JRACCOUNTTOUR">“Account”</span>—and whatever version or versions 
                        <span class="persName-JR">Ruskin</span> exhibited in <span class="date-1872">1872</span> and <span class="date-1878">1878</span>, he clearly connected his copying of <span class="persName-SP">Prout</span>ʼs <span class="title-artwork-PROUTDEVILLEBRUSSELS"><span class="placeName-building-HOTELDEVILLEBRUSSELS"><i>Hotel de Ville Brussells</i></span></span> 
                        with the <span class="title-composite-JRACCOUNTTOUR">“Account”</span> project. It is reasonable to conclude that he drew two copies in <span class="date-1833">1833</span> or <span class="date-1834">1834</span>, one of them 
                        a vignette meant as the header for the <span class="title-manuscript-MSIX">MS IX</span> fair copy of <span class="title-composite-JRBRUSSELSCOMP">“<span class="placeName-BRUSSELS">Brussels</span>”</span>, 
                        and that the whereabouts of this version, last recorded in <span class="date-1900">1900</span>, is presently unknown.</div>
         
         
         <div class="p">We are left with further interesting questions: What purpose was served by <span class="persName-JR">Ruskin</span>ʼs larger copy after <span class="persName-SP">Prout</span>, 
                        <a href="/notes/bibliography#JRHOTELDEVILLEBRUSSELSPROUT" target="_self"><span class="title-artwork-JRHOTELDEVILLEBRUSSELSPROUT"><i><span class="placeName-building-HOTELDEVILLEBRUSSELS">Hotel de Ville</span>, <span class="placeName-BRUSSELS">Brussels</span></i></span></a>—a 
                        drawing on a scale similar to <span class="persName-SP">Prout</span>ʼs original lithograph—whether in the process of reducing the scene to a vignette, or apart from that process? 
                        And what relation did both copies bear to <span class="persName-JR">Ruskin</span>ʼs own sketch of the building made on site in <span class="date-1833">1833</span>, 
                        <a href="/notes/bibliography#JRHOTELDEVILLEBRUSSELSPML" target="_self"><span class="title-artwork-JRHOTELDEVILLEBRUSSELSPML"><i><span class="placeName-building-HOTELDEVILLEBRUSSELS">Hotel de Ville</span>, <span class="placeName-BRUSSELS">Brussels</span></i></span></a> 
                        (12 × 9 inches, pencil; Pierpont Morgan Library, <span class="placeName-NEWYORK">New York</span>; see <a href="/notes/drawings_1833_note" target="_self">Drawings from the <span class="date-1833-05-14-1833-08-19">Tour of 1833</span></a>)? 
                        The evidence of the two copies—one on the large scale of a lithograph, and the other on the reduced scale of a steel‐engraved vignette—suggests that <span class="persName-JR">Ruskin</span> was exploring differing effects of visual media in print culture per se, 
                        as compared with a tour sketch based on observation (see <a href="/notes/drawings_1833_note" target="_self">Drawings from the <span class="date-1833-05-14-1833-08-19">Tour of 1833</span></a>.</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
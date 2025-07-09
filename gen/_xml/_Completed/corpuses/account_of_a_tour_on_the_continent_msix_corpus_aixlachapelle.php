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
“Aix La Chapelle” “Aix la Chapelle” Drawing 1 of 1 “Aix La Chapelle” [section title] “Aix La Chapelle” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX28v-29r.jpg msix/MSIX28v-29r.jpg msix/MSIX28v-29r.jpg msix/MSIX29v-30r.jpg msix/MSIX30v-31r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Aix la Chapelle” Drawing 1 of 1</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRAIXLACHAPELLEMSIX">Aachen Cathedral</span></h1>
         
         
         
         <div class="floating-text">
            
            <div>
               
               <div class="p">Pen and ink, approx. ? × ? cm (image only).</div>
               
               <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “nearly full‐page one of a large Continental church” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:350 n. 2). The 
                        drawing is in the manner of <a href="/notes/prout_samuel_note" target="_self"><span class="persName-SP">Samuel Prout</span> (<span class="date-1783-1852">1783–1852</span>)</a>; 
                        the nearly full‐page vertical image suggests the large scale of <span class="persName-SP">Prout</span>ʼs lithographs in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-book-PROUTSKETCHES"><i>Facsimiles of Sketches Made in <span class="placeName-FLANDERS">Flanders</span> and <span class="placeName-GERMANY">Germany</span></i></span></a>.</div>
               
               <div class="p">Despite the uncertainty expressed by the editors of the <span class="title-book-JRWORKSLE">Library Edition</span>, the building depicted seems clearly enough intended 
                        to represent <span class="placeName-building-AACHENCATHEDRAL">Aachen Cathedral</span>, 
                        although <span class="persName-JR">Ruskin</span> distorted the proportions of the building, making it seem more vertical than broad, 
                        by over‐emphasizing the Gothic structures that encircle the Carolingian. 
                        <span class="persName-JR">Ruskin</span> orients the viewer from the southwest. On the left of the drawing, rises the cathedralʼs distinctive octagonal 
                        <span class="placeName-building-PALATINECHAPEL">Palatine Chapel</span> 
                        (which <span class="persName-JR">Ruskin</span> represents as too narrow and spire‐like), capped by its baroque cupola. Outside the frame on the left, 
                        he has omitted from view the cathedralʼs west‐work (the neo‐Gothic tower that presently defines the western end was added to the 
                        Carolingian base in <span class="date-1879-1884">1879–84</span>). On the right of the drawing extends the fifteenth‐century choir.</div>
               </div>
            </div>
         
         
         
         </div>
   </div>
   <div>
      
      <div class="p">Pen and ink, approx. ? × ? cm (image only).</div>
      
      <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “nearly full‐page one of a large Continental church” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:350 n. 2). The 
                        drawing is in the manner of <a href="/notes/prout_samuel_note" target="_self"><span class="persName-SP">Samuel Prout</span> (<span class="date-1783-1852">1783–1852</span>)</a>; 
                        the nearly full‐page vertical image suggests the large scale of <span class="persName-SP">Prout</span>ʼs lithographs in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-book-PROUTSKETCHES"><i>Facsimiles of Sketches Made in <span class="placeName-FLANDERS">Flanders</span> and <span class="placeName-GERMANY">Germany</span></i></span></a>.</div>
      
      <div class="p">Despite the uncertainty expressed by the editors of the <span class="title-book-JRWORKSLE">Library Edition</span>, the building depicted seems clearly enough intended 
                        to represent <span class="placeName-building-AACHENCATHEDRAL">Aachen Cathedral</span>, 
                        although <span class="persName-JR">Ruskin</span> distorted the proportions of the building, making it seem more vertical than broad, 
                        by over‐emphasizing the Gothic structures that encircle the Carolingian. 
                        <span class="persName-JR">Ruskin</span> orients the viewer from the southwest. On the left of the drawing, rises the cathedralʼs distinctive octagonal 
                        <span class="placeName-building-PALATINECHAPEL">Palatine Chapel</span> 
                        (which <span class="persName-JR">Ruskin</span> represents as too narrow and spire‐like), capped by its baroque cupola. Outside the frame on the left, 
                        he has omitted from view the cathedralʼs west‐work (the neo‐Gothic tower that presently defines the western end was added to the 
                        Carolingian base in <span class="date-1879-1884">1879–84</span>). On the right of the drawing extends the fifteenth‐century choir.</div>
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Aix La Chapelle” [section title]</span></div><div id="MSIX29r" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:4.4em"> </span><span class="title-composite-JRAIXLACHAPELLECOMP"><span class="smallcaps">AIX LA CHAPELLE</span></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Aix La Chapelle” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">Hast ever heard of the peace of <span class="placeName-AIXLACHAPELLE">Aix‐la‐Chapelle</span>,<br/>
                    reader,—.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#PEACEOFAIXLACHAPELLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> If thou ever travellest from <span class="placeName-SPA">Spa</span> to <span class="placeName-AIXLACHAPELLE">Aix</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#SPATOAIXGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><br/>
            <div id="MSIX29v" class="pb"></div>
                    or from <span class="placeName-AIXLACHAPELLE">Aix</span> to <span class="placeName-COLOGNE">Cologne</span>, thou shall find various<br/>
                    treaties of peace have been entered into, and rat‐<br/>
                    ified, which thou wilt not approve of.—. Thou<br/>
                    shalt find a treaty whereof the first condition<br/>
                    is, that the postillions whip be not closely ac‐<br/>
                    quainted with the back of his quadrupeds, more<br/>
                    than two or three times in a stage, or so.</div>
         
         <div class="p">Item. That the above mentioned quadrupeds, be<br/>
                    not compelled to draw any carriage, chariot<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span><br/>
                    gig, or other vehicle, whatsoever, at a greater<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><br/>
                    rate than two miles an hour.</div>
         
         <div class="p">Item, that the above mentioned quadrupeds, be<br/>
                    not compelled to trot upon the paved centre of the<br/>
                    road, but that they be permitted to draw the car‐<br/>
                    riage, chariot, gig, or other vehicle, into the beds of<br/>
                    sand and dust, denominated by the postillion,<br/>
                    “la terre”, even although the carriage, chariot, gig<br/>
                    or other vehicle, be in imminent danger, of be‐<br/>
                    ing overset into the ditch, which commonly bor‐<br/>
                    dereth upon the road.</div>
         
         <div class="p">Item, that the postillion be permitted, when<br/>
            <div id="MSIX30r" class="pb"></div>
                    upon the back of his horse, to indulge himself with<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span><br/>
                    a comfortable pipe, and half hours nap, or so, dur‐<br/>
                    ring which time his above mentioned quadrup‐<br/>
                    eds, be surrendered to their own will, guidance,<br/>
                    and management.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#POSTILIONAIXLACHAPELLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></div>
         
         <div class="p">Alas, every article of this treaty was strictly ful‐<br/>
                    filled with regard to us, and the consequence was,<br/>
                    that in a six hours ride of twelve miles, I was<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span><br/>
                    first fevered by the sun, then smothered by the<br/>
                    dust, and finally was,— but let that pass<br/>
                    for the present.</div>
         
         <div class="p">A cathedral is a noble, a beautiful, a sublime<br/>
                    thing,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#CATHEDRALGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> by twilight, with its white, fretted, mar‐<br/>
                    ble columns, looking out from the dark retiring<br/>
                    immensity, of the long aisles, and the faint<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span><br/>
                    streams of coloured and variegated light, fal‐<br/>
                    ling faintly through the Gothic windows,<br/>
                    streaming at intervals along the chequered<br/>
                    floors or ruddily lighting up the countenan‐<br/>
                    ces, of the marble figures, giving a ghastly re<br/>
                    semblance to reality, a mockery of life, that<br/>
            <div id="MSIX30v" class="pb"></div>
                    makes you start when you look upon the hollow<br/>
                    eyes, and rigid muscles starting out of the stone<br/>
                    You almost think that the dead forms of depar‐<br/>
                    ted monarchs have sprung forth from their nar‐<br/>
                    row dwellings beneath that ancient pavement &<br/>
                    that the peers of <span class="persName-CHARLEMAGNE">Charlemagne</span> are rallying again<br/>
                    around their monarch.
                </div>
         
         <div class="p">Saw <span class="persName-CHARLEMAGNE">Charlemagne</span>s easy chair;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#EASYCHAIRGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> Arms stone, back<br/>
                    stone, hard independent unaccommodating<br/>
            <span class="name--GRANITE">granite</span>, Thin velvet cushion however, on the seat<br/>
                    as a mediator. Very ancient affair, product of<br/>
                    the dark ages I suppose, His sarcophagus al‐<br/>
                    so, sculptured, Grecian, basso relievo,—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#SARCOPHAGUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> The<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span><br/>
                    revolutionists amused themselves by depriving the<br/>
                    poor stone gentlemen of their olfactory nerves, ali‐<br/>
                    as noses, consequence they look all terrible flats,<br/>
                    Night coming on; left the cathedral just in<br/>
                    time to be tantalized by grinning at a magni‐<br/>
                    ficent picture when it was pitch dark (Last<br/>
                    judgment, <span class="persName-MAA">Michael Angelo</span>, I think, in the <span class="placeName-building-HOTELDEVILLEAIX">Ho‐<br/>
                    tel de ville</span>).<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#ITHINKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span> Return,d<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#APOSTROPHE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span> to the inn in very bad<br/>
            <div id="MSIX31r" class="pb"></div>
                    humour, off early next morning for <span class="placeName-COLOGNE">Cologne</span>—<br/>
                    Good night.
                </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
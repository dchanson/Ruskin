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
“<placeName corresp="#CASSEL">Cassel</placeName>&#8221; “Cassel” Drawing 1 of 4 “Cassel” [section title] “Cassel” [poem] “Cassel” Drawing 2 of 4 “Cassel” Drawing 3 of 4 “Cassel” [essay] “Cassel” Drawing 4 of 4
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX15v-16r.jpg msix/MSIX15v-16r.jpg msix/MSIX15v-16r.jpg msix/MSIX16v-17r.jpg msix/MSIX16v-17r.jpg msix/MSIX16v-17r.jpg msix/MSIX16v-17r.jpg msix/MSIX17v-18r.jpg msix/MSIX17v-18r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>&#x201C;Cassel&#x201D; Drawing 1 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-CASSELHILLMSIX">Vignette, Vista of Cassel Hill</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a &#x201C;sketch of trees in the foreground on either side, and a town with three windmills in the distance&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:342 n. 3). 
                        Between the coulisses of the foreground foliage, the vista shows a distant town sitting atop an eminence, 
                        which suggests <span class="geogName-">Cassel Hill</span> mentioned in the poem following the illustration. 
                        Two small figures occupy the foreground, one seated and one standing and pointing at the vista.
                    
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Cassel&#x201D; &#x005B;section title&#x005D;</span></div><div id="MSIX15v" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:4.8em"> </span><span class="title-composite-JRCASSELCOMP"><span class="smallcaps">CASSEL</span></span></span> 
      
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Cassel&#x201D; &#x005B;poem&#x005D;</span></div><div id="MSIX15v" class="pb"></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">The way was long and yet twas sweet.</span><br/>
            <span class="l">Through many a shady soft retreat</span><br/>
            <span class="l">Where the broad willow semblance gave</span><br/>
            <span class="l">Of weeping beauty to the wave</span><br/>
            <span class="l">And elm with massy foliage prest
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And feathery aspens quivering crest</span><br/>
            <span class="l">And many a spiry poplar glade</span><br/>
            <span class="l">And hazels rich entangled shade</span><br/>
            <span class="l">While onward as advancing still</span><br/>
            <span class="l">From <span class="placeName-STOMER">Omars</span> plain<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#STOMERSPLAINGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> to <span class="placeName-CASSEL">Cassels</span> hill<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#CASSELLSHILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <div id="MSIX16r" class="pb"></div>
            <span class="l">Far yet more far the landscape threw</span><br/>
            <span class="l">Its deep immeasurable blue</span><br/>
            <span class="l">Oh beautiful those plains were showing</span><br/>
            <span class="l">Where summer sun was hotly glowing</span><br/>
            <span class="l">Many a battle field lay spread
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Once the dark dwelling of the dead</span><br/>
            <span class="l">But fruitful now their champaigns wave</span><br/>
            <span class="l">With bending grain on soldiers grave.</span><br/>
            <span class="l">While far beneath in long array</span><br/>
            <span class="l">The priestly orders wound their way<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#PRIESTLYORDERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Heavy the massive banners rolled</span><br/>
            <span class="l">Rich wrought with gems and stiff with gold</span><br/>
            <span class="l">While as the cross came borne on high</span><br/>
            <span class="l">Beneath its crimson canopy</span><br/>
            <span class="l">Many the haughty head that bowed
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Sunk his high crest the warrior proud</span><br/>
            <span class="l">The priest his glance benignant cast</span><br/>
            <span class="l">And murmured blessings as he past</span><br/>
            <span class="l">While round the hillside echoing free</span><br/>
            <span class="l">Rung the loud hymning melody
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">Many a monkish voice was there</span><br/>
            <div id="MSIX16v" class="pb"></div>
            <span class="l">Many a trumpet rent the air</span><br/>
            <span class="l">And softer, sweeter yet the same</span><br/>
            <span class="l">The sounds in failing cadence came</span><br/>
            <span class="l">No marvel that the pomp and pride
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Of Romes religion thus should hide</span><br/>
            <span class="l">The serpent folds beneath that roll</span><br/>
            <span class="l">The poison mantling in the bowl.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#NOMARVEL" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Cassel&#x201D; Drawing 2 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCASSELSAINTOMERCORPUSCHRISTIMSIX">Vignette, Corpus Christi Procession at Cassel</span></h1>
         Pen and ink, approx. 6.2 &#x00D7; 7 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a &#x201C;sketch of a bishop beneath a canopy, with other figures&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:343 n. 1). 
                        The vignette refers to the Roman Catholic procession mentioned in the preceding poem, 
                        <a href="<?php echo r_build_url("witnesses/cassel_poem_msix.php");?>" target="_self">&#x201C;The way was long, and yet &#x02BC;twas sweet&#x201D; &#x005B;&#x201C;Cassel&#x201D;, poem&#x005D;</a>. 
                        The procession that the Ruskins witnessed at <span class="placeName-CASSEL">Cassel</span> celebrated Ascension Day, 
                        but details in the drawing suggest that <span class="persName-JR">Ruskin</span> may have conflated this event with a procession of Corpus Christi, in which 
                        the priest carries a monstrance beneath a canopy borne by attendants 
                        (see glosses for <a href="<?php echo r_build_url("witnesses/cassel_poem_msix.php");?>" target="_self">&#x201C;Cassel&#x201D; &#x005B;poem&#x005D;</a>).
                    
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Cassel&#x201D; Drawing 3 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCASSELWINDMILLSMSIX">Vignette, Windmills on Cassel Hill</span></h1>
         Pen and ink, approx. 6.2 &#x00D7; 13.7 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a &#x201C;sketch of two windmills on an eminence, overlooking a wide plain&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:343 n. 2). 
                        The vignette refers to the windmills on the hilltop, where the speaker climbs to view the surrounding plains, 
                        according to the prose section following the drawing 
                        (<a href="<?php echo r_build_url("witnesses/cassel_prose_msix.php");?>" target="_self">&#x201C;When shall we get up this hill&#x201D; &#x005B;&#x201C;Cassel&#x201D;, prose&#x005D;</a>). 
                        In the drawing, two figures, one seated and one standing, gaze at the prospect.
                    
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Cassel&#x201D; &#x005B;essay&#x005D;</span></div><div id="MSIX17r" class="pb"></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">When shall we get up this hill, this intermin&#x2010;
                    <br/>able hill.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#CASSELLSHILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> Bend after bend we have been ascen&#x2010;
                    <br/>ding for the last half hour every successive
                    <br/>turn disclosing a weary length of way, and
                    <br/>those tiresome windmills at the top seem as far
                    <br/>from us as ever. Windmills have long been
                    <br/>celebrated for gesticulation, celebrated with <span class="persName-MDC">Cer&#x2010;
                    <br/>vantes</span> all over the world, but never saw I wind&#x2010;
                    <br/>mills more provokingly alive than at present
                    <br/>with their long stretchy arms bending to the 
                    <br/>breeze that flew over the hilltop, they seemed
                    <br/>beckoning us up ironically, while, the slow<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span>
            <div id="MSIX17v" class="pb"></div>
            <br/>measured step of our booted postillion as<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span>
            <br/>he tramped it up the hill as much encum&#x2010;
                    <br/>bered as a cat with walnut shells, told
                    <br/>us of many a weary moment ere those
                    <br/>becks should, could, or would be obeyed.
                    <br/>We are on the summit, a green plateau
                    <br/>of turf, that looks round on the wide
                    <br/>plains of <span class="placeName-FRANCE">France</span> without a single emin&#x2010;
                    <br/>ence to rival it and few that can obstruct
                    <br/>its view. &#x2014;. Fifteen battle&#x2010;fields are in
                    <br/>view from that spot, telling a fearful tale
                    <br/>of the ready ire of nations, yet looking as
                    <br/>green and peaceful as if they had never
                    <br/>been watered with blood<span class="g-terminal_comma">,&#x2014;</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span> They say the
                    <br/>cliffs of <span class="placeName-ENGLAND">England</span> are visible from <span class="placeName-CASSEL">Cassel</span>&#x2014;
                    <br/>the sea certainly is, so I looked in the
                    <br/>direction, and I did see something&#x2014;. I had
                    <br/>some lurking suspicions it was a cloud,
                    <br/>but I chose to believe it was my own <span class="placeName-ENGLAND">Eng&#x2010;
                        <br/>land</span> and it did quite as well to bid fare&#x2010;
                    <br/>well to.&#x2014;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#PARAGRAPHBREAKWITHDASH" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span> 
            <div id="MSIX18r" class="pb"></div>
            <br/>I love a view like this, for it seems as if you
                    <br/>were looking over all the wide wide world
                    <br/>and were ruling it. Throughout all our
                    <br/>after journey I have seen nothing more
                    <br/>beautiful or more wonderful of its kind
                    <br/>than the view from the little, humble, neg&#x2010;
                    <br/>lected village of&#x2014;<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span> <span class="placeName-CASSEL">Cassel</span>.
                
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Cassel&#x201D; Drawing 4 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCASSELMARKETSQUAREMSIX">Vignette, Cassel Hôtel de Ville and Market Square</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a &#x201C;sketch of a street with quaint architecture&#x2014;in the foreground market women&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:344 n. 1).
         </div>
         
         
         <div class="p">The vignette is drawn in the manner of <a href="/notes/prout_samuel_note" target="_self">Samuel Prout (<span class="date-1783">1783</span>&#x2013;<span class="date-1852">1852</span>)</a>, 
                        suggesting without specifically copying such marketplace scenes as 
                        <span class="title-artwork-PROUTDEVILLEBRUSSELS"><i>Hotel de Ville Brussels</i></span> and 
                        <span class="title-artwork-PROUTGHENT"><i>Ghent</i></span> in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-artwork-PROUTSKETCHES"><i>Facsimiles of Sketches Made in Flanders and Germany</i></span></a>. 
                        <span class="persName-JR">Ruskin</span> may have based the vignette on a larger sketch, probably made during the tour, 
                        <a href="/notes/bibliography#JRHOTELDEVILLECASSEL" target="_self"><span class="title-artwork-JRHOTELDEVILLECASSEL">&#x201C;<span class="placeName-building-HOTELDEVILLECASSEL">Hotel de Ville, <span class="placeName-CASSEL">Cassel</span></span>&#x201D;</span></a>. 
                        See <a href="/notes/drawings_1833_note" target="_self">Drawings from the Tour of 1833</a>, and 
                        <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#COMPOSITEILLUSTRATEDTRAVELOGUEILLUS" target="_self">Missing and Unidentified Drawings for the Composite&#x2010;Genre Illustrated Travelogue (MS IX) and Related 1833 Tour Sketches</a>.
         </div>
         
         
         <div class="p">The Renaissance <span class="placeName-building-NOBLECOURCASSEL">Hôtel de Ville</span> in <span class="placeName-CASSEL">Cassel</span> 
                        was nearly totally destroyed by German bombing in <span class="date-1940-05">May 1940</span>.
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
 “Calais” “Calais” Drawing 1 of 4 “Calais” [section title] “Calais” [poem] “Calais” Drawing 2 of 4 “Calais” Drawing 3 of 4 “Calais” [prose] “Calais” Drawing 4 of 4 “Cassel” “Cassel” Drawing 1 of 4 “Cassel” [section title] “Cassel” [poem] “Cassel” Drawing 2 of 4 “Cassel” Drawing 3 of 4 “Cassel” [essay] “Cassel” Drawing 4 of 4 “Lille” “Lille” Drawing 1 of 2 “Lille” [section title] “Lille” [poem] “Lille” Drawing 2 of 2 “Lille” [essay] “Brussels” “Brussels” [section title] “Brussels” [poem] “Brussels” Drawing 2 of 3 “Brussels” Drawing 3 of 3 “Brussels” [essay] “The Meuse” “The Meuse” [section title] “The Meuse” [poem] “The Meuse” Drawing 1 of 2 “The Meuse” [essay] “The Meuse” Drawing 2 of 2 “Aix La Chapelle” “Aix la Chapelle” Drawing 1 of 1 “Aix La Chapelle” [section title] “Aix La Chapelle” [essay] “Cologne” “Cologne” [section title] “Cologne” [poem]  “Cologne ” Drawing 1 of 1 “Cologne” [essay] “Andernacht” “Andernacht” [section title] “Andernacht” [poem] “Andernacht” Drawing 1 of 1 “Andernacht” [prose] “Ehrenbreitstein” “Ehrenbreitstein” Drawing 1 of 2 “Ehrenbreitstein” [section title] “Ehrenbreitstein” [poem] “Ehrenbreitstein” Drawing 2 of 2 “Ehrenbreitstein” [essay] “St. Goar” [St Goar] [section title] ["St. Goar"] [poem] "St. Goar" [essay] “Heidelberg” “Heidelberg” Drawing 1 of 1 [Heidelberg] [section title] “Heidelberg” [poem] “Heidelberg” [essay] Gallery of untitled vignettes Mountain Gorge Drawing Unascribed Drawing 2 of 8 for Account of a Tour on the Continent (MS IX) River Drawing Mountain Scene with Chalet Drawing Mountain Scene with Boulder Lake Scene with Building on Piers Lakeside with Terraced Villa [drawing] Mountain Aiguilles Drawing
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX12v-13r.jpg msix/MSIX12v-13r.jpg msix/MSIX12v-13r.jpg msix/MSIX13v-14r.jpg msix/MSIX13v-14r.jpg msix/MSIX13v-14r.jpg msix/MSIX13v-14r.jpg msix/MSIX14v-15r.jpg msix/MSIX14v-15r.jpg msix/MSIX15v-16r.jpg msix/MSIX15v-16r.jpg msix/MSIX15v-16r.jpg msix/MSIX16v-17r.jpg msix/MSIX16v-17r.jpg msix/MSIX16v-17r.jpg msix/MSIX16v-17r.jpg msix/MSIX17v-18r.jpg msix/MSIX17v-18r.jpg msix/MSIX18v-19r.jpg msix/MSIX18v-19r.jpg msix/MSIX18v-19r.jpg msix/MSIX19v-20r.jpg msix/MSIX19v-20r.jpg msix/MSIX19v-20r.jpg msix/MSIX20v-21r.jpg msix/MSIX20v-21r.jpg msix/MSIX20v-21r.jpg msix/MSIX22v-23r.jpg msix/MSIX22v-23r.jpg msix/MSIX22v-23r.jpg msix/MSIX22v-23r.jpg msix/MSIX23v-24r.jpg msix/MSIX24v-25r.jpg msix/MSIX25v-26r.jpg msix/MSIX25v-26r.jpg msix/MSIX26v-27r.jpg msix/MSIX26v-27r.jpg msix/MSIX26v-27r.jpg msix/MSIX27v-28r.jpg msix/MSIX28r-rotated.jpg msix/MSIX28v-29r.jpg msix/MSIX28v-29r.jpg msix/MSIX28v-29r.jpg msix/MSIX29v-30r.jpg msix/MSIX30v-31r.jpg msix/MSIX30v-31r.jpg msix/MSIX30v-31r.jpg msix/MSIX31v-32r.jpg msix/MSIX31v-32r.jpg msix/MSIX31v-32r.jpg msix/MSIX34v-35r.jpg msix/MSIX34v-35r.jpg msix/MSIX34v-35r.jpg msix/MSIX35v-36r.jpg msix/MSIX35v-36r.jpg msix/MSIX35v-36r.jpg msix/MSIX37v-38r.jpg msix/MSIX37v-38r.jpg msix/MSIX37v-38r.jpg msix/MSIX37v-38r.jpg msix/MSIX40v-41r.jpg msix/MSIX40v-41r.jpg msix/MSIX40v-41r.jpg msix/MSIX41v-42r.jpg msix/MSIX42v-43r.jpg msix/MSIX42v-43r.jpg msix/MSIX43v-44r.jpg msix/MSIX44v-45r.jpg msix/MSIX44v-45r.jpg msix/MSIX44v-45r.jpg msix/MSIX47v-48r.jpg msix/MSIX48v-49r.jpg msix/MSIX49v-50r.jpg msix/MSIX50v-51r.jpg msix/MSIX51v-52r.jpg msix/MSIX52v-53r.jpg msix/MSIX53v-54r.jpg msix/MSIX53v-54r.jpg msix/MSIX54v-55r.jpg msix/MSIX55v-56r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Calais” Drawing 1 of 4</span></div><div id="MSIX13R" class="pb"></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCALAISFISHERMENMSIX">Vignette, Calais Fishermen</span></h1>
         Pen and ink drawing, approx. 6.8 × 12.4 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of calm sea at low tide, with sailing‐boat and fishermen” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:341 n. 1). 
                        Two fishing boats float side by side. Figures are at work both aboard the boats and in the water, the latter scooping with nets. 
                        On shore, a lone figure observes the fishermen.
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Calais” [section title]</span></div><div id="MSIX13r" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:5.2em"> </span><span class="title-composite-JRCALAISCOMP"><span class="smallcaps">CALAIS</span></span></span>
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Calais” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX13r" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l">The sands are in the sunlight sleeping</span><br/>
            <span class="l">The ocean barrier is beating<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_poem_glosses_textual#CALAISPOEMLINE2" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Again, again for evermore</span><br/>
            <span class="l">Haste the light curlings to the shore,</span><br/>
            <span class="l">That from the sand the impression sweep
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Of playful Childhoods daring feet</span><br/>
            <span class="l">That seeks within its sandy cell</span><br/>
            <span class="l">The pebble bright, or purple shell<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_glosses_contextual#CALAISPOEMSHELL" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Far in its clear expanse, lay wide</span><br/>
            <span class="l">Unruffledly that ocean‐tide
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Stretching away where paler grew,</span><br/>
            <div id="MSIX13v" class="pb"></div>
            <span class="l"><div 
          class="subst-del s-subst s-del" >A</div><div 
          class="s-subst s-add s-overwrite s-inline">T</div>he heavens bright unclouded blue.</span><br/>
            <span class="l">And far away indistance dying</span><br/>
            <span class="l">Old Englands cliffy coast was lying</span><br/>
            <span class="l">And beautiful, as summer cloud
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">By the low sun empurpled proud</span><br/>
            <span class="l">Strange, that a space from shore to shore</span><br/>
            <span class="l">So soon, so easily passed oer,</span><br/>
            <span class="l">Should yet a wide distinction place</span><br/>
            <span class="l">Twixt man and man, twixt race and race
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Sudden and marked the change you find</span><br/>
            <span class="l">Religion, language even mind<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_glosses_contextual#CALAISPOEMDISTINCTION" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">That you might think that narrow span</span><br/>
            <span class="l">Marked the varieties of man.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Calais” Drawing 2 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCALAISFISHERMENWITHTELESCOPEMSIX">Vignette, Calais Fishermen with Telescope</span></h1>
         Pen and ink, approx. 3.7 × 5.5 cm (image only).
         
         <div class="p">The editors of the 
                        <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of two old fishermen on the shore, of whom one is looking over the sea through a telescope” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:341 n. 3). 
                        The fisherman aims his telescope at a distant ship; the second fisherman, holding his nets, gazes at the first fisherman.
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Calais” Drawing 3 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCALAISPIER">Vignette, Fishermen on Pier, One Gazing out to Sea</span></h1>
         Pen and ink, approx. 6.8 × 10.3 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of the sea with a wooden pier and a ship sailing in” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:341 n. 4). 
                        Two fisherman stand on the pier with their nets, one watching the ship coming in, and the other folding his net. 
                        The roughness of the sea contrasts with the calm depicted in “Calais drawing 1”, 
                        <a href="<?php echo r_build_url("figures/calais_fishermen_drawing_msix.php");?>" target="_self">Vignette, Calais Fishermen</a>.
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Calais” [prose]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX14r" class="pb"></div>       
         
         <div class="p">—How much has been said of <span class="placeName-CALAIS">Calais</span>. Every one who<br/>
                    has ever set his foot on the French shore, from poor<br/>
            <span class="persName-fictional-YORICK">Yorick</span> to the veriest scribbler ever blotted paper, has<br/>
                    written half a volume upon <span class="placeName-CALAIS">Calais</span>. And no marvel.<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><br/>
            <span class="placeName-CALAIS">Calais</span>—the busy—the bustling —I had almost said<br/>
                    the beautiful, for beautiful it was to me<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span> and<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span><br/>
                    I believe to every one, who enters it as a vestibule<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span><br/>
                    an introduction to <span class="placeName-FRANCE">France</span>, and to the French.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_glosses_contextual#INTRODUCTIONTOFRANCEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_prose_glosses_textual#PARAGRAPHBREAK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span></div><br/>
         
         <div class="p">See <span class="placeName-CALAIS">Calais</span>, and you can see no more, though you
                    should peramubulate <span class="placeName-FRANCE">France</span> from the <span class="geogName-ATLANTIC">Atlantic</span><br/>
                    to the <span class="geogName-MEDITERRANEAN">Mediterranean</span>. It is a little <span class="placeName-FRANCE">France</span>, a min‐<br/>
                    iature picture, but not the less <div 
              class="add-below" 
              style="left:NaNem">ȸ</div><div 
              class="add-above" 
              style="left:0.4em">a</div> resemblance.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_prose_glosses_textual#PARAGRAPHBREAKWITHDASH" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span></div>
         <div id="MSIX14v" class="pb"></div>
         
         <div class="p">Stand on the pier and look round you The sky is a<br/>
                    French sky, it is a very turquoise, the sea is a <div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                h
                </span>
                
              </a></span><br/>
                    French sea in every thing but its want of motion<br/>
                    the air is French air, none of your English bois‐<br/>
                    terous sea puffs that blow the dust in your eyes<br/>
                    when you wish to be particularly clear sighted.<br/>
                    No, it is a mere breath, you canʼt call it a breeze<br/>
                    yet bearing a delicious, a balmy coolness, and a<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                i
                </span>
                
              </a></span><br/>
                    little, a very little smell of the sea. Look at the<br/>
                    fishing boats, they are peculiarly French, and<br/>
                    particularly clumsy. The red tattered shapeless<br/>
                    sail the undistinguishable resemblance of stem<br/>
                    to stern, the porpoise like manner in which the<br/>
                    vessel labours through the water, the incorrigible<br/>
                    disorder that reigns on board, the confusion of<br/>
                    fish out of water with men, — that are at least<br/>
                    out of their element, would mark a french fish‐<br/>
                    ing boat, whatever quarter of the world it<br/>
                    might happen to be driven to.</div>
         
         <div class="p">And look at the town, the chimnies are entire‐<br/>
                    ly vapourless, and have that peculiarly awk‐<br/>
            <div id="MSIX15r" class="pb"></div>
            <div class="pageNum-left"><span class="space" style="padding-left:20.0em"> </span>14</div><br/>
                    ward look incident to all useless things. And<br/>
                    look at the people, the countenance, the costume<br/>
                    the tout ensemble is altogether different from<br/>
                    any thing you ever saw in England, and<br/>
                    yet <span class="placeName-ENGLAND">England</span>s cliffs are on the horizon, half an<br/>
                    hours might see you beneath them,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_glosses_contextual#FOURHOURSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> — It is<br/>
                    most extraordinary. —
                </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Calais” Drawing 4 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-CALAISSQUAREMSIX">Vignette, Calais Town Square with British Tourists</span></h1>
         Pen and ink, approx. 11 × 10.3 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of <span class="placeName-CALAISSQUARE">Calais Square</span>, or market‐place, with two figures—a man and woman, 
                        and a child (? <span class="persName-JJR">J.J.R.</span>, <span class="persName-MR">M.R.</span>, and <span class="persName-JR">J.R.</span>)—evidently 
                        British, at whom a Frenchman, who is wheeling a barrow near them, looks in amazement. The child has its hands uplifted in wonder, 
                        and is looking at the quaint buildings” (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <span class="title-book-JRWORKSLE"><i>Works</i></span></a>, 2:342 n. 2). 
                        In the editorsʼ description, the second dash should be moved to follow “woman”, 
                        as there are obviously three British family figures.</div>
         
         <div class="p">The editors also gloss the poem and prose sections of “Calais” with the comparison of 
                        <span class="placeName-FRANCE">France</span> and <span class="placeName-ENGLAND">England</span> in 
                        <span class="title-book-JRPOETRYOFARCHITECTURE1893"><i>The Poetry of Architecture</i></span>, §16 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <span class="title-book-JRWORKSLE"><i>Works</i></span></a>, 1:14).</div>
         
         <div class="p">As suggested by the editorsʼ query, it seems unlikely that <span class="persName-JR">Ruskin</span> intended himself, at age 14, for the third figure, 
                        the child, since the child wears skirts and a bonnet. The child figure might be meant as his cousin, 
                        <a href="/notes/richardson_mary_note" target="_self"><span class="persName-MRC">Mary Richardson</span> (1815–49)</a>, 
                        but she was a young woman at this date. More likely, while the drawing may contain some self‐mockery, it is meant to satirize national characteristics generally—an English family, 
                        rotund and naive, contrasted with the skinny Frenchman pushing the wheelbarrow, and thus drawing on such nationalistic tropes as found in 
                        <span class="persName-WHPAINTER">William Hogarth</span>ʼs (<span class="date-1697-1764">1697–1764</span>) 
                        <span class="title-artwork-HOGARTHGATEOFCALAIS"><i>The Gate of Calais; or, The Roast Beef of Old England</i></span> (<span class="date-1748-1749">1748/49</span>).
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cassel” Drawing 1 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-CASSELHILLMSIX">Vignette, Vista of Cassel Hill</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of trees in the foreground on either side, and a town with three windmills in the distance” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:342 n. 3). 
                        Between the coulisses of the foreground foliage, the vista shows a distant town sitting atop an eminence, 
                        which suggests <span class="geogName-">Cassel Hill</span> mentioned in the poem following the illustration. 
                        Two small figures occupy the foreground, one seated and one standing and pointing at the vista.
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cassel” [section title]</span></div><div id="MSIX15v" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:4.8em"> </span><span class="title-composite-JRCASSELCOMP"><span class="smallcaps">CASSEL</span></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cassel” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX15v" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l">The way was long and yet twas sweet.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Through many a shady soft retreat</span><br/>
            <span class="l">Where the broad willow semblance gave</span><br/>
            <span class="l">Of weeping beauty to the wave</span><br/>
            <span class="l">And elm with massy foliage prest</span><br/>
            <span class="l">And feathery aspens quivering crest
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">And many a spiry poplar glade</span><br/>
            <span class="l">And hazels rich entangled shade</span><br/>
            <span class="l">While onward as advancing still</span><br/>
            <span class="l">From <span class="placeName-STOMER">Omars</span> plain<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#STOMERSPLAINGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> to <span class="placeName-CASSEL">Cassels</span> hill<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#CASSELLSHILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span></span><br/>
            <div id="MSIX16r" class="pb"></div>
            <span class="l">Far yet more far the landscape threw
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Its deep immeasurable blue</span><br/>
            <span class="l">Oh beautiful those plains were showing</span><br/>
            <span class="l">Where summer sun was hotly glowing</span><br/>
            <span class="l">Many a battle field lay spread</span><br/>
            <span class="l">Once the dark dwelling of the dead
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">But fruitful now their champaigns wave</span><br/>
            <span class="l">With bending grain on soldiers grave.</span><br/>
            <span class="l">While far beneath in long array</span><br/>
            <span class="l">The priestly orders wound their way<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#PRIESTLYORDERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span></span><br/>
            <span class="l">Heavy the massive banners rolled
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">Rich wrought with gems and stiff with gold</span><br/>
            <span class="l">While as the cross came borne on high</span><br/>
            <span class="l">Beneath its crimson canopy</span><br/>
            <span class="l">Many the haughty head that bowed</span><br/>
            <span class="l">Sunk his high crest the warrior proud
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">The priest his glance benignant cast</span><br/>
            <span class="l">And murmured blessings as he past</span><br/>
            <span class="l">While round the hillside echoing free</span><br/>
            <span class="l">Rung the loud hymning melody</span><br/>
            <span class="l">Many a monkish voice was there
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <div id="MSIX16v" class="pb"></div>
            <span class="l">Many a trumpet rent the air</span><br/>
            <span class="l">And softer, sweeter yet the same</span><br/>
            <span class="l">The sounds in failing cadence came</span><br/>
            <span class="l">No marvel that the pomp and pride</span><br/>
            <span class="l">Of Romes religion thus should hide
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l">The serpent folds beneath that roll</span><br/>
            <span class="l">The poison mantling in the bowl.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#NOMARVEL" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cassel” Drawing 2 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCASSELSAINTOMERCORPUSCHRISTIMSIX">Vignette, Corpus Christi Procession at Cassel</span></h1>
         Pen and ink, approx. 6.2 × 7 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a bishop beneath a canopy, with other figures” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:343 n. 1). 
                        The vignette refers to the Roman Catholic procession mentioned in the preceding poem, 
                        <a href="<?php echo r_build_url("witnesses/cassel_poem_msix.php");?>" target="_self">“The way was long, and yet ʼtwas sweet” [“Cassel”, poem]</a>. 
                        The procession that the Ruskins witnessed at <span class="placeName-CASSEL">Cassel</span> celebrated Ascension Day, 
                        but details in the drawing suggest that <span class="persName-JR">Ruskin</span> may have conflated this event with a procession of Corpus Christi, in which 
                        the priest carries a monstrance beneath a canopy borne by attendants 
                        (see glosses for <a href="<?php echo r_build_url("witnesses/cassel_poem_msix.php");?>" target="_self">“Cassel” [poem]</a>).
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cassel” Drawing 3 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCASSELWINDMILLSMSIX">Vignette, Windmills on Cassel Hill</span></h1>
         Pen and ink, approx. 6.2 × 13.7 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of two windmills on an eminence, overlooking a wide plain” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:343 n. 2). 
                        The vignette refers to the windmills on the hilltop, where the speaker climbs to view the surrounding plains, 
                        according to the prose section following the drawing 
                        (<a href="<?php echo r_build_url("witnesses/cassel_prose_msix.php");?>" target="_self">“When shall we get up this hill” [“Cassel”, prose]</a>). 
                        In the drawing, two figures, one seated and one standing, gaze at the prospect.
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cassel” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX17r" class="pb"></div>
         
         <div class="p">When shall we get up this hill, this intermin‐<br/>
                    able hill.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#CASSELLSHILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span> Bend after bend we have been ascen‐<br/>
                    ding for the last half hour every successive<br/>
                    turn disclosing a weary length of way, and<br/>
                    those tiresome windmills at the top seem as far<br/>
                    from us as ever. Windmills have long been<br/>
                    celebrated for gesticulation, celebrated with <span class="persName-MDC">Cer‐<br/>
                    vantes</span> all over the world, but never saw I wind‐<br/>
                    mills more provokingly alive than at present<br/>
                    with their long stretchy arms bending to the<br/>
                    breeze that flew over the hilltop, they seemed<br/>
                    beckoning us up ironically, while, the slow<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                j
                </span>
                
              </a></span><br/>
            <div id="MSIX17v" class="pb"></div>
                    measured step of our booted postillion as<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                k
                </span>
                
              </a></span><br/>
                    he tramped it up the hill as much encum‐<br/>
                    bered as a cat with walnut shells, told<br/>
                    us of many a weary moment ere those<br/>
                    becks should, could, or would be obeyed.<br/>
                    We are on the summit, a green plateau<br/>
                    of turf, that looks round on the wide<br/>
                    plains of <span class="placeName-FRANCE">France</span> without a single emin‐<br/>
                    ence to rival it and few that can obstruct<br/>
                    its view. —. Fifteen battle‐fields are in<br/>
                    view from that spot, telling a fearful tale<br/>
                    of the ready ire of nations, yet looking as<br/>
                    green and peaceful as if they had never<br/>
                    been watered with blood<span class="g-terminal_comma">,—</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                l
                </span>
                
              </a></span> They say the<br/>
                    cliffs of <span class="placeName-ENGLAND">England</span> are visible from <span class="placeName-CASSEL">Cassel</span>—<br/>
                    the sea certainly is, so I looked in the<br/>
                    direction, and I did see something—. I had<br/>
                    some lurking suspicions it was a cloud,<br/>
                    but I chose to believe it was my own <span class="placeName-ENGLAND">Eng‐<br/>
                    land</span> and it did quite as well to bid fare‐<br/>
                    well to.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#PARAGRAPHBREAKWITHDASH" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                m
                </span>
                
              </a></span><br/>
            <div id="MSIX18r" class="pb"></div>
                    I love a view like this, for it seems as if you<br/>
                    were looking over all the wide wide world<br/>
                    and were ruling it. Throughout all our<br/>
                    after journey I have seen nothing more<br/>
                    beautiful or more wonderful of its kind<br/>
                    than the view from the little, humble, neg‐<br/>
                    lected village of—<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                n
                </span>
                
              </a></span> <span class="placeName-CASSEL">Cassel</span>.
                </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cassel” Drawing 4 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCASSELMARKETSQUAREMSIX">Vignette, Cassel Hôtel de Ville and Market Square</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a street with quaint architecture—in the foreground market women” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:344 n. 1).</div>
         
         
         <div class="p">The vignette is drawn in the manner of <a href="/notes/prout_samuel_note" target="_self">Samuel Prout (<span class="date-1783">1783</span>–<span class="date-1852">1852</span>)</a>, 
                        suggesting without specifically copying such marketplace scenes as 
                        <span class="title-artwork-PROUTDEVILLEBRUSSELS"><i>Hotel de Ville Brussels</i></span> and 
                        <span class="title-artwork-PROUTGHENT"><i>Ghent</i></span> in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-artwork-PROUTSKETCHES"><i>Facsimiles of Sketches Made in Flanders and Germany</i></span></a>. 
                        <span class="persName-JR">Ruskin</span> may have based the vignette on a larger sketch, probably made during the tour, 
                        <a href="/notes/bibliography#JRHOTELDEVILLECASSEL" target="_self"><span class="title-artwork-JRHOTELDEVILLECASSEL">“<span class="placeName-building-HOTELDEVILLECASSEL">Hotel de Ville, <span class="placeName-CASSEL">Cassel</span></span>”</span></a>. 
                        See <a href="/notes/drawings_1833_note" target="_self">Drawings from the Tour of 1833</a>, and 
                        <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#COMPOSITEILLUSTRATEDTRAVELOGUEILLUS" target="_self">Missing and Unidentified Drawings for the Composite‐Genre Illustrated Travelogue (MS IX) and Related 1833 Tour Sketches</a>.</div>
         
         
         <div class="p">The Renaissance <span class="placeName-building-NOBLECOURCASSEL">Hôtel de Ville</span> in <span class="placeName-CASSEL">Cassel</span> 
                        was nearly totally destroyed by German bombing in <span class="date-1940-05">May 1940</span>.</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Lille” Drawing 1 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRLILLESTREETMSIX">Vignette, Lille Street with Wagon</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a street, with waggon and horses in the foreground” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:344 n. 2). 
                        The vignette is drawn in the manner of <a href="/notes/prout_samuel_note" target="_self">Samuel Prout (<span class="date-1783">1783</span>–<span class="date-1852">1852</span>)</a>, 
                        suggesting without specifically copying <span class="title-artwork-PROUTGHENT">“Ghent”</span> 
                        in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-artwork-PROUTSKETCHES"><i>Facsimiles of Sketches Made in Flanders and Germany</i></span> (<span class="date-1833">1833</span>)</a>, 
                        but at a considerably reduced scale.</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> is believed to have made a tour sketch of a subject in <span class="placeName-LILLE">Lille</span>, 
                        but the location of the sketch is unknown; see <a href="/notes/drawings_1833_note" target="_self">Drawings from the <span class="date-1833-05-14-1833-08-19">Tour of 1833</span></a>.</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Lille” [section title]</span></div><div id="MSIX18v" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:5.6em"> </span><span class="title-composite-JRLILLECOMP"><span class="smallcaps">LILLE</span></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Lille” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX18v" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l">Oh red the blushing east awoke</span><br/>
            <span class="l">And bright the morn on <span class="placeName-CASSEL">Cassel</span> broke</span><br/>
            <span class="l">Along the green hillside we flew,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
            <span class="l">Flashed the clear sunshine in the dew</span><br/>
            <span class="l">That on the clustering herbage hung</span><br/>
            <span class="l">That to the tangled copse‐wood clung</span><br/>
            <span class="l">That shot like stars through every shade</span><br/>
            <span class="l">And glanced on every wildwood glade.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
            <span class="l">At length by many a wind descending</span><br/>
            <span class="l">That ever to the plain were bending</span><br/>
            <span class="l">Farther, and farther still we pressed</span><br/>
            <span class="l">From <span class="placeName-CASSEL">Cassel</span>s insulated<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#INSULATEDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                10
                </span>
              </a></span> crest</span><br/>
            <span class="l">That back retiring fainter still,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
            <div id="MSIX19r" class="pb"></div>
            <span class="l">Showed the rich outlines of its hill,</span><br/>
            <span class="l">And faded in the purple haze,</span><br/>
            <span class="l">That spoke the coming noontide blaze.</span><br/>
            <span class="l">That noontide blaze delayed not long</span><br/>
            <span class="l">On Tournays towʼrs<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#TOURNAYSTOWERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span> twas fierce and strong
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
            <span class="l">And ere we gained the middle way</span><br/>
            <span class="l">The glow was like an Afric day</span><br/>
            <span class="l">Full upon <span class="placeName-LILLE">Lille</span>s high ramparts round<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#LILLESHIGHRAMPARTSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span></span><br/>
            <span class="l">On massive wall and moated mound</span><br/>
            <span class="l">Shot the fierce sun his glaring ray
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
            <span class="l">As bent we on our burning way</span><br/>
            <span class="l">Till past the narrow drawbridge length</span><br/>
            <span class="l">The massive gates portcullised strength</span><br/>
            <span class="l">And moat whose waves found steepy shore<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#LILLESTEEPYSHORE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span></span><br/>
            <span class="l">Where forward high the bastion bore<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#LILLEHUGE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                14
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div></span><br/>
            <span class="l">And where the sentinels were set</span><br/>
            <span class="l">High on the dizzy parapet</span><br/>
            <span class="l">Till the last portals echoes woke,</span><br/>
            <span class="l">And <span class="placeName-LILLE">Lille</span> upon us sudden broke</span><br/>
            <span class="l">Giving to view another scene,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div></span><br/>
            <span class="l">So clear, so noble, so serene,</span><br/>
            <div id="MSIX19v" class="pb"></div>
            <span class="l">Twould seem enchantments varied hue</span><br/>
            <span class="l">On palace street and avenue</span><br/>
            <span class="l">Those ancient piles rose huge and high,</span><br/>
            <span class="l">In rich irregularity
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div></span><br/>
            <span class="l">Colossal form and figure fair,</span><br/>
            <span class="l">Seemed moving, breathing, living there,</span><br/>
            <span class="l">The vaulted arch where sunlight pure</span><br/>
            <span class="l">Might never pierce the deep obscure</span><br/>
            <span class="l">Where broadly barred, the ancient door,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div></span><br/>
            <span class="l">Was with rich carving imaged oer</span><br/>
            <span class="l">The bending Gothic gable roof</span><br/>
            <span class="l">Of past magnificence gave proof</span><br/>
            <span class="l">The modern windows formal square,</span><br/>
            <span class="l">With Saxon arch was mingled there
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div></span><br/>
            <span class="l">Whose stern recesses dark and deep</span><br/>
            <span class="l">The figured iron stanchions<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#LILLESTANCHIONS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                15
                </span>
              </a></span> keep.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_poem_glosses_textual#LILLEDRAWINGSPACE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                o
                </span>
                
              </a></span></span><br/>
            <span class="space" style="padding-left:2.0em"> </span>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Lille” Drawing 2 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRLILLEBATTLEMENTMSIX">Vignette, Lille Battlement</span></h1>
         Pen and ink, approx. ?? × ?? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch from inside the walls of a fortified town, with cannon” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:345 n. 2). 
                        The cannon is viewed from the rear, and it points through a battlement overlooking a plain.</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> is believed to have made a tour sketch of a subject in <span class="placeName-LILLE">Lille</span>, 
                        but the location of the sketch is unknown; see <a href="/notes/drawings_1833_note" target="_self">Drawings from the Tour of 1833</a>.</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Lille” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX20r" class="pb"></div>       
         
         <div class="p">Passeport, Monsieur, sʼil vous plait—. I hate
                    <br/>fortified towns, in general, that is.— Their<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                p
                </span>
                
              </a></span>
            <br/>houses, are like barracks, their public buildings,
                    <br/>like prisons, their population, like so many rats
                    <br/>in a rat trap, they are arduous to get in,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#GETIN" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                q
                </span>
                
              </a></span> dif‐
                    <br/>ficult to get out, and disagreeable to remain in.
                    <br/>To all this however, <span class="placeName-LILLE">Lille</span> is an exception, except in
                    <br/>one circumstance, its difficulty of access.— We were
                    <br/>detained after a long days journey, under a bur<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#WORDDIVISIONBURNING" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                r
                </span>
                
              </a></span>
            <br/>ning sun, hot, hungry, and stupid, while our
                    <br/>passport was examined. Slowly the sentinel<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                s
                </span>
                
              </a></span>
            <br/>unfolded the paper, spelled over its contents with
                    <br/>tiresome coolness, and provoking minuteness
                    <br/>slowly returned it, and then came— Passez.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#PASSPORT" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                16
                </span>
              </a></span>
            <br/>And pass we did, right gladly.— <span class="placeName-LILLE">Lille</span> is a 
            <div id="MSIX20v" class="pb"></div>
            <br/>beautiful, a most beautiful town,— I have seen
                    <br/>none equal to it, for grandeur of effect, for the
                    <br/>massive magnificence, of its edifices, for the pal‐
                    <br/>ace like nobility of its streets, except <span class="placeName-GENOA">Genoa</span>.— The
                    <br/>day also on which we entered it was almost
                    <br/>Italian, the sky was of such a deep and unbro‐
                    <br/>ken blue, and a stream of rich, glowing, tawny
                    <br/>light shot upon the full fretwork, & elaborate
                    <br/>carving, of the upper parts of the houses — but
                    <br/>their bases, owing to the narrowness of the streets
                    <br/>and the enormous height of the opposing build‐
                    <br/>ings, were wrapt in shade, deep, gloomily deep
                    <br/>when contrasted with the flood of sunshine, that
                    <br/>glanced on the gable roofs, and almost gave to
                    <br/>life<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_prose_glosses_textual#GAVETOLIFE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                t
                </span>
                
              </a></span> the many statues of the <span class="persName-VIRGINMARY">virgin</span>, that stood
                    <br/>beneath their Gothic niches, really very respec‐
                    <br/>tably sculptured, at every angle of the streets.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lille_glosses_contextual#SHADE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                17
                </span>
              </a></span></div>
         <span class="space" style="padding-left:1.6em"> </span>   
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Brussels” [section title]</span></div><div id="MSIX21r" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:5.6em"> </span><span class="title-composite-JRBRUSSELSCOMP"><span class="smallcaps">BRUSSELS</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_poem_glosses_textual#BRUSSELSBLANK" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                18
                </span>
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Brussels” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX20r" class="pb"></div>
         <span class="space" style="padding-left:3.6em"> </span>
         
         <div class="lg-stanza">
            <span class="l">The racking clouds were fleeting fast</span><br/>
            <span class="l">Upon the bosom of the blast<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#RACKINGCLOUDS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                19
                </span>
              </a></span></span><br/>
            <span class="l">In wild confusion fiercely driven
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L115" id="L115">115</a></div></span><br/>
            <span class="l">Fled they across the face of heaven</span><br/>
            <span class="l">The fitful gust came shrieking high,</span><br/>
            <span class="l">The rattling rain flew driving by</span><br/>
            <span class="l">But where the horizon stretched away</span><br/>
            <span class="l">Towards the couch of parting day
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L120" id="L120">120</a></div></span><br/>
            <span class="l">A streak of paly light was seen</span><br/>
            <span class="l">The heaped and darkling clouds between</span><br/>
            <span class="l">Against that light, for time full brief</span><br/>
            <div id="MSIX21v" class="pb"></div>
            <span class="l"><span class="placeName-BRUSSELS">Brussels</span> arose in dark relief</span><br/>
            <span class="l">Colossal on the western fire
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L125" id="L125">125</a></div></span><br/>
            <span class="l">Seemed massive towʼr and slender spire</span><br/>
            <span class="l">Nearer, and nearer as we drew</span><br/>
            <span class="l">More strongly marked the outlines grew,</span><br/>
            <span class="l">Till of the buildings, you might see,</span><br/>
            <span class="l">Distinct the Gothic tracerie
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L130" id="L130">130</a></div></span><br/>
            <span class="l">The drawbridge rung, we passed the gate,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#DRAWBRIDGE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                20
                </span>
              </a></span></span><br/>
            <span class="l">And regal <span class="placeName-BRUSSELS">Brussels</span> entered straight</span><br/>
            <span class="l">It stirs, to see the human tide</span><br/>
            <span class="l">That marks a city in its pride</span><br/>
            <span class="l">That fitful oceans eddying sweep
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L135" id="L135">135</a></div></span><br/>
            <span class="l">Is still more changeful than the deep</span><br/>
            <span class="l">For those dark billows as they roll</span><br/>
            <span class="l">Mark movements of the human soul.</span><br/>
            <span class="l">Yet in that city, there was none,</span><br/>
            <span class="l">Of that confused and busy hum,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L140" id="L140">140</a></div></span><br/>
            <span class="l">That tells of traffic, and of trade</span><br/>
            <span class="l">No, <span class="placeName-BRUSSELS">Brussels</span> time of powʼr was sped</span><br/>
            <span class="l">Yet in her streets was something seen</span><br/>
            <span class="l">Spoke what the city once had been</span><br/>
            <div id="MSIX22r" class="pb"></div>
            <span class="l">Our rapid course as now we wheel
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L145" id="L145">145</a></div></span><br/>
            <span class="l">Where rose the huge <span class="placeName-building-HOTELDEVILLEBRUSSELS">hotel de ville</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#HOTELDEVILLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                21
                </span>
              </a></span></span><br/>
            <span class="l">The noble spires proportions high</span><br/>
            <span class="l">Stood forth upon the cloudy sky,</span><br/>
            <span class="l">In all its fretted majesty</span><br/>
            <span class="l">And his last light the sun had sent
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L150" id="L150">150</a></div></span><br/>
            <span class="l">On buttress and on battlement</span><br/>
            <span class="l">That while the houses were arrayed</span><br/>
            <span class="l">In all the depth of twilight shade,</span><br/>
            <span class="l">Yet shot there faint a yellow glow</span><br/>
            <span class="l">Where the tall arches shafted show
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L155" id="L155">155</a></div></span><br/>
            <span class="l">Glimmered a moment there the ray,</span><br/>
            <span class="l">Then fainter grew, and past away</span><br/>
            <span class="l"><span class="placeName-BRUSSELS">Brussels</span>, thy battlements have been</span><br/>
            <span class="l">Of many an action strange the scene</span><br/>
            <span class="l">Thou sawst on Julys dreadful night<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#JULYSDREADFULNIGHTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                22
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L160" id="L160">160</a></div></span><br/>
            <span class="l">The veterans rushing to the fight</span><br/>
            <span class="l">Thou heardest when the word was spoken</span><br/>
            <span class="l">At midnight thy repose was broken</span><br/>
            <span class="l">By tramp of men and neigh of steed</span><br/>
            <span class="l">Battalions bursting forth to bleed
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L165" id="L165">165</a></div></span><br/>
            <div id="MSIX22v" class="pb"></div>
            <span class="l">Till the dark phalanx waving crest</span><br/>
            <span class="l">Forth from thy gates was forward prest</span><br/>
            <span class="l">And breaking with the morning mild</span><br/>
            <span class="l">The disant roar of battle wild.</span><br/>
            <span class="l">And later still the rabble shout
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L170" id="L170">170</a></div></span><br/>
            <span class="l">And revolutions riot rout</span><br/>
            <span class="l">Leaving such marks as long shall tell</span><br/>
            <span class="l">Of dark destruction fierce and fell.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Brussels” Drawing 2 of 3</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRBRUSSELSWAYSIDEMSIX">Wayside Shrine and Worshiper</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “to left, a group of large trees; to right, a wayside shrine; between these a river with a town in the far distance” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:347 n. 1). 
                        The curved expanse between the trees and the shrine may be intended for a road, not a river, as there appear to be ruts running in its center.  
                        A worshiper kneels in front of the shrine and lifts clasped hands; a pair of figures lounges beneath the trees.
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Brussels” Drawing 3 of 3</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRBRUSSELSWATERLOOMSIX">Vignette, <span class="persName-NBE">Napoleon</span> (or <span class="persName-AWW">Wellington</span>?) at the <span class="date-1815-06-18">Battle of Waterloo</span>, adapted from <span class="persName-JMWT">Turner</span>, <span class="title-artwork-TURNERMARENGO"><i>Marengo</i></span></span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of the field of <span class="placeName-WATERLOO">Waterloo</span>; soldiers with cannon in the foreground; a general on his horse” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:347 n. 1). 
                        While <span class="persName-JR">Ruskin</span> certainly intends the drawing to depict a scene from the <span class="date-1815-06-18">Battle of Waterloo</span>, 
                        which is mentioned in <span class="title-composite-JRBRUSSELSCOMP">“Brussels”</span>—both in the prose section following 
                        the drawing, and in the poem preceding it—he based his drawing on <span class="persName-JMWT">J. M. W. Turner</span>ʼs vignette, 
                        <span class="title-artwork-TURNERMARENGO"><i>Marengo</i></span>, 
                        depicting the <span class="date-1800-06-14">Battle of Marengo</span>, which was engraved for 
                        <a href="/notes/bibliography#ROGERSITALY1830" target="_self"><span class="persName-SR">Samuel Rogers</span>, <span class="title-poem-ROGERSITALY1830"><i>Italy</i> (1830)</span></a> (p. 17; and 
                        see no. 6 of catalog in <a href="/notes/bibliography#PIGGOTTTURNERSVIGNETTES" target="_self"><span class="persName-JPSCHOLAR">Piggott</span>, <span class="title-book-PIGGOTTTURNERSVIGNETTES"><i>Turnerʼs Vignettes</i></span></a>, 98).</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> omits the left side of <span class="persName-JMWT">Turner</span>ʼs original vignette, 
                        copying only the general on his rearing horse and the group gathered around the cannon on the right. 
                        In order to resituate the scene in <span class="placeName-WATERLOO">Waterloo</span>, <span class="persName-JR">Ruskin</span> also omits 
                        the <span class="geogName-ALPS">Alps</span> that <span class="persName-JMWT">Turner</span> shows in the north above the <span class="placeName-PIEDMONT">Piedmont</span> plain; 
                        instead, he indicates the outline of a town in the distance, intended as <span class="placeName-BRUSSELS">Brussels</span>, shown with its two large cathedral towers in silouette. 
                        By adapting <span class="persName-JMWT">Turner</span>ʼs scene to <span class="placeName-WATERLOO">Waterloo</span>, 
                        <span class="persName-JR">Ruskin</span> intensifies <span class="persName-JMWT">Turner</span>ʼs irony. The <span class="date-1800-06-14">Battle of Marengo</span> 
                        was a decisive victory for <span class="persName-NBE">Napoleon</span> in his second Italian campaign against the Austrians, 
                        allegedly causing the British prime minister, <span class="persName-WPY">William Pitt</span> (<span class="date-1759-1806">1759–1806</span>), 
                        to declare with resignation, “Fold up that map”, meaning that the French general had effectively conquered all of Europe 
                        (<a href="/notes/bibliography#PIGGOTTTURNERSVIGNETTES" target="_self"><span class="persName-JPSCHOLAR">Piggott</span>, <span class="title-book-PIGGOTTTURNERSVIGNETTES"><i>Turnerʼs Vignettes</i></span></a>, 38). 
                        In <span class="title-poem-ROGERSITALY1830"><i>Italy</i></span>, this victory is undermined by placing 
                        <span class="persName-JMWT">Turner</span>ʼs vignette above <span class="persName-SR">Rogers</span>ʼs poem, 
                        <span class="title-poem-ROGERSTHEDESCENT">“The Descent”</span>, referring literally to the descent from the mountains 
                        into <span class="placeName-PIEDMONT">Piedmont</span> but figuratively to <span class="persName-NBE">Napoleon</span>ʼs eventual fall. 
                        <span class="persName-JR">Ruskin</span> completes <span class="persName-JMWT">Turner</span>ʼs ironic statement by bringing the image 
                        forward in time to <span class="placeName-WATERLOO">Waterloo</span>.</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> may also have meant the viewer to displace <span class="persName-NBE">Napoleon</span> as the equestrian figure in the foreground 
                        (which <span class="persName-JMWT">Turner</span> based on the portrait by <span class="persName-JLD">Jacques‐Louis David</span> [<span class="date-1748-1825">1748–1825</span>], 
                        <span class="title-artwork-DAVIDNAPOLEONCROSSINGALPS"><i>Napoleon Crossing the Alps</i></span> [<span class="date-1802-1805">1802–5</span>]) 
                        and to put the victorious <span class="persName-AWW">Wellington</span> in the saddle instead. The figure appears to wear his bicorne with the points “fore and aft” 
                        in <span class="persName-AWW">Wellington</span>ʼs manner, rather than side to side and 
                        parallel with the shoulders in <span class="persName-NBE">Napoleon</span>ʼs signature manner.</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Brussels” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX23r" class="pb"></div>
         
         <div class="p"><span class="placeName-BRUSSELS">Brussels</span> is a lovely, a queenlike city, from<br/>
                    a distance, sweeping up the flanks of its<br/>
                    hill, battlement over battlement swell–<br/>
                    ing up higher, and higher, and yet higher<br/>
                    and the massive obscurity of the two huge<br/>
                    square cathedral towʼrs looming over the<br/>
                    whole, and contrasted strangely with the<br/>
                    delicate sharp spiriness of the steeple of<br/>
                    the <span class="placeName-building-HOTELDEVILLEBRUSSELS">hotel de ville</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#CATHEDRALHOTELDEVILLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                23
                </span>
              </a></span> 
            <span class="placeName-PARIS">Paris</span> would look like<br/>
                    an assemblage of brick kilns beside it.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#PARISBRICKKILNSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                24
                </span>
              </a></span><br/>
                    We saw <span class="placeName-BRUSSELS">Brussels</span> at eleven miles distance<br/>
                    its towers rising dark and spearlike out<br/>
            <div id="MSIX23v" class="pb"></div>
                    of the horizon— It was waxing dark as we<br/>
                    entered the city, and the lights began to<br/>
                    twinkle in the few, the very few shop win‐ <br/>
                    dows. I love to pass through a city at night<br/>
                    the hum of the voices rises so softly out of<br/>
                    the obscurity, and the figures flit about<br/>
                    dark and batlike, and the cold starlight<br/>
                    mingles so strangely withe<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#WITHE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                u
                </span>
                
              </a></span> the red swar‐<br/>
                    thy gleam of the lamps, and when you<br/>
                    look up, the narrow strip of sky is of<br/>
                    such a dark dark blue, you may see<br/>
                    it appear to quiver with the starlight<br/>
                    if you look long, and the white house<br/>
                    fronts rise so ghastly, so ghostlike agains<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#AGAINS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                v
                </span>
                
              </a></span><br/>
                    it and the windows seem grinning ma–<br/>
                    liciously askance at you. It makes one<br/>
                    shiver to think of it.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#WAXINGDARKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                25
                </span>
              </a></span> Cities are exceed–<br/>
                    ingly picturesque when built upon hills<br/>
                    but for exploring for circumnavigating for<br/>
                    perambulating— Oh woe to the walker<br/>
                    who is compelled to drag himself up<br/>
            <div id="MSIX24r" class="pb"></div>
                    their steeps, those tiresome paved steeps,<br/>
                    those hard unyielding provokingly smooth<br/>
                    flagstones;or to go thundering down,<br/>
                    his rapidity increasing every instant<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                w
                </span>
                
              </a></span><br/>
                    when he is once in for it, lurching<br/>
                    tremendously like a ship in a swell,<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                x
                </span>
                
              </a></span><br/>
                    jerk, jerk, jerking, — Oh facilis des–<br/>
                    census Averni,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#FACILISDESCENSUSAVERNIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                26
                </span>
              </a></span> sed;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#SEDSEDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                27
                </span>
              </a></span> Ay theres the rub.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#THERESTHERUBGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                28
                </span>
              </a></span><br/>
                    The <span class="placeName-building-HOTELDEBELLEVUE">hotel de Bellevue</span> at <span class="placeName-BRUSSELS">Brussels</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#HOTELDEBELLEVUEBRUSSELSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                29
                </span>
              </a></span> ought<br/>
                    to have a belle vue, for you might as<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                y
                </span>
                
              </a></span><br/>
                    well scale the crags of <span class="placeName-GIBRALTAR">Gibraltar</span>, as storm<br/>
                    the heights of the <span class="placeName-building-HOTELDEBELLEVUE">hotel de belle vue</span>—;<br/>
                    whence, for all the boast of its title, I<br/>
                    never could discover more belle vue, than<br/>
                    a dusty square, some formal houses, &<br/>
                    a few murky park trees.</div>
         
         <div class="p">We left <span class="placeName-BRUSSELS">Brussels</span> on Wednesday mor–<br/>
                    ning<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#WEDNESDAYMORNING" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                30
                </span>
              </a></span> for <span class="placeName-WATERLOO">Waterloo</span><span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                z
                </span>
                
              </a></span> the sun beamed<br/>
                    sweetly among the long trunk of the<br/>
                    aged trees of the forest of <span class="geogName-SONIANFOREST">Soigny</span>;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#FORESTOFSOIGNYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                31
                </span>
              </a></span> and<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                aa
                </span>
                
              </a></span><br/>
                    their damp bark glistened dewily,— as<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                bb
                </span>
                
              </a></span><br/>
            <div id="MSIX24v" class="pb"></div>
                    it rose up taller, and taller, branching off<br/>
                    into the bending boughs, and slender spray<br/>
                    with the delicate foliage scattered through<br/>
                    here every leaf defined separately and clear<br/>
                    ly, as you looked up to the broad sky there<br/>
                    in light spready masses partially con–<br/>
                    cealing the long tapery grey trunks which<br/>
                    which<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#WHICHWHICH" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                cc
                </span>
                
              </a></span> retired back, farther and still far–<br/>
                    ther, yet distinctly grouped, and those<br/>
                    groups separated by the gleamy stream,<br/>
                    of yellow sunshine, which shone full<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                dd
                </span>
                
              </a></span><br/>
                    on the sides of the swelling green grassy<br/>
                    banks, then broken by the intervening<br/>
                    hollows, then climbing again up the<br/>
                    dewy moss and white trunks. It was<br/>
                    exceeding beautiful, I could have fan–<br/>
                    cied the glister<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#GLISTERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                32
                </span>
              </a></span> of the bright bayonets<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ee
                </span>
                
              </a></span><br/>
                    changing, like starlight on a wavy o–<br/>
                    cean, among the retiring foilage of<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ff
                </span>
                
              </a></span><br/>
                    those ancient trees,— I forgot how many<br/>
                    long years had past by since that ev–<br/>
            <div id="MSIX25r" class="pb"></div>
                    entful day. * * * This is the field of <span class="placeName-WATERLOO">Waterloo</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#FIELDOFWATERLOOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                33
                </span>
              </a></span><br/>
                    The round hills of green pasture lay unbro<br/>
                    ken before me, without a single tree except<br/>
                    where far to the right the rich forest coun<br/>
                    try commenced again, breaking away in<br/>
                    rounded masses, till lost in the blue of<br/>
                    the faint horizon. All is peace now.<br/>
                    Englishmen may feel proud on the field<br/>
                    of <span class="placeName-WATERLOO">Waterloo</span>, perhaps I did, but there is<br/>
                    something mingled with it.— Poor<br/>
            <span class="persName-NBE">Napoleon</span>. The grass is very green on<br/>
                    the field of <span class="placeName-WATERLOO">Waterloo</span>— it has grown from<br/>
                    the dust of our bravest. Oh tread on<br/>
                    it<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#TREADSOFTLYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                34
                </span>
              </a></span> softly<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#BRUSSELSBLANK2" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                35
                </span>
              </a></span>
            <span class="space" style="padding-left:2.8em"> </span>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Meuse” [section title]</span></div><div id="MSIX25v" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:4.8em"> </span><span class="title-composite-JRTHEMEUSECOMP"><span class="smallcaps">THE MEUSE</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_poem_glosses_textual#MEUSEBLANK" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                36
                </span>
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Meuse” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX25v" class="pb"></div>
         <span class="space" style="padding-left:2.8em"> </span>
         
         <div class="lg-stanza">
            <span class="l">The sky was clear, the morn was gay</span><br/>
            <span class="l">In promise of a cloudless day
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L175" id="L175">175</a></div></span><br/>
            <span class="l">Fresh flew the breeze, with whose light wing</span><br/>
            <span class="l">Aspen and oak were quivering</span><br/>
            <span class="l">From flowʼret dank it dashed the dew</span><br/>
            <span class="l">The harebell bent its blossom blue,</span><br/>
            <span class="l">And from the <span class="geogName-MEUSE">Meuse</span> the mistwreaths<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#MISTWREATHSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                37
                </span>
              </a></span> grey
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L180" id="L180">180</a></div></span><br/>
            <span class="l">That morning breeze had swept away</span><br/>
            <span class="l">Showing such scenes as well might seem</span><br/>
            <span class="l">The fairy vision of a dream<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#FAIRYVISIONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                38
                </span>
              </a></span></span><br/>
            <span class="l">For changing still, and still as fair</span><br/>
            <span class="l">Rock, wave, and wood were mingled there
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L185" id="L185">185</a></div></span><br/>
            <span class="l">Peak over peak, fantastic ever</span><br/>
            <div id="MSIX26r" class="pb"></div>
            <span class="l">The lofty crags deep chasms sever.</span><br/>
            <span class="l">And grey and gaunt their lichened head</span><br/>
            <span class="l">Rose sheerly from the rivers bed<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#PEAKOVERPEAKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                39
                </span>
              </a></span></span><br/>
            <span class="l">Whose mantling wave in foamy sheet
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L190" id="L190">190</a></div></span><br/>
            <span class="l">Their stern projecting bases beat,</span><br/>
            <span class="l">And lashed to fury in his pride</span><br/>
            <span class="l">In circling whirlpools swept the tide</span><br/>
            <span class="l">As threatening, on some future day</span><br/>
            <span class="l">Those mighty rock<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_poem_glosses_textual#ROCKGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                gg
                </span>
                
              </a></span> to tear away
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L195" id="L195">195</a></div></span><br/>
            <span class="l">What though their front should seem to be</span><br/>
            <span class="l">A barrier, to eternity<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#BARRIERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                40
                </span>
              </a></span></span><br/>
            <span class="l">And on its side the cliffs between </span><br/>
            <span class="l">Were mazy forests ever seen</span><br/>
            <span class="l">That the tall cliffs steep flanks so grey
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L200" id="L200">200</a></div></span><br/>
            <span class="l">Were clothed in mantle green and gay</span><br/>
            <span class="l">Long time along that dell so deep</span><br/>
            <span class="l">Beside the rivers bed we sweep</span><br/>
            <span class="l">So steep the mighty crests inclined</span><br/>
            <span class="l">None other pathway you might find
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L205" id="L205">205</a></div></span><br/>
            <span class="l">Till the tall cliffs gigantic grace</span><br/>
            <span class="l">To undulating hills gave place</span><br/>
            <div id="MSIX26v" class="pb"></div>
            <span class="l">And vineyards clothe the bending brow</span><br/>
            <span class="l">ʼStead of the clinging copsewood now</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Meuse” Drawing 1 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRTHEMEUSERIVERMSIX">Vignette, the Meuse River and Cliffs</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “a sketch of a calm, broad river: on one side, a rocky road; on the other, crags” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:349 n. 1). 
                        A solitary rider on horseback follows the road, moving away from the viewer.</div>
         
         <div class="p">See, in the poem <a href="<?php echo r_build_url("witnesses/the_meuse_poem_msix.php");?>" target="_self"><span class="title-poem-JRTHEMEUSE">“The sky was clear, the morn way gay” [“The Meuse”]</span></a>, 
                        the lines “Peak over peak, fantastic ever / The lofty crags deep chasms sever. / And grey and gaunt their lichened head / 
                        Rose sheerly from the rivers bed“ along with accompanying gloss.</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Meuse” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX26v" class="pb"></div>
         
         <div class="p">How lightly the waves of the broad <span class="geogName-MEUSE">Meuse</span>
            <br/>crisped with the first breath of the mor‐
                <br/>ning as we swept over the long bridge
                <br/>that crosses the river from <span class="placeName-NAMUR">Namur</span>, and
                <br/>looked back on the rich dome of its small<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                hh
                </span>
                
              </a></span>
            <br/>but beautiful cathedral,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LONGBRIDGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                41
                </span>
              </a></span> as it began to
                <br/>smile to the first glance of the joyous
                <br/>sun that was drinking up the delicate
            <div id="MSIX27r" class="pb"></div>
            <br/>mists which clung to the hills, and rested on
                <br/>the valley, in which the fair city reposed<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ii
                </span>
                
              </a></span>
            <br/>so peacefully — and then we dashed along
                <br/>the valley of the <span class="geogName-MEUSE">Meuse</span>. I know not, if it<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                jj
                </span>
                
              </a></span>
            <br/>was because this was our first initiation in
                <br/>to<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#INTO" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                kk
                </span>
                
              </a></span> the scenery of continental rivers, but this<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ll
                </span>
                
              </a></span>
            <br/>part of the <span class="placeName-MEUSE">Meuse</span> appeared to me infinitely
                <br/>preferable (not in point of sublimity or
                <br/>beauty,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#BEAUTY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                mm
                </span>
                
              </a></span> but in that romantic and pi
                <br/>cturesque fairy beauty which is, in many
                <br/>cases, superior to either), to any thing which
                <br/>I ever afterwards saw on the shores of the
                <br/>far famed <span class="geogName-RHINE">Rhine.</span> There was, to me, a
                <br/>great sameness throughout the whole of<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                nn
                </span>
                
              </a></span>
            <br/>the course of the latter river, and, for its<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                oo
                </span>
                
              </a></span>
            <br/>fortresses, it is positively too much of a good
                <br/>thing, a tiresome repetition of ruins, and
                <br/>ruins too, which do not altogether agree<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                pp
                </span>
                
              </a></span>
            <br/>with my idea of what ruins ought to be.
                <br/>But for the <span class="geogName-MEUSE">Meuse</span>, the infinite variety of scene–
                <br/>ry.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                qq
                </span>
                
              </a></span> the impossibility of seeing every successive
            <div id="MSIX27v" class="pb"></div>
            <br/>change as you feel that it ought to be seen —, and,
                <br/>finally, the tantalizing rate at which you dash<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                rr
                </span>
                
              </a></span>
            <br/>away from that which you could feast upon, and<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ss
                </span>
                
              </a></span>
            <br/>look upon, and dwell upon, for — ages I was going
                <br/>to say, months, I will say, are enough to enchant
                <br/>you with anything. If you wish to see rock scen‐
                <br/>ery in perfection, go to the <span class="geogName-MEUSE">Meuse</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#GOTOTHEMEUSEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                42
                </span>
              </a></span> for never were<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                tt
                </span>
                
              </a></span>
            <br/>rocks more beautifully disposed, more richly and<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                uu
                </span>
                
              </a></span>
            <br/>delicately wooded, or more finely contrasted with<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                vv
                </span>
                
              </a></span>
            <br/>the amazing richness of the surrounding scenery.
                <br/>But alas, it was but a forenoon ride, and the eve
                <br/>saw us quit the magnificent <span class="geogName-MEUSE">Meuse</span> with sorrow<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ww
                </span>
                
              </a></span>
            <br/>for the smoky streets and coal wharfs of <span class="placeName-LIEGE">Liege</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#MEUSEBLANK2" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                xx
                </span>
                
              </a></span>
            <br/>and the round, dumpy, shapeless hills of <span class="placeName-SPA">Spa</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LIEGESPAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                43
                </span>
              </a></span><br/>
            <span class="space" style="padding-left:2.8em"> </span>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Meuse” Drawing 2 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRTHEMEUSELIEGESIX">Liège</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “a full‐page illustration of a courtyard, with a pillared corridor, steps etc.” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:350 n. 2).</div>
         
         
         <div class="p">The drawing is a copy of <span class="title-artwork-PROUTPALAISPRINCELIEGE"><i>Palais du Prince, Liège</i></span>, by 
                        <a href="/notes/prout_samuel_note" target="_self"><span class="persName-SP">Samuel Prout</span> (<span class="date-1783-1852">1783–1852</span>)</a>, 
                        in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-artwork-PROUTSKETCHES"><i>Facsimiles of Sketches Made in Flanders and Germany</i></span></a> 
                        (<span class="date-1833">1833</span>). The scene is set inside the Renaissance arcade (the “Court of Honor”) of the 
                        <span class="placeName-building-PRINCEBISHOPSPALACELIEGE">Palais des Princes‐Évêques</span> in <span class="placeName-LIEGE">Liège</span>, 
                        constructed under the patronage of the prince‐bishop, <span class="persName-EDLM">Érard de la Marck</span> (<span class="date-1472-1538">1472–1538</span>, 
                        ruled <span class="date-1506-1538">1506–38</span>). <span class="persName-JR">Ruskin</span> has not made a vignette from <span class="persName-SP">Prout</span>ʼs scene; 
                        rather, by using a full page of <span class="title-manuscript-MSIX">MS IX</span> and setting the drawing broadside, 
                        he is imitating the scale as well as stylistic features of <span class="persName-SP">Prout</span>ʼs original lithograph.</div>
         
         
         <div class="p">In an <span class="date-1828">1828</span> tour account by <span class="persName-SJB">John Barrow</span> (<span class="date-1764-1848">1764–1848</span>), 
                        a description of the palace suggests the picturesque scene inside the arcade that captured <span class="persName-SP">Prout</span>ʼs imagination: 
                        “an imposing old edifice, though somewhat heavy, with an interior quadrangle 
                        containing the public offices and records, and several courts for civil and provincial affairs” 
                        (the prince‐bishopric having succumbed to the French Republic even before the <span class="date-1830-08-25-1831-07-14">Belgian Revolution of 1830</span>). 
                        “The columns supporting the arcade are short and thick, having very much of the Moorish character. Under the arcade are little cells or shops, 
                        in which small articles of daily use of every description are exposed for sale” 
                        (<a href="/notes/bibliography#BARROWFAMILYTOUR" target="_self"><span class="title-book-BARROWFAMILYTOUR"><i>Family Tour through South Holland</i></span></a>, 239). 
                        <span class="persName-JR">Ruskin</span>ʼs cousin, 
                        <a href="/notes/richardson_mary_note" target="_self"><span class="persName-MRC">Mary Richardson</span></a>, mentions the family 
                        visiting the palace on <span class="date-1833-05-23">23 May 1833</span> (<a href="/notes/bibliography#RFT48" target="_self">Diary of Mary Richardson, 1833</a>, p. 11).
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
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
                44
                </span>
              </a></span> If thou ever travellest from <span class="placeName-SPA">Spa</span> to <span class="placeName-AIXLACHAPELLE">Aix</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#SPATOAIXGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                45
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
                yy
                </span>
                
              </a></span><br/>
                    gig, or other vehicle, whatsoever, at a greater<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                zz
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
                aaa
                </span>
                
              </a></span><br/>
                    a comfortable pipe, and half hours nap, or so, dur‐<br/>
                    ring which time his above mentioned quadrup‐<br/>
                    eds, be surrendered to their own will, guidance,<br/>
                    and management.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#POSTILIONAIXLACHAPELLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                46
                </span>
              </a></span></div>
         
         <div class="p">Alas, every article of this treaty was strictly ful‐<br/>
                    filled with regard to us, and the consequence was,<br/>
                    that in a six hours ride of twelve miles, I was<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                bbb
                </span>
                
              </a></span><br/>
                    first fevered by the sun, then smothered by the<br/>
                    dust, and finally was,— but let that pass<br/>
                    for the present.</div>
         
         <div class="p">A cathedral is a noble, a beautiful, a sublime<br/>
                    thing,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#CATHEDRALGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                47
                </span>
              </a></span> by twilight, with its white, fretted, mar‐<br/>
                    ble columns, looking out from the dark retiring<br/>
                    immensity, of the long aisles, and the faint<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ccc
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
                48
                </span>
              </a></span> Arms stone, back<br/>
                    stone, hard independent unaccommodating<br/>
            <span class="name--GRANITE">granite</span>, Thin velvet cushion however, on the seat<br/>
                    as a mediator. Very ancient affair, product of<br/>
                    the dark ages I suppose, His sarcophagus al‐<br/>
                    so, sculptured, Grecian, basso relievo,—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#SARCOPHAGUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                49
                </span>
              </a></span> The<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ddd
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
                50
                </span>
              </a></span> Return,d<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#APOSTROPHE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                eee
                </span>
                
              </a></span> to the inn in very bad<br/>
            <div id="MSIX31r" class="pb"></div>
                    humour, off early next morning for <span class="placeName-COLOGNE">Cologne</span>—<br/>
                    Good night.
                </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cologne” [section title]</span></div><div id="MSIX31r" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:6.4em"> </span><span class="title-composite-JRCOLOGNECOMP"><span class="smallcaps">COLOGNE</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#COLOGNEBLANK" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                51
                </span>
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cologne” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <span class="space" style="padding-left:6.8em"> </span>
         
         <div class="lg-stanza">
            <span class="l">The noon was past, the sun was low
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L210" id="L210">210</a></div></span><br/>
            <span class="l">Yet still we felt his arid glow</span><br/>
            <div id="MSIX31v" class="pb"></div>
            <span class="l">From the red sand reflected glare</span><br/>
            <span class="l">Deadened the breeze, and fired the air</span><br/>
            <span class="l">The open sky was misty grey,</span><br/>
            <span class="l">The clouds in mighty masses lay
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L215" id="L215">215</a></div></span><br/>
            <span class="l">That heaped on the horizon high,</span><br/>
            <span class="l">Marked Alpine outline on the sky</span><br/>
            <span class="l">Long had we toiled to gain a brow,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#GAINABROWGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                52
                </span>
              </a></span></span><br/>
            <span class="l">On which we stood triumphant now<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_poem_glosses_textual#ERASEDLINESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                fff
                </span>
                
              </a></span></span><br/>
            </div>
         <span class="space" style="padding-left:0.8em"> </span>
         
         <div class="lg-stanza">
            <span class="l">While the white mist was certain sign
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L220" id="L220">220</a></div></span><br/>
            <span class="l">Where took his course the mighty <span class="geogName-RHINE">Rhine</span>,</span><br/>
            <span class="l">Hills in the distant haze were seen,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#SIEBENGEBIRGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                53
                </span>
              </a></span></span><br/>
            <span class="l">And wide expanse of plain between,</span><br/>
            <span class="l">Whose desert length without a tree,</span><br/>
            <span class="l">Was stretched in vast monotony.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L225" id="L225">225</a></div></span><br/>
            <span class="l">We drove adown that hill amain</span><br/>
            <span class="l">We past along the shadeless plain</span><br/>
            <span class="l">Rested we now where uncontrolled</span><br/>
            <span class="l">The <span class="geogName-RHINE">Rhine</span> his bursting billows rolled,</span><br/>
            <span class="l">And ever, ever, fierce and free,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L230" id="L230">230</a></div></span><br/>
            <div id="MSIX32r" class="pb"></div>
            <span class="l">Bore broadly onward to the sea.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
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
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cologne” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <span class="space" style="padding-left:2.0em"> </span>
         <div class="quarter"></div>
         
         <div class="p">And this is the birthplace of <span class="persName-PPR">Rubens</span>!<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#RUBENSBIRTHPLACEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                54
                </span>
              </a></span> Sink these
                    <br/>French bad roads, a long days journey over them,
                    <br/>under a burning sun, together with a peram‐
                <div id="MSIX32v" class="pb"></div>
            <br/>bulation on a damp evening at <span class="placeName-AIXLACHAPELLE">Aix‐la‐Chapelle</span>,
                    <br/>so knocked me up, that I was forced to diet
                    <br/>it and quiet it, and could not stir out<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#STIROUTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                55
                </span>
              </a></span> to see
                    <br/><span class="persName-PPR">Rubens</span>ʼ last picture, the masterpiece of the mas
                    <br/>ter, the <span class="title-artwork-RUBENSCRUCIFIXIONSTPETER">crucifixion of <span class="persName-STPETER">St Peter</span></span>, bequeated by,
                    <br/>him at his death to his native city,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#RUBENSSTPETERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                56
                </span>
              </a></span> and, yet
                    <br/>more, his birthchamber.</div>
         
         <div class="p">There is, in many, in most, of the pictures of <span class="persName-PPR">Ru
                    <br/>bens</span>, and that even in his most sacred subjects
                    <br/>magnificent as they are viewed as paintings
                    <br/>only, an unholiness, a cast of Bacchanaliane
                    <br/>revelry, to say the least, an unpleasingness, that
                    <br/>does him dishonour;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#DISHONOURGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                57
                </span>
              </a></span> But there a few, a cho‐
                    <br/>sen few, of his pictures, which the master hath
                    <br/>poured his whole soul into, and the produc
                    <br/>tion of one of which, were enough to repay a
                    <br/>lifetime of labour with immortality. There is a
                    <br/>picture, I neither know where it is, nor what
                    <br/>it is, but there is a picture, curtained up in one of
                    <br/>the royal palaces of <span class="placeName-FRANCE">France</span>, the <span class="title-artwork-RUBENSSTAMBROSIUS"><span class="persName-STAMBROSE">St Ambrosius</span></span>, I<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ggg
                </span>
                
              </a></span>
            <br/>think, kneeling before a crucifix.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#STAMBROSIUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                58
                </span>
              </a></span> There is one sin
                <div id="MSIX33r" class="pb"></div>
            <br/>gle ray of yellow light falling faintly upon the
                    <br/>grey hairs and holy features of the venerable saint<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                hhh
                </span>
                
              </a></span>
            <br/>the rest is in obscurity, there is nothing more, not‐
                    <br/>hing to disturb either the eye or the mind, and
                    <br/>you feel calmed and subdued when you look u‐
                    <br/>pon that one solitary figure, as if in the presence
                    <br/>of a superior being. It is impossible to see
                    <br/>that picture, the reality is too striking<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                iii
                </span>
                
              </a></span> and a
                    <br/>reality so hallowed and so beautiful, that when
                    <br/>the curtain is again drawn over the picture, you
                    <br/>feel as if awaking from a dream of heaven<span class="g-terminal_comma">,</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                jjj
                </span>
                
              </a></span> It
                    <br/>is by such pictures as this that <span class="persName-PPR">Rubens</span> has gain‐
                    <br/>ed his immortality, and it was, I believe such
                    <br/>a picture as this that I did not see at <span class="placeName-COLOGNE">Cologne</span>.
                    <br/>Then the disappointment made me worse, and
                    <br/>I could not stir out to see the room in which
                    <br/>he was born. But it donʼt signify talking.
                    <br/>Reader, beware of the <span class="placeName-RHEINBERGHOTEL">Grosser Rheinberg hotel</span>
            <br/>at <span class="placeName-COLOGNE">Cologne</span>. Art thou a poet, a painter, or a
                    <br/>romancer? Imagine the <span class="placeName-RHINE">Rhine</span>, the beauti‐
                    <br/>ful, the mighty, the celebrated <span class="placeName-RHINE">Rhine, </span>fouler<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                kkk
                </span>
                
              </a></span>
            <div id="MSIX33v" class="pb"></div>
            <br/>than the <span class="geogName-THAMES">Thames</span> at <span class="placeName-LONDONBRDG">London bridge</span>, compress‐
                    <br/>ed into almost as narrow a channel, wash‐
                    <br/>ing dirty coal wharfs on the <div 
          class="subst-del s-subst s-del" >th</div><div 
          class="s-subst s-add s-overwrite s-inline">on</div>e side; bogs<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                lll
                </span>
                
              </a></span>
            <br/>marshes, and coke manufactories on the other
                    <br/>yellow with mud from beneath, black with
                    <br/>tar and coaldust from above, loaded with clum
                    <br/>sy barges and dirty shipping, in short a vile
                    <br/>sordid, mercenary river, fit only for traffic,
                    <br/>high Germans, and low Dutchmen<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                mmm
                </span>
                
              </a></span> and you
                    <br/>will have some idea of the <span class="placeName-RHINE">Rhine</span>, as seen from
                    <br/>the bedroom windows of the <div 
          class="subst-del s-subst s-del" >g</div><div 
          class="s-subst s-add s-overwrite s-inline">G</div>rosser Rheinberg<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#GROSSERRHEINBERGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                59
                </span>
              </a></span>
            <br/>Oh, if thou wouldest see the <span class="placeName-RHINE">Rhine</span> as it may
                    <br/>be seen, as it ought to be seen, shut your eyes,
                    <br/>sleep your time away, do any thing but look a‐
                    <br/>bout you, till you get to <span class="placeName-BONN">Bonn</span>, then walk out,
                    <br/>upon the terrace which looks forth over the
                    <br/>swell of the deep waters, to the dim outline of
                    <br/>the <span class="geogName-SIEBENGEBIRGE">seven mountains</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#SEVENMOUNTAINSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                60
                </span>
              </a></span> and there gaze, & dream
                    <br/>and meditate, 2ndly. “Art thou an epicure?
                    <br/>Imagine mutton chops, which ought to have
                    <br/>been tough, but which age had made ten‐
                <div id="MSIX34r" class="pb"></div>
            <br/>der, accompanied by circular cakes of congealed
                    <br/>fat, denominated gravy, together with a kind
                    <br/>of brown ashes, apparently moistened, with,
                    <br/>whale oil (which I think they called fried po
                    <br/>tatoes,) as an addition to your feast, and you
                    <br/>have an idea of a dinner of the Grosser Rhein‐
                    <br/>berg. I have omitted one thing however,<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                nnn
                </span>
                
              </a></span>
            <br/>which was really capital, the vinegar. They 
                    <br/>called it Hock wine, certainly, but that don't
                    <br/>signify, you must not be led astray by
                    <br/>names in this part of the world. However,
                    <br/>good vinegar would not make up for the
                    <br/>want or worse than want, of every thing
                    <br/>else, and although the waiters made a
                    <br/>point of not appearing, until the bell had
                    <br/>been rung seven times, we at last made t
                    <br/>them understand that we neither liked
                    <br/>their mode of waiting, nor the contents of<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ooo
                </span>
                
              </a></span>
            <br/>their larder, and so, according to their de
                    <br/>serts, deserted them.</div>                
         
         <div class="p">The <span class="placeName-STPETERCATHEDRAL">cathedral</span> is the richest in fretwork
                <div id="MSIX34v" class="pb"></div>
            <br/>and carving, in the delicate finish of every
                    <br/>shaft and buttress, and pinnacle, that I saw,
                    <br/>on the journey, except <span class="placeName-MILAN">Milan</span><span class="g-terminal_comma">,</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ppp
                </span>
                
              </a></span> They showed us
                    <br/>in a little Gothic chapel, three skulls which,
                    <br/>they told us were those of the Magi. They
                    <br/>were set in framework of gold, and co‐
                    <br/>vered with jewels, but the pomp became<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                qqq
                </span>
                
              </a></span>
            <br/>not the dry bones, The soulless eye, and
                    <br/>fleshless cheek looked not the less horrible,
                    <br/>though a diamond beamed through the one
                    <br/>and a bar of gold bound the other.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#MAGIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                61
                </span>
              </a></span> Re‐
                    <br/>turned home, and the next morning de
                    <br/>parted from <span class="placeName-COLOGNE">Cologne</span> with regret, to trace<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                rrr
                </span>
                
              </a></span>
            <br/>the mighty <span class="placeName-RHINE">Rhine</span> to his source<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#RHETIANALPSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                62
                </span>
              </a></span> among the
                    <br/><span class="geogName-RHAETIANALPS">Rhetian Alps</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#COLOGNEBLANK2" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                63
                </span>
              </a></span></div>
         <span class="space" style="padding-left:2.4em"> </span>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Andernacht” [section title]</span></div><div id="MSIX35r" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:4.4em"> </span><span class="title-composite-JRANDERNACHTCOMP"><span class="smallcaps">ANDERNACHT</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                sss
                </span>
                
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Andernacht” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX35r" class="pb"></div>
         <span class="space" style="padding-left:6.0em"> </span>
         
         <div class="lg-stanza">
            <span class="l">We have wound a weary way,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTVERSIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ttt
                </span>
                
              </a></span></span><br/>
            <span class="l">Twilights mists are gathering grey,</span><br/>
            <span class="l">Purple now the hills are showing</span><br/>
            <span class="l">Bright the western clouds are glowing
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L235" id="L235">235</a></div></span><br/>
            <span class="l">Lashing on with giant force,</span><br/>
            <div id="MSIX35v" class="pb"></div>
            <span class="l">Rolls the <span class="placeName-RHINE">Rhine</span> his sullen course,</span><br/>
            <span class="l">Flash his waves with flamy red,</span><br/>
            <span class="l">Eddying oer their <span class="name--BASALT">basalt</span> bed,</span><br/>
            <span class="l">Now with wide expanded breast
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L240" id="L240">240</a></div></span><br/>
            <span class="l">Now between the hills compressed,</span><br/>
            <span class="l">Ever noble, ever free,</span><br/>
            <span class="l">Flows his river majesty</span><br/>
            <span class="l">Now upon the evening skies,</span><br/>
            <span class="l"><span class="placeName-ANDERNACH">Andernacht</span>ʼs grey ruins rise,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTSGREYRUINSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                64
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L245" id="L245">245</a></div></span><br/>
            <span class="l">Memorials of the <span class="placeName-ROMEANCIENT">Roman</span> power,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ROMANPOWERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                65
                </span>
              </a></span></span><br/>
            <span class="l">Buttress and battlement and tower,</span><br/>
            <span class="l">Decaying, falling fast away,</span><br/>
            <span class="l">The monuments of <span class="persName-JULIUSCAESAR">Caesar</span>s sway,</span><br/>
            <span class="l">In heaps together loosely thrown,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L250" id="L250">250</a></div></span><br/>
            <span class="l">The sculptured head, inscriptioned stone</span><br/>
            <span class="l">Unguarded now the bridges length,</span><br/>
            <span class="l">And failing fast its arches strength</span><br/>
            <span class="l">The green sod in the moat is growing</span><br/>
            <span class="l">The cold wind in the chambers blowing
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L255" id="L255">255</a></div></span><br/>
            <span class="l">And flapping through the thin night air</span><br/>
            <span class="l">The owl and bat the tenants there,</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
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
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Andernacht” [prose]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">What is it that makes the very heart leap wi‐<br/>
                    thin you, at the sight of a hills blue outline,<br/>
                    that so aetheriallizes the soul, and ennobles the<br/>
                    spirit, that so raises you from the earth, and<br/>
                    from aught of the earth,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                uuu
                </span>
                
              </a></span> Is it their apparent<br/>
                    proximity to the blue heavens inaccessible–<br/>
                    ness, is it the humbling sense of your own<br/>
                    littleness, or the immoveable, unchangeable mag<br/>
                    nificence, of that which has seen the begin<br/>
            <div id="MSIX36v" class="pb"></div>
                    ning of the world, and will see its end, or is<br/>
                    it that the thoughts range insensibly, from<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                vvv
                </span>
                
              </a></span><br/>
                    the things created, to him who created them<br/>
                    I know not. * * *. How it thrilled<br/>
                    through me, when first, far away, across<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                www
                </span>
                
              </a></span><br/>
                    the lake like swell.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTPAUSEPERIODGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                xxx
                </span>
                
              </a></span> of the deep waters of that<br/>
                    wondrous river.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTPAUSEPERIODGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                yyy
                </span>
                
              </a></span> rose the cloudy outline,<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                zzz
                </span>
                
              </a></span><br/>
                    of the blue mountains,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                aaaa
                </span>
                
              </a></span> Long time hath<br/>
                    past over me, since I saw the swell of a <br/>
                    blue hill, I have longed for them,— I<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                bbbb
                </span>
                
              </a></span><br/>
                    have yearned for them as an exile yearns for<br/>
                    his native land, and I am with them.</div>
         
         <div class="p">We left <span class="placeName-COLOGNE">Cologne</span> on a misty summer mor–<br/>
                    ning, its many turreted spires rising colos–<br/>
                    sally, but grey and faint amid the wreath–<br/>
                    ing columns of mist, which smoked up<br/>
                    ward from the course of the broad <span class="placeName-RHINE">Rhine</span>.<br/>
                    There was the huge cathedral, dark with<br/>
                    the confused richness of its own fretwork,<br/>
                    and the remains of its unfinished, but<br/>
                    magnificent tower,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTCATHEDRALTOWERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                66
                </span>
              </a></span> showing ruinlike, be–<br/>
            <div id="MSIX37r" class="pb"></div>
                    side it,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                cccc
                </span>
                
              </a></span> There were the red sails and min<br/>
                    gled masts of the innumerable shipping, with<br/>
                    out one sail swelling, or a flag bending, with<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                dddd
                </span>
                
              </a></span><br/>
                    the morning breeze,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                eeee
                </span>
                
              </a></span> There was that peace–<br/>
                    ful and lovely lassitude over everything, that<br/>
                    sleep of the earth, and the air, and the sky, that<br/>
                    charms the mind into a correspondent fas–<br/>
                    cination of stillness, the very thoughts seem<br/>
                    sleeping.—</div>
         
         <div class="p">We went on, we past <span class="placeName-">Bonn</span>, and <span class="placeName-GODESBERG">Godes–<br/>
                    berg</span>, and <span class="placeName-">Drachenfels</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTWEWENTONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                67
                </span>
              </a></span> and sunset was<br/>
                    sorrowing over hill and valley, when<br/>
                    the gloomy and venerable towers of<br/>
            <span class="placeName-ANDERNACH">Andernacht</span> beetled over us.</div>
         
         <div class="p">I love to look upon the crags that <span class="persName-JULIUSCAESAR">Cæsar</span><div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ffff
                </span>
                
              </a></span><br/>
                    has scaled, and upon the towers that his<br/>
                    legions have founded. These are now<br/>
                    as they were then, looking up to the bro–<br/>
                    ad blue heaven, these are in ruins.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTTHESEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                68
                </span>
              </a></span> Yet,<br/>
                    they are mighty in their ruin, and majes–<br/>
                    tic in their decay, but their Lords are depar<br/>
            <div id="MSIX37v" class="pb"></div>
                    ted and forgotten, as the waves that once lashed their<br/>
                    foundations. Other snows have melted, and the<br/>
            <span class="placeName-RHINE">Rhine</span> yet rolls onward unbroken, but those wav–<br/>
                    es are lost in the ocean for ever<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTBLANK2" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                gggg
                </span>
                
              </a></span></div>
         <span class="space" style="padding-left:6.8em"> </span>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Ehrenbreitstein” Drawing 1 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JREHRENBREITSTEINFORTRESSMSIX">Vignette, Ehrenbreitstein Hill and Fortress at Confluence of Rhine and Moselle</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of the <span class="geogName-RHINE">Rhine</span> with the fortress high on the hill, and the town below” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:355; a facsimile of the page of MS IX containing this drawing and the opening portion of verse is bound opposite p. 355).</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> based his vignette on an engraving, <span class="title-artwork-JMWTEHRENBREITSTEIN1833"><i>Ehrenbreitstein</i></span> by <span class="persName-RW">Robert Wallis</span> after <span class="persName-JMWT">J. M. W. Turner</span>, 
                        published in the <a href="/notes/bibliography#KEEPSAKE1833" target="_self"><span class="title-annual-KEEPSAKE"><i>Keepsake for MDCCCXXXIII</i></span></a> (p. 84 opp.) 
                        (see <a href="/notes/bibliography#WGRENGRAVEDTURNER" target="_self"><span class="persName-WGR">Rawlinson</span>, <span class="title-catalogue-WGRENGRAVEDTURNER"><i>Engraved Work of J. M. W. Turner</i></span></a>, 1:225 [no. 328]; and 
                        <a href="/notes/bibliography#HEWISONETALRUSKINTURNERPRB" target="_self"><span class="persName-RHEWISON">Hewison</span>, <span class="persName-IWARRELL">Warrell</span>, and <span class="persName-SWILDMAN">Wildman</span>, <i>Ruskin, Turner, and the Pre‐Raphaelites</i></a>, 45). 
                        <span class="persName-JMWT">Turner</span>ʼs engraving is not a vignette, but a full‐page, broadside rectangle. In order to reframe the image as a vignette, 
                        <span class="persName-JR">Ruskin</span> may have looked for models to <span class="persName-JMWT">Turner</span>ʼs own vignettes in the 1830 edition of 
                        <span class="persName-SR">Rogers</span>ʼs <span class="title-poem-ROGERSITALY1830"><i>Italy</i></span> (the vignette heading the poem 
                        <span class="title-poem-ROGERSCOMO">“Como”</span> most resembles the subject). Another possible model is a vignette engraving after <span class="persName-DRP">David Roberts</span>, 
                        <span class="title-artwork-ROBERTSDRACHENFELS"><i><span class="geogName-DRACHENFELS">Drachenfels</span></i></span>, published in <a href="/notes/bibliography#BULWERLYTTONPILGRIMS" target="_self"><span class="title-book-BULWERLYTTONPILGRIMS"><i>The Pilgrims of the Rhine</i></span></a> (<span class="date-1834">1834</span>) 
                        by <span class="persName-EBL">Edward Bulwer‐Lytton</span> (p. 100). <span class="persName-DRP">Roberts</span>ʼs <span class="geogName-RHINE">Rhine</span> view 
                        is suggestive of <span class="persName-JMWT">Turner</span>ʼs <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span> scene, but contained in an oval vignette. 
                        <span class="persName-JJR">John James Ruskin</span> acquired <span class="title-book-BULWERLYTTONPILGRIMS"><i>The Pilgrims of the Rhine</i></span> in <span class="date-1834-06">June 1834</span> 
                        (<a href="/notes/bibliography#RFMS28" target="_self"><span class="persName-JJR">John James Ruskin</span>, Account Book [1827–45]</a>, 34v).
                    </div>
         
         <div class="p">For another <span class="persName-JMWT">Turner</span> engraving from this volume of the <span class="title-annual-KEEPSAKE"><i>Keepsake</i></span> 
                        that <span class="persName-JR">Ruskin</span> proposed to adapt as a vignette for the “Account”, but probably never executed, see 
                        <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#FALLOFTHERHINEILLUSGLOSS");?>" target="_self">“Fall of the Rhine” in <span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the “Account”</span></a>.</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Ehrenbreitstein” [section title]</span></div><div id="MSIX35R" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:2.8em"> </span><span class="title-composite-JREHRENBREITSTEINCOMP"><span class="smallcaps">EHRENBREITSTEIN</span></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Ehrenbreitstein” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX38r" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l">Oh warmly down the sunbeams fell,</span><br/>
            <span class="l">Along the broad and fierce <span class="geogName-MOSELLE">Moselle</span>,</span><br/>
            <span class="l">And on the distant mountain ridge,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L260" id="L260">260</a></div></span><br/>
            <span class="l">And on the city, and the bridge,</span><br/>
            <span class="l">So beautiful that stood</span><br/>
            <span class="l">Tall tower, and spire, or gloomy port</span><br/>
            <span class="l">Were made and shattered in the sport,</span><br/>
            <span class="l">Of that impetuous flood,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L265" id="L265">265</a></div></span><br/>
            <span class="l">That on the one side, washed the wall,</span><br/>
            <div id="MSIX38v" class="pb"></div>
            <span class="l">Of Gothic mansion fair and tall,</span><br/>
            <span class="l">And on the other side was seen,</span><br/>
            <span class="l">Checked by broad meadows rich and green,</span><br/> 
            <span class="l">And scattering spray that sparkling flew,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L270" id="L270">270</a></div></span><br/>
            <span class="l">And fed the grass with constant dew,</span><br/>
            <span class="l">With broader stream, and mightier wrath</span><br/>
            <span class="l">The <span class="geogName-RHINE">Rhine</span> had chosen bolder path.</span><br/>
            <span class="l">All yielding to his forceful will,</span><br/>
            <span class="l">Through <span class="name--BASALT">basalt</span> gorge, and rock ribbed hill,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L275" id="L275">275</a></div></span><br/>
            <span class="l">Still flashed his deep right on,</span><br/>
            <span class="l">It checked not at the battled pride,</span><br/> 
            <span class="l">Where <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span> walled his side,</span><br/>
            <span class="l">Stretching across with giant stride,</span><br/>
            <span class="l">The mighty waves the rock deride,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L280" id="L280">280</a></div></span><br/>
            <span class="l">And on the crag like armies ride,</span><br/>
            <span class="l">Flinging the white foam far and wide,</span><br/>
            <span class="l">Upon the rough grey stone,</span><br/>
            <span class="l">Beneath the sweep of yon dark fell,</span><br/>
            <span class="l">Join the two brothers, the <span class="geogName-MOSELLE">Moselle</span>,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L285" id="L285">285</a></div></span><br/>
            <span class="l">Greeting the <span class="geogName-RHINE">Rhine</span> in friendly guise,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINTWOBROTHERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                69
                </span>
              </a></span></span><br/>
            <span class="l">To join his headlong current flies,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINBROWGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                70
                </span>
              </a></span></span><br/>
            <div id="MSIX39r" class="pb"></div>
            <span class="l">Together down the rivers go,</span><br/>
            <span class="l">Resistless oer their rocky foe,</span><br/>
            <span class="l">As lovers joining hand in hand,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L290" id="L290">290</a></div></span><br/>
            <span class="l">Toward the west, beside their strand,</span><br/>
            <span class="l">The rivers pass full playfully,</span><br/>
            <span class="l">Like allied armies mingled band,</span><br/>
            <span class="l">Toward the east, white whirls of sand,</span><br/>
            <span class="l">The river tosses by.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINPLAYFULLYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                71
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L295" id="L295">295</a></div></span><br/>
            <span class="l">The morning came, and rosy light,</span><br/>
            <span class="l">Blushed oer the bastions, and the height,</span><br/> 
            <span class="l">Where traitor never stood,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINBASTIONSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                72
                </span>
              </a></span></span><br/>
            <span class="l">And far beneath, in misty night,</span><br/>
            <span class="l">The waters wheeled their sullen flight
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L300" id="L300">300</a></div></span><br/> 
            <span class="l">Till oer them far for many a road,</span><br/>
            <span class="l">The red sun scattered tinge of blood,</span><br/>
            <span class="l">Till broadening into brighter day,</span><br/>
            <span class="l">On the rich plain the lustre lay,</span><br/>
            <span class="l">And distant spire and village white,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L305" id="L305">305</a></div></span><br/> 
            <span class="l">Confessed the kiss of dawn,</span><br/>
            <span class="l">Amid the forests shining bright,</span><br/>
            <span class="l">Still multiplying on the sight.</span><br/> 
            <div id="MSIX39v" class="pb"></div>
            <span class="l">As sunnier grew the morn.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_poem_glosses_textual#EHRENBREITSTEINPAUSEPERIODGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                hhhh
                </span>
                
              </a></span></span><br/>
            <span class="l">We climbed the crag, we scaled the ridge,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L310" id="L310">310</a></div></span><br/>
            <span class="l">On <span class="placeName-COBLENTZ">Coblentz</span> looked adown</span><br/>
            <span class="l">The tall red roofs, the long white bridge</span><br/>
            <span class="l">And on the eyelike frown,</span><br/>
            <span class="l">Of the portals of her palaces,</span><br/>
            <span class="l">And on her peoples busy press
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L315" id="L315">315</a></div></span><br/>
            <span class="l">There never was a fairer town</span><br/>
            <span class="l">Between two rivers as it lay,</span><br/>
            <span class="l">Whence morning mist was curling grey</span><br/>
            <span class="l">On the plains edge, beside the hill,</span><br/>
            <span class="l">Oh, it was lying calm and still,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L320" id="L320">320</a></div></span><br/>
            <span class="l">In mornings chastened glow</span><br/>
            <span class="l">The multitudes were thronging by,</span><br/>
            <span class="l">But we were dizzily on high,</span><br/>
            <span class="l">And we might not one murmur hear,</span><br/>
            <span class="l">Nor whisper, tingling on the ear,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L325" id="L325">325</a></div></span><br/>
            <span class="l">From the far depth below.</span><br/>
            <span class="l">The bridge of boats, the bridge of boats</span><br/>
            <span class="l">Across the hot tide how it floats</span><br/>
            <span class="l">In one dark bending line</span><br/>
            <div id="MSIX40r" class="pb"></div>
            <span class="l">For other bridge were swept away,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L330" id="L330">330</a></div></span><br/>
            <span class="l">Such shackle loveth not the play</span><br/>
            <span class="l">Of the impetuous <span class="geogName-RHINE">Rhine</span>.</span><br/>
            <span class="l">The feeble bridge that bends below,</span><br/>
            <span class="l">The tread of one weak man,</span><br/>
            <span class="l">It yet can stem the forceful flow
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L335" id="L335">335</a></div></span><br/>
            <span class="l">Which nought unyielding can.</span><br/>
            <span class="l">The bar of shingle bends the sea.</span><br/>
            <span class="l">The <span class="name--GRANITE">granite</span> cliffs are worn away</span><br/>
            <span class="l">The bending reed can bear the blast</span><br/>
            <span class="l">When English oak were downward cast.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L340" id="L340">340</a></div></span><br/>
            <span class="l">The bridge of boats the <span class="geogName-RHINE">Rhine</span> can chain,</span><br/>
            <span class="l">Where strength of stone were all in vain.</span><br/>
            <span class="l">Oh fast and faster on the stream,</span><br/>
            <span class="l">An island driveth down,</span><br/>
            <span class="l">The <span class="placeName-BLACKFOREST">Schwartzwald</span> pine hath shed its green,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L345" id="L345">345</a></div></span><br/>
            <span class="l">But not at Autumns frown.</span><br/>
            <span class="l">Twas sharper winter stript them there.</span><br/>
            <span class="l">The long straight trunks are bald and bare.</span><br/>
            <span class="l">The peasant on some <span class="geogName-ALPS">Alpine</span> brow,</span><br/>
            <span class="l">Hath cut the root and lopʼt the bough,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L350" id="L350">350</a></div></span><br/>
            <div id="MSIX40v" class="pb"></div>
            <span class="l">The eagle heard the echoing fall,</span><br/>
            <span class="l">And soared away to his high eyrie,</span><br/>
            <span class="l">The chamois gave his warning call,</span><br/>
            <span class="l">And higher on the mountain tall,</span><br/>
            <span class="l">Pursued his way unweary.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L355" id="L355">355</a></div></span><br/>
            <span class="l">They come, they come, the long pine floats</span><br/>
            <span class="l">Unchain the bridge, throw loose the boats</span><br/>
            <span class="l">Lest by the raft so rudely driven,</span><br/>
            <span class="l">The iron bolts be burst and riven.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINRAFTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                73
                </span>
              </a></span></span><br/>
            <span class="l">They come, they come, careering fast
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L360" id="L360">360</a></div></span><br/>
            <span class="l">The bridge is gained, the bridge is past</span><br/>
            <span class="l">Before the flashing foam they flee,</span><br/>
            <span class="l">Toward the ocean rapidly,</span><br/>
            <span class="l">There firmly bound by builders care,</span><br/>
            <span class="l">The rage of wave and wind to dare,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L365" id="L365">365</a></div></span><br/>
            <span class="l">Or burst of battle‐shock to bear.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_poem_glosses_textual#EHRENBREITSTEINPAUSEPERIODGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                iiii
                </span>
                
              </a></span></span><br/>
            <span class="l">Upon the boundless sea.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Ehrenbreitstein” Drawing 2 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JREHRENBREITSTEINRIVERMSIX">Vignette, Pines on Bank of the Rhine</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a river, swollen and rushing between the hills” 
                        (<a href="/" target="_self">Ruskin, <i>Works</i></a>, 2:358). 
                        A tiny figure clings to the tree growing from the foreground rocks. The sun is rising or setting over the turbulent water. 
                        <span class="persName-JR">Ruskin</span> probably meant the vignette to illustrate the “impetuous <span class="geogName-RHINE">Rhine</span>” 
                        and “<span class="geogName-BLACKFOREST"></span>Schwartzwald pine” described toward the end of the poem preceding this vignette.
                    </div>
         
         <div class="p">This drawing is listed as “Pines” in the <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCEHRENBREITSTEIN");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the “Account”</span> (“Coblentz”)</a>.</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Ehrenbreitstein” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX41r" class="pb"></div>
         
         <div class="p">It is said that French will carry<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#EHRENBREITSTEINBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                jjjj
                </span>
                
              </a></span>
            <br/>you over all <span class="geogName-EUROPE">Europe</span>, over all civilized 
                    <br/><span class="geogName-EUROPE">Europe</span> at least, and that may be, but 
                    <br/>it will not carry you over <span class="placeName-GERMANY">Germany</span>.
                    <div id="MSIX41v" class="pb"></div>
            <br/>You might manage with the Grand Turk, 
                    <br/>but you will not manage with the Ger‐
                    <br/><span class="g-word_division">=</span>mans.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#WORDDIVISION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                kkkk
                </span>
                
              </a></span> Wishing to see the interior of 
                    <br/><span class="placeName-EHRENBREITSTEINFORT">Ehrenbreitstein</span>, we got a young German 
                    <br/>guide, and coming to a place where two 
                    <br/>roads met, considered him to be going
                    <br/>the wrong way. Here was a poser, how 
                    <br/>could we stop him. “Nein, nein,—” we 
                    <br/>called after him. “Ya,” quoth he; “Nein,
                    <br/>So he went the way we chose.</div> 
         
         
         <div class="p">After a very hard pull up an abom‐
                    <br/><span class="g-word_division">=</span>inably<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#WORDDIVISION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                llll
                </span>
                
              </a></span> cramp<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINCRAMPGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                74
                </span>
              </a></span> hill, we beheld the top of 
                    <br/>the flagstaff. “Here we are, all right.” No, 
                    <br/>There was the fortress, certainly, but between 
                    <br/>us and it, a ravine nearly a hundred
                    <br/>feet deep, walled up the sides so as to form 
                    <br/>a very unhandsome ditch, and two or three 
                    <br/>dozen, impudent, enormous, openmouthed
                    <br/>guns grinning at us from the battlement<span class="g-terminal_comma">,</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                mmmm
                </span>
                
              </a></span> 
            <br/>Well, there was nothing for it, so we went 
                    <br/>back, and took the other path.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINPATHGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                75
                </span>
              </a></span></div>
         <div id="MSIX42r" class="pb"></div>
         
         <div class="p">This time all went right, and we got into 
                    <br/>the fortress, first however prudently step‐
         <br/><span class="g-word_division">=</span>ping<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#WORDDIVISION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                nnnn
                </span>
                
              </a></span> up to a sentinel, to ask permission; 
                    <br/>and he brought an officer upon us. “Do 
                    <br/>you speak English, sir.” (A stare.) “Francais,” 
                    <br/>(a vibratory motion of the head, and a, 
                    <br/>“Nein”) “Deutsch.” “Ya.” and there we 
                    <br/>stuck. Well, we pulled out our pass‐
         <br/><span class="g-word_division">=</span>port,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#WORDDIVISION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                oooo
                </span>
                
              </a></span> but it was in French, and the offi‐
         <br/><span class="g-word_division">=</span>cer<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#WORDDIVISION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                pppp
                </span>
                
              </a></span> could not read it. So he looked up, 
                    <br/>and down, and at us, and we looked up,
                    <br/>and down, and at him. What was to be 
                    <br/>done. We bowed and he bowed, and we 
                    <br/>looked over the battlements, and trotted 
                    <br/>down again, having a very high opinion 
                    <br/>of the height of German hills, the strength 
                    <br/>of German walls, the size of German can‐
         <br/><span class="g-word_division">=</span>non,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#WORDDIVISION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                qqqq
                </span>
                
              </a></span> and the stupidity of all German 
                    <br/>brains.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#GERMANBRAINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                76
                </span>
              </a></span></div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>[St Goar] [section title]</span></div><div id="MSIX35R" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="title-composite-JRSTGOARCOMP">[<span class="smallcaps">ST GOAR</span>]</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                rrrr
                </span>
                
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>["St. Goar"] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <span class="space" style="padding-left:4.4em"> </span>
         
         <div class="lg-stanza">
            <span class="l">We<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ssss
                </span>
                
              </a></span> past a rock, whose bare front ever,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARWGCGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                tttt
                </span>
                
              </a></span></span><br/>
            <span class="l">Had borne the brunt of wind, & weather,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARLORELEIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                77
                </span>
              </a></span></span><br/>
            <span class="l">And downwards by the <span class="placeName-RHINE">Rhine</span> we bore,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L370" id="L370">370</a></div></span><br/>
            <span class="l">Upon the village of <span class="placeName-STGOAR">St Goar</span>,</span><br/>
            <span class="l">That mid the hills embosomed lay,</span><br/>
            <span class="l">Where the <span class="placeName-RHINE">Rhine</span> checked his onward way,</span><br/>
            <span class="l">And lay the mighty crags between,</span><br/>
            <span class="l">As if, enamoured of the scene,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L375" id="L375">375</a></div></span><br/>
            <span class="l">He loved not on his way to wind,</span><br/>
            <span class="l">And leave a scene so fair behind</span><br/>
            <div id="MSIX43r" class="pb"></div>
            <span class="l">For grim the chasm, through whose cleft,</span><br/>
            <span class="l">The waters had a passage reft,</span><br/>
            <span class="l">And gaunt the gorge that yawned before
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L380" id="L380">380</a></div></span><br/>
            <span class="l">Through which, emerging, they must roar,</span><br/>
            <span class="l">No marvel they should love to rest,</span><br/>
            <span class="l">And peaceful spread their placid breast,</span><br/>
            <span class="l">Before, in fury driving dread,</span><br/>
            <span class="l">Tormented on their rocky bed,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L385" id="L385">385</a></div></span><br/>
            <span class="l">Or flinging far their scattering spray,</span><br/>
            <span class="l">Oʼer the peaked rocks that barred their way,</span><br/>
            <span class="l">Wave upon wave at random tossed,</span><br/>
            <span class="l">Or in the giddy whirlpool lost,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARWHIRLPOOLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                78
                </span>
              </a></span></span><br/>
            <span class="l">And now are undisturbed sleeping,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L390" id="L390">390</a></div></span><br/>
            <span class="l">No more on rocks those billows beating,</span><br/>
            <span class="l">But lightly laughing laps the tide,</span><br/>
            <span class="l">Where stoop the vineyards to his side.</span><br/>
            </div>
         <span class="space" style="padding-left:2.0em"> </span>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>"St. Goar" [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <span class="space" style="padding-left:3.6em"> </span>
         
         <div class="p"><span class="placeName-STGOAR">St. Goar</span> is the least and sweetest place<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_prose_glosses_textual#STGOARPROSEBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                uuuu
                </span>
                
              </a></span>
            <br/>on all the <span class="placeName-RHINE">Rhine</span>. There is <span class="placeName-GODESBERG">Godesberg</span>, with
                    <br/>its hilltop crested with <span class="placeName-GODESBURG">ruins</span>, there is 
                    <br/><span class="placeName-ANDERNACH">Andernacht</span> with its venerable remains 
                    <br/>of antiquity, there is <span class="placeName-EHRENBREITSTEIN">Ehrenbreitstein,</span> upon
                    <br/>whose cliff never traitor stood, looking out,
                    <br/>far away over its rich sea of champaign, yet
                    <br/>there is nothing like <span class="placeName-STGOAR">St Goar</span>. It has a 
                    <br/>lone hill beauty, the little scene around
                    <br/>it, is exceeding small, but it has a mod‐
                    <br/>est secluded loveliness. You look on <span class="placeName-ANDERNACH">An‐
                    <br/>dernacht</span> with veneration, on <span class="placeName-EHRENBREITSTEIN">Ehrenbreit‐
                <div id="MSIX44r" class="pb"></div>
               <br/>stein</span> with awe, but on <span class="placeName-STGOAR">St. Goar</span> with
                    <br/>love.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARLOVEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                79
                </span>
              </a></span></div>
         
         <div class="p">There is a voice in all nature; List to
                    <br/>the rave of the mad sea; Speaks it not
                    <br/>eloquently, does it not tell of its green,
                    <br/>weedy caverns, and its coral towers, and
                    <br/>and<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_prose_glosses_textual#STGOARAND" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                vvvv
                </span>
                
              </a></span> the high hills and shelly vallies, far,
                    <br/>far beneath its cold blue.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARSKULLSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                80
                </span>
              </a></span> List to the
                    <br/>song of the summer breeze, does it not
                    <br/>tell of the blue heavens, and the white
                    <br/>clouds, and other climes, and other sea‐
                    <br/>sons, and spicy gales and myrtle bow‐
                    <br/>ers, and sweet things far away. How
                    <br/>sweetly the <span class="geogName-RHINE">Rhine</span> sings at <span class="placeName-STGOAR">St Goar</span>,
                    <br/>and it tells of the arched grottoes of the
                    <br/>glacier, and the crags of the far <span class="geogName-ALPS">Alps</span>, &
                    <br/>how it joys to dash against tall rock
                    <br/>once more.
                </div>
         <span class="space" style="padding-left:1.2em"> </span>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Heidelberg” Drawing 1 of 1</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRHEIDELBERGDRAWINGMSIX">Vignette, Mountain Prospect Drawing [<span class="geogName-HEILIGENBERG">Heiligenberg</span>?]</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a town in a large plain, with distant mountains”, 
                        although they misidentify the drawingʼs position in <span class="title-manuscript-MSIX">MS IX</span>—at least, as presently found—ascribing 
                        it to a position between the poem and prose of the <span class="title-composite-JRSTGOARCOMP">“St. Goar”</span> section. 
                        If accurate, that description would have placed the drawing on the verso page (43v) that precedes its current placement (44v) 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:360).</div>
         
         <div class="p">In the <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCHEIDELBERGILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTSILLUS">List of Proposed Additional Contents for the “Account”—Illustrations</span></a>, 
                        which begins with an entry for the section <span class="title-composite-JRHEIDELBERGCOMP">“Heidelberg”</span>, 
                        the plan for illustrations starts with the direction, “Begin with mountain”, followed by some subjects from medieval chivalry and the supernatural, 
                        and ending with a scene on the <span class="geogName-RHINE">Middle Rhine</span> copied from <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-book-PROUTSKETCHES"><i>Facsimiles of Sketches Made in <span class="placeName-FLANDERS">Flanders</span> and <span class="placeName-GERMANY">Germany</span></i></span></a> by 
                        <a href="/notes/prout_samuel_note" target="_self"><span class="persName-SP">Samuel Prout</span> (<span class="date-1783-1852">1783–1852</span>)</a>. 
                        The word “mountain” is scored through, which may have been <span class="persName-JR">Ruskin</span>ʼs indication to himself that he had completed the drawing, 
                        as that mark appears to signify in other instances in the <span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTSILLUS">List of Proposed Illustrations</span>.</div>
         
         
         <div class="p">A mystery remains, however; for while this picture does present a mountain prospect, the scene is oddly lacking in <span class="placeName-HEIDELBERG">Heidelberg</span>ʼs most recognizable landmarks. There is no 
                        <span class="placeName-heidelberg_drawing_msixHEIDELBERGCASTLE">Heidelberg Castle</span> nestled against the mountainside, 
                        no arched bridge across the river, no gothic cathedral tower (rather, a round dome is prominent). The mountain might be intended for 
                        the <span class="geogName-HEILIGENBERG">Heiligenberg</span>, which rises above <span class="placeName-HEIDELBERG">Heidelberg</span>, 
                        but that mountain is rounded, unlike the sharp peaks shown in this picture. Also, the plain intervening between the high foreground of the picture 
                        and the distant town seems exaggerated in its expansiveness, unless the scene depicts where the <span class="geogName-NECKAR">Neckar River</span> 
                        emerges from the <span class="geogName-ODENWALD">Odenwald</span> mountain range. There the river flows into a level plain toward 
                        <span class="placeName-MANNHEIM">Mannheim</span>, where it empties into the <span class="geogName-RHINE">Rhine</span>. 
                        In that case, the drawing would complement the lines of the poem describing how “towards the western day, / 
                        Manheims towers softened lay”—but then the mountains shown behind distant <span class="placeName-MANNHEIM">Mannheim</span> would be wrong. 
                        Perhaps <span class="persName-JR">Ruskin</span>ʼs deletion of the word “mountain”, then, acknowledges that he based his vignette on a mistaken idea; 
                        or perhaps more likely, this drawing is misplaced—a mistake that might have occurred when the manuscript was altered by injurious curation (see 
                        <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#CURATORIALTREATMENT" target="_self">Information Lost about the <span class="title-composite-JRACCOUNTTOUR">“Account”</span> owing to Curatorial Treatment of Manuscripts</a>; 
                        and <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#COMPOSITEILLUSTRATEDTRAVELOGUEILLUS" target="_self">Missing and Unidentified Drawings for the Composite‐Genre Illustrated Travelogue (MS IX) and Related <span class="date-1833">1833</span> Tour Sketches</a>.
                        .
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>[Heidelberg] [section title]</span></div><div id="MSIX35R" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="title-composite-JRHEIDELBERGCOMP"><span class="smallcaps">[HEIDELBERG]</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#HEIDELBERGTITLEBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                wwww
                </span>
                
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Heidelberg” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">Now from the smiling afternoon,</span><br/>
            <span class="l">The rain had past away.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L395" id="L395">395</a></div></span><br/>
            <span class="l">And glimmered forth the pallid moon,</span><br/>
            <span class="l">Amid the heavens grey,</span><br/>
            <span class="l">Brake, and bush, and mead and flower,</span><br/>
            <span class="l">Were glistening with the sunny shower,</span><br/>
            <span class="l">Where from the tangled viny wreath.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                xxxx
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L400" id="L400">400</a></div></span><br/>
            <span class="l">The clustered grape looked out beneath</span><br/>
            <span class="l">Climbing up the southern side,</span><br/>
            <div id="MSIX45r" class="pb"></div>
            <span class="l">Of the round hills bosom wide,</span><br/>
            <span class="l">Branches of the chain that bound</span><br/>
            <span class="l">All the south horizon round,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L405" id="L405">405</a></div></span><br/>
            <span class="l">Far towards the western day,</span><br/>
            <span class="l"><span class="placeName-MANNHEIM">Manheim</span>s towers softened lay,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#MANHEIMSTOWERS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                81
                </span>
              </a></span></span><br/>
            <span class="l">From behind a thunder‐cloud,</span><br/>
            <span class="l">Dark as envy, shot the sun.</span><br/>
            <span class="l">On those towers high and proud,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L410" id="L410">410</a></div></span><br/>
            <span class="l">Hazily his rays came down,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#NOWFROMTHESMILING" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                yyyy
                </span>
                
              </a></span></span><br/>
            <span class="l">Smiling with those bright rays kiss.</span><br/>
            <span class="l">Shooting round effulgence moony,</span><br/>
            <span class="l">Like a lovely Oasis.</span><br/>
            <span class="l">ʼMid a desert dark and gloomy.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#FROMBEHINDATHUNDERCLOUD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                zzzz
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L415" id="L415">415</a></div></span><br/>
            <span class="l">But a moment— darkly down,</span><br/>
            <span class="l">Came the thunder heavens frown,</span><br/>
            <span class="l">ʼMong the trees a fitful shaking,</span><br/>
            <span class="l">Told the hoarse night wind was waking,</span><br/>
            <span class="l">Grey upon his mountain throne,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L420" id="L420">420</a></div></span><br/>
            <span class="l"><span class="placeName-HEIDELBERG">Heidelberg</span> his ruins lone,</span><br/>
            <span class="l">Reared colossally,</span><br/>
            <span class="l">All begirt with mighty trees.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                aaaaa
                </span>
                
              </a></span></span><br/>
            <div id="MSIX45v" class="pb"></div>
            <span class="l">Whistling with the evens breeze,</span><br/>
            <span class="l">Flapping faintly by.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#HEIDELBERGHISRUINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                82
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L425" id="L425">425</a></div></span><br/>
            <span class="l">It was morning, from the height.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                bbbbb
                </span>
                
              </a></span></span><br/>
            <span class="l">Cumbered with its ruins hoar,</span><br/>
            <span class="l">All that lovely valley bright,</span><br/>
            <span class="l">We were looking oer.</span><br/>
            <span class="l">With its silver river bending,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L430" id="L430">430</a></div></span><br/>
            <span class="l">Vineyards to its banks descending,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#LOVELYVALLEY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                83
                </span>
              </a></span></span><br/>
            <span class="l">Many a distant mountain chain</span><br/>
            <span class="l">Girded round the mighty plain.</span><br/>
            <span class="l">Here the sky was clear and bright,</span><br/>
            <span class="l">But upon their distant height
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L435" id="L435">435</a></div></span><br/>
            <span class="l">Like a monster oer his prey,</span><br/>
            <span class="l">Rain and tempest scowling lay.</span><br/>
            <span class="l">Like a mighty ocean wave,</span><br/>
            <span class="l">All along thʼ horizon sweeping,</span><br/>
            <span class="l">Flinging far its cloudy spray
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L440" id="L440">440</a></div></span><br/>
            <span class="l">Oer the peaceful heaven beating.</span><br/>
            <span class="l">Then around the reddening sun,</span><br/>
            <span class="l">Gathered, throwing darkness dun,</span><br/>
            <span class="l">On the ruind ghostly wall.</span><br/>
            <div id="MSIX46r" class="pb"></div>
            <span class="l">Then between the pinetrees tall,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L445" id="L445">445</a></div></span><br/>
            <span class="l">Came quick sound of raindrop fall.</span><br/>
            <span class="l">Fast increased, the leafy rattle,</span><br/>
            <span class="l">Spoke the coming tempest battle,</span><br/>
            <span class="l">Enter then the chambers cold,</span><br/>
            <span class="l">Cold and lifeless, bald and bare.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L450" id="L450">450</a></div></span><br/>
            <span class="l">Though with banners decked of old,</span><br/>
            <span class="l">Ivy tendrils flickering flare,</span><br/>
            <span class="l">Are the only banners there</span><br/>
            <span class="l">You would start, to hear your tread</span><br/>
            <span class="l">Given back by echoes dead
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L455" id="L455">455</a></div></span><br/>
            <span class="l">You would look around to see,</span><br/>
            <span class="l">If a sprite were watching thee.</span><br/>
            <span class="l">Yet a vision would come oer thee,</span><br/>
            <span class="l">Of the scenes had past before thee,</span><br/>
            <span class="l">Of the time when many a guest,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L460" id="L460">460</a></div></span><br/>
            <span class="l">Blessed the baron for his feast,</span><br/>
            <span class="l">When the peasant homeward stealing</span><br/>
            <span class="l">Dusky night the hills concealing,</span><br/>
            <span class="l">Heard the swell of wassail wild</span><br/>
            <span class="l">Cadence from the castle coming.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ccccc
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L465" id="L465">465</a></div></span><br/>
            <div id="MSIX46v" class="pb"></div>
            <span class="l">Mingling with the night breeze humming,</span><br/>
            <span class="l">And (until the morning mild</span><br/>
            <span class="l">Lightened upon wall and tower</span><br/>
            <span class="l">Beacon fires from hour to hour</span><br/>
            <span class="l">Streaming from the windows tall
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L470" id="L470">470</a></div></span><br/>
            <span class="l">Of the barons ancient hall,</span><br/>
            <span class="l">Where the shout around was ringing</span><br/>
            <span class="l">And the troubadour was singing</span><br/>
            <span class="l">Ancient air, and ancient rhyme,</span><br/>
            <span class="l">Legend of the ancient time
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L475" id="L475">475</a></div></span><br/>
            <span class="l">Of some knights blood nobly spilt,</span><br/>
            <span class="l">In the melee, or the tilt,</span><br/>
            <span class="space" style="padding-left:3.6em"> </span>
            <div id="MSIX47r" class="pb"></div>
            <span class="l">Of the deeds of some brave band</span><br/>
            <span class="l">Oath bound in the holy land</span><br/>
            <span class="l">Such as iron <span class="persName-KR1">Richard</span> led,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L480" id="L480">480</a></div></span><br/>
            <span class="l">Steeled without and steeled within</span><br/>
            <span class="l">True in hand and heart and head</span><br/>
            <span class="l">Worthy foes of <span class="persName-SALADIN">Saladin</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#RICHARDSALADIN" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                84
                </span>
              </a></span></span><br/>
            <span class="l">Or, if pleased a darker theme</span><br/>
            <span class="l">Of spectres huge at twilight seen
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L485" id="L485">485</a></div></span><br/>
            <span class="l">Above some Battle field</span><br/>
            <span class="l">Mimicking with motion dread</span><br/>
            <span class="space" style="padding-left:4.4em"> </span>
            <div id="MSIX47v" class="pb"></div>
            <span class="l">Past combat of those lying dead</span><br/>
            <span class="l">Beneath their cloudy pinions spread</span><br/>
            <span class="l">Crested helm and spear, and shield
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L490" id="L490">490</a></div></span><br/>
            <span class="l">In the red cloud blazoned.</span><br/>
            <span class="l">Thus with feast and revelry</span><br/>
            <span class="l">Oft the huge halls rang with glee,</span><br/>
            <span class="l">All reckless of the withering woe</span><br/>
            <span class="l">Reigned in their dungeons dank below
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L495" id="L495">495</a></div></span><br/>
            <span class="l">Where in the lone hours sullen flight</span><br/>
            <span class="l">The masked day mingled with the night</span><br/>
            <span class="l">Until the captives practised eye</span><br/>
            <span class="l">Could pierce the thick obscurity</span><br/>
            <span class="l">Could see his fetters glance, or tell
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L500" id="L500">500</a></div></span><br/>
            <span class="l">The stones which walled his narrow cell</span><br/>
            <span class="l">Till at the time the warder came</span><br/>
            <span class="l">His dusky lamps half smothered flame</span><br/>
            <span class="l">Flashed on him like that sun, whose ray</span><br/>
            <span class="l">And all the smile of lightsome day
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L505" id="L505">505</a></div></span><br/>
            <span class="l">He has almost forgotten.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Heidelberg” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <span class="space" style="padding-left:5.2em"> </span>
         
         <div class="p">Most beautiful are the paths which scale<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_prose_glosses_textual#HEIDELBERGPROSEBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ddddd
                </span>
                
              </a></span> 
            <br/>the face of the hill which is crowned by
                    <br/><span class="name--HEIDELBERGCASTLE">the castle of Heidelberg</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#BEAUTIFULPATHS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                85
                </span>
              </a></span> winding beneath 
                    <br/>the twisted branches of green woods, with 
                    <br/>here and there a grey crag lifting up its 
                    <br/>lichened head from the wilderness of brake<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#BRAKE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                86
                </span>
              </a></span> 
            <br/>and grass and flower, that concealed the 
                    <br/>mass of that ancient <span class="name--GRANITE">granite</span>, sometimes
                </div>  
         </div>
   </div><div id="" class="pb"></div>
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
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
“The Meuse” “The Meuse” [section title] “The Meuse” [poem] “The Meuse” Drawing 1 of 2 “The Meuse” [essay] “The Meuse” Drawing 2 of 2
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX25v-26r.jpg msix/MSIX25v-26r.jpg msix/MSIX26v-27r.jpg msix/MSIX26v-27r.jpg msix/MSIX26v-27r.jpg msix/MSIX27v-28r.jpg msix/MSIX28r-rotated.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Meuse” [section title]</span></div><div id="MSIX25v" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:4.8em"> </span><span class="title-composite-JRTHEMEUSECOMP"><span class="smallcaps">THE MEUSE</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_poem_glosses_textual#MEUSEBLANK" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
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
            <span class="l">In promise of a cloudless day</span><br/>
            <span class="l">Fresh flew the breeze, with whose light wing</span><br/>
            <span class="l">Aspen and oak were quivering</span><br/>
            <span class="l">From flowʼret dank it dashed the dew
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">The harebell bent its blossom blue,</span><br/>
            <span class="l">And from the <span class="geogName-MEUSE">Meuse</span> the mistwreaths<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#MISTWREATHSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> grey</span><br/>
            <span class="l">That morning breeze had swept away</span><br/>
            <span class="l">Showing such scenes as well might seem</span><br/>
            <span class="l">The fairy vision of a dream<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#FAIRYVISIONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">For changing still, and still as fair</span><br/>
            <span class="l">Rock, wave, and wood were mingled there</span><br/>
            <span class="l">Peak over peak, fantastic ever</span><br/>
            <div id="MSIX26r" class="pb"></div>
            <span class="l">The lofty crags deep chasms sever.</span><br/>
            <span class="l">And grey and gaunt their lichened head
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Rose sheerly from the rivers bed<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#PEAKOVERPEAKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l">Whose mantling wave in foamy sheet</span><br/>
            <span class="l">Their stern projecting bases beat,</span><br/>
            <span class="l">And lashed to fury in his pride</span><br/>
            <span class="l">In circling whirlpools swept the tide
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">As threatening, on some future day</span><br/>
            <span class="l">Those mighty rock<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_poem_glosses_textual#ROCKGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> to tear away</span><br/>
            <span class="l">What though their front should seem to be</span><br/>
            <span class="l">A barrier, to eternity<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#BARRIERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span></span><br/>
            <span class="l">And on its side the cliffs between 
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Were mazy forests ever seen</span><br/>
            <span class="l">That the tall cliffs steep flanks so grey</span><br/>
            <span class="l">Were clothed in mantle green and gay</span><br/>
            <span class="l">Long time along that dell so deep</span><br/>
            <span class="l">Beside the rivers bed we sweep
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">So steep the mighty crests inclined</span><br/>
            <span class="l">None other pathway you might find</span><br/>
            <span class="l">Till the tall cliffs gigantic grace</span><br/>
            <span class="l">To undulating hills gave place</span><br/>
            <div id="MSIX26v" class="pb"></div>
            <span class="l">And vineyards clothe the bending brow
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
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
                b
                </span>
                
              </a></span>
            <br/>but beautiful cathedral,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LONGBRIDGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> as it began to
                <br/>smile to the first glance of the joyous
                <br/>sun that was drinking up the delicate
            <div id="MSIX27r" class="pb"></div>
            <br/>mists which clung to the hills, and rested on
                <br/>the valley, in which the fair city reposed<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span>
            <br/>so peacefully — and then we dashed along
                <br/>the valley of the <span class="geogName-MEUSE">Meuse</span>. I know not, if it<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span>
            <br/>was because this was our first initiation in
                <br/>to<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#INTO" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span> the scenery of continental rivers, but this<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span>
            <br/>part of the <span class="placeName-MEUSE">Meuse</span> appeared to me infinitely
                <br/>preferable (not in point of sublimity or
                <br/>beauty,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#BEAUTY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span> but in that romantic and pi
                <br/>cturesque fairy beauty which is, in many
                <br/>cases, superior to either), to any thing which
                <br/>I ever afterwards saw on the shores of the
                <br/>far famed <span class="geogName-RHINE">Rhine.</span> There was, to me, a
                <br/>great sameness throughout the whole of<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                h
                </span>
                
              </a></span>
            <br/>the course of the latter river, and, for its<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                i
                </span>
                
              </a></span>
            <br/>fortresses, it is positively too much of a good
                <br/>thing, a tiresome repetition of ruins, and
                <br/>ruins too, which do not altogether agree<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                j
                </span>
                
              </a></span>
            <br/>with my idea of what ruins ought to be.
                <br/>But for the <span class="geogName-MEUSE">Meuse</span>, the infinite variety of scene–
                <br/>ry.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                k
                </span>
                
              </a></span> the impossibility of seeing every successive
            <div id="MSIX27v" class="pb"></div>
            <br/>change as you feel that it ought to be seen —, and,
                <br/>finally, the tantalizing rate at which you dash<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                l
                </span>
                
              </a></span>
            <br/>away from that which you could feast upon, and<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                m
                </span>
                
              </a></span>
            <br/>look upon, and dwell upon, for — ages I was going
                <br/>to say, months, I will say, are enough to enchant
                <br/>you with anything. If you wish to see rock scen‐
                <br/>ery in perfection, go to the <span class="geogName-MEUSE">Meuse</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#GOTOTHEMEUSEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span> for never were<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                n
                </span>
                
              </a></span>
            <br/>rocks more beautifully disposed, more richly and<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                o
                </span>
                
              </a></span>
            <br/>delicately wooded, or more finely contrasted with<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                p
                </span>
                
              </a></span>
            <br/>the amazing richness of the surrounding scenery.
                <br/>But alas, it was but a forenoon ride, and the eve
                <br/>saw us quit the magnificent <span class="geogName-MEUSE">Meuse</span> with sorrow<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                q
                </span>
                
              </a></span>
            <br/>for the smoky streets and coal wharfs of <span class="placeName-LIEGE">Liege</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#MEUSEBLANK2" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                r
                </span>
                
              </a></span>
            <br/>and the round, dumpy, shapeless hills of <span class="placeName-SPA">Spa</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LIEGESPAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
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
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
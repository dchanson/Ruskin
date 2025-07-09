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
“<placeName corresp="#COLOGNE">Cologne</placeName>&#8221; “Cologne” [section title] “Cologne” [poem]  “Cologne ” Drawing 1 of 1 “Cologne” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX30v-31r.jpg msix/MSIX30v-31r.jpg msix/MSIX31v-32r.jpg msix/MSIX31v-32r.jpg msix/MSIX31v-32r.jpg msix/MSIX34v-35r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Cologne” [section title]</span></div><div id="MSIX31r" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:6.4em"> </span><span class="title-composite-JRCOLOGNECOMP"><span class="smallcaps">COLOGNE</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#COLOGNEBLANK" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cologne” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <span class="space" style="padding-left:6.8em"> </span>
         
         <div class="lg-stanza">
            <span class="l">The noon was past, the sun was low</span><br/>
            <span class="l">Yet still we felt his arid glow</span><br/>
            <div id="MSIX31v" class="pb"></div>
            <span class="l">From the red sand reflected glare</span><br/>
            <span class="l">Deadened the breeze, and fired the air</span><br/>
            <span class="l">The open sky was misty grey,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">The clouds in mighty masses lay</span><br/>
            <span class="l">That heaped on the horizon high,</span><br/>
            <span class="l">Marked Alpine outline on the sky</span><br/>
            <span class="l">Long had we toiled to gain a brow,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#GAINABROWGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">On which we stood triumphant now<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_poem_glosses_textual#ERASEDLINESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            </div>
         <span class="space" style="padding-left:0.8em"> </span>
         
         <div class="lg-stanza">
            <span class="l">While the white mist was certain sign</span><br/>
            <span class="l">Where took his course the mighty <span class="geogName-RHINE">Rhine</span>,</span><br/>
            <span class="l">Hills in the distant haze were seen,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#SIEBENGEBIRGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">And wide expanse of plain between,</span><br/>
            <span class="l">Whose desert length without a tree,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Was stretched in vast monotony.</span><br/>
            <span class="l">We drove adown that hill amain</span><br/>
            <span class="l">We past along the shadeless plain</span><br/>
            <span class="l">Rested we now where uncontrolled</span><br/>
            <span class="l">The <span class="geogName-RHINE">Rhine</span> his bursting billows rolled,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">And ever, ever, fierce and free,</span><br/>
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
                4
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
                5
                </span>
              </a></span> to see
                    <br/><span class="persName-PPR">Rubens</span>ʼ last picture, the masterpiece of the mas
                    <br/>ter, the <span class="title-artwork-RUBENSCRUCIFIXIONSTPETER">crucifixion of <span class="persName-STPETER">St Peter</span></span>, bequeated by,
                    <br/>him at his death to his native city,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#RUBENSSTPETERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
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
                7
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
                b
                </span>
                
              </a></span>
            <br/>think, kneeling before a crucifix.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#STAMBROSIUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> There is one sin
                <div id="MSIX33r" class="pb"></div>
            <br/>gle ray of yellow light falling faintly upon the
                    <br/>grey hairs and holy features of the venerable saint<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
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
                d
                </span>
                
              </a></span> and a
                    <br/>reality so hallowed and so beautiful, that when
                    <br/>the curtain is again drawn over the picture, you
                    <br/>feel as if awaking from a dream of heaven<span class="g-terminal_comma">,</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
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
                f
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
                g
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
                h
                </span>
                
              </a></span> and you
                    <br/>will have some idea of the <span class="placeName-RHINE">Rhine</span>, as seen from
                    <br/>the bedroom windows of the <div 
          class="subst-del s-subst s-del" >g</div><div 
          class="s-subst s-add s-overwrite s-inline">G</div>rosser Rheinberg<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#GROSSERRHEINBERGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
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
                10
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
                i
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
                j
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
                k
                </span>
                
              </a></span> They showed us
                    <br/>in a little Gothic chapel, three skulls which,
                    <br/>they told us were those of the Magi. They
                    <br/>were set in framework of gold, and co‐
                    <br/>vered with jewels, but the pomp became<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                l
                </span>
                
              </a></span>
            <br/>not the dry bones, The soulless eye, and
                    <br/>fleshless cheek looked not the less horrible,
                    <br/>though a diamond beamed through the one
                    <br/>and a bar of gold bound the other.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#MAGIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span> Re‐
                    <br/>turned home, and the next morning de
                    <br/>parted from <span class="placeName-COLOGNE">Cologne</span> with regret, to trace<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                m
                </span>
                
              </a></span>
            <br/>the mighty <span class="placeName-RHINE">Rhine</span> to his source<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#RHETIANALPSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span> among the
                    <br/><span class="geogName-RHAETIANALPS">Rhetian Alps</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_glosses_contextual#COLOGNEBLANK2" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span></div>
         <span class="space" style="padding-left:2.4em"> </span>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
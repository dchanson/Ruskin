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
“<geogName corresp="#EHRENBREITSTEIN">Ehrenbreitstein</geogName>&#8221; “Ehrenbreitstein” Drawing 1 of 2 “Ehrenbreitstein” [section title] “Ehrenbreitstein” [poem] “Ehrenbreitstein” Drawing 2 of 2 “Ehrenbreitstein” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX37v-38r.jpg msix/MSIX37v-38r.jpg msix/MSIX37v-38r.jpg msix/MSIX40v-41r.jpg msix/MSIX40v-41r.jpg msix/MSIX40v-41r.jpg msix/MSIX41v-42r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
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
            <span class="l">And on the distant mountain ridge,</span><br/>
            <span class="l">And on the city, and the bridge,</span><br/>
            <span class="l">So beautiful that stood
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Tall tower, and spire, or gloomy port</span><br/>
            <span class="l">Were made and shattered in the sport,</span><br/>
            <span class="l">Of that impetuous flood,</span><br/>
            <span class="l">That on the one side, washed the wall,</span><br/>
            <div id="MSIX38v" class="pb"></div>
            <span class="l">Of Gothic mansion fair and tall,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">And on the other side was seen,</span><br/>
            <span class="l">Checked by broad meadows rich and green,</span><br/> 
            <span class="l">And scattering spray that sparkling flew,</span><br/>
            <span class="l">And fed the grass with constant dew,</span><br/>
            <span class="l">With broader stream, and mightier wrath
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">The <span class="geogName-RHINE">Rhine</span> had chosen bolder path.</span><br/>
            <span class="l">All yielding to his forceful will,</span><br/>
            <span class="l">Through <span class="name--BASALT">basalt</span> gorge, and rock ribbed hill,</span><br/>
            <span class="l">Still flashed his deep right on,</span><br/>
            <span class="l">It checked not at the battled pride,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/> 
            <span class="l">Where <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span> walled his side,</span><br/>
            <span class="l">Stretching across with giant stride,</span><br/>
            <span class="l">The mighty waves the rock deride,</span><br/>
            <span class="l">And on the crag like armies ride,</span><br/>
            <span class="l">Flinging the white foam far and wide,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Upon the rough grey stone,</span><br/>
            <span class="l">Beneath the sweep of yon dark fell,</span><br/>
            <span class="l">Join the two brothers, the <span class="geogName-MOSELLE">Moselle</span>,</span><br/>
            <span class="l">Greeting the <span class="geogName-RHINE">Rhine</span> in friendly guise,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINTWOBROTHERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">To join his headlong current flies,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINBROWGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <div id="MSIX39r" class="pb"></div>
            <span class="l">Together down the rivers go,</span><br/>
            <span class="l">Resistless oer their rocky foe,</span><br/>
            <span class="l">As lovers joining hand in hand,</span><br/>
            <span class="l">Toward the west, beside their strand,</span><br/>
            <span class="l">The rivers pass full playfully,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Like allied armies mingled band,</span><br/>
            <span class="l">Toward the east, white whirls of sand,</span><br/>
            <span class="l">The river tosses by.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINPLAYFULLYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">The morning came, and rosy light,</span><br/>
            <span class="l">Blushed oer the bastions, and the height,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/> 
            <span class="l">Where traitor never stood,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINBASTIONSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l">And far beneath, in misty night,</span><br/>
            <span class="l">The waters wheeled their sullen flight</span><br/> 
            <span class="l">Till oer them far for many a road,</span><br/>
            <span class="l">The red sun scattered tinge of blood,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">Till broadening into brighter day,</span><br/>
            <span class="l">On the rich plain the lustre lay,</span><br/>
            <span class="l">And distant spire and village white,</span><br/> 
            <span class="l">Confessed the kiss of dawn,</span><br/>
            <span class="l">Amid the forests shining bright,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">Still multiplying on the sight.</span><br/> 
            <div id="MSIX39v" class="pb"></div>
            <span class="l">As sunnier grew the morn.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_poem_glosses_textual#EHRENBREITSTEINPAUSEPERIODGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">We climbed the crag, we scaled the ridge,</span><br/>
            <span class="l">On <span class="placeName-COBLENTZ">Coblentz</span> looked adown</span><br/>
            <span class="l">The tall red roofs, the long white bridge
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">And on the eyelike frown,</span><br/>
            <span class="l">Of the portals of her palaces,</span><br/>
            <span class="l">And on her peoples busy press</span><br/>
            <span class="l">There never was a fairer town</span><br/>
            <span class="l">Between two rivers as it lay,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l">Whence morning mist was curling grey</span><br/>
            <span class="l">On the plains edge, beside the hill,</span><br/>
            <span class="l">Oh, it was lying calm and still,</span><br/>
            <span class="l">In mornings chastened glow</span><br/>
            <span class="l">The multitudes were thronging by,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
            <span class="l">But we were dizzily on high,</span><br/>
            <span class="l">And we might not one murmur hear,</span><br/>
            <span class="l">Nor whisper, tingling on the ear,</span><br/>
            <span class="l">From the far depth below.</span><br/>
            <span class="l">The bridge of boats, the bridge of boats
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
            <span class="l">Across the hot tide how it floats</span><br/>
            <span class="l">In one dark bending line</span><br/>
            <div id="MSIX40r" class="pb"></div>
            <span class="l">For other bridge were swept away,</span><br/>
            <span class="l">Such shackle loveth not the play</span><br/>
            <span class="l">Of the impetuous <span class="geogName-RHINE">Rhine</span>.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
            <span class="l">The feeble bridge that bends below,</span><br/>
            <span class="l">The tread of one weak man,</span><br/>
            <span class="l">It yet can stem the forceful flow</span><br/>
            <span class="l">Which nought unyielding can.</span><br/>
            <span class="l">The bar of shingle bends the sea.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
            <span class="l">The <span class="name--GRANITE">granite</span> cliffs are worn away</span><br/>
            <span class="l">The bending reed can bear the blast</span><br/>
            <span class="l">When English oak were downward cast.</span><br/>
            <span class="l">The bridge of boats the <span class="geogName-RHINE">Rhine</span> can chain,</span><br/>
            <span class="l">Where strength of stone were all in vain.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
            <span class="l">Oh fast and faster on the stream,</span><br/>
            <span class="l">An island driveth down,</span><br/>
            <span class="l">The <span class="placeName-BLACKFOREST">Schwartzwald</span> pine hath shed its green,</span><br/>
            <span class="l">But not at Autumns frown.</span><br/>
            <span class="l">Twas sharper winter stript them there.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div></span><br/>
            <span class="l">The long straight trunks are bald and bare.</span><br/>
            <span class="l">The peasant on some <span class="geogName-ALPS">Alpine</span> brow,</span><br/>
            <span class="l">Hath cut the root and lopʼt the bough,</span><br/>
            <div id="MSIX40v" class="pb"></div>
            <span class="l">The eagle heard the echoing fall,</span><br/>
            <span class="l">And soared away to his high eyrie,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div></span><br/>
            <span class="l">The chamois gave his warning call,</span><br/>
            <span class="l">And higher on the mountain tall,</span><br/>
            <span class="l">Pursued his way unweary.</span><br/>
            <span class="l">They come, they come, the long pine floats</span><br/>
            <span class="l">Unchain the bridge, throw loose the boats
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div></span><br/>
            <span class="l">Lest by the raft so rudely driven,</span><br/>
            <span class="l">The iron bolts be burst and riven.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINRAFTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span></span><br/>
            <span class="l">They come, they come, careering fast</span><br/>
            <span class="l">The bridge is gained, the bridge is past</span><br/>
            <span class="l">Before the flashing foam they flee,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div></span><br/>
            <span class="l">Toward the ocean rapidly,</span><br/>
            <span class="l">There firmly bound by builders care,</span><br/>
            <span class="l">The rage of wave and wind to dare,</span><br/>
            <span class="l">Or burst of battle‐shock to bear.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_poem_glosses_textual#EHRENBREITSTEINPAUSEPERIODGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">Upon the boundless sea.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div></span><br/>
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
                c
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
                d
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
                e
                </span>
                
              </a></span> cramp<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINCRAMPGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
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
                f
                </span>
                
              </a></span> 
            <br/>Well, there was nothing for it, so we went 
                    <br/>back, and took the other path.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINPATHGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span></div>
         <div id="MSIX42r" class="pb"></div>
         
         <div class="p">This time all went right, and we got into 
                    <br/>the fortress, first however prudently step‐
         <br/><span class="g-word_division">=</span>ping<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#WORDDIVISION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
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
                h
                </span>
                
              </a></span> but it was in French, and the offi‐
         <br/><span class="g-word_division">=</span>cer<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#WORDDIVISION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                i
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
                j
                </span>
                
              </a></span> and the stupidity of all German 
                    <br/>brains.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#GERMANBRAINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span></div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
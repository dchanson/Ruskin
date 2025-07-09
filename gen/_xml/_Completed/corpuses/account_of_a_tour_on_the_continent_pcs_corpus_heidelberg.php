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
“<placeName corresp="#HEIDELBERG">Heidelberg</placeName>&#8221; “Heidelberg” Drawing 1 of 1 [Heidelberg] [section title] “Heidelberg” [poem] “Heidelberg” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX44v-45r.jpg msix/MSIX44v-45r.jpg msix/MSIX44v-45r.jpg msix/MSIX47v-48r.jpg msix/MSIX48v-49r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
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
                a
                </span>
                
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Heidelberg” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">Now from the smiling afternoon,</span><br/>
            <span class="l">The rain had past away.</span><br/>
            <span class="l">And glimmered forth the pallid moon,</span><br/>
            <span class="l">Amid the heavens grey,</span><br/>
            <span class="l">Brake, and bush, and mead and flower,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Were glistening with the sunny shower,</span><br/>
            <span class="l">Where from the tangled viny wreath.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">The clustered grape looked out beneath</span><br/>
            <span class="l">Climbing up the southern side,</span><br/>
            <div id="MSIX45r" class="pb"></div>
            <span class="l">Of the round hills bosom wide,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Branches of the chain that bound</span><br/>
            <span class="l">All the south horizon round,</span><br/>
            <span class="l">Far towards the western day,</span><br/>
            <span class="l"><span class="placeName-MANNHEIM">Manheim</span>s towers softened lay,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#MANHEIMSTOWERS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">From behind a thunder‐cloud,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Dark as envy, shot the sun.</span><br/>
            <span class="l">On those towers high and proud,</span><br/>
            <span class="l">Hazily his rays came down,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#NOWFROMTHESMILING" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l">Smiling with those bright rays kiss.</span><br/>
            <span class="l">Shooting round effulgence moony,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Like a lovely Oasis.</span><br/>
            <span class="l">ʼMid a desert dark and gloomy.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#FROMBEHINDATHUNDERCLOUD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span><br/>
            <span class="l">But a moment— darkly down,</span><br/>
            <span class="l">Came the thunder heavens frown,</span><br/>
            <span class="l">ʼMong the trees a fitful shaking,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Told the hoarse night wind was waking,</span><br/>
            <span class="l">Grey upon his mountain throne,</span><br/>
            <span class="l"><span class="placeName-HEIDELBERG">Heidelberg</span> his ruins lone,</span><br/>
            <span class="l">Reared colossally,</span><br/>
            <span class="l">All begirt with mighty trees.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <div id="MSIX45v" class="pb"></div>
            <span class="l">Whistling with the evens breeze,</span><br/>
            <span class="l">Flapping faintly by.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#HEIDELBERGHISRUINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">It was morning, from the height.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span></span><br/>
            <span class="l">Cumbered with its ruins hoar,</span><br/>
            <span class="l">All that lovely valley bright,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">We were looking oer.</span><br/>
            <span class="l">With its silver river bending,</span><br/>
            <span class="l">Vineyards to its banks descending,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#LOVELYVALLEY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">Many a distant mountain chain</span><br/>
            <span class="l">Girded round the mighty plain.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">Here the sky was clear and bright,</span><br/>
            <span class="l">But upon their distant height</span><br/>
            <span class="l">Like a monster oer his prey,</span><br/>
            <span class="l">Rain and tempest scowling lay.</span><br/>
            <span class="l">Like a mighty ocean wave,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">All along thʼ horizon sweeping,</span><br/>
            <span class="l">Flinging far its cloudy spray</span><br/>
            <span class="l">Oer the peaceful heaven beating.</span><br/>
            <span class="l">Then around the reddening sun,</span><br/>
            <span class="l">Gathered, throwing darkness dun,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">On the ruind ghostly wall.</span><br/>
            <div id="MSIX46r" class="pb"></div>
            <span class="l">Then between the pinetrees tall,</span><br/>
            <span class="l">Came quick sound of raindrop fall.</span><br/>
            <span class="l">Fast increased, the leafy rattle,</span><br/>
            <span class="l">Spoke the coming tempest battle,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">Enter then the chambers cold,</span><br/>
            <span class="l">Cold and lifeless, bald and bare.</span><br/>
            <span class="l">Though with banners decked of old,</span><br/>
            <span class="l">Ivy tendrils flickering flare,</span><br/>
            <span class="l">Are the only banners there
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l">You would start, to hear your tread</span><br/>
            <span class="l">Given back by echoes dead</span><br/>
            <span class="l">You would look around to see,</span><br/>
            <span class="l">If a sprite were watching thee.</span><br/>
            <span class="l">Yet a vision would come oer thee,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
            <span class="l">Of the scenes had past before thee,</span><br/>
            <span class="l">Of the time when many a guest,</span><br/>
            <span class="l">Blessed the baron for his feast,</span><br/>
            <span class="l">When the peasant homeward stealing</span><br/>
            <span class="l">Dusky night the hills concealing,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
            <span class="l">Heard the swell of wassail wild</span><br/>
            <span class="l">Cadence from the castle coming.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span></span><br/>
            <div id="MSIX46v" class="pb"></div>
            <span class="l">Mingling with the night breeze humming,</span><br/>
            <span class="l">And (until the morning mild</span><br/>
            <span class="l">Lightened upon wall and tower
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
            <span class="l">Beacon fires from hour to hour</span><br/>
            <span class="l">Streaming from the windows tall</span><br/>
            <span class="l">Of the barons ancient hall,</span><br/>
            <span class="l">Where the shout around was ringing</span><br/>
            <span class="l">And the troubadour was singing
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
            <span class="l">Ancient air, and ancient rhyme,</span><br/>
            <span class="l">Legend of the ancient time</span><br/>
            <span class="l">Of some knights blood nobly spilt,</span><br/>
            <span class="l">In the melee, or the tilt,</span><br/>
            <span class="space" style="padding-left:3.6em"> </span>
            <div id="MSIX47r" class="pb"></div>
            <span class="l">Of the deeds of some brave band
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
            <span class="l">Oath bound in the holy land</span><br/>
            <span class="l">Such as iron <span class="persName-KR1">Richard</span> led,</span><br/>
            <span class="l">Steeled without and steeled within</span><br/>
            <span class="l">True in hand and heart and head</span><br/>
            <span class="l">Worthy foes of <span class="persName-SALADIN">Saladin</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#RICHARDSALADIN" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div></span><br/>
            <span class="l">Or, if pleased a darker theme</span><br/>
            <span class="l">Of spectres huge at twilight seen</span><br/>
            <span class="l">Above some Battle field</span><br/>
            <span class="l">Mimicking with motion dread</span><br/>
            <span class="space" style="padding-left:4.4em"> </span>
            <div id="MSIX47v" class="pb"></div>
            <span class="l">Past combat of those lying dead
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div></span><br/>
            <span class="l">Beneath their cloudy pinions spread</span><br/>
            <span class="l">Crested helm and spear, and shield</span><br/>
            <span class="l">In the red cloud blazoned.</span><br/>
            <span class="l">Thus with feast and revelry</span><br/>
            <span class="l">Oft the huge halls rang with glee,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div></span><br/>
            <span class="l">All reckless of the withering woe</span><br/>
            <span class="l">Reigned in their dungeons dank below</span><br/>
            <span class="l">Where in the lone hours sullen flight</span><br/>
            <span class="l">The masked day mingled with the night</span><br/>
            <span class="l">Until the captives practised eye
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div></span><br/>
            <span class="l">Could pierce the thick obscurity</span><br/>
            <span class="l">Could see his fetters glance, or tell</span><br/>
            <span class="l">The stones which walled his narrow cell</span><br/>
            <span class="l">Till at the time the warder came</span><br/>
            <span class="l">His dusky lamps half smothered flame
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div></span><br/>
            <span class="l">Flashed on him like that sun, whose ray</span><br/>
            <span class="l">And all the smile of lightsome day</span><br/>
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
                h
                </span>
                
              </a></span> 
            <br/>the face of the hill which is crowned by
                    <br/><span class="name--HEIDELBERGCASTLE">the castle of Heidelberg</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#BEAUTIFULPATHS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> winding beneath 
                    <br/>the twisted branches of green woods, with 
                    <br/>here and there a grey crag lifting up its 
                    <br/>lichened head from the wilderness of brake<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#BRAKE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> 
            <br/>and grass and flower, that concealed the 
                    <br/>mass of that ancient <span class="name--GRANITE">granite</span>, sometimes
                </div>  
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
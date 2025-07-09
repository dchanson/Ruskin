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
“MS III” “Poetry” “Poetry” "Time: Blank Verse" “The Ship” and “Look at That Ship” [1827] MS III Third Poetry Anthology MS III Third Poetry Anthology Title “Poetry Descriptive” “Poetry Descriptive” “Ragland Castle” “Lochleven” “Nature” "Spring: Blank Verse" “Wales” “The Hill of Kinnoul” “Glen of Glenfarg” [“Glen of Glenfarg thy beauteous rill”] “The Sea” “The Storm” [Version A] “The Storm” [Version B]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229164.jpg msiii/1229170.jpg msiii/1229164.jpg msiii/1229166.jpg msiii/1229167.jpg msiii/1229169.jpg msiii/1229171.jpg msiii/1229182.jpg msiii/1229171.jpg msiii/1229184.jpg msiii/1229191.jpg msiii/1229194.jpg msiii/1229184.jpg msiii/1229184.jpg msiii/1229184.jpg msiii/1229185.jpg msiii/1229185.jpg msiii/1229185.jpg msiii/1229186.jpg msiii/1229186.jpg msiii/1229186.jpg msiii/1229187.jpg msiii/1229187.jpg msiii/1229188.jpg msiii/1229188.jpg msiii/1229188.jpg msiii/1229188.jpg msiii/1229189.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="<?php echo r_build_url("witnesses/look_at_that_ship_msxi.php");?>" target="_self">MS XI witness</a><br/></div>
   <div class="fileName"><span>“Poetry”</span></div><br/>
   <div class="title" id="">
      
      <div class="title" id="@"><span class="space" style="padding-left:5.2em"> </span><span class="caps">Poetry</span></div>
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>"Time: Blank Verse"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">Time Blank Verse</span></h1>
         <div class="threequarter"></div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">PAPA</span> whats time a figure or a sense</span><br/>
            <span class="l">Tis one but not the other. Is not time</span><br/>
            <div id="1229166r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>26</div><br/>
            <br/>
            <br/>
            <br/>    
            
            <br/>
            <span class="l">A figure. <span class="doubleletter-fill">Y</span>es it is for on the tops of shops</span><br/>
            <span class="l">We often see a figure with two wings</span><br/>
            <span class="l">A scythe upon one shoulder and a lock
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Of hair upon his forehead while his head is bald</span><br/>
            <span class="l">Except the lock upon his forehead and called time</span><br/>
            <span class="l">Times very quick and therefore he has wings</span><br/>
            <span class="l">When past times gone for ever so he has a lock</span><br/>
            <span class="l">Of hair upon his forehead and the proverb is
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Take time by his forelock he mows down every thing</span><br/>
            <span class="l">And so he has a scythe time is so quick</span><br/>
            <span class="l">That might a year be called a day</span><br/>
            <span class="l">Day now I think of it ʼtis <span class="date-1827-01-01">newyearsday</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/time_blank_verse_glosses_contextual#NEWYEARSDAYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <div id="1229167v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:5.2em"> </span>2<div 
          class="subst-del s-subst s-del" >8</div><div 
          class="s-subst s-add s-overwrite s-inline">7</div></div><br/>                    
            <span class="l">A happy <span class="date-1827-01-01">new years day</span> to you papa
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">And now I must return to time</span><br/>
            <span class="l">Is time only a figure no he is not</span><br/>
            <span class="l">What is he then what is he I dont know</span><br/>
            <span class="l">Heʼs not a quality of that Iʼm sure</span><br/>
            <span class="l">Oh I remember now he is a god
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Entitled <span class="caps">S</span>aturn heʼs a heathen god</span><br/>
            <span class="l">And well he might be called one none but they</span><br/>
            <span class="l">Could go so quick or jump from tween our hands</span><br/>
            <span class="l">As time does,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/time_blank_verse_glosses_contextual#BASELINEPUNCTUATIONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> time Iʼm quite away from him</span><br/>
            <span class="l">Away from him no surely Iʼm not so
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">For Iʼm at heathen gods and heʼs a god</span><br/>
            <span class="l">So though I may be from him Iʼm not far</span><br/>
            <span class="l">From him and now I must go to him quite</span><br/>
            <span class="l">Tis but an hour to merry <span class="date-1827-01-01"><span class="caps">N</span>ewyearsday</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/time_blank_verse_glosses_contextual#NEWYEARSDAYSPACEDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">For though it is a‐day a‐dayʼs an hour
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">And whatʼs an hour ʼtis only a wee minute</span><br/>
            <span class="l">Made so by the quick course of time</span><br/>
            <span class="l">So mr time as Iʼve said all about you</span><br/>
            <span class="l">All Iʼve to say I must take leave of you</span><br/>
            </div>
         </div>
   </div><br/><div class="threequarter"></div>
   <div class="date" id="">
      
      <div class="p">Jan 1. 1827</div>
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Ship” and “Look at That Ship” [1827]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:2.8em"> </span><span class="bold-caps">The Ship</span></div>
         
         <div class="lg-stanza">
            <span class="l"><b><span class="caps">L</span><span class="smallcaps">ook</span></b> at that ship
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l"><b>H</b>er flying streamer and her mountain sides</span><br/>
            <span class="l"><b>H</b>er towering <span class="overwriting">m</span>ast and filling sails with drops</span><br/>
            <span class="l"><b>Of</b> water hanging to her high buil<div 
          class="subst-del s-subst s-del" >d</div><div 
          class="s-subst s-add s-overwrite s-inline">t</div> side<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/look_at_that_ship_glosses_textual#BUIL" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l"><b>Glitteri</b>ng like diamonds dangling in the sun</span><br/>
            <span class="l"><b>Y</b>et soon it lessens lessens more and more
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l"><b>T</b>ill to a spec<span class="overwriting">k</span> reduced it vanishes complete</span><br/>
            <span class="l">And to the dangers of the sea exposed</span><br/>
            <span class="l">The sailors look with horror at the waves</span><br/>
            <span class="l">Then through the clouds the sun shoots forth<span class="runover" style="left:5.6em">his beams</span></span><br/>
            <span class="l">The clouds disperse and bright blue sky
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div><span class="runover" style="left:5.6em">comes forth.</span></span><br/>
            <span class="l">The waters sparkle and at distance seen the specks</span><br/>
            <span class="l">Of other vessels swimming on the expanse</span><br/>
            <span class="l">of ocean. some of them do disappear complete</span><br/>
            <span class="l">While others largen coming nearer near</span><br/>
            <span class="l">Then gliding off each take a different course
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">And disappear again. When shore afar is seen</span><br/>
            <div id="1229169r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:5.6em"> </span>32</div><br/>
            <br/>
            <span class="l">And on the vessel drives when landing safe</span><br/>
            <span class="l">she rides at anchor floating on the waves</span><br/>
            <span class="l">At length the anchor pulled she drives away</span><br/>
            <span class="l">And passes on a loud explosion heard
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">The air around them darkened with the smoke</span><br/>
            <span class="l">And steam a steamboat then had burst</span><br/>
            <span class="l">While from among the smoke the vessel quickly<span class="runover" style="left:5.6em">goes</span></span><br/>
            <span class="l">And gladly spies homes cliffs and home she<span class="runover" style="left:4.8em">goes.</span></span><br/>
            </div>
         </div>
   </div><div class="full"></div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>MS III Third Poetry Anthology Title</span></div><div id="1229171r" class="pb"></div><div class="pageNum-top"><span class="space" style="padding-left:6.4em"> </span>3<div 
          class="subst-del s-subst s-del" >7</div><div 
          class="s-subst s-add s-overwrite s-inline">6</div></div><br/>
   <div class="title" id="">
      <span class="head" id=""><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/msiii_poetry_anthology_3_glosses_contextual#CHAP6GLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span>
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Poetry Descriptive”</span></div><div id="1229184r" class="pb"></div><div class="pageNum-top"><span class="space" style="padding-left:3.6em"> </span>6<div 
          class="subst-del s-subst s-del" >1</div><div 
          class="s-subst s-add s-overwrite s-inline">2</div></div><br/><br/>
   <div class="title" id="">
      
      <div class="title"><span class="space" style="padding-left:2.0em"> </span>poetry discriptive</div>
      </div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>“Ragland Castle”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:3.6em"> </span>ragland castle</div>
         
         <div class="lg-stanza">
            
            <span class="l"><span class="caps-doubleletter">O</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_textual#DOUBLELETTER" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> <span class="smallcaps"><span class="placeName-RAGLAN">ragland</span></span> beauty as you <div 
              class="add-above" 
              style="left:10.0em"><span class="metamark-unknown">×</span></div>ar<span class="overwriting">e</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#CROSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>ruined arches towers and views</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>not ruined views but fine ones</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your gothic arches and your falling towers.</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>with keystones moats and drawbridges<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#MOATS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your mice‐house moss and burnt up grass<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#MOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>for mice to pull and line their falling dwellings</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your spiral towers<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#SPIRALTOWERS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> and holes for mice to live in</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your dungeons splits<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ragland_castle_glosses_contextual#SPLITGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span> and drawbridges</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>battlements courts and lodges</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>so <span class="placeName-RAGLAN">ragland</span> as I have described you
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>I must take leave of you</span><br/>
            </div>
         </div>
   </div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>“Lochleven”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:2.4em"> </span>lochleven</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.4em"> </span><span class="placeName-LOCHLEVENCAS"><b><span class="caps">L</span><span class="smallcaps">ochleven</span></b></span> <b>is your castle there</b><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lochleven_glosses_contextual#ISYOURCASTLETHERE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                10
                </span>
              </a></span></span><br/>
            <span class="l">when tis so long when cried aloud</span><br/>
            <span class="l">was boat is near when <span class="persName-MQS">queen of scots</span></span><br/>
            <span class="l">stepped in the boat and rowed from<div 
              class="add-below" 
              style="left:13.6em">s<span class="unclear-faded-CWB">h</span><span class="gap" style="padding-left:0.4em"> </span>ar</div> shore<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lochleven_glosses_contextual#QUEENSBOATGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
            <span class="l">when waves were gliding</span><br/>
            <span class="l">oars were sliding</span><br/>
            <div id="1229185v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>63</div><br/>                  
            <span class="l">oer the wide expanse of you</span><br/>
            <span class="l">now fish and waves are gliding</span><br/>
            <span class="l">and fishing boats are sliding
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
            <span class="l">but before twas all as quiet</span><br/>
            <span class="l">as the day</span><br/>
            <span class="l">when we may say</span><br/>
            <span class="l">not a leaf is stirring now</span><br/>
            </div>
         </div>
   </div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>“Nature”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">nature</h1>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:2.0em"> </span>thy waving boughs thy
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div><span class="runover" style="left:3.6em">falling leaves</span></span><br/>
            <span class="l">and the swallow on the eaves</span><br/>
            <span class="l">twittering and the tempests blow</span><br/>
            <span class="l">with the rippling waters flow</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>"Spring: Blank Verse"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:1.6em"> </span>spring<span class="space" style="padding-left:2.4em"> </span>blank verse</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">What</span> beauties<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/spring_blank_verse_glosses_contextual#LINE1PENCILS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span> spring thou hast<span class="runover" style="left:2.8em">the waving lilac</span></span><br/>
            <span class="l">and the stiff tall peach with roselike
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div><span class="runover" style="left:4.8em">flowers</span></span><br/>
            <span class="l">with yellow corchorus<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/spring_blank_verse_glosses_contextual#CORCHORUS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span> and with nectron<span class="runover" style="left:4.8em">blossom<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/spring_blank_verse_glosses_contextual#NECTRON" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                14
                </span>
              </a></span></span></span><br/>
            <span class="l">some with grace wave and some<span class="runover" style="left:2.4em">though tall are stiff</span></span><br/>
            <div id="1229185r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>64</div><br/> 
            <span class="l">waving is lilac so is yellow corchorus</span><br/>
            <span class="l">waving is cherry blossom though not<span class="runover" style="left:3.6em">so graceful</span></span><br/>
            <span class="l">as the spiry lilac and the hya
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div><span class="runover" style="left:10.0em">cinth</span></span><br/>
            <span class="l">stiff is the pear and nectron with<span class="runover" style="left:3.6em">the peach</span></span><br/>
            <span class="l">and apricot all these are stiff but<span class="runover" style="left:4.4em">in return</span></span><br/>
            <span class="l">Their flowers are beautiful So<span class="runover" style="left:2.4em">are birds and beasts</span></span><br/>
            <span class="l">As well as flowers Some are<span class="runover" style="left:2.8em">wild and cruel</span></span><br/>
            <span class="l">Such is<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/spring_blank_verse_glosses_contextual#LINE12VERBCASE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                15
                </span>
              </a></span> the tiger panther lynx
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div><span class="runover" style="left:3.2em">and ounce</span></span><br/>
            <span class="l">So also in return these animals</span><br/>
            <span class="l">Are pretty in the other sort the best<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/spring_blank_verse_glosses_contextual#LINE14THEBEST" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                16
                </span>
              </a></span></span><br/>
            <span class="l">Some dogʼs<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/spring_blank_verse_glosses_contextual#LINE15APOSTROPHE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                17
                </span>
              </a></span> are ugly but conceal within</span><br/>
            <span class="l">Some godd<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/spring_blank_verse_glosses_contextual#LINE16GODD" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                18
                </span>
              </a></span> intentions good ideas good<span class="runover" style="left:4.8em">thoughts</span></span><br/>
            <span class="l">But spring there is one <div 
              class="add-above" 
              style="left:8.8em">tree</div> that thou
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div><span class="runover" style="left:3.2em">bringʼst forth</span></span><br/>
            <div id="1229186v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>65</div><br/> 
            <span class="l">That is more beautiful than all<span class="runover" style="left:3.2em">the others</span></span><br/>
            <span class="l">This is the apple blossom.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/spring_blank_verse_glosses_contextual#LINE19PERIOD" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                19
                </span>
              </a></span> O how<span class="runover" style="left:4.0em">sweet</span></span><br/>
            <span class="l">Is that fine tree and so I end</span><br/>
            </div>
         </div>
   </div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>“Wales”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">Wales</span></h1>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That rock with waving<span class="runover" style="left:3.6em">willows on its side</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>that hill with beauteous
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div><span class="runover" style="left:3.2em">forests on its top</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That stream that with its rippling<span class="runover" style="left:4.4em">waves doth glide</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>and oh what beauties has that<span class="runover" style="left:4.0em">mountain got<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/wales_glosses_contextual#LINE4STANZABREAK" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                20
                </span>
              </a></span></span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That rock stands high</span><br/>
            <span class="l">against,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/wales_glosses_contextual#LINE6COMMA" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                21
                </span>
              </a></span> the sky</span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>those trees stand firm upon
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L115" id="L115">115</a></div><span class="runover" style="left:4.4em">the rock</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>and seem as if they all<span class="runover" style="left:4.0em">did lock</span></span><br/>
            <div id="1229186r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:2.4em"> </span>65</div><br/>                       
            <span class="l">into each other.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/wales_glosses_contextual#LINE9SEMICOLON" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                22
                </span>
              </a></span> tall they stand</span><br/>
            <span class="l">towering above the whitened land</span><br/>
            </div>
         </div>
   </div><div class="half"></div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Hill of Kinnoul”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">The hill of kinnoul</h1>
         
         <div class="lg-stanza">
            <span class="l">First winding round the base of<span class="runover" style="left:2.8em"><span class="geogName-KINNOULLHL">that smooth rock</span></span></span><br/>
            <span class="l">Flows the glass <span class="geogName-TAYRIV">tay</span> not always
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L120" id="L120">120</a></div><span class="runover" style="left:2.4em">quite so smooth</span></span><br/>
            <span class="l">as that clear substance. from the<span class="runover" style="left:2.4em">surface rises</span></span><br/>
            <span class="l"><span class="geogName-KINNOULLHL">a steep rock</span> and towering oer<span class="runover" style="left:9.2em">its head</span></span><br/>
            <span class="l">appear the high topped trees<span class="runover" style="left:3.6em">above below</span></span><br/>
            <span class="l">green natures colour stands<span class="runover" style="left:2.4em"><span class="geogName-KINNOULLHL">upon the rock</span></span></span><br/>
            <span class="l">and high above thy head
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L125" id="L125">125</a></div><span class="runover" style="left:2.0em">appears the <span class="unclear-smudged-">gre</span>en of trees</span></span><br/>
            <span class="l">walk on the top of that <span class="geogName-KINNOULLHL">rock</span> and<span class="runover" style="left:3.6em">look down</span></span><br/>
            <span class="l">from thence upon the <span class="geogName-TAYRIV">tay</span> the<span class="runover" style="left:3.6em">precipice</span></span><br/>
            <div id="1229187v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>66</div><br/>
            <span class="l">tween thee and it doth make thee<span class="runover" style="left:11.2em">giddy</span></span><br/>
            <span class="l">it is so high that from<span class="runover" style="left:2.4em">it seen the <span class="geogName-TAYRIV">tay</span></span></span><br/>
            <span class="l">appears like a little rivulet among
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L130" id="L130">130</a></div><span class="runover" style="left:4.8em">the hills</span></span><br/>
            <span class="l">dwindling into nothing mong<span class="runover" style="left:3.6em"><span class="geogName-GRAMPIANS">the distant mountains</span></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Glen of Glenfarg” [“Glen of Glenfarg thy beauteous rill”]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:2.4em"> </span>glen of glenfarg</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:1.2em"> </span><span class="caps">GL</span><span class="smallcaps">en</span> of <span class="geogName-GLENFARG">glenfarg</span> thy beaut<div 
          class="subst-del s-subst s-del" ><span class="unclear-EKF">ifu</span></div><div 
          class="s-subst s-add s-overwrite s-inline">eo</div><div 
          class="s-subst s-add s-inline">us</div><div 
              class="add-above" 
              style="left:12.0em"><span class="g-runover">[</span>rill</div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#BEAUTEOUSRILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                23
                </span>
              </a></span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>Streaming through thy <span class="geogName-OCHILS">mountains</span><span class="runover" style="left:6.0em">high</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>onward pressing onward still</span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>hardly seeing the blue sky<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#BLUESKYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                24
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L135" id="L135">135</a></div></span><br/>
            </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>Mountain streams press on<span class="runover" style="left:5.2em">your way</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>and run into the stream<span class="runover" style="left:10.4em">below</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>never stop like idle clay</span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>hear the sheep and cattle low</span><br/>
            </div>
         <div class="quarter"></div>
         <div id="1229187r" class="pb"></div>
         <div class="pageNum-top"><span class="space" style="padding-left:2.8em"> </span>67</div><br/>
         
         <div class="lg-stanza">
            <span class="l">Stones that in the stream
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L140" id="L140">140</a></div><span class="runover" style="left:9.2em">do lie</span></span><br/>
            <span class="l">bear the rushing torrent still</span><br/>
            <span class="l">thou shalt never never die</span><br/>
            <span class="l">submit unto the almightys will</span><br/>
            </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Cows that lie upon the grass</span><br/>
            <span class="l">rise and graze upon the <span class="geogName-OCHILS">hills</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L145" id="L145">145</a></div></span><br/>
            <span class="l">never be a heavy mass</span><br/>
            <span class="l">like a stone thats in the rills</span><br/>
            </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Sheep that eat upon the <span class="geogName-OCHILS">hills</span></span><br/>
            <span class="l">rise and play and jump about</span><br/>
            <span class="l">drink out of the running rills
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L150" id="L150">150</a></div></span><br/>
            <span class="l">and always on the grass be out</span><br/>
            </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Cottages upon the <span class="geogName-GLENFARG">plain</span></span><br/>
            <span class="l">placed so near the floury mills<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#FLOURYMILLSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                25
                </span>
              </a></span></span><br/>
            <span class="l">cottager look on <span class="name--CHARLESSWAIN">charlesʼs wain</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#CHARLESSWAINGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                26
                </span>
              </a></span></span><br/>
            <span class="l">right above the grassy hills
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L155" id="L155">155</a></div></span><br/>
            </div>
         <div class="quarter"></div>
         <span class="space" style="padding-left:2.0em"> </span><span class="note-gloss-MR"><span class="date-1826-09">Sep<sup>t</sup>. 1826</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#SEPTEMBER1826GLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                27
                </span>
              </a></span></span>
         <div id="1229188v" class="pb"></div>
         <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>68</div><br/>
         
         <div class="lg-stanza">
            <span class="l">The <span class="placeName-NORTHSTAR">pole star</span> guides thee<span class="runover" style="left:3.2em">on thy way</span></span><br/>
            <span class="l">when in dark nights thou art<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#WORDINBRACKETSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                28
                </span>
              </a></span></span><br/>
            <span class="l">therefore look up at the starry<span class="runover" style="left:10.4em">day</span></span><br/>
            <span class="l">look at the stars about thee<span class="runover" style="left:10.4em">tost</span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Sea”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:2.8em"> </span>The sea</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">F</span><span class="smallcaps">low</span> on thou calm sea bear the ships to their
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L160" id="L160">160</a></div><span class="runover" style="left:16.8em">ports</span></span><br/>
            <span class="l">man of war<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_sea_glosses_contextual#MANOFWARGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                29
                </span>
              </a></span> smack<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_sea_glosses_contextual#SMACKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                30
                </span>
              </a></span> or sloop<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_sea_glosses_contextual#SLOOPGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                31
                </span>
              </a></span> all the different<span class="runover" style="left:18.8em">sorts</span></span><br/>
            <span class="l">do not throw them on rocks do not send them on<span class="runover" style="left:18.4em">high</span></span><br/>
            <span class="l">or make them upon the high precipice lie</span><br/>
            <span class="l">no profit to thee doth this havoc produce</span><br/>
            <span class="l">while to men this great treasureʼs of
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L165" id="L165">165</a></div><span class="runover" style="left:5.2em">infinite use</span></span><br/>
            <span class="l">for money is generally aboard these<span class="runover" style="left:4.0em">fine ships</span></span><br/>
            <span class="l">that go over the ocean into which<span class="runover" style="left:4.8em">their flag dips<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_sea_glosses_textual#LINE8APOSTROPHE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Storm” [Version A]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="1229188r" class="pb"></div>
         <div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>69</div><br/>
         
         <div class="title"><span class="space" style="padding-left:2.8em"> </span>The storm</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">S</span><span class="smallcaps">ee</span> the collecting clouds upon the hill</span><br/>
            <span class="l">See the collecting roughness of the rill</span><br/>
            <span class="l">Hark to the wind it howls among the<br/><span class="space" style="padding-left:12.8em"> </span>trees
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L170" id="L170">170</a></div></span><br/>
            <span class="l">And the high rising wind the pigs<div 
              class="add-above" 
              style="left:12.0em">x</div> do see</span><br/>
            <span class="l">See from the skies the shower of<br/><span class="space" style="padding-left:10.0em"> </span>pelting snow</span><br/>
            <span class="l">And hear how much the sheep and cattle<br/><span class="space" style="padding-left:13.2em"> </span>low</span><br/>
            <span class="l">From the dark cloud a flash of lightning<br/><span class="space" style="padding-left:13.6em"> </span>plays</span><br/>
            <span class="l">And down upon the ground a woman<br/><span class="space" style="padding-left:12.4em"> </span>lies
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L175" id="L175">175</a></div></span><br/>
            <span class="l">Struck by the lightnings flash the<br/><span class="space" style="padding-left:3.2em"> </span>thunder follows fast</span><br/>
            <span class="l">With fury from the skies the light<br/><span class="space" style="padding-left:2.0em"> </span><span class="add"><span class="metamark-unclear">bad</span></span><span class="space" style="padding-left:0.8em"> </span>nings cast<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_storm_a_glosses_textual#BAD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span><br/>
            </div>
         </div>
   </div><div class="half"></div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Storm” [Version B]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">S</span><span class="smallcaps">ee</span> how from yonder hills the clouds<span class="runover" style="left:12.0em">collect</span></span><br/>
            <span class="l">And see how dark and dreary they do<span class="runover" style="left:12.8em">look</span></span><br/>
            <span class="l">Promising hail and snow the birds
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L180" id="L180">180</a></div><span class="runover" style="left:12.0em">retire</span></span><br/>
            <span class="l">Into their nests and chirp and scream</span><br/>
            <span class="l">Prophesying the coming storm down<span class="runover" style="left:4.8em">pours the snow</span></span><br/>
            <span class="l">Covering the hedges and the<span class="runover" style="left:4.0em">houses tops</span></span><br/>
            <div id="1229189v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:2.8em"> </span>70</div><br/>                        
            <span class="l">Loud howls the wind and<span class="runover" style="left:2.0em">whistling roots up many a tree</span></span><br/>
            <span class="l">The sheep bleat loudly and the
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L185" id="L185">185</a></div><span class="runover" style="left:9.2em">careful dog</span></span><br/>
            <span class="l">Collecting them in a flock conducts<span class="runover" style="left:5.2em">them home</span></span><br/>
            <span class="l">Then when the storm is over<span class="runover" style="left:2.4em">from the clouds</span></span><br/>
            <span class="l">Peeps forth the sun and shining<span class="runover" style="left:2.4em">on the snow</span></span><br/>
            <span class="l">Gives it that dazzling whiteness<span class="runover" style="left:4.4em">to the eye</span></span><br/>
            <span class="l">In which its principle beauty
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L190" id="L190">190</a></div><span class="runover" style="left:3.2em">doth consist</span></span><br/>
            <span class="l">And so in beginning another<span class="runover" style="left:3.6em">line I end</span></span><br/>
            </div>
         </div>
   </div><br/><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
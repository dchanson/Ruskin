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
“Poetry Descriptive” “Poetry Descriptive” “Ragland Castle” “Lochleven” “Nature” "Spring: Blank Verse" “Wales” “The Hill of Kinnoul” “Glen of Glenfarg” [“Glen of Glenfarg thy beauteous rill”] “The Sea” “The Storm” [Version A] “The Storm” [Version B]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229184.jpg msiii/1229191.jpg msiii/1229194.jpg msiii/1229184.jpg msiii/1229184.jpg msiii/1229184.jpg msiii/1229185.jpg msiii/1229185.jpg msiii/1229185.jpg msiii/1229186.jpg msiii/1229186.jpg msiii/1229186.jpg msiii/1229187.jpg msiii/1229187.jpg msiii/1229188.jpg msiii/1229188.jpg msiii/1229188.jpg msiii/1229188.jpg msiii/1229189.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url("spring_blank_verse_houghton.php wales_houghton.php"); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>&#x201C;Poetry Descriptive&#x201D;</span></div><div id="1229184r" class="pb"></div><div class="pageNum-top"><span class="space" style="padding-left:3.6em"> </span>6<div 
          class="subst-del s-subst s-del" >1</div><div 
          class="s-subst s-add s-overwrite s-inline">2</div></div><br/><br/>
   <div class="title" id="">
      
      <div class="title"><span class="space" style="padding-left:2.0em"> </span>poetry discriptive</div>
      
   </div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Ragland Castle&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title"><span class="space" style="padding-left:3.6em"> </span>ragland castle</div>
         
         <div class="lg-stanza">
            
            <span class="l"><span class="caps-doubleletter">O</span><span class="gloss-inline">
          <a href="../glosses/ragland_castle_glosses_textual.php#DOUBLELETTER" target="_blank" class="inactive">
          

                <span class="gloss-textual">
                a
                </span>

              </a></span> <span class="smallcaps"><span class="placeName-RAGLAN">ragland</span></span> beauty as you <div 
              class="add-above" 
              style="left:10.0em"><span class="metamark-unknown">&#x00D7;</span></div>ar<span class="overwriting">e</span><span class="gloss-inline">
          <a href="../glosses/ragland_castle_glosses_contextual.php#CROSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>ruined arches towers and views</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>not ruined views but fine ones</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your gothic arches and your falling towers.</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>with keystones moats and drawbridges<span class="gloss-inline">
          <a href="../glosses/ragland_castle_glosses_contextual.php#MOATS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your mice&#x2010;house moss and burnt up grass<span class="gloss-inline">
          <a href="../glosses/ragland_castle_glosses_contextual.php#MOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>for mice to pull and line their falling dwellings</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your spiral towers<span class="gloss-inline">
          <a href="../glosses/ragland_castle_glosses_contextual.php#SPIRALTOWERS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> and holes for mice to live in</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>your dungeons splits<span class="gloss-inline">
          <a href="../glosses/ragland_castle_glosses_contextual.php#SPLITGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> and drawbridges</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>battlements courts and lodges
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>so <span class="placeName-RAGLAN">ragland</span> as I have described you</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>I must take leave of you</span><br/>
            
         </div>
         
      </div>
   </div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Lochleven&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title"><span class="space" style="padding-left:2.4em"> </span>lochleven</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.4em"> </span><span class="placeName-LOCHLEVENCAS"><b><span class="caps">L</span><span class="smallcaps">ochleven</span></b></span> <b>is your castle there</b><span class="gloss-inline">
          <a href="../glosses/lochleven_glosses_contextual.php#ISYOURCASTLETHERE" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span></span><br/>
            <span class="l">when tis so long when cried aloud</span><br/>
            <span class="l">was boat is near when <span class="persName-MQS">queen of scots</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">stepped in the boat and rowed from<div 
              class="add-below" 
              style="left:13.6em">s<span class="unclear-faded-CWB">h</span><span class="gap" style="padding-left:0.4em"> </span>ar</div> shore<span class="gloss-inline">
          <a href="../glosses/lochleven_glosses_contextual.php#QUEENSBOATGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span></span><br/>
            <span class="l">when waves were gliding</span><br/>
            <span class="l">oars were sliding</span><br/>
            <div id="1229185v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>63</div><br/>                  
            <span class="l">oer the wide expanse of you</span><br/>
            <span class="l">now fish and waves are gliding
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">and fishing boats are sliding</span><br/>
            <span class="l">but before twas all as quiet</span><br/>
            <span class="l">as the day</span><br/>
            <span class="l">when we may say</span><br/>
            <span class="l">not a leaf is stirring now
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            
         </div>
         
      </div>
   </div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Nature&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="page-title">nature</div>
         <br/>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:2.0em"> </span>thy waving boughs thy<span class="runover" style="left:3.6em">falling leaves</span></span><br/>
            <span class="l">and the swallow on the eaves</span><br/>
            <span class="l">twittering and the tempests blow</span><br/>
            <span class="l">with the rippling waters flow</span><br/>
            
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>"Spring: Blank Verse"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title"><span class="space" style="padding-left:1.6em"> </span>spring<span class="space" style="padding-left:2.4em"> </span>blank verse</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">What</span> beauties<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE1PENCILS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> spring thou hast
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div><span class="runover" style="left:2.0em">the waving lilac</span></span><br/>
            <span class="l">and the stiff tall peach with roselike<span class="runover" style="left:4.8em">flowers</span></span><br/>
            <span class="l">with yellow corchorus<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#CORCHORUS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span> and with nectron<span class="runover" style="left:4.4em">blossom<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#NECTRON" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                10
                </span>
              </a></span></span></span><br/>
            <span class="l">some with grace wave and some<span class="runover" style="left:2.0em">though tall are stiff</span></span><br/>
            <div id="1229185r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>64</div><br/> 
            <span class="l">waving is lilac so is yellow corchorus</span><br/>
            <span class="l">waving is cherry blossom though not
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div><span class="runover" style="left:3.6em">so graceful</span></span><br/>
            <span class="l">as the spiry lilac and the hya<span class="runover" style="left:10.8em">cinth</span></span><br/>
            <span class="l">stiff is the pear and nectron with<span class="runover" style="left:4.4em">the peach</span></span><br/>
            <span class="l">and apricot all these are stiff but<span class="runover" style="left:4.0em">in return</span></span><br/>
            <span class="l">Their flowers are beautiful So<span class="runover" style="left:2.4em">are birds and beasts</span></span><br/>
            <span class="l">As well as flowers Some are
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div><span class="runover" style="left:2.4em">wild and cruel</span></span><br/>
            <span class="l">Such is<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE12VERBCASE" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span> the tiger panther lynx<span class="runover" style="left:2.8em">and ounce</span></span><br/>
            <span class="l">So also in return these animals</span><br/>
            <span class="l">Are pretty in the other sort the best<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE14THEBEST" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span></span><br/>
            <span class="l">Some dog&#x02BC;s<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE15APOSTROPHE" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span> are ugly but conceal within</span><br/>
            <span class="l">Some godd<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE16GODD" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                14
                </span>
              </a></span> intentions good ideas good
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div><span class="runover" style="left:4.0em">thoughts</span></span><br/>
            <span class="l">But spring there is one <div 
              class="add-above" 
              style="left:9.2em">tree</div> that thou<span class="runover" style="left:3.2em">bring&#x02BC;st forth</span></span><br/>
            <div id="1229186v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>65</div><br/> 
            <span class="l">That is more beautiful than all<span class="runover" style="left:3.2em">the others</span></span><br/>
            <span class="l">This is the apple blossom.<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE19PERIOD" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                15
                </span>
              </a></span> O how<span class="runover" style="left:4.0em">sweet</span></span><br/>
            <span class="l">Is that fine tree and so I end</span><br/>
            
         </div>
         
      </div>
   </div><br/><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Wales&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="page-title"><span class="caps">Wales</span></div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That rock with waving
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div><span class="runover" style="left:3.6em">willows on its side</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>that hill with beauteous<span class="runover" style="left:3.2em">forests on its top</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That stream that with its rippling<span class="runover" style="left:4.4em">waves doth glide</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>and oh what beauties has that<span class="runover" style="left:3.6em">mountain got<span class="gloss-inline">
          <a href="../glosses/wales_glosses_contextual.php#LINE4STANZABREAK" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                16
                </span>
              </a></span></span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That rock stands high</span><br/>
            <span class="l">against,<span class="gloss-inline">
          <a href="../glosses/wales_glosses_contextual.php#LINE6COMMA" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                17
                </span>
              </a></span> the sky
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>those trees stand firm upon<span class="runover" style="left:4.4em">the rock</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>and seem as if they all<span class="runover" style="left:3.6em">did lock</span></span><br/>
            <div id="1229186r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:2.4em"> </span>65</div><br/>                       
            <span class="l">into each other.<span class="gloss-inline">
          <a href="../glosses/wales_glosses_contextual.php#LINE9SEMICOLON" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                18
                </span>
              </a></span> tall they stand</span><br/>
            <span class="l">towering above the whitened land</span><br/>
            
         </div>
         
      </div>
   </div><div class="half"></div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;The Hill of Kinnoul&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="page-title">The hill of kinnoul</div>
         
         <div class="lg-stanza">
            <span class="l">First winding round the base of
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div><span class="runover" style="left:2.8em"><span class="geogName-KINNOULLHL">that smooth rock</span></span></span><br/>
            <span class="l">Flows the glass <span class="geogName-TAYRIV">tay</span> not always<span class="runover" style="left:2.4em">quite so smooth</span></span><br/>
            <span class="l">as that clear substance. from the<span class="runover" style="left:2.8em">surface rises</span></span><br/>
            <span class="l"><span class="geogName-KINNOULLHL">a steep rock</span> and towering oer<span class="runover" style="left:8.8em">its head</span></span><br/>
            <span class="l">appear the high topped trees<span class="runover" style="left:3.6em">above below</span></span><br/>
            <span class="l">green natures colour stands
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div><span class="runover" style="left:2.4em"><span class="geogName-KINNOULLHL">upon the rock</span></span></span><br/>
            <span class="l">and high above thy head<span class="runover" style="left:2.0em">appears the green of trees</span></span><br/>
            <span class="l">walk on the top of that <span class="geogName-KINNOULLHL">rock</span> and<span class="runover" style="left:3.2em">look down</span></span><br/>
            <span class="l">from thence upon the <span class="geogName-TAYRIV">tay</span> the<span class="runover" style="left:3.6em">precipice</span></span><br/>
            <div id="1229187v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>66</div><br/>
            <span class="l">tween thee and it doth make thee<span class="runover" style="left:10.8em">giddy</span></span><br/>
            <span class="l">it is so high that from
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div><span class="runover" style="left:2.8em">it seen the <span class="geogName-TAYRIV">tay</span></span></span><br/>
            <span class="l">appears like a little rivulet among<span class="runover" style="left:4.8em">the hills</span></span><br/>
            <span class="l">dwindling into nothing mong<span class="runover" style="left:3.2em"><span class="geogName-GRAMPIANS">the distant mountains</span></span></span><br/>
            
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;Glen of Glenfarg&#x201D; &#x005B;&#x201C;Glen of Glenfarg thy beauteous rill&#x201D;&#x005D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title"><span class="space" style="padding-left:2.4em"> </span>glen of glenfarg</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:1.2em"> </span><span class="caps">GL</span><span class="smallcaps">en</span> of <span class="geogName-GLENFARG">glenfarg</span> thy beaut<div 
          class="subst-del s-subst s-del" ><span class="unclear-EKF">ifu</span></div><div 
          class="s-subst s-add s-overwrite s-inline">eo</div><div 
          class="s-subst s-add s-inline">us</div><div 
              class="add-above" 
              style="left:12.0em"><span class="g-runover">&#x005B;</span>rill</div></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>Streaming through thy <span class="geogName-OCHILS">mountains</span><span class="runover" style="left:6.0em">high</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>onward pressing onward still
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>hardly seeing the blue sky</span><br/>
            
         </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>Mountain streams press on<span class="runover" style="left:4.0em">your way</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>and run into the stream<span class="runover" style="left:9.2em">below</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>never stop like idle clay</span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>hear the sheep and cattle low
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
            
         </div>
         <div class="quarter"></div>
         <div id="1229187r" class="pb"></div>
         <div class="pageNum-top"><span class="space" style="padding-left:2.8em"> </span>67</div><br/>
         
         <div class="lg-stanza">
            <span class="l">Stones that in the stream<span class="runover" style="left:9.2em">do lie</span></span><br/>
            <span class="l">bear the rushing torrent still</span><br/>
            <span class="l">thou shalt never never die</span><br/>
            <span class="l">submit unto the almightys will</span><br/>
            
         </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Cows that lie upon the grass
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
            <span class="l">rise and graze upon the <span class="geogName-OCHILS">hills</span></span><br/>
            <span class="l">never be a heavy mass</span><br/>
            <span class="l">like a stone thats in the rills</span><br/>
            
         </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Sheep that eat upon the <span class="geogName-OCHILS">hills</span></span><br/>
            <span class="l">rise and play and jump about
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div></span><br/>
            <span class="l">drink out of the running rills</span><br/>
            <span class="l">and always on the grass be out</span><br/>
            
         </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Cottages upon the <span class="geogName-GLENFARG">plain</span></span><br/>
            <span class="l">placed so near the floury mills</span><br/>
            <span class="l">cottager look on <span class="name--CHARLESSWAIN">charles&#x02BC;s wain</span><span class="gloss-inline">
          <a href="../glosses/glen_of_glenfarg_glosses_contextual.php#CHARLESSWAINGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                19
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div></span><br/>
            <span class="l">right above the grassy hills</span><br/>
            
         </div>
         <div class="quarter"></div>
         <span class="space" style="padding-left:2.0em"> </span><span class="note-gloss-MR"><span class="date-1826-09">Sep<sup>t</sup>. 1826</span><span class="gloss-inline">
          <a href="../glosses/glen_of_glenfarg_glosses_contextual.php#SEPTEMBER1826GLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                20
                </span>
              </a></span></span>
         <div id="1229188v" class="pb"></div>
         <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>68</div><br/>
         
         <div class="lg-stanza">
            <span class="l">The <span class="placeName-NORTHSTAR">pole star</span> guides thee<span class="runover" style="left:3.2em">on thy way</span></span><br/>
            <span class="l">when in dark nights thou art</span><br/>
            <span class="l">therefore look up at the starry<span class="runover" style="left:10.4em">day</span></span><br/>
            <span class="l">look at the stars about thee
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div><span class="runover" style="left:10.4em">tost</span></span><br/>
            
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;The Sea&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title"><span class="space" style="padding-left:2.8em"> </span>The sea</div>
         <br/>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">F</span><span class="smallcaps">low</span> on thou calm sea bear the ships to their<span class="runover" style="left:16.8em">ports</span></span><br/>
            <span class="l">man of war<span class="gloss-inline">
          <a href="../glosses/the_sea_glosses_contextual.php#MANOFWARGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                21
                </span>
              </a></span> smack<span class="gloss-inline">
          <a href="../glosses/the_sea_glosses_contextual.php#SMACKGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                22
                </span>
              </a></span> or sloop<span class="gloss-inline">
          <a href="../glosses/the_sea_glosses_contextual.php#SLOOPGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                23
                </span>
              </a></span> all the different<span class="runover" style="left:16.8em">sorts</span></span><br/>
            <span class="l">do not throw them on rocks do not send them on<span class="runover" style="left:16.8em">high</span></span><br/>
            <span class="l">or make them upon the high precipice lie</span><br/>
            <span class="l">no profit to thee doth this havoc produce
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div></span><br/>
            <span class="l">while to men this great treasure&#x02BC;s of<span class="runover" style="left:4.8em">infinite use</span></span><br/>
            <span class="l">for money is generally aboard these<span class="runover" style="left:4.0em">fine ships</span></span><br/>
            <span class="l">that go over the ocean into which<span class="runover" style="left:4.8em">their flag dips<span class="gloss-inline">
          <a href="../glosses/the_sea_glosses_textual.php#LINE8APOSTROPHE" target="_blank" class="inactive">
          

                <span class="gloss-textual">
                b
                </span>

              </a></span></span></span><br/>
            
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;The Storm&#x201D; &#x005B;Version A&#x005D;</span></div><div id="1229188r" class="pb"></div><div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>69</div><br/>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title"><span class="space" style="padding-left:2.8em"> </span>The storm</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">S</span><span class="smallcaps">ee</span> the collecting clouds upon the hill</span><br/>
            <span class="l">See the collecting roughness of the rill
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div></span><br/>
            <span class="l">Hark to the wind it howls among the<br/><span class="space" style="padding-left:12.4em"> </span>trees</span><br/>
            <span class="l">And the high rising wind the pigs<div 
              class="add-above" 
              style="left:12.0em">x</div> do see</span><br/>
            <span class="l">See from the skies the shower of<br/><span class="space" style="padding-left:10.0em"> </span>pelting snow</span><br/>
            <span class="l">And hear how much the sheep and cattle<br/><span class="space" style="padding-left:12.4em"> </span>low</span><br/>
            <span class="l">From the dark cloud a flash of lightning<br/><span class="space" style="padding-left:13.6em"> </span>plays
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L115" id="L115">115</a></div></span><br/>
            <span class="l">And down upon the ground a woman<br/><span class="space" style="padding-left:10.8em"> </span>lies</span><br/>
            <span class="l">Struck by the lightnings flash the<br/><span class="space" style="padding-left:3.2em"> </span>thunder follows fast</span><br/>
            <span class="l">With fury from the skies the light<br/><span class="space" style="padding-left:1.6em"> </span><span class="add"><span class="metamark-unclear">bad</span></span><span class="space" style="padding-left:3.2em"> </span>nings cast<span class="gloss-inline">
          <a href="../glosses/the_storm_a_glosses_textual.php#BAD" target="_blank" class="inactive">
          

                <span class="gloss-textual">
                c
                </span>

              </a></span></span><br/>
            
         </div>
         
      </div>
   </div><div class="half"></div><div id="" class="pb"></div>
   <div class="fileName"><span>&#x201C;The Storm&#x201D; &#x005B;Version B&#x005D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">S</span><span class="smallcaps">ee</span> how from yonder hills the clouds<span class="runover" style="left:11.6em">collect</span></span><br/>
            <span class="l">And see how dark and dreary they do
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L120" id="L120">120</a></div><span class="runover" style="left:12.0em">look</span></span><br/>
            <span class="l">Promising hail and snow the birds<span class="runover" style="left:11.6em">retire</span></span><br/>
            <span class="l">Into their nests and chirp and scream</span><br/>
            <span class="l">Prophesying the coming storm down<span class="runover" style="left:4.4em">pours the snow</span></span><br/>
            <span class="l">Covering the hedges and the<span class="runover" style="left:3.6em">houses tops</span></span><br/>
            <div id="1229189v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:2.8em"> </span>70</div><br/>                        
            <span class="l">Loud howls the wind and
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L125" id="L125">125</a></div><span class="runover" style="left:1.6em">whistling roots up many a tree</span></span><br/>
            <span class="l">The sheep bleat loudly and the<span class="runover" style="left:9.2em">careful dog</span></span><br/>
            <span class="l">Collecting them in a flock conducts<span class="runover" style="left:5.2em">them home</span></span><br/>
            <span class="l">Then when the storm is over<span class="runover" style="left:2.0em">from the clouds</span></span><br/>
            <span class="l">Peeps forth the sun and shining<span class="runover" style="left:2.0em">on the snow</span></span><br/>
            <span class="l">Gives it that dazzling whiteness
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L130" id="L130">130</a></div><span class="runover" style="left:4.4em">to the eye</span></span><br/>
            <span class="l">In which its principle beauty<span class="runover" style="left:2.8em">doth consist</span></span><br/>
            <span class="l">And so in beginning another<span class="runover" style="left:3.2em">line I end</span></span><br/>
            
         </div>
         
      </div>
   </div><br/><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
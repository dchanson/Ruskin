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
“The Constellations: Northern, Some of the Zodiac, and Some of the Southern”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
MSIAsheet161.jpg MSIAsheet162-163.jpg MSIAsheet164.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Constellations: Northern, Some of the Zodiac, and Some of the Southern”</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIAsheet161" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l"><span class="name--CEPHEUSCONSTELLATION">cepheus</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#CEPHEUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> and <span class="name--BOOTES">bootes</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#BOOTESGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> now</span><br/>
            <span class="l">after that the <span class="name--APUS">swallow</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#APUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_textual#SWALLOWTEXTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l"><span class="name--MONSMAENALUS">maenalus mountain</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#MONSMAENALUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> next</span><br/>
            <span class="l">after that the furious <span class="name--LYNX">lynx</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#LYNXGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_textual#LYNXTEXTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">high up there is <span class="name--SCORPIO">scorpio</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#SCORPIOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">after <div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >that</div><div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:2.4em">it</div> king <span class="name--LEO">leo</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#LEOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span></span><br/>
            <span class="l">the <span class="name--CAMELOPARDALIS">cameleopard</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#CAMELOPARDALISGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> appeareth high</span><br/>
            <span class="l">next to it the little <span class="name--MUSCA">fly</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#MUSCAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span></span><br/>
            <span class="l">the <span class="name--SERPENS">serpent</span> <span class="del-strikethrough">serpent</span> <span class="name--OPHIUCHUS">serpent <span class="runover" style="left:4.0em">bearer</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#SERPENSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                10
                </span>
              </a></span> then<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_textual#SERPENSTEXTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l">next to it the butting <span class="name--ARIES">ram</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#ARIESGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l"><span class="name--SCUTUM">sobieskis shield</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#SCUTUMGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span> up there</span><br/>
            <span class="l">after it the <span class="name--AURIGA">charioteer</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#AURIGAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span></span><br/>
            <span class="l">the <span class="name--TAURUSPONIATOWSKI">bull of poniatowski</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#TAURUSPONIATOWSKIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                14
                </span>
              </a></span><span class="runover" style="left:8.4em">then</span></span><br/>
            <span class="l"><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >then</div><div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:1.2em">next</div> the very pretty<span class="runover" style="left:5.2em"><span class="name--GRUS">crane</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#GRUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                15
                </span>
              </a></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_textual#GRUSTEXTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span></span><br/>
            <span class="l"><span class="name--ANTINOUSCONSTELLATION">antinous</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#ANTINOUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                16
                </span>
              </a></span> and <span class="name--SAGITTA">arrow</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#SAGITTAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                17
                </span>
              </a></span> soon
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">after it<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_textual#DOWNTEXTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span> the <span class="name--CORONAAUSTRALIS">southern crown</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#CORONAAUSTRALISGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                18
                </span>
              </a></span></span><br/>
            <span class="l">the <span class="name--DELPHINUS">dolphin</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#DELPHINUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                19
                </span>
              </a></span> swimming<span class="runover" style="left:3.2em">through the air</span></span><br/>
            <span class="l">next to it the <span class="name--ARA">altar</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#ARAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                20
                </span>
              </a></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_textual#GODSFIREGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span></span><br/>
            <div id="MSIAsheet162" class="pb"></div>
            <span class="l">the <span class="name--CANESVENATICI">hounds</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#CANESVENATICIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                21
                </span>
              </a></span> the <span class="name--TAURUS">bull</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#TAURUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                22
                </span>
              </a></span> are<span class="runover" style="left:2.8em">seen up there</span></span><br/>
            <span class="l">after it the <span class="name--ANTLIA">pump of
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div><span class="runover" style="left:7.2em">air</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#ANTLIAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                23
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">the <span class="name--LEOMINOR">lesser lion</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#LEOMINORGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                24
                </span>
              </a></span> next we<span class="runover" style="left:8.0em">see</span></span><br/>
            <span class="l">next to it the armed <span class="name--MUSCAAUSTRALIS">bee</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#MUSCAAUSTRALISGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                25
                </span>
              </a></span></span><br/>
            <span class="l"><span class="name--PERSEUSCONSTELLATION">perseus</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#PERSEUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                26
                </span>
              </a></span> <span class="name--PEGASUSCONSTELLATION">pegasus</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#PEGASUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                27
                </span>
              </a></span> then</span><br/>
            <span class="l">after it the <span class="name--CHAMAELEON">chamelion</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#CHAMAELEONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                28
                </span>
              </a></span></span><br/>
            <span class="l"><span class="name--ANDROMEDACONSTELLATION">andromeda</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#ANDROMEDAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                29
                </span>
              </a></span> is seen on high
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">then <span class="del-strikethrough">then</span> the <span class="name--VIRGO">virgin</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#VIRGOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                30
                </span>
              </a></span> in<span class="runover" style="left:7.2em">the sky</span></span><br/>
            <span class="l">ten starred <span class="name--TRIANGULUM">triangle</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#TRIANGULUMGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                31
                </span>
              </a></span> doth appear</span><br/>
            <span class="l">the horn <span class="del-strikethrough">the horn</span> the<span class="runover" style="left:2.8em"><span class="name--MONOCEROS">unicorn</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#MONOCEROSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                32
                </span>
              </a></span> doth bear</span></span><br/>
            <span class="l">shining in golden light heʼs<span class="runover" style="left:9.6em">drest</span></span><br/>
            <span class="l">with a horn instead of
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div><span class="runover" style="left:2.8em">a towering crest</span></span><br/>
            <span class="l">the <span class="name--LIBRA">scales</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#LIBRAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                33
                </span>
              </a></span> that nothing<span class="runover" style="left:2.4em">to weigh would bear</span></span><br/>
            <span class="l">but yet contain a thous<span class="runover" style="left:6.8em">and more</span></span><br/>
            <span class="l">farther than that I<span class="runover" style="left:2.0em">could not say</span></span><br/>
            <div id="MSIAsheet163" class="pb"></div>
            <span class="l">more than the <div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >lofty</div><div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:5.2em">beautiful</div><span class="runover" style="left:2.0em">milky way</span></span><br/>
            <span class="l">the <span class="name--SAGITTARIUS">archer</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#SAGITTARIUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                34
                </span>
              </a></span> with his
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div><span class="runover" style="left:2.4em">flying dart</span></span><br/>
            <span class="l">I should not think<span class="runover" style="left:0.8em">it would pierce<span class="runover" style="left:1.6em">the heart</span></span><br/>
            <span class="l">the <span class="name--CANCER">crab</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#CANCERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                35
                </span>
              </a></span> and the <span class="name--GEMINI">twins</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#GEMINIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                36
                </span>
              </a></span><span class="runover" style="left:1.2em">with their clothes of fire</span></span><br/>
            <span class="l">I wish I had not observ<span class="runover" style="left:8.0em">ed <span class="runover" style="left:2.4em">the <span class="name--LYRA">lyre</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#LEPUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                37
                </span>
              </a></span></span></span><br/>
            <span class="l">the <span class="name--TRIANGULUMMINUS">little triangle</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#TRIANGULUMMINUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                38
                </span>
              </a></span><span class="runover" style="left:2.0em">apears  on high</span></span><br/>
            <span class="l">and the <span class="name--CAPRICORNUS">goat</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#CAPRICORNUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                39
                </span>
              </a></span> that
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div><span class="runover" style="left:0.8em">is formed in the
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div><span class="runover" style="left:2.4em">arched sky<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#ARCHEDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                40
                </span>
              </a></span></span></span><br/>
            </div>
         
         
         <div class="floating-text">
            
            <div>
               
               <div class="p">I end end</div>
               </div>
            </div>
         
         <div id="MSIAsheet164" class="pb"></div>
         
         
         <div class="floating-text">
            
            <div>
               
               <div class="p"><span class="doubleletter-fill"><span class="caps">ABC</span></span></div>
               </div>
            </div>
         
         
         <div class="lg-stanza">
            <span class="l">bright these stars are, beauteous gold</span><br/>
            <span class="l">but let history unfold</span><br/>
            <span class="l">her page of learning let<span class="runover" style="left:7.6em">us see</span></span><br/>
            <span class="l">whether that is not more<span class="runover" style="left:3.2em">bright than thee</span></span><br/>
            <span class="l">een thou o beauteous <span class="name--MERCURY">mercyry</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/constellations_glosses_contextual#MERCURYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                41
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">much better than the brightest star<span class="runover" style="left:3.6em">star</span></span><br/>
            <span class="l">virtue I will say you<span class="runover" style="left:8.0em">are</span></span><br/>
            <span class="l">better than history indeed</span><br/>
            <span class="l">virtue you <span class="del-strikethrough">shall</span><div 
              class="add-below" 
              style="left:4.8em">should</div> have<span class="runover" style="left:3.2em">the lead</span></span><br/>
            </div>
         </div>
   </div>
   <div>
      
      <div class="p">I end end</div>
      </div>
   <div>
      
      <div class="p"><span class="doubleletter-fill"><span class="caps">ABC</span></span></div>
      </div>
   <div>
      
      <div class="p">I end I end</div>
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
"The Constellations"
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url(""); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>"The Constellations"</span></div>
   <div class="poem" id="">
      
      <div class="page-title"><span class="space" style="padding-left:2.8em"> </span><span class="caps">THE CONSTELLATIONS<br/><span class="space" style="padding-left:1.6em"> </span>NORTHERN, SOME OF THE ZODIAC AND<br/><span class="space" style="padding-left:1.6em"> </span>SOME OF THE SOUTHERN</span></div>
      
      <div class="lg-stanza">
         <span class="l"><span class="caps">DOST</span> thou see proud <span class="name--VENUSPLANET">venus</span> there</span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">G</span></span>littering in the evening air<span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#VENUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
         <div id="1229164" class="pb"></div>
         <div class="pageNum-top">22</div><br/>
         <span class="l">The belt of <span class="name--ORION">orion</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#ORIONGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> beside it is seen</span><br/>
         <span class="l">A glorious sight for all sky loving men</span><br/>
         <span class="l"><span class="add">5</span><span class="doubleletter-fill"><span class="caps">A</span></span>nd then red <span class="name--MARS">mars</span> appeareth high
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
         <span class="l">On his throne upon the sky<span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#MARSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">T</span></span>hen the <span class="name--URSAMAJOR">greater bear</span> is seen</span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">T</span></span>hen <span class="name--CHARLESSWAIN">charles&#x02BC;s wain</span> with his bright team<span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CHARLESSWAINGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">N</span></span>ext the <span class="name--DRACO">dragon</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#DRACOGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> doth appear</span><br/>
         <span class="l"><span class="add">10</span><span class="doubleletter-fill"><span class="caps">N</span></span>ext <span class="name--COMABERENICES">berenices golden hair</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#BERENICESHAIRGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
         <span class="l">After that the <span class="name--CORONABOREALIS">northern crown</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CORONABOREALISGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span></span><br/>
         <span class="l">Then the very fiery <span class="name--CYGNUS">swan</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CYGNUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span></span><br/>
         <span class="l">Next comes starry <span class="name--CHARLESSHEART">charles</span>&#x02BC;s heart<span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CHARLESSHEARTGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span></span><br/>
         <span class="l">After that the <span class="name--TELESCOPIUM">telescope</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#TELESCOPIUMGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                10
                </span>
              </a></span></span><br/>
         <span class="l"><span class="add">15</span>Next doth come the <span class="name--EQUULEUS">little horse</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#EQUULEUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
         <span class="l">After that the stupid <span class="name--ANSER">goose</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#ANSERGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span></span><br/>
         <span class="l">Then the very timid <span class="name--LEPUS">hare</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#LEPUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span></span><br/>
         <span class="l">After that the <span class="name--URSAMINOR">lesser bear</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#URSAMINORGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                14
                </span>
              </a></span></span><br/>
         <span class="l">Then doth come the cunning <span class="name--VULPECULA">fox</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#VULPECULAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                15
                </span>
              </a></span></span><br/>
         <span class="l"><span class="add">20</span>Then appears the blessed <span class="name--CRUX">cross</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CRUXGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                16
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
         <span class="l">Then we see great <span class="name--CHARLESSOAK">charles&#x02BC;s oak</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CHARLESSOAK" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                17
                </span>
              </a></span></span><br/>
         <span class="l">Next I&#x02BC;ll call it <span class="name--CRATER">juno&#x02BC;s cup</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CRATERGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                18
                </span>
              </a></span></span><br/>
         <span class="l"><span class="name--HERCULESCONSTELLATION">Hercules</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#HERCULESGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                19
                </span>
              </a></span> appeareth high</span><br/>
         <span class="l">Next <span class="name--CERBERUS">cerberus</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CERBERUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                20
                </span>
              </a></span> in the sky</span><br/>
         <div id="1229165" class="pb"></div>
         <div class="pageNum-top">23</div><br/>
         <span class="l"><span class="add">25</span>The <span class="name--LACERTA">lizard</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#LACERTAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                21
                </span>
              </a></span> next to them appears
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
         <span class="l">High the pouncing <span class="name--AQUILA">eagle</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#AQUILAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                22
                </span>
              </a></span> soars</span><br/>
         <span class="l"><span class="name--CEPHEUS"><span class="doubleletter-fill"><span class="caps">C</span></span>epheus</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CEPHEUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                23
                </span>
              </a></span> and <span class="name--BOOTES">bootes</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#BOOTESGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                24
                </span>
              </a></span> now</span><br/>
         <span class="l">After that sweet <span class="name--HIRUNDO">hirundo</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#HIRUNDOGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                25
                </span>
              </a></span></span><br/>
         <span class="l"><span class="name--MONSMAENALUS">Maenalus mountain</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#MONSMAENALUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                26
                </span>
              </a></span> next</span><br/>
         <span class="l"><span class="add">30</span>Then the furious keen&#x2010;eyed <span class="name--LYNX">lynx</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#LYNXGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                27
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
         <span class="l">High up there is <span class="name--SCORPIO">scorpio</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#SCORPIOGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                28
                </span>
              </a></span></span><br/>
         <span class="l">After that the generous <span class="name--LEO">leo</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#LEOGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                29
                </span>
              </a></span></span><br/>
         <span class="l">The <span class="name--CAMELOPARDALIS">cameleopard</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CAMELOPARDALISGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                30
                </span>
              </a></span> appeareth high</span><br/>
         <span class="l">Next to it the little <span class="name--MUSCA">fly</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#MUSCAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                31
                </span>
              </a></span></span><br/>
         <span class="l"><span class="add">35</span>The <span class="name--SERPENS">serpent</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#SERPENSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                32
                </span>
              </a></span> <span class="name--OPHUCHUS">serpent bearer</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#OPHIUCHUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                33
                </span>
              </a></span> then
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
         <span class="l">Next to it the butting <span class="name--ARIES">ram</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#ARIESGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                34
                </span>
              </a></span></span><br/>
         <span class="l"><span class="name--CLYPEUSSOBIESKI">Sobieski&#x02BC;s shield</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CLYPEUSSOBIESKIGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                35
                </span>
              </a></span> up there</span><br/>
         <span class="l">After it the <span class="name--AURIGA">charioteer</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#AURIGAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                36
                </span>
              </a></span></span><br/>
         <span class="l">The <span class="name--TAURUSPONIATOWSKI">bull of poniatowski</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#TAURUSPONIATOWSKIGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                37
                </span>
              </a></span> then</span><br/>
         <span class="l"><span class="add">40</span>Next the very longbilled <span class="name--GRUS">crane</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#GRUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                38
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
         <span class="l"><span class="name--ANTINOUSCONSTELLATION">Antinous</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#ANTINOUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                39
                </span>
              </a></span> and <span class="name--SAGITTA">arrow</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#SAGITTAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                40
                </span>
              </a></span> down</span><br/>
         <span class="l">far below the <span class="name--CORONAAUSTRALIS">southern crown</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CORONAAUSTRALIS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                41
                </span>
              </a></span></span><br/>
         <span class="l">THe <span class="name--DELPHINUS">dolphin</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#DELPHINUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                42
                </span>
              </a></span> swimming through the air</span><br/>
         <div id="1229165" class="pb"></div>
         <div class="pageNum-top">24</div><br/>
         <span class="l">Next to it the gods fire <span class="name--ARA">altar</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#ARAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                43
                </span>
              </a></span></span><br/>
         <span class="l"><span class="add">45</span>The <span class="name--CANESVENATICI">hounds</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CANESVENATICIGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                44
                </span>
              </a></span> <div 
          class="subst-del s-subst s-del" >s</div><div 
          class="s-subst s-add s-overwrite s-inline">t</div>he bull<span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#TAURUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                45
                </span>
              </a></span> are seen up there
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
         <span class="l">Then doth come great <span class="name--NORMA">euclids square</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#NORMAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                46
                </span>
              </a></span></span><br/>
         <span class="l">The <span class="name--LEOMINOR">lesser lion</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#LEOMINORGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                47
                </span>
              </a></span> next we see</span><br/>
         <span class="l">Next to it the armed <span class="name--MUSCABOREALIS">bee</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#MUSCABOREALISGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                48
                </span>
              </a></span></span><br/>
         <span class="l"><span class="name--PERSEUS">Perseus</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#PERSEUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                49
                </span>
              </a></span> <span class="name--PEGASUS">pegasus</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#PEGASUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                50
                </span>
              </a></span> then</span><br/> 
         <span class="l"><span class="add">50</span>After it the <span class="name--CHAMAELEON">chamelion</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CHAMAELEONGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                51
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
         <span class="l"><span class="name--ANDROMEDA">Andromeda</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#ANDROMEDAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                52
                </span>
              </a></span> is seen on high</span><br/>
         <span class="l">Then the <span class="name--VIRGO">virgin</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#VIRGOGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                53
                </span>
              </a></span> in the sky</span><br/>
         <span class="l">Ten starred <span class="name--TRIANGULA">triangle</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#TRIANGULAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                54
                </span>
              </a></span> doth appear</span><br/>
         <span class="l">The horn the <span class="name--MONOCEROS">unicorn</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#MONOCEROSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                55
                </span>
              </a></span> doth bear</span><br/>
         <span class="l"><span class="add">55</span>Shining in golden light he&#x02BC;s drest
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
         <span class="l">With a horn instead of a towering crest</span><br/>
         <span class="l">The <span class="name--LIBRA">scales</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#LIBRAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                56
                </span>
              </a></span> in which twas vainly said</span><br/>
         <span class="l">The crimes and virtues of men <span class="runover" style="left:2.8em">were weighed</span></span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">T</span></span>he <span class="name--SAGITTARIUS">archer</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#SAGITTARIUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                57
                </span>
              </a></span> with his flying dart</span><br/>
         <span class="l"><span class="add">60</span>I should not think it would pierce the heart
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">T</span></span>he <span class="name--CANCER">crab</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CANCERGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                58
                </span>
              </a></span> and the <span class="name--GEMINI">twins</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#GEMINIGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                59
                </span>
              </a></span> with their clothes<span class="runover" style="left:4.0em">of fire</span></span><br/>
         <span class="l">After them doth come the <span class="name--LYRA">lyre3</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#LYRAGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                60
                </span>
              </a></span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#RUSKINNOTE2" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                61
                </span>
              </a></span></span><br/>
         <div id="1229166" class="pb"></div>
         <div class="pageNum-top">25</div><br/>
         <span class="l">The <span class="name--TRIANGULUMAUSTRALE">little triangle</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#TRIANGULUMAUSTRALEGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                62
                </span>
              </a></span> appears on high</span><br/>
         <span class="l"><div 
          class="subst-del s-subst s-del" >a</div><div 
          class="s-subst s-add s-inline"><span class="doubleletter-fill"><span class="caps">A</span></span></div>nd the <span class="name--CAPRICORN">goat</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#CAPRICORNUSGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                63
                </span>
              </a></span> that is formed in the arched sky</span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">B</span></span>ut oh that wonder of them all
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">W</span></span>hich <span class="name--MILKYWAY">milky way</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#MILKYWAYGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                64
                </span>
              </a></span> europeans call</span><br/>
         <span class="l">And which the ancients thought the road</span><br/>
         <span class="l">Which all their best and bravest trod</span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">U</span></span>nto great <span class="name--JUPITER">Jupiters</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#JUPITERGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                65
                </span>
              </a></span> blest abode</span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">B</span></span>right these stars are beauteous gold
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">B</span></span>ut let history unfold</span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">H</span></span>er page of learning let us see</span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">W</span></span>hether that is not more bright than thee</span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">E</span></span>en thou O beauteous <span class="name--MERCURY">mercury</span><span class="gloss-inline">
          <a href="../glosses/constellations_glosses_contextual.php#MERCURYGLOSS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                66
                </span>
              </a></span></span><br/>
         <span class="l"><span class="doubleletter-fill"><span class="caps">M</span></span>uch better than the brightest star
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
         <span class="l">Virtue I will say you are</span><br/>
         <span class="l">Better than knowledge yes indeed</span><br/>
         <span class="l">Virtue you should have the lead
                    </span><br/>
         
         
         </div>
      </div>
   <div class="drama" id="">
      
      <div class="page-title">Title of Drama</div>
      
      <div class="act" id="">
         <span class="head-act">Act I</span>
         
         Antony
         (pacing anxiously)
         <span class="l">I come to bury Caesar, not to praise him.</span><br/>
         
         </div>
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
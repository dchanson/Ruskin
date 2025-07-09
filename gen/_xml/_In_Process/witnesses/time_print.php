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
"Title of Work"
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"Title of Work"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">Swift</h1>
         
         <div class="lg-stanza">
            <span class="l">The sun, rejoicing in his <i> race;</i></span><br/>
            <span class="l">The <i>post,</i> whose tidings spurn delay</span><br/>
            <span class="l">The <i>ships,</i> that scud the watery space;</span><br/>
            <span class="l">The <i>eagle,</i> darting on his prey;</span><br/>
            <span class="l">The ebbing <i>tide,</i> that sinks away;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">The <i>meteor</i> flitting through the skies;</span><br/>
            <span class="l">The watchmanʼs <i>night,</i> the hirelingʼs day,</span><br/>
            <span class="l">Denote how time incessant flies.</span><br/>
            </div>
         </div>
   </div>
   <div class="poem" id="">
      
      <h1 class="page-title">Short</h1>
      
      <div class="lg-stanza">
         <span class="l">The <i>vapour,</i> vanishing in air;</span><br/>
         <span class="l">The withering <i>grass,</i>—the fading <i>flower;</i><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
         <span class="l">The <i>taperʼs</i> last expiring glare;</span><br/>
         <span class="l">The <i>vision</i> of a slumbering hour;</span><br/>
         <span class="l">The shepherdʼs <i>tent,</i> removed soon;</span><br/>
         <span class="l">The handbreadth, narrow‐bounded <i>span;</i></span><br/>
         <span class="l">The <i>cloud</i> exhaled; the waning <i>moon;</i><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
         <span class="l">Prefigure the short life of man.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">Uncertain</h1>
      
      <div class="lg-stanza">
         <span class="l"><i>To‐morrowʼs</i> vain fallacious boast;</span><br/>
         <span class="l">The <i>goods laid up</i> for many years;</span><br/>
         <span class="l">The <i>rich manʼs</i> late repenting ghost;</span><br/>
         <span class="l">The interchanging smiles and tears;
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
         <span class="l">The shifting wind; the restless wave;</span><br/>
         <span class="l">The <i>bridegroomʼs</i> voice; the <i>midnight</i> call;</span><br/>
         <span class="l">The <i>wings</i> of wealth; the heroʼs grave;</span><br/>
         <span class="l">Show Timeʼs events uncertain all.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">Unsubstantial</h1>
      
      <div class="lg-stanza">
         <span class="l">The <i>shadowʼs</i> unsubstantial form;
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
         <span class="l">The <i>garment, fretted</i> but the moth;</span><br/>
         <span class="l">The <i>house</i> that falls before the storm;</span><br/>
         <span class="l">An idle <i>tale;</i> a <i>cup</i> of wrath;</span><br/>
         <span class="l">The shrivellʼd <i>gourd,</i> oʼer Jonahʼs head;</span><br/>
         <span class="l">The insecure <i>polluted rest;</i><div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
         <span class="l">The <i>prodigal,</i> devoid of bread;</span><br/>
         <span class="l">Timeʼs gifts but vain and false attest.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">Important</h1>
      
      <div class="lg-stanza">
         <span class="l">Yet time is precious, more than gold,</span><br/>
         <span class="l">When wisdom numbers well the days;</span><br/>
         <span class="l">And this poor earthen vase may hold
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
         <span class="l">A treasure for eternal praise.</span><br/>
         <span class="l">A moment should not pass in vain;</span><br/>
         <span class="l">Time grows in worth as days decrease;</span><br/>
         <span class="l">For he shall life immortal gain,</span><br/>
         <span class="l">Who lives to God, and dies in peace.
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">1.</h1>
      
      <div class="lg-stanza">
         <span class="l">Eternity who can define?</span><br/>
         <span class="l">What mind can the vastness embrace?</span><br/>
         <span class="l">What spirit can measure the line</span><br/>
         <span class="l">Extending through infinite space?</span><br/>
         <span class="l">The fulness from mortals concealed,
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
         <span class="l">The word in due measure explains;</span><br/>
         <span class="l">Faith trusting the promise revealed,</span><br/>
         <span class="l">The substance invisible gains.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">2.</h1>
      
      <div class="lg-stanza">
         <span class="l">There dwells the Eternal in light,</span><br/>
         <span class="l">Who here is the penitentʼs guest;
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
         <span class="l">There angels rejoice in his sight,</span><br/>
         <span class="l">And spirits made perfect find rest.</span><br/>
         <span class="l">There reigns the Forerunner complete,</span><br/>
         <span class="l">Who mansions eternal prepares,</span><br/>
         <span class="l">For sinners redeemed and made meet,
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
         <span class="l">Of life everlasting the heirs.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">3.</h1>
      
      <div class="lg-stanza">
         <span class="l">Corruption can never destroy</span><br/>
         <span class="l">The durable treasures above;</span><br/>
         <span class="l">Defilement can never alloy</span><br/>
         <span class="l">The untainted pleasures they love.
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
         <span class="l">The crowns shall not fade that they wear,</span><br/>
         <span class="l">Nor harps on the willows be hung;</span><br/>
         <span class="l">The palms shall not wither they bear,</span><br/>
         <span class="l">Nor discord complain on the tongue.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">4.</h1>
      
      <div class="lg-stanza">
         <span class="l">No tempest shall darken the skies;
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
         <span class="l">No doubts shall perplex them again;</span><br/>
         <span class="l">All tears shall be wiped from their eyes,</span><br/>
         <span class="l">And banishʼd all sorrow and pain.</span><br/>
         <span class="l">No mourner bereaved shall there</span><br/>
         <span class="l">A spirit departed deplore,
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
         <span class="l">Nor bow with affliction and care,</span><br/>
         <span class="l">For anguish and death are no more.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">5.</h1>
      
      <div class="lg-stanza">
         <span class="l">Their sun shall not vanish below;</span><br/>
         <span class="l">Their knowledge no error degrade;</span><br/>
         <span class="l">Their peace like a river shall flow;
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
         <span class="l">No spot shall their purity shade.</span><br/>
         <span class="l">This world and its forms pass away;</span><br/>
         <span class="l">This sun shall in darkness descend;</span><br/>
         <span class="l">Here, nature and beings decay;‐‐‐</span><br/>
         <span class="l">Eternity never can end.
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">1.</h1>
      
      <div class="lg-stanza">
         <span class="l">A little <i>leaven</i> swells the mass around,</span><br/>
         <span class="l">In silence working where it hidden lies;</span><br/>
         <span class="l">A little <i>seed,</i> when buried in the ground,</span><br/>
         <span class="l">To some tall shrub or towering tree may rise;</span><br/>
         <span class="l">The little <i>cloud,</i> that like a hand was seen
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
         <span class="l">Spread oʼer the heavens, and pourʼd abundance down:</span><br/>
         <span class="l">Thus God confounds the proud by agents mean,</span><br/>
         <span class="l">And great results may humble efforts crown.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">2.</h1>
      
      <div class="lg-stanza">
         <span class="l">“Go forth,” the Saviour said “my servants, speed;</span><br/>
         <span class="l">As lambs among the wolves, I send you hence;
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div></span><br/>
         <span class="l">Nor purse, nor scrip, nor arts, nor arms ye need,</span><br/>
         <span class="l">I am your guide, your succour and defence.”</span><br/>
         <span class="l">Returning, lo! their joyful lips exclaim,</span><br/>
         <span class="l">“All nature, Lord, avows thy wondʼrous sway;</span><br/>
         <span class="l">Eʼen men and devils feel thy mighty name,
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div></span><br/>
         <span class="l">And quit, subjected, their determinʼd prey.”</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">3.</h1>
      
      <div class="lg-stanza">
         <span class="l">Nor rolling ages have unnervʼd the might</span><br/>
         <span class="l">Of soul‐subduing truth, the gospel word;</span><br/>
         <span class="l">The shades of death disperse before the light,</span><br/>
         <span class="l">And Satan flies before the spiritʼs sword.
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div></span><br/>
         <span class="l">Behold from far the banishʼd trophies brought,</span><br/>
         <span class="l">The hideous gods that heathen tribes reverʼd;</span><br/>
         <span class="l">Survey the change on savage regionss wrought,‐‐‐</span><br/>
         <span class="l">A new‐born nation, and new temples rearʼd.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">4.</h1>
      
      <div class="lg-stanza">
         <span class="l">What power can burst the bonds‐‐‐the rage repel,
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div></span><br/>
         <span class="l">That eastern superstition madly frames,</span><br/>
         <span class="l">Or disenchant the crafty Brahminʼs spell,</span><br/>
         <span class="l">And snatch the youthful widow from the flames.</span><br/>
         <span class="l">The subtle Chinese, the Tartarian rude,</span><br/>
         <span class="l">What arms can conquer, or what arts reclaim?
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div></span><br/>
         <span class="l">Those arms which polishʼd pagan Rome subduʼd,</span><br/>
         <span class="l">Those arts which brutish Otaheitans tame.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">5.</h1>
      
      <div class="lg-stanza">
         <span class="l">Here distant realms beneath one standard fight,</span><br/>
         <span class="l">Their hatred quitting in the common cause;</span><br/>
         <span class="l">Here jarring sects in one great work unite,
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L115" id="L115">115</a></div></span><br/>
         <span class="l">Each other cheering with unfeigned applause.</span><br/>
         <span class="l">The Prince rejected, now erects his throne;</span><br/>
         <span class="l">The man of sorrows glorious grace displays;</span><br/>
         <span class="l">And every kingdom shall their Saviour own,</span><br/>
         <span class="l">And every language shall express his praise.
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L120" id="L120">120</a></div></span><br/>
         <span class="l">Aliquis.</span><br/>
         </div>
      </div>
   <div class="poem" id="">
      
      <h1 class="page-title">Friendshipʼs Offering.</h1>
      
      <div class="lg-stanza">
         <span class="l">Written in an Annual Publication, presented to a Lady who had suffered much and long affliction.</span><br/>
         <span class="l">Reviewing timeʼs perennial flight,</span><br/>
         <span class="l">We mark some lonely hours,</span><br/>
         <span class="l">Like stars amidst a stormy night,
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L125" id="L125">125</a></div></span><br/>
         <span class="l">Or winter‐blooming flowers.</span><br/>
         <span class="l">Such as among the gloomy past,</span><br/>
         <span class="l">Your happiest days appear,</span><br/>
         <span class="l">Such‐‐‐but improving to the last,</span><br/>
         <span class="l">Be all in this new‐year!
            <div class="s-line-number s-line-number-auto">
               <div class="tooltip">
          System generated line number
        </div><a href="#L130" id="L130">130</a></div></span><br/>
         </div>
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
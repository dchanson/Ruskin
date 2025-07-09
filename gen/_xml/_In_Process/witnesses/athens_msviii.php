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
“Title of Work”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Title of Work”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="placeName-ATHENS">Athens</span></h1>
         <span class="lg-strophe">
            <span class="l">Thou muse who once from <u>fair</u> <span class="placeName-PARNASSUS">Parnassus</span> height</span><br/>
            <span class="l">Fanned agèd <span class="persName-HOMER">Homer</span> with thy plumy wings</span><br/>
            <span class="l"><u>Who</u> told of <span class="placeName-GREECE">Greece</span> and <span class="placeName-TROY">Trojas</span> ancient might</span><br/>
            <span class="l"><span class="del-strikethrough">And fierce <span class="persName-fictional-ACHILLES">Achilles</span> anger! Thou, that</span><div 
              class="add-below" 
              style="left:NaNem">‸</div> <div 
              class="add-above" 
              style="left:NaNem">O thou whose lyre all wild resounding</div> sings</span><br/>
            <span class="l">Of the war field where the broad banner flings
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Its folds oer many a corse of heroes slain</span><br/>
            <span class="l"><span class="del-strikethrough">Sing</span>Now sing once more of ancient Græcias kings</span><br/>
            <span class="l">Who fought against a haughty tyrants chain</span><br/>
            <span class="l">Take up thy lyre, awake its <div 
              class="add-below" 
              style="left:NaNem">‸</div><div 
              class="add-above" 
              style="left:NaNem">slumbring</div> voice again</span><br/></span>
         
         <span class="lg-strophe">
            <span class="head-strophe_number" id="">2</span>
            <span class="l"><div 
              class="add-above" 
              style="left:NaNem">Oer the <span class="unclear-CJL">wide</span> fi</div>
               <span class="delSpan--"></span>
                            O ancient <span class="placeName-ATHENS">Athens</span> thou who once didst reign
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Oer the wide fields of sea encircled <span class="placeName-GREECE">Greece</span></span><br/>
            <span class="l">Ruler of <span class="placeName-THEBES">Thebes</span> 
                            and rugged <span class="placeName-SPARTA">Spa</span></span><br/>
            </span>
         
         
         <div class="lg-stanza">    
            <span class="l">Oer the wide fields of sea encircled <span class="placeName-GREECE">Greece</span></span><br/>
            <span class="l">Oh ancient <span class="placeName-ATHENS">Athens</span> thou who once didst reign</span><br/>
            <span class="l">In gory war or olive bearing peace
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Ruler of <span class="placeName-THEBES">Thebes</span> and Rugged <span class="placeName-SPARTA">Sparta's</span> bane</span><br/>
            <span class="l">I sing thee now in a less noble strain</span><br/>
            <div id="" class="pb"></div>
            <span class="l">Than formerly when white haired HOMER gave</span><br/>
            <span class="l">His living lay at bright Apollo’s fane</span><br/>
            <span class="l">That sung the dirges of thy young and brave,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Who found at Trojas wide and sandy plain a grave</span><br/></div>
         
         <span class="lg-strophe">
            <span class="head-strophe_number" id="">3</span>
            <span class="l">Oh ruined Athens where thy glory now</span><br/>
            <span class="l">Ist hovering oer thy ruins stern and grey</span><br/>
            <span class="l">Thou who didst tear from Xerxes haughty brow</span><br/>
            <span class="l">The wreath that he so late had grasped of bay
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Spite of his golden crested stern array</span><br/>
            <span class="l">Where is thy glory that so dearly won</span><br/>
            <span class="l">And bought by blood upon that glorious day</span><br/>
            <span class="l">Where is thy might thy power thy grandeur gone</span><br/>
            <span class="l">Let their proud spirits tell who died at Marathon
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/></span>
         
         <span class="lg-strophe">
            <span class="head-strophe_number" id="">4</span>
            <span class="l">And art thou gone for ever  Oer the deep</span><br/>
            <span class="l">Echoes the voice of armies now no more</span><br/>
            <span class="l">Now only on the breezes sullen sweep</span><br/>
            <span class="l">The ocean which erst while those armies bore</span><br/>
            <span class="l">Pours forth its angry everlasting roar
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">As to the rocks the sounding waters glide</span><br/>
            <span class="l">Not now their billows blush with heroes gore</span><br/>
            <span class="l">Now only beats in briny foam the tide</span><br/>
            <span class="l">And snowy crests upon its wild waves ride</span><br/></span>
         
         <span class="lg-strophe">
            <span class="l">Oh ye wild winds that oer their watery grave
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">In hoarse, and hollow soundings onwards sweep</span><br/>
            <span class="l">Howl not so loudly oer their bosoms brave</span><br/>
            <span class="l">Break not their slumber, that entrancing sleep</span><br/>
            <span class="l">That waits the dead when pillowed on the deep</span><br/>
            <span class="l">They rest, lulled softly by the oceans sigh
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">The eagle circling round the seabeat steep</span><br/>
            <span class="l">May make the billows answer to its cry</span><br/>
            <span class="l">But wake not those below their foam who lie.</span><br/>
            
            <span class="l">O Persia they fell in fight with thee</span><br/>
            <span class="l">When first thy proud thy angry monarch came
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">And Xerxes led his gallies oer the sea</span><br/>
            <span class="l">To make the Grecian glory but a name</span><br/>
            <span class="l">Then was not Greece forgetful of her fame</span><br/>
            <span class="l">And first thou haughty one began thy woes</span><br/>
            <span class="l">When thy unnumbered armament in vain
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">Her heroes to their countrys battle fight arose [fight written above battle]</span><br/>
            <span class="l">And bent before  old Greca her humbled foes</span><br/></span>
         
         <span class="lg-strophe">
            <span class="head-strophe_number" id="">VI</span>
            <span class="l">Little the young and mighty Xerxes thought</span><br/>
            <span class="l">When first he counted all his myriads oer</span><br/>
            <span class="l">And scarcely told their sum, a time how short
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l">Should see him flying from the Grecian shore</span><br/>
            <span class="l">And him the same who once nor long before</span><br/>
            <span class="l">Had driven Scamander back unto his head</span><br/>
            <span class="l">And dried his channel now one galley bore</span><br/>
            <span class="l">His pride together with his power twas fled
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
            <span class="l">And where his pristine glory? With the dead</span><br/></span>
         <span class="lg-strophe">
            <span class="head-strophe_number" id="">VII</span>
            <span class="l">And such the force that Persias king could boast</span><br/>
            <span class="l">Ay thousands millions myriads indeed</span><br/>
            <span class="l">He might be proud who looked on such a host</span><br/>
            <span class="l">And marked them for his own his eager steed
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
            <span class="l">Pawing the ground impatient he might lead</span><br/>
            <span class="l">That sea of plumes to battle  They were doomed</span><br/>
            <span class="l">On deep Salamis ocean fields to bleed</span><br/>
            <span class="l">And in its yawning gulph to be entombed</span><br/>
            <span class="l">While the relentless wave above them boomed
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/></span>
         <span class="lg-strophe">
            <span class="head-strophe_number" id="">VIII</span>
            <span class="l">They came the plumes upon their helmets dancing</span><br/>
            <span class="l">Their young and eager monarch at their head</span><br/>
            <span class="l">Their golden armour in the sunbeams glancing</span><br/>
            <span class="l">A sea of bright translucent splendour shed</span><br/>
            <span class="l">And earth all trembling shook beneath their tread
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
            <span class="l">As when some gloomy vast and boundless deep</span><br/>
            <span class="l">Heaps wave on wave with all its murmurs dread</span><br/>
            <span class="l">Billow on billow with successive sweep</span><br/>
            <span class="l">So pressed the warriors on a plumy foaming sheet</span><br/></span>
         <span class="lg-strophe">
            <span class="head-strophe_number" id="">IX</span>
            <span class="l">They past, but on their track behind them prest
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
            <span class="l">Riding upon the swift wings of the gale</span><br/>
            <span class="l">The demon desolation  Horrid guest</span><br/>
            <span class="l">Attending wars red footsteps. Famine pale</span><br/>
            <span class="l">Did follow. Shrouded in his cloudy veil</span><br/>
            <span class="l">Death like some lurking monster glaring down
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div></span><br/>
            <span class="l">All in his fiery chariot seemed to sail</span><br/>
            <span class="l">And night back trembling started at the frown</span><br/>
            <span class="l">That marked his bony brow, seared by his lightning crown</span><br/></span>
         <span class="lg-strophe">
            X
            <span class="l">And is it thus that pomp and pageantry</span><br/>
            <span class="l">Must leave behind them such a gloomy train
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div></span><br/>
            <span class="l">And must it be that purple luxury</span><br/>
            <span class="l">And royal grandeur shall be all in vain</span><br/>
            <span class="l">Is this that kingly pomp  But neer again</span><br/>
            <span class="l">Shall Xerxes lead those legions  He shall mourn</span><br/>
            <span class="l">The time for ever past with grief and shame
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div></span><br/>
            <span class="l">All oer the lonely deep from Graecia borne</span><br/>
            <span class="l">And like an exile king unpitied and forlorn</span><br/></span>
         
         <div class="lg-stanza">
            XI
            <span class="l">But leave my muse this melancholy lay</span><br/>
            <span class="l">Full soon shalt thou resume the mournful knell</span><br/>
            <span class="l">Alas too quickly comes the blood stained day
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div></span><br/>
            <span class="l">That weeps for heroes dead But take thy shell</span><br/>
            <span class="l">And all in softer mellower numbers tell</span><br/>
            <span class="l">Till flinty rocks shall list the flowing strain</span><br/>
            <span class="l">What forces Xerxes led what heroes fell</span><br/>
            <span class="l">Those chieftains birth and eke from whence they came
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div></span><br/>
            <span class="l">Their fathers ancient deeds their lineage and their name</span><br/></div>
         <span class="lg-strophe">
            XII
            <span class="l">And first thou young Hydaspes3  What although</span><br/>
            <span class="l">Thy parents came not of a kingly line</span><br/>
            <span class="l">For oh a long futurity shall show</span><br/>
            <span class="l">That natures proud nobility was thine
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L115" id="L115">115</a></div></span><br/>
            <span class="l">And not ancestral honours drowned in time</span><br/>
            <span class="l">A mighty mind as innocent as pure</span><br/>
            <span class="l">That through the mists of lowliness would shine</span><br/>
            <span class="l">Humble not abject, rich although obscure</span><br/>
            <span class="l">He had a virtuous mind the riches of the poor4
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L120" id="L120">120</a></div></span><br/></span>
         <span class="lg-strophe">
            XIII
            <span class="l">He had a brother.5 They were kindred souls</span><br/>
            <span class="l">For they were twins in age and mind the same</span><br/>
            <span class="l">And where the wave of bright Hydaspes rolls</span><br/>
            <span class="l">The Indian stream that gave to him his name</span><br/>
            <span class="l">They learned the tigers savageness to tame
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L125" id="L125">125</a></div></span><br/>
            <span class="l">Or the dread hooded serpents folds to press</span><br/>
            <span class="l">When hissed her head on high with eyes of flame</span><br/>
            <span class="l">And as before them fled the lioness</span><br/>
            <span class="l">Fearless and scatheless walked the wilderness</span><br/></span>
         <span class="lg-strophe">
            XIV
            <span class="l">And they had trod the stormy mountains ridge
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L130" id="L130">130</a></div></span><br/>
            <span class="l">To all the tribes of man a mighty bar</span><br/>
            <span class="l">Or on the cliffs upraised and giddy edge</span><br/>
            <span class="l">Looked down triumphant on the scene afar</span><br/>
            <span class="l">Where the proud battlements of many a scar</span><br/>
            <span class="l">Confusedly rising round them clove the sky
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L135" id="L135">135</a></div></span><br/>
            <span class="l">Where nature seemed to wage a mountain war</span><br/>
            <span class="l">Long time they often lingered upon high</span><br/>
            <span class="l">Where the snow wreaths hung round eternally</span><br/></span>
         <span class="lg-strophe">
            XV
            <span class="l">And hordes they led as swift as is the breeze</span><br/>
            <span class="l">That flies across the oceans foam so light
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L140" id="L140">140</a></div></span><br/>
            <span class="l">Or as the mountain elk that challenges</span><br/>
            <span class="l">The Scythian arrow to outstrip his flight</span><br/>
            <span class="l">But firm and slow retreating from the fight</span><br/>
            <span class="l">Strong as their native lion bathed in gore</span><br/>
            <span class="l">Pawing the earth exulting in his might
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L145" id="L145">145</a></div></span><br/>
            <span class="l">And the wide forest echoing to his roar</span><br/>
            <span class="l">Like sound of winter waves that bellow on the shore</span><br/></span>
         <span class="lg-strophe">
            XVI
            <span class="l">And he the born upon the battle field</span><br/>
            <span class="l">Young Moriartes6 who upon a heap</span><br/>
            <span class="l">Of gory corses on a warriors shield
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L150" id="L150">150</a></div></span><br/>
            <span class="l">Resting while war was raging round did sleep</span><br/>
            <span class="l">High pillowed on the crest of that famed steep</span><br/>
            <span class="l">That looks on Marathon with infant eye</span><br/>
            <span class="l">Saw the rude tide of battle onwards sweep</span><br/>
            <span class="l">As on the rugged mountain he did lie
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L155" id="L155">155</a></div></span><br/>
            <span class="l">And born in Greece in Greece was doomed to die</span><br/></span>
         <span class="lg-strophe">
            XVII
            <span class="l">(O Marathon thou field of victory</span><br/>
            <span class="l">If ever Greece should cease to be a slave</span><br/>
            <span class="l">Let her look back to ancient deeds and sigh</span><br/>
            <span class="l">For loss of glory which her fathers gave
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L160" id="L160">160</a></div></span><br/>
            <span class="l">Bought with their noble lives or will her brave</span><br/>
            <span class="l">Burst from the fetters of the narrow bed</span><br/>
            <span class="l">Breaking the sods which clasp their gory grave</span><br/>
            <span class="l">And tell old Greece that they for her have bled</span><br/>
            <span class="l">And deep reproaching her forgetful of the dead7
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L165" id="L165">165</a></div></span><br/></span>
         <span class="lg-strophe">
            XVIII
            <span class="l">Oh if this sad and simple lay of mine</span><br/>
            <span class="l">Could give thee down unto posterity</span><br/>
            <span class="l">Thou should’st have ridden on the wings of time</span><br/>
            <span class="l">And only with creations self should die</span><br/>
            <span class="l">Let not thy parent oer thine ashes sigh
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L170" id="L170">170</a></div></span><br/>
            <span class="l">For thou shalt live through many distant days</span><br/>
            <span class="l">Though neath the ocean now thy corse may lie</span><br/>
            <span class="l">Again thy name shall shine in future lays</span><br/>
            <span class="l">And harps of nobler string record a warriors praise</span><br/></span>
         <span class="lg-strophe">
            XIX8
            <span class="l">His was a  gloomy and sequestered mind
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L175" id="L175">175</a></div></span><br/>
            <span class="l">Men say that on the night when he was born</span><br/>
            <span class="l">There was a strange sad sighing in the wind</span><br/>
            <span class="l">And many an ominous and awful form</span><br/>
            <span class="l">Rode the dark clouds that bore the bursting storm</span><br/>
            <span class="l">As the red lightning those wide heavens spanned
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L180" id="L180">180</a></div></span><br/>
            <span class="l">And sounds of wailing as of those that mourn</span><br/>
            <span class="l">Ever for the dead and many a spectre hand</span><br/>
            <span class="l">Seemed lifting high the [(?)] battle brand</span><br/></span>
         <span class="lg-strophe">
            20
            <span class="l">His was a soul of solitude His ear</span><br/>
            <span class="l">Liked not the hum of thousands He would pace
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L185" id="L185">185</a></div></span><br/>
            <span class="l">(At midnight when the azure heavens were clear</span><br/>
            <span class="l">The paths of some wild desert wilderness</span><br/>
            <span class="l">As if his soul would haste to seek its place</span><br/>
            <span class="l">Winging its  vast and its aerial way</span><br/>
            <span class="l">To that bright home of light and loveliness9
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L190" id="L190">190</a></div></span><br/>
            <span class="l">Breaking the bands of its confining clay</span><br/>
            <span class="l">That shackled it on earth and haste to spring away</span><br/></span>
         <span class="lg-strophe">
            2110
            <span class="l">There was a sad and settled gloominess</span><br/>
            <span class="l">That brooded oer his features, and if eer</span><br/>
            <span class="l">He smiled twas not  a smile of happiness
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L195" id="L195">195</a></div></span><br/>
            <span class="l">He never could forget the secret care</span><br/>
            <span class="l">That weighed upon his bosom rooted there</span><br/>
            <span class="l">Too deep for consolation  One young  boy</span><br/>
            <span class="l">Had followed him from far and he would share</span><br/>
            <span class="l">His [fits(?)] of grief with purest sympathy.11
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L200" id="L200">200</a></div></span><br/>
            <span class="l">He loved him much,  but none save him loved her</span><br/></span>
         
         <div class="lg-stanza">
            <span class="l">[unnumbered stanza]12</span><br/>
            <span class="l">The sunset shone upon the isles of Greece</span><br/>
            <span class="l">And ocean where the heavens misty blue</span><br/>
            <span class="l">Was mingling with the deep which lay, in peace
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L205" id="L205">205</a></div></span><br/>
            <span class="l">Far to the west its world of waters threw</span><br/>
            <span class="l">To those  fair isles, that seemed as if they grew</span><br/>
            <span class="l">Each in itself one [or an] Oasis. the waste</span><br/>
            <span class="l">Stretching around, beyond them, and light blew</span><br/>
            <span class="l">The evening zephyr on the deep and  cast
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L210" id="L210">210</a></div></span><br/>
            <span class="l">White foam upon the wave as murmuring it past.</span><br/></div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
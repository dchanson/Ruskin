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
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"Title of Work"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="title-poem-JRABATTLEIRREGULARMEASURE">A BATTLE / IRREGULAR MEASURE</span></h1>
         
         <div class="lg-stanza">
            <span class="l">THE Summit of <span class="geogName-SKIDDAW">Skiddaw</span> was gilt by the sun,</span><br/>
            <span class="l">When first he appeared, when the morning begun:</span><br/>
            <span class="l">And the rays of the morning fell lone on the dale,</span><br/>
            <span class="l">When the troops of the English gan enter the vale.</span><br/>
            <span class="l">The Scotch came swiftly down from the wood upon the hill
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And spread themselves along by the side of derwent rill</span><br/>
            <span class="l">And the English they came upon the road from <span class="placeName-PENRITH">Penrith</span></span><br/>
            <span class="l">And their horses and their chargers, they galloped on so swift</span><br/>
            <span class="l">And their flags flew around and their swords waved on high</span><br/>
            <span class="l">But all these dismayed not an Highlandmans eye
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">On the right of the lake stood the clan of bold Ivor</span><br/>
            <span class="l">Their chieftain his name was brave <span class="persName-fictional-FERGUSMACIVOR">Fergus Mac‐Ivor</span></span><br/>
            <span class="l">And as he stood beside the lake he drew forth his claymore</span><br/>
            <span class="l">And he said unto his clan think of whats been done before</span><br/>
            <span class="l">And think of the acts of the last Vich Ian Vohr.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">At this Mac‐Ivors clan</span><br/>
            <span class="l">To the battle quickly ran</span><br/>
            <span class="l">Brave <span class="persName-fictional-FERGUSMACIVOR">Fergus</span> was the first</span><br/>
            <span class="l">To strike unto the dust</span><br/>
            <span class="l">An Englishman though bold
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">His life had no strong hold</span><br/>
            <span class="l">For <span class="persName-fictional-FERGUSMACIVOR">Fergus</span> with one blow</span><br/>
            <span class="l">Sent him to the shades below</span><br/>
            <span class="l">Now the army of the White Cockade</span><br/>
            <span class="l">Rushed on to give Mac‐Ivor aid
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">And charged at once the English band</span><br/>
            <span class="l">Some charged in water, some on land</span><br/>
            <span class="l">The Chevalier was all the cry</span><br/>
            <span class="l">For him for him we live and die</span><br/>
            <span class="l">The English waved on high their swords
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">And cut and hacked at <span class="geogName-SCOTTISHHIGHLANDS">Highland</span> lords</span><br/>
            <span class="l">And pushed at them with pike and spear</span><br/>
            <span class="l">But not one particle of fear</span><br/>
            <span class="l">Attacked the Highlanders so brave</span><br/>
            <span class="l">For they cared not one life to save
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">But when they saw the spears advance</span><br/>
            <span class="l">With polished head and lightning glance</span><br/>
            <span class="l">Each man drew his claymore</span><br/>
            <span class="l">And of English‐men a score</span><br/>
            <span class="l">That instant headless made
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">And all were quickly laid</span><br/>
            <span class="l">To sleep the sleep of death</span><br/>
            <span class="l">After they breathed their last breath</span><br/>
            <span class="l">But <span class="persName-fictional-FERGUSMACIVOR">Fergus</span> on too boldly ran</span><br/>
            <span class="l">And separated from his clan
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">Deep in the ardour of the war</span><br/>
            <span class="l">Fighting full brave his clan him saw</span><br/>
            <span class="l">Surrounded by an English band</span><br/>
            <span class="l">With his good broad claymore in hand</span><br/>
            <span class="l">And each blow that his good hand gave
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">One man not all his friends could save</span><br/>
            <span class="l">A hundred blows he now had given</span><br/>
            <span class="l">A hundred times he now had striven</span><br/>
            <span class="l">To gain his clan but foeʼs  opposed</span><br/>
            <span class="l">At length oppressed with many throes
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">Fatigued not conquered <span class="persName-fictional-FERGUSMACIVOR">Fergus</span> made</span><br/>
            <span class="l">A signal to his clan for aid</span><br/>
            <span class="l">But ah in vain engaged in war</span><br/>
            <span class="l">Though they their chieftains signal saw</span><br/>
            <span class="l">They could not come to him just then
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l">For they were deep in war which when</span><br/>
            <span class="l"><span class="persName-fictional-FERGUSMACIVOR">Fergus</span> saw he was forced to yield</span><br/>
            <span class="l">And was carried off from fighting field</span><br/>
            <span class="l">Now now Mac‐Ivors clan</span><br/>
            <span class="l">From the war a small way ran
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
            <span class="l">They halted at the wood</span><br/>
            <span class="l">And as they firmly stood</span><br/>
            <span class="l">They saw the English rushing</span><br/>
            <span class="l">Trampling on and crushing</span><br/>
            <span class="l">The Chevaliers good host
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
            <span class="l">They saw the day was lost</span><br/>
            <span class="l">And they were going to call</span><br/>
            <span class="l">Their brave companions all</span><br/>
            <span class="l">When they saw the noble spanish blade</span><br/>
            <span class="l">Of the Chevalier raised and he said
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
            <span class="l">Retreat my friends lost is this day</span><br/>
            <span class="l">If any can regain it say</span><br/>
            <span class="l">But I think that this day is lost</span><br/>
            <span class="l">The chief of Ivor in yon host</span><br/>
            <span class="l">Retreat retreat again I say
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
            <span class="l">And let us be upon our way</span><br/>
            <span class="l">At this the bagpipes sound then drew</span><br/>
            <span class="l">The chiefs around for well they knew</span><br/>
            <span class="l">That at the bagpipes sound they were</span><br/>
            <span class="l">Then to retreat or rush to war
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
            <span class="l">The chiefs got clans in martial rank</span><br/>
            <span class="l">And ranging all on <span class="geogName-DERWENTWATER">Derwents</span> bank</span><br/>
            <span class="l">They gan their march with lonely sound</span><br/>
            <span class="l">Which <span class="geogName-SKIDDAW">Skiddaw</span> echoed all around.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
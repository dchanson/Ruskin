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
“Saltzburg” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
fo/saltzburg_1.jpg fo/saltzburg_2.jpg fo/saltzburg_3.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/saltzburg_apparatus" target="_self">Back to apparatus</a><br/></div>
   <div class="fileName"><span>“Saltzburg” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">SALTZBURG</span>.</h1>
         
         <div class="lg-stanza">
            <span class="l">O<span class="smallcaps">n</span> <span class="geogName-SALZACH">Salza</span>ʼs quiet tide the westering sun</span><br/>
            <span class="l">Gleams mildly; and the lengthening shadows dun,</span><br/>
            <span class="l">Chequered with ruddy streaks from spire and roof,</span><br/>
            <span class="l">Begin to weave fair twilightʼs mystic woof,</span><br/>
            <span class="l">Till the dim tissue, like a gorgeous veil,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Wraps the proud city, in her beauty pale.</span><br/>
            <span class="l">A minute since, and in the rosy light</span><br/>
            <span class="l">Dome, casement, spire, were glowing warm and bright;</span><br/>
            <span class="l">A minute since, <span class="placeName-building-SALZBURGCATHEDRAL"><span class="persName-STRUPERT">St. Rupert</span>ʼs stately shrine</span>,</span><br/>
            <span class="l">Rich with the spoils of many a <span class="geogName-HARZ">Hartzwald</span> mine,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/saltzburg_glosses_contextual#SPOILSOFHARTZWALDMINE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Flung back the golden glow: now, broad and vast,</span><br/>
            <span class="l">The shadows from yon ancient <span class="placeName-HOHENSALZBURG">fortress</span> cast,</span><br/>
            <span class="l">Like the dark grasp of some barbaric power,</span><br/>
            <span class="l">Their leaden empire stretch oʼer roof and tower.</span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">Sweet is the twilight hour by <span class="geogName-SALZACH">Salza</span>ʼs strand,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Though no <span class="placeName-fictional-ARCADIA">Arcadian</span> visions grace the land:</span><br/>
            <span class="l">Wakes not a sound that floats not sweetly by,</span><br/>
            <span class="l">While dayʼs last beams upon the landscape die;</span><br/>
            <div id="??? p. 38" class="pb"></div>
            <span class="l">Low chants the fisher where the waters pour,</span><br/>
            <span class="l">And murmuring voices melt along the shore;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">The plash of waves comes softly from the side</span><br/>
            <span class="l">Of passing barge slow gliding oʼer the tide;</span><br/>
            <span class="l">And there are sounds from city, field, and hill,</span><br/>
            <span class="l">Shore, forest, flood; yet mellow all and still.</span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">But change we now the scene, ere night descend,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">And through <span class="persName-STRUPERT">St. Rupert</span>ʼs massive portal wend.</span><br/>
            <span class="l">Full many a shrine, bedeckt with sculpture quaint</span><br/>
            <span class="l">Of steel‐clad knight and legendary saint;</span><br/>
            <span class="l">Full many an altar, where the incense‐cloud</span><br/>
            <span class="l">Rose with the pealing anthem, deep and loud;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">And pavements worn before each marble fane</span><br/>
            <span class="l">By knees devout—(ah! bent not all in vain!)</span><br/>
            <span class="l">There greet the gaze; with statues, richly wrought,</span><br/>
            <span class="l">And noble paintings, from <span class="placeName-ITALY">Ausonia</span> brought,—</span><br/>
            <span class="l">Planned by those master minds whose memory stands
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">The grace, the glory, of their native lands.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/saltzburg_glosses_contextual#AUSONIA" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">As the hard <span class="name--GRANITE">granite</span>, ʼmidst some softer stone,</span><br/>
            <span class="l">Starts from the mass, unbuttressed and alone,</span><br/>
            <span class="l">And proudly rears its iron strength for aye,</span><br/>
            <span class="l">While crumbling crags around it melt away;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">So, midst the ruins of long eras gone,</span><br/>
            <span class="l">Creative Genius holds his silent throne,—</span><br/>
            <span class="l">While lesser lights grow dim,—august, sublime,</span><br/>
            <span class="l">Gigantic looming oʼer the gulfs of Time!</span><br/>
            </div>
         </div>
   </div>
   <div>
      
      <div class="p">J. R.</div>
      
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
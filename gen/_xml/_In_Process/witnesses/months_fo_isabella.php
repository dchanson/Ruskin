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
         
         <h1 class="page-title">THE MONTHS.</h1>
         
         <div>
            <div class="lg-stanza">
               
               
               <span class="head-subhead" id="">I.</span>
               
               <span class="l">FROM your high dwellings, in the realms of snow</span><br/>
               <span class="l">And cloud, where many an avalanche's fall</span><br/>
               <span class="l">Is heard resounding from the mountain's brow.</span><br/>
               <span class="l">Come, ye cold winds, at January's call,</span><br/>
               <span class="l">On whistling wings; and with white flakes bestrew
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
               <span class="l">The earth, till February's reign restore</span><br/>
               <span class="l">The race of torrents to their wonted flow,</span><br/>
               <span class="l">Whose waves shall stand in silent ice no more;</span><br/>
               <span class="l">But, lashed by March's maddened winds, shall roar</span><br/>
               <span class="l">With voice of ire, and beat the rocks on every shore.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
               </div>
         </div>
         
         
         <div>
            <div class="lg-stanza"><span class="head-subhead" id="">II.</span>
               
               <span class="l">Bow down your heads, ye flowers, in gentle guise,</span><br/>
               <span class="l">Before the dewy rain that April sheds,</span><br/>
               <span class="l">Whose sun shines through her clouds with quick surprise,</span><br/>
               <span class="l">Shedding soft influences on your heads;</span><br/>
               <span class="l">And wreathe ye round the rosy month that flies
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
               <span class="l">To scatter perfumes in the path of June;</span><br/>
               <span class="l">Till July's sun upon the mountains rise</span><br/>
               <span class="l">Triumphant, and the wan and weary moon</span><br/>
               <span class="l">Mingle her cold beams with the burning lume</span><br/>
               <span class="l">That Sirius shoots through all the dreary midnight gloom.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
               </div>
         </div>
         
         <div>
            <div class="lg-stanza"><span class="head-subhead" id="">III.</span>
               
               <span class="l">Rejoice! ye fields, rejoice, and wave with gold,</span><br/>
               <span class="l">When August round her precious gifts is flinging;</span><br/>
               <span class="l">Lo! the crushed wain is slowly homeward rolled:</span><br/>
               <span class="l">The sun - burnt reaper's jocund lays are singing;</span><br/>
               <span class="l">September's steps her juicy stores unfold,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
               <span class="l">If the spring blossoms have not blushed in vain:</span><br/>
               <span class="l">October's foliage yellows with his cold:</span><br/>
               <span class="l">In rattling showers dark November's rain,</span><br/>
               <span class="l">From every stormy cloud, descends amain,</span><br/>
               <span class="l">Till keen December's snows close up the year again.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
               </div>
         </div>
         
         <div>
            <div class="p"><span class="persName-JR">J.R.</span></div>
         </div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
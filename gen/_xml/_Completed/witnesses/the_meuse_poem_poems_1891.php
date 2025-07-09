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
“The Meuse” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_poems_1891" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Meuse” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">THE MEUSE</span>.</h1>
         
         <div class="lg-stanza">
            <span class="l">T<span class="smallcaps">HE</span> sky was clear, the morn was gay</span><br/>
            <span class="l">In promise of a cloudless day.</span><br/>
            <span class="l">Fresh flew the breeze, with whose light wing</span><br/>
            <span class="l">Aspen and oak were quivering:</span><br/>
            <span class="l">From flowʼret dank it dashed the dew,—
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">The harebell bent its blossom blue,—</span><br/>                     
            <span class="l">And from the <span class="geogName-MEUSE">Meuse</span> the mist‐wreaths<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#MISTWREATHSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> grey</span><br/>  
            <span class="l">That morning breeze had swept away,</span><br/>
            <span class="l">Showing such scenes as well might seem</span><br/>
            <span class="l">The fairy vision of a dream.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#FAIRYVISIONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/> 
            <span class="l">For changing still, and still as fair</span><br/> 
            <span class="l">Rock, wave, and wood were mingled there;</span><br/> 
            <span class="l">Peak over peak, fantastic ever,</span><br/>                 
            <span class="l">The lofty crags deep chasms sever:</span><br/>
            <span class="l">And, grey and gaunt, their lichened head
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/> 
            <span class="l">Rose sheerly from the riverʼs bed,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#PEAKOVERPEAKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">Whose mantling wave, in foamy sheet,</span><br/>
            <span class="l">Their stern, projecting bases beat;</span><br/> 
            <span class="l">And, lashed to fury in his pride,</span><br/> 
            <span class="l">In circling whirlpools swept the tide,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">As threatening, on some future day,</span><br/>
            <span class="l">Those mighty rocks to tear away,—</span><br/>
            <div id="" class="pb"></div>
            <span class="l">What though their front should seem to be</span><br/>
            <span class="l">A barrier, to eternity!<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#BARRIERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l">And on its side, the cliffs between,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Were mazy forests ever seen,</span><br/>
            <span class="l">That the tall cliffʼs steep flanks so grey</span><br/>
            <span class="l">Were clothed in mantle green and gay.</span><br/>
            <span class="l">Long time along that dell so deep,</span><br/>
            <span class="l">Beside the riverʼs bed, we sweep;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/> 
            <span class="l">So steep the mighty crests inclined,</span><br/>
            <span class="l">None other pathway you might find;</span><br/>
            <span class="l">Till the tall cliffʼs gigantic grace</span><br/>
            <span class="l">To undulating hills gave place,</span><br/>
            <span class="l">And vineyards clothe the bending brow,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">ʼStead of the clinging copsewood now.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“Smiling from those bright rays kiss” [“Heidelberg”] [poem, part 1]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII66v-67r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Smiling from those bright rays kiss” [“Heidelberg”] [poem, part 1]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">Smiling <span class="del-strikethrough">with</span><div 
              class="add-below" 
              style="left:4.0em">from</div> those bright rays kiss<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#FROMBEHINDATHUNDERCLOUD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Shoot<div 
          class="subst-del s-subst s-del" >g</div><div 
          class="s-subst s-add s-overwrite s-inline">i</div>ng round effulgence moony
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">940</a></div></span><br/>
            <span class="l">Like a lovely Oasis</span><br/>
            <span class="l">Mid a desert dark and gloomy<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#FROMBEHINDATHUNDERCLOUD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">But a moment— darkly down
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Came the cloudy heavens frown</span><br/>
            <span class="l">Mong the leaves a fitful shaking.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">945</a></div></span><br/>
            <span class="l">Told the hoarse nightwind was waking</span><br/>
            <span class="l">Grey upon his mountain throne</span><br/>
            <span class="l"><span class="placeName-HEIDELBERG">Heidelberg</span> his ruins lone
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Reared colossally,</span><br/>
            <span class="l">All begirt with mighty trees
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">950</a></div></span><br/>
            <span class="l"><span class="del-strikethrough">Bending to</span><div 
              class="add-above" 
              style="left:0.4em">Whistling</div> with the evens breeze</span><br/>
            <span class="l">Flapp<div 
          class="subst-del s-subst s-del" >g</div><div 
          class="s-subst s-add s-overwrite s-inline">i</div>ng faintly by.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#HEIDELBERGHISRUINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">It was morning. from the height,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Cumbered with its ruins <span class="del-strikethrough">o</span> hoar</span><br/>
            <span class="l">All the lovely valley bright
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">955</a></div></span><br/>
            <span class="l">We were looking oer,</span><br/>
            <span class="l">With its silver river bending</span><br/>
            <span class="l">Vineyards to its banks descending<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#LOVELYVALLEY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> *
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Many a distant mountain chain</span><br/>
            <span class="l">Girded round the mighty plain.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">960</a></div></span><br/>
            <span class="l">Here the sky was clear and bright</span><br/>
            <span class="l">But upon their distant height</span><br/>
            <span class="l">Like a monster oer his prey
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Rain and tempest scowling lay</span><br/>
            <span class="l">Like a mighty ocean wave
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">965</a></div></span><br/>
            <span class="l">All along the horizon sweeping</span><br/>
            <div id="MSVIII67r" class="pb"></div>
            <div class="pageNum-top-right">67</div><br/>
            <span class="l">Flinging far its cloudy spray</span><br/>
            <span class="l">Oer the peaceful heaven beating
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            </div>
         <div class="half"></div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
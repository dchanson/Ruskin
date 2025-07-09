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
“Cadenabbia” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII79v-80r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Cadenabbia” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVII79v" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-CADENABBIA">Cadenabbia</span></div>
         
         <div class="lg-stanza">
            <span class="l">Oh <span class="del-strikethrough">love</span> coolly came on <span class="geogName-LAKECOMO">Comos lake</span></span><br/>
            <span class="l">The lovely beams of morning mild,</span><br/>
            <span class="l">That oer the <span class="placeName-LECCO">Lecco</span> mountains break,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_contextual#LECCOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And red their summits piled,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1420</a></div></span><br/>
            <span class="l">That high above their dim shore,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Their weary winter garments bore,</span><br/>
            <span class="l">The broad boat lay along the tide</span><br/>
            <span class="l">The light waves lapped its sloping side</span><br/>
            <span class="l">And soft perfume of <span class="name--ORANGE">orange trees</span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1425</a></div></span><br/>
            <span class="l">By fits came on the landward breeze
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <div id="MSVII80r" class="pb"></div>
            <div class="pageNum-top-right">80</div><br/>
            <span class="l">The trouts shot through the waters blue</span><br/>
            <span class="l">Like small stars in the heaven glance</span><br/>
            <span class="l">Or hid them where the broad weeds grew</span><br/>
            <span class="l">With wavy motion dancing.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1430</a></div></span><br/>
            <span class="l">Away, away, across the lake<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_contextual#EASTERNLAKEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">How fast retires yon <span class="name--MYRTLE">myrtle</span> brake</span><br/>
            <span class="l">All sprinkled with a silver shower.</span><br/>
            <span class="l"><div 
          class="subst-del s-subst s-del" >On</div><div 
          class="s-subst s-add s-overwrite s-inline">Thro</div><div 
              class="add-below" 
              style="left:2.0em">ugh</div> the dark leaves of lemon flower.</span><br/>
            <span class="l">Clear, as if near, nor faint, though far
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1435<span class="space" style="padding-left:0.4em"> </span>
                     <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                        <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">40</a></div></a></div></span><br/>
            <span class="l">Shines on the mountain, like a star.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">The rock born torrents milky spray</span><br/>
            <span class="l">And many a small boat on its way</span><br/>
            <span class="l">Urged by a breeze that bore them well</span><br/>
            <span class="l">Though unfelt as invisible
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1440</a></div></span><br/>
            <span class="l">With sunshine on their winglike sail,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Past like young Eaglets on the gale.</span><br/>
            <span class="l">The steps were broken. mossed and steep.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">The waters sparkling, clear, and deep.</span><br/>
            <span class="l">The rock was high, the cavern dark
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1445</a></div></span><br/>
            <span class="l">Scarce lit up by the jewelled spark,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">Of the cold stream, that under earth</span><br/>
            <span class="l">Was <span class="del-strikethrough">buri</span> darkling buried at its birth.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_contextual#DARKLINGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">Nor once its wave had sunned, nor seen,</span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">A</div><div 
          class="subst-del s-subst s-del" >O</div>ught but dark rock, and ice caves green
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1450</a></div></span><br/>
            <span class="l">Where the deep waters, as a home
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Received the torrents churned foam</span><br/>
            <span class="l">We launched again, and downward bore</span><br/>
            <span class="l">Awhile beside the centre shore.</span><br/>
            <span class="l">Then left the shadowy eastern lake
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1455</a></div></span><br/>
            <span class="l">Crossed through thick vines the wooded cape.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <div id="MSVIII81v" class="pb"></div>
            <span class="l">Struck the clear wave with long light oar</span><br/>
            <span class="l">Left a white wake that sought the shore,</span><br/>
            <span class="l">High oer the boat the awning spread,</span><br/>
            <span class="l">And quick as sun<div 
              class="add-below" 
              style="left:6.8em">‸</div><div 
              class="add-above" 
              style="left:6.8em">‐red </div>waves<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_textual#SUNREDWAVESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> flashed before
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1460</a></div></span><br/>
            <span class="l">Toward the southward fled.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
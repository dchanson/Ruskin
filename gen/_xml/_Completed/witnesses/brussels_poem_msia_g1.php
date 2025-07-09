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
“Brussels” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msia/MSIASheet24.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msia_g1" target="_self"></a><br/></div>
   <div class="fileName"><span>“Brussels” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="space" style="padding-left:4.4em"> </span><span class="caps"><i>Brussels</i></span></h1>
         
         <div class="lg-stanza">
            <span class="l">The racking clouds were eddying fast</span><br/>
            <span class="l">Upon the bosom of the blast<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#RACKINGCLOUDS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">In wild confusion fiercely driven
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">115</a></div></span><br/>
            <span class="l">Fled they across the face of <span class="persName-scriptural-HEAVEN">heaven</span></span><br/>
            <span class="l">The fitful gust came shrieking high
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">The rattling rain flew driving by</span><br/>
            <span class="l">But where the horizon stretched away</span><br/>
            <span class="l">Towards the couch of parting day
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">120</a></div>
               <div class="add-margin-right-counterclockwise">mind</div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_poem_glosses_textual#MIND" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">A streak of paly light was seen</span><br/>
            <span class="l">The heaped and darkling clouds between
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Against that light for time full brief</span><br/>
            <span class="l"><span class="placeName-BRUSSELS">Brussels</span> arose in dark relief</span><br/>
            <span class="l">Colossal on the western fire
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">125</a></div></span><br/>
            <span class="l">Seemed massive tower and slender spire</span><br/>
            <span class="l">Nearer and nearer as we drew
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">More strongly marked the outlines grew</span><br/>
            <span class="l">Till of the buildings you might see</span><br/>
            <span class="l"><span class="unclear-KCM">D</span>istinct the gothic tracerie
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">130</a></div></span><br/>
            
            <span class="l">The drawbridge rung, we past the gate<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#DRAWBRIDGE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">And regal <span class="placeName-BRUSSELS">Brussels</span> entered straight
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">It stirs, to see the human tide</span><br/>
            <span class="l">That marks a city in its pride</span><br/>
            <span class="l">That fitful oceans eddying sweep
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">135</a></div></span><br/>
            <span class="l">Is still more changeful than the deep</span><br/>
            <span class="l">For those dark billows as they roll
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Mark movements of the human soul.</span><br/>
            <span class="l">Yet in that city there was none</span><br/>
            <span class="l">Of that confused and busy hum
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">140</a></div></span><br/>
            <span class="l">That tells of traffic & of trade</span><br/>
            <span class="l">No, <span class="placeName-BRUSSELS">Brussels</span> time of power <span class="del-strikethrough">is</span><div 
              class="add-above" 
              style="left:10.8em">was</div> sped
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">Yet in her streets was something seen</span><br/>
            <span class="l">Spoke what the city once had been</span><br/>
            <span class="l">Our rapid course as now we wheel
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">145</a></div></span><br/>
            <span class="l">Where <u>she</u> rose the huge <span class="placeName-building-HOTELDEVILLEBRUSSELS">Hotel de ville</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#HOTELDEVILLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">The noble spires proportions high
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Stood forth upon the cloudy sky</span><br/>
            <span class="l">In <span class="del-strikethrough">rich</span> all its fretted majesty.</span><br/>
            <span class="l">And his last light the sun had sent
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">150</a></div></span><br/>
            <span class="l">On Buttress and on Battlement</span><br/>
            <span class="l">That while the houses were arrayed
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">In all the depth of twilight shade</span><br/>
            <span class="l">Yet shot there faint a yellow glow</span><br/>
            <span class="l">Where the tall arches shafted show
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">155</a></div></span><br/>
            <span class="l">Glimmered a moment there the ray</span><br/>
            <span class="l">Then fainter grew, and past away
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">Oh <span class="placeName-BRUSSELS">Brussels</span>, <span class="placeName-BRUSSELS">Brussels</span> thou hast been</span><br/>
            <span class="l"><span class="del-strikethrough">Th</span> Of many an action strange, the scene</span><br/>
            <span class="l">Thou sawst, on Julys dreadful night<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#JULYSDREADFULNIGHTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">160</a></div></span><br/>
            <span class="l">The veterans rushing to the fight</span><br/>
            <span class="l">Thou heardest, when the word was spoken
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">At midnight thy repose was broken</span><br/>
            <span class="l"><span class="del-strikethrough">The</span><div 
              class="add-above" 
              style="left:0.8em">By</div> tramp of men and neigh of steed</span><br/>
            <span class="l">Battalions bursting forth to bleed
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">165</a></div></span><br/>
            <span class="l">Till the dark phalanx waving crest</span><br/>
            <span class="l">Forth from thy gates was forward prest
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">And Breaking with the morning mild</span><br/>
            <span class="l">The distant roar of battle wild</span><br/>
            <span class="l">And later still the rabble shout
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">170</a></div></span><br/>
            <span class="l">And revolutions riot rout</span><br/>
            <span class="l">Leaving such marks as long shall tell
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l">Of dark destruction fierce and fell.</span><br/>
            <div class="half"></div>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
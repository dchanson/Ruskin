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
“Andernacht” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msia_g2/12180627.jpg msia_g2/12180628.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msia_g2" target="_self"></a><br/></div>
   <div class="fileName"><span>“Andernacht” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="12180627.jpg" class="pb"></div>
         
         <h1 class="page-title"><span class="placeName-ANDERNACH">Andernacht</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTVERSIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l">We have wound a weary way</span><br/>
            <span class="l">Twilights mists are gathering grey</span><br/>
            <span class="l">Purple now the hills are showing
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">380</a></div></span><br/>
            <span class="l">Bright the western clouds are glowing</span><br/>
            <span class="l">Lashing on with giant force
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Rolls the <span class="geogName-RHINE">Rhine</span> his sullen course</span><br/>
            <span class="l">Flash his waves with flamy red</span><br/>
            <span class="l">Eddying oer their <span class="name--BASALT">basalt</span> bed
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">385</a></div></span><br/>
            <span class="l">Now with wide expanded breast</span><br/>
            <span class="l">Now between the hills comprest
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Ever noble, ever free</span><br/>
            <span class="l">Flows his river majesty</span><br/>
            <span class="l">Now upon the evening skies
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">390</a></div></span><br/>
            <span class="l"><span class="placeName-ANDERNACH">Andernacht</span>s hoar ruins rise<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTSGREYRUINSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Memorials of the <span class="placeName-ROMEANCIENT">Roman</span> power<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ROMANPOWERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Buttress and battlement and tower</span><br/>
            <span class="l">Decaying falling fast away</span><br/>
            <span class="l">The monuments of <span class="persName-JULIUSCAESAR">Caesar</span>s sway
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">395</a></div></span><br/>
            <span class="l">In heaps together loosely thrown</span><br/>
            <span class="l">The sculptured head, inscriptioned stone
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Unguarded now the bridges length</span><br/>
            <div id="12180628.tif" class="pb"></div>
            <span class="l">And <span class="unclear-smudged-">failing</span> fast its arches strength</span><br/>
            <span class="l">The green sod in the moat is growing
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">400</a></div></span><br/>
            <span class="l">The cold wind in the chambers blowing</span><br/>
            <span class="l">And flapping through the thin night air
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">The owl and bat the tenants there</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
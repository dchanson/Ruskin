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
“Milan Cathedral” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msia_g2/12180626.jpg msia_g2/12180627.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msia_g2" target="_self"></a><br/></div>
   <div class="fileName"><span>&#x201C;Milan Cathedral&#x201D; &#x005B;poem&#x005D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="12180626" class="pb"></div>
         
         <h1 class="page-title">Milan Cathedral.</h1>
         
         <div class="lg-stanza">
            <span class="l">The heat of Summer day is sped
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">360</a></div></span><br/>
            <span class="l">On far <span class="geogName-MONTEROSA">mont Rose</span> the sun is red<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/milan_cathedral_poem_glosses_contextual#MONTEROSAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And mark you <span class="placeName-MILAN">Milan</span>s marble pile</span><br/>
            <span class="l">Glow with the mellow rays awhile</span><br/>
            <span class="l">Lo there <span class="del-strikethrough">his</span> relieved<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/milan_cathedral_poem_glosses_contextual#RELIEVEDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> his front so high
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">On the blue sky of <span class="placeName-ITALY">Italy</span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">365</a></div></span><br/>
            <span class="l">While higher still above him bear</span><br/>
            <span class="l">And <div 
          class="subst-add-below-overwriting s-subst s-add s-overwrite s-below" 
          style="left:NaNem">slender</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >higher</div> with proportion fair</span><br/>
            <span class="l">Fretted with Gothic Carving well</span><br/>
            <span class="l">Full many a spiry pinnacle,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <div id="12180627" class="pb"></div>
            <span class="l">And dazzling bright as <span class="geogName-MONTEROSA">Rosa</span>s Crest
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">370</a></div></span><br/>
            <span class="l">Each with his sculptured statue prest</span><br/>
            <span class="l">They seem to stand in that thin air</span><br/>
            <span class="l">As on a thread of Gossamer<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/milan_cathedral_poem_glosses_contextual#SPIRYPINNACLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">You think the evening zephyrs play
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Could sweep them from their post away
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">375</a></div></span><br/>
            <span class="l">And bear them on its sportful wing</span><br/>
            <span class="l">As Autumn leaves wild scattering.</span><br/>
            
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
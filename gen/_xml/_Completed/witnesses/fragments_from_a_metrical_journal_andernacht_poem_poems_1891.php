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
“Andernach” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_poems_1891" target="_self"></a><br/></div>
   <div class="fileName"><span>“Andernach” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">ANDERNACH</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTVERSIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">T</span><span class="smallcaps">WILIGHT</span>ʼ<span class="smallcaps">S</span> mists are gathering grey</span><br/>
            <span class="l">Round us on our winding way;</span><br/>
            <span class="l">Yet the mountainʼs purple crest</span><br/> 
            <span class="l">Reflects the glories of the west.</span><br/> 
            <span class="l">Rushing on with giant force
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Rolls the <span class="geogName-RHINE">Rhine</span> his glorious course;</span><br/> 
            <span class="l">Flashing, now, with flamy red,</span><br/>
            <span class="l">Oʼer his jaggʼd <span class="name--BASALT">basaltic</span> bed;</span><br/> 
            <span class="l">Now, with current calm and wide</span><br/> 
            <span class="l">Sweeping round the mountainʼs side;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/> 
            <span class="l">Ever noble, proud, and free,</span><br/>
            <span class="l">Flowing in his majesty.</span><br/> 
            <span class="l">Soon upon the evening skies</span><br/>
            <span class="l"><span class="placeName-ANDERNACH">Andernach</span>ʼs grim ruins rise;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTSGREYRUINSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <div id="" class="pb"></div>
            <span class="l">Buttress, battlement and tower
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/> 
            <span class="l">Remnants hoar of Roman power,—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ROMANPOWERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/> 
            <span class="l">Monuments of <span class="persName-JULIUSCAESAR">Cæsar</span>ʼs sway,</span><br/>
            <span class="l">Piecemeal mouldering away.</span><br/> 
            <span class="l">Lo, together loosely thrown</span><br/>
            <span class="l">Sculptured head and lettered stone
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/> 
            <span class="l">Guardless now the archway keep<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTSTEEPGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/> 
            <span class="l">To rampart huge and frowning keep.</span><br/> 
            <span class="l">The empty moat is gay with flowers,</span><br/> 
            <span class="l">The night‐wind whistles through the towers,</span><br/> 
            <span class="l">And, flapping in the silent air,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">The owl and bat are tenants there.</span><br/> 
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
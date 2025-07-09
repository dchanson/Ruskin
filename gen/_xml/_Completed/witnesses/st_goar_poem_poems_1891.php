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
"First Sketch of 'St. Goar'"
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"First Sketch of 'St. Goar'"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">[<span class="caps">F</span><span class="smallcaps">IRST</span> <span class="caps">S</span><span class="smallcaps">KETCH OF</span> “<span class="caps">S</span><span class="smallcaps">T</span>. <span class="caps">G</span><span class="smallcaps">OAR.”</span>]<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARWGCGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></h1>
         
         <div class="lg-stanza">
            <span class="l">We past a rock, whose bare front ever</span><br/>
            <span class="l">Had borne the brunt of wind and weather;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARLORELEIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And downwards by the <span class="geogName-RHINE">Rhine</span> we bore</span><br/>
            <span class="l">Upon the village of <span class="placeName-STGOAR">St. Goar</span>,</span><br/>
            <span class="l">That, ʼmid the hills embosomed, lay
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Where the <span class="geogName-RHINE">Rhine</span> checked his onward way,</span><br/>
            <span class="l">And lay the mighty crags between;</span><br/>
            <span class="l">As if, enamoured of the scene,</span><br/>
            <span class="l">He loved not on his way to wind,</span><br/>
            <span class="l">And leave a scene so fair behind.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">For grim the chasm through whose cleft</span><br/>
            <span class="l">The waters had a passage reft;</span><br/>
            <span class="l">And gaunt the gorge that yawned before,</span><br/>
            <span class="l">Through which, emerging, they must roar.</span><br/>
            <span class="l">No marvel they should love to rest,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">And peaceful spread their placid breast,</span><br/>
            <span class="l">Before in fury driving dread,</span><br/>
            <span class="l">Tormented on their rocky bed;</span><br/>
            <span class="l">Or flinging far their scattering spray</span><br/>
            <span class="l">Oʼer the peaked rocks, that barred their way,—
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Wave upon wave at random tossed,</span><br/>
            <span class="l">Or in the giddy whirlpool lost,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARWHIRLPOOLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">And now are undisturbed sleeping,—</span><br/>
            <span class="l">No more on rocks those billows beating;</span><br/>
            <span class="l">But, lightly laughing, laps the tide,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">Where stoop the vineyards to his side.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
MS VIII [drawing]—Buildings on Water with Boats
EOT
);
define("FACS_FILE_NAMES", <<<EOT
MSVIII65v-66r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>MS VIII &#x005B;drawing&#x005D;&#x2014;Buildings on Water with Boats</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRBUILDINGSONWATERMSVIII">Sketch of Buildings on Water with Boats</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only), placed immediately beneath the drawing, <span class="title-artwork-JRMOUNTAINMSVIII">Mountain Sketch</span>.
         
         <div class="p">The drawing is a slight sketch of buildings with steps leading directly to water, with boats moored near the steps. 
                        The location is unknown, but the calm water and heavy window awnings shading from the sun suggest <span class="placeName-ITALY">Italy</span>. 
                        The drawing was made over top of a previous drawing of mountain outlines, and also over top of marginal numbers 925, 930, and 935, intended for reception 
                        of ongoing verse composition, the last poem composed being <span class="title-poem-JRLAGOMAGGIORE">&#x201C;It was an eve of summer mild&#x201D; &#x005B;&#x201C;Lago Maggiore&#x201D;&#x005D;</span> 
                        ending on a line numbered 920 (65r). Between this poem and the two drawings, <span class="persName-JR">Ruskin</span> drafted the prose essay, 
                        <span class="title-essay-JRAIXLACHAPELLE">&#x201C;Aix La Chapelle&#x201D;</span> (65r&#x2013;66r).
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
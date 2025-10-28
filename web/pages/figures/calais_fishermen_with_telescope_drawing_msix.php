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
“Calais” Drawing 2 of 4
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX13v-14r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>&#x201C;Calais&#x201D; Drawing 2 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCALAISFISHERMENWITHTELESCOPEMSIX">Vignette, Calais Fishermen with Telescope</span></h1>
         Pen and ink, approx. 3.7 &#x00D7; 5.5 cm (image only).
         
         <div class="p">The editors of the 
                        <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as &#x201C;a sketch of two old fishermen on the shore, of whom one is looking over the sea through a telescope&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:341 n. 3). 
                        The fisherman aims his telescope at a distant ship; the second fisherman, holding his nets, gazes at the first fisherman.
                    
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
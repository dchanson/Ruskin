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
“Cassel” Drawing 2 of 4
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX16v-17r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Cassel” Drawing 2 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRCASSELSAINTOMERCORPUSCHRISTIMSIX">Vignette, Corpus Christi Procession at Cassel</span></h1>
         Pen and ink, approx. 6.2 × 7 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a bishop beneath a canopy, with other figures” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:343 n. 1). 
                        The vignette refers to the Roman Catholic procession mentioned in the preceding poem, 
                        <a href="<?php echo r_build_url("witnesses/cassel_poem_msix.php");?>" target="_self">“The way was long, and yet ʼtwas sweet” [“Cassel”, poem]</a>. 
                        The procession that the Ruskins witnessed at <span class="placeName-CASSEL">Cassel</span> celebrated Ascension Day, 
                        but details in the drawing suggest that <span class="persName-JR">Ruskin</span> may have conflated this event with a procession of Corpus Christi, in which 
                        the priest carries a monstrance beneath a canopy borne by attendants 
                        (see glosses for <a href="<?php echo r_build_url("witnesses/cassel_poem_msix.php");?>" target="_self">“Cassel” [poem]</a>).
                    </div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
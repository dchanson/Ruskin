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
“Ehrenbreitstein” Drawing 2 of 2
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX40v-41r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Ehrenbreitstein” Drawing 2 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JREHRENBREITSTEINRIVERMSIX">Vignette, Pines on Bank of the Rhine</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a river, swollen and rushing between the hills” 
                        (<a href="/" target="_self">Ruskin, <i>Works</i></a>, 2:358). 
                        A tiny figure clings to the tree growing from the foreground rocks. The sun is rising or setting over the turbulent water. 
                        <span class="persName-JR">Ruskin</span> probably meant the vignette to illustrate the “impetuous <span class="geogName-RHINE">Rhine</span>” 
                        and “<span class="geogName-BLACKFOREST"></span>Schwartzwald pine” described toward the end of the poem preceding this vignette.
                    </div>
         
         <div class="p">This drawing is listed as “Pines” in the <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCEHRENBREITSTEIN");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the “Account”</span> (“Coblentz”)</a>.</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
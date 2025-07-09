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
Lake Scene with Building on Piers
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX53v-54r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>Lake Scene with Building on Piers</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRLAKEWITHBUILDINGONPIERSMSIX">Lake Scene with Building on Piers</span></h1>
         Pen and ink, approx. ? × ? cm (image only). The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as “a lake with a house on piers islanded on it” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1). 
                        The lake is surrounded by mountains, and the building on piers is surrounded by two sailboats and a rowboat with passengers. Vaguely sketched figures appear to stand or lean 
                        inside the balustrade enclosing the first story of the building, which is tall and narrow with two high windows. Its peaked roof is pierced by dormers, from one of which 
                        a pole extends hung with ragged banners or cloths. On the same page, the drawing is pasted below another drawing,
                        <a href="<?php echo r_build_url("figures/");?>" target="_self"><span class="title-artwork-JRMOUNTAINBOULDERMSIX">Mountain Scene with Boulder Drawing</span></a>; 
                        however, no connection between the drawings is evident, except for their similar, comparatively small rectangular shapes, which made their pairing convenient.
                        
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
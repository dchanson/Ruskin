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
Mountain Scene with Chalet Drawing
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX52v-53r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>Mountain Scene with Chalet Drawing</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINCHALETMSIX">Mountain Scene (Alps?) with Chalet</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self"><span class="title-book-JRWORKSLE">Library Edition</span></a> 
                        describe the image as &#x201C;a mountain scene, châlet in foreground&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSKLE"><i>Works</i></span></a>, 2:364 n. 1).
                        The original image that <span class="persName-JR">Ruskin</span> may have copied is unknown, but evidence in the 
                        <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCSTRASBURGILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the &#x201C;Account&#x201D; (Table 2, Illustrations)</span></a> 
                        for the section <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_pcs_corpus_strasburgcomp" target="_self"><span class="title-composite-JRSTRASBURGCOMP">&#x201C;<span class="placeName-STRASBOURG">Strasburg</span>&#x201D;</span></a> 
                        suggests that this drawing may correspond to a proposed illustration that Ruskin entitled &#x201C;The swiss cottages&#x201D;.
         </div>
         
         <div class="p">The connection between Swiss cottages and Strasbourg in Ruskin's mind is the opening to the Black Forest. His poem 
                        <a href="<?php echo r_build_url("witnesses/oh_the_morn_looked_bright_on_hill_and_dale_poem_msviii.php");?>" target="_self"><span class="title-poem-JROHTHEMORNLOOKEDBRIGHT">&#x201C;Oh the morn looked bright on hill and dale&#x201D;</span></a> 
                        focuses on the departure from Strasbourg and Kehl, leading into the Black Forest through the valley of the Kinzig River where it empties into the Rhine; 
                        and his essay <a href="<?php echo r_build_url("witnesses/it_was_a_wide_and_stretchy_sweep_prose_msviii.php");?>" target="_self"><span class="title-essay-JRITWASAWIDEANDSTRETCHYSWEEP">&#x201C;It was a wide and stretchy sweep of lovely blue champaign&#x201D;</span></a> 
                        marks the family's first view of that "celebrated thing", the "Swiss cottage". They were in fact encountering the architecture of the Black Forest house, 
                        not the Alpine chalet, but British guidebooks similarly encouraged the perception of the Black Forest as "Swiss" in character (see the contextual glosses attached to 
                        <a href="<?php echo r_build_url("witnesses/oh_the_morn_looked_bright_on_hill_and_dale_poem_msviii.php");?>" target="_self"><span class="title-poem-JROHTHEMORNLOOKEDBRIGHT">&#x201C;Oh the morn looked bright on hill and dale&#x201D;</span></a>). 
                        Whatever the source of Ruskin's drawing, it appears to depict an Alpine scene, not the Black Forest.
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
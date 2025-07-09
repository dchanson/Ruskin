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
“The Jungfrau“ Drawing 1 of 1
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Jungfrau“ Drawing 1 of 1</span></div>
   <div class="figure">
      <div class="photogravure" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRJUNGFRAUFROMINTERLAKEN">[“The <span class="geogName-JUNGFRAU">Jungfrau</span> from <span class="placeName-INTERLAKEN">Interlaken</span>”]</span></h1>
         Pen and ink, approx. 3 × 3 1/2 inches, based on photogravure, said to be actual size.
         
         
         
         <div class="p">The title presumably originated with <span class="persName-WGC">W. G. Collingwood</span>, editor of 
                    <a href="/notes/bibliography#JRPOEMS4D1891" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRPOEMS4D1891"><i>Poems</i></span> (4<sup>o</sup>, 1891)</a>, 
                    for which the drawing was photogravured (1:140 opp.). However, the title and/or identification of the subject of the drawing may have been known to “<span class="persName-ATAYLOR">Miss Agnes Taylor</span>”, 
                    who is credited with possession of the drawing in <a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSLE"><i>Works</i></span></a>, 38:259 (no. 915). 
                    The current location of the drawing is unknown.</div>
         
         <div class="p">The vignette is also reproduced by photogravure in <a href="/notes/bibliography#JRWORKSLE" target="_self"><span class="persName-JR">Ruskin</span>, <span class="title-book-JRWORKSLE"><i>Works</i></span></a>, 2:380 opp.</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
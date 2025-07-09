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
"Title of Work"
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"Title of Work"</span></div>
   <div class="figure">
      <div class="engraving" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-WILDMANANDREWS"><span class="persName-EA"><span class="caps">R</span><span class="smallcaps">ev<sup>d</sup></span>. <span class="caps">D</span><span class="smallcaps"><sup>r</sup></span>. <span class="caps">A</span><span class="smallcaps">ndrews</span></span>, <span class="placeName-WALWORTH"><i><span class="caps">W</span><span class="smallcaps">alworth</span></i></span></span></h1>
         Attribution: “Engraved by <span class="persName-GP">G. PARKER</span> from an original Painting by <span class="persName-JRW">WILDMAN</span>”, referring possibly to <span class="persName-GP">George Parker</span> (d. <span class="date-1868">1868</span>) 
                        and to <span class="persName-JRW">John Robert Wildman</span> (<span class="date-1788-1843">1788–1843</span>). Medium: stipple engraving (<a href="/notes/bibliography#ODONOGHUECATALOGUE" target="_self"><span class="persName-FODONOGHUE">OʼDonoghue</span> and <span class="persName-HMHAKE">Hake</span>, <span class="title-book-ODONOGHUECATALOGUE"><i>Catalogue of Engraved British Portraits</i></span></a>, 1:48). 
                        Published <span class="date-1828-06">June 1828</span> by Westley & Davis, <span class="placeName-STATIONERSCOURT">Stationers Court</span>, <span class="placeName-LONDON">London</span>, 
                        and featured in the <a href="/notes/evangelical_magazine_note" target="_self"><span class="title-periodical-EVANGELICALMAG"><i>Evangelical Magazine</i></span> 6 n.s. (<span class="date-1828-06">June 1828</span>)</a>: 233 opp. 
                        
                    
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
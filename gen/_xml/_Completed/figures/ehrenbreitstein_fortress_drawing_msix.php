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
“Ehrenbreitstein” Drawing 1 of 2
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX37v-38r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Ehrenbreitstein” Drawing 1 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JREHRENBREITSTEINFORTRESSMSIX">Vignette, Ehrenbreitstein Hill and Fortress at Confluence of Rhine and Moselle</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of the <span class="geogName-RHINE">Rhine</span> with the fortress high on the hill, and the town below” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:355; a facsimile of the page of MS IX containing this drawing and the opening portion of verse is bound opposite p. 355).</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> based his vignette on an engraving, <span class="title-artwork-JMWTEHRENBREITSTEIN1833"><i>Ehrenbreitstein</i></span> by <span class="persName-RW">Robert Wallis</span> after <span class="persName-JMWT">J. M. W. Turner</span>, 
                        published in the <a href="/notes/bibliography#KEEPSAKE1833" target="_self"><span class="title-annual-KEEPSAKE"><i>Keepsake for MDCCCXXXIII</i></span></a> (p. 84 opp.) 
                        (see <a href="/notes/bibliography#WGRENGRAVEDTURNER" target="_self"><span class="persName-WGR">Rawlinson</span>, <span class="title-catalogue-WGRENGRAVEDTURNER"><i>Engraved Work of J. M. W. Turner</i></span></a>, 1:225 [no. 328]; and 
                        <a href="/notes/bibliography#HEWISONETALRUSKINTURNERPRB" target="_self"><span class="persName-RHEWISON">Hewison</span>, <span class="persName-IWARRELL">Warrell</span>, and <span class="persName-SWILDMAN">Wildman</span>, <i>Ruskin, Turner, and the Pre‐Raphaelites</i></a>, 45). 
                        <span class="persName-JMWT">Turner</span>ʼs engraving is not a vignette, but a full‐page, broadside rectangle. In order to reframe the image as a vignette, 
                        <span class="persName-JR">Ruskin</span> may have looked for models to <span class="persName-JMWT">Turner</span>ʼs own vignettes in the 1830 edition of 
                        <span class="persName-SR">Rogers</span>ʼs <span class="title-poem-ROGERSITALY1830"><i>Italy</i></span> (the vignette heading the poem 
                        <span class="title-poem-ROGERSCOMO">“Como”</span> most resembles the subject). Another possible model is a vignette engraving after <span class="persName-DRP">David Roberts</span>, 
                        <span class="title-artwork-ROBERTSDRACHENFELS"><i><span class="geogName-DRACHENFELS">Drachenfels</span></i></span>, published in <a href="/notes/bibliography#BULWERLYTTONPILGRIMS" target="_self"><span class="title-book-BULWERLYTTONPILGRIMS"><i>The Pilgrims of the Rhine</i></span></a> (<span class="date-1834">1834</span>) 
                        by <span class="persName-EBL">Edward Bulwer‐Lytton</span> (p. 100). <span class="persName-DRP">Roberts</span>ʼs <span class="geogName-RHINE">Rhine</span> view 
                        is suggestive of <span class="persName-JMWT">Turner</span>ʼs <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span> scene, but contained in an oval vignette. 
                        <span class="persName-JJR">John James Ruskin</span> acquired <span class="title-book-BULWERLYTTONPILGRIMS"><i>The Pilgrims of the Rhine</i></span> in <span class="date-1834-06">June 1834</span> 
                        (<a href="/notes/bibliography#RFMS28" target="_self"><span class="persName-JJR">John James Ruskin</span>, Account Book [1827–45]</a>, 34v).
                    </div>
         
         <div class="p">For another <span class="persName-JMWT">Turner</span> engraving from this volume of the <span class="title-annual-KEEPSAKE"><i>Keepsake</i></span> 
                        that <span class="persName-JR">Ruskin</span> proposed to adapt as a vignette for the “Account”, but probably never executed, see 
                        <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#FALLOFTHERHINEILLUSGLOSS");?>" target="_self">“Fall of the Rhine” in <span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTS">List of Proposed Additional Contents for the “Account”</span></a>.</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
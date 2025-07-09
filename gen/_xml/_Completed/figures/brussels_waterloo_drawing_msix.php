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
“Brussels” Drawing 3 of 3
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX22v-23r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Brussels” Drawing 3 of 3</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRBRUSSELSWATERLOOMSIX">Vignette, <span class="persName-NBE">Napoleon</span> (or <span class="persName-AWW">Wellington</span>?) at the <span class="date-1815-06-18">Battle of Waterloo</span>, adapted from <span class="persName-JMWT">Turner</span>, <span class="title-artwork-TURNERMARENGO"><i>Marengo</i></span></span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of the field of <span class="placeName-WATERLOO">Waterloo</span>; soldiers with cannon in the foreground; a general on his horse” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:347 n. 1). 
                        While <span class="persName-JR">Ruskin</span> certainly intends the drawing to depict a scene from the <span class="date-1815-06-18">Battle of Waterloo</span>, 
                        which is mentioned in <span class="title-composite-JRBRUSSELSCOMP">“Brussels”</span>—both in the prose section following 
                        the drawing, and in the poem preceding it—he based his drawing on <span class="persName-JMWT">J. M. W. Turner</span>ʼs vignette, 
                        <span class="title-artwork-TURNERMARENGO"><i>Marengo</i></span>, 
                        depicting the <span class="date-1800-06-14">Battle of Marengo</span>, which was engraved for 
                        <a href="/notes/bibliography#ROGERSITALY1830" target="_self"><span class="persName-SR">Samuel Rogers</span>, <span class="title-poem-ROGERSITALY1830"><i>Italy</i> (1830)</span></a> (p. 17; and 
                        see no. 6 of catalog in <a href="/notes/bibliography#PIGGOTTTURNERSVIGNETTES" target="_self"><span class="persName-JPSCHOLAR">Piggott</span>, <span class="title-book-PIGGOTTTURNERSVIGNETTES"><i>Turnerʼs Vignettes</i></span></a>, 98).</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> omits the left side of <span class="persName-JMWT">Turner</span>ʼs original vignette, 
                        copying only the general on his rearing horse and the group gathered around the cannon on the right. 
                        In order to resituate the scene in <span class="placeName-WATERLOO">Waterloo</span>, <span class="persName-JR">Ruskin</span> also omits 
                        the <span class="geogName-ALPS">Alps</span> that <span class="persName-JMWT">Turner</span> shows in the north above the <span class="placeName-PIEDMONT">Piedmont</span> plain; 
                        instead, he indicates the outline of a town in the distance, intended as <span class="placeName-BRUSSELS">Brussels</span>, shown with its two large cathedral towers in silouette. 
                        By adapting <span class="persName-JMWT">Turner</span>ʼs scene to <span class="placeName-WATERLOO">Waterloo</span>, 
                        <span class="persName-JR">Ruskin</span> intensifies <span class="persName-JMWT">Turner</span>ʼs irony. The <span class="date-1800-06-14">Battle of Marengo</span> 
                        was a decisive victory for <span class="persName-NBE">Napoleon</span> in his second Italian campaign against the Austrians, 
                        allegedly causing the British prime minister, <span class="persName-WPY">William Pitt</span> (<span class="date-1759-1806">1759–1806</span>), 
                        to declare with resignation, “Fold up that map”, meaning that the French general had effectively conquered all of Europe 
                        (<a href="/notes/bibliography#PIGGOTTTURNERSVIGNETTES" target="_self"><span class="persName-JPSCHOLAR">Piggott</span>, <span class="title-book-PIGGOTTTURNERSVIGNETTES"><i>Turnerʼs Vignettes</i></span></a>, 38). 
                        In <span class="title-poem-ROGERSITALY1830"><i>Italy</i></span>, this victory is undermined by placing 
                        <span class="persName-JMWT">Turner</span>ʼs vignette above <span class="persName-SR">Rogers</span>ʼs poem, 
                        <span class="title-poem-ROGERSTHEDESCENT">“The Descent”</span>, referring literally to the descent from the mountains 
                        into <span class="placeName-PIEDMONT">Piedmont</span> but figuratively to <span class="persName-NBE">Napoleon</span>ʼs eventual fall. 
                        <span class="persName-JR">Ruskin</span> completes <span class="persName-JMWT">Turner</span>ʼs ironic statement by bringing the image 
                        forward in time to <span class="placeName-WATERLOO">Waterloo</span>.</div>
         
         <div class="p"><span class="persName-JR">Ruskin</span> may also have meant the viewer to displace <span class="persName-NBE">Napoleon</span> as the equestrian figure in the foreground 
                        (which <span class="persName-JMWT">Turner</span> based on the portrait by <span class="persName-JLD">Jacques‐Louis David</span> [<span class="date-1748-1825">1748–1825</span>], 
                        <span class="title-artwork-DAVIDNAPOLEONCROSSINGALPS"><i>Napoleon Crossing the Alps</i></span> [<span class="date-1802-1805">1802–5</span>]) 
                        and to put the victorious <span class="persName-AWW">Wellington</span> in the saddle instead. The figure appears to wear his bicorne with the points “fore and aft” 
                        in <span class="persName-AWW">Wellington</span>ʼs manner, rather than side to side and 
                        parallel with the shoulders in <span class="persName-NBE">Napoleon</span>ʼs signature manner.</div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
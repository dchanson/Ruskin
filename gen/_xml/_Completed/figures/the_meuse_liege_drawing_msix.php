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
“The Meuse” Drawing 2 of 2
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX28r-rotated.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Meuse” Drawing 2 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRTHEMEUSELIEGESIX">Liège</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “a full‐page illustration of a courtyard, with a pillared corridor, steps etc.” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:350 n. 2).</div>
         
         
         <div class="p">The drawing is a copy of <span class="title-artwork-PROUTPALAISPRINCELIEGE"><i>Palais du Prince, Liège</i></span>, by 
                        <a href="/notes/prout_samuel_note" target="_self"><span class="persName-SP">Samuel Prout</span> (<span class="date-1783-1852">1783–1852</span>)</a>, 
                        in <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-artwork-PROUTSKETCHES"><i>Facsimiles of Sketches Made in Flanders and Germany</i></span></a> 
                        (<span class="date-1833">1833</span>). The scene is set inside the Renaissance arcade (the “Court of Honor”) of the 
                        <span class="placeName-building-PRINCEBISHOPSPALACELIEGE">Palais des Princes‐Évêques</span> in <span class="placeName-LIEGE">Liège</span>, 
                        constructed under the patronage of the prince‐bishop, <span class="persName-EDLM">Érard de la Marck</span> (<span class="date-1472-1538">1472–1538</span>, 
                        ruled <span class="date-1506-1538">1506–38</span>). <span class="persName-JR">Ruskin</span> has not made a vignette from <span class="persName-SP">Prout</span>ʼs scene; 
                        rather, by using a full page of <span class="title-manuscript-MSIX">MS IX</span> and setting the drawing broadside, 
                        he is imitating the scale as well as stylistic features of <span class="persName-SP">Prout</span>ʼs original lithograph.</div>
         
         
         <div class="p">In an <span class="date-1828">1828</span> tour account by <span class="persName-SJB">John Barrow</span> (<span class="date-1764-1848">1764–1848</span>), 
                        a description of the palace suggests the picturesque scene inside the arcade that captured <span class="persName-SP">Prout</span>ʼs imagination: 
                        “an imposing old edifice, though somewhat heavy, with an interior quadrangle 
                        containing the public offices and records, and several courts for civil and provincial affairs” 
                        (the prince‐bishopric having succumbed to the French Republic even before the <span class="date-1830-08-25-1831-07-14">Belgian Revolution of 1830</span>). 
                        “The columns supporting the arcade are short and thick, having very much of the Moorish character. Under the arcade are little cells or shops, 
                        in which small articles of daily use of every description are exposed for sale” 
                        (<a href="/notes/bibliography#BARROWFAMILYTOUR" target="_self"><span class="title-book-BARROWFAMILYTOUR"><i>Family Tour through South Holland</i></span></a>, 239). 
                        <span class="persName-JR">Ruskin</span>ʼs cousin, 
                        <a href="/notes/richardson_mary_note" target="_self"><span class="persName-MRC">Mary Richardson</span></a>, mentions the family 
                        visiting the palace on <span class="date-1833-05-23">23 May 1833</span> (<a href="/notes/bibliography#RFT48" target="_self">Diary of Mary Richardson, 1833</a>, p. 11).
                    </div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
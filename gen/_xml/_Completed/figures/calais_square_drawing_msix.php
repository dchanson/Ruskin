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
“Calais” Drawing 4 of 4
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX14v-15r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Calais” Drawing 4 of 4</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-CALAISSQUAREMSIX">Vignette, Calais Town Square with British Tourists</span></h1>
         Pen and ink, approx. 11 × 10.3 cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of <span class="placeName-CALAISSQUARE">Calais Square</span>, or market‐place, with two figures—a man and woman, 
                        and a child (? <span class="persName-JJR">J.J.R.</span>, <span class="persName-MR">M.R.</span>, and <span class="persName-JR">J.R.</span>)—evidently 
                        British, at whom a Frenchman, who is wheeling a barrow near them, looks in amazement. The child has its hands uplifted in wonder, 
                        and is looking at the quaint buildings” (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <span class="title-book-JRWORKSLE"><i>Works</i></span></a>, 2:342 n. 2). 
                        In the editorsʼ description, the second dash should be moved to follow “woman”, 
                        as there are obviously three British family figures.</div>
         
         <div class="p">The editors also gloss the poem and prose sections of “Calais” with the comparison of 
                        <span class="placeName-FRANCE">France</span> and <span class="placeName-ENGLAND">England</span> in 
                        <span class="title-book-JRPOETRYOFARCHITECTURE1893"><i>The Poetry of Architecture</i></span>, §16 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <span class="title-book-JRWORKSLE"><i>Works</i></span></a>, 1:14).</div>
         
         <div class="p">As suggested by the editorsʼ query, it seems unlikely that <span class="persName-JR">Ruskin</span> intended himself, at age 14, for the third figure, 
                        the child, since the child wears skirts and a bonnet. The child figure might be meant as his cousin, 
                        <a href="/notes/richardson_mary_note" target="_self"><span class="persName-MRC">Mary Richardson</span> (1815–49)</a>, 
                        but she was a young woman at this date. More likely, while the drawing may contain some self‐mockery, it is meant to satirize national characteristics generally—an English family, 
                        rotund and naive, contrasted with the skinny Frenchman pushing the wheelbarrow, and thus drawing on such nationalistic tropes as found in 
                        <span class="persName-WHPAINTER">William Hogarth</span>ʼs (<span class="date-1697-1764">1697–1764</span>) 
                        <span class="title-artwork-HOGARTHGATEOFCALAIS"><i>The Gate of Calais; or, The Roast Beef of Old England</i></span> (<span class="date-1748-1749">1748/49</span>).
                    </div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
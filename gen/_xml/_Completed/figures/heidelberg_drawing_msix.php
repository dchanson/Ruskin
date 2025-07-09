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
“Heidelberg” Drawing 1 of 1
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX44v-45r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Heidelberg” Drawing 1 of 1</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRHEIDELBERGDRAWINGMSIX">Vignette, Mountain Prospect Drawing [<span class="geogName-HEILIGENBERG">Heiligenberg</span>?]</span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a “sketch of a town in a large plain, with distant mountains”, 
                        although they misidentify the drawingʼs position in <span class="title-manuscript-MSIX">MS IX</span>—at least, as presently found—ascribing 
                        it to a position between the poem and prose of the <span class="title-composite-JRSTGOARCOMP">“St. Goar”</span> section. 
                        If accurate, that description would have placed the drawing on the verso page (43v) that precedes its current placement (44v) 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:360).</div>
         
         <div class="p">In the <a href="<?php echo r_build_url("witnesses/account_of_a_tour_on_the_continent_toc_msviii.php#ACCOUNTTOCHEIDELBERGILLUS");?>" target="_self"><span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTSILLUS">List of Proposed Additional Contents for the “Account”—Illustrations</span></a>, 
                        which begins with an entry for the section <span class="title-composite-JRHEIDELBERGCOMP">“Heidelberg”</span>, 
                        the plan for illustrations starts with the direction, “Begin with mountain”, followed by some subjects from medieval chivalry and the supernatural, 
                        and ending with a scene on the <span class="geogName-RHINE">Middle Rhine</span> copied from <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-book-PROUTSKETCHES"><i>Facsimiles of Sketches Made in <span class="placeName-FLANDERS">Flanders</span> and <span class="placeName-GERMANY">Germany</span></i></span></a> by 
                        <a href="/notes/prout_samuel_note" target="_self"><span class="persName-SP">Samuel Prout</span> (<span class="date-1783-1852">1783–1852</span>)</a>. 
                        The word “mountain” is scored through, which may have been <span class="persName-JR">Ruskin</span>ʼs indication to himself that he had completed the drawing, 
                        as that mark appears to signify in other instances in the <span class="title-bibliography_text-JRPROPOSEDTABLEOFCONTENTSILLUS">List of Proposed Illustrations</span>.</div>
         
         
         <div class="p">A mystery remains, however; for while this picture does present a mountain prospect, the scene is oddly lacking in <span class="placeName-HEIDELBERG">Heidelberg</span>ʼs most recognizable landmarks. There is no 
                        <span class="placeName-heidelberg_drawing_msixHEIDELBERGCASTLE">Heidelberg Castle</span> nestled against the mountainside, 
                        no arched bridge across the river, no gothic cathedral tower (rather, a round dome is prominent). The mountain might be intended for 
                        the <span class="geogName-HEILIGENBERG">Heiligenberg</span>, which rises above <span class="placeName-HEIDELBERG">Heidelberg</span>, 
                        but that mountain is rounded, unlike the sharp peaks shown in this picture. Also, the plain intervening between the high foreground of the picture 
                        and the distant town seems exaggerated in its expansiveness, unless the scene depicts where the <span class="geogName-NECKAR">Neckar River</span> 
                        emerges from the <span class="geogName-ODENWALD">Odenwald</span> mountain range. There the river flows into a level plain toward 
                        <span class="placeName-MANNHEIM">Mannheim</span>, where it empties into the <span class="geogName-RHINE">Rhine</span>. 
                        In that case, the drawing would complement the lines of the poem describing how “towards the western day, / 
                        Manheims towers softened lay”—but then the mountains shown behind distant <span class="placeName-MANNHEIM">Mannheim</span> would be wrong. 
                        Perhaps <span class="persName-JR">Ruskin</span>ʼs deletion of the word “mountain”, then, acknowledges that he based his vignette on a mistaken idea; 
                        or perhaps more likely, this drawing is misplaced—a mistake that might have occurred when the manuscript was altered by injurious curation (see 
                        <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#CURATORIALTREATMENT" target="_self">Information Lost about the <span class="title-composite-JRACCOUNTTOUR">“Account”</span> owing to Curatorial Treatment of Manuscripts</a>; 
                        and <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#COMPOSITEILLUSTRATEDTRAVELOGUEILLUS" target="_self">Missing and Unidentified Drawings for the Composite‐Genre Illustrated Travelogue (MS IX) and Related <span class="date-1833">1833</span> Tour Sketches</a>.
                        .
                    </div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
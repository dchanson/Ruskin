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
“Cassel” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Cassel” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">When shall we get up this hill, this interminable hill?<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#CASSELLSHILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> Bend after<br/>
                    bend we have been ascending for the last half‐hour, every successive turn<br/>
                    disclosing a weary length of way, and those tiresome windmills at the top<br/>
                    seem as far from us as ever. Windmills have long been celebrated for<br/>
                    gesticulation, celebrated with <span class="persName-MDC">Cervantes</span> all over the world,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#CERVANTESWINDMILLS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> but never saw<br/>
                    I windmills more provokingly alive than at present, with their long<br/>
                    stretchy arms bending to the breeze that flew over the hilltop; they seemed<br/>
                    beckoning us up ironically, while the slow measured step of our<br/>
                    booted postillion, as he tramped it up the hill as much encumbered as a<br/>
                    cat with walnut shells, told us of many a weary moment ere those becks<br/>
                    should, could, or would be obeyed. We are on the summit, a green<br/>
                    plateau of turf, that looks round on the wide plains of <span class="placeName-FRANCE">France</span> without a<br/>
                    single eminence to rival it, and few that can obstruct its view.—Fifteen<br/>
                    battle‐fields are in view from that spot, telling a fearful tale of the ready<br/>
                    ire of nations, yet looking as green and peaceful as if they had never been<br/>
                    watered with blood. They say the cliffs of <span class="placeName-ENGLAND">England</span> are visible from<br/>
            <span class="placeName-CASSEL">Cassel</span>—the 
                    sea certainly is, so I looked in the direction and I did see<div id="" class="pb"></div>
                    something. I had some lurking suspicions it was a cloud, but I chose<br/>
                    to believe it was my own <span class="placeName-ENGLAND">England</span>, and it did quite as well to bid<br/>
                    farewell to.</div>
         
         <div class="p">I love a view like this, for it seems as if you were looking over all the<br/>
                    wide, wide world and were ruling it. Throughout all our after journey I<br/>
                    have seen nothing more beautiful or more wonderful of its kind than the<br/>
                    view from the little, humble, neglected village of—<span class="placeName-CASSEL">Cassel</span>.
                </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
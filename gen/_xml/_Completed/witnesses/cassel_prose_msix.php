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
msix/MSIX16v-17r.jpg msix/MSIX17v-18r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Cassel” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX17r" class="pb"></div>
         
         <div class="p">When shall we get up this hill, this intermin‐<br/>
                    able hill.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_glosses_contextual#CASSELLSHILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> Bend after bend we have been ascen‐<br/>
                    ding for the last half hour every successive<br/>
                    turn disclosing a weary length of way, and<br/>
                    those tiresome windmills at the top seem as far<br/>
                    from us as ever. Windmills have long been<br/>
                    celebrated for gesticulation, celebrated with <span class="persName-MDC">Cer‐<br/>
                    vantes</span> all over the world, but never saw I wind‐<br/>
                    mills more provokingly alive than at present<br/>
                    with their long stretchy arms bending to the<br/>
                    breeze that flew over the hilltop, they seemed<br/>
                    beckoning us up ironically, while, the slow<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span><br/>
            <div id="MSIX17v" class="pb"></div>
                    measured step of our booted postillion as<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><br/>
                    he tramped it up the hill as much encum‐<br/>
                    bered as a cat with walnut shells, told<br/>
                    us of many a weary moment ere those<br/>
                    becks should, could, or would be obeyed.<br/>
                    We are on the summit, a green plateau<br/>
                    of turf, that looks round on the wide<br/>
                    plains of <span class="placeName-FRANCE">France</span> without a single emin‐<br/>
                    ence to rival it and few that can obstruct<br/>
                    its view. —. Fifteen battle‐fields are in<br/>
                    view from that spot, telling a fearful tale<br/>
                    of the ready ire of nations, yet looking as<br/>
                    green and peaceful as if they had never<br/>
                    been watered with blood<span class="g-terminal_comma">,—</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span> They say the<br/>
                    cliffs of <span class="placeName-ENGLAND">England</span> are visible from <span class="placeName-CASSEL">Cassel</span>—<br/>
                    the sea certainly is, so I looked in the<br/>
                    direction, and I did see something—. I had<br/>
                    some lurking suspicions it was a cloud,<br/>
                    but I chose to believe it was my own <span class="placeName-ENGLAND">Eng‐<br/>
                    land</span> and it did quite as well to bid fare‐<br/>
                    well to.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#PARAGRAPHBREAKWITHDASH" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span><br/>
            <div id="MSIX18r" class="pb"></div>
                    I love a view like this, for it seems as if you<br/>
                    were looking over all the wide wide world<br/>
                    and were ruling it. Throughout all our<br/>
                    after journey I have seen nothing more<br/>
                    beautiful or more wonderful of its kind<br/>
                    than the view from the little, humble, neg‐<br/>
                    lected village of—<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cassel_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span> <span class="placeName-CASSEL">Cassel</span>.
                </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
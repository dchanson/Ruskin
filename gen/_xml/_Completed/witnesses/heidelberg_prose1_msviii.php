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
“Most beautiful are the paths” [“Heidelberg”] [essay, part 1]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII71v-72r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Most beautiful are the paths” [“Heidelberg”] [essay, part 1]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">Most beautiful are the paths which scale the face of the<br/>
                    hill which is crowned by the <span class="placeName-building-HEIDELBERGCASTLE">castle of Heidelberg</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#BEAUTIFULPATHS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> <span class="del-strikethrough">fairylike</span>,<br/>
                            winding beneath the twisted branches of green woods, with<br/>
                            here and there a grey crag lifting up its lichened head<br/>
                    from the wilderness of brake<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#BRAKE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> and grass and flowr, that con‐<br/>
                    cealed the mass of that ancient <span class="name--GRANITE">granite</span>, sometimes<br/>
                            supporting a fragment of the remains of the old walls,<br/>
                            with here and there an arrowslit choked up with ivy,<br/>
                            then emerging on narrow vallies, or steep and rocky dells,<br/> 
                            or lovely sweeps of dewy green sward, fresh and flowery,<br/>
                            as ever fairies circled on, and ending on a lofty terrace,<br/>
                            whose precipice base was begirt with meadow land,<br/>
                            at the point where a narrow mountain gorge opened<br/>
                            into the mighty plains of the <span class="geogName-RHINE">Rhine</span>, having in its<br/>
                    embouchure<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#EMBOUCHURE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> the little town of <span class="placeName-HEIDELBERG">Heidelberg</span> with its river<br/>
                            and its tall arched bridge, all glistening under that<br/>
                            most lovely of all lights, the first glow of sunshine,<br/> 
                            after a spring shower. <span class="del-scratchout"><span class="unclear-DCH"></span></span> 18<br/>
            
            </div>         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
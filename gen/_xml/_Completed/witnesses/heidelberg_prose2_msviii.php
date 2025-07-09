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
"Cont. Heidelberg" [essay, part 2]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII77v-78r.jpg msviii/MSVIII78v-79r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>"Cont. Heidelberg" [essay, part 2]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>Cont. Heidelberg</div>
         
         <div class="p">The <span class="placeName-building-HEIDELBERGCASTLE">castle of Heidelberg</span> is exceeding desolate.  Armies<br/>
                    have razed its foundations, the thunder hath riven its<br/>
                            towers and there is no sound in its courts, and the<br/>
                    wind is still in the open galleries.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#DESOLATE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> The grass is very green<br/>
                            on the floor of the hall of the banquet, and the wild<br/>
                            birds build their nests in the watchtowers, and they<br/>
                            dwell in the dwellings of man, for they are forsaken<br/> 
                            and left and there is no voice there — there is no<br/>
                            complaining in the dungeon, and where is the voice of<br/> 
                            gladness in the hall.  It is a ruin, a ruin, a<br/>
                            desolate ruin, the husbandman sees it on the height of<br/>
            <div id="MSVIII78v" class="pb"></div>
                            the hill, as he looks up from the green valley and remem<br/>
                            bers the power of his ancient princes, and knows not<br/>
                            if he should grieve that there power is past away.<br/>
            I know not how it is, but all nations in all ages<br/>
                            seem to have respected the juice of the fruit of the vine<br/></div>            
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“Part of Brussels” [essay, part 1]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII61v-62r.jpg msviii/MSVIII62v-63r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Part of Brussels” [essay, part 1]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>Part of Brussels</div>
         
         <div class="p"><span class="placeName-BRUSSELS">Brussels</span> is a lovely, a queenlike city from a distance, sweeping<br/>
                    up the flanks of its hill, battlement over battlement swelling up,<br/>
                    higher and higher and higher, and the massive darkness of the two<br/> 
                    huge square cathedral towrs looming over the <div 
          class="subst-del s-subst s-del" >l</div><div 
          class="s-subst s-add s-overwrite s-inline">w</div>hole and contrasted<br/> 
                    strangely with the delicate sharp spireness of the steeple of the 
                    <span class="placeName-building-HOTELDEVILLEBRUSSELS">hotel de 
                        <span class="runover" style="left:26.4em">
               ville<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#CATHEDRALHOTELDEVILLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span>
            
            <br/>
            <div id="MSVIII62v" class="pb"></div>.
                    <span class="placeName-PARIS">Paris</span> would look like an assemblage of brick kilns beside<br/> 
                    it.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#PARISBRICKKILNSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> We saw <span class="placeName-BRUSSELS">Brussels</span> at 11 miles distance, its spires rising<br/> 
                    dark and spearlike out of the horizon— It was waxing dark<br/>
                    as we entered the city, and the lights began to twinkle in the<br/>
                    few, the very few shop windows. I love to pass through a city<br/> 
            <span class="del-strikethrough">by</span> at night, the hum of the voices rises so softly out of<br/> 
                    the obscurity, and the figures flit about dark and batlike and<br/>
                    the cold starlight mingles so strangely with the red swarthy<br/> 
                    gleam of the lamps <span class="del-strikethrough">light</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#LAMPLIGHT" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> and when you look up, the narrow<br/> 
                    strip of sky is of such a dark dark blue, you may see it<br/> 
                    appear to quiver with the starlight if you look long, and the<br/> 
                    white housefronts rise so ghastly so ghostlike against <div 
          class="s-subst s-add s-overwrite s-inline">i</div><div 
          class="subst-del s-subst s-del" >,</div>t, and<br/>
                    the windows seem grinning maliciously askan<div 
          class="s-subst s-add s-overwrite s-inline">ce</div><div 
          class="subst-del s-subst s-del" >t</div> at you, It makes<br/> 
                    one shiver <u>to</u> think of it.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#WAXINGDARKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> Cities are exceedingly picturesque when built<br/> 
                    upon hills, but for exploring, for circumnavigating, for <span class="del-strikethrough">traversing</span>,<br/> 
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
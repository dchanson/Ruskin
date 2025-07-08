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
"St. Goar" [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII56v-57r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>"St. Goar" [essay]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="p"><span class="placeName-STGOAR">St Goar</span> is the least and sweetest place on all the <span class="geogName-RHINE">Rhine</span>. There is <span class="placeName-GODESBERG">Godesberg</span><br/> 
                    with its hilltop crested with <span class="placeName-GODESBURG">ruins</span>, there is <span class="placeName-ANDERNACH">Andernacht</span>, with its venerable<br/> 
                    remains of antiquity there is <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span>, on whose cliff never traitor stood<br/> 
                    looking out far away over the <div 
              class="add-above" 
              style="left:10.8em">its</div> sea of rich champaign country, but there<br/> 
                    is nothing like, <span class="placeName-STGOAR">St Goar</span>. It has a lone hill beauty, the little scene round<br/> 
                    it is exceeding small, but it has a modest secluded loveliness,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_prose_glosses_textual#STGOARTERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> You look<br/> 
                    on <span class="placeName-ANDERNACH">Andernacht</span> with veneration, on <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span> with awe, but on <span class="placeName-STGOAR">St<br/> 
                        Goar</span> with love<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARLOVEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> There is a voice in all nature,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_prose_glosses_textual#STGOARTERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><div 
              class="add-above" 
              style="left:18.4em">List to the rave of the mad sea</div> Speaks it not eloquent‐<br/> 
                    ly, does it not tell of its green weedy caverns and its coral towers<br/> 
            <span class="del-strikethrough">A</span> and the high hills and shelly vallies far far beneath its cold<br/> 
                    blue, and the skulls of the drowned men that grin from<br/> 
                    among its rolled round pebbles.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARSKULLSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> List to the song of the<br/> 
                    summer breeze and does it not tell of the blue heavens<br/> 
                    and the white clouds and other climes and other seasons<br/> 
                    and spicy gales and myrtle bowers and sweet things far away<br/> 
                    How softly the <span class="geogName-RHINE">Rhine</span> sings at <span class="placeName-STGOAR">St Goar</span>, and it tells of the cold<br/> 
                    arched grottoes of the glacier and the crags of the far <span class="geogName-ALPS">Alps</span>, and<br/> 
            <span class="del-strikethrough">it</span> how it joys to dash against grey rocks once more.</div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
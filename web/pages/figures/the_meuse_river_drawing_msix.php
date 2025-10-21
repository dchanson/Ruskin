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
“The Meuse” Drawing 1 of 2
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX26v-27r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>&#x201C;The Meuse&#x201D; Drawing 1 of 2</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRTHEMEUSERIVERMSIX">Vignette, the Meuse River and Cliffs</span></h1>
         Pen and ink, approx. ? &#x00D7; ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as a &#x201C;a sketch of a calm, broad river: on one side, a rocky road; on the other, crags&#x201D; 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:349 n. 1). 
                        A solitary rider on horseback follows the road, moving away from the viewer.
         </div>
         
         <div class="p">See, in the poem <a href="<?php echo r_build_url("witnesses/the_meuse_poem_msix.php");?>" target="_self"><span class="title-poem-JRTHEMEUSE">&#x201C;The sky was clear, the morn way gay&#x201D; &#x005B;&#x201C;The Meuse&#x201D;&#x005D;</span></a>, 
                        the lines &#x201C;Peak over peak, fantastic ever / The lofty crags deep chasms sever. / And grey and gaunt their lichened head / 
                        Rose sheerly from the rivers bed&#x201C; along with accompanying gloss.
         </div>
         
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“Andernacht” [section title]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX34v-35r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url("apparatuses/account_of_a_tour_on_the_continent_apparatus.php#account_of_a_tour_on_the_continent_msix"); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>&#x201C;Andernacht&#x201D; &#x005B;section title&#x005D;</span></div><div id="MSIX35r" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:4.4em"> </span><span class="title-composite-JRANDERNACHTCOMP"><span class="smallcaps">ANDERNACHT</span></span><span class="gloss-inline">
          <a href="../glosses/andernacht_poem_glosses_textual.php#ANDERNACHTBLANK" target="_blank" class="inactive">
          

                <span class="gloss-textual">
                a
                </span>

              </a></span></span> 
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
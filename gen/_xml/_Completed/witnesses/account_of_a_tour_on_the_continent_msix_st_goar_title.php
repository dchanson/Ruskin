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
[St Goar] [section title]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX42v-43r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>[St Goar] [section title]</span></div><div id="MSIX35R" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="title-composite-JRSTGOARCOMP">[<span class="smallcaps">ST GOAR</span>]</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_poem_glosses_textual#STGOARBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span> 
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“Wales”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229186.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url("wales_houghton.php"); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>&#x201C;Wales&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="page-title"><span class="caps">Wales</span></div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That rock with waving<span class="runover" style="left:3.6em">willows on its side</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>that hill with beauteous<span class="runover" style="left:3.2em">forests on its top</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That stream that with its rippling<span class="runover" style="left:4.4em">waves doth glide</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>and oh what beauties has that<span class="runover" style="left:3.6em">mountain got<span class="gloss-inline">
          <a href="../glosses/wales_glosses_contextual.php#LINE4STANZABREAK" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>That rock stands high
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">against,<span class="gloss-inline">
          <a href="../glosses/wales_glosses_contextual.php#LINE6COMMA" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> the sky</span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>those trees stand firm upon<span class="runover" style="left:4.4em">the rock</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>and seem as if they all<span class="runover" style="left:3.6em">did lock</span></span><br/>
            <div id="1229186r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:2.4em"> </span>65</div><br/>                       
            <span class="l">into each other.<span class="gloss-inline">
          <a href="../glosses/wales_glosses_contextual.php#LINE9SEMICOLON" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> tall they stand</span><br/>
            <span class="l">towering above the whitened land
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            
         </div>
         
      </div>
   </div><div class="half"></div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
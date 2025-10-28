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
houghton/modbm_ms_am_1088_5955_0003.jpg houghton/modbm_ms_am_1088_5955_0004.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url("wales_msiii.php"); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>&#x201C;Wales&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title"><span class="space" style="padding-left:2.4em"> </span><span class="caps">Wales</span></div>
         
         <div class="lg-stanza">
            <span class="l">That rock with waving willows on its<span class="runover" style="left:4.0em">side</span></span><br/>
            <span class="l">That hill with beauteous forests on its top</span><br/>
            <span class="l">That stream that with its rippling waves<span class="runover" style="left:5.2em">doth glide</span></span><br/>
            <span class="l">And oh what beauties <span class="del-strikethrough">beauties</span> has that mountain<span class="runover" style="left:17.6em">got<span class="gloss-inline">
          <a href="../glosses/wales_glosses_contextual.php#LINE4STANZABREAK" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span></span><br/>
            <div id="modbm_ms_am_1088_5955_0004" class="pb"></div>
            <span class="l">That rock stands high
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">against<span class="gloss-inline">
          <a href="../glosses/wales_glosses_contextual.php#LINE6COMMA" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> the sky</span><br/>
            <span class="l">Those trees stand firm upon the rock</span><br/>
            <span class="l">and seem as if they all did lock</span><br/>
            <span class="l">Into each other;<span class="gloss-inline">
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
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“The Hill of Kinnoul”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229186.jpg msiii/1229187.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Hill of Kinnoul”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">The hill of kinnoul</h1>
         
         <div class="lg-stanza">
            <span class="l">First winding round the base of<span class="runover" style="left:2.8em"><span class="geogName-KINNOULLHL">that smooth rock</span></span></span><br/>
            <span class="l">Flows the glass <span class="geogName-TAYRIV">tay</span> not always<span class="runover" style="left:2.4em">quite so smooth</span></span><br/>
            <span class="l">as that clear substance. from the<span class="runover" style="left:2.4em">surface rises</span></span><br/>
            <span class="l"><span class="geogName-KINNOULLHL">a steep rock</span> and towering oer<span class="runover" style="left:9.2em">its head</span></span><br/>
            <span class="l">appear the high topped trees
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div><span class="runover" style="left:3.6em">above below</span></span><br/>
            <span class="l">green natures colour stands<span class="runover" style="left:2.4em"><span class="geogName-KINNOULLHL">upon the rock</span></span></span><br/>
            <span class="l">and high above thy head<span class="runover" style="left:2.0em">appears the <span class="unclear-smudged-">gre</span>en of trees</span></span><br/>
            <span class="l">walk on the top of that <span class="geogName-KINNOULLHL">rock</span> and<span class="runover" style="left:3.6em">look down</span></span><br/>
            <span class="l">from thence upon the <span class="geogName-TAYRIV">tay</span> the<span class="runover" style="left:3.6em">precipice</span></span><br/>
            <div id="1229187v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>66</div><br/>
            <span class="l">tween thee and it doth make thee
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:11.2em">giddy</span></span><br/>
            <span class="l">it is so high that from<span class="runover" style="left:2.4em">it seen the <span class="geogName-TAYRIV">tay</span></span></span><br/>
            <span class="l">appears like a little rivulet among<span class="runover" style="left:4.8em">the hills</span></span><br/>
            <span class="l">dwindling into nothing mong<span class="runover" style="left:3.6em"><span class="geogName-GRAMPIANS">the distant mountains</span></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
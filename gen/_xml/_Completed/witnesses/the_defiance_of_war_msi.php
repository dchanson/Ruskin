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
“The Defiance of War”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msi/1229145.jpg msi/1229146.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Defiance of War”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:4.0em"> </span>poem III<br/><span class="space" style="padding-left:4.0em"> </span>The defia<span class="del-erasure"><span class="unclear-CWB">t</span><span class="gap-illegible" style="padding-left: 2em"></span><span class="unclear-CWB">ll</span></span><span class="add-overwriting">nce of war</span><span class="del-erasure"><span class="unclear-CWB">woe</span></span></div>
         <br/>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.8em"> </span><span class="doubleletter-fill">W</span><span class="smallcaps">ar</span> war thou art beating thy<span class="runover" style="left:12.0em"><span class="g-runover">[</span>drum</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>but we wish thee not to come</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>we like better our peaceful home</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>you like better than us to come</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>but weʼll conquer in spite of thee
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>you like better a king to be</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>than us to conquer but shall not he</span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>the strongest of us the conqueror be</span><br/>
            <div id="1229146lv" class="pb"></div> 
            <div class="pageNum-top-left">102</div><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span><div 
          class="subst-del s-subst s-del" ><span class="unclear-CWB">s</span></div><div 
          class="s-subst s-add s-overwrite s-inline"><span class="doubleletter-fill">Y</span></div>es yes he shall be so</span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>thy army shall to us cry oh
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>we will make thy army know</span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>whats a warrior and whats a doe</span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>fly fly make thy army fly</span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>else thy army here shall die</span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>thy army here shall mercy cry
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>or else they here shall suffering die</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
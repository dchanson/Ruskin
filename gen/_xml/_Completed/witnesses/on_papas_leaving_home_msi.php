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
"On Papa's Leaving Home"
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msi/1229146.jpg msi/1229147.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"On Papa's Leaving Home"</span></div>
   <div class="witness">
      <div class="poem" id="">               
         
         <h1 class="page-title">poem <span class="del-erasure">IIII</span><span class="add-overwriting">V</span><br/>on papas leave<span class="del">e</span><span class="add-overwriting">i</span>ng home</h1>
         
         <div class="lg-stanza">  
            <span class="l">Papas leaving home was a moment<span class="runover" style="left:8.4em"><span class="g-runover">[</span>of sorrow<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_papas_leaving_home_glosses_textual#RUNOVER" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span><br/></span></span><br/>
            <div id="1229147v" class="pb"></div>
            <div class="pageNum-top-left">104</div><br/> 
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>because he was not to come<span class="runover" style="left:2.8em">back to‐morrow</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>but we thought that the w<div 
          class="subst-del s-subst s-del" >o</div><div 
          class="s-subst s-add s-overwrite s-inline">h</div>ole<span class="runover" style="left:3.2em">was a travel and <span class="overwriting">n</span>ow</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>he might come back in days<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_papas_leaving_home_glosses_contextual#TRAVELGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span><span class="runover" style="left:3.2em">with the ladies that bow</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>The ladies that bow are the
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div><span class="runover"><span class="del"><span class="space" style="padding-left:4.8em"> </span></span><span class="add">pictures and</span>presents</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>and we thought that we might<span class="runover" style="left:4.0em">have a peep at the peasants</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>so we cheered our<div 
          class="subst-del s-subst s-del" ><span class="space" style="padding-left:0.4em"> </span>s<span class="unclear-CWB">e</span></div><div 
          class="s-subst s-add s-overwrite s-inline">sel</div>ves up<span class="runover" style="left:2.0em">with the hope of the days</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>when papa might come back<span class="runover" style="left:1.6em">again show us the ways</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>and <div 
          class="subst-del s-subst s-del" >d</div><div 
          class="s-subst s-add s-overwrite s-inline">p</div>lease him and please<span class="runover" style="left:3.6em">him till all was so well</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>that from joy to his sorrow
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:1.6em">he never has fell.</span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
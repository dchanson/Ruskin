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
“On Scotland”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msi/1229145.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“On Scotland”</span></div>
   <div class="witness">
      <div class="poem" id="">             
         
         <div class="title" id="@"><span class="space" style="padding-left:2.0em"> </span>poem II<span class="runover" style="left:2.0em">on scotland</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:0.8em"> </span><span class="doubleletter-fill">O</span> what a change from<span class="runover" style="left:2.4em">pretty <span class="placeName-PERTH">perth</span> so near</span></span><br/>
            <span class="l">to dreary heather and to<div class="g-justification" style="width:NaNem"> </div><span class="runover" style="left:2.8em">streams so clear</span></span><br/>
            <span class="l">to rocks and stones upon the<span class="del-erasure"><div 
              class="add-below" 
              style="left:9.2em">dreary way</div></span><span class="runover" style="left:2.8em">dreary way</span></span><br/>
            <span class="l">no sun is shining as on <span class="del-erasure">sprig</span><span class="runover" style="left:2.8em">sprightly may</span></span><br/>
            <span class="l">again it changes to the
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div><span class="runover" style="left:2.4em">winding <span class="geogName-EARN">ern</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_scotland_glosses_contextual#ERNGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span></span><br/>
            <span class="l">tis shallow water but it has<span class="runover" style="left:3.6em"><div 
          class="subst-del s-subst s-del" >i</div><div 
          class="s-subst s-add s-overwrite s-inline">n</div>o fern</span></span><br/>
            <span class="l">but it is precious for its<div class="g-justification" style="width:NaNem"> </div><span class="runover" style="left:2.8em">shining <div 
          class="subst-del s-subst s-del" ><span class="unclear-CWB">pearls</span></div><div 
          class="s-subst s-add s-overwrite s-inline">drops</div></span></span><br/>
            <span class="l">and <div 
          class="subst-del s-subst s-del" ><span class="unclear-CWB">tis a river that has</span></div><div 
          class="s-subst s-add s-overwrite s-inline">sometimes from the</div><span class="runover" style="left:2.0em"><span class="del-erasure"><span class="unclear-CWB"><span class="gap" style="padding-left:0.4em"> </span>la<span class="gap-illegible" style="padding-left: 2em"></span></span></span>
               <div id="1229145r" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:7.6em"> </span>101</div><br/>
               <span class="space" style="padding-left:1.2em"> </span><span class="geogName-EARN">river</span> a fish pops</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.8em"> </span>again it changes to a steep<span class="runover" style="left:2.4em">steep hill</span></span><br/>
            <span class="l"><span class="space" style="padding-left:0.4em"> </span>and it is cold do any thi<div 
          class="subst-del s-subst s-del" ><span class="unclear-CWB">g</span></div><div 
          class="s-subst s-add s-overwrite s-inline">n</div>g
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:3.2em">you will</span></span><br/>
            <span class="l">in short such changes<span class="runover" style="left:2.0em"><span class="placeName-SCOTLAND">scotland</span> does <div 
          class="subst-del s-subst s-del" >m</div><div 
          class="s-subst s-add s-overwrite s-inline">no</div>w take</span></span><br/>
            <span class="l">that I canʼt tell them an<div 
          class="subst-del s-subst s-del" ><span class="space" style="padding-left:0.4em"> </span>I</div><div 
          class="s-subst s-add s-overwrite s-inline">d<span class="space" style="padding-left:0.4em"> </span>I</div><span class="runover">quickly end<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_scotland_glosses_contextual#COLLINGWOODSENDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
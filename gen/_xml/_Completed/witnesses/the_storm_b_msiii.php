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
“The Storm” [Version B]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229188.jpg msiii/1229189.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Storm” [Version B]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">S</span><span class="smallcaps">ee</span> how from yonder hills the clouds<span class="runover" style="left:12.0em">collect</span></span><br/>
            <span class="l">And see how dark and dreary they do<span class="runover" style="left:12.8em">look</span></span><br/>
            <span class="l">Promising hail and snow the birds<span class="runover" style="left:12.0em">retire</span></span><br/>
            <span class="l">Into their nests and chirp and scream</span><br/>
            <span class="l">Prophesying the coming storm down
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div><span class="runover" style="left:4.8em">pours the snow</span></span><br/>
            <span class="l">Covering the hedges and the<span class="runover" style="left:4.0em">houses tops</span></span><br/>
            <div id="1229189v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:2.8em"> </span>70</div><br/>                        
            <span class="l">Loud howls the wind and<span class="runover" style="left:2.0em">whistling roots up many a tree</span></span><br/>
            <span class="l">The sheep bleat loudly and the<span class="runover" style="left:9.2em">careful dog</span></span><br/>
            <span class="l">Collecting them in a flock conducts<span class="runover" style="left:5.2em">them home</span></span><br/>
            <span class="l">Then when the storm is over
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:2.4em">from the clouds</span></span><br/>
            <span class="l">Peeps forth the sun and shining<span class="runover" style="left:2.4em">on the snow</span></span><br/>
            <span class="l">Gives it that dazzling whiteness<span class="runover" style="left:4.4em">to the eye</span></span><br/>
            <span class="l">In which its principle beauty<span class="runover" style="left:3.2em">doth consist</span></span><br/>
            <span class="l">And so in beginning another<span class="runover" style="left:3.6em">line I end</span></span><br/>
            </div>
         </div>
   </div><br/><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
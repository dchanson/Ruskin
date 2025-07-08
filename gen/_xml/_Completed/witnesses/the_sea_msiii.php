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
“The Sea”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229188.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Sea”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:2.8em"> </span>The sea</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">F</span><span class="smallcaps">low</span> on thou calm sea bear the ships to their<span class="runover" style="left:16.8em">ports</span></span><br/>
            <span class="l">man of war<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_sea_glosses_contextual#MANOFWARGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> smack<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_sea_glosses_contextual#SMACKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> or sloop<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_sea_glosses_contextual#SLOOPGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> all the different<span class="runover" style="left:18.8em">sorts</span></span><br/>
            <span class="l">do not throw them on rocks do not send them on<span class="runover" style="left:18.4em">high</span></span><br/>
            <span class="l">or make them upon the high precipice lie</span><br/>
            <span class="l">no profit to thee doth this havoc produce
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">while to men this great treasureʼs of<span class="runover" style="left:5.2em">infinite use</span></span><br/>
            <span class="l">for money is generally aboard these<span class="runover" style="left:4.0em">fine ships</span></span><br/>
            <span class="l">that go over the ocean into which<span class="runover" style="left:4.8em">their flag dips<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_sea_glosses_textual#LINE8APOSTROPHE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
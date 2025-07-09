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
149. "Assist me oh thou muse divine"
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>149. "Assist me oh thou muse divine"</span></div>
   <div class="essay" id="">
      
      <h1 class="page-title">149. “Assist me oh thou muse divine” Witness</h1>
      
      <div class="p">149. “Assist me oh thou muse divine,” <span class="date-1831-12">December 1831</span> to <span class="date-1832-01">January 1832</span>, 
                    MS VIII. Previously unpublished.</div>
      
      
      <div class="p">See no. 148 for dating. This mock-epic lyric provided a break from the composition of the epic “Athens” 
                    (no. 135)—a portion of which it follows, and from which it is divided by an ornamental line. For <span class="persName-JR">Ruskin’s</span> 
                    dog Dash, see, e.g., no. 144. I know of no other reference to the cat Douna.
                </div>
      </div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">Assist me oh thou muse divine</h1>
         
         <div class="lg-stanza">
            <span class="l">Assist me oh thou muse divine</span><br/>
            <span class="l">And ye sacred sisters nine</span><br/>
            <span class="l">For Im in <span class="del">an</span> the need</span><br/>
            <span class="l">I have got a theme indeed</span><br/>
            <span class="l">Let me now acquire much honour
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Sung the wars of Dash and Douna</span><br/>
            
            <span class="l">They were with gentle touch and paw sir</span><br/>
            <span class="l">A most loving dog and cat sir</span><br/>
            <span class="l">But they took an angry fit on</span><br/>
            <span class="l">When she introduced the kitten
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l"><span class="del">One</span> Cat liked that and dog liked this</span><br/>
            <span class="l">Then twas scratch and spit and phiz</span><br/>               
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
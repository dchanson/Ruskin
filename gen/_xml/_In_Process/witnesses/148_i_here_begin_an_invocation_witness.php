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
“I here begin an invocation”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“I here begin an invocation”</span></div>
   <div class="essay" id="">
      
      <h1 class="page-title">148. “I here begin an invocation”</h1>
      
      <div class="p">148. “I here begin an invocation,” <span class="date-1831-12">December 1831</span> to 
                    <span class="date-1832-01">January 1832</span>, MS VIII. Previously unpublished.</div>
      
      
      <div class="p">Nos. 148–56 and 158 are listed by their seriatim positions in MS VIII; their two-month parameters for dating 
                    are established by nos. 147 and 159; see also no. 152.</div>
      
      
      <div class="p">No. 148 concerns <span class="persName-JR">Ruskin’s</span> getting “hapenny a line” for his Greek, probably referring to his translation of the 
                    Iliad. In a letter of <span class="date-1832-02-20">February 20, 1832</span>, he counts lines of his Homer, presumably for payment, since he is 
                    ”translating forty lines . . . per day most regularly, an employment which I suppose you would very gladly 
                    allow me to break off from” (RFL, 262)—his irony and his 40-per-day quota matching earlier remarks about 
                    payment for “Iteriad” (see no. 91). Since no. 148 heads a page on which <span class="persName-JR">Ruskin</span> resumes his draft of “Athens” 
                    (no. 135), he may also have expected halfpennies for lines of this epic, just as he had gotten a farthing per 
                    line of “Iteriad.” Payment for the Iliad translation is better documented, however. </div>
      </div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">I here begin an invocation</h1>
         
         <div class="lg-stanza">
            <span class="l">I here begin an invocation</span><br/>
            <span class="l">For silvery remuneration</span><br/>
            <span class="l">I have invoked before the mine</span><br/>
            <span class="l">But now a hapenny a line</span><br/>
            <span class="l"><span class="del">W</span> Its is a pity I forget
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/> 
            <span class="l">The elegant and polished greek</span><br/>
            <span class="l">Of silver If I could Im sure</span><br/>
            <span class="l">I should not long remain so poor</span><br/>
            <span class="l">The greek the greek it is so fine</span><br/>
            <span class="l">Im sure a hapenny a line
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Is not to much dont say you shant</span><br/>
            <span class="l">Im sure its not exorbitant</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
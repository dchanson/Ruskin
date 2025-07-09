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
“Glen of Glenfarg” [“Glen of Glenfarg thy beauteous rill”]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229187.jpg msiii/1229188.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Glen of Glenfarg” [“Glen of Glenfarg thy beauteous rill”]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:2.4em"> </span>glen of glenfarg</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:1.2em"> </span><span class="caps">GL</span><span class="smallcaps">en</span> of <span class="geogName-GLENFARG">glenfarg</span> thy beaut<div 
          class="subst-del s-subst s-del" ><span class="unclear-EKF">ifu</span></div><div 
          class="s-subst s-add s-overwrite s-inline">eo</div><div 
          class="s-subst s-add s-inline">us</div><div 
              class="add-above" 
              style="left:12.0em"><span class="g-runover">[</span>rill</div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#BEAUTEOUSRILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>Streaming through thy <span class="geogName-OCHILS">mountains</span><span class="runover" style="left:6.0em">high</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>onward pressing onward still</span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>hardly seeing the blue sky<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#BLUESKYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>Mountain streams press on
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div><span class="runover" style="left:5.2em">your way</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>and run into the stream<span class="runover" style="left:10.4em">below</span></span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>never stop like idle clay</span><br/>
            <span class="l"><span class="space" style="padding-left:1.2em"> </span>hear the sheep and cattle low</span><br/>
            </div>
         <div class="quarter"></div>
         <div id="1229187r" class="pb"></div>
         <div class="pageNum-top"><span class="space" style="padding-left:2.8em"> </span>67</div><br/>
         
         <div class="lg-stanza">
            <span class="l">Stones that in the stream<span class="runover" style="left:9.2em">do lie</span></span><br/>
            <span class="l">bear the rushing torrent still
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">thou shalt never never die</span><br/>
            <span class="l">submit unto the almightys will</span><br/>
            </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Cows that lie upon the grass</span><br/>
            <span class="l">rise and graze upon the <span class="geogName-OCHILS">hills</span></span><br/>
            <span class="l">never be a heavy mass
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">like a stone thats in the rills</span><br/>
            </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Sheep that eat upon the <span class="geogName-OCHILS">hills</span></span><br/>
            <span class="l">rise and play and jump about</span><br/>
            <span class="l">drink out of the running rills</span><br/>
            <span class="l">and always on the grass be out
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            </div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">Cottages upon the <span class="geogName-GLENFARG">plain</span></span><br/>
            <span class="l">placed so near the floury mills<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#FLOURYMILLSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">cottager look on <span class="name--CHARLESSWAIN">charlesʼs wain</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#CHARLESSWAINGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l">right above the grassy hills</span><br/>
            </div>
         <div class="quarter"></div>
         <span class="space" style="padding-left:2.0em"> </span><span class="note-gloss-MR"><span class="date-1826-09">Sep<sup>t</sup>. 1826</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#SEPTEMBER1826GLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span></span>
         <div id="1229188v" class="pb"></div>
         <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>68</div><br/>
         
         <div class="lg-stanza">
            <span class="l">The <span class="placeName-NORTHSTAR">pole star</span> guides thee
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div><span class="runover" style="left:3.2em">on thy way</span></span><br/>
            <span class="l">when in dark nights thou art<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/glen_of_glenfarg_glosses_contextual#WORDINBRACKETSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span></span><br/>
            <span class="l">therefore look up at the starry<span class="runover" style="left:10.4em">day</span></span><br/>
            <span class="l">look at the stars about thee<span class="runover" style="left:10.4em">tost</span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
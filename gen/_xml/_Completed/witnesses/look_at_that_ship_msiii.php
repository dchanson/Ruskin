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
“The Ship” and “Look at That Ship” [1827]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229169.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="<?php echo r_build_url("witnesses/look_at_that_ship_msxi.php");?>" target="_self">MS XI witness</a><br/></div>
   <div class="fileName"><span>“The Ship” and “Look at That Ship” [1827]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:2.8em"> </span><span class="bold-caps">The Ship</span></div>
         
         <div class="lg-stanza">
            <span class="l"><b><span class="caps">L</span><span class="smallcaps">ook</span></b> at that ship</span><br/>
            <span class="l"><b>H</b>er flying streamer and her mountain sides</span><br/>
            <span class="l"><b>H</b>er towering <span class="overwriting">m</span>ast and filling sails with drops</span><br/>
            <span class="l"><b>Of</b> water hanging to her high buil<div 
          class="subst-del s-subst s-del" >d</div><div 
          class="s-subst s-add s-overwrite s-inline">t</div> side<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/look_at_that_ship_glosses_textual#BUIL" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l"><b>Glitteri</b>ng like diamonds dangling in the sun
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l"><b>Y</b>et soon it lessens lessens more and more</span><br/>
            <span class="l"><b>T</b>ill to a spec<span class="overwriting">k</span> reduced it vanishes complete</span><br/>
            <span class="l">And to the dangers of the sea exposed</span><br/>
            <span class="l">The sailors look with horror at the waves</span><br/>
            <span class="l">Then through the clouds the sun shoots forth
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:5.6em">his beams</span></span><br/>
            <span class="l">The clouds disperse and bright blue sky<span class="runover" style="left:5.6em">comes forth.</span></span><br/>
            <span class="l">The waters sparkle and at distance seen the specks</span><br/>
            <span class="l">Of other vessels swimming on the expanse</span><br/>
            <span class="l">of ocean. some of them do disappear complete</span><br/>
            <span class="l">While others largen coming nearer near
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Then gliding off each take a different course</span><br/>
            <span class="l">And disappear again. When shore afar is seen</span><br/>
            <div id="1229169r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:5.6em"> </span>32</div><br/>
            <br/>
            <span class="l">And on the vessel drives when landing safe</span><br/>
            <span class="l">she rides at anchor floating on the waves</span><br/>
            <span class="l">At length the anchor pulled she drives away
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">And passes on a loud explosion heard</span><br/>
            <span class="l">The air around them darkened with the smoke</span><br/>
            <span class="l">And steam a steamboat then had burst</span><br/>
            <span class="l">While from among the smoke the vessel quickly<span class="runover" style="left:5.6em">goes</span></span><br/>
            <span class="l">And gladly spies homes cliffs and home she
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div><span class="runover" style="left:4.8em">goes.</span></span><br/>
            </div>
         </div>
   </div><div class="full"></div><br/><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
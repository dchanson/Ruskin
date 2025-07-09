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
>“Lines Written at the Lakes in Cumberland”
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>>“Lines Written at the Lakes in Cumberland”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">L<span class="smallcaps">INES</span> W<span class="smallcaps">RITTEN AT THE</span> L<span class="smallcaps">AKES IN</span> <span class="placeName-CUMBERLAND">C<span class="smallcaps">UMBERLAND</span></span>. <span class="geogName-DERWENTWATER">D<span class="smallcaps">erwentwater</span>.</span>.</h1>
         
         <div class="lg-stanza">
            <span class="l">Sweet <span class="geogName-DERWENTWATER">Derwent</span>! on thy winding shore,</span><br/>
            <span class="l">Beside thy mountain forests hoar,</span><br/>
            <span class="l">There would I love<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#LOVEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> to wander still;</span><br/>
            <span class="l">And drink from out the rippling rill,</span><br/>
            <span class="l">Which from thy rocky head doth fall,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#DOTHFALLGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">And mingles with the eagleʼs call;</span><br/>
            <span class="l">While from <span class="geogName-HELVELLYN">Helvellyn</span> thunders break,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#BREAKGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l">Re‐echoed from old <span class="geogName-DERWENTWATER">Derwent</span>ʼs lake.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#FROMOLDGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span><br/>
            <span class="l">And where the lightningʼs flaming dart</span><br/>
            <span class="l">Plays oʼer the Poetʼs eye, and warms his heart:
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Though such thy glories, Earth, thy proudest whole,</span><br/>
            <span class="l">Can never satiate the grasping soul!<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#DARTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
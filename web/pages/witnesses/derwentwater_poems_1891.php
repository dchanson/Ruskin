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
“Derwentwater”
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>&#x201C;Derwentwater&#x201D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"> <span class="geogName-DERWENTWATER"><span class="caps">DERWENTWATER</span></span>.
         </h1>
         
         <div class="lg-stanza">
            <span class="l">N<span class="smallcaps">ow</span> <span class="geogName-DERWENTWATER">Derwentwater</span> come!&#x2014;a looking&#x2010;glass<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#LOOKINGGLASSGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Wherein reflected are the mountain&#x02BC;s heights,</span><br/>
            <span class="l">As in a mirror, framed in rocks and woods;</span><br/>
            <span class="l">So upon thee there is a seeming mount,</span><br/>
            <span class="l">A seeming tree, a seeming rivulet.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">All upon thee are painted by a hand</span><br/>
            <span class="l">Which not a critic can well criticise.</span><br/>
            <span class="l">But to disturb thee oft, bluff <span class="persName-fictional-AEOLUS">Eolus</span></span><br/>
            <span class="l">Descends upon the mountains, with his breath.</span><br/>
            <span class="l">Thy polished surface is a boy at play
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Who labours at the snow to make a man,</span><br/>
            <span class="l">And when he&#x02BC;s made it, knocks it down again;&#x2014;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#MADEITGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">As when thou&#x02BC;st made a picture thou dost play</span><br/>
            <span class="l">At tearing it to pieces. Trees do first</span><br/>
            <span class="l">Tremble, as if a monstrous heart of oak
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Were but an aspen leaf; and then as if</span><br/>
            <span class="l">It were a cobweb in the tempest&#x02BC;s blow.</span><br/>
            <span class="l">Thus like <span class="persName-fictional-PENELOPE">Penelope</span> thou weav&#x02BC;st a web</span><br/>
            <span class="l">And then thou dost undo it. Thou&#x02BC;rt like her</span><br/>
            <span class="l">Because thou&#x02BC;rt fair, and oft deceiving too.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">First seeming to be calm, then turning rough,</span><br/>
            <span class="l">And thus deceiving as <span class="persName-fictional-PENELOPE">Penelope</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#ROUGHGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            
         </div>
         
         <div class="lg-stanza">
            <span class="l">Sweet <span class="geogName-DERWENTWATER">Derwent</span>, on thy winding shore,</span><br/>
            <span class="l">Beside thy mountain&#x2010;forests hoar,</span><br/>
            <span class="l">There would I like to wander still,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">And drink from out the rippling rill,</span><br/>
            <span class="l">Which from thy mountain&#x2010;head doth fall<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#DOTHFALLGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span><br/>
            <span class="l">And mingles with the eagles&#x02BC; call;</span><br/>
            <span class="l">While on <span class="geogName-HELVELLYN">Helvellyn</span> thunder roars,</span><br/>
            <span class="l">Re&#x2010;echoed from old<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#FROMOLDGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span> <span class="geogName-DERWENTWATER">Derwent</span>&#x02BC;s shores;
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">And while<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/on_skiddaw_and_derwentwater_glosses_textual#WHILEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span> the lightning flashes still,</span><br/>
            <span class="l">Reflected in the mountain&#x2010;rill.</span><br/>
            
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
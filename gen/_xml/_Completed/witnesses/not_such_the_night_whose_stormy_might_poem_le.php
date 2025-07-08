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
“Not such the night whose stormy might” [“Evening at Chamouni”] [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self">Back to apparatus</a><br/></div>
   <div class="fileName"><span>“Not such the night whose stormy might” [“Evening at Chamouni”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">[<span class="caps">EVENING AT CHAMOUNI</span>]</h1>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">N</span><span class="smallcaps">OT</span> such the night whose stormy might</span><br/>
            <span class="l">Heroic <span class="persName-JBM">Balmat</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/not_such_the_night_whose_stormy_might_poem_glosses_contextual#BALMATGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> braved,</span><br/>
            <span class="l">When, darkening on the Goûtéʼs height,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/not_such_the_night_whose_stormy_might_poem_glosses_contextual#GOUTERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">The tempest howled and raved.</span><br/>
            <span class="l">Upon the mighty hill, forlorn,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">He stood alone amid the storm;</span><br/>
            <div id="" class="pb"></div>
            <span class="l">Watching the last day gleams decay,</span><br/>
            <span class="l">Supposing its returning ray</span><br/>
            <span class="l">Should see him lying there asleep,</span><br/>
            <span class="l">With Alpine snow for winding sheet.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Methinks I see him, as he stood</span><br/>
            <span class="l">Upon the ridge of snow;</span><br/>
            <span class="l">The battering burst of winds above,—</span><br/>
            <span class="l">The cloudy precipice below,—</span><br/>
            <span class="l">Watching the dawn. With proud delight
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">He saw that long, tempestuous night</span><br/>
            <span class="l">Drive to the westward, and unfold</span><br/>
            <span class="l">The ocean snow‐fields, upward rolled,</span><br/>
            <span class="l">Bright with the morningʼs glance of gold.</span><br/>
            <span class="l">It past away,—the tossing flood
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Of changing vapour, headlong riding;</span><br/>
            <span class="l">And lo! the untrodden summit stood</span><br/>
            <span class="l">Accessibly beside him.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
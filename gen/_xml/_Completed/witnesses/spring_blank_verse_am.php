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
"Spring: Blank Verse"
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"Spring: Blank Verse"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="caps">Spring</span></h1>
         
         <div class="lg-stanza">
            <span class="l">What beauties spring thou hast the waving lilac</span><br/>
            <span class="l">and the stiff tall peach with roselike flowers</span><br/>
            <span class="l">with yellow chorchorus and with nectarine blossom</span><br/>
            <span class="l">some with grace wave and some though tall are stiff</span><br/>
            <span class="l">waving is lilac, so is yellow chorchorus
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">waving is cherry blossom though not so graceful</span><br/>
            <span class="l">as the spiry lilac and the hyacinth</span><br/>
            <span class="l">stiff is the pear and nectarine with the peach</span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">and apricot, all these are stiff but in return</span><br/>
            <span class="l">their flowers are beautiful. so are birds and beasts
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">as well as flowers some are wild and cruel</span><br/>
            <span class="l">such are the tiger, panther, lynx and ounce</span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">so also in return these animals</span><br/>
            <span class="l">are pretty in the other sort</span><br/>
            <span class="l">some dogs are ugly, but conceal within
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">some good intentions good ideas good thoughts.</span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">but spring, there is one tree that thou bringʼst forth</span><br/>
            <span class="l">that is more beautiful than all the others—</span><br/>
            <span class="l">this is the apple blossom o how sweet</span><br/>
            <span class="l">is that fine tree and so I end.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
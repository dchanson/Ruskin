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
“Title of Work”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Title of Work”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">Title of Poem</h1>
         
         <div class="lg-stanza">
            <span class="l">FAR to the west hath set the sun</span><br/>
            <span class="l">Upon the sea his race is done</span><br/>
            <span class="l">Amidst bright gold the sun hath set</span><br/>
            <span class="l">The clouds which round his glories met</span><br/>
            <span class="l">Ye gilded vapours that around
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">The orb of light do take your ground</span><br/>
            <span class="l">Fly when he vanishes away</span><br/>
            <span class="l">The hour is oer that is your day</span><br/>
            <span class="l">And gently plays upon the ear</span><br/>
            <span class="l">Distinct indeed the noise we hear
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">In that high arch doth sit the moon</span><br/>
            <span class="l">In glorious state and round her so</span><br/>
            <span class="l">Gather the stars that glimmer bright</span><br/>
            <span class="l">And bless all mortals in the night</span><br/>
            <span class="l">Sail on thou moon sail on ye stars
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Sail on thou red and bloody Mars</span><br/>
            <span class="l">And as ye sail upon the wing</span><br/>
            <span class="l">All praises to your maker sing</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
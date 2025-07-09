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
"Of rocks first and of caverns now I sing"
EOT
);
define("FACS_FILE_NAMES", <<<EOT
1229171.jpg 1229172.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"Of rocks first and of caverns now I sing"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">OF rocks first and of caverns now I sing</span><br/>
            <span class="l">And of a stream that seems upon the wing</span><br/>
            <span class="l">Of rocks that have height of a cave that is deep</span><br/>
            <span class="l">Of ariver That hath many a beautiful sweep</span><br/>
            <span class="l">Now then of <span class="placeName-MATLOCK">Matlock</span>ʼs rocks. Theyʼre white<span class="del"><span class="unclear-">s</span></span> as 
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div><span class="runover" style="left:16.4em"> snow</span></span><br/>
            <span class="l">And as white as the foam of the stream thats below</span><br/> 
            <div id="1229172" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:4.8em"> </span>38</div><br/>
            <span class="l">Their craggy sides will hardly eʼen give leave </span><br/>
            <span class="l">The trees to grow that all their clothing weave</span><br/>
            <span class="l">For the long fibres on the bare white crag</span><br/>
            <span class="l">Take root and up the tree iteself doth doth drag
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">And now of mountain rivers the white crest</span><br/>
            <span class="l">Dances upon the waves and is their vest</span><br/>
            <span class="l">The stream doth foam and rush upon its way</span><br/>
            <span class="l">Seeming a haunt for many an elf and fay</span><br/>
            <span class="l">In anger great it rushes against the rocks
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">The rocks receive its insignifʼcant shocks</span><br/>
            <span class="l">And now of the deep dark and dismal cave</span><br/>
            <span class="l">You think no doubt its sides the waters lave</span><br/>
            <span class="l">Tis no such thing tis high upon a hill</span><br/>
            <span class="l">And then beside it flows no kind of drill
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">It is entirely then composed of spar</span><br/>
            <span class="l">Its rocks are all so bright. Indeed they are</span><br/>
            <span class="l">And so now having nothing more to say</span><br/>
            <span class="l">And my subject exhausted I must go away</span><br/>
            
            
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
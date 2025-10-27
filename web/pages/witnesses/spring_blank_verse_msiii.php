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
msiii/1229185.jpg msiii/1229186.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url("spring_blank_verse_houghton.php"); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>"Spring: Blank Verse"</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title"><span class="space" style="padding-left:1.6em"> </span>spring<span class="space" style="padding-left:2.4em"> </span>blank verse</div>
         
         <div class="lg-stanza">
            <span class="l"><span class="caps">What</span> beauties<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE1PENCILS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> spring thou hast<span class="runover" style="left:2.0em">the waving lilac</span></span><br/>
            <span class="l">and the stiff tall peach with roselike<span class="runover" style="left:4.8em">flowers</span></span><br/>
            <span class="l">with yellow corchorus<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#CORCHORUS" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> and with nectron<span class="runover" style="left:4.4em">blossom<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#NECTRON" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span></span><br/>
            <span class="l">some with grace wave and some<span class="runover" style="left:2.0em">though tall are stiff</span></span><br/>
            <div id="1229185r" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:4.0em"> </span>64</div><br/> 
            <span class="l">waving is lilac so is yellow corchorus
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">waving is cherry blossom though not<span class="runover" style="left:3.6em">so graceful</span></span><br/>
            <span class="l">as the spiry lilac and the hya<span class="runover" style="left:10.8em">cinth</span></span><br/>
            <span class="l">stiff is the pear and nectron with<span class="runover" style="left:4.4em">the peach</span></span><br/>
            <span class="l">and apricot all these are stiff but<span class="runover" style="left:4.0em">in return</span></span><br/>
            <span class="l">Their flowers are beautiful So
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:2.4em">are birds and beasts</span></span><br/>
            <span class="l">As well as flowers Some are<span class="runover" style="left:2.4em">wild and cruel</span></span><br/>
            <span class="l">Such is<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE12VERBCASE" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> the tiger panther lynx<span class="runover" style="left:2.8em">and ounce</span></span><br/>
            <span class="l">So also in return these animals</span><br/>
            <span class="l">Are pretty in the other sort the best<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE14THEBEST" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span></span><br/>
            <span class="l">Some dog&#x02BC;s<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE15APOSTROPHE" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> are ugly but conceal within
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Some godd<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE16GODD" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span> intentions good ideas good<span class="runover" style="left:4.0em">thoughts</span></span><br/>
            <span class="l">But spring there is one <div 
              class="add-above" 
              style="left:9.2em">tree</div> that thou<span class="runover" style="left:3.2em">bring&#x02BC;st forth</span></span><br/>
            <div id="1229186v" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:3.2em"> </span>65</div><br/> 
            <span class="l">That is more beautiful than all<span class="runover" style="left:3.2em">the others</span></span><br/>
            <span class="l">This is the apple blossom.<span class="gloss-inline">
          <a href="../glosses/spring_blank_verse_glosses_contextual.php#LINE19PERIOD" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> O how<span class="runover" style="left:4.0em">sweet</span></span><br/>
            <span class="l">Is that fine tree and so I end
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            
         </div>
         
      </div>
   </div><br/><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
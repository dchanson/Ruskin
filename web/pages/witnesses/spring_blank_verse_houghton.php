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
houghton/modbm_ms_am_1088_5955_0004.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url("spring_blank_verse_msiii.php"); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>"Spring: Blank Verse"</span></div>
   <div class="witness">
      <div class="poem" id="">
         <span class="space" style="padding-left:2.0em"> </span>
         <div class="page-title"><span class="caps">Spring</span></div>
         
         <div class="lg-stanza">
            <span class="l">What beauties spring <div 
              class="add-below" 
              style="left:8.4em">&#x2038;</div><div 
              class="add-above" 
              style="left:7.2em">thou hast</div> the waving lilac</span><br/>
            <span class="l">And the stiff tall peach with roselike<span class="runover" style="left:4.8em">flowers</span></span><br/>
            <span class="l">with yellow chorchorus and with nectarine<span class="runover" style="left:4.4em">blossom</span></span><br/>
            <span class="l">some with grace wave and some though<span class="runover" style="left:4.0em">tall are stiff</span></span><br/>
            <span class="l">waving is lilac so is yellow chorchorus
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">waving is cherry blossom though not so<span class="runover" style="left:4.8em">graceful</span></span><br/>
            <span class="l">as the spiry lilac and the hyacinth</span><br/>
            <span class="l">stiff is the pear and nect<div 
          class="subst-add-below-overwriting s-subst s-add s-overwrite s-below" 
          style="left:11.2em">&#x2038;</div><div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:10.4em">arine</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >ron</div> with<span class="runover" style="left:5.6em">the peach</span></span><br/>
            <div id="modbm_ms_am_1088_5955_0004r" class="pb"></div>
            <span class="l">and apricot all these are stiff but in return</span><br/>
            <span class="l">their flowers are beautiful . so are birds
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:5.2em">and beasts</span></span><br/>
            <span class="l">as well as flowers some are wild and<span class="runover" style="left:13.2em">cruel</span></span><br/>
            <span class="l">such are the tiger panther lynx and ounce</span><br/>
            <span class="l">so also in return these animals</span><br/>
            <span class="l">are pretty in the other sort</span><br/>
            <span class="l">some dogs are ugly but con<span class="unclear-CWB">&#x2010;</span>ceal within
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">some good intentions good 
               <div 
          class="subst-add-below-overwriting s-subst s-add s-overwrite s-below" 
          style="left:11.2em"><span class="unclear-CWB">^</span></div>
               <div 
          class="subst-add-below-overwriting s-subst s-add s-overwrite s-below" 
          style="left:10.4em">ideas good thoughts</div>
               <div 
          class="subst-del-scratchout s-subst s-del s-scratchout" >
               <div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:10.4em">ideas</div>
               <div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >intentions</div>
               
               <div 
              class="add-above" 
              style="left:10.8em">good</div><span class="del">though</span>
               </div></span><br/>
            <span class="l">but spring there is one tree that thou<span class="runover" style="left:5.2em">bring&#x02BC;st forth</span></span><br/>
            <span class="l">that is more beautiful than all the others</span><br/>
            <span class="l">this is the apple blossom o how sweet</span><br/>
            <span class="l">is that fine tree and so I end
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            
         </div>
         
      </div>
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
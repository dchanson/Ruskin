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
“now must we leave poor martin there”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
MSIAsheet159.jpg MSIAsheet160.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“now must we leave poor martin there”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">now must we leave poor <span class="persName-fictional-MTACKET">martin</span> there</span><br/>
            <span class="l">while we relate the <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span>s fare</span><br/>
            <span class="l">a band of english soldiers marched</span><br/>
            <span class="l">close by the <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> and as they<span class="runover" style="left:10.4em">passed</span></span><br/>
            <span class="l">good <span class="persName-fictional-ELSPETGLENDINNING">dame glendinning</span> her sons led
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">out from the gate and thus she<span class="runover" style="left:11.2em">said</span></span><br/>
            <span class="l">no means of fighting have I on<span class="runover" style="left:10.0em">this land</span></span><br/>
            <span class="l">and I am at the mercy of your<span class="runover" style="left:10.0em">hand</span></span><br/>
            <span class="l">the <span class="persName-fictional-STAWARTHBOLTON">serjeant</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#SERJEANTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> of the troop<span class="runover" style="left:3.6em">replied<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#SERJEANTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span></span><br/>
            <span class="l">though I have means of fighting
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div><span class="runover" style="left:3.2em">on my side</span></span><br/>
            <span class="l">I scorn with women now to stri<div 
          class="subst-del s-subst s-del" >f</div><div 
          class="s-subst s-add s-overwrite s-inline">v</div>e</span><br/>
            <span class="l">go to your <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> again and live</span><br/>
            <span class="l">yet dame I own I envy you</span><br/>
            <span class="l">that <span class="del">I</span> <span class="persName-fictional-EDWARDGLENDINNING">little rogue</span> with eyes<span class="runover" style="left:10.0em">so blue</span></span><br/>
            <span class="l">and will you come with
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div><span class="runover" style="left:3.6em">me my lad</span></span><br/>
            <span class="l">the <span class="persName-fictional-STAWARTHBOLTON">serjeant</span> of the troop he<span class="runover" style="left:10.4em">said</span></span><br/>
            <span class="l">no said the blue eyed <span class="persName-fictional-EDWARDGLENDINNING">edward</span> no</span><br/>
            <span class="l">because you are to us a foe</span><br/>
            <span class="l">not only that but then<span class="runover" style="left:7.6em">you are</span></span><br/>
            <span class="l">a heretic and fond of war
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">why god a mercy <span class="persName-fictional-STAWARTHBOLTON">old stawarth</span><span class="runover" style="left:10.0em">did say</span></span><br/>
            <span class="l">I see alone I must go my way</span><br/>
            <div id="" class="pb"></div>
            <span class="l">but stay <span class="persName-fictional-HALBERTGLENDINNING">thou black eyed</span> come<span class="runover" style="left:11.6em">with me</span></span><br/>
            <span class="l">and many a fine sight thou<span class="runover" style="left:3.6em">shalt see</span></span><br/>
            <span class="l">no cried the furious <span class="persName-fictional-HALBERTGLENDINNING">halbert</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div><span class="runover" style="left:10.8em">no</span></span><br/>
            <span class="l">bcause thou art to us a foe</span><br/>
            <span class="l">and when Im older thou<span class="runover" style="left:3.2em">shalt see</span></span><br/>
            <span class="l">the effects of my fathers<span class="runover" style="left:2.8em">sword on thee</span></span><br/>
            <span class="l">why again god a mercy<span class="runover" style="left:2.8em"><span class="persName-fictional-STAWARTHBOLTON">old stawarth</span> did say</span></span><br/>
            <span class="l">I see that alone I must
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div><span class="runover" style="left:3.2em">go my way</span></span><br/>
            <span class="l">but stay heres a token<span class="runover" style="left:2.8em">that if some men</span></span><br/>
            <span class="l">come riding down<span class="runover" style="left:2.4em">this narrow glen</span></span><br/>
            <span class="l">they may know that<span class="runover" style="left:2.4em">you are under my</span></span><br/>
            <span class="l">protection. then I say<span class="runover" style="left:2.8em">goodbye</span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
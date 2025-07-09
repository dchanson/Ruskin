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
“come on good horse and let us see”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
MSIAsheet1.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“come on good horse and let us see”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l"><span class="persName-fictional-MTACKET">martin</span> took his task as guide<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#MSIAA1VERSOGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l"><span class="gap" style="padding-left:NaNem"> </span>d all the women did in him confide</span><br/>
            <div class="full"></div><br/>
            <span class="l"><span class="gap" style="padding-left:NaNem"> </span>t only martin had to <span class="unclear-DCH">pas</span><span class="gap" style="padding-left:NaNem"> </span></span><br/>
            <span class="l">but een good <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> with the lass</span><br/>
            <span class="l">named <span class="persName-fictional-MARYAVENEL">mary avenel</span> and<span class="gap" style="padding-left:NaNem"> </span>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">they had come nearer to the <span class="geogName-GLENDEARG">glen</span></span><br/>
            <span class="l">it was so bad that <span class="sic">there [sic]</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#THEIRGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> they stuck</span><br/>
            <span class="l">for <span class="unclear-DCH">sti<span class="supplied-DCH">r</span></span> they could not een a<span class="gap" style="padding-left:NaNem"> </span></span><br/>
            <span class="l"><span class="persName-fictional-MTACKET">martin</span> then did look<span class="gap" style="padding-left:NaNem"> </span></span><br/>
            <span class="l">to see where he<span class="gap" style="padding-left:NaNem"> </span>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l"><span class="gap" style="padding-left:NaNem"> </span> selecting the safest way</span><br/>
            <span class="l">he to <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> be<span class="gap" style="padding-left:NaNem"> </span> to say<span id="damageEnd"></span></span><br/>
            </div>
         
         <div class="lg-stanza">
            <span class="l">come on good horse and let us see</span><br/>
            <span class="l">whether thou wilt obey thy master me<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#GOODHORSEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">come on but <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> would not go
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">though mute he very well said no</span><br/>
            <span class="l">for <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> snorted laid his paws</span><br/>
            <span class="l">as if he encountered a great bears jaws<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#BEARSJAWSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">and would not go. een tak your ain</span><br/>
            <span class="l">way said the shepherd I would fain
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">get oer to tother side and be<span class="del-strikethrough">e</span></span><br/>
            <span class="l">upon our way so let us see</span><br/>
            <span class="l">what you can do for us and when</span><br/>
            <span class="l">we are safe at <span class="geogName-GLENDEARG">glendarg glen</span></span><br/>
            <span class="l">safe in stable you shall stand
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">with plenty hay and fodder at your hand</span><br/>
            <span class="l">just at this moment <span class="persName-fictional-MARYAVENEL">mary</span> saw</span><br/>
            <span class="l">just as good <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> raised his paw</span><br/>
            <span class="l">a <span class="persName-fictional-WHITELADY">beauteous lady</span> far away</span><br/>
            <span class="l">and seeing her she thus did say
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">I see a lady just up there</span><br/>
            <span class="l">and I must say <span class="del-strikethrough"><span class="unclear-smudged-DCH">exedding</span></span><div 
              class="add-above" 
              style="left:6.0em"><span class="sic">exeeding [sic]</span></div> fair<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#EXCEEDINGGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l">where where cried the whole of the family then</span><br/>
            <span class="l">why very near to <span class="geogName-GLENDEARG">glendarg glen</span></span><br/>
            <span class="l">she signs to us to come yon gate
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">but it was <span class="del-strikethrough"><span class="unclear-smudged-DCH">gay</span></span> avenels fate <span class="metamark-insertion-substitution2">*</span><span class="space" style="padding-left:1.6em"> </span><span class="add">great</span></span><br/>
            <span class="l"><span class="delSpan-deletion2-delEnd1"></span><span class="del-strikethrough">to see things that nobody</span> saw</span><br/>
            <span class="l"><span class="del-strikethrough">except themselves, and would say pshaw</span><span id="delEnd1"></span></span><br/>
            <span class="l"><div 
              class="add-above" 
              style="left:-0.8em"></div>so it was in this odd time</span><br/>
            <span class="l"><span class="del-strikethrough">for a spirit haunted avenels line</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">this <span class="persName-fictional-TTACKET">tibb tackett</span> thought it <span class="del-strikethrough"><span class="unclear-smudged-DCH">up</span></span><div 
              class="add-above" 
              style="left:11.6em">then</div></span><br/>
            <span class="l">for twas near to <span class="geogName-GLENDEARG">glendarg glen</span></span><br/>
            <span class="l">and her haunt was near this part</span><br/>
            <span class="l">where oft the very <span class="del-strikethrough">sp</span> slender hart</span><br/>
            <span class="l">had drank at this place but was
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div><span class="runover" style="left:11.6em">neer</span></span><br/>
            <span class="l">frightened by her very fair</span><br/>
            <div class="full"></div><br/>
            <span class="l"><span class="add">to have a spirit in their line<span class="metamark-insertion">*</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#AVENELSFATEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span><br/>
            
            <span class="l">form appearing like a fog</span><br/>
            <span class="l">and this I suspect was</span><br/>
            <span class="l">that seen in the bog<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#WHITELADYSHAUNTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <div id="" class="pb"></div>
            <span class="l"><span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> at his own free will<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#MSIAA1VERSOGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span></span><br/>
            <span class="l">did no longer stand stock still</span><br/>
            <span class="l">but set off at ao<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#AOGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span> good rate</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“The Ship” and “Look at That Ship” [1827]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
1229866.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink">
          <a href="<?php echo r_build_url("look_at_that_ship_msiii.php"); ?>" >Back to apparatus</a>
        
      <div class="pb"></div>
   </div>
   <div class="fileName"><span>&#x201C;The Ship&#x201D; and &#x201C;Look at That Ship&#x201D; &#x005B;1827&#x005D;</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="page-title">look at that ship</div>
         <br/>
         
         <div class="lg-stanza">
            <span class="l">her flying streamer and her mountain sides,<span class="gloss-inline">
          <a href="../glosses/look_at_that_ship_glosses_contextual.php#BASELINEPUNCTUATION" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">her tow&#x02BC;ring mast and filling sails with drops</span><br/>
            <span class="l">of water hanging to her high buil<span class="unclear-faded-CWB"></span> side<span class="gloss-inline">
          <a href="../glosses/look_at_that_ship_glosses_contextual.php#BUIL" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">glittering like diamonds dangling in the sun.</span><br/>
            <span class="l">yet soon it lessens lessens more and more,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">till to a speck reduced it vanishes complete</span><br/>
            <span class="l">and to the dangers of the sea exposed</span><br/>
            <span class="l"><div 
          class="subst-del s-subst s-del" ><span class="gap-illegible" style="padding-left: 8em"></span></div><div 
          class="s-subst s-add s-overwrite s-inline">the sailors look with</div> horror at the waves,<span class="gloss-inline">
          <a href="../glosses/look_at_that_ship_glosses_contextual.php#THESAILORSLOOKWITH" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">then through the clouds the sun shoots forth his<span class="runover" style="left:18.8em">beams</span></span><br/>
            <span class="l">the clouds disperse and bright blue sky comes forth
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">the waters sparkle and at distance seen the specks</span><br/>
            <span class="l">of other vessels swimming on the expanse</span><br/>
            <span class="l">of ocean&#x2014;some of them do disappear complete</span><br/>
            <span class="l">while others largen coming nearer near</span><br/>
            <span class="l">then gliding off each take a different course
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">and disappear again. When shore afar is seen</span><br/>
            <span class="l">and on the vessel drives <div 
          class="subst-del s-subst s-del" ><span class="gap-illegible" style="padding-left: 8em"></span></div><div 
          class="s-subst s-add s-overwrite s-inline">when landing safe</div><span class="gloss-inline">
          <a href="../glosses/look_at_that_ship_glosses_contextual.php#WHENLANDINGSAFE" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l"><div 
          class="subst-del s-subst s-del" ><span class="gap-illegible" style="padding-left: 8em"></span></div><div 
          class="s-subst s-add s-overwrite s-inline">she rides at anchor</div> floating on the waves<span class="gloss-inline">
          <a href="../glosses/look_at_that_ship_glosses_contextual.php#SHERIDESATANCHOR" target="_blank" class="inactive">
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span></span><br/>
            <span class="l">at length the anchor pulled she drives away</span><br/>
            <span class="l">and passes on. a loud explosion heard
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">the air around them darkened with the smoke</span><br/>
            <span class="l">and steam. a steamboat then had burst</span><br/>
            <span class="l">while from among the smoke the vessel quickly goes</span><br/>
            <span class="l">and gladly spies homes cliffs and home she goes.</span><br/>
            
         </div>
         
      </div>
   </div>
   <div class="date" id="">
      <br/>
      
      <div class="p"><span class="date-1827-02-1827-03">febuary or march<span class="unclear-DCH">,</span> 1827</span></div>
      
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
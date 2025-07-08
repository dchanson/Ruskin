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
"Oh, the morn looked bright on hill and dale" ["The Black Forest"] [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII60v-61r.jpg msviii/MSVIII61v-62r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>"Oh, the morn looked bright on hill and dale" ["The Black Forest"] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l"><span class="del-strikethrough">The</span> Oh the morn looked bright o<div 
          class="subst-del s-subst s-del" >v</div><div 
          class="s-subst s-add s-overwrite s-inline">n</div><span class="del-strikethrough">er</span> hill and dale</span><br/>
            <span class="l">As we left the walls of merry <span class="unclear-">däyle</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_contextual#DAYLE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And towrds the long hill ridges wound</span><br/>
            <span class="l">That ramparted the plain around
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">780</a></div></span><br/>
            <span class="l">That greener growing as we neared
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">At length with meadows decked appeared</span><br/>
            <span class="l">Fair as our fields in May; and then</span><br/>
            <div id="MSVIII61v" class="pb"></div>
            <span class="l">We entered on a little glen
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">780</a></div></span><br/>
            <span class="l">Those miniature <span class="geogName-ALPS">Alps</span> among,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_contextual#MINIATUREALPS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
            <span class="l">All smiling with a morning sun
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Grassy and woody, and most sweet</span><br/>
            <span class="l">As ever fairy her retreat</span><br/>
            <span class="l">Formed for her midnight dances,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> Through
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">785</a></div></span><br/>
            <span class="l">Tracing, in mazy winds anew,</span><br/>
            <span class="l">The spots it had passed oer, as fain
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">To run its sweet course oer again,—</span><br/>
            <span class="l">Flowed a small tributary stream</span><br/>
            <span class="l">That the <span class="geogName-RHINE">Rhine</span> levied all between<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_contextual#KINZIGRIVER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">790</a></div></span><br/>
            <span class="l">The frontlets of the fair fresh hills<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_textual#FLOWED" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l"><div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:1.2em">Leaped</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >Sprang</div> merrily the glad young rills,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Smiling in silver as they sprang,</span><br/>
            <span class="l">And merry were the notes they sang,</span><br/>
            <span class="l">For they were joyful at their birth
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">795</a></div></span><br/>
            <span class="l">From the cold prisons of the earth</span><br/>
            <span class="l">To the warm sun and open sky,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">And their song was all of liberty</span><br/>
            <span class="l">But the dell narrowed as we went</span><br/>
            <span class="l">Till, twixt the promontories pent
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">800</a></div></span><br/>
            <span class="l">It upward ran, and the clear stream</span><br/>
            <span class="l">Now forward shot its banks between,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">Fast flashing, till from the obscure</span><br/>
            <span class="l">Emerged we on a lofty moor,</span><br/>
            <span class="l">Open, and shelterless, and bare,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">805</a></div></span><br/> 
            <span class="l">And gently undulating far<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_contextual#LOFTYMOOR" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span></span><br/>
            <span class="l">With here and there a patch of pine
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Breaking the smoothness of its line,</span><br/>
            <span class="l">Toward the south horizon!<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_textual#SOUTHHORIZON" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
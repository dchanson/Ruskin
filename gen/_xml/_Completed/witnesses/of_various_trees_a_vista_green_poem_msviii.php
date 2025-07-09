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
“Of various trees a vista green” [poem, incorporated into “Genoa”]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII63v-64r.jpg msviii/MSVIII64v-65r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Of various trees a vista green” [poem, incorporated into “Genoa”]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">Of various trees a vista green<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#OFVARIOUSTREESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Into <div 
          class="s-subst s-add s-overwrite s-inline">the</div><div 
          class="subst-del s-subst s-del" >a</div> streamlet looking down 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">865</a></div></span><br/>
            <span class="l">Whose living crystal shot between</span><br/>
            <span class="l">All trembling with the leafy gleam</span><br/>
            <span class="l">And coolly on a high arch span
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">The sportive light reflected ran</span><br/>
            <span class="l">Thither and thither fast,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#THITHERGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> and through 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">870</a></div></span><br/>
            <span class="l">That natural arched avenue</span><br/>               
            <span class="l">There showed a rich and mighty plain<div class="add-bottom-right">×</div></span><br/>
            <div id="MSVIII64v" class="pb"></div> 
            <span class="l">Rolling its wooded waves away
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>           
            <span class="l">And through the stretch of that champaign</span><br/>
            <span class="l">A noble river wound its way<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#NAVIGLIODIPAVIAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">875</a></div></span><br/>             
            <span class="l">And on the horizon to the north</span><br/>
            <span class="l">Pale gleams of icy snow came forth<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#SUNGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>             
            <span class="l">From the <span class="geogName-STBERNARD">St Bernard</span>s fastnesses,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">White as the wreathed salt sea spray</span><br/>               
            <span class="l">With the snow wreaths that ever press, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">880</a></div></span><br/>
            <span class="l">Upon that heaven girt boundary,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#STBERNARDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>          
            <span class="l">Boundary meet for <span class="placeName-ITALY">Italy</span>,</span><br/>
            <span class="l">Most meet for such a lovely clime,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>                 
            <span class="l">As it looks oer <span class="placeName-MARENGO">Marengo</span>s sea,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#MARENGOSSEAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">Unto the <span class="geogName-APENNINES">Apennine</span>. 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">885</a></div></span><br/>                  
            <span class="l">Tis sweet a topmost mountain ridge,</span><br/>
            <span class="l">Impatiently to climb,</span><br/>               
            <span class="l">And there to stand and dream away,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">A little space of time.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#APENNINEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> </span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
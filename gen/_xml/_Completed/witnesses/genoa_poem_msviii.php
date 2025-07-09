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
“Genoa” [poem]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII78v-79r.jpg msviii/MSVIII79v-80r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Genoa” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVIII77r" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-GENOA">Genoa</span></div>
         
         <div class="lg-stanza">
            <span class="l">Now rouse thee ho. For <span class="placeName-GENOA">Genoa</span> straight</span><br/>
            <span class="l">We did not for the dawning wait</span><br/>
            <span class="l">The stars shone pale on <span class="placeName-NOVI">Novi</span>s Gate,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#NOVISGATEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And on the airy <span class="geogName-APENNINES">Apennine</span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1380</a></div></span><br/>
            <span class="l">Whose towery steeps, with morn elate,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Lay southward in a lengthened line</span><br/>
            <span class="l">And we knew, and we knew, and we knew</span><br/>
            <span class="l">That from <span class="geogName-ELBA">Elba</span> to the <span class="geogName-Alps">Alps</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#ELBAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> oer the seas broad blue<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#SEASBROADBLUEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            <span class="l">Where the wild waves wander, and white ripples shine 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1385</a></div></span><br/>
            <span class="l">Looked the cloudy crest of the tall <span class="geogName-APENNINES">Apennine</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">From the Torrents barren bed,</span><br/>
            <span class="l">Bound by blocks of <span class="name--GRANITE">granite</span> red,</span><br/>
            <span class="l">Came the gay Cicadas song</span><br/>
            <span class="l">Wheresoeer the dew was dank, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1390</a></div></span><br/>
            <span class="l">On the tree, the shrub the bank,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">All our scorching road along</span><br/>
            <span class="l">Came the gay Cicadas song,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#CICADAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
            <span class="l">While beside our path was seen</span><br/>
            <span class="l">Of various trees a vista green, <span class="metamark-insertion">&c.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#OFVARIOUSTREESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1395</a></div></span><br/>
            <span class="l">Into a streamlet looking down 
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Whose living crystal shot between <span class="metamark-insertion">&.</span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">50</a></div></span><br/>
            <span class="l"><span class="del-strikethrough">A <div 
              class="add-above" 
              style="left:NaNem"></div> little space of time</span></span><br/>
            <span class="l"><span class="del-strikethrough">And think how wide the world must be</span></span><br/>
            <span class="l"><span class="del-strikethrough">Across from pole to pole</span></span><br/>
            <span class="l"><span class="del-strikethrough">When ‸<div 
              class="add-above" 
              style="left:2.4em">all</div> that there you look upon</span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">× 80</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l"><div 
              class="add-above" 
              style="left:-1.2em">Oh</div><span class="del-strikethrough">And</span> is there one remembers not</span><br/>
            <span class="l">When first he saw the living deep,</span><br/>
            <div id="MSVIII79v" class="pb"></div>
            <span class="l">With panting bosom, crimson shot,</span><br/>
            <span class="l">Call its soothed billows from their sleep,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#SOOTHEDGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span></span><br/>
            <span class="l">That shout<span class="space" style="padding-left:1.2em"> </span>The mo<div 
          class="s-subst s-add s-overwrite s-inline">r</div><div 
          class="subst-del s-subst s-del" >a</div>n, from steep to steep. 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1400</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">When far away to seaward show<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span><br/>
            <span class="l">Her first beams solitary glow.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#SOLITARYGLOWGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span></span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">W</div><div 
          class="subst-del s-subst s-del" >T</div>hoeʼr thou art, who hast not felt</span><br/>
            <span class="l">Thou lovedst to be where seabirds dwelt</span><br/>
            <span class="l">To wander on the weary beach 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1405</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">Just on the line the wild waves reach,</span><br/>
            <span class="l">Or watch the petrels flit before</span><br/>
            <span class="l">The marching tempests warning roar.</span><br/>
            <span class="l">And ocean eagles dark and proud,</span><br/>
            <span class="l">And white winged ospreys skim the cloud 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1410</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">And if thou neer hast felt as if</span><br/>
            <span class="l">The ocean had a mind</span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">Nor</div><div 
          class="subst-del s-subst s-del" >And</div> held communion with the deep</span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">Nor</div><div 
          class="subst-del s-subst s-del" >And</div> converse with the wind</span><br/>
            <span class="l">When broad black waves before it roll — 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1415</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">I would not think thou hadst a soul.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
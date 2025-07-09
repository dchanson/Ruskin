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
“Saltzburg”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII80v-81r.jpg msviii/MSVIII81v-82r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Saltzburg”</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div class="pageNum-top-right">p. 106.</div><br/>
         
         <div class="lg-stanza">
            <span class="l">The sun <span class="del-strikethrough">is</span> <div 
              class="add-above" 
              style="left:3.6em">was</div> low on <span class="geogName-SALZACH">Salza</span>s silver deep</span><br/>
            <span class="l">Broad loom<div 
          class="s-subst s-add s-overwrite s-inline">ed</div><div 
          class="subst-del s-subst s-del" >s</div> the lofty city in its sleep</span><br/>
            <span class="l">Dome over dome in arched array was set</span><br/>
            <span class="l">Spire over spire and sparkling minaret,</span><br/>
            <span class="l">How red you saw the swarthy sunset shine 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">5</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Where <div 
          class="subst-del s-subst s-del" >huge</div><div 
          class="s-subst s-add s-overwrite s-inline">rose</div> <span class="placeName-building-SALZBURGCATHEDRAL"><span class="persName-STRUPERT">St Rupert</span>s mighty marble shrine</span></span><br/>
            <span class="l">Rich with the spoils of many a <span class="geogName-HARZ">Hartzwald</span> mine</span><br/>
            <span class="l"><span class="metamark-transposition-">2</span>Crag <span class="del-strikethrough">heaped</span> poised on crag, with each its battlement</span><br/>
            <span class="l"><span class="metamark-transposition-">2</span><div 
          class="s-subst s-add s-overwrite s-inline">The</div><div 
          class="subst-del s-subst s-del" >That</div> <span class="placeName-HOHENSALZBURG">Fortress</span> reared its dark and huge ascent<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/saltzburg_glosses_textual#TRANSPOSITIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span><br/>
            
            
            
            
            
            
            <span class="l">From its foundation lifted like a cloud, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">10</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l"><span class="del-strikethrough">Silent and</span> <div 
              class="add-below" 
              style="left:0.4em"><div 
          class="subst-del s-subst s-del" >But moveless</div><div 
          class="s-subst s-add s-overwrite s-inline">But moveless—</div></div> changeless, beautifully proud,</span><br/>
            <span class="l">Shadow imbued with sunbeams like a veil,</span><br/>
            <span class="l">Clasps the wide city, wreathes its outlines pale</span><br/>
            <span class="l">And mingles roof with roof and tower with towr,</span><br/>
            <span class="l">Twilights soft magic brooding oer the hour, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">15</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Mysterious beauty upon all seen there</span><br/>
            <span class="l">And all unseen, imagined passing fair.</span><br/>
            <span class="l">Oh what can break the still, at even shed,</span><br/>
            <span class="l">Just as the sun displays his parting red</span><br/>
            <span class="l">There is no sound that comes not sweetly by 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">20</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/> 
            <span class="l">When the last lights upon the landscape die,</span><br/>
            <span class="l"><span class="del-strikethrough">Loud shouts</span> <div class="add-margin-left"><span class="space" style="padding-left:-1.6em"> </span>Low<br/> chaunts</div><div 
              class="add-above" 
              style="left:NaNem">Low chaunts</div> the fisher where the waters pour,</span><br/><span class="space" style="padding-left:-1.2em"> </span>
            <span class="l">And murmuring voices come along the shore,</span><br/>
            <span class="l">And many a plash of wave upon the side,</span><br/>
            <span class="l">Of yon dark boat that slumbers on the tide 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">25</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">And there are sounds from city & from hill</span><br/>
            <span class="l">Shore, forest, flood, & field, yet all <span class="del-scratchout"><span class="unclear-blotted-"></span></span> <div 
              class="add-above" 
              style="left:15.2em">seems</div><span class="add-overwriting">seems</span> still.</span><br/>
            <span class="l">I left the shore, and ere the nights descent</span><br/>
            <span class="l">Through huge <span class="persName-STRUPERT">St Rupert</span>s massive portal went,</span><br/>
            <span class="l">Full many a marble there of changing hue, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">30</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <div id="MSVIII81v-82r" class="pb"></div>
            <div class="pageNum-top-right">82</div><br/>
            <span class="l">Chiselled & fretted, walled the temple through</span><br/>
            <span class="l">Successive altars lit with incensed flame</span><br/>
            <span class="l">Rose through the chapels, none without a name</span><br/>
            <span class="l">And the worn pavement every shrine before</span><br/>
            <span class="l">Of long devotion certain witness bore 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">35</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l">And there was many a statue nobly wrought</span><br/>
            <span class="l">And many a <span class="del-strikethrough"><span class="unclear-incomplete_word-">sta</span></span> painting from the southward brought</span><br/>
            <span class="l">Planned by those master minds, that ever stand</span><br/>
            <span class="l">The life, the glory, of their native land<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/saltzburg_glosses_contextual#AUSONIA" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">And, as hard rock, that mid some softer stone, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">40</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">Stands from the rest, unbuttressed, & alone</span><br/>
            <span class="l">A bulwark, rears its iron strength for aye,</span><br/>
            <span class="l">The <span class="del-strikethrough">weaker</span> <div 
              class="add-above" 
              style="left:1.6em">while soft</div> crag around it wears away,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/saltzburg_glosses_textual#SUBSTITUTIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">So shall their memory lift itself at last,</span><br/>
            <span class="l">Forth from the ruins of the aeras past 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">45</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">So, like some lofty beacon, constant shine,</span><br/>
            <span class="l">Distinctly <span class="del-strikethrough">seen amid</span> <div 
              class="add-above" 
              style="left:4.4em">glowing <span class="unclear-">thro</span></div>  the mist of time</span><br/>
            <span class="l">The vesper hymn was singing, as the night</span><br/>
            <span class="l">Rolled round the temple, veiling from the sight</span><br/>
            <span class="l">The mighty dome so high and heavenward piled 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">50</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">Beneath whose concave slumbers <span class="placeName-SCOTLAND">Scotland</span>s child</span><br/>
            <span class="l">The Good <span class="persName-STRUPERT">St Rupert</span>, & full silently</span><br/> 
            <span class="l">Star after <div 
          class="subst-del s-subst s-del" >sky</div><div 
          class="s-subst s-add s-overwrite s-inline">star</div> was scattered on the sky</span><br/>
            <span class="l">And I forgot the city, as I gazed</span><br/> 
            <span class="l">Where thousand worlds through all the midnight blazed, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">55</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">And I held through them commune with the heaven.</span><br/>
            </div>                    
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
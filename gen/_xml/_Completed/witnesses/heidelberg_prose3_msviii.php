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
“All has yielded to it from time immemorial” ["Heidelberg," essay, part 3]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII78v-79r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“All has yielded to it from time immemorial” ["Heidelberg," essay, part 3]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII78v" class="pb"></div>
         
         <div class="p">All has yielded to it from time immemorial,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> When Marshal<br/>
            <span class="persName-TURENNE">Turenne</span> attacked the castle in question,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#TURENNE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> it was but a touch and go<br/>
                    The foundations <span class="del-strikethrough">being</span> <div 
              class="add-above" 
              style="left:7.6em">were</div> were blown up, the battlements <span class="del-strikethrough">were</span> knocked<br/>
                    down, the towers snapt like so many sticks of barley sugar,<br/>
                    the statues decapitated, the carving crashed, the ditches filled,<br/>
                    the castle ruined.  but the cellars— Walk into them sir,<br/>
                    walk into them.  there is not a rat dispossessed or in any manner<br/>
                    disturbed,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> Why they seem to have stopped <span class="del-strikethrough">firing</span> puffing off powder<br/>
                    here as if they were afraid of shaking up the lees of the good old respectable<br/>
                    wines,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span> Even the timbers of the <span class="del-strikethrough"><span class="unclear-DCH"></span>ca</span> <div 
              class="add-above" 
              style="left:12.0em">newfangled</div><div 
              class="add-below" 
              style="left:12.0em">‸</div> fashionable cask, (which, following<br/>
                    the example of the ladies now adays has gone without hoops) are<br/>
                    not a whit disturbed, but sit there in peaceful placidity, clasping<br/>
                    each other in brotherly affection: but dry very dry unconscionably dry<br/>
                    And the celebrated butt sounds mournfully hollow,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#CELEBRATEDBUTT" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> no <span class="del-strikethrough"><span class="unclear-DCH">spl</span></span> rich<br/>
                    splash from the enclosed vinum,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#VINUM" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> no ruby red <span class="del-strikethrough">fo</span> tinging the joints<br/>
            <div id="MSVIII79r" class="pb"></div>
            <div class="pageNum-top-right">79</div><br/>
            of the timbers. Oh <span class="placeName-fictional-BACCHUS">Bacchus</span>, <span class="placeName-fictional-BACCHUS">Bacchus</span>, come not into the cellars<br/>
                    of <span class="placeName-HEIDELBERG">Heidelberg</span>, lest thou shouldst die of thirst<br/></div>           
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
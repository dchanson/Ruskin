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
“It is said that French will carry you over all Europe” [“Ehrenbreitstein”] [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII71v-72r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“It is said that French will carry you over all Europe” [“Ehrenbreitstein”] [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII71v" class="pb"></div>
         
         <div class="p">It is said that French will carry you over all <span class="geogName-EUROPE">Europe</span>,
                    <br/>over all civilised <span class="geogName-EUROPE">Europe</span>at least, and that may be,
                    <br/>but it will not carry you over <span class="placeName-GERMANY">Germany</span>
            <br/>You might manage with the Grand Turk, but
                    <br/>you will not manage with the Germans<span class="g-terminal_comma">,</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> Wishing
                    <br/>to see the interior of <span class="placeName-EHRENBREITSTEINFORT">Ehrenbreitstein</span>, we got a
                    <br/>young German guide, and coming to a place
                    <br/>where two roads met considered him to be going
                    <br/>the wrong way. Here was a poser, how could we
                    <br/>stop him. Nein, Nein, we called after him. Ya, quoth
                    <br/>he. Nein. So he went the way we chose. After
                    <br/>a<span class="del-scratchout">f</span> very hard pull, up an abominably cramp<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINCRAMPGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> hill
                    <br/>we behold the top of the flagstaff. Here we are, all
                    <br/>right. There was the fortress certainly, but between
                    <br/>us and it a ravine nearly a hundred feet deep walled
                    <br/>up the sides so as to form a very unhandsome ditch,
                    <br/>and two or three dozen impudent, enormous, open
                    <br/>mouthed guns grinning at us from the battlements.
                    <br/>Well, <span class="del-strikethrough">what</span> there was nothing for it, so we went back
                    <br/>and took the other path.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINPATHGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> This time all was right and
                    <br/>we got into the fortress, first however prudently
                    <br/>stepping up to asentinel<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#ASENTINELGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> to ask permission, and he
                    <br/>brought an officer upon us. Do you speak English
                    <br/>Sir. A stare. Francais. A vibratory motion of the
                    <br/>head, and A Nein. Deutsch? Ya. and there we stuck.
                    <br/>Well, we pulled out our passport, but it was in
                    <br/>French and the officer couldnt read it So he looks
                    <br/>up, and down, and at <span class="del-strikethrough">him</span> us, and we looked up,
                    <br/>and down and at him What was to be done.
                    <br/>We bowed, and he bowed, and we looked over the
                    <br/>battlements, <span class="del-strikethrough">with</span> and we trotted down again, having
                    <div id="MSVIII72r" class="pb"></div>
            <div class="pageNum-top-right">72</div><br/>
            <br/>a very high idea of the height of German hills, the
                    <br/>strength of German walls, the size of German cannon,
                    <br/>and the stupidity of all German brains.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINGERMANBRAINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
“Ehrenbreitstein” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-left"><img id="facs_preview" src="" width="100&#x0025;"><img id="facs" src="" width="100&#x0025;" style="display:none"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-splitter"></div>
<div xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>&#x201C;Ehrenbreitstein&#x201D; &#x005B;essay&#x005D;</span></div>
   <div class="prose" id="">
      
      <div class="p">It is said that French will carry you over all <span class="geogName-EUROPE">Europe</span>, over all 
                        <br/>civilised <span class="geogName-EUROPE">Europe</span> at least, and that may be, but it will not carry you 
                        <br/>over <span class="placeName-GERMANY">Germany</span>. You might manage with the Grand Turk, but you will 
                        <br/>not manage with the Germans. Wishing to see the interior of <span class="placeName-EHRENBREITSTEIN">Ehren&#x2010;
                        <br/>breitstein</span>, we got a young German guide, and crossing to a place where 
                        <br/>two roads met, considered him to be going the wrong way. There was a 
                        <br/>poser&#x2014;how could we stop him? &#x201C;Nein, nein,&#x201D; we called after him. &#x201C;Ya,&#x201D; 
                        <br/>quoth he. &#x201C;Nein.&#x201D; So he went the way we chose.
      </div>
      
      <div class="p">After a very hard pull up an abominably cramp<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINCRAMPGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> hill, we beheld the 
                        <br/>top of the flagstaff. Here we are all right. No. There was the 
                        <br/>fortress certainly, but between us and it a ravine nearly a hundred feet 
                        <br/>deep, walled up the sides so as to form a very unhandsome ditch, and two 
                        <br/>or three dozen impudent, enormous, open&#x2010;mouthed guns grinning at us 
                        <br/>from the battlement. Well, there was nothing for it, so we went back 
                        <br/>and took the other path.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINPATHGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></div>
      
      <div class="p">This time all went right, and we got into the fortress, first, however, 
                        <br/>prudently stepping up to a sentinel, to ask permission: and he brought 
                        <br/>an officer upon us. &#x201C;Do you speak English, sir?&#x201D; (A stare.) &#x201C;Français?&#x201D; 
                        <br/>(A vibratory motion of the head, and a &#x201C;Nein.&#x201D;) &#x201C;Deutsch?&#x201D; &#x201C;Ya,&#x201D; and 
                        <br/>there we stuck. Well, we pulled out our passport, but it was in French, 
                        <br/>and the officer could not read it. So he looked up and down and at us, 
                        <br/>and we looked up and down and at him. What was to be done? We 
                        <br/>bowed and he bowed, and we looked over the battlements and trotted 
                        <br/>down again, having a very high opinion of the height of German hills, 
                        <br/>the strength of German walls, the size of German cannon, and the stupidity 
                        <br/>of all German brains.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINGERMANBRAINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></div>
      
   </div><div id="" class="pb"></div>
</div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
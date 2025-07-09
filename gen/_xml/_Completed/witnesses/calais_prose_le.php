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
“Calais” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Calais” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">How much has been said of <span class="placeName-CALAIS">Calais</span>. Every one who has ever set his<br/>
                    foot on the French shore, from poor <span class="persName-fictional-YORICK">Yorick</span> to the veriest scribbler ever<br/>
                    blotted paper, has written half a volume upon <span class="placeName-CALAIS">Calais</span>. And no marvel.<br/>
            <span class="placeName-CALAIS">Calais</span>—the busy—the bustling, the—I had almost said the beautiful, for<br/>
                    beautiful it was to me, and I believe to every one who enters it as a<br/>
                    vestibule—an introduction to <span class="placeName-FRANCE">France</span>, and to the French.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_glosses_contextual#INTRODUCTIONTOFRANCEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> See <span class="placeName-CALAIS">Calais</span>,<br/>
                    and you can see no more, though you should perambulate <span class="placeName-FRANCE">France</span> from<br/>
                    the <span class="geogName-ATLANTIC">Atlantic</span> to the <span class="geogName-MEDITERRANEAN">Mediterranean</span>. It is a little <span class="placeName-FRANCE">France</span>, a miniature<br/>
            <div id="" class="pb"></div>
                    picture, but not the less a resemblance. Stand on the pier and look round<br/>
                    you. The sky is a French sky, it is a very turquoise, the sea is a French<br/>
                    sea in everything but its want of motion, the air is French air, none of<br/>
                    your English boisterous sea puffs that blow the dust in your eyes when<br/>
                    you wish to be particularly clear sighted. No, it is a mere breath, you<br/>
                    canʼt call it a breeze, yet bearing a delicious, a balmy coolness, and a<br/>
                    little, a very little smell of the sea. Look at the fishing boats, they are<br/>
                    peculiarly French, and particularly clumsy. The red, tattered, shapeless<br/>
                    sail, the undistinguishable resemblance of stem to stern, the porpoise like<br/>
                    manner in which the vessel labours through the water, the incorrigible<br/>
                    disorder that reigns on board, the confusion of fish out of water with<br/>
                    men—that are at least out of their element, would mark a French fishing‐<br/>
                    boat whatever quarter of the world it might happen to be driven to.</div>
         
         <div class="p">And look at the town; the chimneys are entirely vapourless, and have<br/>
                    that peculiarly awkward look incident to all useless things. And look at<br/>
                    the people; the countenance, the costume, the <i>tout ensemble</i> is altogether<br/>
                    different from anything you ever saw in <span class="placeName-ENGLAND">England</span>, and yet <span class="placeName-ENGLAND">England</span>ʼs<br/>
                    cliffs are on the horizon, half‐an‐hoursʼ might see you beneath them.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/calais_glosses_contextual#FOURHOURSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> It<br/>
                    is most extraordinary.
                </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
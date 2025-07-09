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
“The Meuse” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self">Back to apparatus</a><br/></div>
   <div class="fileName"><span>“The Meuse” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">How lightly the waves of the broad <span class="geogName-MEUSE">Meuse</span> crisped with the first breath 
                    <br/>of the morning, as we swept over the long bridge that crosses the river 
                    <br/>from <span class="placeName-NAMUR">Namur</span>, and looked back on the rich dome of its small but beautiful 
                    <br/>cathedral,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LONGBRIDGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> as it began to smile to the first glance of the joyous sun, that 
                    <br/>was drinking up the delicate mists which clung to the hills, and rested on 
                    <br/>the valley, in which the fair city reposed so peacefully—and then we 
                    <br/>dashed along the valley of the <span class="geogName-MEUSE">Meuse</span>. I know not if it was because this 
                    <br/>was our first initiation in to<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#INTO" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> the scenery of Continental rivers, but this 
                    <br/>part of the <span class="geogName-MEUSE">Meuse</span> appeared to me infinitely preferable (not in point of 
                    <br/>sublimity or beauty,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#BEAUTY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span> but in that romantic and picturesque fairy beauty 
                    <br/>which is, in many cases, superior to either) to anything which I ever after‐
                    <br/>wards saw on the shores of the far famed <span class="geogName-RHINE">Rhine</span>.</div>
         
         <div class="p">There was, to me, a great sameness throughout the whole of the course 
                    <br/>of the latter river; and, for its fortresses, it is positively too much of a 
                    <br/>good thing—a tiresome repetition of ruins, and ruins too which do not 
                    <br/>altogether agree with my idea of what ruins ought to be. But for the 
                    <br/><span class="geogName-MEUSE">Meuse</span>—the infinite variety of scenery, the impossibility of seeing every 
                    <br/>successive change as you feel that it ought to be seen—and, finally, the 
                    <br/>tantalizing rate at which you dash away from that which you could feast 
                    <br/>upon, and look upon, and dwell upon, for—ages, I was going to say, 
                    <br/>months, I will say, are enough to enchant you with anything. If you<div id="" class="pb"></div>
                    wish to see rock scenery in perfection, go to the <span class="geogName-MEUSE">Meuse</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#GOTOTHEMEUSEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> for never were 
                    <br/>rocks more beautifully disposed, more richly and delicately wooded, or 
                    <br/>more finely contrasted with the amazing richness of the surrounding 
                    <br/>scenery. But, alas! it was but a forenoon ride, and the eve saw us quit 
                    <br/>the magnificent <span class="geogName-MEUSE">Meuse</span> with sorrow, for the smoky streets and coal wharfs 
                    <br/>of <span class="placeName-LIEGE">Liège</span>, and the round, dumpy, shapeless hills of <span class="placeName-SPA">Spa</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LIEGESPAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
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
msix/MSIX26v-27r.jpg msix/MSIX27v-28r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Meuse” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSIX26v" class="pb"></div>
         
         <div class="p">How lightly the waves of the broad <span class="geogName-MEUSE">Meuse</span>
            <br/>crisped with the first breath of the mor‐
                <br/>ning as we swept over the long bridge
                <br/>that crosses the river from <span class="placeName-NAMUR">Namur</span>, and
                <br/>looked back on the rich dome of its small<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span>
            <br/>but beautiful cathedral,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LONGBRIDGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> as it began to
                <br/>smile to the first glance of the joyous
                <br/>sun that was drinking up the delicate
            <div id="MSIX27r" class="pb"></div>
            <br/>mists which clung to the hills, and rested on
                <br/>the valley, in which the fair city reposed<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span>
            <br/>so peacefully — and then we dashed along
                <br/>the valley of the <span class="geogName-MEUSE">Meuse</span>. I know not, if it<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span>
            <br/>was because this was our first initiation in
                <br/>to<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#INTO" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span> the scenery of continental rivers, but this<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span>
            <br/>part of the <span class="placeName-MEUSE">Meuse</span> appeared to me infinitely
                <br/>preferable (not in point of sublimity or
                <br/>beauty,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#BEAUTY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span> but in that romantic and pi
                <br/>cturesque fairy beauty which is, in many
                <br/>cases, superior to either), to any thing which
                <br/>I ever afterwards saw on the shores of the
                <br/>far famed <span class="geogName-RHINE">Rhine.</span> There was, to me, a
                <br/>great sameness throughout the whole of<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span>
            <br/>the course of the latter river, and, for its<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                h
                </span>
                
              </a></span>
            <br/>fortresses, it is positively too much of a good
                <br/>thing, a tiresome repetition of ruins, and
                <br/>ruins too, which do not altogether agree<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                i
                </span>
                
              </a></span>
            <br/>with my idea of what ruins ought to be.
                <br/>But for the <span class="geogName-MEUSE">Meuse</span>, the infinite variety of scene–
                <br/>ry.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                j
                </span>
                
              </a></span> the impossibility of seeing every successive
            <div id="MSIX27v" class="pb"></div>
            <br/>change as you feel that it ought to be seen —, and,
                <br/>finally, the tantalizing rate at which you dash<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                k
                </span>
                
              </a></span>
            <br/>away from that which you could feast upon, and<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                l
                </span>
                
              </a></span>
            <br/>look upon, and dwell upon, for — ages I was going
                <br/>to say, months, I will say, are enough to enchant
                <br/>you with anything. If you wish to see rock scen‐
                <br/>ery in perfection, go to the <span class="geogName-MEUSE">Meuse</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#GOTOTHEMEUSEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> for never were<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                m
                </span>
                
              </a></span>
            <br/>rocks more beautifully disposed, more richly and<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                n
                </span>
                
              </a></span>
            <br/>delicately wooded, or more finely contrasted with<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                o
                </span>
                
              </a></span>
            <br/>the amazing richness of the surrounding scenery.
                <br/>But alas, it was but a forenoon ride, and the eve
                <br/>saw us quit the magnificent <span class="geogName-MEUSE">Meuse</span> with sorrow<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#JUSTIFICATION" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                p
                </span>
                
              </a></span>
            <br/>for the smoky streets and coal wharfs of <span class="placeName-LIEGE">Liege</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#MEUSEBLANK2" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                q
                </span>
                
              </a></span>
            <br/>and the round, dumpy, shapeless hills of <span class="placeName-SPA">Spa</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LIEGESPAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span><br/>
            <span class="space" style="padding-left:2.8em"> </span>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
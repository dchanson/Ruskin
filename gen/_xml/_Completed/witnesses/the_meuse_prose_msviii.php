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
msviii/MSVIII60v-61r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“The Meuse” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII60v" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>The <span class="geogName-MEUSE">Meuse</span></div>
         
         <div class="p">How <span class="del-strikethrough">be</span> lightly the waves of the broad <span class="geogName-MEUSE">Meuse</span>, crisped<br/> 
                        with the first breath of the morning, as we swept over<br/>
                        the long bridge that crosses the river from <span class="placeName-NAMUR">Namur</span>,<br/> 
                        and looked back on the rich dome of its small, but<br/> 
                        beautiful cathedral,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LONGBRIDGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> as it began to smile to the<br/> 
                        first glance <span class="del-strikethrough">th</span> of the joyous sun, that was drink‐<br/> 
                        ing up the delicate mists, which clung to the hills and<br/> 
                        rested <div 
          class="subst-del s-subst s-del" >i</div><div 
          class="s-subst s-add s-overwrite s-inline">o</div>n the valley in which the fair city reposed<br/> 
                        so peacefully, and then <span class="del-strikethrough">plunged</span> dashed along the<br/> 
                        valley of the <span class="geogName-MEUSE">Meuse</span>. I know not, if it was because<br/> 
                        this was our first initiation into the scenery of<br/> 
                        continental rivers, but this part of the <span class="geogName-MEUSE">Meuse</span><br/> 
                        appeared to me infinitely preferable, (not in point<br/> 
                        of sublimity, or immensity but in that romantic<br/> 
                        and picturesque fairy beauty, which is, in many<br/>
                        cases preferable to either) to any thing which I ever<br/> 
                        afterwards saw on the shores of the farfamed <span class="geogName-RHINE">Rhine</span>.<br/> 
                        There was, to me, a great sameness throughout the whole<br/> 
                        of the ‸ <div 
              class="add-above" 
              style="left:2.8em">course of the</div> latter river, and ‸ <div 
              class="add-above" 
              style="left:10.0em">as</div> to its fortresses, it is positively too<br/> 
                        much of a good thing, a tiresome repitition of ruins,<br/> 
                        and ruins too, which do not altogether come up to my<br/> 
                        idea of what ruins ought to be,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> But for the <span class="geogName-MEUSE">Meuse</span>,<br/> 
                        the infinite variety of scenery, the almost confusing<br/> 
                        succession of delightful changes, the impossibility of <span class="del-strikethrough">examining</span><div 
              class="add-below" 
              style="left:22.8em">seeing</div><br/>
            <div id="MSVIII61r" class="pb"></div>
            <div class="pageNum-top-right">61</div><br/>
            every successive change as you feel that it ought to be seen, and<br/> 
                        finally, the tantalizing rate at which you dash away (capital<br/> 
                        road) from that which you could feast upon, and look upon<br/> 
                        and dwell upon, for—ages I was going to say, months, I<br/> 
                        will say, are enough to enchant you with anything.  If you<br/> 
                        wish to see rock scenery in perfection, go to the <span class="geogName-MEUSE">Meuse</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#GOTOTHEMEUSEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> for<br/> 
                        never were rocks more beautifully disposed, more richly and<br/> 
                        delicately wooded or more finely contrasted with the amaz‐<br/>
                        ing luxuriance of‸ <div 
              class="add-above" 
              style="left:7.6em">the</div> surrounding scenery. But alas. it was<br/> 
                        but a forenoon ride, and the eve saw us quit the magnificent<br/>
            <span class="geogName-MEUSE">Meuse</span> with sorrow for the smoky streets and coal wharfs<br/>
                        of <span class="placeName-LIEGE">Liege</span>, and the round, dumpy, shapeless hills of <span class="placeName-SPA">Spa</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LIEGESPAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span><br/></div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
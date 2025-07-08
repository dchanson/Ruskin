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
“Aix la Chapelle” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII64v-65r.jpg msviii/MSVIII65v-66r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“Aix la Chapelle” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>Aix la Chapelle</div>
         
         <div class="p">Hast ever heard of the peace of <span class="placeName-AIXLACHAPELLE">Aix la Chapelle</span>,<br/>
                    reader.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#PEACEOFAIXLACHAPELLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> If thou ever travellest from
                    <span class="placeName-SPA">Spa</span> to <span class="placeName-AIXLACHAPELLE">Aix</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#SPATOAIXGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span>
            <div 
          class="s-subst s-add s-overwrite s-inline">or</div><div 
          class="subst-del s-subst s-del" >and</div> from<br/>
            <span class="placeName-AIXLACHAPELLE">Aix</span> to <span class="placeName-COLOGNE">Cologne</span>, thou shalt find various treaties of<br/>
                    peace have been ratified, which thou wilt not approve<br/>
                    of. Thou shalt find atreaty,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#ATREATY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span> whereof the first condition is.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><br/>
                    that the postillions whip be not closely acquainted with the<br/>
                    back of his quadrupeds, more than three times in a stage,<br/>
                    orso,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#ORSO" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span> Item, that the above mentioned quadrupeds, be not<br/>
                    compelled to draw any carriage, chariot, gig, or other vehicle,<br/>
                    whatsoever, at a greater rate than two miles an hour.<br/>
            <div id="MSVIII65v" class="pb"></div>
                    Item, that the above mentioned quadrupeds be not compelled<br/>
                    to trot upon the paved centre of the road, but that they<br/>
                    be permitted to draw the carriage, chariot, gig, or other vehicle<br/>
                    afore said, into the beds of sand and dust, denominated<br/>
                    by the postillion, la terre, even although the carriage, char‐<br/>
                    iot gig, or other vehicle, be in imminent danger of being overset<br/>
                    into the ditch which bordereth upon the road. Item, that<br/>
                    postillion be permitted, when upon the backs of his horses,<br/>
                    to indulge himself with a comfortable pipe, and half<br/>
                    hours nap, or so, during which time, his above mentioned<br/>
                    quadrupeds be surrendered to their own will, and gui‐<br/>
                    dance,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#POSTILIONAIXLACHAPELLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> Alas every article of this treaty was strictly<br/>
                    fulfilled with regard to us, and the consequence was,<br/>
                    that during a <div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >half</div><div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:6.0em">six</div> hours ride of 12 miles, I was first<br/>
                    fevered by the burning sun, then smothered by the<br/>
                    dust, and finally—but let that pass for the present.<br/>
                    A <span class="title-AACHENCATHEDRAL">cathedral</span> is a noble, a beautiful, a sublime thing,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#CATHEDRALGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> by<br/>
                    twilight, with its white, fretted, marble columns, looking<br/>
                    out from the dark retiring immensity of the long aisles,<br/>
                    and the faint streams of coloured and variegated light<br/>
                    falling faintly through the Gothic windows, streaming<br/>
                    at intervals along the chequered floors, or ruddily lighting<br/>
                    up the countenances of the marble figures, giving a<br/>
                    ghastly resemblance to reality, a mockery of life, that<br/>
                    makes you start when you look upon the hollow eyes,<br/>
                    and rigid muscles starting out of the stone,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span> You<br/>
                    almost think that the dead forms of departed monarchs<br/>
                    have sprung forth from their narrow dwellings beneath that<br/>
                    ancient pavement, and the peers of <span class="persName-CHARLEMAGNE">Charlemagne</span> are rallying<br/>
                    again around their monarch. Wake—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#WAKEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span><br/></div>
         <div id="MSVIII66r" class="pb"></div>
         <div class="pageNum-top-right">66</div><br/>
         
         <div class="p">Saw <span class="persName-CHARLEMAGNE">Charlemagne</span>s easy chair.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#EASYCHAIRGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> Arms stone, back stone<br/>
                    hard unaccommodating independent <span class="name--GRANITE">granite</span> Thin velvet<br/>
                    cushion however on the seat as a mediator Very ancient<br/>
                    affair, product of the dark ages I suppose. Sarcophagus<br/>
                    sculptured, Grecian, basso relievo.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#SARCOPHAGUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span> The revolutionists am‐<br/>
                    used themselves by depriving the poor stone gentlemen<br/>
                    of their olfactory nerves, alias noses, consequence they<br/>
                    look all terrible flats. <span class="del-strikethrough">Twili</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#TWILIGHTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span> Night coming on. Left<br/>
                    the cathedral just in time to be tantalized by grinning<br/>
                    at a magnificent picture when it was pitch dark. Last judg‐<br/>
                    ment.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span> <span class="gap" style="padding-left:4.8em"> </span> I think.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span> in the <span class="placeName-HOTELDEVILLEAIX">hotel de ville</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#ITHINKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> Returnʼd to<br/>
                    the inn in very bad humour. Off early next morning for<br/>
            <span class="placeName-COLOGNE">Cologne</span>. Goodnight.<br/>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
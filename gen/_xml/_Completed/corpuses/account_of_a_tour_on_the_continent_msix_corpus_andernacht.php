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
“Andernacht” “Andernacht” [section title] “Andernacht” [poem] “Andernacht” Drawing 1 of 1 “Andernacht” [prose]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msix/MSIX34v-35r.jpg msix/MSIX34v-35r.jpg msix/MSIX35v-36r.jpg msix/MSIX35v-36r.jpg msix/MSIX35v-36r.jpg msix/MSIX37v-38r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msix" target="_self"></a><br/></div>
   <div class="fileName"><span>“Andernacht” [section title]</span></div><div id="MSIX35r" class="pb"></div>
   <div class="title" id="">
      <span class="head-section"><span class="space" style="padding-left:4.4em"> </span><span class="title-composite-JRANDERNACHTCOMP"><span class="smallcaps">ANDERNACHT</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTBLANK" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span> 
      </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Andernacht” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSIX35r" class="pb"></div>
         <span class="space" style="padding-left:6.0em"> </span>
         
         <div class="lg-stanza">
            <span class="l">We have wound a weary way,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTVERSIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span></span><br/>
            <span class="l">Twilights mists are gathering grey,</span><br/>
            <span class="l">Purple now the hills are showing</span><br/>
            <span class="l">Bright the western clouds are glowing</span><br/>
            <span class="l">Lashing on with giant force,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <div id="MSIX35v" class="pb"></div>
            <span class="l">Rolls the <span class="placeName-RHINE">Rhine</span> his sullen course,</span><br/>
            <span class="l">Flash his waves with flamy red,</span><br/>
            <span class="l">Eddying oer their <span class="name--BASALT">basalt</span> bed,</span><br/>
            <span class="l">Now with wide expanded breast</span><br/>
            <span class="l">Now between the hills compressed,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">Ever noble, ever free,</span><br/>
            <span class="l">Flows his river majesty</span><br/>
            <span class="l">Now upon the evening skies,</span><br/>
            <span class="l"><span class="placeName-ANDERNACH">Andernacht</span>ʼs grey ruins rise,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTSGREYRUINSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            <span class="l">Memorials of the <span class="placeName-ROMEANCIENT">Roman</span> power,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ROMANPOWERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Buttress and battlement and tower,</span><br/>
            <span class="l">Decaying, falling fast away,</span><br/>
            <span class="l">The monuments of <span class="persName-JULIUSCAESAR">Caesar</span>s sway,</span><br/>
            <span class="l">In heaps together loosely thrown,</span><br/>
            <span class="l">The sculptured head, inscriptioned stone
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Unguarded now the bridges length,</span><br/>
            <span class="l">And failing fast its arches strength</span><br/>
            <span class="l">The green sod in the moat is growing</span><br/>
            <span class="l">The cold wind in the chambers blowing</span><br/>
            <span class="l">And flapping through the thin night air
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">The owl and bat the tenants there,</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Andernacht” Drawing 1 of 1</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         <h1 class="page-title"><span class="title-artwork-JRANDERNACHTTOWERMSIX"><span class="placeName-ANDERNACH">Andernach</span> <span class="placeName-building-ANDERNACHCRANE">Crane</span>, <span class="placeName-building-ANDERNACHROUNDTOWER">Round Tower</span>, and <span class="placeName-building-STMARYASSUMPTIONANDERNACH">Cathedral</span></span></h1>
         Pen and ink, approx. ? × ? cm (image only).
         
         <div class="p">The editors of the <a href="/notes/library_edition_note" target="_self">Library Edition</a> 
                        describe the image as “a sketch of a wooded, high‐banked river, with towers and a church in the distance” 
                        (<a href="/notes/bibliography#JRWORKSLE" target="_self">Ruskin, <i>Works</i></a>, 2:354 n. 2). 
                        The sketch shows a grouping of <span class="placeName-ANDERNACH">Andernach</span>ʼs most familiar medieval buildings. 
                        In the sketch, standing closest to the river, is the sixteenth‐century <span class="placeName-building-ANDERNACHCRANE">crane</span>; 
                        in the middle distance, the fifteenth‐century <span class="placeName-building-ANDERNACHROUNDTOWER">round tower</span>; 
                        and in the far distance, the towers of <span class="placeName-building-STMARYASSUMPTIONANDERNACH">St. Mary Assumption Cathedral</span>. 
                        In the drawing, <span class="persName-JR">Ruskin</span> would seem to have crowded these buildings closer together than they could in fact have been seen in a single view, 
                        but <span class="persName-CFS">Clarkson Stanfield</span> grouped them similarly for the engraving, <span class="title-artwork-CFSANDERNACH"><span class="placeName-ANDERNACH"><i>Andernach</i></span></span> 
                        (<a href="/notes/bibliography#HEATHSANNUAL1833" target="_self"><span class="persName-LR">Ritchie</span>, <span class="title-annual-HEATHSANNUAL1833"><i>Travelling Sketches on the Rhine</i> [<i>Heathʼs Picturesque Annual for <span class="date-1833">1833</span></i>]</span></a>, 154 opp.).
                    </div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Andernacht” [prose]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">What is it that makes the very heart leap wi‐<br/>
                    thin you, at the sight of a hills blue outline,<br/>
                    that so aetheriallizes the soul, and ennobles the<br/>
                    spirit, that so raises you from the earth, and<br/>
                    from aught of the earth,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span> Is it their apparent<br/>
                    proximity to the blue heavens inaccessible–<br/>
                    ness, is it the humbling sense of your own<br/>
                    littleness, or the immoveable, unchangeable mag<br/>
                    nificence, of that which has seen the begin<br/>
            <div id="MSIX36v" class="pb"></div>
                    ning of the world, and will see its end, or is<br/>
                    it that the thoughts range insensibly, from<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span><br/>
                    the things created, to him who created them<br/>
                    I know not. * * *. How it thrilled<br/>
                    through me, when first, far away, across<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span><br/>
                    the lake like swell.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTPAUSEPERIODGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span> of the deep waters of that<br/>
                    wondrous river.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTPAUSEPERIODGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span> rose the cloudy outline,<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                h
                </span>
                
              </a></span><br/>
                    of the blue mountains,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                i
                </span>
                
              </a></span> Long time hath<br/>
                    past over me, since I saw the swell of a <br/>
                    blue hill, I have longed for them,— I<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                j
                </span>
                
              </a></span><br/>
                    have yearned for them as an exile yearns for<br/>
                    his native land, and I am with them.</div>
         
         <div class="p">We left <span class="placeName-COLOGNE">Cologne</span> on a misty summer mor–<br/>
                    ning, its many turreted spires rising colos–<br/>
                    sally, but grey and faint amid the wreath–<br/>
                    ing columns of mist, which smoked up<br/>
                    ward from the course of the broad <span class="placeName-RHINE">Rhine</span>.<br/>
                    There was the huge cathedral, dark with<br/>
                    the confused richness of its own fretwork,<br/>
                    and the remains of its unfinished, but<br/>
                    magnificent tower,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTCATHEDRALTOWERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> showing ruinlike, be–<br/>
            <div id="MSIX37r" class="pb"></div>
                    side it,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                k
                </span>
                
              </a></span> There were the red sails and min<br/>
                    gled masts of the innumerable shipping, with<br/>
                    out one sail swelling, or a flag bending, with<div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                l
                </span>
                
              </a></span><br/>
                    the morning breeze,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                m
                </span>
                
              </a></span> There was that peace–<br/>
                    ful and lovely lassitude over everything, that<br/>
                    sleep of the earth, and the air, and the sky, that<br/>
                    charms the mind into a correspondent fas–<br/>
                    cination of stillness, the very thoughts seem<br/>
                    sleeping.—</div>
         
         <div class="p">We went on, we past <span class="placeName-">Bonn</span>, and <span class="placeName-GODESBERG">Godes–<br/>
                    berg</span>, and <span class="placeName-">Drachenfels</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTWEWENTONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> and sunset was<br/>
                    sorrowing over hill and valley, when<br/>
                    the gloomy and venerable towers of<br/>
            <span class="placeName-ANDERNACH">Andernacht</span> beetled over us.</div>
         
         <div class="p">I love to look upon the crags that <span class="persName-JULIUSCAESAR">Cæsar</span><div class="g-justification" style="width:NaNem"> </div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTJUSTIFICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                n
                </span>
                
              </a></span><br/>
                    has scaled, and upon the towers that his<br/>
                    legions have founded. These are now<br/>
                    as they were then, looking up to the bro–<br/>
                    ad blue heaven, these are in ruins.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTTHESEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> Yet,<br/>
                    they are mighty in their ruin, and majes–<br/>
                    tic in their decay, but their Lords are depar<br/>
            <div id="MSIX37v" class="pb"></div>
                    ted and forgotten, as the waves that once lashed their<br/>
                    foundations. Other snows have melted, and the<br/>
            <span class="placeName-RHINE">Rhine</span> yet rolls onward unbroken, but those wav–<br/>
                    es are lost in the ocean for ever<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_poem_glosses_textual#ANDERNACHTBLANK2" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                o
                </span>
                
              </a></span></div>
         <span class="space" style="padding-left:6.8em"> </span>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
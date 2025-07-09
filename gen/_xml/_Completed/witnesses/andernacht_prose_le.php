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
“Andernacht” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_le" target="_self"></a><br/></div>
   <div class="fileName"><span>“Andernacht” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">What is it that makes the very heart leap within you at the sight of a<br/>
                    hillʼs blue outline; that so ætherializes the soul and ennobles the spirit;<br/>
                    that so raises you from the earth and from aught of the earth? Is it<br/>
                    their apparent proximity to the blue heavenʼs inaccessibleness? is it the<br/>
                    humbling sense of your own littleness or the immoveable, unchangeable<br/>
                    magnificence of that which has seen the beginning of the world and will see<br/>
            <div id="" class="pb"></div>
                    its end, or is it that the thoughts range insensibly from the things created<br/>
                    to Him who created them? I know not. How it thrilled through me,<br/>
                    when first, far away, across the lake‐like swell of the deep waters of that<br/>
                    wondrous river, rose the cloudy outline of the blue mountains. Long time<br/>
                    hath past over me since I saw the swell of a blue hill. I have longed for<br/>
                    them—I have yearned for them as an exile yearns for his native land, and<br/>
                    I am with them.</div>
         
         <div class="p">We left <span class="placeName-COLOGNE">Cologne</span> on a misty summer morning, its many turreted spires<br/>
                    rising colossally, but grey and faint amid the wreathing columns of mist,<br/>
                    which smoked upward from the course of the broad <span class="geogName-RHINE">Rhine</span>. There was<br/>
                    the huge cathedral, dark with the confused richness of its own fretwork,<br/>
                    and the remains of its unfinished but magnificent tower showing ruin‐like<br/>
                    beside it.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTCATHEDRALTOWERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> There were the red sails and mingled masts of the innumerable<br/>
                    shipping, without one sail swelling or a flag bending with the morning<br/>
                    breeze. There was that peaceful and lovely lassitude over everything, that<br/>
                    sleep of the earth, and the air, and the sky, that charms the mind into a<br/>
                    correspondent fascination of stillness, the very thoughts seem sleeping.</div>
         
         <div class="p">We went on, we past <span class="placeName-BONN">Bonn</span>, and <span class="placeName-GODESBERG">Godesberg</span>, and <span class="placeName-DRACHENFELS">Drachenfels</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTWEWENTONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> and<br/>
                    sunset was sorrowing over hill and valley when the gloomy and venerable<br/>
                    towers of <span class="placeName-ANDERNACH">Andernacht</span> beetled over us.</div>
         
         <div class="p">I love to look upon the crags that <span class="persName-JULIUSCAESAR">Cæsar</span> has scaled, and upon the<br/>
                    towers that his legions have founded. These are now as they were then,<br/>
                    looking up to the broad blue heaven, these are in ruins.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTTHESEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> Yet they<br/>
                    are mighty in their ruin, and majestic in their decay, but their Lords are<br/>
                    departed and forgotten as the waves that once lashed their foundations.<br/>
                    Other snows have melted, and the <span class="geogName-RHINE">Rhine</span> yet rolls onward unbroken, but<br/>
                    those waves are lost in the ocean for ever.
                </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
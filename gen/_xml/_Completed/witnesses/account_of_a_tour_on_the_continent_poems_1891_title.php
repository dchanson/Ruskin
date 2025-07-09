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
“Account of a Tour on the Continent”
EOT
);
define("FACS_FILE_NAMES", <<<EOT

EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_poems_1891" target="_self"></a><br/></div>
   <div class="fileName"><span>“Account of a Tour on the Continent”</span></div>
   <div class="title" id="">
      <span class="head" id=""><span class="title-composite-JRACCOUNTTOUR"><span class="caps">ACCOUNT OF A TOUR ON THE CONTINENT</span></span>.</span>
      
      
      
      
      <div class="p">“Early in the spring of <span class="date-1833">1833</span> <span class="persName-SP">Prout</span> published his <a href="/notes/bibliography#PROUTSKETCHES" target="_self"><span class="title-book-PROUTSKETCHES">Sketches in<br/> 
                                Flanders and Germany</span></a>. I well remember going with my father<br/> 
                                into the shop where subscribers entered their names, and being<br/> 
                                referred to the specimen print, the turreted window over the<br/> 
         <span class="geogName-MOSELLE">Moselle</span>, at <span class="placeName-KOBLENZ">Coblentz</span>. We got the book home to <span class="placeName-HERNE">Herne Hill</span><br/> 
                                before the time of our usual annual tour; and as my mother<br/>
                                watched my fatherʼs pleasure and mine in looking at the wonderful<br/> 
                                places, she said, why should we not go and see some of them in<br/> 
                                reality? My father hesitated a little, then with glittering eyes<br/> 
                                said—why not? And there were two or three weeks of entirely<br/> 
                                rapturous and amazed preparation. . . .</div>
      
      <div class="p">“We went by <span class="placeName-CALAIS">Calais</span> and <span class="placeName-BRUSSELS">Brussels</span> to <span class="placeName-COLOGNE">Cologne</span>; up the <span class="geogName-RHINE">Rhine</span><br/> 
                                to <span class="placeName-STRASBURG">Strasburg</span>, across the <span class="geogName-BLACKFOREST">Black Forest</span> to <span class="placeName-SCHAFFHAUSEN">Schaffhausen</span>, then made<br/> 
                                a sweep through North <span class="placeName-SWITZERLAND">Switzerland</span> by <span class="placeName-BASLE">Basle</span>, <span class="placeName-BERNE">Berne</span>, <span class="placeName-INTERLACHEN">Unterlachen</span>,<br/> 
         <span class="placeName-LUCERNE">Lucerne</span>, <span class="placeName-ZURICH">Zurich</span>, to <span class="placeName-CONSTANCE">Constance</span>,—following up the <span class="geogName-RHINE">Rhine</span> still to<br/> 
         <span class="placeName-COIRE">Coire</span>, then over <span class="placeName-SPLUGEN">Splügen</span> to <span class="placeName-COMO">Como</span>, <span class="placeName-MILAN">Milan</span>, and <span class="placeName-GENOA">Genoa</span>; meaning,<br/> 
                                as I now remember, for <span class="placeName-ROME">Rome</span>. But, it being <span class="date-1833-06">June</span> already, the<br/> 
                                heat of <span class="placeName-GENOA">Genoa</span> warned us of imprudence; we turned, and came<br/> 
                                back over the <span class="geogName-SIMPLON">Simplon</span> to <span class="placeName-GENEVA">Geneva</span>, saw <span class="placeName-CHAMOUNI">Chamouni</span>, and so home<br/> 
                                by <span class="placeName-LYONS">Lyons</span> and <span class="placeName-DIJON">Dijon</span>.”</div>
      
      (<span class="title-book-JRPRAETERITA"><i>Praeterita</i></span>, I.iv)
      
      
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
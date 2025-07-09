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
"Title of Work"
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>"Title of Work"</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <h1 class="page-title">Title of Prose Piece</h1>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-CHICHESTER">chichester</span></span>
            
            <div class="p">Cross well worth looking at but saw it only in passing</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-PORTSMOUTH">portsmouth</span></span>
            
            <div class="p"><span class="name--KINGSYACHT">kings yacht</span> a very fine vessel beautiful deck 
                        fine windows  disappointed in the men of war in water and astonished
                        when on stocks foundery ropehouse 
                        blockhouse boat house timber for masts and yards</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id="">To make blocks</span>
            
            <div class="p">the pieces of wood first sawed square into 
                        different sizes 1st machine bored the holes 2d machine made them longer 
                        3d machine cut off the corners 4th machine made the grooves 5th machine 
                        rounded the blocks 6th machine cut a round slice off a piece of wood 
                        7th machine bored a hole through the middle 8th machine cut a cavity 
                        above this 9th machine polished and made a groove in it at the same 
                        time 10th machine made an iron pin which finished.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-ISLEOFWIGHT">Isle of Wight</span></span>
            
            <div class="p"><span class="placeName-RYDE">Ryde</span> fine [pier(?)]  <span class="placeName-NEWPORT">Newport</span> <span class="placeName-building-CARISBROOKECASTLE">Carisbrook castle</span> 
                        built on a fine hill  window where <span class="persName-KC1">charles</span> attempted to escape  <span class="placeName-COWES">Cowes</span> 
               <span class="persName-JN">Mr nashs</span> house  <span class="placeName-building-COWESCASTLE">Cowes castle</span>  <span class="placeName-NEWPORT">Newport</span> <span class="placeName-building-APPULDURCOMBE">appledurchome</span> [appledurcombe(?)] 
                    <span class="title-artwork-HEADOFACHILLES">head of achilles</span> common head in a closet statue of a baboon antique 
                        boat of stone  <span class="placeName-SHANKLINCHINE">shanklin chine</span> small waterfall <span class="placeName-RYDE">Ryde</span> <span class="placeName-PORTSMOUTH">portsmouth</span> place 
                        where the <span class="name--ROYALGEORGE">royal george</span> sunk</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-WINCHESTER">Winchester</span></span>
            
            <div class="p">longest cathedral in <span class="placeName-ENGLAND">England</span>  grave of <span class="persName-KW2">william 
                        Rufus</span> grave of <span class="persName-WOW">william of wickham</span>  statue of <span class="persName-KC1">charles</span> and <span class="persName-KJ1">james the 
                        first</span>  <span class="persName-CHB">Cardinal beaufort</span> fine perspective  saxon architecture</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-SALISBURY">salisbury</span></span>
            
            <div class="p">cathedral with the highest spire in <span class="placeName-ENGLAND">england</span>  
                        leaning to one side beautiful Monument  cloisters fine pillar 
                        beautiful gothic architecture  many figures</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-BLANDFORD">blandford</span></span>
            
            <div class="p">road from <span class="placeName-BLANDFORD">blandford</span> to <span class="placeName-DORCHESTER">dorchester</span> very beautiful</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-WEYMOUTH">weymouth</span></span>
            
            <div class="p">fiery cliff  isle of <span class="placeName-PORTLAND">portland</span>  road from <span class="placeName-WEYMOUTH">weymouth</span> 
                        to <span class="placeName-BRIDPORT">bridport</span> [bridfort(?)] most beautiful</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-SIDMOUTH">sidmouth</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-EXETER">exeter</span></span>
            
            <div class="p">cathedral</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-PLYMOUTH">plymouth</span></span>
            
            <div class="p">breakwater formed by stones being cast 
                        promiscuously into the sea and left to find their own base  rest same 
                        as <span class="placeName-PORTSMOUTH">portsmouth</span>.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-ASHBURTON">ashburton</span></span>
            
            <div class="p">[quoth(?)] of shells</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-IVYBRIDGE">Ivy bridge</span></span>
            
            <div class="p">beautiful bridge covered with ivy  rocky river</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-EXETER">Exeter</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            
            <div class="p">
               
               <ul>
                  
                  <li><span class="placeName-MONMOUTH">monmouth</span></li>
                  
                  <li><span class="placeName-CHEPSTOW">chepstow</span></li>
                  
                  <li><span class="placeName-BRISTOL">bristol</span></li>
                  
                  <li><span class="placeName-MALMSBURY">malmsbury</span></li>
                  
                  <li><span class="placeName-MARLBOROUGH">marlborough</span></li>
                  
                  <li><span class="placeName-READING">reading</span></li>
                  
                  <li><span class="placeName-SALTHILL">salthill</span></li>
                  
                  <li><span class="placeName-LONDON">home</span></li>
                  </ul>
               </div>
            </div>
         
         <div class="chapter" id="">
            
            <div class="p">                    
               
               <ul>
                  
                  <li><span class="placeName-LINCOLN">lincoln</span></li>
                  
                  <li>[(?)] of lincoln</li>
                  
                  <li><span class="placeName-THORNE">thorne</span></li>
                  
                  <li><span class="placeName-LEEDS">leeds</span></li>
                  
                  <li><span class="placeName-YORK">york</span></li>
                  
                  <li><span class="placeName-SCARBOROUGH">scarborough</span></li>
                  
                  <li><span class="placeName-WHITBY">whitby</span></li>
                  
                  <li>[casborough(?)]</li>
                  
                  <li><span class="placeName-STOCKTON">stocton</span></li>
                  
                  <li><span class="placeName-NEWCASTLE">Newcastle</span></li>
                  
                  <li><span class="placeName-DURHAM">durham</span></li>
                  
                  <li><span class="placeName-BISHOPAUCKLAND">bishop auckland</span></li>
                  
                  <li>Barnard castle</li>
                  
                  <li><span class="placeName-BROUGH">brough</span></li>
                  
                  <li><span class="placeName-APPLEBY">appleby</span></li>
                  
                  <li><span class="placeName-PENRITH">penrith</span></li>
                  </ul>
               </div>
            </div>
         
         <div class="chapter" id="">
            
            <div class="p">
               
               <ul>
                  
                  <li><span class="placeName-HONITON">honiton</span></li>
                  
                  <li><span class="placeName-CHARD">chard</span></li>
                  
                  <li>[creukhorne(?)]</li>
                  
                  <li><span class="placeName-SHERBORNE">sherborne</span></li>
                  
                  <li><span class="geogName-SALISBURYPLAIN">salisbury plain</span></li>
                  
                  <li>[derries(?)]</li>
                  
                  <li><span class="placeName-MALMSBURY">malmsbury</span></li>
                  
                  <li><span class="placeName-CHELTENHAM">cheltenham</span></li>
                  
                  <li><span class="placeName-WORCESTER">worcester</span></li>
                  
                  <li><span class="placeName-WARWICK">warwick</span></li>
                  
                  <li><span class="persName-fictional-GUYOFWARWICK">guy of warwicks</span> sword and his [(?)]</li>
                  
                  <li><span class="placeName-LICHFIELD">lichfield</span></li>
                  
                  <li><span class="placeName-DERBY">derby</span></li>
                  
                  <li><span class="placeName-NOTTINGHAM">nottingham</span></li>
                  </ul>
               </div>
            </div>
         
         <div class="chapter" id="">
            
            <div class="p">
               
               <ul>
                  
                  <li><span class="placeName-KESWICK">keswick</span></li>
                  
                  <li><span class="placeName-COCKERMOUTH">cockermouth</span></li>
                  
                  <li><span class="placeName-AMBLESIDE">ambleside</span></li>
                  
                  <li><span class="placeName-CONISTON">Coniston</span></li>
                  
                  <li><span class="placeName-ULVERSTON">ulverstone</span></li>
                  
                  <li>[kensal(?)]</li>
                  
                  <li><span class="placeName-LANCASTER">lancaster</span></li>
                  
                  <li><span class="placeName-GARSTANG">garstang</span></li>
                  
                  <li><span class="placeName-MANCHESTER">manchester</span></li>
                  
                  <li><span class="placeName-LIVERPOOL">liverpool</span></li>
                  
                  <li><span class="placeName-CHESTER">chester</span></li>
                  
                  <li><span class="placeName-STAFFORD">stafford</span></li>
                  
                  <li><span class="placeName-SHREWSBURY">shrewsbury</span></li>
                  
                  <li><span class="placeName-LUDLOW">ludlow</span></li>
                  
                  <li><span class="placeName-HEREFORD">hereford</span></li>
                  </ul>
               </div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-GUILDFORD">Guildford</span></span>
            
            <div class="p">30 Miles
                        Part of a monastery
                        Ruins of a castle
                        <span class="geogName-RIVERWEY">River Wey</span>
                        To <span class="placeName-FARNHAM">Farnham</span> <span class="geogName-HOGSBACK">Hogsback</span></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-CHICHESTER">Chichester</span></span>
            
            <div class="p">61
                        large cathedral</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-PORTSMOUTH">Portsmouth</span></span>
            
            <div class="p">Fine harbour
                        strongest fortifications in <span class="placeName-BRITAIN">Great Britain</span>
                        Peninsula
                        <span class="placeName-building-PORTCHESTERCASTLE">Porchester Castle</span>
                        Anchor forge Rope house</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-ISLEOFWIGHT">Isle of Wight</span></span>
            
            <div class="p">100,000 acres
                        23 Miles 13
                        Foreland of <span class="placeName-STHELENS">St Helens</span>
                        East
                        <span class="placeName-building-COWESCASTLE">Cowes castle</span>
                        Carisbrook <span class="persName-KC1">chas 1</span> confined 1 mile from <span class="placeName-NEWPORT">Newport</span> norman [(?)]
                        Kings forest
                        <span class="placeName-building-QUARRABBEY">Quarr abbey</span>
               <span class="placeName-STCATHERINES">St Catherines</span>
                        Arlington forest
                        Park cross fair views
                        <span class="placeName-building-HURSTCASTLE">Hurst castle</span>
                        Mr Barringtons seat
                        <span class="placeName-APPULDURCOMBE">Appledurcombe</span> paintings
                        <span class="geogName-THENEEDLES">The needles</span>
               <span class="geogName-BARNESHOLE">Barns hole</span>
               <span class="placeName-BLACKGANGCHINE">Blackgang chine</span>
               <span class="placeName-building-CALSHOTCASTLE">Calshot castle</span>
               <span class="placeName-APPULDURCOMBE">Appledurcombe</span>
               <span class="geogName-NEWFOREST">Newforest</span>
                        Going East from <span class="placeName-NEWPORT">Newport</span> down River
                        <span class="placeName-SANDOWN">Sandown</span> & [(?)]
                        Cross [from <span class="placeName-NEWPORT">Newp{or}t(?)</span>] to <span class="placeName-NEWTOWNISLEOFWIGHT">Newtown</span>
               <span class="geogName-CHALEBAY">Chale Bay</span> very dangerous
                        <span class="placeName-STEEPHILL">Steep Hill</span>
               <span class="placeName-MOTTISTONE">Mottistone</span> beautiful</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-SOUTHAMPTON">Southampton</span></span>
            
            <div class="p"><span class="geogName-RIVERTEST">Test</span> & <span class="geogName-RIVERITCHEN">Itchen Rivers</span>
               <span class="geogName-NEWFOREST">New Forest</span> fine views
                        <span class="placeName-building-NUTLEYABBEY">Nutley Abbey</span>
                        Going to <span class="placeName-WINCHESTER">Winchester</span>
                        B[ellevue(?)] & <span class="placeName-BEVOISMOUNT">Bevois Mount</span>
               <span class="placeName-LONGFORD">Longford</span> fine views
                        <span class="placeName-DUNMOREHILL">Dunmore Hill</span>
               <span class="placeName-ROMSEY">Romsey</span>
                        church fine Gothic cruciform
                        <span class="placeName-BISHOPSWALTAM">Bishops Walthams</span> priory.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-WINCHESTER">Winchester</span></span>
            
            <div class="p">fine cathedral begun <span class="date-0611">611</span>. fin <span class="date-1079">1079</span> inside very fine
                        bishops palace
                        college  founded by Wm of [(?)]
                        hall where assizes are kept
                        unfinished palace of <span class="persName-KC2">chas 2</span> 
                        Tomb of <span class="persName-KW2">Wm Rufus</span> [(?)]
                        Painting by <span class="persName-BWRA">West</span>
                        Fine Saxon Architexture.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-ANDOVER">Andover</span></span>
            
            <div class="p">coming from <span class="placeName-WINCHESTER">Winchester</span>
                        Yew Trees
                        Devizes
                        <span class="placeName-CORSHAM">Corsham</span> fine painting of <span class="persName-PAMETHUEN">Mr Methuen.</span></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-SALISBURY">Salisbury</span></span>
            
            <div class="p">druidical temple or <span class="placeName-building-STONEHENGE">stonehenge</span>
                        cathedral  1258 regular Gothic,
                        vaulting highly pitched between
                        arches & Cross springers [(?)]
                        antiques
                        <span class="placeName-building-WILTONHOUSE">Wilton House</span> 3 miles on Road from
                        <span class="placeName-SHAFTESBURY">Shaftesbury</span>—<span class="placeName-building-WARDOURCASTLE">Wardour Castle</span>
               <span class="placeName-FONTHILL">Fonthill</span>
               <span class="placeName-STOURTON">Stourton</span> [Houses(?)] celebrated grounds</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-BLANDFORD">Blandford</span></span>
            
            <div class="p"><span class="placeName-WEYMOUTH">Weymouth</span> / Ridge joining <span class="placeName-PORTLAND">Portland</span></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-DORCHESTER">Dorchester</span></span>
            
            <div class="p">Roman amphitheatre
                        <span class="placeName-building-MAIDENCASTLE">Maiden castle.</span>
               <span class="placeName-building-MILTONABBEY">Milton Abbey</span>
                        Ride <span class="placeName-BRIDPORT">Bridport</span> to <span class="placeName-WEYMOUTH">Weymouth</span>
                        very fine
                        coming from <span class="placeName-EXETER">Exeter</span> to 
                        <span class="placeName-HONITON">Honiton</span> 6 miles off H.
                        fine Prospects.
                        Sand & flint
                        [Stockton(?)]
                        <span class="placeName-DORSETSHIRE">Dorsetshire</span>
                        Ld Milton.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-EXETER">Exeter</span></span>
            
            <div class="p">cathedral</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-PLYMOUTH">Plymouth</span></span>
            
            <div class="p">docks
                        70 acres
                        <span class="placeName-building-MOUNTEDGCUMBE">Mount Edgcumbe</span>—¾ mile
                        by Water  fine views
                        <span class="placeName-building-EDDYSTONELIGHTHOUSE">Eddystone Lighthouse</span>
                        orangery in great [perfection(?)].</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-FALMOUTH">Falmouth</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-CITYOFBATH">Bath</span></span>
            
            <div class="p">Hot wells.
                        Wildly Gothic or Saracenic <span class="placeName-building-WELLSCATHEDRAL">Cath.
                        of Wells</span> <span class="placeName-GLASTONBURY">Glastonbury</span>
                        famous Hawthorn blows 
                        twice a year
                        <span class="placeName-BRIDGWATER">Bridgwater</span> [Ennione [Enmore(?)] 
                        castle [state(?)] ancient [Baromal(?)].</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-BRISTOL">Bristol</span></span>
            
            <div class="p">Glass houses
                        sugar refinery
                        cathedral <span class="placeName-building-STMARYREDCLIFFE">St Mary Redcliffe</span>, magnificent
                        fine bason
                        Hot well
                        <span class="placeName-BRISTOL">Bristol</span> stones
                        <span class="geogName-STVINCENTSROCK">St vincents rock</span>
                        over <span class="geogName-RIVERAVON">Avon</span> at <span class="placeName-CLIFTON">Clifton</span>
               <span class="placeName-DURDHAMDOWNS">Durdham Down</span></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-CHEPSTOW">Chepstow</span></span>
            
            <div class="p">priory
                        Castle.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-GLOUCESTER">Gloucester</span></span>
            
            <div class="p"><span class="placeName-building-STPETERCATHEDRAL">Cathedral of st peter</span>
               <span class="placeName-MATLOCK">Matlock</span>
                        cavern dug by one Man in
                        17 years.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-ROSSONWYE">Ross</span></span>
            
            <div class="p">Fine view over the celebrated <span class="geogName-WYERIVER">Wye</span>.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-DERBY">Derby</span></span>
            
            <div class="p"><span class="placeName-building-ALLSAINTSCHURCHDERBY">All saints church</span>  beautiful
                        Fabric of porcelain
                        Spars crystals &c.
                        Famous silk mill on River
                        built on Model from <span class="placeName-ITALY">Italy</span> 
                        100,000 movements by
                        a single Wheel. It turns
                        3 times in a minute making
                        73,728 yds silk each time.
                        Lord Scarsdales.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-HEREFORD">Hereford</span></span>
            
            <div class="p">old cathedral
                        <span class="placeName-HOLMELACY">Holme Lacy</span>—Duke of <span class="placeName-NORFOLK">Norfolk</span>
                        5 Miles South. Carved
                        Work.—[(?)]. Gardens
                        on King Williams Stile.
                        <span class="placeName-building-HAMPTONCOURTCASTLE">Hampton Court</span> to [Malden(?)]
                        <span class="placeName-building-WILTONCASTLE">Wilton Ruins</span> near <span class="placeName-ROSSONWYE">Ross</span>
               <span class="placeName-ROSSONWYE">Ross</span>. view from <span class="placeName-ROSSONWYE">Ross</span> churchyard.
                        King & Arms—<span class="persName-JKYRLE">J. Kyrtle man of Ross</span></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-TEWKESBURY">Tewksbury</span></span>
            
            <div class="p">Field of battle
                        Largest Church in <span class="placeName-ENGLAND">England</span>,
                        not Cathedral [or [(?)]</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-KENILWORTH">Kenilworth</span></span>
            
            <div class="p">Lake dried up. Property
                        of [Clarendons(?)]
                        [Ivory [(?)] Village [(?)]</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-WORCESTER">Worcester</span></span>
            
            <div class="p">cathedral  <span class="persName-KJ">King John</span> buried
                        Manufactory of china.
                        <span class="placeName-BROMSGROVE">Bromsgrove</span> <span class="placeName-HAGLEY">Hagley</span>
               <span class="persName-LGL">L Lyttleton</span></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-BIRMINGHAM">Birmingham</span></span>
            
            <div class="p">steam engines.
                        <span class="placeName-building-LEASOWES">Leasowes</span> 7 miles
                        off—pass thro 4 counties.
                        <span class="placeName-HAGLEY">Hagley</span>. Browns Gardening.
                        <span class="placeName-WARWICK">Warwick</span>,
                        Vineyard near Castle—<span class="persName-KH4">Henry 4</span>.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-LICHFIELD">Lichfield</span>s</span>
            
            <div class="p">cathedral  <span class="date-0666">666.</span> restored <span class="date-1661">1661,</span></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-BURTONUPONTRENT">Burton</span></span>
            
            <div class="p">Bridge of 37 arches
                        Had formerly a large abbey.
                        Towards <span class="placeName-DERBY">Derby</span>
               <span class="placeName-KEDLESTON">Kedleston</span> Lord [S(?)]carsdale,
                        Glory of <span class="placeName-DERBYSHIRE">Derbyshire</span>,
                        Pillars paintings &c.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-STAFFORD">Stafford</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-SHREWSBURY">Shrewsbury</span></span>
            
            <div class="p"><span class="placeName-HAWKSTONE">Hawkestone & Grottoes</span>
                        to <span class="placeName-OSWESTRY">Oswestry</span> by [(?)]
                        Wynne</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-CHESTER">Chester</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-NANTWICH">Nantwich</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-MANCHESTER">Manchester</span></span>
            
            <div class="p">college
                        exchange
                        collegiate church</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-STOCKPORT">Stockport</span></span>
            
            <div class="p"><span class="placeName-ASHBOURNEHOUSE">Ashbourne</span>
                        fine Monument of a child.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-ROCHDALE">Rochdale</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-LIVERPOOL">Liverpool</span></span>
            
            <div class="p">corinthian edifice</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-PRESTON">Preston</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-LANCASTER">Lancaster</span></span>
            
            <div class="p"></div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-KENDAL">Kendal</span></span>
            
            <div class="p">ruins of a castle.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-ULVERSTON">Ulverstone</span></span>
            
            <div class="p">Picturesque Road <span class="placeName-NEWBYBRIDGE">Newby Bridge</span>
                    to <span class="placeName-CONISTON">Coniston</span>.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-AMBLESIDE">Ambleside</span></span>
            
            <div class="p">fine waterfall
                        Seat of Sir [M(?)] de Fleming,
                        faces <span class="geogName-LAKEWINDERMERE">Windermere</span>.
                        D[(?)] Stone, Victory
                        <span class="persName-">Edmund I</span> when Children
                        of all the Vanquished had their
                        Eyes put out.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-KESWICK">Keswick</span></span>
            
            <div class="p">10 Miles round 5 Islands
                        <span class="geogName-SKIDDAW">Skiddaw</span> 2500 ft 5 Miles up
                        Eagles were frequent here
                        <span class="placeName-BASSENTHWAITE">Bassenthwaite</span> [tonight (?)]
                        [Eves(?)] crag—<span class="geogName-WALLACRAG">Wallow Crag</span>
                        from whence Countess <span class="geogName-DERWENTWATER">Derwent
                        Water</span> escaped <span class="date-1715">1715</span>
               <span class="placeName-LORDSISLAND">Lords Island</span> former Residence
                        of the Radcliffs <span class="geogName-DERWENTWATER">Derwentwater</span>
               <span class="geogName-SKIDDAW">Skiddaw</span> view is like a
                        tempestuous Sea of Mountains.
                        Lord [(?)]fford escaped from the
                        Fury of the Duke of <span class="placeName-YORK">York</span> [(?)]
                        a Shepherd in these Mountains
                        24 years.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-COCKERMOUTH">Cockermouth</span></span>
            
            <div class="p"></div>
            </div>  
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-CARLISLE">Carlisle</span></span>
            
            <div class="p">walls.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-PENRITH">Penrith</span></span>
            
            <div class="p">several remains of antiquity  <span class="geogName-BEACONHL">Beacon Hill</span>
                        fine views—proceed to <span class="geogName-ULLSWATER">Ullswater</span>
                        by <span class="placeName-building-LOWTHERCASTLE">Lowther</span>—<span class="placeName-CLIFTON">Clifton</span> famous
                        Skirmish Rebels—at <span class="placeName-building-LOWTHERCASTLE">Lowther</span>
                        Carpet Manufy like Gobelines
                        <span class="geogName-ULLSWATER">Ullswater</span> 9 Miles long.
                        Gobery park fine Cascade
                        <span class="persName-fictional-KINGARTHUR">Arthurs</span> Round Table at <span class="placeName-PENRITH">Penrith</span>
                        use unknown—supposed
                        Tilting Grounds—Ice at
                        <span class="placeName-PENRITH">Penrith</span>—Inscription on
                        [burial(?)] Stone of the Deaths by 
                        Plague.  Singular Monument
                        2 pedlars [(?)] & Stones like
                        Boars. This custom very ancient
                        <span class="geogName-RIVEREDEN">Eden River</span> all picturesque
                        Near <span class="placeName-LITTLESALKELD">little Salkeld</span> a
                        Druidical Monument called
                        <span class="placeName-building-LONGMEGDAUGHTERS">Meg & her Daughters</span>—
                        <span class="placeName-PENRITH">Penrith</span> Women beautiful 
                        majestic polite simple
                        Men facetious
                        Going to <span class="placeName-KESWICK">Keswick</span> see the
                        Castle Rocks of <span class="geogName-STJOHNSVALE">St Johns</span>. So 
                        like a Gothic Building—
                        Singular Flood in this Vale 
                        in <span class="date-1749">1749</span>. swept cottages & all 
                        away.—except a little School
                        of Boys left safe in midst
                        of the Destruction. Going from <span class="placeName-KESWICK">Keswick</span> to
                        <span class="geogName-ULLSWATER">Ullswater</span> see [(?)] Tower
                        Sylvan Hill of <span class="geogName-DUNMALLET">Dunmallet</span>.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-WHITEHAVEN">Whitehaven</span></span>
            
            <div class="p"><span class="placeName-EGREMONT">Egremont</span> Windhill.</div>
            </div>
         
         <div class="chapter" id="">
            
            <div class="p">Going from <span class="placeName-HEXHAM">Hexham</span> to
                        <span class="geogName-TEESDALE">Teesdale</span>—Cataracts
                        vale of <span class="geogName-TEESDALE">Tees</span>—To <span class="placeName-BARNARDCASTLE">Barnard
                        Castle</span> greatest Corn
                        Market in North of <span class="placeName-ENGLAND">E{ngland}</span>.
                        Beautiful falls of <span class="geogName-TEES">Tees</span>
                        from Bridge near [(?)]
                        {Castle} Abbey. <span class="placeName-building-ROKEBYPARK">Rokeby Hall</span>
                        where <span class="geogName-GRETA">Greta</span> & <span class="geogName-TEES">Tees</span> join
                        many antiques & paintings
                        in the abbey.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-RICHMOND">Richmond</span></span>
            
            <div class="p">to <span class="placeName-BARNARDCASTLE">Barnard</span> fine—great hall
                        at <span class="placeName-">Middleton</span> 10 Miles from
                        <span class="placeName-BARNARDCASTLE">Bd Castle</span>.
                        <span class="placeName-building-RABYCASTLE">Raby Castle</span> (middling)
                        <span class="placeName-BISHOPSAUCKLAND">Bishops Auckland</span>—park
                        Town [Large(?)]</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id="">Wells</span>
            
            <div class="p">see former [(?)]
                        Fasting Bishop [(?)]
                        tried to fast all Lent
                        lived 39 days.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-GLASTONBURY">Glastonbury</span></span>
            
            <div class="p">see before
                        for Grandeur & Riches
                        unequalled once—in
                        times of W. Saxons—
                        the <span class="placeName-building-GEORGEANDPILGRIM">George</span> is where the
                        Pilgrims all came to—It
                        was an Inn built for them.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-NORTHAMPTON">Northampton</span></span>
            
            <div class="p"><span class="placeName-ALTHORP">Althorp</span> {seat of} Earl Spencer, 5
                        miles off
                        a university once <span class="date-1238">1238</span>.
                        but Students [(?)] to Oxford.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-WOBURN">Woburn</span></span>
            
            <div class="p">Abbey very fine.</div>
            </div>
         
         <div class="chapter" id="">
            
            <div class="p"><span class="placeName-CHALKHILL">Chalk Hill</span> by <span class="placeName-DUNSTABLE">Dunstable</span>
                        reach from <span class="placeName-DORCHESTER">Dorchester</span>
                        to <span class="placeName-NORFOLK">Norfolk</span>.</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-CIRENCESTER">Cirencester</span></span>
            
            <div class="p"><span class="placeName-OAKLEYWOOD">Woods of Oakly</span> Ld B[(?)].</div>
            </div>
         
         <div class="chapter" id="">
            <span class="head-chapter" id=""><span class="placeName-YORK">York</span></span>
            
            <div class="p"><span class="placeName-building-CASTLEHOWARD">Castle Howard</span>.</div>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>
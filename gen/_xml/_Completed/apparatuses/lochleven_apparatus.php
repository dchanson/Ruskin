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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever">
   
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset&#x003D;UTF-8">
      <title>&#x201C;Lochleven&#x201D;</title><?php require_once(ROOT_PATH."layout_includes/site_top.inc.php"); ?>
        <link href="<?php echo r_build_url("style.php?p=site_styles.scss"); ?>" rel="stylesheet" type="text/css">
      </head>
   
   
   <body><?php require_once(ROOT_PATH."layout_includes/navigation.inc.php"); ?>
      
      <div class="apparatus">
         <div class="work" id="">
            
            <div id="top" class="page-title">
               <div class="title-text">&#x201C;Lochleven&#x201D;</div>
               <hr>
               <ul class="mini-contents">
                  <li><a href="#WITNESSES">Witnesses</a>
                      &#x007C; 
                    </li>
                  <li><a href="#TITLE">Title</a>
                      &#x007C; 
                    </li>
                  <li><a href="#GENRE">Genre</a>
                      &#x007C; 
                    </li>
                  <li><a href="#MAJORMS">Manuscripts</a>
                      &#x007C; 
                    </li>
                  <li><a href="#DATE">Date</a>
                      &#x007C; 
                    </li>
                  <li><a href="#COMPPUB">Composition and Publication</a>
                      &#x007C; 
                    </li>
                  <li><a href="#DISCUSSION">Discussion</a></li>
               </ul>
            </div>
            
            <div id="WITNESSES" class="section">
               			<span class="head-section">Witnesses</span>
               			
               <ul>
                  			    
                  <li><a href="<?php echo r_build_url("apparatuses/msiii_apparatus.php");?>" target="_self"><b><span class="title-manuscript-MSIII">MS III</span></b></a>
                     			        
                     <ul>
                        			    
                        <li><a href="<?php echo r_build_url("witnesses/lochleven_msiii.php");?>" target="_self"><span class="title-poem-LOCHLEVENPOEM">&#x201C;Lochleven&#x201D;</span></a></li>
                        			</ul>
                     			    </li>
                  			</ul>      
               </div>
            
            <div id="TITLE" class="section">
               <span class="head-section">Title</span>
               
               <div class="p"><span class="title-poem-LOCHLEVENPOEM">&#x201C;Lochleven&#x201D;</span></div>
               
               <div class="p"><span class="persName-JR">Ruskin</span> wrote the title as <span class="title-poem-LOCHLEVENPOEM">&#x201C;lochleven&#x201D;</span>. 
                    See <a href="<?php echo r_build_url("notes/title_citation_note.php");?>" target="_self">System of Title Citation for Works</a>.</div>
               </div>
            
            <div id="GENRE" class="section">
               <span class="head-section">Genre</span>
               
               <div class="p">Poem; <a href="<?php echo r_build_url("notes/topographical_poetry_note.php");?>" target="_self">topographical poem</a>.</div>
               </div>
            
            <div id="MAJORMS" class="section">
               <span class="head-section">Manuscripts</span>
               
               <div class="p"><a href="<?php echo r_build_url("apparatuses/msiii_apparatus.php");?>" target="_self"><span class="title-manuscript-MSIII">MS III</span></a> (pp. 62&#x2013;63), a
                    <a href="<?php echo r_build_url("notes/redbook_note.php");?>" target="_self">Red Book</a>
                    devoted primarily to <a href="<?php echo r_build_url("apparatuses/harry_and_lucy_vol2_apparatus.php");?>" target="_self"><span class="title-lesson-HARRYANDLUCYVOL2">&#x201C;Harry and Lucy,&#x201D; Vol. 2</span></a>. 
                    <span class="title-poem-LOCHLEVENPOEM">&#x201C;Lochleven&#x201D;</span> is the second poem in
                    <a href="<?php echo r_build_url("apparatuses/poetry_discriptive_apparatus.php");?>" target="_self"><span class="title-anthology-POETRYDISCRIPTIVE"></span>&#x201C;Poetry Discriptive&#x201D;</a>.</div>
               
               <div class="p">Facsimiles by permission of <span class="title-archive-BEINECKERUSKINCOLLECTION">John Ruskin Collection</span>, General Collection, Beinecke Rare Book and Manuscript Library, Yale University. Transcriptions of texts and commentary &#x00A9; <span class="persName-DCH">David C. Hanson</span>.</div>
               </div>
            
            <div id="DATE" class="section">
               <span class="head-section">Date</span>
               
               <div class="p"><span class="date-1827-07-01-1827-12-31">1827, after June</span>. For the journey with which this poem is probably connected, see 
                    <a href="<?php echo r_build_url("notes/tours_of_1826-27_note#WALESANDSCOTLAND.php");?>" target="_self">Tours of 1826&#x2013;27: Wales and Scotland, 1827</a>; 
                    see also <a href="<?php echo r_build_url("apparatuses/wales_apparatus.php#DATE");?>" target="_self"><span class="title-poem-WALES">&#x201C;Wales&#x201D;</span>: Date</a>,
                    <a href="<?php echo r_build_url("apparatuses/harry_and_lucy_vol2_apparatus.php#DATE");?>" target="_self"><span class="title-lesson-HARRYANDLUCYVOL2">&#x201C;Harry and Lucy,&#x201D; Vol. 2</span>: Date</a>,
                    and <a href="<?php echo r_build_url("notes/bibliography.php#JRWORKSLE");?>" target="_self">Ruskin, <i>Works</i></a>, 2:262n.</div>
               
               <div class="p">See also <a href="<?php echo r_build_url("notes/date_citation_note.php");?>" target="_self">System of Date Citation</a>.</div>
               </div>
            
            <div id="COMPPUB" class="section">
               <span class="head-section">Composition and Publication</span>
               
               <div class="p">Previously unpublished.</div>
               </div>
            
            <div id="DISCUSSION" class="section">
               <span class="head-section">Discussion</span>
               
               <div class="p">The poem refers to the ruins of <span class="placeName-LOCHLEVENCAS">Loch Leven Castle</span>, which stand on one of the <span class="geogName-LOCHLEVEN">lake</span>&#x02BC;s islands, opposite
                    <span class="placeName-KINROSS">Kinross</span>. The Ruskins regularly passed near <span class="placeName-LOCHLEVEN">Loch Leven</span>, 
                    journeying north from <span class="placeName-EDINBURGH">Edinburgh</span> to <span class="placeName-Perth">Perth</span>, 
                    the home of <span class="persName-JR">Ruskin</span>&#x02BC;s <span class="persName-JRP">Aunt Jesse Richardson</span> and his Scottish cousins 
                    (as opposed to his English cousins by the same last name, Richardson, who lived in <span class="placeName-CROYDON">Croydon</span>). 
                    Between <span class="placeName-LOCHLEVEN">Loch Leven</span> and <span class="placeName-Perth">Perth</span>, 
                    the family passed through <a href="<?php echo r_build_url("notes/glenfarg_place_note.php");?>" target="_self"><span class="geogName-GLENFARG">Glenfarg</span></a>.</div>
               
               <div class="p">This historic setting had recently been made famous by <span class="persName-WS">Walter Scott</span>&#x02BC;s novel, 
                    <i><span class="title-book-SCOTTABBOT">The Abbot</span></i> (<span class="date-1820">1820</span>), which used the events surrounding the imprisonment of 
                    <span class="persName-MQS">Mary, Queen of Scots</span>, in <span class="placeName-LOCHLEVENCAS">Loch Leven Castle</span> in <span class="date-1567">1567</span>,
                    and her forced abdication to her infant son, the future <span class="persName-KJ6">James VI</span>, followed by the queen&#x02BC;s 
                    dramatic escape from the castle in <span class="date-1568">1568</span>. According to <span class="persName-WS">Scott</span>&#x02BC;s annotation for the <span class="title-series-SCOTTMAGNUM">Magnum Opus</span> 
                    edition of the novel, <span class="persName-MQS">Mary</span> escaped in <span class="date-1568-05">May 1568</span>, aided by a young man, 
                    <span class="persName-WD">William Douglas</span>, who was probably related to the lords of the <span class="placeName-LOCHLEVENCAS">castle</span>. 
                    <span class="persName-WD">Douglas</span> stole the keys and freed the <span class="persName-MQS">queen</span> and a waiting
                    woman, escorting them &#x201C;out of the tower itself, &#x005B;and&#x005D; embarked with them in a small skiff, and rowed them to the shore&#x201D; 
                    (<a href="<?php echo r_build_url("notes/bibliography.php#SCOTTWORKSCALEDONIAN");?>" target="_self">Scott, <i>Works</i>, Caledonian Edition</a>, 20:325). In the novel,
                    the role of <span class="persName-WD">Douglas</span> is taken by the young page, <span class="persName-fictional-ROLANDSCOTTABBOT">Roland Graeme</span>. A tourist&#x02BC;s 
                    guide book of the period pictures the historical scene more melodramatically: &#x201C;under a load of misery which might have subdued a mind more masculine than 
                    <span class="sic">her&#x02BC;s &#x005B;sic&#x005D;</span>, <span class="persName-MQS">Mary</span> exerted the potent witchery of her charms upon the heart of young <span class="persName-WD">Douglas</span>, 
                    who, intoxicated with a romantic passion and ambitious hopes, sacrificed his duty and family interests at the shrine of all&#x2010;powerful love&#x201D; 
                    (<a href="<?php echo r_build_url("notes/bibliography.php#SCOTTISHTOURIST");?>" target="_self"><i>The Scottish Tourist, and Itinerary</i></a>, 126).</div>
               
               <div class="p">If <span class="persName-JR">Ruskin</span>&#x02BC;s poem reflects the family&#x02BC;s engagement with <span class="persName-WS">Scott</span>&#x02BC;s novel, 
                    the allusion predates <span class="persName-JR">Ruskin</span>&#x02BC;s versification of <span class="persName-WS">Scott</span>&#x02BC;s <i><span class="title-book-SCOTTMONASTERY">The Monastery</span></i> (<span class="date-1820">1820</span>),
                    the novel to which <i><span class="title-book-SCOTTABBOT">The Abbot</span></i> forms a sequel (see <a href="<?php echo r_build_url("apparatuses/monastery_apparatus.php");?>" target="_self"><span class="title-poem-JRTHEMONASTERY">&#x201C;The Monastery&#x201D;</span></a>). 
                    <span class="persName-JJR">John James Ruskin</span> first recorded a purchase of <i><span class="title-book-SCOTTABBOT">The Abbot</span></i> in <span class="date-1829">1829</span> 
                    (too early for the version of the novel for the <span class="title-series-SCOTTMAGNUM">Magnum Opus</span> edition 
                    &#x005B;<a href="<?php echo r_build_url("notes/bibliography.php#RFL");?>" target="_self">Burd, ed., <i>Ruskin Family Letters</i></a>,
                    188 n. 4; <a href="<?php echo r_build_url("notes/bibliography.php#MILLGATESCOTTSLASTEDITION");?>" target="_self">Millgate, <i>Scott&#x02BC;s Last Edition</i></a>, 24&#x005D;), but this proves nothing about the family&#x02BC;s first reading of the story. 
                    Together, the novels rest on a historiography pointing favorably to the <span class="date-1707-01-16">Union of <span class="placeName-SCOTLAND">Scotland</span> and <span class="placeName-ENGLAND">England</span></span>
                    under a <span class="persName-KG1">Protestant king</span>. Kindred British sentiment is perhaps expressed in
                    <span class="persName-JR">Ruskin</span>&#x02BC;s poem, <a href="<?php echo r_build_url("apparatuses/the_defiance_of_war_msi_apparatus.php");?>" target="_self">&#x201C;The Defiance of War&#x201D;</a>.</div>
               
               <div class="p">For a Romantic view of the <span class="placeName-LOCHLEVENCAS">castle</span> taken near the time of <span class="persName-JR">Ruskin</span>&#x02BC;s poem, see the <a href="<?php echo r_build_url("notes/glenfarg_place_note.php");?>" target="_self"><span class="geogName-GLENFARG">engraving</span></a> <i>Loch Leven Castle</i> by <span class="persName-JS">Joseph Swan</span>
                    after <span class="persName-JF">John Fleming</span> for 
                    (&#x005B;<span class="date-1839">1839</span>&#x005D;, 207 opp.), which shows, according to the letterpress by <span class="persName-JL">John Leighton</span>
                    (pp. 207&#x2013;12), the great square keep, adjoined by the entrance to the courtyard and the ruins of the chapel. In the distance, the sun sets over the
                    shore of the <span class="geogName-LOCHLEVEN">lake</span> and the <span class="geogName-OCHILS">Ochil Hills</span>, perhaps suggestive of <span class="persName-MQS">Mary</span>&#x02BC;s escape.</div>
               
               <div class="p"><span class="persName-JL">Leighton</span> also comments on the <span class="geogName-LOCHLEVEN">lake</span>&#x02BC;s celebrated trout, which accounts for
                    <span class="persName-JR">Ruskin</span>&#x02BC;s interest in fishing boats in his poem, an attraction almost as
                    great as the legends about <span class="persName-MQS">Queen Mary</span>.</div>
               </div>
            </div>
      </div>
      <?php require_once(ROOT_PATH."layout_includes/top_button.inc.php"); ?></body>
   
   </html>
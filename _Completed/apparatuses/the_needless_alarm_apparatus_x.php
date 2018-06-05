<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples">
   
<head>
<meta http-equiv="Content-Type" content="text/html; charset&#x003D;UTF-8">
<title>"The Needless Alarm"</title><?php include("../inactive.inc.php"); ?><link href="../styles_x.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../showcase/jquery.js"></script>
<script type="text/javascript">
//Toggle Witnesses//
$(document).ready(function(){
	$("#f1").hide();
	$("#the_needless_alarm_poems_1891").hide();
	$("#the_needless_alarm_msi").show();
});
$(document).ready(function(){
	$("#toggle-t1").click(function(){
		$(".toggle").css("color", "#999");
		$("#toggle-t1").css("color", "#036");
		$("#the_needless_alarm_poems_1891").hide();
		$("#the_needless_alarm_msi").show();
	});
});
$(document).ready(function(){
	$("#toggle-t2").click(function(){
		$(".toggle").css("color", "#999");
		$("#toggle-t2").css("color", "#036");
		$("#the_needless_alarm_msi").hide();
		$("#the_needless_alarm_poems_1891").show();
	});
});
// Toggle View //
$(document).ready(function(){
	$("#toggle-view").toggle(function(){ //Facsimile View//
		$("#toggle-view").attr("src", "../showcase/images/navbar/facsimile_ro.jpg");
		$(".witness").css("width", "0");
		$(".witness").css("height", "0");
		$(".facsimile").css("width", "100%");
		$(".facsimile").css("height", "100%");},
		function(){ //Transcription View//
		$("#toggle-view").attr("src", "../showcase/images/navbar/transcription_ro.jpg");
		$(".facsimile").css("width", "0");
		$(".facsimile").css("height", "0");
		$(".witness").css("width", "100%");
		$(".witness").css("height", "100%");},
		function(){ //Facsimile-Transcription View//
		$("#toggle-view").attr("src", "../showcase/images/navbar/facsimile-transcription_ro.jpg");
		$(".witness").css("width", "50%");
		$(".witness").css("height", "800px");
		$(".facsimile").css("width", "50%");
		$(".facsimile").css("height", "800px");}
	);
});
// Toggle Magnification //
$(document).ready(function(){
	$("#toggle-magnify").toggle(function(){ // Magnify the Facsimile Two Times //
		$("#toggle-magnify").attr("src", "../showcase/images/navbar/magnify_ro.jpg");
		$(".facsimile").css("width", "100%"); 
		$(".facsimile").css("height", "100%");},
		function(){ // Magnify the Facsimile Four Times //
		$("#toggle-magnify").attr("src", "../showcase/images/navbar/magnify_ro.jpg");
		$(".facsimile").css("width", "100%");
		$(".facsimile").css("height", "200%");},
		function(){ // Magnify the Facsimile Eight Times //
		$("#toggle-magnify").attr("src", "../showcase/images/navbar/magnify_ro.jpg");
		$(".facsimile").css("width", "100%");
		$(".facsimile").css("height", "400%");},
		function(){ // Reset the Facsimile to One-half Times (Default) //
		$("#toggle-magnify").attr("src", "../showcase/images/navbar/magnify_ro.jpg");
		$(".facsimile").css("width", "50%");
		$(".facsimile").css("height", "800px");}
	);
});

// Toggle Point Size Drop-down //
$(document).ready(function(){
    $("#toggle-enlarge").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-enlarge").toggle();
    });
});
// Reset Text to 12pt (Default) //
$(document).ready(function(){
	$("#12pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#12pt").css("color", "#09C");
		$(".witness").css("line-height", "1.5em");
		$(".witness").css("font-size", "12pt");
		$(".smallcaps").css("font-size", "8pt");
	});
});
// Enlarge Text to 16pt //
$(document).ready(function(){
	$("#16pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#16pt").css("color", "#09C");
		$(".witness").css("line-height", "1.5em");
		$(".witness").css("font-size", "16pt");
		$(".smallcaps").css("font-size", "10.7pt");
	});
});
// Enlarge Text to 20pt //
$(document).ready(function(){
	$("#20pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#20pt").css("color", "#09C");
		$(".witness").css("line-height", "1.5em");
		$(".witness").css("font-size", "20pt");
		$(".smallcaps").css("font-size", "13.3pt");
	});
});
// Enlarge Text to 24pt //
$(document).ready(function(){
	$("#24pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#09C");
		$(".witness").css("line-height", "1.5em");
		$(".witness").css("font-size", "24pt");
		$(".smallcaps").css("font-size", "16pt");
	});
});
// Toggle Transcriptions //
$(document).ready(function(){
	$("#toggle-transcription").toggle(function(){ // Display Original Text //
		$("#toggle-transcription").attr("src", "images/navbar/text-original.jpg");
		$("[class*='add-overwriting']").hide();
		$("[class*='subst-add']").hide();
		$("[class*='subst-del']").css("position","relative");
		$(".del-erasure").css("position","relative");},
		function(){ // Display Revised Text //
		$("#toggle-transcription").attr("src", "images/navbar/text-revised.jpg");
		$("[class*='del']").hide();
		$("[class*='add-overwriting']").show();
		$("[class*='subst-add']").show();},
		function(){ // Display Composite Text (Default) //
		$("#toggle-transcription").attr("src", "images/navbar/text-composite.jpg");
		$(".del-erasure").css("position","absolute");		
		$("[class*='subst-del']").css("position","absolute");			
		$("[class*='del']").show();}
	);
});
// Toggle Hand Drop-down //
$(document).ready(function(){
    $("#toggle-hand").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-hand").toggle();
	});
});
// Toggle Librarian (Example) //
$(document).ready(function(){
	$("#toggle-LIBRARIAN").toggle(function(){
		$("#toggle-LIBRARIAN").css("color", "#FFF");
		$(".add-LIBRARIAN").hide();
		$(".add-bottom-LIBRARIAN").hide();},
		function(){
		$("#toggle-LIBRARIAN").css("color", "#09C");
		$(".add-LIBRARIAN").show();
		$(".add-bottom-LIBRARIAN").show();}
	);
});
</script>
</head>
   
   
   <body><?php include("../navigation.inc.php"); ?>
      
      <div class="apparatus">
         
         <div id="top" class="title-apparatus">&#x201C;The Needless Alarm&#x201D;</div><?php include("../navigation-work.inc.php"); ?>
         <div id="TITLE" class="section">
            <span class="head-section">Title</span>
            
            <p>&#x201C;The Needless Alarm&#x201D;</p>
            
            <p><span class="persName-JR">Ruskin</span> wrote the title as &#x201C;the needless alarm&#x201D;; he also designated
                    the poem as &#x201C;poem IIII&#x201D; in the <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank">MS I Poetry Anthology</a>. 
                    See <a href="../notes/title_citation_note.php" target="_blank">System of Title Citation for Works</a>.
            </p>
            
        </div>
         
         <div id="GENRE" class="section">
            <span class="head-section">Genre</span>
            
            <p>Poem; <a href="../notes/narrative_poetry_note.php" target="_blank" class="inactive">narrative poem</a>.
            </p>
            
            <p>See <a href="#DISCUSSION">Discussion</a> for possible sources for the narrative kind, an animal tale.
            </p>
            
        </div>
         
         <div id="MAJORMS" class="section">
            <span class="head-section">Manuscripts</span>
            
            <p><a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a> (pp. 102&#x2013;3), a <a href="../notes/red_book_note.php" target="_blank">Red Book</a> devoted primarily to 
                   <a href="../apparatuses/harry_and_lucy_vol1_apparatus.php" target="_blank" class="inactive">&#x201C;Harry and Lucy,&#x201D; Vol. 1</a>. &#x201C;The Needless Alarm&#x201D; is the fourth poem in the
                   <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank">MS I Poetry Anthology</a>. Since this anthology was compiled in late 1826 or early 1827, the
                   <a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a> witness may represent a revision or copy of a witness, now lost, that was composed in or around January 1826: see
                   <a href="#DATE">Date</a>.
            </p>
            
         </div>
         
         <div id="DATE" class="section">
            <span class="head-section">Date</span>
            
            <p>January 1826&#x2013;January 1827.</p>
            
            <p>Evidence for dating this poem turns on <a href="../apparatuses/mr_gloss_dating_msi_apparatus" target="_blank" class="inactive">Margaret Ruskin&#x02BC;s Gloss on the Dating of MS I</a> by 
                    <a href="../notes/ruskin_margaret_note.php" target="_blank" class="inactive"><span class="persName-MR">Margaret Ruskin</span></a>. In the
                    <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank">MS I Poetry Anthology</a>&#x2014;at the
                    end of &#x201C;The Needless Alarm,&#x201D; the fourth poem in the anthology, and before
                    <a href="../apparatuses/on_papas_leaving_home_apparatus.php" target="_blank">&#x201C;On Papa&#x02BC;s Leaving Home,&#x201D;</a> 
                    the fifth poem&#x2014;<a href="../notes/ruskin_margaret_note.php" target="_blank" class="inactive"><span class="persName-MR">Margaret Ruskin</span></a>
                    wrote &#x201C;Jan<sup>y</sup> 1826.&#x201D; Immediately below this, she drew a horizontal rule, followed by &#x201C;this book begun about Sep<sup>t</sup>
                    or Oct 1826 / finished about Jan<sup>y</sup> 1827.&#x201D; Since the latter comment clearly refers to the whole of <a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a>, 
                    <a href="../notes/collingwood_w_g_note.php" target="_blank" class="inactive"><span class="persName-WGC">W. G. Collingwood</span></a> took the preceding date,
                    January 1826, as applying to &#x201C;The Needless Alarm&#x201D; in particular and thus as identifying <span class="persName-JR">Ruskin</span>&#x02BC;s earliest dated verse known to
                    that editor (<a href="../bibiliography/bibliography.php#POEMS4D1891" target="_blank" class="inactive"><i>Poems</i> &#x005B;4<sup>o</sup>, 1891&#x005D;</a>,
                    1:xxii; <a href="../bibiliography/bibliography.php#POEMS8D1891" target="_blank" class="inactive"><i>Poems</i> &#x005B;8<sup>o</sup>, 1891&#x005D;</a>, 1:viii).
            </p>
            
            <p>If <span class="persName-MR">Margaret</span>&#x02BC;s intention was to apply the date to &#x201C;The Needless Alarm,&#x201D; the date may point to a more elementary
                    stage of reading one year earlier than the scientific readings reflected elsewhere in the contents of <a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a>&#x2014;evidence of a graduated program of reading recommended by
                    educationalists such as the Edgeworths (see <a href="#DISCUSSION">Discussion</a>).
            </p>
            
            <p>In the <a href="../notes/library_edition_note.php" target="_blank" class="inactive">Library Edition</a>, 
                    <a href="../notes/cook_e_t_note.php" target="_blank" class="inactive"><span class="persName-ETC">E. T. Cook</span></a> and 
                    <a href="../notes/wedderburn_note.php" target="_blank" class="inactive"><span class="persName-AW">Alexander Wedderburn</span></a>
                    disagreed with <span class="persName-WGC">Collingwood</span>&#x02BC;s interpretation, ascribing the status of earliest dated verse possibly to
                    <a href="../apparatuses/the_steam_engine_apparatus.php" target="_blank">&#x201C;When furious up from mines the water pours&#x201D; &#x005B;&#x201C;The Steam Engine&#x201D;&#x005D;</a>, 
                    which is &#x201C;poem I&#x201D; in the <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank">MS I Poetry Anthology</a>: &#x201C;there is nothing to show that
                    &#x005B;<span class="persName-MR">Margaret</span>&#x02BC;s date&#x005D; does not apply equally to all four pieces, composed presumably in the order in which they are placed in the book.&#x201D; Moreover,
                    along with <a href="../apparatuses/the_steam_engine_apparatus.php" target="_blank">&#x201C;When furious up from mines the water pours&#x201D; &#x005B;&#x201C;The Steam Engine&#x201D;&#x005D;</a>, they point
                    to another contender for earliest poem&#x2014;<a href="../apparatuses/ragland_castle_apparatus.php" target="_blank">&#x201C;Ragland Castle,&#x201D;</a> which is the first poem in another
                    anthology, <a href="../notes/poetry_discriptive_apparatus.php" target="_blank">Poetry Descriptive</a>, in <a href="../apparatuses/msiii_apparatus.php" target="_blank">MS III</a>,
                    and which they date &#x201C;as early as these&#x201D; poems in <a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a>
                    (<a href="../bibiliography/bibliography.php#JRWORKSLE" target="_blank" class="inactive">Ruskin, <i>Works</i></a>, 2:255 n. 1; see
                    <a href="../apparatuses/wales_apparatus.php#DATE" target="_blank">&#x201C;Wales&#x201D;: Date</a>).
            </p>
            
            <p><a href="../apparatuses/ragland_castle_apparatus.php" target="_blank">&#x201C;Ragland Castle,&#x201D;</a> however, more likely belongs to the second half of 1827, when the family visited <span class="placeName-RAGLAN">Raglan</span>
                    and other sites in <span class="placeName-WALES">Wales</span>. The earlier date ascribed by <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span> to <a href="../apparatuses/the_steam_engine_apparatus.php" target="_blank">&#x201C;When furious up from mines the water pours&#x201D; &#x005B;&#x201C;The Steam Engine&#x201D;&#x005D;</a> turns,
                    moreover, on reasoning that elaborately interprets and even changes what <span class="persName-MR">Margaret</span> wrote. That argument assumes, first, that <span class="persName-MR">Margaret</span>&#x02BC;s note
                    &#x201C;Jan<sup>y</sup> 1826&#x201D; refers to all four poems preceding the note, not just to &#x201C;The Needless Alarm&#x201D;; second, that the first poem of this group
                    to be fair&#x2010;copied&#x2014;<a href="../apparatuses/the_steam_engine_apparatus.php" target="_blank">&#x201C;When furious up from mines the water pours&#x201D; &#x005B;&#x201C;The Steam Engine&#x201D;&#x005D;</a>,
                    or &#x201C;poem I&#x201D;&#x2014;must necessarily have been the first composed; and, third, that <span class="persName-MR">Margaret</span>&#x02BC;s date,
                    &#x201C;Jan<sup>y</sup> 1826,&#x201D; &#x201C;seems to be the date of the note,&#x201D; according to the editors, &#x201C;and not of any one of the verses in
                    particular.&#x201D; That is, in this view, &#x201C;Jan<sup>y</sup> 1826&#x201D; applies to the note that follows, &#x201C;this book begun about Sep
                    <sup>t</sup> or Oct 1826 / finished about Jan<sup>y</sup> 1827.&#x201D; The obvious discrepancy in this argument is explained by the editors as the writer&#x02BC;s mistake: &#x201C;perhaps, writing at the
                    beginning of a new year, <span class="persName-MR">Mrs. Ruskin</span> made the common error of not altering the old year&#x02BC;s date&#x201D;&#x2014;writing, that is, &#x201C;Jan<sup>y</sup> 
                    1826,&#x201D; but intending &#x201C;Jan<sup>y</sup> 1827&#x201D; (<a href="../bibiliography/bibliography.php#JRWORKSLE" target="_blank" class="inactive">Ruskin, <i>Works</i></a>, 2:255 n. 1).
            </p>
            
            <p>Since <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span>&#x02BC;s reasoning depends on overruling what <span class="persName-MR">Margaret</span> actually wrote, <span class="persName-WGC">Collingwood</span>&#x02BC;s interpretation seems certainly more
                    straightforward and surely at least as convincing&#x2014;namely, that the date applies to &#x201C;The Needless Alarm,&#x201D; but not necessarily to all four
                    of the poems preceding the note. While &#x201C;The Needless Alarm&#x201D; must have been fair&#x2010;copied &#x201C;about Jan<sup>y</sup> 1827&#x201D;
                    along with the other verse at the end of <a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a>, <span class="persName-MR">Margaret</span> would have known if <span class="persName-JR">Ruskin</span> had composed
                    the poem a year earlier than the others (and if that was the case, she may have remembered the date because &#x201C;The Needless Alarm&#x201D; was possibly the
                    first&#x2014;or first surviving&#x2014;of <span class="persName-JR">Ruskin</span>&#x02BC;s <a href="../notes/new_years_poems_note.php" target="_blank" class="inactive">New Year&#x02BC;s Poems</a>;
                    <a href="#DISCUSSION">see Discussion</a>). Moreover, there is another instance of <span class="persName-MR">Margaret</span>&#x02BC;s
                    glossing a poem with a date earlier than surrounding poems&#x2014;<a href="../apparatuses/2.php#DATE" target="_blank" class="inactive">&#x201C;Glen of Glenfarg&#x201D; (&#x201C;Glen of Glenfarg thy beauteous rill&#x201D;)</a>,
                    in <a href="../apparatuses/3.php" target="_blank" class="inactive">MS III</a>&#x2014;and, in that case, <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span> accept <span class="persName-MR">Margaret</span>&#x02BC;s authority at face value. Finally, it seems
                    implausible that <span class="persName-MR">Margaret</span> would have written 1826 for 1827 without noticing the error, since her note about the date of the whole of
                    <a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a> (which is unquestioned) is placed immediately below.
            </p>
            
            <p>Without following <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span> in their argument for dating &#x201C;The Needless Alarm&#x201D; some time after
                    <a href="../apparatuses/the_steam_engine_apparatus.php" target="_blank">&#x201C;When furious up from mines the water pours&#x201D; &#x005B;&#x201C;The Steam Engine&#x201D;&#x005D;</a>, one might, however, accept their suggestion
                    that <span class="persName-MR">Margaret</span> intends &#x201C;Jan<sup>y</sup> 1826&#x201D; to refer to all four poems preceding her note. This possibility is admitted in dating the other three poems&#x2014;
                    <a href="../apparatuses/the_steam_engine_apparatus.php" target="_blank">&#x201C;When furious up from mines the water pours&#x201D; &#x005B;&#x201C;The Steam Engine&#x201D;&#x005D;</a>,
                    <a href="../apparatuses/on_scotland_apparatus.php" target="_blank">&#x201C;On Scotland,&#x201D;</a>, and <a href="../apparatuses/the_defiance_of_war_apparatus.php" target="_blank"> &#x201C;The Defiance of War&#x201D;</a>&#x2014;but, again, the interpretation supplants a more obvious
                    and convincing explanation. <span class="persName-WGC">Collingwood</span> associated one poem in the <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank">MS I Poetry Anthology</a>,
                    <a href="../apparatuses/on_scotland_apparatus.php" target="_blank">&#x201C;On Scotland,&#x201D;</a> along with another, 
                    <a href="../apparatuses/glen_of_glenfarg_apparatus.php" target="_blank">&#x201C;Glen of Glenfarg&#x201D; (&#x201C;Glen of Glenfarg thy beauteous rill&#x201D;),</a>
                    with the family&#x02BC;s visit to <span class="placeName-SCOTLAND">Scotland</span> in 1826, which he assumed to have started &#x201C;about the middle of May&#x201D;
                    (<a href="../bibiliography/bibliography.php#POEMS4D1891" target="_blank" class="inactive"><i>Poems</i> &#x005B;4<sup>o</sup>, 1891&#x005D;</a>,
                    1:xxiii; <a href="../bibiliography/bibliography.php#POEMS8D1891" target="_blank" class="inactive"><i>Poems</i> &#x005B;8<sup>o</sup>, 1891&#x005D;</a>, 1:ix). We now
                    know that this journey was taken, if at all, later in that year&#x2014;a fact consistent with the placement of
                    <a href="../apparatuses/on_scotland_apparatus.php" target="_blank">&#x201C;On Scotland&#x201D;</a> toward the end of 
                    <a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a>, which was &#x201C;finished about Jan<sup>y</sup> 1827&#x201D;
                    (see also <a href="../notes/tours_of_1826-27_note.php" target="_blank">Tours of 1826&#x2013;27</a>). All the evidence,
                    even the evidence of which <span class="persName-WGC">Collingwood</span> was unaware, falls into place if <span class="persName-WGC">Collingwood</span>&#x02BC;s original interpretation is accepted&#x2014;namely, that
                    &#x201C;The Needless Alarm&#x201D; existed (in some witness) a year earlier than the surrounding poems. This conclusion also seems corroborated by internal
                    evidence of the poem&#x02BC;s sources (<a href="#DISCUSSION">see Discussion</a>).
            </p>
            
            <p>See <a href="../notes/date_citation_note.php" target="_blank">System of Date Citation</a>.
            </p>
            
        </div>
         
         <div id="COMPPUB" class="section">
            <span class="head-section">Composition &#x0026; Publication</span>
            
            <p>Published, in edited form (<a href="../apparatuses/the_needless_alarm_poems_1891.php" target="_blank">&#x201C;The Needless Alarm&#x201D; &#x005B;<i>Poems,</i> 1891&#x005D;</a>),
                    in <a href="../bibiliography/bibliography.php#POEMS4D1891" target="_blank" class="inactive"><i>Poems</i> (4<sup>o</sup>, 1891)</a>,
                    1:xxii; <a href="../bibiliography/bibliography.php#POEMS8D1891" target="_blank" class="inactive"><i>Poems</i> (8<sup>o</sup>, 1891)</a>, 1:viii&#x2013;ix; and
                    <a href="../bibiliography/bibliography.php#JRWORKSLE" target="_blank" class="inactive">Ruskin, <i>Works</i></a>, 2:255&#x2013;56.
            </p>
            
            <p>Hand is pencil, print. See <a href="../notes/hand_note.php" target="_blank" class="inactive">Ruskin&#x02BC;s Hand</a>.
            </p>
            
        </div>
         
         <div id="DISCUSSION" class="section">
            <span class="head-section">Discussion</span>
            
            <div id="SOURCES" class="subsection">
               <span class="head-subsection">Sources</span>
               
               <p>This little tale about a mouse and a dog suggests the influence of <a href="../notes/barbauld_anna_laetitia_note.php" target="_blank" class="inactive"><span class="persName-ALB">Anna Laetitia Barbauld</span></a>,
                        whose books, such as <i>Evenings at Home,</i> are believed to have been in the Ruskin family library (see
                        <a href="../notes/boyhood_books_note.php" target="_blank" class="inactive">Ruskin&#x02BC;s Boyhood Books</a>).
                        No tale in <i>Evenings at Home</i> resembles &#x201C;The Needless Alarm&#x201D; specifically, although <span class="persName-JR">Ruskin</span>&#x02BC;s poem does recall the tales generally,
                        except for the lack of <span class="persName-ALB">Mrs. Barbauld</span>&#x02BC;s conventional closing morals. Even she, however, could occasionally relax this expectation, such as in
                        &#x201C;The History and Adventures of a Cat,&#x201D; which relates a cat&#x02BC;s life from its own point of view and without didacticism.
               </p>
               
               <p><span class="persName-ALB">Barbauld</span>&#x02BC;s tales were in keeping with <span class="persName-JR">Ruskin</span>&#x02BC;s other reading and imitative writing of 1826&#x2013;27, her work having been recommended
                        for younger children by <a href="../notes/edgeworth_richard_lovell_note.php" target="_blank" class="inactive"><span class="persName-RLE">Richard Lovell Edgeworth</span></a> and
                        <a href="../notes/edgeworth_maria_note.php" target="_blank" class="inactive"><span class="persName-ME">Maria Edgeworth</span></a>. If the Ruskins followed the Edgeworths&#x02BC; advice
                        that children advance by stages through reading of increasing difficulty, &#x201C;The Needless Alarm&#x201D; represents his response to an earlier
                        stage of reading&#x2014;as compared, for example, with the more advanced scientific interests represented in
                        <a href="../apparatuses/msi_apparatus.php" target="_blank">MS I</a> by the poem <a href="../apparatuses/the_steam_engine_apparatus.php" target="_blank">&#x201C;When
                        furious up from mines the water pours&#x201D; &#x005B;&#x201C;The Steam Engine&#x201D;&#x005D;</a> and by the &#x201C;lessons&#x201D; in
                        <a href="../apparatuses/3.php" target="_blank" class="inactive">&#x201C;Harry and Lucy,&#x201D; Vol. 1</a>, copied from dialogues by
                        <a href="../notes/joyce_jeremiah_note.php" target="_blank" class="inactive"><span class="persName-JJ">Jeremiah Joyce</span></a>.
               </p>
               
           </div>
            
            <div id="OCCASION" class="subsection">
               <span class="head-subsection">Occasion</span>
               
               <p>If the &#x201C;Jan 1826&#x201D; notation does refer specifically to &#x201C;The Needless Alarm,&#x201D; it is possible that <span class="persName-JR">Ruskin</span> presented the poem (in another witness, whereabouts unknown) as a
                        <a href="../notes/new_years_poems_note.php" target="_blank" class="inactive">New Year&#x02BC;s Poem</a>
                        for his parents&#x2014;an occasion <span class="persName-MR">Margaret</span> would surely have remembered. Poems, presented specifically to his father, did unquestionably
                        become a New Year&#x02BC;s tradition starting the following year, in 1827, with <a href="../apparatuses/time_blank_verse_apparatus.php" target="_blank">&#x201C;Time: Blank Verse.&#x201D;</a>
                        This interpretation is supported, albeit weakly, by the placement of &#x201C;The Needless Alarm&#x201D; in the
                        <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank">MS I Poetry Anthology</a>, which is similar to the position of
                        <a href="../apparatuses/time_blank_verse_apparatus.php" target="_blank">&#x201C;Time: Blank Verse&#x201D;</a> in the <a href="../apparatuses/msiii_poetry_anthology_2_apparatus.php" target="_blank" class="inactive">MS III Second Poetry Anthology</a>.
                        In the latter case&#x2014;that is, in the <a href="../notes/red_book_note.php" target="_blank">Red Book</a>
                        containing <a href="../apparatuses/harry_and_lucy_vol2_apparatus.php" target="_blank" class="inactive">&#x201C;Harry and Lucy,&#x201D; Vol. 2</a>&#x2014;<span class="persName-JR">Ruskin</span> positions a poetry anthology
                        immediately following the prose lessons, just as he does in MS I; and he includes in that anthology the previous year&#x02BC;s New Year&#x02BC;s poem, <a href="../apparatuses/time_blank_verse_apparatus.php" target="_blank">&#x201C;Time: Blank Verse.&#x201D;</a>, along with the most recent one,
                        <a href="../apparatuses/the_constellations_apparatus.php" target="_blank" class="inactive">&#x201C;The Constellations: Northern, Some of the Zodiac, and Some of the Southern&#x201D;</a>. Perhaps the
                        <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank">MS I Poetry Anthology</a> likewise includes the previous year&#x02BC;s New
                        Year&#x02BC;s poem, although nothing apart from <span class="persName-MR">Margaret</span>&#x02BC;s date indicates that &#x201C;The Needless Alarm&#x201D; may have served as this kind of presentation,
                        and none of the other poems in the anthology contain a greeting for the new year.
               </p>
               
            </div>
            
         </div>
         
		<div id="WITNESSES" class="section">
			<span class="head-section">Witnesses</span>
			<div id="toolbar">
				<span class="toggle" id="toggle-f1" style="color:#036">&#x201C;The Needless Alarm&#x201D; MS I</span>
				<span class="toggle" id="toggle-f2">&#x201C;The Needless Alarm&#x201D; Poems 1891</span>
			</div>
            <div class="controls">
				<img id="toggle-view" src="../showcase/images/navbar/facsimile-transcription_ro.jpg" alt="Toggle Views Button" title="Toggle Views" width="26" height="20" /><img id="toggle-magnify" src="../showcase/images/navbar/magnify_ro.jpg" alt="Magnification Button" title="Increase the Magnification of the Facsimile" width="26" height="20" /><img id="toggle-enlarge" src="../showcase/images/navbar/enlarge_ro.jpg" alt="Point Size Button" title="Increase the Point Size of the Transcription" width="26" height="20" /><img id="toggle-transcription" src="../showcase/images/navbar/text-composite.jpg" alt="Transcription Button" title="Toggle Transcriptions" width="26" height="20" /><img id="toggle-hand" src="../showcase/images/navbar/scribe_ro.jpg" alt="Hands Button" title="Toggle Hands On/Off" width="26" height="20" />
            </div>
			<div id="content" class="facsimile">
				<div id="f1_preview">
                    <img src="../images/_previews/msi/1229146_previewa.jpg" width="100%"/>
                    <img src="../images/_previews/msi/1229146_previewb.jpg" width="100%"/>
                </div>
                <div id="f1">
                    <img src="../images/facsimiles/msi/1229146a.jpg" width="95%"/>
                    <img src="../images/facsimiles/msi/1229146b.jpg" width="95%"/>
                </div>
			</div>
            <div id="content" class="witness">
                <?php include("../showcase/the_needless_alarm_msi.inc.php"); ?>
                <?php include("../showcase/the_needless_alarm_poems_1891.inc.php"); ?>
            </div>
			</div>
		</div>

</div>
      <?php include("../top_button.inc.php"); ?>
   </body>
   
   
</html>
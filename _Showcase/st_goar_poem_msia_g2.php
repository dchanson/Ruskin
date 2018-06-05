<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link href="witness_styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" 
	type="image/png" 
	href="../images/ruskin_icon.png">
<title>Now Showcasing: "St Goar" [poem] (MS IA g2)</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

// Optimize for Tablets //
$(document).ready(function(){
	var width = $(window).width();
	if(/Android|BlackBerry|CriOS|IEMobile|iPad|iPhone|iPod|Opera Mini|Opera Mobi|Mobile|Tablet|Touch/i.test(navigator.userAgent)){
		$("#navbar").css("height", "30px");
		$("[src*='images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='images/navbar/navbar.jpg']").css({"width":"600", "height":"44"});
		$(".navbar-facsimile-text, .navbar-magnify-text, .navbar-enlarge-text, .navbar-hand-text, .shortcut").css({"font-size":"10pt", "line-height":"20px"});
		$("#navbar-tab").css({"height":"18px", "width":"36px"});
		$("#toggle-navbar").css({"height":"15px", "width":"30px"});
		$("#first_button").css("margin-left", "68px");
		$(".navbar-navigation").css({"height":"30px", "width":"165px"});
		$(".navbar-location").css({"font-size":"12pt", "height":"21px", "margin-top":"4px", "margin-left":"12px", "margin-right":"12px", "width":"60px"});
		$("#navbar-facsimile").css({"left":"162px", "top":"30px", "width":"150px"});
		$("#navbar-facs").css({"left":"296px", "top":"30px"});
		$("#toggle-view").css("margin-left", "30px");
		$("#navbar-magnify").css({"left":"390px", "top":"30px"});
		$("#navbar-enlarge").css({"left":"429px", "top":"30px"});
		$("#toggle-transcription").css("margin-left", "30px");
		$("#navbar-hand").css({"left":"524px", "top":"30px"});
	}
});
// Preload First Facsimile //
$(document).ready(function(){
	$("#facs").load(function(){
		$("#facs_preview").hide();
		$("#facs").show();
	});
});
// Toggle NavBar //
$(document).ready(function(){
    $("#navbar-tab").toggle(function(){
		$("#toggle-navbar").attr("src", "images/navbar/tab.jpg");
		$("#navbar").slideUp("fast");
		$("#content").css("padding-bottom", "0px");
		},function(){
		$("#toggle-navbar").attr("src", "images/navbar/tab_ro.jpg");
		$("#navbar").slideDown("fast");
		$("#content").css("padding-bottom", "21px");
	});
});
// Toggle facsimile Drop-down //
$(document).ready(function(){
    $(".navbar-location").click(function(){
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-facsimile").toggle();
    });
});
// Select Facsimile 1 //			
$(document).ready(function(){			
	$("#first_button, #navbar-facsimile-1, #previous-2").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-facsimile-1").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-1").show();	
		$("#facs_preview").attr("src", "../images/_previews/msia_g2/12180628_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "../images/facsimiles/msia_g2/12180628.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 1 //			
$(document).ready(function(){			
	$("#navbar-facsimile-1").hover(function(){		
		$("#navbar-facs").show();	
		$("#navbar-facs_preview").attr("src", "../images/_previews/msia_g2/12180628_preview.jpg");	
		$("#navbar-facs_preview").show();	
		},function(){	
		$("#navbar-facs").hide();	
		$("#navbar-facs_preview").attr("src", "../images/_previews/blank.jpg");	
	});		
});
// Toggle View //
$(document).ready(function(){
	$("#toggle-view").toggle(function(){ //Facsimile View//
		$("#toggle-view").attr("src", "images/navbar/facsimile_ro.jpg");
		$("#content-right").css("width", "0");
		$("#content-right").css("height", "0");
		$("#content-left").css("width", "100%");
		$("#content-left").css("height", "100%");},
		function(){ //Transcription View//
		$("#toggle-view").attr("src", "images/navbar/transcription_ro.jpg");
		$("#content-left").css("width", "0");
		$("#content-left").css("height", "0");
		$("#content-right").css("width", "100%");
		$("#content-right").css("height", "100%");
		$("#copyright").css("display", "none");},
		function(){ //Facsimile-Transcription View//
		$("#toggle-view").attr("src", "images/navbar/facsimile-transcription_ro.jpg");
		$("#content-right").css("width", "40%");
		$("#content-right").css("height", "100%");
		$("#content-left").css("width", "60%");
		$("#content-left").css("height", "100%");
		$("#copyright").css("display", "");}
	);
});
// Toggle Magnification Drop-down //
$(document).ready(function(){
    $("#toggle-magnify").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-magnify").toggle();
    });
});
// Reset Image Magnification to One Times (Default) //
$(document).ready(function(){
	$("#x1").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x1").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "100%");
	});
});
// Magnify Image Two Times //
$(document).ready(function(){
	$("#x2").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x2").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "200%");
	});
});
// Magnify Image Four Times //
$(document).ready(function(){
	$("#x4").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x4").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "400%");
	});
});
// Magnify Image Eight Times //
$(document).ready(function(){
	$("#x8").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "800%");
	});
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
// Close Drop-downs //
$(document).ready(function(){
	$("#content, #first_button, .previous_button, .next_button, #last_button, #toggle-view, #toggle-marginalia, #toggle-expansion").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
	});
});
// Toggle Info Panel //
$(document).ready(function(){
	$("#toggle-info, #toggle-info_ro").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#toggle-info_ro").toggle();
		$("#toggle-info").toggle();
		$("#navbar-info").toggle();
	});
});
</script>
</head>
<body>
<div id="main">
  <div id="navbar-tab">
	<img id="toggle-navbar" src="images/navbar/tab_ro.jpg" alt="Show/Hide NavBar Button" title="Show/Hide the Navbar" width="20" height="10" />
  </div>
  <div id="navbar">
	<img id="first_button" src="images/navbar/first.jpg" alt="First Facsimile Button" title="Go to the First Facsimile" width="26" height="20" />
	<div id="navbar-navigation-1" class="navbar-navigation">	
	<img id="previous-1" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Facsmilie Button" title="Go to the Previous Facsimile" width="26" height="20"/><div class="navbar-location" title="Select a Facsimile">f1</div><img id="next-1" class="next_button" src="images/navbar/next.jpg" alt="Next Facsimile Button" title="Go to the Next Facsimile" width="26" height="20"/>
	</div>
<img id="last_button" src="images/navbar/last.jpg" alt="Last Facsimile Button" title="Go to the Last Facsimile" width="26" height="20" /><img id="toggle-view" src="images/navbar/facsimile-transcription_ro.jpg" alt="Toggle Views Button" title="Toggle Views" width="26" height="20" /><img id="toggle-magnify" src="images/navbar/magnify_ro.jpg" alt="Magnification Button" title="Increase the Magnification of the Facsimile" width="26" height="20" /><img id="toggle-enlarge" src="images/navbar/enlarge_ro.jpg" alt="Point Size Button" title="Increase the Point Size of the Transcription" width="26" height="20" /><img id="toggle-transcription" src="images/navbar/text-composite.jpg" alt="Transcription Button" title="Toggle Transcriptions" width="26" height="20" /><img id="toggle-hand" src="images/navbar/scribe_ro.jpg" alt="Hands Button" title="Toggle Hands On/Off" width="26" height="20" /><img id="toggle-info" src="images/navbar/info.jpg" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="float:right" /><img id="toggle-info_ro" src="images/navbar/info_ro.jpg" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="display:none; float:right" />
	<div id="navbar-facsimile" title="Select a Facsimile">
    	<span class="navbar-facsimile-text">Facsimile:
            <br/>
            <br/><div id="navbar-facsimile-1" class="shortcut" style="color:#09C">f1</div>
            <br/>
			<br/>
            <br/>
        </span>
	</div>
    <div id="navbar-facs" style="display:none">
    	<img id="navbar-facs_preview" src="images/_previews_wynkyn/blank.jpg" width="100%" />
    </div>    
	<div id="navbar-magnify" title="Increase the Magnification of the Facsimile">
		<span class="navbar-magnify-text">Facsimile Magnification:
            <span id="vss-magnify" style="display:none">
            	<br/>
            	<br/><span id="x0" class="navbar-magnify-text">Default</span>
            </span>
            <br/>
            <br/><span id="x1" class="navbar-magnify-text" style="color:#09C">100%</span>
            <br/>
            <br/><span id="x2" class="navbar-magnify-text">200%</span>
            <br/>
            <br/><span id="x4" class="navbar-magnify-text">400%</span>
            <br/>
            <br/><span id="x8" class="navbar-magnify-text">800%</span>
            <br/>
            <br/>
		</span>
	</div>
    <div id="navbar-enlarge" title="Increase the Point Size of the Transcription">
		<span class="navbar-enlarge-text">Transcription Point Size:
            <br/>
            <br/><span id="12pt" class="navbar-enlarge-text" style="color:#09C">12pt</span>
            <br/>
            <br/><span id="16pt" class="navbar-enlarge-text">16pt</span>
            <br/>
            <br/><span id="20pt" class="navbar-enlarge-text">20pt</span>
            <br/>
            <br/><span id="24pt" class="navbar-enlarge-text">24pt</span>
            <br/>
            <br/>
        </span>
	</div>
<div id="navbar-hand" title="Toggle Hands On/Off">
		<span class="navbar-hand-text">
        	<span style="color:#FFF">Hands:</span>
            <br/>
            <br/><span id="toggle-X" class="navbar-hand-text" style="color:#CCC"><span style="background-color:#CCC">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;To Come</span>
            <br/>
            <br/>
        </span>
	</div>
  </div>
  <div id="navbar-info">
  		<span class="navbar-info-text">
            <div style="color:#999; font-size:48pt; font-weight:normal; left:106px; position:absolute; top:19px">2</div>
            <p class="heading_1">Showcase</p>
            <br/>
            <hr/>
            <span class="heading_1">Using</span> <span class="heading_2">Showcase</span>
            <hr/>
            <p>Everything in Showcase starts with the Navbar, the svelte toolbar at the top of this browser window. From left to right, the controls in the Navbar perform the following functions (when active, these controls appear <span style="color:#09F">blue</span>):</p>
            <br/>
            <div style="text-align:center"><img src="images/navbar/navbar.jpg" alt="Image of the Navbar" width="600" height="44" /></div>
            <br/>
            <p><span class="heading_3">1&#x2012;Show/Hide the Navbar</span><br/>Clicking or tapping this control reduces the Navbar to a small tab in the top left corner of the browser window. Clicking or tapping this tab restores the Navbar.</p>
            <br/>
            <p><span class="heading_3">2&#x2012;Go to the First Facsimile</span><br/>Clicking or tapping this control takes the user to the first facimile of the witness.</p>
            <br/>
            <p><span class="heading_3">3&#x2012;Go to the Previous Facsimile</span><br/>Clicking or tapping this control takes the user one facimile backward in the witness.</p>
            <br/>
            <p><span class="heading_3">4&#x2012;Select a Facsimile</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual facsmiles may be previewed and "jumped" to directly. The control also displays the ID of the current facsmile.</p>
            <br/>
            <p><span class="heading_3">5&#x2012;Go to the Next Facsimile</span><br/>Clicking or tapping this control takes the user one facsimile forward in the witness.</p>
            <br/>
            <p><span class="heading_3">6&#x2012;Go to the Last Facsimile</span><br/>Clicking or tapping this control takes the user to the last facsimile of the witness.</p>
            <br/>
            <p><span class="heading_3">7&#x2012;Toggle Views</span><br/>Clicking or tapping this control enables the following views: Facsimile-Transcription (default), Facsimile-only, and Transcription-only.</p>
            <br/>
            <p><span class="heading_3">8&#x2012;Increase the Magnification of the Facsimile</span><br/>Clicking or tapping this control opens a drop-down menu, from which the magnification level of the facsimile can be adjusted between 100% (default) and 800%.</p>
            <br/>
            <p><span class="heading_3">9&#x2012;Increase the Point Size of the Transcription</span><br/>Clicking or tapping this control opens a drop-down menu, from which the the font size of the transcription can be adjusted between 12 pt. (default) and 24 pt.</p>
            <br/>
			<p><span class="heading_3">10&#x2012;Toggle Transcriptions</span><br/>Clicking or tapping this control enables the transcription to be viewed as: Original Text, Revised Text, or Composite Text (default).</p>
			<br/>
            <p><span class="heading_3">10&#x2012;Toggle Hands On/Off</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual hands may be toggled on (default) or off.</p>
			<br/>
            <p><span class="heading_3">13&#x2012;Learn about Showcase</span><br/>Clicking or tapping this control shows or hides this window.</p>
            <br/>
            <hr/>
            <span class="heading_1">Copyright Notice</span> <span class="heading_2">&#x0026; Conditions of Use</span>
            <hr/>
            <p>This edition of Showcase was created exclusively for <i>The Early Ruskin Manuscripts, 1826&#x2013;1842</i>, a Digital Humanities project of Southeastern Louisiana University's Department of English. Showcase remains the intellectual property of and is &#x00A9; by its author, <a href="mailto:charles.borchers@selu.edu">Charles W. Borchers, IV</a>, and may not be modified or copied without his express permission. Your use of this software constitutes acknowledgement of this copyright and of the software's conditions of use.</p>
            <!--<p>All images from Cambridge University Library Sel.5.27, "Here begynneth a shorte treatyse of contemplacyon taught by our lorde Ihesu cryste / or taken out of the boke of Margerie kempe of lynn." are &#x00A9; Cambridge University Library.</p>-->
            <p>Andron Scriptor Web 3.1, the webfont developed for and used by Showcase, is a special edition of <a href="http://www.signographie.de/cms/front_content.php?idart=69&changelang=2" target="_blank">Andron&#x2122;</a>, financed by the Norwegian Research Council and the University of Bergen. <a href="http://www.mufi.info/fonts/#Andron" target="_blank">Andron Scriptor Web</a> exists to support scholarly editing in medieval philological studies and is provided free of charge by its creator and provider, Andreas St&#x00F6;tzner and the <a href="http://www.mufi.info" target="_blank">Medieval Unicode Font Initiative (MUFI)</a>. Both must be credited in any work which utilizes the font. Any alteration of the font, including, but not limited to, any alteration of its content, glyphs, or name, is a violation of international copyright law. If enhancements or improvements to the font are desired, these should be forwarded to MUFI for consideration in future releases of the font. Andron&#x2122; is a trademark of Andreas St&#x00F6;tzner; its design is &#x00A9; by Andreas St&#x00F6;tzner all rights reserved.</p>
		</span>
	</div>
  <div id="content">
	<div id="content-left">
        <img id="facs_preview" src="../images/_previews/msia_g2/12180628_preview.jpg" width="100%"/>
        <img id="facs" src="../images/facsimiles/msia_g2/12180628.jpg" width="100%" style="display:none"/>
		<!--<div id="copyright"><img src="..." alt="..." title="Manuscript images &#x00A9;...." width="30" height="60" /></div>-->
	</div>
  	<div id="content-right">
		<div class="witness">
			<?php include("../witnesses/st_goar_poem_msia_g2.inc.php"); ?>
        </div>
	</div>
  </div>
</div>
</body>
</html>
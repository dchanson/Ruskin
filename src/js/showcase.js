
// Optimize for Tablets //
$(document).ready(function(){
	var width = $(window).width();
	if(/Android|BlackBerry|CriOS|IEMobile|iPad|iPhone|iPod|Opera Mini|Opera Mobi|Mobile|Tablet|Touch/i.test(navigator.userAgent)){
		$("#navbar").css("height", "30px");
		$("[src*='"+window.BASE_URL + "/images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='"+window.BASE_URL + "/images/navbar/navbar.jpg']").css({"width":"600", "height":"44"});
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
		$("#toggle-navbar").attr("src", window.BASE_URL + "/images/navbar/tab.jpg");
		$("#navbar").slideUp("fast");
		$("#content").css("padding-bottom", "0px");
		},function(){
		$("#toggle-navbar").attr("src", window.BASE_URL + "/images/navbar/tab_ro.jpg");
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
		$("#facs_preview").attr("src", window.BASE_URL + "/images/_previews/msia/MSIAsheet20_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", window.BASE_URL + "/images/facsimiles/msia/MSIAsheet20.jpg");
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
		$("#navbar-facs_preview").attr("src", window.BASE_URL + "/images/_previews/msia/MSIAsheet20_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", window.BASE_URL + "/images/_previews/blank.jpg");
	});
});
// Toggle View //
$(document).ready(function(){

	$("#toggle-view").toggle(function(){ //Facsimile View//
		$("#toggle-view").attr("src", window.BASE_URL + "/images/navbar/facsimile_ro.jpg");
		$("#content-right").css("width", "0");
		$("#content-right").css("height", "0");
		$("#content-left").css("width", "100%");
		$("#content-left").css("height", "100%");},
		function(){ //Transcription View//
		$("#toggle-view").attr("src", window.BASE_URL + "/images/navbar/transcription_ro.jpg");
		$("#content-left").css("width", "0");
		$("#content-left").css("height", "0");
		$("#content-right").css("width", "100%");
		$("#content-right").css("height", "100%");
		$("#copyright").css("display", "none");},
		function(){ //Facsimile-Transcription View//
		$("#toggle-view").attr("src", window.BASE_URL + "/images/navbar/facsimile-transcription_ro.jpg");
		$("#content-right").css("width", "40%");
		$("#content-right").css("height", "100%");
		$("#content-left").css("width", "60%");
		$("#content-left").css("height", "100%");
		$("#copyright").css("display", "");
	});
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
		$("#toggle-magnify").attr("src", window.BASE_URL + "/images/navbar/magnify_ro.jpg");
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
		$("#toggle-magnify").attr("src", window.BASE_URL + "/images/navbar/magnify_ro.jpg");
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
		$("#toggle-magnify").attr("src", window.BASE_URL + "/images/navbar/magnify_ro.jpg");
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
		$("#toggle-magnify").attr("src", window.BASE_URL + "/images/navbar/magnify_ro.jpg");
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
		$("#toggle-enlarge").attr("src", window.BASE_URL + "/images/navbar/enlarge_ro.jpg");
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
		$("#toggle-enlarge").attr("src", window.BASE_URL + "/images/navbar/enlarge_ro.jpg");
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
		$("#toggle-enlarge").attr("src", window.BASE_URL + "/images/navbar/enlarge_ro.jpg");
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
		$("#toggle-enlarge").attr("src", window.BASE_URL + "/images/navbar/enlarge_ro.jpg");
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
		$("#toggle-transcription").attr("src", window.BASE_URL + "/images/navbar/text-original.jpg");
		$("[class*='add-overwriting']").hide();
		$("[class*='subst-add']").hide();
		$("[class*='subst-del']").css("position","relative");
		$(".del-erasure").css("position","relative");},
		function(){ // Display Revised Text //
		$("#toggle-transcription").attr("src", window.BASE_URL + "/images/navbar/text-revised.jpg");
		$("[class*='del']").hide();
		$("[class*='add-overwriting']").show();
		$("[class*='subst-add']").show();},
		function(){ // Display Composite Text (Default) //
		$("#toggle-transcription").attr("src", window.BASE_URL + "/images/navbar/text-composite.jpg");
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

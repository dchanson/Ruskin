

$(document).ready(function(){
	// extract the manuscript for this facsimile
	var rx = /^[A-Z]+/;
	window.FACS = window.FACS_FILE_NAMES.split(' ').map(function(fileName, i){
		var msName = rx.exec(fileName)[0].toLowerCase();
		var fileNameWithoutExtension = fileName.replace(".jpg", "");
		return {
			prev: window.BASE_URL + "/images/_previews/"+msName+"/"+fileNameWithoutExtension+"_preview.jpg",
			full: window.BASE_URL + "/images/facsimiles/"+msName+"/"+fileName,
			label: "f"+(i+1),
			manuscript: msName
		};
	});

	var selectFacsimile = function(index){
		$(".shortcut").css("color", "#FFF");

		$(".navbar-facsimile-item").removeClass("active");
		$(".navbar-facsimile-item[data-facs-index="+index+"]").addClass("active");

		$("#facs_preview").attr("src", window.FACS[index].prev);
		$("#facs").attr("src", window.FACS[index].full);

		$("#facs").hide();
		$("#facs_preview").show();

		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
		$("#navbar-location").text(window.FACS[index].label);

		$("#navbar-navigation").attr("data-current-fac", index);
	}


	window.FACS.forEach(function(fac, i){

		var div = $("<div data-facs-index="+i+" class='navbar-facsimile-item' >f"+(i+1)+"</div>");
		div.appendTo($("#navbar-facsimile-holder"));
	})

	selectFacsimile(0);

	// Optimize for Tablets //
	var width = $(window).width();
	if(/Android|BlackBerry|CriOS|IEMobile|iPad|iPhone|iPod|Opera Mini|Opera Mobi|Mobile|Tablet|Touch/i.test(navigator.userAgent)){
		$("#navbar").css("height", "30px");
		$("[src*='"+window.BASE_URL + "/images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='"+window.BASE_URL + "/images/navbar/navbar.jpg']").css({"width":"600", "height":"44"});
		$(".navbar-facsimile-text, .navbar-magnify-text, .navbar-enlarge-text, .navbar-hand-text, .navbar-facsimile-item").css({"font-size":"10pt", "line-height":"20px"});
		$("#navbar-tab").css({"height":"18px", "width":"36px"});
		$("#toggle-navbar").css({"height":"15px", "width":"30px"});
		$("#first_button").css("margin-left", "68px");
		$("#navbar-navigation").css({"height":"30px", "width":"165px"});
		$("#navbar-location").css({"font-size":"12pt", "height":"21px", "margin-top":"4px", "margin-left":"12px", "margin-right":"12px", "width":"60px"});
		$("#navbar-facsimile").css({"left":"162px", "top":"30px", "width":"150px"});
		$("#navbar-facs").css({"left":"296px", "top":"30px"});
		$("#toggle-view").css("margin-left", "30px");
		$("#navbar-magnify").css({"left":"390px", "top":"30px"});
		$("#navbar-enlarge").css({"left":"429px", "top":"30px"});
		$("#toggle-transcription").css("margin-left", "30px");
		$("#navbar-hand").css({"left":"524px", "top":"30px"});
	}

	// Preload First Facsimile //
	$("#facs").load(function(){
		$("#facs_preview").hide();
		$("#facs").show();
	});

	// Toggle NavBar //
  $("#navbar-tab").toggle(function(){
		$("#toggle-navbar").attr("src", window.BASE_URL + "/images/navbar/tab.jpg");
		$("#navbar").slideUp("fast");
		$("#content").css("padding-bottom", "0px");
		},function(){
		$("#toggle-navbar").attr("src", window.BASE_URL + "/images/navbar/tab_ro.jpg");
		$("#navbar").slideDown("fast");
		$("#content").css("padding-bottom", "21px");
 	});

  // Toggle facsimile Drop-down //
  $("#navbar-location").click(function(){
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-facsimile").toggle();
  });



	$("#first_button").click(function(){
		selectFacsimile(0);
	});

	$("#last_button").click(function(){
		selectFacsimile(window.FACS.length-1);
	});

	$("#next_button").click(function(){
		var index = parseInt($("#navbar-navigation").attr("data-current-fac"));

		if(index >= window.FACS.length -1) return;

		selectFacsimile(index + 1);
	});

	$("#previous_button").click(function(){
		var index = parseInt($("#navbar-navigation").attr("data-current-fac"));
		if(index <= 0) return;

		selectFacsimile(index - 1);
	});

	$(".navbar-facsimile-item").click(function(){
		var index = parseInt($(this).attr("data-facs-index"));
		selectFacsimile(index);
	});

	// Preview Facsimile 1 //
	$(".navbar-facsimile-item").hover(function(){
		var index = parseInt($(this).attr("data-facs-index"));

		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", window.FACS[index].prev);
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", window.BASE_URL + "/images/_previews/blank.jpg");
	});

	// Toggle View //
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

	// Toggle Magnification Drop-down //
  $("#toggle-magnify").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-magnify").toggle();
  });

	// Reset Image Magnification to One Times (Default) //
	$("#x1").click(function(){
		$("#toggle-magnify").attr("src", window.BASE_URL + "/images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x1").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "100%");
	});

	// Magnify Image Two Times //
	$("#x2").click(function(){
		$("#toggle-magnify").attr("src", window.BASE_URL + "/images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x2").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "200%");
	});

	// Magnify Image Four Times //
	$("#x4").click(function(){
		$("#toggle-magnify").attr("src", window.BASE_URL + "/images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x4").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "400%");
	});

	// Magnify Image Eight Times //
	$("#x8").click(function(){
		$("#toggle-magnify").attr("src", window.BASE_URL + "/images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "800%");
	});

	// Toggle Point Size Drop-down //
    $("#toggle-enlarge").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-enlarge").toggle();
    });

	// Reset Text to 12pt (Default) //
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

	// Enlarge Text to 16pt //
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
	// Enlarge Text to 20pt //
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

	// Enlarge Text to 24pt //
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

	// Toggle Transcriptions //
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

	// Toggle Hand Drop-down //
  $("#toggle-hand").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-hand").toggle();
	});

	// Toggle Librarian (Example) //
	$("#toggle-LIBRARIAN").toggle(function(){
		$("#toggle-LIBRARIAN").css("color", "#FFF");
		$(".add-LIBRARIAN").hide();
		$(".add-bottom-LIBRARIAN").hide();},
		function(){
		$("#toggle-LIBRARIAN").css("color", "#09C");
		$(".add-LIBRARIAN").show();
		$(".add-bottom-LIBRARIAN").show();}
	);

	// Close Drop-downs //
	$("#content, #first_button, .previous_button, .next_button, #last_button, #toggle-view, #toggle-marginalia, #toggle-expansion").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
	});

	// Toggle Info Panel //
	$("#toggle-info, #toggle-info_ro").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#toggle-info_ro").toggle();
		$("#toggle-info").toggle();
		$("#navbar-info").toggle();
	});

	// open glosses in popup
	$(".gloss-inline a").click(function(){
		this.search = "?show_navbar=0";

		var height = parseInt(window.innerHeight / 2);
		var width = parseInt(window.innerWidth / 2);

		window.open(this.href, '_blank', "height=" + height + "px,width=" + width + "px");
		return false;
	});

	$("#backButton").click(function(){

	});
});

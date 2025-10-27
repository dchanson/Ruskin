
if(window.erm === undefined) window.erm = {};
if(window.erm.showcase === undefined) window.erm.showcase = {};

// extract the manuscript for this facsimile
window.erm.facsimiles = window.erm.facsimiles_file_names.split(' ')
.filter(function(x){return x;});

window.erm.facsimiles = window.erm.facsimiles
.filter(function(x, i){return window.erm.facsimiles.indexOf(x) == i; });

window.erm.facsimiles = window.erm.facsimiles
.map(function(fileName, i){
	return {
		prev: window.erm.base_url + "/images/facsimiles_previews/"+fileName,
		full: window.erm.base_url + "/images/facsimiles/"+fileName,
		label: "Page "+(i+1)+"/"+window.erm.facsimiles.length,
		manuscript: fileName
	};
});

if(window.erm.facsimiles.length){
	$("#content-left").css("width", "58.5%");
	$("#content-right").css("width", "38.5%");
}else{
	$("#content-left").css("width", "0%");
	$("#content-right").css("width", "98.5%");
}

$(document).ready(function(){
	
	var toggleZoom=function(){

		var zoomLevels = [100, 200, 400];
		
		var handle = $('#toggle-magnify-holder');
		
		var state = handle.attr('data-zoom');
		
		state = (!!state)?parseInt(state):zoomLevels[0];
		
		state = zoomLevels[(zoomLevels.indexOf(state) +1)%zoomLevels.length];
		
		handle.attr('data-zoom', state);
		$('#facs_preview, #facs').css('width', state+'%');
		$("#toggle-magnify-text").text(state+'%');
	}

	var selectFacsimile = function(index){
		if(!window.erm.facsimiles.length) return;

		$(".shortcut").css("color", "#FFF");

		$(".navbar-facsimile-item").removeClass("active");
		$(".navbar-facsimile-item[data-facs-index="+index+"]").addClass("active");

		$("#facs_preview").attr("src", window.erm.facsimiles[index].prev);
		$("#facs").attr("src", window.erm.facsimiles[index].full);

		$("#facs").hide();
		$("#facs_preview").show();

		$("#facs").on("load", function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
		$("#navbar-location").text(window.erm.facsimiles[index].label);

		$("#navbar-navigation").attr("data-current-fac", index);
	}


	window.erm.facsimiles.forEach(function(fac, i){

		var div = $("<div data-facs-index="+i+" class='navbar-facsimile-item' >Page "+(i+1)+"</div>");
		div.appendTo($("#navbar-facsimile-holder"));
	})

	// Optimize for Tablets //
	var width = $(window).width();
	if(/Android|BlackBerry|CriOS|IEMobile|iPad|iPhone|iPod|Opera Mini|Opera Mobi|Mobile|Tablet|Touch/i.test(navigator.userAgent)){
		$("#navbar").css("height", "30px");
		$("[src*='"+window.erm.base_url + "/images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='"+window.erm.base_url + "/images/navbar/navbar.jpg']").css({"width":"600", "height":"44"});
		$(".navbar-facsimile-text, .navbar-enlarge-text, .navbar-hand-text, .navbar-facsimile-item").css({"font-size":"10pt", "line-height":"20px"});
		$("#navbar-tab").css({"height":"18px", "width":"36px"});
		$("#toggle-navbar").css({"height":"15px", "width":"30px"});
		$("#first_button").css("margin-left", "68px");
		$("#navbar-navigation").css({"height":"30px", "width":"165px"});
		$("#navbar-location").css({"font-size":"12pt", "height":"21px", "margin-top":"4px", "margin-left":"12px", "margin-right":"12px", "width":"60px"});
		$("#navbar-facsimile").css({"left":"162px", "top":"30px", "width":"150px"});
		$("#navbar-facs").css({"left":"296px", "top":"30px"});
		$("#toggle-view").css("margin-left", "30px");
		$("#navbar-enlarge").css({"left":"429px", "top":"30px"});
		$("#toggle-transcription").css("margin-left", "30px");
		$("#navbar-hand").css({"left":"524px", "top":"30px"});
	}

	// Toggle NavBar //
	$("#navbar-tab").click(function(){
		if($("#navbar").is(":visible")){

			$("#toggle-navbar").attr("src", window.erm.base_url + "/images/navbar/tab.jpg");
			$("#content").css("height", "100%");
			$("#navbar").slideUp("fast", function(){
				$("#content").css({
					"padding-bottom": "0px"
				});
			});

		}else{
			$("#toggle-navbar").attr("src", window.erm.base_url + "/images/navbar/tab_ro.jpg");
			$("#content").css({
				"padding-bottom": "21px",
				"height": "98%"
			});
			$("#navbar").slideDown("fast");

		}
	});

	// Toggle facsimile Drop-down //
	$("#navbar-location").click(function(){
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#navbar-facsimile").toggle();
	});



	$("#first_button").click(function(){
		selectFacsimile(0);
	});

	$("#last_button").click(function(){
		selectFacsimile(window.erm.facsimiles.length-1);
	});

	$("#next_button").click(function(){
		var index = parseInt($("#navbar-navigation").attr("data-current-fac"));

		if(index >= window.erm.facsimiles.length -1) return;

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
		$("#navbar-facs_preview").attr("src", window.erm.facsimiles[index].prev);
		$("#navbar-facs_preview").show();
	},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", window.erm.base_url + "/images/blank.jpg");
	});

	var updateCurrentViewMode = function(){
		var ratio = $("#content-left").width()/$("#content").width();
		var image = $("#toggle-view");

		if(ratio < 0.2){
			image.attr("src", window.erm.base_url + "/images/navbar/transcription_ro.jpg");
		}else if(ratio < 0.8){
			image.attr("src", window.erm.base_url + "/images/navbar/facsimile-transcription_ro.jpg");
		}else{
			image.attr("src", window.erm.base_url + "/images/navbar/facsimile_ro.jpg");
		}
	}
	// Toggle View //
	$('#toggle-view').click(function () {
		var ratio = $("#content-left").width()/$("#content").width();

		if(ratio < 0.2){
			//make left pane visible
			$("#content-left").css("width", "98.5%");
			$("#content-right").css("width", "0%");
		}else if(ratio < 0.8){
			//make right pane visible
			$("#content-left").css("width", "0");
			$("#content-right").css("width", "98.5%");
		}else{
			//make both panes visible
			$("#content-left").css("width", "58.5%");
			$("#content-right").css("width", "38.5%");
		}

		updateCurrentViewMode();
	});

	// Toggle Magnification Drop-down //
	$("#toggle-magnify-holder").click(toggleZoom);

	// Toggle Point Size Drop-down //
	$("#toggle-enlarge").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#navbar-enlarge").toggle();
	});

	$(".navbar-enlarge-text").click(function(){
		$(".navbar-enlarge-text").removeClass('active');
		$(this).addClass('active');

		var sizes = $(this).attr('data-font-size').split(',');

		$('.witness').css('line-height', '1.5em');
		$('.witness').css('font-size', sizes[0]);
		$('.smallcaps').css('font-size', sizes[1]);
	});

	$("#toggle-transcription").click(function(){
		var allStates = ["composite", "original", "revised"];

		var state = $(this).attr("data-current-state");
		if(!state) state = allStates[0];
		else{
			state = allStates[(allStates.indexOf(state) +1)%allStates.length];
		}

		switch (state) {
			case "original":
				$("#toggle-transcription")
				.attr("src", window.erm.base_url + "/images/navbar/text-original.jpg");

				$(".s-subst.s-add").hide();
				$(".s-subst.s-del").addClass("s-revision-original").show();
				break;
			case "revised":
				$("#toggle-transcription")
				.attr("src", window.erm.base_url + "/images/navbar/text-revised.jpg");

				$(".s-subst.s-add").show();
				$(".s-subst.s-del").removeClass("s-revision-original").hide();
				break;
			default: // composite
				$("#toggle-transcription")
				.attr("src", window.erm.base_url + "/images/navbar/text-composite.jpg");
				
				$(".s-subst.s-add").show();
				$(".s-subst.s-del").show();
		}

		$(this).attr("data-current-state", state);
	});

	// Toggle Hand Drop-down //
	$("#toggle-hand").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-info").hide();
		$("#navbar-hand").toggle();
	});

	// Close Drop-downs //
	$("#content, #first_button, #previous_button, #next_button, #last_button, #toggle-view, #toggle-marginalia, #toggle-expansion").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
	});

	// Toggle Info Panel //
	$("#toggle-info").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").toggle();
	});

	// open glosses in popup
	$(".gloss-inline a").click(function(){
		this.search = "?show_navbar=0";

		var height = parseInt(window.innerHeight / 2);
		var width = parseInt(window.innerWidth / 2);

		window.open(this.href, '_blank', "scrollbars=1,resizable=1,height=" + height + "px,width=" + width + "px");
		return false;
	});

	$("#backButton").click(function(){

	});

	if(window.erm.facsimiles.length){
		selectFacsimile(0);
	}else{
		$("#navbar-navigation").hide();
		$("#toggle-view").hide();
	}

	$("#content-left").resizable({
	  handleSelector: "#content-splitter",
	  resizeHeight: false,
		onDrag: function(){
			updateCurrentViewMode();
		}
	});
	
	$("#toggle-transcription").click();
});

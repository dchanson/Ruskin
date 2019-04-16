<?php require_once(__DIR__.'/../header.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<link href="<?php echo r_build_url('style.php?p=witness_styles.scss'); ?>" rel="stylesheet" type="text/css" />

	<title>Now Showcasing: <?php echo FILE_NAME;?></title>
	<?php require_once 'header_utils.inc.php'; ?>

	<script>
		window.erm.facsimiles_file_names = "<?php echo FACS_FILE_NAMES; ?>";
		window.erm.file_name = "<?php echo htmlspecialchars(FILE_NAME); ?>"
	</script>
</head>
<body>
<div id="main">
  <div id="navbar-tab">
	<img id="toggle-navbar" src="<?php echo r_build_url('images/navbar/tab_ro.jpg'); ?>" alt="Show/Hide NavBar Button" title="Show/Hide the Navbar" width="20" height="10" />
  </div>
  <div id="navbar">

	<div id="navbar-navigation" data-current-fac="0">
		<img id="first_button" src="<?php echo r_build_url('images/navbar/first.jpg'); ?>" alt="First Facsimile Button" title="Go to the First Facsimile" width="26" height="20" />
		<img id="previous_button" src="<?php echo r_build_url('images/navbar/previous.jpg'); ?>" alt="Previous Facsmilie Button" title="Go to the Previous Facsimile" width="26" height="20"/>
	  <div id="navbar-location" title="Select a Facsimile"></div>
	  <img id="next_button" src="<?php echo r_build_url('images/navbar/next.jpg'); ?>" alt="Next Facsimile Button" title="Go to the Next Facsimile" width="26" height="20"/>
		<img id="last_button" src="<?php echo r_build_url('images/navbar/last.jpg'); ?>" alt="Last Facsimile Button" title="Go to the Last Facsimile" width="26" height="20" />
	</div>

<img id="toggle-view" src="<?php echo r_build_url('images/navbar/facsimile-transcription_ro.jpg'); ?>" alt="Toggle Views Button" title="Toggle Views" width="26" height="20" />
<div id="toggle-magnify-holder">
	<img id="toggle-magnify-img" 
		src="<?php echo r_build_url('images/navbar/magnify_ro.jpg'); ?>" 
		alt="Magnification Button" 
		title="Increase the Magnification of the Facsimile" /> <span id="toggle-magnify-text">100%</span>
</div>
<div id="toggle-enlarge-holder">
	<img id="toggle-enlarge" src="<?php echo r_build_url('images/navbar/enlarge_ro.jpg'); ?>" alt="Point Size Button" title="Increase the Point Size of the Transcription" width="26" height="20" />
	<div id="navbar-enlarge" title="Increase the Point Size of the Transcription">
		<span class="navbar-enlarge-popup">Transcription Point Size:
						<br/>
						<br/><span data-font-size="12pt,8pt" class="navbar-enlarge-text active">12pt</span>
						<br/>
						<br/><span data-font-size="16pt,10.7pt" class="navbar-enlarge-text">16pt</span>
						<br/>
						<br/><span data-font-size="20pt,13.3pt" class="navbar-enlarge-text">20pt</span>
						<br/>
						<br/><span data-font-size="24pt,16pt" class="navbar-enlarge-text">24pt</span>
						<br/>
						<br/>
				</span>
	</div>
</div>
<!-- <img id="toggle-transcription" src="<?php echo r_build_url('images/navbar/text-composite.jpg'); ?>" alt="Transcription Button" title="Toggle Transcriptions" width="26" height="20" /> -->
<img id="toggle-hand" src="<?php echo r_build_url('images/navbar/scribe_ro.jpg'); ?>" alt="Hands Button" title="Toggle Hands On/Off" width="26" height="20" />
<img id="toggle-info" src="<?php echo r_build_url('images/navbar/info_ro.jpg'); ?>" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="float:right" />
<div id="navbar-facsimile" title="Select a Facsimile">
	<div class="navbar-facsimile-text" id="navbar-facsimile-holder">
		Facsimile:

	</div>
</div>
<div id="navbar-facs" style="display:none">
	<img id="navbar-facs_preview" src="" width="100%" />
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
            <div style="text-align:center"><img src="<?php echo r_build_url('images/navbar/navbar.jpg'); ?>" alt="Image of the Navbar" width="600" height="44" /></div>
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

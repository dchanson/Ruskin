<?php include_once('header.inc.php'); ?>
<?php if(!isset($_REQUEST['show_navbar']) or $_REQUEST['show_navbar'] != '0'){
	?>

	<div class="navigation">
        <a href="<?php echo r_get_base();?>"><img src="<?php echo r_build_url("images/ruskin_logo.jpg"); ?>" width="100%"/></a>
        <br/>
        <br/>
        <span class="navigation-title">
            The
            <br/>Early
            <br/>Ruskin
            <br/>Manuscripts
            <div class="navigation-date">1826&#x2013;1842</div>
        </span>
        <hr/>
        <span class="navigation-editor"><a href="mailto:ruskinproject@selu.edu">David C. Hanson, Editor</a></span>
        <br/>
        <br/>
		<?php include('search/navbox.php'); ?>
        <span><a href="<?php echo r_get_base(); ?>">Home</a><span>
        <span>
            <br/><a href="<?php echo r_build_url("essays/indices_essay.php"); ?>">Indices</a>
            <br/><a class="subnavigation" href="<?php echo r_build_url("essays/indices_essay.php#WORKS"); ?>">Works</a>
            <br/><a class="subnavigation" href="<?php echo r_build_url("essays/indices_essay.php#MANUSCRIPTS"); ?>">Manuscripts</a>
            <br/><a class="subnavigation" href="<?php echo r_build_url("essays/indices_essay.php#CORPORA"); ?>">Corpora</a>
            <br/><a class="subnavigation" href="<?php echo r_build_url("essays/indices_essay.php#WORKSBYOTHERS"); ?>">Works by Others</a>
            <br/><a class="subnavigation" href="<?php echo r_build_url("essays/indices_essay.php#COMMENTARY"); ?>">Commentary</a>
            <br/><a class="subnavigation" href="<?php echo r_build_url("essays/indices_essay.php#ESSAYS"); ?>">Essays</a>
            <br/><a class="subnavigation" href="<?php echo r_build_url("essays/indices_essay.php#DRAWINGS"); ?>">Drawings</a>
        </span>
        <br/>
		<span>XML</span>
        <br/>
		<span><a href="<?php echo r_build_url("notes/bibliography.php"); ?>">Bibliography</a></span>
        <br/>
    <span><a href="<?php echo r_build_url("webpages/staff.php"); ?>">Staff and Support</a><span>
    <br/>
    <span><a href="<?php echo r_build_url("webpages/legal.php"); ?>">Legal</a><span>
	</div>
<?php } ?>

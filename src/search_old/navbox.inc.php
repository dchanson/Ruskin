<?php require(__DIR__.'/../header.inc.php'); ?>

<form action="<?php echo r_build_url('search/index.php'); ?>" method="get">
<input type="text" name="keyword" placeholder="Search..." style="width: 80px;" />
<input type="submit" name="submit" value="Go" style="width:35px;" />
</form>
<span><a class="subnavigation" href="<?php echo r_build_url('search/index.php'); ?>">Advanced Search</a></span>
<br>

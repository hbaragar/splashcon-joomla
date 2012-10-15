<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div class="box highlights">
<div class="box-top">&nbsp;</div>
<div class="box-gradient"><div class="box-bg">
	<h3><?php echo $module->title; ?></h3>
	<?php
	    srand((double) microtime() * 1000000);
	    $flashnum       = rand(0, $items -1);
	    $item           = $list[$flashnum];
	    modHighlightsHelper::renderItem($item, $params, $access);
	?>
	<a href="highlights" class="button">More Highlights</a>
	<div class="relax">&nbsp;</div>
</div></div>
<div class="box-bottom">&nbsp;</div>
</div>

<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div class="box highlights">
<div class="box-top">&nbsp;</div>
<div class="box-gradient"><div class="box-bg">
	<h3><?php echo $module->title; ?></h3>

	<?php 
	    modHighlightsRotateHelper::renderItems($list, $params, $access);
	?>
	
	<a href="index.php?option=com_content&view=category&layout=blog&id=8&Itemid=16" class="button">More Highlights</a>
	<div class="relax">&nbsp;</div>
</div></div>
<div class="box-bottom">&nbsp;</div>
</div>

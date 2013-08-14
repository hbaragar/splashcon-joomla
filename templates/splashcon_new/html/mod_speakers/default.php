<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>


<div class="small-box">
	<div class="small-box-top">&nbsp;</div>
	<div class="small-box-gradient"><div class="small-box-bg speakers">
		<h3><?php echo $module->title; ?></h3>
		<ul>
		<?php foreach ($list as $item) {  ?>	
			<?php echo $item->row->introtext ?>
		<?php } ?>
		</ul>
		<div class="relax">&nbsp;</div>
	</div></div>
	<div class="small-box-bottom">&nbsp;</div>
</div>

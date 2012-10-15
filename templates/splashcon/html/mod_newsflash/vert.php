<?php defined('_JEXEC') or die('Restricted access'); ?>

<div class="news">
	<div class="news-top">&nbsp;</div>
	<div class="news-area">
		<h3><?php echo $module->title; ?></h3>
		
		<?php for ($i = 0, $n = count($list); $i < $n; $i ++) { 
			modNewsFlashHelper::renderItem($list[$i], $params, $access);
		} ?>
		
		<a href="index.php?option=com_content&view=section&layout=blog&id=21" class="button">Old News</a>
		<!--<a href="index.php/news-a-announcements" class="button">Previous News</a>-->
			<div class="relax">&nbsp;</div>
	</div>
	<div class="news-bottom">&nbsp;</div>
</div>




<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>


<div class="small-box">
	<div class="small-box-top">&nbsp;</div>
	<div class="small-box-gradient"><div class="small-box-bg">
		<h3><?php echo $module->title; ?></h3>
		<ul>
		<?php foreach ($list as $item) {  ?>	
			<?php preg_match_all( '/<img[^>]*>/', $item->row->introtext, $img_url, PREG_SET_ORDER ); 
				if ($img_url[0][0]) {
					$item->row->introtext = preg_replace( '/<p><img[^>]*><\/p>/', '', $item->row->introtext);
					$item->row->introtext = preg_replace( '/<img[^>]*>/', '', $item->row->introtext);
				}
			?>	
			<li>
			<?php if ($img_url[0][0]) { ?>
				<a href="<?php echo $item->link; ?>" class="photo">
					<?php echo $img_url[0][0]; ?>
				</a>
			<?php } ?>
			
				<h4><a href="<?php echo $item->link; ?>"><?php echo $item->row->title; ?></a></h4>
				<?php echo $item->row->introtext; ?>
			</li>
		<?php } ?>
		
		</ul>
		<a href="index.php?option=com_content&view=category&layout=blog&id=8&Itemid=16" class="button">More Highlights</a>
	</div></div>
	<div class="small-box-bottom">&nbsp;</div>
</div>

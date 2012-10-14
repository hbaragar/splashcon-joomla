<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div class="blog-box">
	<a class="tab" href="#"><img src="templates/splash_site/images/buttons/blog-tab.gif" alt="" /></a>
	<div class="blog"><div class="blog-top"><div class="blog-bottom"><div class="wrapper">
		
		<?php foreach ($list as $item) {  ?>	
				<h3><a href="<?php echo $item->link; ?>"><?php echo $item->row->title; ?></a></h3>
				<?php echo $item->row->introtext; ?>
		<?php } ?>

		<p><a class="more-blog" href="index.php?option=com_content&view=section&layout=blog&id=3&Itemid=17">Previous Blog Entries &gt;&gt;</a></p>
	
	</div></div></div></div>
	<div class="relax">&nbsp;</div>
</div>


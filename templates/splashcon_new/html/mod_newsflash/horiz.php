<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<ul class="large">
	<?php foreach ($list as $item) { ?>
		<li>
			<?php 
				$text = preg_replace( '/<p>/', '', $item->introtext ); 
				$text = preg_replace( '/<\/p>/', '', $text ); ?>
			<?php $link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catslug, $item->sectionid)); ?>
			<a href="<?=$link; ?>"><?=$text; ?> &gt;&gt;</a>
		</li>
	<?php } ?>
</ul>

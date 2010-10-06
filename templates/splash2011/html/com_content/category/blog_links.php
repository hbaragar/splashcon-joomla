<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<h5><?php echo JText::_( 'More Articles...' ); ?></h5>

<ul>
<?php foreach ($this->links as $link) : ?>
	<li>
			<a class="blogsection" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($link->slug, $link->catslug, $link->sectionid)); ?>">
			<?php echo $this->escape($link->title); ?></a>
	</li>
<?php endforeach; ?>
</ul>

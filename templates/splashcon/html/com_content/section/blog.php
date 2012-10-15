<?php
defined('_JEXEC') or die('Restricted access');
$cparams =& JComponentHelper::getParams('com_media');
?>
<?php if ($this->params->get('show_page_title')) : ?>
<h2 class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
	<?php echo $this->escape($this->params->get('page_title')); ?>
</h2>
<?php endif; ?>

<div class="text-box">
<?php 
	$i = $this->pagination->limitstart; 
	$startIntroArticles = $this->pagination->limitstart;
	$numIntroArticles = $startIntroArticles + $this->params->get('num_intro_articles');
	if ( $numIntroArticles > $this->total) $numIntroArticles = $this->total;
	
if (($numIntroArticles != $startIntroArticles) && ($i < $this->total)) : ?>
		<?php for ($ii = $startIntroArticles; $ii < $numIntroArticles; $ii ++  ) { 
			$this->item =& $this->getItem($ii, $this->params); ?>
			<?php echo $this->loadTemplate('item') ?>
		<?php } ?>
<?php endif; ?>
</div>
<?php if ($this->params->get('show_pagination')) : ?>
		<?php echo $this->pagination->getPagesLinks(); ?>
<?php endif; ?>
<div class="blog_more">
	<?php
		$this->links = array_splice($this->items, $i - $this->pagination->limitstart);
		echo $this->loadTemplate('links');
	?>
</div>



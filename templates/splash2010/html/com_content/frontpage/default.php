<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<?php // module Show title ?>

<?php $i = $this->pagination->limitstart; ?>

<?php
$startIntroArticles = $this->pagination->limitstart;
$numIntroArticles = $startIntroArticles + $this->params->get('num_intro_articles', 4);
if ( $numIntroArticles > $this->total) $numIntroArticles = $this->total; ?>

	<?php for ($ii = $startIntroArticles; $ii < $numIntroArticles; $ii ++  ) { 
			$this->item =& $this->getItem($ii, $this->params); ?>
			<?php echo $this->loadTemplate('item') ?>
		<?php } ?>
	

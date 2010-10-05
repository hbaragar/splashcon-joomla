<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<?php $link = JRoute::_( 'index.php?option=com_content&view=article&id='.$this->item->id.'&catid='.$this->item->catid); ?>

<h2><span><?php echo JHTML::_('date', $this->item->created, JText::_('%d %B %Y')); ?></span> - <?php echo $this->item->title; ?>
	<small>...<a href="<?php echo $link ?>">mehr lesen</a></small>
</h2>
	


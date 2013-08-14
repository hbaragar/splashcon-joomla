<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<?php $link = JRoute::_( 'index.php?option=com_content&view=article&id='.$this->item->id.'&catid='.$this->item->catid); ?>
<a href="<?php echo $link; ?>"><?php echo $this->item->title; ?></a>
	


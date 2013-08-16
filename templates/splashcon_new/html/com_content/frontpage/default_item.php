<?php // no direct access
defined('_JEXEC') or die('Restricted access');
?>

<?php if ($this->item->params->get('show_title')) : ?>
	<h3><?php echo $this->escape($this->item->title); ?></h3>
<?php endif; ?>


<?php  if (!$this->item->params->get('show_intro')) :
	echo $this->item->event->afterDisplayTitle;
endif; ?>
<?php echo $this->item->event->beforeDisplayContent; ?>

<?php echo $this->item->text; ?>

<?php echo $this->item->event->afterDisplayContent; ?>


<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<?php $canEdit   = ($this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own')); ?>


<div class="icons">
	<?php if ($this->item->params->get('show_pdf_icon')) { ?>
	<div align="right" width="100%" class="buttonheading">
	<?php echo JHTML::_('icon.pdf', $this->item, $this->item->params, $this->access); ?>
	</div>
	<?php } ?>

	<?php if ( $this->item->params->get( 'show_print_icon' )) { ?>
	<div align="right" width="100%" class="buttonheading">
	<?php echo JHTML::_('icon.print_popup', $this->item, $this->item->params, $this->access); ?>
	</div>
	<?php } ?>

	<?php if ($this->item->params->get('show_email_icon')) { ?>
	<div align="right" width="100%" class="buttonheading">
	<?php echo JHTML::_('icon.email', $this->item, $this->item->params, $this->access); ?>
	</div>
	<?php } ?>
	<?php if ($canEdit) { ?>
	<div align="right" width="100%" class="buttonheading">
	<?php echo JHTML::_('icon.edit', $this->item, $this->item->params, $this->access); ?>
	</div>
   <?php } ?>
</div>	

<?php if ($this->item->params->get('show_title')) { ?>
	<h4 class="contentheading<?php echo $this->escape($this->item->params->get( 'pageclass_sfx' )); ?>" width="100%">
		<?php if ($this->item->params->get('link_titles') && $this->item->readmore_link != '') { ?>
		<a href="<?php echo $this->item->readmore_link; ?>" class="contentpagetitle<?php echo $this->escape($this->item->params->get( 'pageclass_sfx' )); ?>">
			<?php echo $this->escape($this->item->title); ?></a>
		<?php } else { ?>
			<?php echo $this->escape($this->item->title); ?>
		<?php } ?>
	</h4>
<?php } ?>

<?php if (($this->item->params->get('show_author')) && ($this->item->author != "")) { ?>
	<p class="author-date"><?php JText::printf( 'Written by', ($this->escape($this->item->created_by_alias) ? $this->escape($this->item->created_by_alias) : $this->escape($this->item->author)) ); ?></p>
<?php } ?>
<?php if ($this->item->params->get('show_create_date')) { ?>
	<p class="author-date"><?php echo JHTML::_('date', $this->item->created, JText::_('DATE_FORMAT_LC2')); ?></p>
<?php } ?>

<?php echo $this->item->text; ?>

<?php if ($this->item->params->get('show_readmore') && $this->item->readmore) { ?>
		<p><a href="<?php echo $this->item->readmore_link; ?>" class="readon<?php echo $this->escape($this->item->params->get('pageclass_sfx')); ?>">
			<?php if ($this->item->readmore_register) {
				echo JText::_('Register to read more...'); 
			} else {
				if ($readmore = $this->item->params->get('readmore')) {
					echo $readmore; 
				} else {
					echo JText::sprintf('Read more...');
				}
			}	?></a></p>
<?php } ?>
<div class="relax">&nbsp;</div>


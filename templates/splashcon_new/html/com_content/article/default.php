<?php // no direct access
defined('_JEXEC') or die('Restricted access');

$canEdit	= ($this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own'));
?>
<div class="single">
<?php if ($canEdit || $this->params->get('show_title') || $this->params->get('show_pdf_icon') || $this->params->get('show_print_icon') || $this->params->get('show_email_icon')) : ?>
<div class="icons">
	<?php if (!$this->print) { ?>
		<?php if ($this->params->get('show_pdf_icon')) { ?>
		<div>
		<?php echo JHTML::_('icon.pdf',  $this->article, $this->params, $this->access); ?>
		</div>
		<?php } ?>

		<?php if ( $this->params->get( 'show_print_icon' )) { ?>
		<div>
		<?php echo JHTML::_('icon.print_popup',  $this->article, $this->params, $this->access); ?>
		</div>
		<?php } ?>

		<?php if ($this->params->get('show_email_icon')) { ?>
		<div>
		<?php echo JHTML::_('icon.email',  $this->article, $this->params, $this->access); ?>
		</div>
		<?php } ?>
		<?php if ($canEdit) { ?>
		<div>
			<?php echo JHTML::_('icon.edit', $this->article, $this->params, $this->access); ?>
		</div>
		<?php } ?>
	<?php } else { ?>
		<div>
		<?php echo JHTML::_('icon.print_screen',  $this->article, $this->params, $this->access); ?>
		</div>
	<?php } ?>
</div>
<?php endif; ?>

<?php if ($this->params->get('show_title')) { ?>
	<h2> <?php echo $this->escape($this->article->title); ?> </h2>
<?php } ?>



<?php  if (!$this->params->get('show_intro')) :
	echo $this->article->event->afterDisplayTitle;
endif; ?>

<?php echo $this->article->event->beforeDisplayContent; ?>

<?php if (($this->params->get('show_section') && $this->article->sectionid) || ($this->params->get('show_category') && $this->article->catid)) { ?>
<p class="author-date section-category">
	<?php if ($this->params->get('show_section') && $this->article->sectionid && isset($this->article->section)) { ?>
			<?php if ($this->params->get('link_section')) { ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getSectionRoute($this->article->sectionid)).'">'; ?>
			<?php } ?>
			<?php echo $this->escape($this->article->section); ?>
			<?php if ($this->params->get('link_section')) { ?>
				<?php echo '</a>'; ?>
			<?php } ?>
				<?php if ($this->params->get('show_category')) { ?>
				<?php echo ' - '; ?>
			<?php } ?>
		<?php } ?>
		
		<?php if ($this->params->get('show_category') && $this->article->catid) { ?>
			<?php if ($this->params->get('link_category')) { ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->article->catslug, $this->article->sectionid)).'">'; ?>
			<?php } ?>
			<?php echo $this->escape($this->article->category); ?>
			<?php if ($this->params->get('link_category')) { ?>
				<?php echo '</a>'; ?>
			<?php } ?>
		<?php } ?>
</p>		
<?php } ?>

<?php if (($this->params->get('show_author')) && ($this->article->author != "")) { ?>
		<p class="author-date"><?php JText::printf( 'Written by', ($this->escape($this->article->created_by_alias) ? $this->escape($this->article->created_by_alias) : $this->escape($this->article->author)) ); ?></p>
<?php } ?>

<?php if ($this->params->get('show_create_date')) { ?>
		<p class="author-date"><?php echo JHTML::_('date', $this->article->created, JText::_('DATE_FORMAT_LC2')) ?></p>
<?php } ?>

<?php if (isset ($this->article->toc)) { ?>
	<?php echo $this->article->toc; ?>
<?php } ?>

<?php echo $this->article->text; ?>

<?php /* if ( intval($this->article->modified) !=0 && $this->params->get('show_modify_date')) { ?>
<p class="author-date">
	<?php echo JText::sprintf('LAST_UPDATED2', JHTML::_('date', $this->article->modified, JText::_('DATE_FORMAT_LC2'))); ?>
</p>	
<?php } */?>

<?php echo $this->article->event->afterDisplayContent; ?>
</div>
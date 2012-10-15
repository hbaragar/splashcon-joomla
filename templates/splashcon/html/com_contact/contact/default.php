<?php
/**
 * $Id: default.php 11917 2009-05-29 19:37:05Z ian $
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

$cparams = JComponentHelper::getParams ('com_media');
?>
<?php if ( $this->params->get( 'show_page_title', 1 ) && !$this->contact->params->get( 'popup' ) && $this->params->get('page_title') != $this->contact->name ) : ?>
	<h2>
		<?php echo $this->params->get( 'page_title' ); ?>
	</h2>
<?php endif; ?>
<div id="component-contact">

<?php/* if ( $this->params->get( 'show_contact_list' ) && count( $this->contacts ) > 1) : ?>
<tr>
	<td colspan="2" align="center">
		<br />
		<form action="<?php echo JRoute::_('index.php') ?>" method="post" name="selectForm" id="selectForm">
		<?php echo JText::_( 'Select Contact' ); ?>:
			<br />
			<?php echo JHTML::_('select.genericlist',  $this->contacts, 'contact_id', 'class="inputbox" onchange="this.form.submit()"', 'id', 'name', $this->contact->id);?>
			<input type="hidden" name="option" value="com_contact" />
		</form>
	</td>
</tr>
<?php endif; */?>

<?php if ( $this->contact->name && $this->contact->params->get( 'show_name' ) ) { ?>
	<h2><?php echo $this->escape($this->contact->name); ?></h2>
<?php } ?>

<?php /*if ( $this->contact->con_position && $this->contact->params->get( 'show_position' ) ) : ?>
<tr>
	<td colspan="2">
	<?php echo $this->escape($this->contact->con_position); ?>
		<br /><br />
	</td>
</tr>
<?php endif;*/ ?>

<?php/* if ( $this->contact->image && $this->contact->params->get( 'show_image' ) ) : ?>
	<div style="float: right;">
		<?php echo JHTML::_('image', 'images/stories' . '/'.$this->contact->image, JText::_( 'Contact' ), array('align' => 'middle')); ?>
	</div>
<?php endif; */?>

<div class="contact-address">
	<?php echo $this->loadTemplate('address'); ?>
</div>

<?php if ( $this->contact->params->get( 'allow_vcard' ) ) : ?>
	<?php echo JText::_( 'Download information as a' );?>
		<a href="<?php echo JURI::base(); ?>index.php?option=com_contact&amp;task=vcard&amp;contact_id=<?php echo $this->contact->id; ?>&amp;format=raw&amp;tmpl=component">
			<?php echo JText::_( 'VCard' );?></a>
<?php endif;

if ( $this->contact->params->get('show_email_form') && ($this->contact->email_to || $this->contact->user_id))
	echo $this->loadTemplate('form');
?>
</div>

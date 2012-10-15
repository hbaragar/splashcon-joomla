<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php if ($params->get('item_title')) { ?>
<h5>
	<?php if ($params->get('link_titles') && $item->linkOn != '') { ?>
		<a href="<?php echo $item->linkOn;?>" class="contentpagetitle<?php echo $params->get( 'moduleclass_sfx' ); ?>">
			<?php echo $item->title;?></a>
	<?php } else { ?>
		<?php echo $item->title; ?>
	<?php } ?>
</h5>
<?php } ?>

<?php if (!$params->get('intro_only')) {
	echo $item->afterDisplayTitle;
}; ?>

<?php echo $item->beforeDisplayContent; ?>

<?php echo $item->text; ?>

<?php if (isset($item->linkOn) && $item->readmore && $params->get('readmore')) {
    echo '<a class="readmore" href="'.$item->linkOn.'">'.$item->linkText.'</a>';
} ?>

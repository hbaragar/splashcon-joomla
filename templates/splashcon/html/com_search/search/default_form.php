<?php defined('_JEXEC') or die('Restricted access'); ?>

<form id="searchForm" action="<?php echo JRoute::_( 'index.php?option=com_search' );?>" method="post" name="searchForm" class="splash-form">
	<div class="form-row keyword">
		<label for="search_searchword" class="blue">
			<?php echo JText::_( 'Keyword' ); ?>:
		</label>
		<input type="text" name="searchword" id="search_searchword" size="30" maxlength="20" value="<?php echo $this->escape($this->searchword); ?>" class="inputbox" />
		<button name="Search" onclick="this.form.submit()" class="button"><?php echo JText::_( 'Search' );?></button>
	</div>
	<div class="form-row">
		<?php echo $this->lists['searchphrase']; ?>
	</div>	
	<div class="form-row">
		<label for="ordering"><?php echo JText::_( 'Ordering' );?>:</label>
		<?php echo $this->lists['ordering'];?>
	</div>
	
	<?php if ($this->params->get( 'search_areas', 1 )) { ?>
	<div class="form-row">
		<label class="blue"><?php echo JText::_( 'Search Only' );?>:</label></div>
		<?php $cnt = 0; ?>
			<?php foreach ($this->searchareas['search'] as $val => $txt) {
				$checked = is_array( $this->searchareas['active'] ) && in_array( $val, $this->searchareas['active'] ) ? 'checked="checked"' : '';
			?>
			<?php if ($cnt == 0) echo '<div class="form-row search-only">'; ?>
			<input type="checkbox" name="areas[]" value="<?php echo $val;?>" id="area_<?php echo $val;?>" <?php echo $checked;?> />
				<label for="area_<?php echo $val;?>">
					<?php echo JText::_($txt); ?>
				</label>
			<?php if ($cnt == 3) {
				$cnt = 0; 
				echo '</div>';
			} else $cnt++; ?>	
			<?php } ?>
			<?php if ($cnt != 0) echo '</div> '; ?>
	<?php } ?>
	<div class="form-row">
		<?php echo '<p>'.JText::_( 'Search Keyword' ) .' <b class="blue">'. $this->escape($this->searchword) .'</b></p>'; ?>
	</div>
	<div class="form-row">
		<p><?php echo $this->result; ?></p>
	</div>


<?php if($this->total > 0) : ?>
<div class="form-row result">
	<div class="alignright">
		<label for="limit">
			<?php echo JText::_( 'Display Num' ); ?>
		</label>
		<?php echo $this->pagination->getLimitBox( ); ?>
	</div>
	<div class="alignleft">
	<p class="blue"><strong><?php echo $this->pagination->getPagesCounter(); ?></strong></p>
	</div>
</div>
<?php endif; ?>

<input type="hidden" name="task"   value="search" />
</form>

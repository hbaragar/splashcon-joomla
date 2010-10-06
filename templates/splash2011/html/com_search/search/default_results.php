<?php defined('_JEXEC') or die('Restricted access'); ?>


<div class="text-box">
	<?php foreach( $this->results as $result ) { ?>
		<div class="search-result">
			<?php if ( $result->href ) {
				if ($result->browsernav == 1 ) { ?>
					<h5 class="blue"><?php echo $this->pagination->limitstart + $result->count.'. ';?><a href="<?php echo JRoute::_($result->href); ?>" target="_blank">
				<?php } else { ?>
					<h5 class="blue"><?php echo $this->pagination->limitstart + $result->count.'. ';?><a href="<?php echo JRoute::_($result->href); ?>">
				<?php };

				echo $this->escape($result->title);

				if ( $result->href ) { ?>
					</a></h4>
				<?php };
				if ( $result->section ) { ?>
					<p class="author-date section-category">(<?php echo $this->escape($result->section); ?>)</span>
				<?php }; ?>
			<?php }; ?>
		<p><?php echo $result->text; ?></p>
		</div>
		<?php
			if ( $this->params->get( 'show_date' )) { ?>
				<p class="author-date section-category"><?php echo $result->created; ?></p>
			<?php }; ?>
	<?php } ?>
	<?php echo $this->pagination->getPagesLinks( ); ?>
</div>

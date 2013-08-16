<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<div class="box-bg">
<form action="index.php" method="post" class="search-form">
	<div class="search<?php echo $params->get('moduleclass_sfx') ?>">
		<p>
		<input style="margin:0;width: 70%;" name="searchword" id="mod_search_searchword" type="text" value="SEARCH"  onblur="if(this.value == '') this.value = 'SEARCH'" onfocus="if(this.value == 'SEARCH') this.value = ''" />
		<button type="submit" class="btn" onclick="this.form.searchword.focus();">Go</button>
		<input type="hidden" name="task"   value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
		</p>
	</div>
</form>
</div>
<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post" class="search-form">
	<div class="search<?php echo $params->get('moduleclass_sfx') ?>">
		<button type="submit"><img src="templates/splash_site/images/buttons/go.gif" alt="GO" onclick="this.form.searchword.focus();"/></button>
		<input name="searchword" id="mod_search_searchword" type="text" value="SEARCH"  onblur="if(this.value == '') this.value = 'SEARCH'" onfocus="if(this.value == 'SEARCH') this.value = ''" />
		<input type="hidden" name="task"   value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
	</div>
</form>

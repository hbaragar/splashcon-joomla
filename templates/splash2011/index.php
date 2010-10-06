<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General <?php echo $this->baseurl ?>/templates/splash2011 License, and as distributed it includes or
 * is derivative of works licensed under the GNU General <?php echo $this->baseurl ?>/templates/splash2011 License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php echo '<?xml version="1.0"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>

<jdoc:include type="head" />
<link href="<?php echo $this->baseurl ?>/templates/splash2011/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/splash2011/css/main.css" type="text/css" />

<!--[if lt IE 7]>
<style type="text/css" media="screen">
BODY { behavior: url("<?php echo $this->baseurl ?>/templates/splash2011/css/csshover.htc"); }
.header  {
	background: none;
	height: 152px;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $this->baseurl ?>/templates/splash2011/images/bg/header-bg.png', sizingMethod='scope');
}
.header A,
.header .right-header,
.news A, .box A {position: relative;}
.small-box-top {
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $this->baseurl ?>/templates/splash2011/images/bg/small-box-top.png', sizingMethod='scope');
}
.small-box-bottom {
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $this->baseurl ?>/templates/splash2011/images/bg/small-box-bottom.png', sizingMethod='scope');
}
.boxes-top {
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $this->baseurl ?>/templates/splash2011/images/bg/boxes-top.png', sizingMethod='scope');
}
.boxes-bottom {
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $this->baseurl ?>/templates/splash2011/images/bg/boxes-bottom.png', sizingMethod='scope');
}
.content UL LI {
	background: url("<?php echo $this->baseurl ?>/templates/splash2011/images/icons/list.gif") no-repeat left 13px;
	border: 1px oslid red;
}
.header BUTTON {margin-top: 3px;}
.blog-box .tab {margin-left: -10px;}
.blog-box .blog {
	margin-left: 0;
	float: left;
	display: inline;
}
/*.blog-box .wrapper {width: 100%;}*/
/*.news-area {width: 100%;}*/
/*.box-bg {width: 100%;}*/

.blog-box {margin-left: 0;}
.content .sidebar H4 {float: left;}
.header UL.menu UL {padding-top: 14px;}
.small-box-top, .news-top, .box-top, .boxes-top {
	margin-bottom: 0;
}
</style>
<![endif]-->

</head>
<body>
    <!-- Page -->
    <div id="page">
    
    	<!-- Header -->
    	<div class="header">
    		<div class="right-header">
				<jdoc:include type="modules" name="search-box" />
				<jdoc:include type="modules" name="top-menu" />

    			<div class="relax">&nbsp;</div>
    			<jdoc:include type="modules" name="sociable" />
    			<span>Hilton Portland &amp; Executive Tower &middot; Portland Oregon, USA</span>
    		</div>
    		<a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/templates/splash2011/images/logotype2011-2.png" alt="Splash" /></a>
			<jdoc:include type="modules" name="main-menu" />
    	</div>
    	
    	<!-- Content -->
    	<div class="content">
    		<div class="sidebar">
				<jdoc:include type="modules" name="left"/>
    		</div>
    		<div class="main-content">
    			<div class="text">
    				<jdoc:include type="message" />
					<jdoc:include type="component" />
    			</div>
    			<div class="column">
						<jdoc:include type="modules" name="right"/>
    				<div class="relax">&nbsp;</div>
    				<div class="indent">
	    				<jdoc:include type="modules" name="right-bottom"/>
    				</div>
    			</div>
    			<div class="relax">&nbsp;</div>
				
	    		<jdoc:include type="modules" name="bottom-content"/>
			</div>
    		<div class="relax">&nbsp;</div>
    	</div>
    	<div class="content-bottom">&nbsp;</div>
    	
    	<div class="boxes">
    		<div class="boxes-top">&nbsp;</div>
    		<div class="boxes-bg">
    			<jdoc:include type="modules" name="boxes"/>
    			<div class="relax">&nbsp;</div>
    		</div>
    		<div class="boxes-bottom">&nbsp;</div>
    	</div>
    	
    	<!-- Footer -->
    	<div class="footer">
    		<jdoc:include type="modules" name="footer"/>
    	</div>
    
    </div>
</body>
</html>

<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General <?php echo $this->baseurl ?>/templates/splashcon License, and as distributed it includes or
 * is derivative of works licensed under the GNU General <?php echo $this->baseurl ?>/templates/splashcon License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$menu = & JSite::getMenu();
$isHomepage = ($menu->getActive() == $menu->getDefault());

?>
<?php echo '<?xml version="1.0"?>'; ?>
<!DOCTYPE HTML>
<html>
<head>

<jdoc:include type="head" />
<link href="<?php echo $this->baseurl ?>/templates/splashcon/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/splashcon_new/css/main.css" type="text/css" />
 
    <link href="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl ?>/templates/splashcon_new/css/coin-slider-styles.css" rel="stylesheet" type="text/css"/>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
            
    <!-- Icons -->
    <link href="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

<link href="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/carousel/style.css" rel="stylesheet" type="text/css" /><link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Play" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis+Light" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->baseurl ?>/templates/splashcon_new/styles/custom.css" rel="stylesheet" type="text/css" />
</head>



<body id="pageBody">

<div id="decorative2">
    <div class="container">
                  
        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                         <a href="" id="divSiteTitle"><img src="images/Splash_WebBanner-shadow.png" /></a>
                         <br>
                         
                    </div>

                    <div id="divAboveMenu" class="pull-right visible-desktop">
                        <div class="pull-left">
                            <a href="http://indianapolis.hyatt.com/hyatt/hotels-indianapolis/" target="_blank">Hyatt Regency Indianapolis</a> - 
                            <a href="http://visitindy.com/" target="blank">Indianapolis, Indiana</a><div style="width:50px; display:inline-block;">&nbsp;</div>
                                <a target="_blank" href="http://splash2013.plaxogroups.com"><img border="0" alt="Plaxo" src="<?php echo $this->baseurl ?>/templates/splashcon_new/images/plaxo.png"></a>
                                <a target="_blank" href="http://www.facebook.com/pages/Splash-Conference/131028490283152"><img border="0" alt="Facebook" src="<?php echo $this->baseurl ?>/templates/splashcon_new/images/facebook.png"></a>
                                <a target="_blank" href="http://www.linkedin.com/groups?mostPopular=&amp;gid=2487082"><img border="0" src="<?php echo $this->baseurl ?>/templates/splashcon_new/images/linked-in.png"></a>
                                <a href="http://twitter.com/splashcon"><img width="24" border="0" height="24" alt="Twitter" src="<?php echo $this->baseurl ?>/templates/splashcon_new/images/twitter.png"></a>

                        </div>
                    </div>
                    <div id="divMenuRight" class="pull-right">
                    
                      
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse"> 
                        <jdoc:include type="modules" name="menu"/>
                        <?php /*
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown active"><a href="index.html">Home</a></li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Attending <b class="caret"></b></a>
                                    <ul class="dropdown-menu sub-menu">
                                    <li class="item208"><a href="/2013/attending/registering"><span>Registering</span></a></li><li class="item209"><a href="/2013/attending/getting-to-splash"><span>Getting to SPLASH</span></a></li><li class="item210"><a href="/2013/attending/while-at-splash"><span>While at SPLASH</span></a></li><li class="item266"><a href="/2013/attending/conference-facility-floor-plans"><span>Conference Facility Floor Plans</span></a></li></ul>
                                </li> 
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Schedule <b class="caret"></b></a>
                                    <ul class="dropdown-menu sub-menu">
                                    <li class="item253"><a href="/2013/schedule/saturday-oct-26"><span>Saturday (Oct 26)</span></a></li><li class="item256"><a href="/2013/schedule/sunday-oct-27"><span>Sunday (Oct 27)</span></a></li><li class="item257"><a href="/2013/schedule/monday-oct-28"><span>Monday (Oct 28)</span></a></li><li class="item259"><a href="/2013/schedule/tuesday-oct-29"><span>Tuesday (Oct 29)</span></a></li><li class="item264"><a href="/2013/schedule/wednesday-oct-30"><span>Wednesday (Oct 30)</span></a></li><li class="item260"><a href="/2013/schedule/thursday-oct-31"><span>Thursday (Oct 31)</span></a></li></ul>                                                
                                </li>   
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Program <b class="caret"></b></a>
                                    <ul class="dropdown-menu sub-menu">
                                    <li class="item287"><a href="/2013/program/general"><span>General</span></a></li><li class="item263"><a href="/2013/program/keynotes"><span>Keynotes</span></a></li><li class="item215"><a href="/2013/program/oopsla-research-papers"><span>OOPSLA Research Papers</span></a></li><li class="item222"><a href="/2013/program/onward-research-papers"><span>Onward! Research Papers</span></a></li><li class="item220"><a href="/2013/program/wavefront"><span>Wavefront</span></a></li><li class="item223"><a href="/2013/program/onward-essays"><span>Onward! Essays</span></a></li><li class="item221"><a href="/2013/program/wavefront-experience"><span>Wavefront Experience</span></a></li><li class="item227"><a href="/2013/program/dynamic-languages-symposium"><span>Dynamic Languages Symposium</span></a></li><li class="item233"><a href="/2013/program/international-conference-on-generative-programming-concepts-a-experiences"><span>International Conference on Generative Programming: Concepts &amp; Experiences</span></a></li><li class="item234"><a href="/2013/program/international-conference-on-software-language-engineering"><span>International Conference on Software Language Engineering</span></a></li><li class="item225"><a href="/2013/program/educator-symposium"><span>SPLASH-E (Education)</span></a></li><li class="item262"><a href="/2013/program/splash-i"><span>SPLASH-I</span></a></li><li class="item289"><a href="/2013/program/panels"><span>Panels</span></a></li><li class="item217"><a href="/2013/program/workshops"><span>Workshops</span></a></li><li class="item219"><a href="/2013/program/tutorials-tech-talks"><span>Tutorials &amp; Tech Talks</span></a></li><li class="item218"><a href="/2013/program/demonstrations"><span>Demonstrations</span></a></li><li class="item216"><a href="/2013/program/posters"><span>Posters</span></a></li><li class="item224"><a href="/2013/program/doctoral-symposium"><span>Doctoral Symposium</span></a></li><li class="item226"><a href="/2013/program/acm-student-research-competition"><span>ACM Student Research Competition</span></a></li></ul>
                                </li>   
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Call for Papers <b class="caret"></b></a>
                                    <ul class="dropdown-menu sub-menu">
                                    <li class="item255"><a href="/2013/cfp/due-august-01-2013"><span>Due August 01, 2013</span></a></li><li class="item276"><a href="/2013/cfp/due-july-12-2013"><span>Due July 12, 2013</span></a></li><li class="item270"><a href="/2013/cfp/due-july-05-2013"><span>Due July 05, 2013</span></a></li><li class="item254"><a href="/2013/cfp/due-july-01-2013"><span>Due July 01, 2013</span></a></li><li class="item238"><a href="/2013/cfp/due-june-28-2013"><span>Due June 28, 2013</span></a></li><li class="item235"><a href="/2013/cfp/due-june-14-2013"><span>Due June 14, 2013</span></a></li><li class="item243"><a href="/2013/cfp/due-june-08-2013"><span>Due June 08, 2013</span></a></li><li class="item250"><a href="/2013/cfp/due-june-01-2013"><span>Due June 01, 2013</span></a></li><li class="item249"><a href="/2013/cfp/due-april-10-2013"><span>Due April 10, 2013</span></a></li><li class="item245"><a href="/2013/cfp/due-april-05-2013"><span>Due April 05, 2013</span></a></li><li class="item229"><a href="/2013/cfp/due-march-28-2013"><span>Due March 28, 2013</span></a></li></ul>
                                </li>   
  





<!--
                                <li class="dropdown">
                                    <a href="page.html" class="dropdown-toggle">Page <b class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="#">Dropdown Item</a></li>
                                        <li><a href="#">Dropdown Item</a></li>
                                        <li><a href="#">Dropdown Item</a></li>
                                    </ul>
                                </li>                               -->
                            </ul>
                            */ ?>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
    <?php if ($isHomepage) : ?>
    
          
<div id="decorative1" style="position:relative">
    <div class="container">

        <div class="divPanel headerArea">
            <div class="row-fluid">
                <div class="span12">
    
                    <div id="headerSeparator"></div>

                    <div class="row-fluid">
                        <div class="span12">
                                
                            <jdoc:include type="modules" name="top-text"/>
                           

                        </div>
                        <!--
                        <div class="span6">
                            <div class="page-content divHeaderText">
                            <a href="index.html" id="divSiteTitle"><img src="./img/Splash_WebBanner-shadow.png" ></a>
                                
                            </div>
                        </div> -->

                        <!--
                        <div class="span6">

                            <div id="camera_wrap">
                                    <div data-src="img/Leobig.jpg" >
                                    <div style="position:absolute;bottom:10%;left:3%;padding:10px;width:50%;" class="fadeFromRight camera_effected camera_caption cap1">Leo A. Meyerovich explains how social adoption patterns can help language designers make new languages that are inherently attractive and desirable by developers.</div></div>
                                    <div data-src="img/BarbaraBIG.jpg" ><div style="position:absolute;bottom:10%;left:3%;padding:10px;width:50%;" class="fadeFromRight camera_effected camera_caption cap1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div></div>                                    <div data-src="img/Ryubig.jpg" ><div style="position:absolute;bottom:10%;left:3%;padding:10px;width:50%;" class="fadeFromRight camera_effected camera_caption cap1">Seonghoon Kang and Sukyoung Ryu propose a formal specification of a JavaScript module system. A module system for JavaScript will allow safe and incremental development of JavaScript web applications.</div></div>                                    <div data-src="img/Mebig.jpg" ><div style="position:absolute;bottom:10%;left:3%;padding:10px;width:50%;" class="fadeFromRight camera_effected camera_caption cap1">Mehrdad Afshari introduces prorogued programming, a new programming paradigm based on 3 principles: proroguing concerns, hybrid computation and executable refinement.</div></div>                                    <div data-src="img/Robbig.jpg" ><div style="position:absolute;bottom:10%;left:3%;padding:10px;width:50%;" class="fadeFromRight camera_effected camera_caption cap1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div></div>                                    <div data-src="img/Gregorbig.jpg" ><div style="position:absolute;bottom:10%;left:3%;padding:10px;width:50%;" class="fadeFromRight camera_effected camera_caption cap1">Gregor Richards introduces Evalorizer, a heuristics based tool which is meant to replace JavaScript eval constructs with safer JavaScript correspondents..</div></div>
                            </div>

                        </div>
                        -->
                    </div>

                    <div id="headerSeparator2"></div>
        
                </div>
            </div>
   
        </div>

    </div>
</div>

<?php
 endif;
?>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="row-fluid">

                <div class="span12" id="divMain">

                    <br />
                    
    <?php if( !$isHomepage ): ?>
          <jdoc:include type="message" />
					<jdoc:include type="component" />          
    <?php endif; ?>
                    
    <?php if ($isHomepage) : ?>
    
          
    
          
           
                    <div class="list_carousel responsive">
                       <jdoc:include type="modules" name="center"/>
                       
                    </div> 
					          
                    

                    <div class="row-fluid">
    
                        <div class="span9">
                           
                             <jdoc:include type="modules" name="center-left"/>
                           
                              <jdoc:include type="message" />
                    					<jdoc:include type="component" />
                                                                                                                 
                        </div>
                        <div class="span3 sidebar pull-right">
                             <jdoc:include type="modules" name="center-right"/>
                         
                           

                         

                        </div>
                    </div>
                    
        <?php endif; ?>
                    
                </div>
                <hr style="margin:45px 0 35px" />

    <?php if ($isHomepage) : ?>
                     <jdoc:include type="modules" name="center-bottom"/>
        <?php endif; ?>
                    

                  

        </div>

    </div>

    <div id="footerInnerSeparator"></div>
</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">

            <div class="row-fluid">
                 <jdoc:include type="modules" name="footer_1"/>
                 
                <!--<div class="span3" id="footerArea3">
                <h4>Lorem ipsum dolor sit amet</h3>
<p> Aenean sagittis felis risus, a elementum erat lobortis id. Morbi semper rhoncus turpis, sed fermentum erat pellentesque ac. Vestibulum aliquam dignissim orci a rhoncus. Morbi vehicula felis vitae ligula facilisis, quis tempus nunc pulvinar.</p>
<p>Proin tristique tincidunt lectus. Proin magna tellus, accumsan non massa sodales, iaculis tincidunt ipsum. Morbi id vulputate nisl, eget facilisis lacus.</p>
                </div>-->
                            
               
            </div>

            
        </div>

    </div>

</div>

    <div class="container">
            <br />
            <div class="row-fluid">
               <jdoc:include type="modules" name="footer"/>
            </div>
            <br />
    </div>

<script src="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/jquery.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/default.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/scripts/coin-slider.js" type="text/javascript"></script>

<script src="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="<?php echo $this->baseurl ?>/scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/splashcon_new/scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '65%', pagination: true });}$(function(){startCamera()});</script>

    <?php if( !$isHomepage ): ?>
 <script>

$( function () {

  $("table").each(function( index ) {
        $(this).addClass( "table table-bordered table-hover table-condensed" );
  });

  $("tr.bottom td").css( 'line-height', '1px' );
  $("tr.bottom td").css( 'height', '1px' );
  $("tr.bottom td").css( 'font-size', '1px' );
  $("tr.bottom td").css( 'padding', '0' );
  
  $("tr.calibration td").css( 'line-height', '1px' );
  $("tr.calibration td").css( 'height', '1px' );
  $("tr.calibration td").css( 'font-size', '1px' );
  $("tr.calibration td").css( 'padding', '0' );
    
});

 </script>
    <?php endif; ?>
</body>
</html>
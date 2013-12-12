<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <title>{JARVIS}Admin</title>
    <meta name="description" content="">
    <meta name="author" content="">
    
	<!-- http://davidbcalhoun.com/2010/viewport-metatag -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!--// OPTIONAL & CONDITIONAL CSS FILES //-->   
	<!-- date picker css -->
	<link rel="stylesheet" href="<?= base_url('static/css/datepicker3860.css?v=1');?>">
	<!-- full calander css -->
	<link rel="stylesheet" href="<?= base_url('static/css/fullcalendar3860.css?v=1');?>">
	<!-- data tables extended CSS -->
	<link rel="stylesheet" href="<?= base_url('static/css/TableTools3860.css?v=1');?>">
	<!-- custom/responsive growl messages -->
	<link rel="stylesheet" href="css/toastr.custom3860.css?v=1">
	<link rel="stylesheet" href="css/toastr-responsive3860.css?v=1">
	<link rel="stylesheet" href="css/jquery.jgrowl3860.css?v=1">
	
	<!-- // DO NOT REMOVE OR CHANGE ORDER OF THE FOLLOWING // -->
	<!-- bootstrap default css (DO NOT REMOVE) -->
	<link rel="stylesheet" href="css/bootstrap.min3860.css?v=1">
	<link rel="stylesheet" href="css/bootstrap-responsive.min3860.css?v=1">
	<!-- font awsome and custom icons -->
	<link rel="stylesheet" href="css/font-awesome.min3860.css?v=1">
	<link rel="stylesheet" href="css/cus-icons3860.css?v=1">
	<!-- jarvis widget css -->
	<link rel="stylesheet" href="css/jarvis-widgets3860.css?v=1">
	<!-- used where radio, select and form elements are used -->
	<link rel="stylesheet" href="css/uniform.default3860.css?v=1">
	<link rel="stylesheet" href="css/select23860.css?v=1">
	<!-- main theme files -->
	<link rel="stylesheet" href="css/theme3860.css?v=1">
	<link rel="stylesheet" href="css/theme-responsive3860.css?v=1">
    
	<!-- // THEME CSS changed by javascript: the CSS link below will override the rules above // -->
	<!-- For more information, please see the documentation for "THEMES" -->
    <link rel="stylesheet" id="switch-theme-js" href="css/themes/default3860.css?v=1">   
	
   	<!-- To switch to full width -->
    <link rel="stylesheet" id="switch-width" href="css/full-width3860.css?v=1">
    
	<!-- Webfonts -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300,400,700' type='text/css'>

	<!-- Print Invoice CSS -->
	<link rel="stylesheet" href="css/print-invoice.css">
	
	<!-- All javascripts are located at the bottom except for HTML5 Shim -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
   		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   		<script src="js/include/respond.min.js"></script>
   	<![endif]-->

	<!-- For everything else -->
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<!-- For retina screens -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicons/apple-touch-icon-retina.png">
	<!-- For iPad 1-->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicons/apple-touch-icon-ipad.png">
	<!-- For iPhone 3G, iPod Touch and Android -->
	<link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon.png">
	
	<!-- iOS web-app metas -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- Add your custom home screen title: -->
	<meta name="apple-mobile-web-app-title" content="Jarvis"> 

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">
	
  </head>

  <body>
  	<!-- .height-wrapper -->
	<div class="height-wrapper">
				
		<!-- header -->
		<header>
			<!-- tool bar -->
			<div id="header-toolbar" class="container-fluid">
				<!-- .contained -->
				<div class="contained">
					
					<!-- theme name -->
					<h1> <span class="hidden-phone">{JARVIS} - Smart Admin Template</span> </h1>
					<!-- end theme name -->
					
					<!-- span4 -->
					<div class="pull-right">
						<!-- demo theme switcher-->
						<div id="theme-switcher" class="btn-toolbar">
							
							<!-- search and log off button for phone devices -->
							<div class="btn-group pull-right visible-phone">
								<a href="javascript:void(0)" class="btn btn-inverse btn-small"><i class="icon-search"></i></a>
								<a href="login.html" class="btn btn-inverse btn-small"><i class="icon-off"></i></a>
							</div>
							<!-- end buttons for phone device -->
							
							<!-- theme dropdown -->
							<div class="btn-group hidden-phone">
								<a href="javascript:void(0)" class="btn btn-small btn-inverse" id="reset-widget"><i class="icon-refresh"></i></a>
								<a href="javascript:void(0)" class="btn btn-small btn-inverse dropdown-toggle" data-toggle="dropdown">Themes <span class="caret"></span></a>
								<ul id="theme-links-js" class="dropdown-menu toolbar pull-right">
									<li>
										<a href="javascript:void(0)" data-rel="purple"><i class="icon-sign-blank purple-icon"></i>Royal Purple</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-rel="blue"><i class="icon-sign-blank navyblue-icon"></i>Navy Blue</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-rel="green"><i class="icon-sign-blank green-icon "></i>Emerald</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-rel="darkred"><i class="icon-sign-blank red-icon "></i>Dark Rose</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-rel="default"><i class="icon-sign-blank grey-icon"></i>Default</a>
									</li>
								</ul>
							</div>
							<!-- end theme dropdown-->
							
						</div>
					  	<!-- end demo theme switcher-->
					</div>
					<!-- end span4 -->
				</div>
				<!-- end .contained -->
			</div>
			<!-- end tool bar -->
			
		</header>
		<!-- end header -->	
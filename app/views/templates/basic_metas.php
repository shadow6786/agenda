<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <title>Agenda AAA</title>
    <meta name="description" content="">
    <meta name="author" content="">
    
	<!-- http://davidbcalhoun.com/2010/viewport-metatag -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- date picker css -->
	<link rel="stylesheet" href="<?= cdn_url('datepicker3860.css');?>">
	<!-- full calander css -->
	<link rel="stylesheet" href="<?= cdn_url('fullcalendar3860.css');?>">
	<!-- data tables extended CSS -->
	<link rel="stylesheet" href="<?= cdn_url('TableTools3860.css');?>">
	<!-- bootstrap wysimhtml5 editor -->
	<link rel="stylesheet" href="<?= cdn_url('bootstrap-wysihtml53860.css');?>">
	<link rel="stylesheet" href="<?= cdn_url('wysiwyg-color.css');?>">
	<!-- custom/responsive growl messages -->
	<link rel="stylesheet" href="<?= cdn_url('toastr.custom3860.css');?>">
	<link rel="stylesheet" href="<?= cdn_url('toastr-responsive3860.css');?>">
	<link rel="stylesheet" href="<?= cdn_url('jquery.jgrowl3860.css');?>">
	
	<!-- // DO NOT REMOVE OR CHANGE ORDER OF THE FOLLOWING // -->
	<!-- bootstrap default css (DO NOT REMOVE) -->
	<link rel="stylesheet" href="<?= cdn_url('bootstrap.min3860.css');?>">
	<link rel="stylesheet" href="<?= cdn_url('bootstrap-responsive.min3860.css');?>">
	<!-- font awsome and custom icons -->
	<link rel="stylesheet" href="<?= cdn_url('font-awesome.min3860.css');?>">
	<link rel="stylesheet" href="<?= cdn_url('cus-icons3860.css');?>">
	<!-- jarvis widget css -->
	<link rel="stylesheet" href="<?= cdn_url('jarvis-widgets3860.css');?>">
	<!-- Data tables, normal tables and responsive tables css -->
	<link rel="stylesheet" href="<?= cdn_url('DT_bootstrap3860.css');?>">
	<link rel="stylesheet" href="<?= cdn_url('responsive-tables3860.css');?>">
	<!-- used where radio, select and form elements are used -->
	<link rel="stylesheet" href="<?= cdn_url('uniform.default3860.css');?>">
	<link rel="stylesheet" href="<?= cdn_url('select23860.css');?>">
	<!-- main theme files -->
	<link rel="stylesheet" href="<?= cdn_url('theme3860.css');?>">
	<link rel="stylesheet" href="<?= cdn_url('theme-responsive3860.css');?>">
    
	<!-- // THEME CSS changed by javascript: the CSS link below will override the rules above // -->
	<!-- For more information, please see the documentation for "THEMES" -->
    <link rel="stylesheet" id="switch-theme-js" href="<?= cdn_url('themes/blue.css');?>">   
	
   	<!-- To switch to full width -->
    <link rel="stylesheet" id="switch-width" href="<?= cdn_url('full-width3860.css');?>">
    
	<!-- Webfonts -->
	<!-- <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300,400,700' type='text/css'> -->

	<!-- Print Invoice CSS -->
	<link rel="stylesheet" href="<?= cdn_url('print-invoice.css');?>">
	
	<!-- All javascripts are located at the bottom except for HTML5 Shim -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
   		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   		<script src="js/include/respond.min.js"></script>
   	<![endif]-->

	<!-- For everything else -->
	<link rel="shortcut icon" href="<?= cdn_base('favicons/favicon.ico');?>">
	<!-- For retina screens -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= cdn_url('favicons/apple-touch-icon-retina.png');?>">
	<!-- For iPad 1-->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= cdn_url('favicons/apple-touch-icon-ipad.png');?>">
	<!-- For iPhone 3G, iPod Touch and Android -->
	<link rel="apple-touch-icon-precomposed" href="<?= cdn_url('favicons/apple-touch-icon.png');?>">
	
	<!-- iOS web-app metas -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- Add your custom home screen title: -->
	<meta name="apple-mobile-web-app-title" content="Jarvis"> 

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="<?= cdn_url('splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)');?>">
	<link rel="apple-touch-startup-image" href="<?= cdn_url('splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)');?>">
	<link rel="apple-touch-startup-image" href="<?= cdn_url('splash/iphone.png" media="screen and (max-device-width: 320px)');?>">
	<link rel="stylesheet" href="<?= cdn_url('mystyle.css');?>">
	<script src="<?= cdn_url('libs/jquery.min.js');?>"></script>
<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
  	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
  		Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	
	<title><?=$title?></title>
	<meta name="description" 	content="">
	<meta name="author" 		content="Serkan Sökmen">
  	
	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	
	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" 		href="favicon.ico">
	<link rel="apple-touch-icon" 	href="apple-touch-icon.png">
  	
	<!-- CSS : implied media="all" -->
	<link rel="stylesheet" href="<?php echo base_url().CSS_FOLDER; ?>style.css?v=2">
	<!-- CSS : implied media="all" -->
	<link rel="stylesheet" href="<?php echo base_url().CSS_FOLDER; ?>site.css?v=2">
	
	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="<?php echo base_url().JSLIB_FOLDER; ?>modernizr-1.7.min.js"></script>
	
</head>

<body>
	<div id="wrapper">
		<?php if (strlen($this->config->item('index_page')) > 0): ?>
		<a href="<?php echo $this->config->item('index_page').'/home'; ?>">
		<?php else: ?>
		<a href="<?php echo '/home'; ?>">
		<?php endif ?>
    		<header></header>
    	</a>
		<div id="content">
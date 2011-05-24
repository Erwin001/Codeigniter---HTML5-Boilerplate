<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 9]>      <html class="no-js oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="shortcut icon" href="/favicon.ico">


	<!-- CSS: implied media="all" -->
	<link rel="stylesheet" href="<?php echo base_url().FOLDER_CSS; ?>style.css?v=2">

	<!-- Uncomment if you are specifically targeting less enabled mobile browsers
	<link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="<?php echo base_url().FOLDER_JSLIB; ?>modernizr-1.7.min.js"></script>
	<script src="<?php echo base_url().FOLDER_JSLIB; ?>respond.min.js"></script>

</head>

<body>
	<div id="container">
		<header>

		</header>
		<div id="main" role="main">
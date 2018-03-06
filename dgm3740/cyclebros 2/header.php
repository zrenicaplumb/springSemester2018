<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cyclebros: <?php wp_title ();?></title>
		 
		 <link rel="stylesheet" type="text/css" href="style.css">
		 
		 <?php remove_filter( 'the_content', 'wpautop' ); ?>

		<link href="img/favicon.png" type="img/png" rel="icon">


		
		<link href="scss/main.css" type="text/css" rel="stylesheet">
		<link href="css/reset.css" type="text/css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700,300' rel='stylesheet' type='text/css'>
		<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging whena phone is turned sideways-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- LOAD THE LATEST VERSION OF JQUERY-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
		
	</head>
	<body>
		
		<div class="container">
			<div class="header-div">

				<!-- <img class="logo2" src="img/logo2.png"> -->
				<h1>Road Warriors</h1>
				<nav class="nav">
					<?php wp_nav_menu(); ?>
				</nav>
			</div>
		<main>
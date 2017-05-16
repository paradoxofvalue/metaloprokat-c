<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><? if(is_home()) echo 'Home'; else wp_title(); ?> | <? bloginfo('name'); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<? wp_title(); ?>">
	    	<meta name="author" content="<? bloginfo('name'); ?>">
	    
	    	<? wp_head(); ?>

		<!--[if lte IE 8]><script src="<? echo THEME_DIR; ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<? echo THEME_DIR; ?>/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="<? echo THEME_DIR; ?>/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<? echo THEME_DIR; ?>/assets/css/ie8.css" /><![endif]-->

<link rel="stylesheet" href="<? echo THEME_DIR; ?>/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<? echo THEME_DIR; ?>/assets/css/owl.theme.default.min.css">
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="<? echo get_home_url();?>" class="logo">
									<span class="symbol"><img src="http://localhost/custom/wp-content/uploads/2017/03/metalloprokat-logo-1.png" alt="" /></span><span class="title"><? bloginfo('name'); ?></span>
								</a>

<div class="6u pull-right"><? wp_nav_menu( array( 'menu' => 'mainpage', 'container' => '', 'container_id' => 'menu' ));?></div>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Навигация</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->			
					<nav id="menu">
						<h2>Навигация</h2>
						<ul>
							<? wp_nav_menu( array( 'menu' => 'main_menu', 'container' => '', 'container_id' => 'menu' ));?>
						</ul>
					</nav>
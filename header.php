<!DOCTYPE html>
<html class="not-ie no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Home - SmartStart</title>
	<?php wp_head(); ?>
</head>
<body>

<header id="header" class="container clearfix">

	<a href="<?php home_url();?>" id="logo">
		<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="SmartStart">
	</a>

	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_id' => 'main-nav' , 'container' => 'nav' ) ); ?>

	<!-- end header nav -->	
	
</header><!-- end #header -->

<section id="content" class="container clearfix">
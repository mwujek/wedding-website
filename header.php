<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
	<title>Masterwuj — Alex & Matt's Wedsite</title>
	<!-- <link rel="shortcut icon" href="//www.scoot.co/bolt-sm.ico?v=1" /> -->

	<!-- TYPEKIT -->
	<link rel="stylesheet" href="https://use.typekit.net/hla7uct.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/wuj-base-style.css">
	
	<!-- variables for urls -->
   
	<?php wp_head(); ?>	

    
</head>


<body>
	
	

		<header class="white-header">
			
				<a href="/" class="logo-link">
					<h1><?php echo $TEMPLATEURL; ?></h1>
					<img src="<?php echo $TEMPLATEURL; ?>/img/svg-logo.svg">
				</a>
					
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'nav_main', 'container' => false ) ); ?>
				</nav>
			
		</header>
	

		
		<section id="main_section">
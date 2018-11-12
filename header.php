<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
	<title>Masterwuj — Alex & Matt's Wedsite</title>
	<!-- <link rel="shortcut icon" href="//www.scoot.co/bolt-sm.ico?v=1" /> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- TYPEKIT -->
	<link rel="stylesheet" href="https://use.typekit.net/hla7uct.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/wuj-base-style.css">
	
	<!-- variables for urls -->
   
	<?php wp_head(); ?>	

<style type="text/css">
	html{margin-top: 0 !important;}
</style>    
</head>


<body>
	

<header>
	<div class="header-inner">

		<a href="/" class="logo-link">Alex & Matt</a>
			
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'nav_main' ) ); ?>
		</nav>

		<a id="mobile-menu" href="#footer">Menu</a>
	</div>
				
</header>
	

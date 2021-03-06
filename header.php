<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<div class="disclaimer">
		<?php
		$disclaimer_id = stripslashes(get_option('disclaimer_id'));
		// We only want the home page here
		$query = new WP_Query( 'page_id=' . $disclaimer_id );
		if ( $query -> have_posts() ) :

			/* Start the Loop */
			while ( $query -> have_posts() ) : $query -> the_post();

				get_template_part( 'content-disclaimer', get_post_format() );

			endwhile;
		endif;
		?>
	</div>

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">


				<div id="inner-header" class="wrap cf frame">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>

					<div id="site-ident">
						<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><!-- <i class="icon-cogs logo-icon"></i> -->
						<a href="<?php echo home_url(); ?>" rel="nofollow"><?php /*bloginfo('name');*/ ?>Neu<span class='r-span'>r</span>on</a></p>
						
						<?php // if you'd like to use the site description you can un-comment it below ?>
						<p id="strap"><?php bloginfo('description'); ?></p>
					</div>
				</div>

				<div class="sticky">
					<div class="wrap cf frame">	
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
	    					         'container' => false,                           // remove nav container
	    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
	    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
	    					         'theme_location' => 'main-nav',                 // where it's located in the theme
	    					         'before' => '',                                 // before the menu
	        			               'after' => '',                                  // after the menu
	        			               'link_before' => '',                            // before each link
	        			               'link_after' => '',                             // after each link
	        			               'depth' => 0,                                   // limit the depth of the nav
	    					         'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>

						</nav>
					</div>
					<div id="nav-link">
						
						<a href="#bottom-nav"><i class="icon-chevron-down"></i></a>

					</div>
				</div>
			</header>

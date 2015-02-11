<?php get_header(); ?>

<div id="content">

	<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<div id="inner-content" class="wrap cf">

			<div class="frame">

				<div class="presentation">
					
					<?php $presentation = stripslashes(get_option('home-present')); ?>

				<p><?php echo $presentation; ?></p>	

				</div><!-- end presentation -->

			</div><!-- end frame -->

		</div><!-- end inner-content wrap -->

		<div class="col-wrap cf"><!-- this is for the full-width colour change -->
			<div class="wrap" id='feature-boxes'>
				<span>Our Methodology</span>
				<div class="frame">
					<div class="bit-2 feature-box top">
						<h2><i class="icon-rocket feature-icon"></i>Bespoke Designs</h2>
							<p>Strategies are designed to be bespoke to the investors needs, reflecting their existing investments and risk exposures.</p>
					</div><!-- end bit-2 -->
					<div class="bit-2 feature-box top">
						<h2><i class="icon-magnet feature-icon"></i>Forward-Looking Risk</h2>
						<p>By exploiting the power that design choices give us we provide extensive forward looking scenario analysis that shows investors exactly what they can expect in the future, not asking them to rely on a single history of past or simulated performance.</p>
					</div><!-- end bit-2 -->

				</div><!-- end frame -->
				<div class="frame">
					<div class="bit-2 feature-box bottomw">
						<h2><i class="icon-key feature-icon"></i>Awareness of Systemic Risks</h2>
						<p>In an increasingly commoditized and rule-based investment world, new risks are arising from the potential herd like algorithmic behaviour of participants. We build in an awareness of these risk into our models. </p>
					</div><!-- end bit-2 -->
					<div class="bit-2 feature-box bottom">
						<h2><i class="icon-asterisk feature-icon"></i>Unique Research Focus</h2>
						<p>We emphasise that market structures and influences of regulators are constantly shifting the sands, and so our research emphasis is much more oriented to constructive analysis, as opposed to the never ending torture of the limited historical data at our disposal. We believe this gives us a genuinely fresh approach and provides unique insights.</p>
					</div><!-- end bit-2 -->
				</div><!-- end frame -->

				</div><!-- end frame -->
			</div><!-- end wrap -->
		</div><!-- end col-wrap -->

		<div class="wrap" id='feature-boxes'>
			<div class="frame">
				<div class="bit-60 home-text entry-content">
					<h2>About Us</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/rob.jpg" alt="" class="alignleft">
						<p>Founded in 2014 by Robert Hillman, the team at Neuron are experts in the design process and we aim to determine investor requirements and deliver a bespoke product.</p>
						<nav class="dark-brackets">
							<a href="#">Meet The Team</a>
						</nav>
				</div>
				<div class="bit-40 home-text entry-content">
					<h2>Our Research</h2>
					<p>We are constantly refining our research and pushing the envelope - visit our blog for the latest in our cutting-edge writing.</p>
					<nav class="light-brackets">
						<a href="#">Visit Blog</a>
					</nav>
				</div>
			</div>
		</div>

	</main>

	<div class="wrap cf frame" id="bottom-nav">	
		<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php wp_nav_menu(array(
			         'container' => false,                           // remove nav container
			         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
			         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
			         'menu_class' => 'nav mobile-nav cf',               // adding custom nav class
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

</div><!-- end content -->

</div>


<?php get_footer(); ?>

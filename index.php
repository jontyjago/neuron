<?php get_header(); ?>

<?php 
// Get the page ids
$present_id = stripslashes(get_option('present_id'));
$about_id = stripslashes(get_option('about_id'));
$contact_id = stripslashes(get_option('contact_id'));
$research_id = stripslashes(get_option('research_id'));
$home_posts = stripslashes(get_option('home_posts'));

?>

<div id="content">

	<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<div id="inner-content" class="wrap cf">

			<div class="frame">

				<div class="presentation bit-1">
					
					<?php
					// We only want the home page here
					$query = new WP_Query( 'page_id=' . $present_id );
					if ( $query -> have_posts() ) :

						/* Start the Loop */
						while ( $query -> have_posts() ) : $query -> the_post();

							get_template_part( 'content-presentation', get_post_format() );

						endwhile;
					endif;
					?>

				</div><!-- end presentation -->

			</div><!-- end frame -->

		</div><!-- end inner-content wrap -->

		<div class="col-wrap cf"><!-- this is for the full-width colour change -->
			<div class="wrap" id='methodology'>
				<!-- <span>Our Methodology</span> -->
					<?php 
					$args = array(
						'posts_per_page' => '4',
						'post_type' => 'methodology',
						);

			 		$query = new WP_Query( $args );

					if ( $query -> have_posts() ) :

						// Loop through the available records
						while ( $query -> have_posts() ) : $query -> the_post();

							$icon = get_post_meta(get_the_id(), 'neuron_icon', true);

							if ( $query->current_post < 2 ) {
								$position = 'bit-2 feature-box top';
							}
							else {
								$position = 'bit-2 feature-box bottom';
							}

							if ( $query->current_post % 2 == 0 ) { ?> <!-- it's even, start of line -->
								<div class="frame">
									<div class="<?php echo $position; ?>">
										<h2><i class="<?php echo $icon; ?> feature-icon"></i><?php the_title(); ?></h2>
											<?php the_content(); ?>
									</div><!-- end bit-2 -->
								<?php }
							else { //it's odd, end of line ?>
									<div class="<?php echo $position; ?>">
										<h2><i class="<?php echo $icon; ?> feature-icon"></i><?php the_title(); ?></h2>
											<?php the_content(); ?>
									</div><!-- end bit-2 -->
								</div><!-- end frame --> 
							<?php }

						endwhile;

					endif; ?>

			</div><!-- end wrap -->
		</div><!-- end col-wrap -->


		
		<div class="wrap" id='research'>
			<div class='frame'>
				<div class="bit-1 home-text">
					<?php
					// We only want the research page here
					$query = new WP_Query( 'page_id=' . $research_id );
					if ( $query -> have_posts() ) :
				
						/* Start the Loop */
						while ( $query -> have_posts() ) : $query -> the_post();
				
							get_template_part( 'content-research', get_post_format() );
				
						endwhile;
					endif;

					$args = array(
						'posts_per_page' => $home_posts,
						);

			 		$query = new WP_Query( $args );

					if ( $query -> have_posts() ) :

						// Loop through the available records
						while ( $query -> have_posts() ) : $query -> the_post(); ?>
							<div class="<?php echo 'bit-' . $home_posts; ?>">
								<?php get_template_part( 'content-latest-posts', get_post_format() ); ?>
							</div>
						<?php endwhile;
					endif;


					?>
				</div>
			</div>
		</div>

		<div class="col-wrap cf">
			<div class="wrap" id='about'>
				<div class="frame">
					<div class="bit-1 home-text">
						<?php
						// We only want the about page here
						$query = new WP_Query( 'page_id=' . $about_id );
						if ( $query -> have_posts() ) :

							/* Start the Loop */
							while ( $query -> have_posts() ) : $query -> the_post();

								get_template_part( 'content-about', get_post_format() );

							endwhile;
						endif;
						?>
					</div><!-- end bit1-->
				</div>
			</div>
		</div>

		<div class="wrap">
			<div class="frame" id='contact'>
				
				<div class="bit-1">
					<?php
					// We only want the contact page here
					$query = new WP_Query( 'page_id=' . $contact_id );
					if ( $query -> have_posts() ) :
					
						/* Start the Loop */
						while ( $query -> have_posts() ) : $query -> the_post();
					
							get_template_part( 'content-contact', get_post_format() );
					
						endwhile;
					endif;
					?>
				</div><!-- end bit-1 -->

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

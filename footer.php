			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf frame">

					<div class="bit-3">
						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => '',                              // remove nav container
	    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
	    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
	    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
	    					'theme_location' => 'footer-links',             // where it's located in the theme
	    					'before' => '',                                 // before the menu
	        			'after' => '',                                  // after the menu
	        			'link_before' => '',                            // before each link
	        			'link_after' => '',                             // after each link
	        			'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
					</div><!-- end bit3 -->
					
					<div class="bit-3 footer-text">
						<!-- <a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-linkedin-sign"></i></a> -->
						<?php get_template_part('content-contact-static'); ?>
					</div><!-- end bit3 -->

					<div class="bit-3 footer-text">
						<p id="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
						<p id="site-by">Site by <a href="http://www.jontyjago.com">Jonathan Evans</a> </p>
					</div><!-- end bit3 -->

				</div><!-- end inner-footer frame -->

				<div class="wrap cf frame">
					<div class="bit-1" id="disclaimer-foot">
						<p>The information on this website does not constitute the provision of investment advice or an offer for sale. Please read the <a href="<?php echo home_url(). '/disclaimer'; ?>">full disclaimer</a>.</p>
					</div><!-- end disclaimer -->
				</div><!-- end frame -->
			
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->

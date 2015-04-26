<!-- no p tag here as Wordpress adds them -->

	<div class='container frame wrap cf'>
		
		<div class="bit-1">

			<div id="site-ident">
				<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><!-- <i class="icon-cogs logo-icon"></i> -->
				<a href="<?php echo home_url(); ?>" rel="nofollow"><?php /*bloginfo('name');*/ ?>Neu<span class='r-span'>r</span>on</a></p>
				
				<?php // if you'd like to use the site description you can un-comment it below ?>
				<p id="strap"><?php bloginfo('description'); ?></p>
			</div>
		
			<div class="disclaimer-text">
				<?php the_content(); ?>
			</div>
		
		<!-- 	</div>
		<div class="bit-30"> -->
		</div>
		<div class="ok-button primary-btn"><a href="#">Accept &amp Continue to Site</a></div>
	</div>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
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

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> University of Florida College of Engineering</p>

				</div>

			</footer>



		</div>

		<?php if ( is_page_template( 'page-landing.php' ) ) { ?>
			<div class="bodybg"> 
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/background-photo.jpg" src-set="<?php echo get_template_directory_uri(); ?>/library/images/background-photo-mobile-devices.jpg 500w, <?php echo get_template_directory_uri(); ?>/library/images/background-photo.jpg 1000w, <?php echo get_template_directory_uri(); ?>/library/images/background-photo.jpg 2000w" alt="" /> 
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/library/images/background-photo-mobile-devices.jpg" alt="" />  -->
			</div> 
		<?php } ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->

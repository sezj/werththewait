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

					<a href="https://eng.ufl.edu" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/coe-logo.png" class="coe-logo" alt="University of Florida College of Engineering" title="University of Florida College of Engineering" /></a>

					<a href="https://eng.ufl.edu" class="icon-gator-engineering" title="Gator Engineering"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ge-logo.png" class="ge-logo" alt="University of Florida College of Engineering" title="University of Florida College of Engineering" /></a>

				</div>

			</footer>



		</div>

		<?php if ( is_page_template( 'page-landing.php' ) ) { ?>
			<div class="bodybg"> 
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/library/images/background-photo-sm.jpg" src-set="<?php echo get_template_directory_uri(); ?>/library/images/background-photo-sm.jpg 500w, <?php echo get_template_directory_uri(); ?>/library/images/background-photo-med.jpg 1000w, <?php echo get_template_directory_uri(); ?>/library/images/background-photo-lg.jpg 2000w" alt="" />  -->
			</div> 
		<?php } ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->

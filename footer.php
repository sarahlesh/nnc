<?php
/**
 * The template for displaying the footer.
 *
 */
?>

<footer id="site_footer">

  <div class="row footer_widget_wrap">

  	<div class="large-4 columns footer_widget">

		<?php if ( is_active_sidebar( 'footer_sidebar-1' ) ) { dynamic_sidebar( 'footer_sidebar-1' ); } ?>

	</div><!-- .large-4 .footer_widget -->


  	<div class="large-4 columns footer_widget">

		<?php if ( is_active_sidebar( 'footer_sidebar-2' ) ) { dynamic_sidebar( 'footer_sidebar-2' ); } ?>

	</div><!-- .large-4 .footer_widget -->


  	<div class="large-4 columns footer_widget" id="newsletter">

		<?php if ( is_active_sidebar( 'footer_sidebar-3' ) ) { dynamic_sidebar( 'footer_sidebar-3' ); } ?>

	</div><!-- .large-4 .footer_widget -->

  </div><!-- .row .footer_widget_wrap -->
    
  </div><!-- .footer_social -->

  <div class="footer_copyright">
    <div class="row">

      <div class="large-6 columns copyright">
        <span>
			<?php printf( __( '%s', 'rescue' ), wp_kses_post( get_theme_mod('footer_copyright') ) ); ?>
        </span>
      </div><!-- .large-6 .copyright -->

      <div class="large-6 columns footer_menu">

			<?php 
				$defaults = array(
			        'theme_location' => 'footer',
			        'container' => false,
			        'menu_class' => '',
			        'depth' => 5,
			        'fallback_cb' => false,
			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'walker' => new foundation_walker()
				);

				wp_nav_menu( $defaults );
			?>

      </div><!-- .large-6 .footer_menu -->

    </div><!-- .row -->
    
  </div><!-- .footer_copyright -->

</footer><!-- .site_footer -->

<?php wp_footer(); ?>

</body>
</html>
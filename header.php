<?php
/**
 * The Header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="shortcut/icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/NNC_favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="top_header_wrap contain-to-grid">
  
  <div class="row">

    <div class="large-12 columns">

    <div class="logo">

      <?php $header_logo = get_theme_mod( 'header_logo' ); if ( !$header_logo ) { ?>

      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

      <?php } else { ?>

        <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php bloginfo('name'); ?>"></a>

      <?php } // end logo ?>

    </div><!-- .logo -->

    <!-- Top Nav -->
      <nav class="top_mini_nav clearfix" data-topbar>
        <section class="top-bar-section">

  			<?php 
  				$defaults = array(
  			        'theme_location'  => 'header_top',
  			        'container'       => false,
  			        'menu_class'      => 'left top_nav',
  			        'depth'           => 5,
  			        'fallback_cb'     => false,
  			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  			        'walker'          => new foundation_walker()
  				);

  				wp_nav_menu( $defaults );
  			?>

        </section><!-- .top-bar-section -->
      </nav><!-- .top_mini_nav -->

  </div><!-- .large-12 -->

  </div><!-- .row -->

</div><!-- .top_header_wrap -->

<div class="bottom_header_wrap .contain-to-grid">

  <div class="row flex-container">

  <?php // Fill variable with dontation button choice
    $button_show = get_theme_mod( 'donation_button_show' ); ?>

    <!-- Bottom Nav -->
    <div class="nav">
      <nav class="top-bar" data-topbar data-options="mobile_show_parent_link: true; is_hover: true">

      <section class="top-bar-section">

			<?php 
				$defaults = array(
			        'theme_location'  => 'header_bottom',
			        'container'       => false,
			        'menu_class'      => 'flex-container bottom_nav',
			        'depth'           => 5,
			        'fallback_cb'     => false,
			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'walker'          => new foundation_walker()
				);

				wp_nav_menu( $defaults );
			?>

          </section><!-- .top-bar-section -->

      </nav><!-- .top-bar -->

    </div><!-- large-9 or large-12 -->

    <?php if ( $button_show == '1' ) : // check if we want donate button visible 
      $donate_button_animate = get_theme_mod( 'donate_button_animate' );
    ?>

    <!-- Donation Button -->
    <div class="donation-btn-header">

      <div class="donation_button">
        <a href="<?php echo esc_url( get_theme_mod( 'donation_button_link', '#' ) ); ?>" class="button large <?php if ( $donate_button_animate != 'none' ) { echo 'wow '; echo $donate_button_animate; };  ?>" >
          <?php printf( __( '%s', 'rescue' ), esc_attr( get_theme_mod('donate_button_text', 'Donate Now' ) ) ); ?>
        </a>
      </div><!-- .donation_button -->
      
    </div><!-- .large-3 -->

  <?php endif; // donate button check ?>

  </div><!-- .row -->

</div><!-- .bottom_header_wrap -->

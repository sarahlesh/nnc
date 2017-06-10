<?php
/**
   * Template Name: Front Page
   */

get_header(); ?>

<?php $img = get_the_post_thumbnail_url(721); ?>
<div class="hero flex-container" style="background:url(<?php echo $img ?>)">
  <div class="hero-content">
    <h2><?php the_field("header_title") ?></h2>
    <div class="flex-container">
      <div class="hero-cta-container">
        <a href="<?php the_field('call_to_action_button_1_link') ?>" class="hero-cta"><?php the_field('call_to_action_button_1_text') ?></a>
        <p><?php the_field('description_button_1') ?></p>
      </div>

      <div class="hero-cta-container">
        <a href="<?php the_field('call_to_action_button_2_link') ?>" class="hero-cta"><?php the_field('call_to_action_button_2_text') ?></a>
        <p><?php the_field('description_button_2') ?></p>
      </div>
    </div>
  </div>

  

</div> <!-- end .hero_slider -->

<div class="main_content_wrap">


  <!-- News Area -->
  <?php if ( get_theme_mod('home_news_show') ) { 
    $home_news_animation = get_theme_mod( 'home_news_animation' );
  ?>

  <div class="home_latest_news clearfix <?php if ( $home_news_animation != 'none' ) { echo 'wow '; echo $home_news_animation; };  ?>">

    <div class="row">

      <div class="large-12 columns">

        <h3>
            <?php printf( __( '%s', 'rescue' ), esc_attr( get_theme_mod('home_news_title', customizer_library_get_default( 'home_news_title' ) ) ) ); ?>
        </h3>

      </div><!-- .large-12 -->

    </div><!-- .row -->

      <?php 
        $home_blog_num = get_theme_mod('home_blog_num') ;
        $home_blog_category = get_theme_mod( 'home_blog_category' );

        $formats = new WP_Query( array( // Display most recent standard posts
      		'posts_per_page' => esc_attr( $home_blog_num ),
          'category_name' => esc_attr( $home_blog_category ),
      		'tax_query' => array(
      		  	array(
      		  	'taxonomy' => 'post_format',
      			  'field'    => 'slug',
      		  	'terms'    => array( 
                            'post-format-link', 
                            'post-format-aside', 
                            'post-format-gallery', 
                            'post-format-status', 
                            'post-format-quote', 
                            'post-format-chat', 
                            'post-format-image' ),
      		    'operator' => 'NOT IN',
      		  ))
          )
        );

      	if( $formats->have_posts() ) : while( $formats->have_posts() ) : $formats->the_post(); ?>

      <div class="row home_post">

        <div class="large-3 columns">

          <hr>

      		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

        </div><!-- .large-3 -->

        <div class="large-9 columns">

    		  <?php the_excerpt(); ?>

        </div><!-- .large-9 -->

      </div><!-- .row -->

  <?php endwhile; endif; wp_reset_postdata(); // end most recent standard post ?>

  </div><!-- .home_latest_news -->

    <div class="row home-latest-news-button">
    
    <?php if ( get_theme_mod('home_news_link') ) { ?>

      <div class="small-12 columns">
        <a href="<?php echo esc_url( get_theme_mod('home_news_link') ); ?>" class="button tiny radius right">
          <?php printf( __( '%s', 'rescue' ), esc_attr( get_theme_mod( 'home_news_button_text', customizer_library_get_default( 'home_news_button_text' ) ) ) ); ?>
        </a>
      </div><!-- .small-12 -->

    <?php } // end blog button link check ?>

    </div><!-- .row -->

  <?php } // end check for latest news area show ?>

  <?php get_sidebar() ?>

</div><!-- .main_content_wrap -->

<?php get_footer(); ?>
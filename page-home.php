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
        <a href="<?php the_field('call_to_action_button_1_link') ?>" class="hero-cta cta-first"><?php the_field('call_to_action_button_1_text') ?></a>
        <p><?php the_field('description_button_1') ?></p>
      </div>

      <div class="hero-cta-container">
        <a href="<?php the_field('call_to_action_button_2_link') ?>" class="hero-cta cta-second"><?php the_field('call_to_action_button_2_text') ?></a>
        <p><?php the_field('description_button_2') ?></p>
      </div>
    </div>
  </div>

  

</div> <!-- end .hero_slider -->
<div class="wrapper flex-container">
  <!-- News Area -->
  <div class="home_latest_news">
    <?php 
        query_posts(array( 
            'post_type' => 'post',
             'posts_per_page'=> 3, 
        ) );  
    ?>
    <?php while (have_posts()) : the_post(); ?>

     <article class="flex-container">
        <?php if (get_the_post_thumbnail()): ?>
           <div class="post-image">
           <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
             
           </div>
        <?php endif ?>
       <div class="post-content">
        <a href="<?php the_permalink() ?>">
         <h4><?php the_title() ?></h4>
        </a>
          <?php the_excerpt() ?>
         <a class="read-more" href="<?php the_permalink() ?>">
         Read More >
         </a>
       </div>
     </article>

    <?php endwhile; ?>

    <a class="latest-news-more" href="<?php echo get_template_directory_uri() ?>/news">See all news</a> 

  </div><!-- .row -->
  <div class="sidebar">
    <?php get_sidebar() ?>
  </div>
</div><!-- .main_content_wrap -->

<?php get_footer(); ?>
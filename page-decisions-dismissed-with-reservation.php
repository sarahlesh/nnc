<?php
/**
   * Template Name: Decisions - Dismissed with Reservation
   */
get_header(); ?>

<div id="primary" class="content-area complaints-cat">

  <div class="row" role="main">


		<main id="main" class="site-main" role="main">
		<h1><?php the_title(); ?></h1>

		<?php 
		    query_posts(array( 
		        'post_type' => 'decisions',
		        'posts_per_page'=> 99999999999999999,
		        'tax_query' => array(
		             array (
		                 'taxonomy' => 'category',
		                 'field' => 'slug',
		                 'terms' => 'dismissed-with-reservation',
		             )
		         ),
		    ) );  
		?>
		<div class="complaint-container">
		<?php while (have_posts()) : the_post(); ?>
			<article class="complaint flex-container">
				<h4><?php the_title() ?></h4>
				<a class="button" href="<?php the_permalink() ?>">Read More ></a>
			</article>
		<?php endwhile; ?>
		</div>

		</main><!-- #main -->


  </div><!-- .row -->

</div><!-- #primary -->

<?php get_footer(); ?>
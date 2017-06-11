<?php
/**
   * Template Name: Decisions - Resolved due to corrective action
   */
get_header(); ?>

<div id="primary" class="content-area complaints-cat">

  <div class="row" role="main">


		<main id="main" class="site-main" role="main">
		<h1><?php the_title(); ?></h1>

		<?php @include('decisions-search.php') ?>

		<?php 
		    query_posts(array( 
		        'post_type' => 'decisions',
		        'posts_per_page'=> 99999999999999999,
		        'tax_query' => array(
		             array (
		                 'taxonomy' => 'category',
		                 'field' => 'slug',
		                 'terms' => 'resolved-due-to-corrective-action-taken',
		             )
		         ),
		    ) );  
		?>
		<div class="complaint-container">
		<?php if(have_posts()) : 
		while (have_posts()) : the_post(); ?>
			<article class="complaint flex-container">
				<h4><?php the_title() ?></h4>
				<a class="button" href="<?php the_permalink() ?>">Learn More ></a>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<p>No decisions to display</p>
		<?php endif; ?>
		</div>

		</main><!-- #main -->


  </div><!-- .row -->

</div><!-- #primary -->

<?php get_footer(); ?>
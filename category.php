<?php

get_header(); ?>

<div id="primary" class="content-area complaints-cat">

  <div class="row" role="main">


		<main id="main" class="site-main" role="main">
		<h1>Category: <?php single_cat_title() ?></h1>
		
		<?php @include('decisions-search.php') ?>

		<div class="complaint-container">
		<?php while (have_posts()): the_post(); ?>
			<article class="complaint flex-container">
			
				<h4><?php the_title() ?></h4>
				<a class="button" href="<?php the_permalink() ?>">Learn More ></a>
			</article>
		<?php endwhile; ?>
		</div> 

		</main><!-- #main -->


  </div><!-- .row -->

</div><!-- #primary -->

<?php get_footer(); ?>
<?php
/**
   * Template Name: How to File a complaint with us
   */
get_header(); ?>

<div id="primary" class="content-area complaints-cat">

  <div class="row" role="main">


		<main id="main" class="site-main" role="main">
		<h1><?php the_title(); ?></h1>

			<p><?php the_field('step_1') ?></p>

				<?php

				// check if the repeater field has rows of data
				if( have_rows('categories') ): ?>

					<div class="complaint-categories">

				 	
				    <?php while ( have_rows('categories') ) : the_row(); ?>
						
				        <div class="flex-container">
				        <?php $image = get_sub_field('image'); 

					
				        ?>
						<div class="image">
							<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
						</div>	
						<p><b><a href="<?php the_sub_field('category_link') ?>"><?php the_sub_field('category_name') ?></a></b> - <?php the_sub_field('category_descriptions') ?></p>
						</div>

				    <?php endwhile; ?>
				<?php endif; ?>

				<p><?php the_field('step_2') ?></p>

			</main><!-- #main -->


  		</div><!-- .row -->

	</div><!-- #primary -->

<?php get_footer(); ?>
				




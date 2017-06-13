<?php
/**
** Template Name: Media Ethics Page
 */

get_header(); ?>

<div id="primary" class="content-area ethics">

  <div class="row" role="main">

	    <div class="columns inner_content">

			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

			<?php if( have_rows('media_ethics_items') ): ?>

				<ul>


				<?php while( have_rows('media_ethics_items') ): the_row(); ?>
					<li class="flex-container">
						<div class="ethics-photo">
							<?php $img = get_sub_field('image') ?>
							<a href="<?php get_sub_field('link') ?>"><img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>"></a>
						</div>
						<div class="ethics-content">
							<a href="<?php get_sub_field('link') ?>"><h5><?php the_sub_field('title') ?></h5></a>
							<p><?php the_sub_field('description') ?></p>
							
						</div>
					</li>



				<?php endwhile; ?>

				</ul>

			<?php endif; ?>


			</main><!-- #main -->

		</div><!-- .inner_content .large-7 -->

	</div><!-- .row -->

</div><!-- #primary -->		
<?php get_footer(); ?>
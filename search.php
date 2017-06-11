<?php
/**
 * The template for displaying Search Results pages.
 *
 */

get_header(); ?>

<section id="primary" class="content-area search-page">

 	<div class="row" role="main">

    
			<header class="page-header">
				<h1 class="page-title">
					<?php printf( __( 'Search Results for: %s', 'rescue' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>

			</header><!-- .page-header -->

	</div><!-- .row -->

  <div class="row" role="main">

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article class="complaint flex-container">
								<h4><?php the_title() ?></h4>
								<a class="button" href="<?php the_permalink() ?>">Learn More ></a>
							</article>

			<?php endwhile; ?>

			<?php rescue_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->


  </div><!-- .row -->

</section><!-- #primary -->

<?php get_footer(); ?>

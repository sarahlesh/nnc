<?php
/**
** Template Name: Members Page
* The Members page, based on generic page template
 */

get_header(); ?>

<div id="primary" class="content-area">

  <div class="row" role="main">

    <div class="columns inner_content">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php if( have_rows('members_grid') ): ?>
					<form class="flex-container" id="member-search-form">
						<label for="search-member" class="label-hidden">Search for a member</label>
						<input type="search" id="search-member" placeholder="Find a Member">
					</form>
					<ul class="grid">

					<?php while( have_rows('members_grid') ): the_row(); 

						// vars
						$image = get_sub_field('logo_image');
						$link = get_sub_field('link_to_member');
						$name = get_sub_field('member_name');

						$nameClass = str_replace(' ', '', $name);
						$nameClass = strtolower($nameClass);

						?>

						<li class="grid-item <?php echo $nameClass ?>">

							<?php if( $link ): ?>
								<a href="<?php echo $link; ?>" target="_blank">
							<?php endif; ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

							<?php if( $link ): ?>
								</a>
							<?php endif; ?>

						</li>

					<?php endwhile; ?>

					</ul>

				<?php endif; ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

    </div><!-- .inner_content .large-7 -->

  </div><!-- .row -->

</div><!-- #primary -->
<script src="<?php echo get_home_url() ?>/wp-content/themes/advocator-child/js/jQuery.js"></script>
<script src="<?php echo get_home_url() ?>/wp-content/themes/advocator-child/js/isotope.js"></script>

<script src="<?php echo get_home_url() ?>/wp-content/themes/advocator-child/js/masonry.min.js"></script>
<script src="http://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_home_url() ?>/wp-content/themes/advocator-child/js/scripts.js"></script>




<?php get_footer(); ?>
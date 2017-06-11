<?php
/**
   * Template Name: Search Page
   */
get_header(); ?>

<div id="primary" class="content-area complaints-cat">

  <div class="row" role="main">


		<main id="main" class="site-main" role="main">
		<h1>Search</h1>

		<form role="search" class="decisions-search flex-container" method="get" id="searchform" action="<?php bloginfo('url'); ?>">

			<label for="s" class="label-hidden">Search</label>
			<input type="search" placeholder="Search" name="s" id="s" >
			<input type="submit" class="button" value="Search">
			
		</form>
		

		</main><!-- #main -->


  </div><!-- .row -->

</div><!-- #primary -->

<?php get_footer(); ?>
<?php
/**
 * Template Name: Single Decisions
 *
 *
 */

get_header(); ?>

     <div class="row single-decisions" role="main">


        <main id="main" class="site-main" role="main">
        <h1><?php the_title(); ?></h1>
        <a class="button" href="<?php the_field('pdf_of_complaint') ?>" target="_blank">Download Complaint PDF</a>
        <?php the_content() ?>
        
        </main><!-- #main -->
    </div>

<?php
get_footer();
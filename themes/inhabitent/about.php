<?php
/**
 * The template for displaying all about page.
 *Template Name: About Page
 * @package Inhabitent_Theme
 */

//get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="about-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'template-parts/content-about', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_footer(); ?>
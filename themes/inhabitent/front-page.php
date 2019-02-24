<?php
/**
 * The main template file.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <section>
           <?php $product_types=get_terms('product_type');?>
           <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
              <div>
                 <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/' . $term->slug . '.svg'?>>
                 <p><?php echo $term->description ?></p>
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?> stuff</a>
              </div>
           <?php endforeach; wp_reset_postdata(); ?>
        </section>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>
                <?php $product_posts=inhabitent_get_latest_posts();?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
            <?php 
                the_post_thumbnail('medium_large');
                the_date();
                comments_number();
                the_title();
                ?>
        <?php endforeach; wp_reset_postdata(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary --> 
<?php get_footer(); ?>

<?php
/**
 * The main template file.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
   <section class="inhabitent-home-banner"
         
         style='background-image: url( <?php echo get_template_directory_uri()."/images/home-hero.jpg";?>)'>
         <img src= <?php  echo get_template_directory_uri()."/images/logos/inhabitent-logo-full.svg";?> class="inhabitent-logo-full" alt="inhabitent home">
   </section>
   <div class="home-container">
   <h2>shop stuff</h2>
      <section class= "product-type-box">
         <?php $product_types=get_terms('product_type');?>
         <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
            <div class="tax-types">
               <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/' . $term->slug . '.svg'?> alt="Product types">
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
   <section class= "inhabitent-journal">
      <h2>inhabitent journal</h2>
      <?php $product_posts=inhabitent_get_latest_posts();?>

         <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
         
         <div class= "journal-wrapper">
            <?php 
               the_post_thumbnail('medium_large');
                  echo '<div class="journal-info">';
                  the_date();
                  comments_number();
                  the_title();
                  echo ' </div>';
            ?>
         </div>
      <?php endforeach; wp_reset_postdata(); ?>
   </section>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

   <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

   <?php endif; ?>
   
   <section class="adventure">
         <h2 class="adventure-head">latest adventures</h2>
         <ul>
            <li class="canoe">
               <div class="adventure-posts">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/canoe-girl.jpg" alt="canoe"/>
               </div>
               <div class="adventure-box">
                  <h3 class="adventure-text">Getting Back to Nature in a Canoe</h3>
                  <a class="adventure-button" href="readmore">read more</a>
               </div>
            </li>
            <li class="beach">
               <div class="adventure-thumbnail">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/beach-bonfire.jpg" alt="beach"/>
               </div>
               <div class="adventure-box">
                  <h3 class="adventure-text">A Night with Friends at the Beach</h3>
                  <a class="adventure-button" href="readmore">read more</a>
               </div>
            </li>
            <li class="mountain">
               <div class="adventure-thumbnail">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/mountain-hikers.jpg" alt="mountain-hikers"/>
               </div>
               <div class="adventure-box">
                  <h3 class="adventure-text">Taking in the View at Big Mountain</h3>
                  <a class="adventure-button" href="readmore">read more</a>
               </div>
            </li>
            <li class="night">
               <div class="adventure-thumbnail">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/night-sky.jpg" alt="night"/>
               </div>
               <div class="adventure-box">
                  <h3 class="adventure-text">Star-Gazing at the Night Sky</h3>
                  <a class="adventure-button" href="readmore">read more</a>
               </div>
            </li>
         </ul>
         <div class="more-adventure-area">
         <a class="more-adventure" href="moreadventures">more adventures</a>
</div>

</section>
</div>
   </main><!-- #main -->
</div><!-- #primary --> 
<?php get_footer(); ?>

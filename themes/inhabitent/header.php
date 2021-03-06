<?php
/**
 * The header for our theme.
 *
 * @package inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
	
				<div class="site-branding">
					<div class="header-logo">
							<a class="dark-logo" href= "<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" alt="inhabitent tent logo"/></a>
							<a class="light-logo" href= "<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg" alt="inhabitent tent logo"/></a>
					</div>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<div class="header-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form();?>
				</div>
				</nav>

			</header><!-- #masthead -->
		<div class="content-section">
			

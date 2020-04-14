<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
	
	<div class="site-content-contain">
		<div class="navigation">
			<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" /></a>
			<div class="nav-right">
				<div class="home-button">
					<a class="<?php if (is_page('home')) echo 'active'; ?>" href="<?php echo home_url(); ?>">HOME</a>
					<div class="home-dropdown">
						<div><a href="<?php echo home_url(); ?>/#about">ABOUT</a></div>
						<div class="mobile-hidden"><a href="<?php echo home_url(); ?>/#team">THE TEAM</a></div>
						<div class="mobile-hidden"><a href="<?php echo home_url(); ?>/#services">SERVICES</a></div>
						<div><a href="<?php echo home_url(); ?>/#reviews">REVIEWS</a></div>
						<div><a href="<?php echo home_url(); ?>/#scheduling">SCHEDULING</a></div>
						<div><a href="<?php echo home_url(); ?>/#locations">LOCATIONS</a></div>
					</div>
				</div>
				<a href="smile-gallery">SMILE GALLERY</a>
				<a class="<?php if (is_page('patient-info')) echo 'active'; ?>" href="patient-info">PATIENT INFO/FAQ</a>
			</div>
		</div>
		<div id="content" class="site-content">
			
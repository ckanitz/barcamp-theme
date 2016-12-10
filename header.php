<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Barcamp
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory')?>/style.css" type="text/css" media="all">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
	<div class="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img src="<?php echo bloginfo('stylesheet_directory')?>/images/logo-bcki.png" alt="Barcamp Kiel Logo" width="250" height="70" />
		</a>
	</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
		<?php if ( has_post_thumbnail() ) : ?>
		<figure class="headerimage">
			<?php the_post_thumbnail('full'); ?>
			<figcaption>
				<hgroup>
					<h1 class="site-title"><?php echo get_post(get_post_thumbnail_id())->post_title; ?></h1>
					<h2 class="site-description"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></h2>
				</hgroup>
			</figcaption>
		</figure>
		
		<?php else: ?>
				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) : ?>
					<figure class="headerimage">
						<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" 
						height="<?php echo get_custom_header()->height; ?>" alt="Sessionplanung beim Barcamp Kiel" />
						<figcaption>
							<hgroup class="site-info">
							<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
							<h2 class="site-description"><?php echo str_replace('|','<br />',get_bloginfo('description')); ?></h2>
							</hgroup>
						</figcaption>
					</figure>
				<?php endif; ?>

		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
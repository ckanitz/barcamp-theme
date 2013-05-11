<?php
/**
 * Template Name: Standardseite mit grossem Headerbild
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Barcamp
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		
		<div id="primary" class="site-content">
			<div id="content" role="main">

				<?php get_template_part( 'content', 'page' ); ?>
				
			</div><!-- #content -->
		</div><!-- #primary -->

	<?php endwhile; // end of the loop. ?>

		

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
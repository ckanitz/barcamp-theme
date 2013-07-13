<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Barcamp
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="sponsoren">
			<h3>Unsere Sponsoren</h3>
			<img src="http://placehold.it/140x100">
			<img src="http://placehold.it/140x100">
			<img src="http://placehold.it/140x100">
			<img src="http://placehold.it/140x100">
			<img src="http://placehold.it/140x100">
			<img src="http://placehold.it/140x100">
			<img src="http://placehold.it/140x100">
		</div>
		<?php if(is_front_page()): ?>
			<div class="social three-boxes">
				<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
					<div class="social_widgets front-widgets">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div><!-- .social_widgets -->
				<?php endif; ?>
			</div>
		<?php endif; ?>
	
		<div class="site-info">
			<div class="credits">
				<a href="http://denniserdmann.de/barcamp-wordpress-theme/">BarCamp-Theme</a> powered by
				<a href="http://de.wordpress.org" title="Semantic Personal Publishing Platform">Wordpress</a>
			</div>
			<div class="copyright">
				&copy; BarCamp Kiel 2013
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
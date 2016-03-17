<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<?php get_sidebar( 'footer' ); ?>

		<div class="site-info">
			<p>Recreate by <a href="https://technologyofkevin.com/" title="Developer">Kevin Wei</a></p>
			<p>Proudly powered by <a href="https://wordpress.org/" title="WordPress">WordPress</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>

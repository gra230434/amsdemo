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
</div><!-- #background-white .background -->
</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-footer-inner">
		<?php get_sidebar( 'footer' ); ?>

		<div class="site-info">
			<p>Recreate by <a href="https://technologyofkevin.com/" title="Developer">Kevin Wei</a></p>
			<p>Proudly powered by <a href="https://wordpress.org/" title="WordPress">WordPress</a></p>
		</div><!-- .site-info -->
	</div><!-- site-footer-inner -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * Template Name: News Page Template
 *
 * @package WordPress
 * @subpackage amstheme
 * @since amstheme 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
        <?php echo "123" ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>

	<?php twentytwelve_content_nav( 'nav-below' ); ?>

<?php else : ?>

	<article id="post-0" class="post no-results not-found">

		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'amstraslate' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->

	</article><!-- #post-0 -->

<?php endif; // end have_posts() check ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

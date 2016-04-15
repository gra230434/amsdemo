<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage AMSdemo
 * @since AMSdemo 1.0
 */

get_header(); ?>
        <?php if( have_posts('page_id=59') ):?>

	<?php $home_title = get_post(59)->post_title;
              $home_content = get_post(59)->post_content; ?>
	<article id="homepage_ark" <?php post_class(); ?>>

	<header class="home-header">
		<h1 class="home-title"><?php echo $home_title ?></h1>
                <div id="borfer-bottom-linear" style="height: 3px;background: linear-gradient(90deg, #0080ff, white);"></div>
        </header>

        <div class="home-content">
                <?php echo $home_content; ?>
        </div><!-- .home-content -->

        <footer class="home-meta">
                <?php edit_post_link( __( 'Edit', 'amstraslate' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .home-meta -->

        </article><!-- #homepage_ark -->
	<?php endif;?>
</div><!-- wrapper -->
<div id="full-screen-news" class="full-screen-news" style="width:100%;background-color:#e6e6e6;">
	<?php $args = array('cat' => 9,);
              $query = new WP_Query( $args ); ?>	
	<?php if ( $query->have_posts() ): ?>
		<div id="news" class="news">
		<h1><?php _e('NEWS','amstraslate') ?></h1>
			<div id="home-news" class="home-news">

			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div id="home-new-one" class="home-new-one">
				<article>
				<h1><?php the_title(); ?></h1>
				<?php the_content( __( 'read more ...', 'amstraslate' ) ); ?>
				</article>
			</div><!-- home-new-one -->
			<?php endwhile; ?>

			</div><!-- home-news -->
		</div><!-- news -->
	<?php endif ?>
</div><!-- full-screen -->
<div id="main" class="wrapper">
	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'amstraslate' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'amstraslate' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'amstraslate' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php if( ! is_home() ): ?>
	<?php get_sidebar(); ?>
<?php endif ?>
<?php get_footer(); ?>

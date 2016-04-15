<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="homepage_ark" <?php post_class(); ?>>
		<header class="home-header">
			<h1 class="home-title"><?php the_title(); ?></h1>
			<div id="borfer-bottom-linear" style="height: 3px;background: linear-gradient(90deg, #0080ff, white);"></div>
		</header>

		<div class="home-content">
			<?php $home_content = get_the_content();
			      echo $home_content; ?>
		</div><!-- .home-content -->
		<footer class="home-meta">
			<?php edit_post_link( __( 'Edit', 'amstraslate' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .home-meta -->
	</article><!-- #homepage_ark -->

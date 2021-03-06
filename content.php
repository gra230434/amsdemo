<?php
/**
 * The default template for displaying content
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage AMSdemo
 * @since AMSdemo 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'amstraslate' ); ?>
		</div>
		<?php endif; ?>

		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			  <h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
		  	<h1 class="entry-title">
			  	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		  	</h1>
			<?php endif; // is_single() ?>
			<?php // is editor show edit button ?>
			<?php edit_post_link( __( 'Edit', 'amstraslate' ), '<span class="edit-link">', '</span>' ); ?>
		</header>

    <?php if (post_password_required()): ?>
			<span class"need-password"><?php __('the post need password', 'amstraslate') ?></span>
		<?php else :?>
			<?php if ( has_post_thumbnail() ): ?>
	      <div class="entry-header">
				<?php the_post_thumbnail(); // the post don't have password and post image ?>
			  </div><!-- .entry-header -->
			<?php endif; ?>
      <?php if ( is_search() ) : // Only display Excerpts for Search ?>
		    <div class="entry-summary">
			    <?php the_excerpt(); ?>
		    </div><!-- .entry-summary -->
		  <?php else : ?>
		    <div class="entry-content">
			  <?php the_content( __( 'read more ...', 'amstraslate' ) );
				      wp_link_pages( amstheme_previous_next() ); ?>
		    </div><!-- .entry-content -->
		    <?php endif; ?>
		<?php endif; ?>

		<footer class="entry-meta">
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<span class="leave-reply"><?php comments_popup_link( __( 'Leave a reply', 'amstraslate' ), __( '1 Reply', 'amstraslate' ), __( '% Replies', 'amstraslate' ) ); ?></span>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>

			<?php amstheme_entry_meta(); //functions.php ?>

			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) :
				// If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'amstraslate_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'amstraslate' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'amstraslate' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->

	</article><!-- #post -->

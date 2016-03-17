<?php
/**
 * The sidebar is for footer video area
 *
 * @package WordPress
 * @subpackage AMSdemo
 * @since AMSdemo 1.0
 */

// In the footer we need videos
?>
<div id="footer_widgets" class="footer_widgets_area" >
	<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
	<ul class="footer_widgets_video">
		<?php dynamic_sidebar( 'sidebar-footer' ); ?>
	</ul><!-- .first -->
	<?php endif; ?>

</div><!-- #secondary -->

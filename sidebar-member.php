<?php
/**
 * The sidebar is for members area
 *
 * @package WordPress
 * @subpackage AMSdemo
 * @since AMSdemo 1.0
 */

// In the footer we need videos
?>
<div id="members" class="members" >
	<?php if ( is_active_sidebar( 'sidebar-member' ) ) : ?>
	<ul class="members_ul">
		<?php dynamic_sidebar( 'sidebar-member' ); ?>
	</ul><!-- .first -->
	<?php endif; ?>

</div><!-- #secondary -->

<?php
/**
 * The Header template for our theme
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage AMSdemo
 * @since AMSdemo 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link >
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="header-fixed" class="header-fixed">
	<div id="masthead" class="site-header" role="banner">
<<<<<<< HEAD
		<h1 class="site-header-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
			</a>
		</h1><!-- .site-header-title -->
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2><!-- .site-description -->
=======
		<div class="site-header-title">
		<h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		</div><!-- site-header-title -->

		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
>>>>>>> origin/master

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'amstraslate' ); ?></button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'amstraslate' ); ?>"><?php _e( 'Skip to content', 'amstraslate' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div><!-- #masthead .site-header -->
</div><!-- #header-fixed .header-fixed -->

<div id="page" class="hfeed site">
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
		<?php endif; ?>
<<<<<<< HEAD

	<?php if ( is_home()||is_front_page() ) : ?>
		<script type="text/javascript">
		var $ = jQuery.noConflict();
		var window_height = window.innerHeight;
	
		$(document).ready(function(){
		  $("#header_image_to").click(function(){
		    $(window).scrollTop( window_height );
		  });
		});
		</script>
		<div class="header_image">
			<div class="header_image_box">

				<div class="header_image_text">
					<h1 style="text-align: center;color: rgb(0, 121, 199);font-weight: 600;">WELCOME TO AMS</h1>
					<p style="text-align: center; margin: 15px auto 0;width: 600px;">The Alpha Magnetic Spectrometer will study the universe and its origin by searching for antimatter, dark matter while performing precision measurements of cosmic rays composition and flux.</p>

					<div class="header_image_down">
						<div class="header_image_down_big">
							<div class="header_image_down_line"></div>
						</div>
						<button id="header_image_to"></button>
						<div class="header_image_down_big">
							<div class="header_image_down_line"></div>
                                                </div>
					</div>
				</div><!-- header_image_text -->

			</div><!-- header_image_opacity -->
=======
<?php //is_home()||is_category()||is_page() ?>
	<?php if ( is_home()||is_front_page() ) : ?>
		<div class="header_image">
			<div class="header_image_box">
				<div class="header_image_background"></div>
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		  </div><!-- .header_image_box -->
>>>>>>> origin/master
		</div><!-- .header_image -->
	<?php endif; ?>

	<div id="main" class="wrapper">

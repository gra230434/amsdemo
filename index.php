<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage AMSdemo
 * @since AMSdemo 1.0
 */

get_header(); ?>

</div><!-- wrapper -->

<div id="HomePage-1" class="FullScreen" style="background-color: white; height: 650px;">
	<div class="IN_FullScreen" style="position: relative;top: 50%;transform: translateY(-50%);">

	<?php 	$amg = array(	'pagename'	=> 'home-page-1',);
		$query_1 = new WP_Query( $amg );
		if( $query_1->have_posts() ): ?>

		<?php while  ( $query_1->have_posts() ) : $query_1->the_post(); ?>
		<article id="homepage_ark" >

        	<header class="home-header">
                <h1 class="home-title" style="text-align: center;"><?php the_title(); ?></h1>
                <div id="borfer-bottom-linear" style="height:3px;background:linear-gradient(90deg, white, #0080ff, white);margin-top: 12px;margin-bottom: 40px;"></div>
        	</header>

        	<div class="home-content">
                	<?php echo get_the_content(); ?>
        	</div><!-- .home-content -->

        	<footer class="home-meta">
                	<?php edit_post_link( __( 'Edit', 'amstraslate' ), '<span class="edit-link">', '</span>' ); ?>
        	</footer><!-- .home-meta -->

        	</article><!-- #homepage_ark -->
		<?php endwhile; ?>
	
	<?php endif ?>

	</div><!-- IN_FullScreen -->
</div><!-- HomePage-1 FullScreen -->

<div id="HomePage-2" class="FullScreen" style="background-color: #262626; height: 700px;color: white;">
        <div class="IN_FullScreen" style="position: relative;top: 50%;transform: translateY(-50%);">

        <?php   $amg = array(   'pagename'      => 'home-page-2',);
                $query_1 = new WP_Query( $amg );
                if( $query_1->have_posts() ): ?>

                <?php while  ( $query_1->have_posts() ) : $query_1->the_post(); ?>
                <article id="homepage_ark" >
                
		<div class="home-content">
                        <?php echo get_the_content(); ?>
                </div><!-- .home-content -->

                <footer class="home-meta">
                        <?php edit_post_link( __( 'Edit', 'amstraslate' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .home-meta -->

                </article><!-- #homepage_ark -->
                <?php endwhile; ?>

        <?php endif ?>

        </div><!-- IN_FullScreen -->
</div><!-- #HomePage-2 .FullScreen -->

<div class="FullScreen">
	<img src="<?php bloginfo('template_directory'); ?>/image/home_imge.png" style="width: 100%;">
</div>

<div id="HomePage-3" class="FullScreen" style="background-color: #cccccc; height: 600px;">
        <div class="IN_FullScreen" style="position: relative;top: 50%;transform: translateY(-50%);">

        <?php   $amg = array(   'pagename'      => 'home-page-3',);
                $query_1 = new WP_Query( $amg );
                if( $query_1->have_posts() ): ?>

                <?php while  ( $query_1->have_posts() ) : $query_1->the_post(); ?>
                <article id="homepage_ark" >

                <div class="home-content">
                        <?php echo get_the_content(); ?>
                </div><!-- .home-content -->

                <footer class="home-meta">
                        <?php edit_post_link( __( 'Edit', 'amstraslate' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .home-meta -->

                </article><!-- #homepage_ark -->
                <?php endwhile; ?>

        <?php endif ?>

        </div><!-- IN_FullScreen -->
</div><!-- #HomePage-2 .FullScreen -->

<?php $args = array(	'cat'		 => 9,
			'posts_per_page' => 3,);
	$query = new WP_Query( $args ); ?>	
<?php if ( $query->have_posts() ): ?>
<div id="full-screen-news" class="FullScreen" style="width:100%;height: 500px;position: relative;">
	<img  src="<?php bloginfo('template_directory'); ?>/image/HomePageNews.png"
	      style="height: 100%;
                     position: absolute;
                     left: 50%; transform: translateX(-50%);
                     top: 0;
                     filter: grayscale(20%) blur(1px);
		     -webkit-filter: grayscale(20%) blur(1px);">
	<div style="opacity: 0.7;
                    width: 1170px;
                    height: 490px; 
                    position: absolute;
                    top: 50%; left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: white;"></div>
	<div class="IN_FullScreen" style="position: relative;top: 50%;transform: translateY(-50%);">
		<article id="homepage_ark">
			<header class="home-header">
                	<h1 class="home-title" style="text-align: center;"><?php _e('NEWS','amstraslate') ?></h1>
                	</header>

			<div id="home-news" class="row" style="margin-top: 30px;">

				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div id="home-new-one" class="col-xs-12 col-sm-4 col-md-4">
					<article style="padding: 20px 10px; background-color: black; color: white; height: 200px; border-radius: 5px;">
					<h3><?php the_title(); ?></h3>
					<?php the_content( __( 'read more ...', 'amstraslate' ) ); ?>
					</article>
				</div><!-- #home-new-one -->
				<?php endwhile; ?>

			</div><!-- home-news -->

		</article><!-- .homepage_ark -->
	</div><!-- IN_FullScreen -->
</div><!-- #full-screen-news .FullScreen -->
<?php endif ?>


<div id="main" class="wrapper">

<?php if( ! is_home() ): ?>
	<?php get_sidebar(); ?>
<?php endif ?>
<?php get_footer(); ?>

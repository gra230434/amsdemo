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

<script type="text/javascript">
  var height = $("#HomePage-1").offset();
  console.log( height.top );
</script>

<div id="HomePage-2" class="FullScreen" style="background-color: #262626; height: 700px;color: white;">
        <div class="IN_FullScreen">

        <?php   $amg = array(   'pagename'      => 'home-page-2',);
                $query_1 = new WP_Query( $amg );
                if( $query_1->have_posts() ): ?>

                <?php while  ( $query_1->have_posts() ) : $query_1->the_post(); ?>
                <article id="homepage_ark" >

								<?php echo get_the_content(); ?>

                <footer class="home-meta">
                        <?php edit_post_link( __( 'Edit', 'amstraslate' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .home-meta -->

                </article><!-- #homepage_ark -->
                <?php endwhile; ?>

        <?php endif ?>

        </div><!-- IN_FullScreen -->
</div><!-- #HomePage-2 .FullScreen -->

<div id="HomePage-3" class="FullScreen_homepage3 FullScreen">
	<div class="IN_FullScreen_homepage3">
    <div class="IN_FullScreen">

        <?php   $amg = array(   'pagename'      => 'home-page-3',);
                $query_1 = new WP_Query( $amg );
                if( $query_1->have_posts() ): ?>

                <?php while  ( $query_1->have_posts() ) : $query_1->the_post(); ?>
                <article id="homepage_ark" >

                <?php echo get_the_content(); ?>

                <footer class="home-meta">
                        <?php edit_post_link( __( 'Edit', 'amstraslate' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .home-meta -->

                </article><!-- #homepage_ark -->
                <?php endwhile; ?>

        <?php endif ?>

    </div><!-- IN_FullScreen -->
  </div><!-- .IN_FullScreen_homepage3 -->
</div><!-- #HomePage-3 .FullScreen .FullScreen_homepage3 -->

<?php $args = array(	'cat'		 => 9,
                      'posts_per_page' => 3,);
			$query = new WP_Query( $args ); ?>
<?php if ( $query->have_posts() ): ?>
<div id="full-screen-news" class="FullScreen homepage_news">

	<div class="IN_FullScreen home-news">

	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	  <div class="home-new-one">

		  <article  style="background-color: black; color: white;">

			  <div class="homepage_news_title">
				    <h3>
							<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
				</div><!-- homepage_news_title -->

				<div class="homepage_news_content">
					<div class="homepage_news_content_p">
					  <p>
						  <?php echo get_the_content();?>
				    </p>
				  </div>
					<span>
						<a href="<?php echo get_permalink(); ?>">Read more</a>
					</span>
				</div><!-- .homepage_news_content -->

			</article>

		</div><!-- .home-new-one -->
		<?php endwhile; ?>

</div><!-- IN_FullScreen -->
</div><!-- #full-screen-news .FullScreen -->
<?php endif ?>


<div id="main" class="wrapper">

<?php if( ! is_home() ): ?>
	<?php get_sidebar(); ?>
<?php endif ?>
<?php get_footer(); ?>

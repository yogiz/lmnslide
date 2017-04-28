<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php mailchimp_form($warna_1,$warna_2,$container); ?>

<div class="wrapper wrapper-content" id="single-wrapper">
	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

			<main class="site-main single" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php understrap_post_nav(); ?>

			</main><!-- #main -->
					<div class="comment-single">
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
					</div>

				<?php endwhile; // end of the loop. ?>

		</div><!-- #primary -->
		<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
			<div class="sidebar-src">
				<form role="search" method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div class="form-group" >
						<input type="text" value="" name="s" id="s" class="form-control" />
						<input type="hidden" value="1" name="sentence" />
						<input type="hidden" value="post" name="post_type" />
						<button type="submit" id="srcsubmit" class="btn">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</form>
			</div>
			<aside id="archives-3" class="widget widget_archive">
				<h3 class="widget-title">
					<?php if(get_theme_mod('kategori_sidebar_title')){echo get_theme_mod('kategori_sidebar_title');} else {echo 'Kategori';}?>
				</h3>
				<?php wp_nav_menu(array(
					'theme_location' => 'kategori',
					'fallback_cb'=> false,
					'items_wrap'     => '<div class="menu-kategori">%3$s</div>'
					)); ?>
				<?php
				for ($i=1; $i <=3 ; $i++) { 
				 	$kategori_img[$i] = get_theme_mod('kategori_sidebar_image_'.$i);
				 	$kategori_url[$i] = get_theme_mod('kategori_sidebar_link_'.$i);
				 }
				 if (!empty($kategori_img)){
				 	echo '<div class="kategori-img">';
				 	for ($i=1; $i <= 3 ; $i++) {
				 		if (!empty($kategori_img[$i])){
				 			printf('<a href="%s" class="kategori-item" target="_blank"><img src="%s"></img></a>',esc_url($kategori_url[$i]),esc_url($kategori_img[$i]));
				 		}
				 	}
				 	echo '</div>';
				 }
				 ?>
			</aside>
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->




<?php get_footer(); ?>

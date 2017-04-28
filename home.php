<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>
<?php mailchimp_form($warna_1,$warna_2,$container); ?>

<div class="wrapper wrapper-content" id="archive-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

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
	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->


<?php get_footer(); ?>

<?php
/**
	Template Name: Homepage
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>
<?php if(get_theme_mod('hero_back_img')){
	$hero_img = get_theme_mod('hero_back_img');
	}?>
<div class="wrapper" id="page-wrapper" style="background: url(<?php echo $hero_img;?>)no-repeat; background-size: cover;">
<div class="wrapper" id="page-wrapper-child" style="background-color: <?php echo $warna_1;?>;">
	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
		<main class="hero-main" id="main">
			<div class="hero-caption n1">
				<?php if (get_theme_mod('hero_back_caption_1')){echo get_theme_mod('hero_back_caption_1');
					} else {echo "Setting hero caption #1";}?>
			</div>
			<div class="hero-caption n2">
				<?php if (get_theme_mod('hero_back_caption_2')){echo get_theme_mod('hero_back_caption_2');
					} else {echo "Setting hero caption #2";} ?>
			</div>
			<div class="hero-caption n3">
				<?php if (get_theme_mod('hero_back_caption_3')){echo get_theme_mod('hero_back_caption_3');
					} else {echo "Setting hero caption #3";} 
					?>
			</div>
		</main><!-- #main -->
	</div><!-- Container end -->
</div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>

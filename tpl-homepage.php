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
	</div>
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
			<div class="icon-panah">
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
			</div>
		</main><!-- #main -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<div class="wrapper hr-line" style="background-color: <?php echo $warna_2;?>;">
</div>

<div class="wrapper" id="produk-wrapper">
	<div class="atas"></div>
	<div class="bawah" style="background-color: <?php echo $warna_2;?>;"></div>
	<div class="wrapper content">
		<div class="container">
			<h2 class="judul-section" id="section-produk">PRODUK</h2>
			<div class="isi-produk">
				<div class="img-layout">
					<img src="" class="img-dasar">
					<img src="" class="img-isi">
				</div>
				<div class="img-layout">
					<img src="" class="img-dasar">
					<img src="" class="img-isi">
				</div>
			</div>
		</div>
	</div>
</div>

	
</div>


<?php get_footer(); ?>

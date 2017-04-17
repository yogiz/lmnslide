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
		<div class="container produk-content-container">
			<h2 class="judul-section" id="section-produk">PRODUK</h2>
			<div class="isi-produk row">
				<div class="img-layout col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri();?>/image/komputer.png" class="img-dasar">
					<?php if(get_theme_mod('home_produk_image_1')){
						$isi_img_1 = get_theme_mod('home_produk_image_1');
						}?>
					<div class="img-isi" style="background: url(<?php echo $isi_img_1; ?>)no-repeat;background-size: cover;"></div>
					<div class="deskripsi">
						<h3 class="judul" style="color: <?php echo $warna_1;?>;">
							<?php 
							if ( get_theme_mod('home_produk_title_1') ){
								echo get_theme_mod('home_produk_title_1');
							} else { echo 'Setting produk title #1';}
							 ?>
						</h3>
						<a href="<?php echo esc_url(get_theme_mod(home_produk_url_1)); ?>" class="btn" style="color: <?php echo $warna_2;?>;">Lihat Detail</a>
					</div>
				</div>
				<div class="img-layout col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri();?>/image/komputer.png" class="img-dasar">
					<?php if(get_theme_mod('home_produk_image_2')){
						$isi_img_2 = get_theme_mod('home_produk_image_2');
						}?>
					<div class="img-isi" style="background: url(<?php echo $isi_img_2; ?>)no-repeat;background-size: cover;"></div>
					<div class="deskripsi">
						<h3 class="judul" style="color: <?php echo $warna_1;?>;">
							<?php 
							if (get_theme_mod('home_produk_title_2')){
								echo get_theme_mod('home_produk_title_2');
							} else { echo 'Setting produk title #2'; }
							 ?>
						</h3>
						<a href="<?php echo esc_url(get_theme_mod(home_produk_url_2)); ?>" class="btn" style="color: <?php echo $warna_2;?>;">Lihat Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="wrapper-testimonial">
	<?php if(get_theme_mod('home_testi_image')){
		$back_testi = get_theme_mod('home_testi_image');
		}?>
	<div class="container" style="background: url(<?php echo $back_testi;?>)no-repeat center center;    height: 100%; background-size: cover;">
		<div class="wrapper" id="testi-content">
			<h2 class="judul-section" id="section-produk">
				<?php if(get_theme_mod('home_testi_title')){echo get_theme_mod('home_testi_title');} else {echo 'TESTIMONIAL';}?>
			</h2>

			<div class="content">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				  <?php 
				  	$args = array(
							'post_type' => 'testimoni',
							'orderby' => 'date',
							'posts_per_page' => 8
						);
					$loop = new WP_Query( $args );
					$count_testi = $loop->post_count;
					for ($i=0; $i < $count_testi; $i++) { 
						echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"';
						if ($i==0){ echo 'class="active"';}
						echo '></li>';
					}
				   ?>
				  </ol>
				  <div class="carousel-inner" role="listbox">
					<?php 
					$count=1;
				if ( $loop->have_posts() ){
					while ( $loop->have_posts() ) : $loop->the_post();

						$meta_jabatan = get_post_meta( get_the_ID(), '_meta_jabatan', true );
							?>
							<div class="carousel-item <?php if($count==1){echo 'active';} ?>">
							<div class="d-none d-md-block">
								<div class="thumbnail "><div><?php the_post_thumbnail(); ?></div></div>
								<div class="isi "><?php the_content(); ?></div>
								<div class="nama "><span><?php the_title(); ?></span></div>
								<div class="jabatan "><?php echo $meta_jabatan; ?></div>
							</div>
							</div>

						<?php
							$count=0;
					 endwhile; }
					 wp_reset_postdata();
					 ?>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <i class="fa fa-chevron-left" aria-hidden="true"></i>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <i class="fa fa-chevron-right" aria-hidden="true"></i>
				    <span class="sr-only">Next</span>
				  </a>
				</div>


			</div>

		</div>
	</div>
</div>

<div class="wrapper hr-line no-shadow" style="background-color: <?php echo $warna_2;?>;">
</div>

<div class="wrapper" id="wrapper-klien" style="background-color: <?php echo $warna_1;?>;">
	<div class="container">

		<h2 class="judul-section" id="section-produk">
				<?php if(get_theme_mod('home_klien_title')){echo get_theme_mod('home_klien_title');} else {echo 'KLIEN KAMI';}?>
		</h2>
		<div class="content-klien">
				  <?php 
				  	$args = array(
							'post_type' => 'klien',
							'orderby' => 'date',
							'posts_per_page' => 12
						);
					$loop = new WP_Query( $args );

				if ( $loop->have_posts() ){
					while ( $loop->have_posts() ) : $loop->the_post();
						echo '<div class="klien-img">';
						the_post_thumbnail();
						echo '</div>';
					endwhile; }
					wp_reset_postdata();
				   ?>
		</div>
	</div>
</div>

</div>
<?php get_footer(); ?>

<style type="text/css">
	/*caraousel*/
	.carousel-indicators li{
		background-color: <?php echo $warna_2;?>;
	}
	.carousel-indicators .active {
		background-color: <?php echo $warna_1;?>;
	}
	.carousel-control-prev, .carousel-control-next, .carousel-control-prev:focus, .carousel-control-next:focus {
		color: <?php echo $warna_2;?>;
		opacity: 0.7;
		font-size: 30px;
	}
	.carousel-control-prev:hover, .carousel-control-next:hover {
		color: <?php echo $warna_1;?>;
	}
</style>
<?php
/**
	Template Name: desain
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>
<?php if(get_theme_mod('hero_desain_img')){
	$hero_img = get_theme_mod('hero_desain_img');
	}?>
<div id="frontpage-wrapper" style="background: url(<?php echo $hero_img;?>)no-repeat; background-size: cover;">
	<div class="wrapper" id="page-wrapper-child" style="background-color: <?php echo $warna_1;?>;">
	</div>
	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
		<main class="hero-main hero-desain" id="main">
			<div class="hero-caption n1">
				<?php if (get_theme_mod('hero_desain_caption_1')){echo get_theme_mod('hero_desain_caption_1');
					} else {echo "Setting hero caption #1";}?>
			</div>
			<div class="hero-caption n2">
				<?php if (get_theme_mod('hero_desain_caption_2')){echo get_theme_mod('hero_desain_caption_2');
					} else {echo "Setting hero caption #2";} ?>
			</div>
			<div class="hero-caption n3">
				<?php if (get_theme_mod('hero_desain_caption_3')){echo get_theme_mod('hero_desain_caption_3');
					} else {echo "Setting hero caption #3";} 
					?>
			</div>
		</main><!-- #main -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<div class="wrapper hr-line" style="background-color: <?php echo $warna_2;?>;">
</div>

<?php 
function item_service($no){
	if (get_theme_mod('desain_service_caption_'.$no)) {
		$judul = get_theme_mod('desain_service_caption_'.$no);
	} else {$judul = 'Setting service title #'.$no;}

	printf('<h2 class="judul-section">%s</div>',$judul);
	for ($i=1; $i <=3 ; $i++) { 
		echo '<div class="service-item">';
		echo '<div class="service-image"><img src="';
		if (get_theme_mod('desain_service'.$no.'_img_'.$i)){
			echo esc_url(get_theme_mod('desain_service'.$no.'_img_'.$i)); 
		}
		echo '"></div><div class="service-caption">';
		if (get_theme_mod('desain_service'.$no.'_caption_'.$i)){
			echo get_theme_mod('desain_service'.$no.'_caption_'.$i);
		}
		echo '</div><div class="service-desc">';
		if (get_theme_mod('desain_service'.$no.'_desc_'.$i)){
			echo get_theme_mod('desain_service'.$no.'_desc_'.$i);
		}
		echo '</div></div>';
	}
}

 ?>

<div class="wrapper" id="wrapper-service" >
	<div class="<?php echo esc_html( $container ); ?>">
		<div class="service-container service-1">
			<?php item_service(1);?>
		</div>
		<div class="service-container service-2">
			<?php item_service(2);?>
		</div>
	</div>
</div>


<div class="wrapper hr-line" style="background-color: <?php echo $warna_2;?>;">
</div>

<div class="wrapper" id="wrapper-klien" style="background-color: <?php echo $warna_1;?>;">
	<div class="<?php echo esc_html( $container ); ?>">

		<h2 class="judul-section" id="section-produk">
				YANG TELAH MEMPERCAYAI KAMI
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

<div class="wrapper" id="wrapper-testimonial">
	<?php if(get_theme_mod('home_testi_image')){
		$back_testi = get_theme_mod('home_testi_image');
		}?>
	<div class="container" style="background: url(<?php echo $back_testi;?>)no-repeat center center;    height: 100%; background-size: cover;">
		<div id="testi-content">
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



</div>
<?php get_footer(); ?>

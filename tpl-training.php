<?php
/**
	Template Name: Training
 */


get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>
<?php if(get_theme_mod('hero_training_img')){
	$hero_img = get_theme_mod('hero_training_img');
	}?>
<div class="wrapper training" id="page-wrapper" style="background: url(<?php echo $hero_img;?>)no-repeat; background-size: cover;">
	<div class="wrapper" id="page-wrapper-child" style="background-color: <?php echo $warna_1;?>;">
	</div>
	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
		<main class="hero-main hero-training" id="main">
			<div class="hero-caption n1">
				<?php if (get_theme_mod('hero_training_caption_1')){echo get_theme_mod('hero_training_caption_1');
					} else {echo "Setting hero caption #1";}?>
			</div>
			<div class="hero-caption n2">
				<?php if (get_theme_mod('hero_training_caption_2')){echo get_theme_mod('hero_training_caption_2');
					} else {echo "Setting hero caption #2";} ?>
			</div>
		</main><!-- #main -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->
<div class="wrapper" id="training-wrapper">
	<div class="<?php echo esc_html( $container ); ?>">
		<h2 class="judul-section" id="section-training">
			<?php if(get_theme_mod('home_training_title')){echo get_theme_mod('home_training_title');} else {echo 'JADWAL TRAINING';}?>
		</h2>
		<?php 
	  	$args = array(
				'post_type' => 'training',
				'orderby' => 'date',
				'posts_per_page' => 3
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ){
			while ( $loop->have_posts() ) : $loop->the_post();
			$meta_jadwal = get_post_meta($post->ID, WYSIWYG_JADWAL_KEY, true);
			$meta_fasilitas = get_post_meta($post->ID, WYSIWYG_FASILITAS_KEY, true);
		?>
		<div class="row">
			<div class="training-jadwal col-md-4">
				<?php echo $meta_jadwal;?>
			</div>
			<div class="trining-poster col-md-4">
				<?php the_post_thumbnail();?>
			</div>
			<div class="training-fasilitas col-md-4">
				<?php echo $meta_fasilitas;?>
			</div>
		</div>
		<?php 
			endwhile;
		} ?>
	</div>
</div>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
global $warna_1;
if (get_theme_mod('warna_1')) {
	$warna_1 = get_theme_mod('warna_1');
} else {$warna_1 = '#FCB714';}
global $warna_2;
if (get_theme_mod('warna_2')) {
	$warna_2 = get_theme_mod('warna_2');
} else {$warna_2 = '#242426';}
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-kontak">

	<div class="<?php echo esc_html( $container ); ?>">
		<h2 class="judul-section" id="section-produk">
			<?php if (is_page_template('tpl-training.php')){
				echo 'KERJASAMA';
				} else {
					echo 'HUBUNGI KAMI';
				} ?>
		</h2>
		<div class="row">
			<div class="col-md-6 kontak-isi">
				<?php 
				if(get_theme_mod('kontak_alamat')): ?>
					<div class="row">
						<div class="border-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
						<div class="data-kontak"><?php echo get_theme_mod('kontak_alamat');  ?></div>
					</div>
				<?php endif;
				if(get_theme_mod('kontak_whatsapp')):
				?>
					<div class="row">
						<div class="border-icon"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
						<div class="data-kontak"><?php echo get_theme_mod('kontak_whatsapp');  ?></div>
					</div>
				<?php endif;
				if(get_theme_mod('kontak_telepon')):
				?>
					<div class="row">
						<div class="border-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
						<div class="data-kontak"><?php echo get_theme_mod('kontak_telepon');  ?></div>
					</div>
				<?php endif;?>
				<div class="row media-sosial">
					<?php 
					$medsos = array(
						'0' => 'facebook',
						'1' => 'instagram',
						'2' => 'twitter' 
						);

					for ($i=0; $i < 3 ; $i++) {
						$media_data = esc_url(get_theme_mod('kontak_'.$medsos[$i]));
						if($media_data){
							printf('<a href="%s"><i class="fa fa-%s" aria-hidden="true"></i></a>',$media_data,$medsos[$i]);
						}
					}

					 ?>
				</div>

			</div><!--col end -->
			<div class="col-md-6 kontak-form">
				<?php 
				$shortcode = get_theme_mod('kontak_shortcode');
				if ($shortcode){
					echo do_shortcode($shortcode);
				} ?>
			</div><!--col end -->
		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<div class="wrapper hr-line" style="background-color: <?php echo $warna_2;?>;">
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html> 
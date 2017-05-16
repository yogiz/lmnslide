<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,500,500i|Ubuntu:300,300i,400,400i,500" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<?php 
// Setting dasar 

global $warna_1;
if (get_theme_mod('warna_1')) {
	$warna_1 = get_theme_mod('warna_1');
} else {$warna_1 = '#FCB714';}
global $warna_2;
if (get_theme_mod('warna_2')) {
	$warna_2 = get_theme_mod('warna_2');
} else {$warna_2 = '#242426';}


 ?>

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

	/*footer*/
	.kontak-form input.wpcf7-form-control,.kontak-form textarea.wpcf7-form-control{
	    background: <?php echo $warna_1;?>;
	    border-radius: 0;
	    border: 0px;
	    color:<?php echo $warna_2;?>;
	}
	.kontak-form input.wpcf7-form-control:focus,.kontak-form textarea.wpcf7-form-control:focus{
	    background: <?php echo $warna_1;?>;
	}
	.kontak-form .form-group, .wpcf7 .wpcf7-form p {
    	margin-bottom: 0px;
	}
	.kontak-isi .border-icon i.fa{
		font-size: 30px;
		color: white;
	}
	.kontak-isi .border-icon {
		background-color: <?php echo $warna_2;?>;
	}

/*single*/

	.hentry, aside.widget, .comment-single{
    	border-top: 15px solid <?php echo $warna_2;?>;
	    padding: 15px;
	    background: #E6E6E6;
	    margin-bottom: 15px;
    }

    .menu-kategori li.menu-item a{
    	background-color: <?php echo $warna_2;?>;
    }

   	.understrap-read-more-link{
   		background-color: <?php echo $warna_2;?>;
	    padding: 6px 25px;
	    color: white;
	    border-radius: 20px;
   	}

/*desain*/
	.paket-item{
		color :<?php echo $warna_2;?>;
	}
	.paket-box {
		background-color: <?php echo $warna_1;?>;
	}
	.paket-harga {
		background-color: <?php echo $warna_2;?>;
		color :<?php echo $warna_1;?>;
	}


</style>


<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" style="background-color: <?php echo $warna_2;?>;">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-title">
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
				</div>
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
	</div><!-- .wrapper-navbar end -->

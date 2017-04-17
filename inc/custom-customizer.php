<?php 
if ( ! function_exists( 'lmnslide_custom_customize' ) ) {
	function lmnslide_custom_customize( $wp_customize ) {


	    $wp_customize->add_setting('warna_1',array('default' => '#FCB714'));
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'warna_1', 
			array(
				'label'      => __( 'Warna #1', 'lmnslide' ),
				'description'=> '',
				'section'    => 'colors',
				'settings'   => 'warna_1',
			) ) 
		);

	    $wp_customize->add_setting('warna_2',array('default' => '#242426'));
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'warna_2', 
			array(
				'label'      => __( 'Warna #2', 'lmnslide' ),
				'description'=> '',
				'section'    => 'colors',
				'settings'   => 'warna_2',
			) ) 
		);

/*======================= HOMEPAGE ================================*/
		// Add Panels 
    	$wp_customize->add_panel(
    		'lmnslide_homepage', 
    		array(
    			'title' => esc_html__('[+] Pengaturan Web-home', 'lmnslide'),
    			'description' => '', 'capability' => 'edit_theme_options',
    			'theme_supports' => '', 'priority' => 200
    			)
    		);

    	/******** section hero ********/
	    $wp_customize->add_section('lmnslide_hero',array(
	        'title' => __('Setting Hero/Slogan','lmnslide'),
	        'priority' => 0,
	        'panel' => 'lmnslide_homepage'
	    ));

    	//Hero caption
	    $wp_customize->add_setting('hero_back_caption_1',array('default' => 'Setting hero caption #1'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'hero_back_caption_1', 
			array(
				'label'      => __( 'Hero Caption #1', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_hero',
				'settings'   => 'hero_back_caption_1',
			) ) 
		);
	    $wp_customize->add_setting('hero_back_caption_2',array('default' => 'Setting hero caption #2'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'hero_back_caption_2', 
			array(
				'label'      => __( 'Hero Caption #2', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_hero',
				'settings'   => 'hero_back_caption_2',
			) ) 
		);
	    $wp_customize->add_setting('hero_back_caption_3',array('default' => 'Setting hero caption #3'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'hero_back_caption_3', 
			array(
				'label'      => __( 'Hero Caption #3', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_hero',
				'settings'   => 'hero_back_caption_3',
			) ) 
		);

    	//Hero Background image 
	    $wp_customize->add_setting('hero_back_img');
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'hero_back_img', 
			array(
				'label'      => __( 'Hero Background Image', 'lmnslide' ),
				'description'=> 'Pilih gambar untuk hero background',
				'section'    => 'lmnslide_hero',
				'settings'   => 'hero_back_img',
			) ) 
		);


    	/******** section produk ********/
	    $wp_customize->add_section('lmnslide_home_produk',array(
	        'title' => __('Setting Produk','lmnslide'),
	        'priority' => 0,
	        'panel' => 'lmnslide_homepage'
	    ));

	    // produk 1

	    $wp_customize->add_setting('home_produk_title_1',array('default' => 'Setting produk title #1'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'home_produk_title_1', 
			array(
				'label'      => __( 'Produk title #1', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_home_produk',
				'settings'   => 'home_produk_title_1',
			) ) 
		);

	    $wp_customize->add_setting('home_produk_image_1');
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'home_produk_image_1', 
			array(
				'label'      => __( 'Produk image #1', 'lmnslide' ),
				'description'=> 'Pilih gambar untuk hero background',
				'section'    => 'lmnslide_home_produk',
				'settings'   => 'home_produk_image_1',
			) ) 
		);

	    $wp_customize->add_setting('home_produk_url_1');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'home_produk_url_1', 
			array(
				'label'      => __( 'Produk url #1', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_home_produk',
				'settings'   => 'home_produk_url_1',
				'type'		 => 'url'
			) ) 
		);

		// produk 2

	    $wp_customize->add_setting('home_produk_title_2',array('default' => 'Setting produk title #2'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'home_produk_title_2', 
			array(
				'label'      => __( 'Produk title #2', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_home_produk',
				'settings'   => 'home_produk_title_2',
			) ) 
		);

		$wp_customize->add_setting('home_produk_image_2');
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'home_produk_image_2', 
			array(
				'label'      => __( 'Produk image #2', 'lmnslide' ),
				'description'=> 'Pilih gambar untuk hero background',
				'section'    => 'lmnslide_home_produk',
				'settings'   => 'home_produk_image_2',
			) ) 
		);

	    $wp_customize->add_setting('home_produk_url_2');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'home_produk_url_2', 
			array(
				'label'      => __( 'Produk url #2', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_home_produk',
				'settings'   => 'home_produk_url_2',
				'type'		 => 'url'
			) ) 
		);

    	/******** section testimonial ********/
	    $wp_customize->add_section('lmnslide_home_testi',array(
	        'title' => __('Setting Testimonial','lmnslide'),
	        'priority' => 0,
	        'panel' => 'lmnslide_homepage'
	    ));

	    $wp_customize->add_setting('home_testi_title',array('default' => 'TESTIMONIAL'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'home_testi_title', 
			array(
				'label'      => __( 'Judul Section', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_home_testi',
				'settings'   => 'home_testi_title',
			) ) 
		);

		$wp_customize->add_setting('home_testi_image');
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'home_testi_image', 
			array(
				'label'      => __( 'Image background', 'lmnslide' ),
				'description'=> 'Ukuran optimal <br> tinggi: 550px dan panjang:1140px',
				'section'    => 'lmnslide_home_testi',
				'settings'   => 'home_testi_image',
			) ) 
		);

	}
}

add_action('customize_register','lmnslide_custom_customize');




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

	}
}

add_action('customize_register','lmnslide_custom_customize');




<?php 
if ( ! function_exists( 'lmnslide_customize_training' ) ) {
	function lmnslide_customize_training( $wp_customize ) {

	// Add Panels 
	$wp_customize->add_panel(
		'lmnslide_training', 
		array(
			'title' => esc_html__('[+] Pengaturan Training', 'lmnslide'),
			'description' => '', 'capability' => 'edit_theme_options',
			'theme_supports' => '', 'priority' => 251
			)
		);

    	/******** section hero caption ********/
	    $wp_customize->add_section('lmnslide_training_caption',array(
	        'title' => __('Setting Hero/Slogan','lmnslide'),
	        'priority' => 1,
	        'panel' => 'lmnslide_training'
	    ));

    	//Hero caption
	    $wp_customize->add_setting('hero_training_caption_1',array('default' => 'Setting hero caption #1'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'hero_training_caption_1', 
			array(
				'label'      => __( 'Hero Caption #1', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_training_caption',
				'settings'   => 'hero_training_caption_1',
			) ) 
		);
	    $wp_customize->add_setting('hero_training_caption_2',array('default' => 'Setting hero caption #2'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'hero_training_caption_2', 
			array(
				'label'      => __( 'Hero Caption #2', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_training_caption',
				'settings'   => 'hero_training_caption_2',
			) ) 
		);

		//Hero Background image 
		$wp_customize->add_section('lmnslide_training_background',array(
	        'title' => __('Setting Background Image','lmnslide'),
	        'priority' => 0,
	        'panel' => 'lmnslide_training'
	    ));
    	
	    $wp_customize->add_setting('hero_training_img');
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'hero_training_img', 
			array(
				'label'      => __( 'Hero Background Image', 'lmnslide' ),
				'description'=> 'Pilih gambar untuk hero background',
				'section'    => 'lmnslide_training_background',
				'settings'   => 'hero_training_img',
			) ) 
		);

		//Hero Title section
		$wp_customize->add_section('lmnslide_training_title_section',array(
	        'title' => __('Setting Judul Section','lmnslide'),
	        'priority' => 2,
	        'panel' => 'lmnslide_training'
	    ));

	    $wp_customize->add_setting('lmnslide_training_title',array('default' => 'JADWAL TRAINING'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'lmnslide_training_title', 
			array(
				'label'      => __( 'Setting Judul Training Section', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_training_title_section',
				'settings'   => 'lmnslide_training_title',
			) ) 
		);

	}
}


add_action('customize_register','lmnslide_customize_training');
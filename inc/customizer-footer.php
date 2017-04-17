<?php 
if ( ! function_exists( 'lmnslide_customize_footer' ) ) {
	function lmnslide_customize_footer( $wp_customize ) {

	// Add Panels 
	$wp_customize->add_panel(
		'lmnslide_footer', 
		array(
			'title' => esc_html__('[+] Pengaturan Footer', 'lmnslide'),
			'description' => '', 'capability' => 'edit_theme_options',
			'theme_supports' => '', 'priority' => 251
			)
		);

    	/******** section hero ********/
	    $wp_customize->add_section('lmnslide_kontak_section',array(
	        'title' => __('Setting Kontak Kami','lmnslide'),
	        'priority' => 0,
	        'panel' => 'lmnslide_footer'
	    ));

	    $wp_customize->add_setting('kontak_alamat');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'kontak_alamat', 
			array(
				'label'      => __( 'Alamat', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_kontak_section',
				'settings'   => 'kontak_alamat',
			) ) 
		);
	    $wp_customize->add_setting('kontak_whatsapp');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'kontak_whatsapp', 
			array(
				'label'      => __( 'Whatsapp', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_kontak_section',
				'settings'   => 'kontak_whatsapp',
			) ) 
		);

	    $wp_customize->add_setting('kontak_telepon');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'kontak_telepon', 
			array(
				'label'      => __( 'telepon', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_kontak_section',
				'settings'   => 'kontak_telepon',
			) )
		);

	    $wp_customize->add_setting('kontak_instagram');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'kontak_instagram', 
			array(
				'label'      => __( 'instagram', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_kontak_section',
				'settings'   => 'kontak_instagram',
				'type'		 => 'url'
			) )
		);

	    $wp_customize->add_setting('kontak_facebook');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'kontak_facebook', 
			array(
				'label'      => __( 'facebook', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_kontak_section',
				'settings'   => 'kontak_facebook',
				'type'		 => 'url'
			) )
		);

	    $wp_customize->add_setting('kontak_twitter');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'kontak_twitter', 
			array(
				'label'      => __( 'twitter', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_kontak_section',
				'settings'   => 'kontak_twitter',
				'type'		 => 'url'
			) )
		);

	    $wp_customize->add_setting('kontak_background');
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'hero_back_img', 
			array(
				'label'      => __( '
					Background Image', 'lmnslide' ),
				'description'=> 'Pilih gambar untuk hero background',
				'section'    => 'lmnslide_hero',
				'settings'   => 'hero_back_img',
			) ) 
		);


	}
}


add_action('customize_register','lmnslide_customize_footer');
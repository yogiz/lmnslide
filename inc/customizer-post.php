<?php 
if ( ! function_exists( 'lmnslide_customize_post' ) ) {
	function lmnslide_customize_post( $wp_customize ) {

	// Add Panels 
	$wp_customize->add_panel(
		'lmnslide_kategori', 
		array(
			'title' => esc_html__('[+] Kategori Pada Sidebar', 'lmnslide'),
			'capability' => 'edit_theme_options',
			'theme_supports' => '', 'priority' => 252
			)
		);

    	/******** section hero caption ********/
	    $wp_customize->add_section('lmnslide_kategori_caption',array(
	        'title' => __('Judul Kategori','lmnslide'),
	        'priority' => 1,
	        'panel' => 'lmnslide_kategori',
	        'description' => 'Untuk list kategorinya silahkan buat pada menu, kemudian setting pada <i>lokasi menu</i> atau <i>menu location</i> aktifkan pada bagian <i>kategori</i> '
	    ));

    	//Hero caption
	    $wp_customize->add_setting('kategori_sidebar_title',array('default' => 'Kategori'));
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'kategori_sidebar_title', 
			array(
				'label'      => __( 'Setting Judul', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_kategori_caption',
				'settings'   => 'kategori_sidebar_title',
			) ) 
		);

		//Hero Background image 
		$wp_customize->add_section('lmnslide_kategori_image',array(
	        'title' => __('Setting Image Link','lmnslide'),
	        'priority' => 3,
	        'panel' => 'lmnslide_kategori'
	    ));

	    for ($i=1; $i <= 3; $i++) { 
		    $wp_customize->add_setting('kategori_sidebar_image_'.$i);
			$wp_customize->add_control( 
				new WP_Customize_Image_Control( 
				$wp_customize, 
				'kategori_sidebar_image_'.$i, 
				array(
					'label'      => __( 'Masukkan gambar #'.$i, 'lmnslide' ),
					'description'=> 'Pilih gambar untuk hero background',
					'section'    => 'lmnslide_kategori_image',
					'settings'   => 'kategori_sidebar_image_'.$i,
				) ) 
			);
		    $wp_customize->add_setting('kategori_sidebar_link_'.$i);
			$wp_customize->add_control( 
				new WP_Customize_Control( 
				$wp_customize, 
				'kategori_sidebar_link_'.$i, 
				array(
					'label'      => __( 'Url untuk gambar #'.$i, 'lmnslide' ),
					'description'=> '',
					'section'    => 'lmnslide_kategori_image',
					'settings'   => 'kategori_sidebar_link_'.$i,
					'type'		 => 'url'
				) ) 
			);
	    }
    	


	}
}


add_action('customize_register','lmnslide_customize_post');
<?php 
if ( ! function_exists( 'lmnslide_customize_desain' ) ) {
	function lmnslide_customize_desain( $wp_customize ) {

		// Add Panels 
    	$wp_customize->add_panel(
    		'lmnslide_desain', 
    		array(
    			'title' => esc_html__('[+] Pengaturan Jasa Desain', 'lmnslide'),
    			'description' => '', 'capability' => 'edit_theme_options',
    			'theme_supports' => '', 'priority' => 253
    			)
    		);


    	/******** section hero caption ********/

	    $wp_customize->add_section('lmnslide_desain_caption',array(
	        'title' => __('Setting Hero/Slogan','lmnslide'),
	        'priority' => 1,
	        'panel' => 'lmnslide_desain'
	    ));
	    for ($i=1; $i <=3 ; $i++) { 
		    $wp_customize->add_setting('hero_desain_caption_'.$i,array('default' => 'Setting hero caption #'.$i));
			$wp_customize->add_control( 
				new WP_Customize_Control( 
				$wp_customize, 
				'hero_desain_caption_'.$i, 
				array(
					'label'      => __( 'Hero Caption #'.$i, 'lmnslide' ),
					'description'=> '',
					'section'    => 'lmnslide_desain_caption',
					'settings'   => 'hero_desain_caption_'.$i,
				) ) 
			);
	    }
	    //Hero Background image 
	    $wp_customize->add_setting('hero_desain_img');
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'hero_desain_img', 
			array(
				'label'      => __( 'Hero Background Image', 'lmnslide' ),
				'description'=> 'Pilih gambar untuk hero background',
				'section'    => 'lmnslide_desain_caption',
				'settings'   => 'hero_desain_img',
			) ) 
		);


		/******** section service ********/
		for ($j=1; $j <=2 ; $j++) {

			$wp_customize->add_section('lmnslide_desain_service'.$j,array(
		        'title' => __('Setting Service #'.$j,'lmnslide'),
		        'panel' => 'lmnslide_desain'
		    ));

		    $wp_customize->add_setting('desain_service_caption_'.$j,array('default' => 'Setting service title #'.$j));
			$wp_customize->add_control( 
				new WP_Customize_Control( 
				$wp_customize, 
				'desain_service_caption_'.$j, 
				array(
					'label'      => __( 'Setting Title Service', 'lmnslide' ),
					'description'=> '',
					'section'    => 'lmnslide_desain_service'.$j,
					'settings'   => 'desain_service_caption_'.$j,
				) ) 
			);

		    for ($i=1; $i <=3 ; $i++) { 
			    $wp_customize->add_setting('desain_service'.$j.'_caption_'.$i);
				$wp_customize->add_control( 
					new WP_Customize_Control( 
					$wp_customize, 
					'desain_service'.$j.'_caption_'.$i, 
					array(
						'label'      => __( 'SERVICE CAPTION #'.$i, 'lmnslide' ),
						'description'=> '',
						'section'    => 'lmnslide_desain_service'.$j,
						'settings'   => 'desain_service'.$j.'_caption_'.$i,
					) ) 
				);

			    $wp_customize->add_setting('desain_service'.$j.'_img_'.$i);
				$wp_customize->add_control( 
					new WP_Customize_Image_Control( 
					$wp_customize, 
					'desain_service'.$j.'_img_'.$i, 
					array(
						'label'      => __( 'Service Image'.$i, 'lmnslide' ),
						'description'=> 'Pilih gambar untuk service',
						'section'    => 'lmnslide_desain_service'.$j,
						'settings'   => 'desain_service'.$j.'_img_'.$i,
					) ) 
				);

				$wp_customize->add_setting('desain_service'.$j.'_desc_'.$i);
				$wp_customize->add_control( 
					new WP_Customize_Control( 
					$wp_customize, 
					'desain_service'.$j.'_desc_'.$i, 
					array(
						'label'      => __( 'Service Description'.$i.' (optional)', 'lmnslide' ),
						'description'=> 'Untuk menambahkan deskripsi di pada service',
						'section'    => 'lmnslide_desain_service'.$j,
						'settings'   => 'desain_service'.$j.'_desc_'.$i,
					) ) 
				);

		    }

		}

	/******** section harga ********/
	$wp_customize->add_section('lmnslide_desain_harga',array(
        'title' => __('Setting Harga','lmnslide'),
        'panel' => 'lmnslide_desain'
    ));

    $wp_customize->add_setting('desain_harga_title',array('default' => 'HARGA'));
	$wp_customize->add_control( 
		new WP_Customize_Control( 
		$wp_customize, 
		'desain_harga_title', 
		array(
			'label'      => __( 'Setting Title Harga', 'lmnslide' ),
			'description'=> '',
			'section'    => 'lmnslide_desain_harga',
			'settings'   => 'desain_harga_title',
		) ) 
	);

	$wp_customize->add_setting('desain_harga_description');
	$wp_customize->add_control( 
		new WP_Customize_Control( 
		$wp_customize, 
		'desain_harga_description', 
		array(
			'label'      => __( 'Deskripsi dan ketentuan', 'lmnslide' ),
			'description'=> 'Isikan perbaris',
			'section'    => 'lmnslide_desain_harga',
			'settings'   => 'desain_harga_description',
			'type'		 => 'textarea'
		) ) 
	);


	$plan = array (
			1 => 'basic',
			2 => 'regular',
			3 => 'silver',
			4 => 'gold',
			5 => 'platinum'
		);

	for ($i=1; $i <= 5 ; $i++) {

		$wp_customize->add_section('lmnslide_desain_harga_'.$plan[$i],array(
	        'title' => __('<-> Paket '.$plan[$i],'lmnslide'),
	        'panel' => 'lmnslide_desain'
	    ));

	    $wp_customize->add_setting('desain_harga_'.$plan[$i].'_harga');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'desain_harga_'.$plan[$i].'_harga', 
			array(
				'label'      => __( 'Harga (Rp)', 'lmnslide' ),
				'description'=> 'dalam rupiah, misal "2000"',
				'section'    => 'lmnslide_desain_harga_'.$plan[$i],
				'settings'   => 'desain_harga_'.$plan[$i].'_harga',
			) ) 
		);

		$wp_customize->add_setting('desain_harga_'.$plan[$i].'_desc');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'desain_harga_'.$plan[$i].'_desc', 
			array(
				'label'      => __( 'Fitur Yang di peroleh', 'lmnslide' ),
				'description'=> 'isikan perbaris',
				'section'    => 'lmnslide_desain_harga_'.$plan[$i],
				'settings'   => 'desain_harga_'.$plan[$i].'_desc',
				'type'		 => 'textarea'
			) )
		);

		$wp_customize->add_setting('desain_harga_'.$plan[$i].'_file');
		$wp_customize->add_control( 
			new WP_Customize_Control( 
			$wp_customize, 
			'desain_harga_'.$plan[$i].'_file', 
			array(
				'label'      => __( 'File Type', 'lmnslide' ),
				'description'=> '',
				'section'    => 'lmnslide_desain_harga_'.$plan[$i],
				'settings'   => 'desain_harga_'.$plan[$i].'_file',
			) ) 
		);

	}

	}
}


add_action('customize_register','lmnslide_customize_desain');
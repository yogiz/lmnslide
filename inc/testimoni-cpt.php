<?php 
//testimoni CPT
add_action( 'init', 'codex_testimoni_init' );

function codex_testimoni_init() {
	$labels = array(
		'name'               => _x( 'testimoni', 'post type general name', 'lmnslide' ),
		'singular_name'      => _x( 'testimoni', 'post type singular name', 'lmnslide' ),
		'menu_name'          => _x( 'testimoni', 'admin menu', 'lmnslide' ),
		'name_admin_bar'     => _x( 'testimoni', 'add new on admin bar', 'lmnslide' ),
		'add_new'            => _x( 'Add New', 'testimoni', 'lmnslide' ),
		'add_new_item'       => __( 'Add New testimoni', 'lmnslide' ),
		'new_item'           => __( 'New testimoni', 'lmnslide' ),
		'edit_item'          => __( 'Edit testimoni', 'lmnslide' ),
		'view_item'          => __( 'View testimoni', 'lmnslide' ),
		'all_items'          => __( 'All testimoni', 'lmnslide' ),
		'search_items'       => __( 'Search testimoni', 'lmnslide' ),
		'parent_item_colon'  => __( 'Parent testimoni:', 'lmnslide' ),
		'not_found'          => __( 'No testimoni found.', 'lmnslide' ),
		'not_found_in_trash' => __( 'No testimoni found in Trash.', 'lmnslide' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'lmnslide' ),
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimoni' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor', 'thumbnail' )
	);

	register_post_type( 'testimoni', $args );
}

//testimoni metabox
add_action( 'add_meta_boxes', 'jabatan_metabox' );
function jabatan_metabox() {
    
    $screens = array( 'testimoni' );
    foreach ( $screens as $screen ) {
        add_meta_box(
            'testimoni',            // Unique ID
            'Setting',      // Box title
            'jabatan_cb',  // Content callback
             $screen                      // post type
        );
    }
}
function jabatan_cb($post) {
	$meta_jabatan = get_post_meta( get_the_ID(), '_meta_jabatan', true );

    ?>
    	<h4>Isi jabatan di bawah ini</h4>
    	<input type="text" name="in_jabatan" id="in_jabatan" value="<?php echo $meta_jabatan;?>" >
    <?php
}

add_action ('save_post', 'meta_jabatan_save');
function meta_jabatan_save($post_id) {
        update_post_meta( $post_id, '_meta_jabatan', $_POST['in_jabatan']);
}
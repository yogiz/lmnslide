<?php 

// Contact CPT

add_action( 'init', 'codex_klien_init' );

function codex_klien_init() {
	$labels = array(
		'name'               => _x( 'klien', 'post type general name', 'lmnslide' ),
		'singular_name'      => _x( 'klien', 'post type singular name', 'lmnslide' ),
		'menu_name'          => _x( 'klien', 'admin menu', 'lmnslide' ),
		'name_admin_bar'     => _x( 'klien', 'add new on admin bar', 'lmnslide' ),
		'add_new'            => _x( 'Add New', 'klien', 'lmnslide' ),
		'add_new_item'       => __( 'Add New klien', 'lmnslide' ),
		'new_item'           => __( 'New klien', 'lmnslide' ),
		'edit_item'          => __( 'Edit klien', 'lmnslide' ),
		'view_item'          => __( 'View klien', 'lmnslide' ),
		'all_items'          => __( 'All klien', 'lmnslide' ),
		'search_items'       => __( 'Search klien', 'lmnslide' ),
		'parent_item_colon'  => __( 'Parent klien:', 'lmnslide' ),
		'not_found'          => __( 'No klien found.', 'lmnslide' ),
		'not_found_in_trash' => __( 'No klien found in Trash.', 'lmnslide' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'lmnslide' ),
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'klien' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','thumbnail' )
	);

	register_post_type( 'klien', $args );
}
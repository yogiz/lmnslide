<?php

//jadwal CPT
add_action( 'init', 'codex_training_init' );

function codex_training_init() {
	$labels = array(
		'name'               => _x( 'training', 'post type general name', 'elemenslide' ),
		'singular_name'      => _x( 'training', 'post type singular name', 'elemenslide' ),
		'menu_name'          => _x( 'training', 'admin menu', 'elemenslide' ),
		'name_admin_bar'     => _x( 'training', 'add new on admin bar', 'elemenslide' ),
		'add_new'            => _x( 'Add New', 'training', 'elemenslide' ),
		'add_new_item'       => __( 'Add New training', 'elemenslide' ),
		'new_item'           => __( 'New training', 'elemenslide' ),
		'edit_item'          => __( 'Edit training', 'elemenslide' ),
		'view_item'          => __( 'View training', 'elemenslide' ),
		'all_items'          => __( 'All training', 'elemenslide' ),
		'search_items'       => __( 'Search training', 'elemenslide' ),
		'parent_item_colon'  => __( 'Parent training:', 'elemenslide' ),
		'not_found'          => __( 'No training found.', 'elemenslide' ),
		'not_found_in_trash' => __( 'No training found in Trash.', 'elemenslide' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'elemenslide' ),
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'training' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor', 'thumbnail' )
	);
	register_post_type( 'training', $args );
}

// editor untuk jadwal training

define('WYSIWYG_JADWAL_TRAINING_ID', 'my-editor');
define('WYSIWYG_EDITOR_JADWAL_ID', 'myeditor'); //Important for CSS that this is different
define('WYSIWYG_JADWAL_KEY', 'extra-content');
add_action('admin_init', 'wysiwyg_register_jadwal_training');
function wysiwyg_register_jadwal_training(){
        add_meta_box(WYSIWYG_JADWAL_TRAINING_ID, __('Isikan Jadwal Disini', 'wysiwyg'), 'wysiwyg_render_jadwal_training', 'training');
}
function wysiwyg_render_jadwal_training(){
	
        global $post;
        
        $meta_box_id = WYSIWYG_JADWAL_TRAINING_ID;
        $editor_id = WYSIWYG_EDITOR_JADWAL_ID;
        
        //Add CSS & jQuery goodness to make this work like the original WYSIWYG
        echo "
                <style type='text/css'>
                        #$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
                        #$editor_id{width:100%;}
                        #$meta_box_id #editorcontainer{background:#fff !important;}
                        #$meta_box_id #$editor_id_fullscreen{display:none;}
                </style>
            
                <script type='text/javascript'>
                        jQuery(function($){
                                $('#$meta_box_id #editor-toolbar > a').click(function(){
                                        $('#$meta_box_id #editor-toolbar > a').removeClass('active');
                                        $(this).addClass('active');
                                });
                                
                                if($('#$meta_box_id #edButtonPreview').hasClass('active')){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                }
                                
                                $('#$meta_box_id #edButtonPreview').click(function(){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                });
                                
                                $('#$meta_box_id #edButtonHTML').click(function(){
                                        $('#$meta_box_id #ed_toolbar').show();
                                });
				//Tell the uploader to insert content into the correct WYSIWYG editor
				$('#media-buttons a').bind('click', function(){
					var customEditor = $(this).parents('#$meta_box_id');
					if(customEditor.length > 0){
						edCanvas = document.getElementById('$editor_id');
					}
					else{
						edCanvas = document.getElementById('content');
					}
				});
                        });
                </script>
        ";
        
        //Create The Editor
        $content = get_post_meta($post->ID, WYSIWYG_JADWAL_KEY, true);
        the_editor($content, $editor_id);
        
        //Clear The Room!
        echo "<div style='clear:both; display:block;'></div>";
}
add_action('save_post', 'wysiwyg_save_jadwal_training');
function wysiwyg_save_jadwal_training(){
	
        $editor_id = WYSIWYG_EDITOR_JADWAL_ID;
        $meta_key = WYSIWYG_JADWAL_KEY;
	
        if(isset($_REQUEST[$editor_id]))
                update_post_meta($_REQUEST['post_ID'], WYSIWYG_JADWAL_KEY, $_REQUEST[$editor_id]);
                
}



// editor untuk fasilitas training

define('WYSIWYG_FASILITAS_TRAINING_ID', 'my-editor1');
define('WYSIWYG_EDITOR_FASILITAS_ID', 'myeditor1'); //Important for CSS that this is different
define('WYSIWYG_FASILITAS_KEY', 'extra-content1');
add_action('admin_init', 'wysiwyg_register_faslitias_training');
function wysiwyg_register_faslitias_training(){
        add_meta_box(WYSIWYG_FASILITAS_TRAINING_ID, __('Isikan Fasilitas Disini', 'wysiwyg'), 'wysiwyg_render_fasilitas_training', 'training');
}
function wysiwyg_render_fasilitas_training(){
	
        global $post;
        
        $meta_box_id1 = WYSIWYG_FASILITAS_TRAINING_ID;
        $editor_id1 = WYSIWYG_EDITOR_FASILITAS_ID;
        
        //Add CSS & jQuery goodness to make this work like the original WYSIWYG
        echo "
                <style type='text/css'>
                        #$meta_box_id1 #edButtonHTML, #$meta_box_id1 #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
                        #$editor_id1{width:100%;}
                        #$meta_box_id1 #editorcontainer{background:#fff !important;}
                        #$meta_box_id1 #$editor_id1_fullscreen{display:none;}
                </style>
            
                <script type='text/javascript'>
                        jQuery(function($){
                                $('#$meta_box_id1 #editor-toolbar > a').click(function(){
                                        $('#$meta_box_id1 #editor-toolbar > a').removeClass('active');
                                        $(this).addClass('active');
                                });
                                
                                if($('#$meta_box_id1 #edButtonPreview').hasClass('active')){
                                        $('#$meta_box_id1 #ed_toolbar').hide();
                                }
                                
                                $('#$meta_box_id1 #edButtonPreview').click(function(){
                                        $('#$meta_box_id1 #ed_toolbar').hide();
                                });
                                
                                $('#$meta_box_id1 #edButtonHTML').click(function(){
                                        $('#$meta_box_id1 #ed_toolbar').show();
                                });
				//Tell the uploader to insert content into the correct WYSIWYG editor
				$('#media-buttons a').bind('click', function(){
					var customEditor = $(this).parents('#$meta_box_id1');
					if(customEditor.length > 0){
						edCanvas = document.getElementById('$editor_id1');
					}
					else{
						edCanvas = document.getElementById('content');
					}
				});
                        });
                </script>
        ";
        
        //Create The Editor
        $content = get_post_meta($post->ID, WYSIWYG_FASILITAS_KEY, true);
        the_editor($content, $editor_id1);
        
        //Clear The Room!
        echo "<div style='clear:both; display:block;'></div>";
}
add_action('save_post', 'wysiwyg_save_fasilitas_training');
function wysiwyg_save_fasilitas_training(){
	
        $editor_id1 = WYSIWYG_EDITOR_FASILITAS_ID;
        $meta_key1 = WYSIWYG_FASILITAS_KEY;
	
        if(isset($_REQUEST[$editor_id1]))
                update_post_meta($_REQUEST['post_ID'], WYSIWYG_FASILITAS_KEY, $_REQUEST[$editor_id1]);
                
}



<?php

add_action( 'init', 'smamo_add_reference' );

function smamo_add_reference() {
	register_post_type( 'reference', array(

        'menu_icon' 		 => 'dashicons-category',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'reference' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail', 'editor'),
        'labels'             => array(

            'name'               => _x( 'Referencer', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Reference', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Referencer', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Referencer', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'refererence', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny refererence', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se refererence', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find refererence', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny reference.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

<?php

add_action( 'init', 'smamo_add_ikon' );

function smamo_add_ikon() {
	register_post_type( 'ikon', array(

        'menu_icon' 		 => 'dashicons-tag',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'ikon' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title'),
        'labels'             => array(

            'name'               => _x( 'Ikoner', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Ikon', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Ikoner', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Ikoner', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'ikon', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny ikon', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se ikon', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find ikon', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt ikon.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

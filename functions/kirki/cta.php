<?php

$cf_array = array(
    0 => '(ingen)',
);
$cf = get_posts(array(
    'post_type' => 'wpcf7_contact_form',
    'posts_per_page' => -1
));

foreach($cf as $c){
    $cf_array[$c->ID] = esc_attr__( $c->post_name, 'smamo' );
}

Kirki::add_section( 'cta_section', array(
    'title'          => __( 'Call to action' ),
    'description'    => __( 'Rediger indstillinger for kontaktsektion' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'cta_section', array(
	'type'        => 'toggle',
	'settings'    => 'cta_show',
	'label'       => __( 'Aktiver sektion', 'my_textdomain' ),
	'section'     => 'cta_section',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'cta_section', array(
	'type'        => 'toggle',
	'settings'    => 'cta_show_mb',
	'label'       => __( 'Vis en liste af medarbejdere', 'my_textdomain' ),
	'section'     => 'cta_section',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'cta_section', array(
    'type'        => 'text',
    'settings'    => 'cta_pre_text',
    'label'       => esc_attr__( 'Fortekst', 'smamo' ),
    'section'     => 'cta_section',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'cta_section', array(
    'type'        => 'text',
    'settings'    => 'cta_button_text',
    'label'       => esc_attr__( 'Knaptekst', 'smamo' ),
    'section'     => 'cta_section',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'cta_section', array(
	'type'        => 'select',
	'settings'    => 'cta_form',
	'label'       => __( 'Brug formular', 'my_textdomain' ),
	'section'     => 'cta_section',
	'default'     => '0',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => $cf_array,
) );


Kirki::add_field( 'cta_section', array(
    'type'        => 'text',
    'settings'    => 'cta_form_pre_text',
    'label'       => esc_attr__( 'Formulartekst', 'smamo' ),
    'section'     => 'cta_section',
    'default'     => '',
    'priority'    => 10,
) );

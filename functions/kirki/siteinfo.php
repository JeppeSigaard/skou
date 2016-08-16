<?php
add_action( "customize_register", "smamo_theme_customize_register" );
function smamo_theme_customize_register( $wp_customize ) {
    $wp_customize->remove_section('themes');
    $wp_customize->remove_section('static_front_page');
}



Kirki::add_field( 'siteinfo', array(
    'type'        => 'text',
    'settings'    => 'info_name',
    'label'       => esc_attr__( 'Firmanavn', 'smamo' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'siteinfo', array(
    'type'        => 'text',
    'settings'    => 'info_address',
    'label'       => esc_attr__( 'Adresse', 'smamo' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'siteinfo', array(
    'type'        => 'text',
    'settings'    => 'info_post',
    'label'       => esc_attr__( 'Postnummer', 'smamo' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'siteinfo', array(
    'type'        => 'text',
    'settings'    => 'info_by',
    'label'       => esc_attr__( 'By', 'smamo' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'siteinfo', array(
    'type'        => 'text',
    'settings'    => 'info_email',
    'label'       => esc_attr__( 'Email', 'smamo' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'siteinfo', array(
    'type'        => 'text',
    'settings'    => 'info_telefon',
    'label'       => esc_attr__( 'Telefonnummer', 'smamo' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'siteinfo', array(
    'type'        => 'text',
    'settings'    => 'info_telefax',
    'label'       => esc_attr__( 'Telefax', 'smamo' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'siteinfo', array(
        'settings' => 'info_logo',
        'label'    => __( 'Logo', 'smamo' ),
        'section'  => 'title_tagline',
        'type'     => 'image',
        'priority' => 10,
        'default'  => '',
        'description' => __('Vælg det logo, som skal vises i headeren på forsiden. Du kan bruge vektorfil (SVG) eller billedfil (PNG, JPEG, GIF)','smamo'),
    ) );

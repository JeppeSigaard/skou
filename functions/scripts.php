<?php

add_action('wp_enqueue_scripts','theme_enqueue_scripts');
function theme_enqueue_scripts(){

    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style/style.css', false, false, 'all' );

    wp_deregister_script('jquery');
    wp_register_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',array(),'1',true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/script-min.js' , array('jquery'), '1', true);

}


add_action( 'admin_enqueue_scripts', 'smamo_enqueue_admin_scripts' );
function smamo_enqueue_admin_scripts(){
    if(isset($_GET['_']['flow_page'])){
        echo '<script> var flow_page = "' . esc_attr($_GET['_']['flow_page']) . '"</script>';
    }
    wp_enqueue_script('admin-script', get_template_directory_uri() . '/js/admin/min/admin-min.js' , array('jquery'), '1', true);
}

<?php

$post_id = false;
global $wp_query;
if( null !== $wp_query->query_vars['pdf']){$post_id = esc_attr($wp_query->query_vars['pdf']);}
if(isset($_GET['pdf'])){$post_id = esc_attr($_GET['pdf']);}

if (!$post_id || !get_post_status($post_id)){
    status_header( 404 );
    get_header();
    get_template_part('templates/404');
    get_footer();
}

else{

    echo 'generator ready for post '.$post_id;

}

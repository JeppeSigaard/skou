<?php

if(is_page()){
    get_template_part('template-parts/sidebar/page-menu');
}

if('post' === get_post_type(get_the_ID())){
    get_template_part('template-parts/sidebar/post-menu');
}

if('reference' === get_post_type(get_the_ID())){

    if(is_singular()){
        get_template_part('template-parts/sidebar/reference-meta');
    }

    get_template_part('template-parts/sidebar/reference-menu');
}

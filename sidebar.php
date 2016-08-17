<?php

function render_page_widgets(){

    if(get_post_meta(get_the_ID(),'page_widgets_active',true) === 'active'){

        $widget_areas = get_post_meta(get_the_ID(), 'page_widgets', false);

        foreach($widget_areas as $area){
            dynamic_sidebar($area);
        }

    }

}

if(is_page()){
    get_template_part('template-parts/sidebar/page-menu');
    render_page_widgets();
    dynamic_sidebar('page-widgets');
}

if('post' === get_post_type(get_the_ID())){
    get_template_part('template-parts/sidebar/post-menu');
    render_page_widgets();
    dynamic_sidebar('post-widgets');
}

if('reference' === get_post_type(get_the_ID())){

    if(is_singular()){
        get_template_part('template-parts/sidebar/reference-meta');
    }

    get_template_part('template-parts/sidebar/reference-menu');
    render_page_widgets();
    dynamic_sidebar('reference-widgets');
}

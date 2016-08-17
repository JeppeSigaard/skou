<?php

add_theme_support('widgets');

$widget_areas = array(
    'post-widgets' => 'Widgets til Nyheder',
    'page-widgets' => 'Widgets til Sider',
    'reference-widgets' => 'Widgets til Referencer',
    'widget-area-1' => 'Ekstra Widget Område 1',
    'widget-area-2' => 'Ekstra Widget Område 2',
    'widget-area-3' => 'Ekstra Widget Område 3',
    'widget-area-4' => 'Ekstra Widget Område 4',
    'widget-area-5' => 'Ekstra Widget Område 5',
    'widget-area-6' => 'Ekstra Widget Område 6',
);


foreach($widget_areas as $slug => $name){

    register_sidebar( array(
        'name' => __( $name, 'smamo' ),
        'id' => $slug,
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar-widget-title">',
        'after_title'   => '</h2>',
    ) );

}

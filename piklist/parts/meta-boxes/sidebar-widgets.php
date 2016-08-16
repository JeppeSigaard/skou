<?php

/*
Title: Widgetområder
Post Type: page, post, reference
scope: post_meta
order: 2
*/

/*
$widget_areas = array(
    'none' => '(vælg fra listen)',
    'widget-area-1' => 'Område 1',
    'widget-area-2' => 'Område 2',
    'widget-area-3' => 'Område 3',
    'widget-area-4' => 'Område 4',
    'widget-area-5' => 'Område 5',
    'widget-area-6' => 'Område 6',
);


piklist('field',array(
    'type' => 'checkbox',
    'value' => '0',
    'field' => 'page_widgets_active',
    'label' => __('Tilføj widgets til denne sides sidebar'),
    'choices' => array(
        'active' => 'Aktiver widgets for side',
    ),
));

piklist('field',array(
    'type' => 'select',
    'columns' => 8,
    'conditions' => array(
        array(
            'field' => 'page_widgets_active',
            'value' => 'active'
        ),
    ),
    'field' => 'page_widgets',
    'value' => 'none',
    'description' => 'Tilføj widgetområder til siden',
    'choices' => $widget_areas,
    'add_more' => true,
    'label' => __('Vælg områder'),
));
*/

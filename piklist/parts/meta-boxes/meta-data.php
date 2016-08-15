<?php

/*
Title: Metadata
Post Type: reference
scope: post_meta
order: 1
*/

piklist('field', array(
    'type' => 'text',
    'field' => 'meta_header',
    'label' => 'Overskrift',
));

piklist('field', array(
    'type' => 'group',
    'label' => __('Datasæt'),
    'columns' => 12,
    'add_more' => true,
    'scope' => 'post_meta',
    'field' => 'meta_data',
    'serialize' => 'true',
    'fields' => array(
        array(
            'type' => 'text',
            'field' => 'name',
            'columns' => 6,
            'label' => 'navn',
        ),
        array(
            'type' => 'text',
            'field' => 'value',
            'columns' => 6,
            'label' => 'værdi',
        )
    )
));

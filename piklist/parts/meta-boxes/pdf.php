<?php

/*
Title: Opret pdf
Post Type: reference
scope: post_meta
order: 2
Flow: Reference flow
Tab: PDF
*/


piklist('field',array(
    'type' => 'select',
    'field' => 'pdf_type',
    'value' => 'auto',
    'label' => __('Indstillinger for PDF','smamo'),
    'choices' => array(
        'auto' => 'Generer automatisk pdf (standard)',
        'custom' => 'Upload speciel',
        'none' => 'Ingen PDF',
    ),
));

piklist('field',array(
    'type' => 'file',
    'field' => 'pdf_img',
    'label' => __('Billeder','smamo'),
    'conditions' => array(
        array(
            'field' => 'pdf_type',
            'value' => 'auto'
        ),
    ),
));


piklist('field',array(
    'type' => 'select',
    'field' => 'pdf_layout',
    'value' => 'auto',
    'label' => __('Skabelon','smamo'),
    'choices' => array(
        '1' => 'Standardskabelon',
        '2' => 'Ingen tekst',
        '3' => 'Ingen faktaboks',
    ),
    'conditions' => array(
        array(
            'field' => 'pdf_type',
            'value' => 'auto'
        ),
    ),
));



piklist('field',array(
    'type' => 'file',
    'field' => 'pdf_custom',
    'label' => __('Vælg fil fra biblioteket','smamo'),
    'conditions' => array(
        array(
            'field' => 'pdf_type',
            'value' => 'custom'
        ),
    ),
));

piklist('field',array(
    'type' => 'pdf-preview',
    'field' => 'pdf_preview',
    'label' => __('Forhåndsvisning','smamo'),
));

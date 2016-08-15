<?php
/*
Title: Kontaktoplysninger
Post Type: medarbejder
scope: post_meta
order: 1
*/

piklist('field',array(
    'type' => 'file',
    'field' => 'mb_pic',
    'label' => __('Billede','smamo'),
    'attributes' => array(
        'class' => 'widefat',
    ),
));


piklist('field',array(
    'type' => 'text',
    'field' => 'mb_name',
    'label' => __('Navn','smamo'),
    'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field',array(
    'type' => 'text',
    'field' => 'mb_position',
    'label' => __('Stilling','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field',array(
    'type' => 'text',
    'field' => 'mb_email',
    'label' => __('Email','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field',array(
    'type' => 'text',
    'field' => 'mb_phone',
    'label' => __('Telefonnummer','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));

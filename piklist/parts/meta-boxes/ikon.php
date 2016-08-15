<?php

/*
Title: Indstillinger for ikon
Post Type: ikon
order: 10

*/

piklist('field',array(
    'type' => 'file',
    'field' => 'ikon_img',
    'label' => __('Billede','smamo'),
    'options' => array(
        'modal_title' => __('Tilføj billede','smamo'),
        'button' => __('Tilføj','smamo')
    )
));

piklist('field',array(
    'type' => 'url',
    'field' => 'ikon_url',
    'label' => __('Henvisning','smamo'),
));

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'ikon_new',
    'label' => 'Ny fane',
    'value' => 'active',
    'choices' => array(
      'active' => 'Åben henvisning i en ny fane'
    )
));

<?php

/*
Title: Tilføj til forsidens slideshow
Post Type: reference
order: 10

*/

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'show_in_slide',
    'label' => 'Tilføj siden til forsidens slideshow',
    'value' => '0',
    'choices' => array(
      'active' => 'Aktiver for denne side'
    )
));

piklist('field', array(
    'type' => 'file',
    'field' => 'page_slide_image',
    'label' => 'Tilpas slidebillede',
    'button' => 'Tilføj',
    'description' => __('Overskriver thumbnail, som bruges som standard','smamo'),
    'options' => array(
      'modal_title' => __('Tilføj billede','smamo'),
        'button' => __('Tilføj','smamo')
    )
 ));

piklist('field', array(
    'type' => 'text',
    'field' => 'page_slide_title',
    'description' => __('Overskriver sidens header, som bruges som standard','smamo'),
    'label' => 'Tilpas tekst',
    'attributes' => array(
       'class' => 'widefat'
     )
));


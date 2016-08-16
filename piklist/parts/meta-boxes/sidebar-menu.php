<?php
/*
Title: Sidebarens menu
Post Type: page, post, reference
scope: post_meta
order: 1
*/

/*
global $post;
$auto_desc = '';
switch (get_post_type($post->ID)){

    case 'post':
        $auto_desc = 'Seneste nyheder (standard)';
        break;

    case 'page':
        $auto_desc = 'En menu af undersider (standard)';
        break;

    case 'reference':
        $auto_desc = 'En menu af referencekategorier';
        break;
}

$menu_array = array(
    '0' => '(vælg menu fra listen)'
);
$menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
foreach($menus as $menu){
    $menu_array[$menu->term_id] = $menu->name;
}

piklist('field',array(
    'type' => 'select',
    'field' => 'sidemenu_select',
    'value' => 'auto',
    'label' => __('I sidebaren, vis','smamo'),
    'choices' => array(
        'auto' => $auto_desc,
        'custom' => 'En tilpasset menu',
        'none' => 'Ingen menu',
    ),
));

piklist('field',array(
    'type' => 'select',
    'field' => 'custom_menu_select',
    'label' => __('Vælg menu fra menu editoren eller <a href="'. admin_url('/nav-menus.php?action=edit&menu=0') .'">opret en ny menu</a>','smamo'),
    'conditions' => array(
        array(
            'field' => 'sidemenu_select',
            'value' => 'custom'
        ),
    ),
    'choices' => $menu_array,
));
*/

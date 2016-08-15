<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title(' · ', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('template-parts/header/vector'); ?>
<header class="site-header">
    <a class="header-logo" href="<?php echo esc_url(get_bloginfo('url')); ?>" title="<?php echo esc_attr(get_bloginfo('title')) ?>">
       <?php if (get_theme_mod('custom_logo')){

            $custom_logo_id = get_theme_mod( ‘custom_logo’ );
            $image = wp_get_attachment_image_src( $custom_logo_id , ‘full’ );
            echo $image[0];
        }

        else{echo esc_attr(get_bloginfo('title'));} ?>
    </a>
    <a href="#" class="top-menu-expand"><svg><use xlink:href="#icon-settings"></use></svg></a>
    <nav class="header-top-menu">
        <?php wp_nav_menu(array(
            'theme_location' => 'top_menu',
            'container' => false,
            'fallback_cb' => null,
            'menu_id' => 'site-top-menu',
            'menu_class' => 'site-top-menu',
        )); ?>
    </nav>
    <?php get_template_part('template-parts/header/main-menu') ?>
</header>

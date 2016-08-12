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
    <div class="header-fixed">
        <nav class="main-menu">
             <?php wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container' => false,
                'fallback_cb' => null,
                'menu_id' => 'site-main-menu',
                'menu_class' => 'site-main-menu',
            )); ?>

            <form class="header-search-form" action="" method="get">
                <input type="text" name="s">
                <input type="submit">
            </form>
            <a href="#" class="header-search"><svg><use xlink:href="#icon-search"></use></svg></a>
            <a href="#" class="header-phone"><svg><use xlink:href="#icon-phone"></use></svg></a>
            <a href="#" class="header-hamburger"><svg><use xlink:href="#icon-menu"></use></svg></a>
        </nav>
    </div>
</header>

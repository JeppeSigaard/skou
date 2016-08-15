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
        <a href="<?php echo smamo_tel(esc_attr(get_theme_mod('info_telefon'))) ?>" class="header-phone"><svg><use xlink:href="#icon-phone"></use></svg></a>
        <a href="#" class="header-hamburger"><svg><use xlink:href="#icon-menu"></use></svg></a>
    </nav>
</div>

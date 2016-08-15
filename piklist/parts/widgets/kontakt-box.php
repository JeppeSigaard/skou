<?php

/*
Title: Kontakt Box
Description: Vis en boks med kontaktoplysninger
*/

$image_url = wp_get_attachment_image_src($settings['kontakt_boks_img'][0], '400-300' );

$legals = array(
    'name'      => esc_attr(get_theme_mod('info_name')),
    'address'   => esc_attr(get_theme_mod('info_address')),
    'postby'    => esc_attr(get_theme_mod('info_post')) . ' ' . esc_attr(get_theme_mod('info_by')),
    'tlf'       => '<a href="'. smamo_tel(get_theme_mod('info_telefon')) .'">' . esc_attr(get_theme_mod('info_telefon')) . '</a>',
    'email'       => '<a href="mailto:'. antispambot(sanitize_email(esc_attr(get_theme_mod('info_email')))) .'">' . esc_attr(get_theme_mod('info_email')) . '</a>',
);

?>
<div class="sidebar-widget address-card">
    <a href="<?php echo esc_url($settings['kontakt_boks_img_link']) ?>" class="address-map" data-bg="<?php echo $image_url[0] ?>"></a>
    <div class="address-info">
        <span><strong><?php echo $legals['name'] ?></strong></span>
        <span><?php echo $legals['address'] ?></span>
        <span><?php echo $legals['postby'] ?></span>
        <br>
        <span><?php echo $legals['tlf'] ?></span>
        <span><?php echo $legals['email'] ?></span>
        </div>
</div>

<?php

if (get_theme_mod('cta_show') !== '0') :

$cta_pre = (get_theme_mod('cta_pre_text') !== '') ? esc_attr(get_theme_mod('cta_pre_text')) : 'Skal vi arbejde sammen?';
$cta_button = (get_theme_mod('cta_button_text') !== '') ? esc_attr(get_theme_mod('cta_button_text')) : 'Bliv kontaktet';
$show_mb = (get_theme_mod('cta_show_mb') !== '0') ? true : false;


if($show_mb){

    $mb = new WP_Query(array(
        'post_type' => 'medarbejder',
        'posts_per_page' => -1,
    ));

}

?>
<section class="cta-section section-padding">
    <div class="max-width">
        <header class="cta-header">
            <span><?php echo $cta_pre ?></span>
            <a href="#" class="cta-button cta-activate"><?php echo $cta_button ?></a>
        </header>
        <?php if ($show_mb && $mb->have_posts()) : $num_posts = sizeof($mb->posts) ?>
        <div class="staff-list has-<?php echo $num_posts ?>">
            <?php

            while ($mb->have_posts()) : $mb->the_post();

            $mb_pic = wp_get_attachment_image_src( get_post_meta(get_the_ID(),'mb_pic',true), 'profile' );
            if(!isset($mb_pic[0])){
                $mb_pic = array(
                    0 => get_template_directory_uri() . '/statics/def.jpg',
                );
            }
            $mb_email = get_post_meta(get_the_ID(),'mb_email',true);
            $mb_phone = get_post_meta(get_the_ID(),'mb_phone',true);

            ?>
            <div class="staff-item">
                <div class="staff-img" data-bg="<?php echo esc_url($mb_pic[0]) ?>"></div>
                <p class="staff-name"><?php echo get_post_meta(get_the_ID(),'mb_name',true); ?></p>
                <p class="staff-position"><?php echo get_post_meta(get_the_ID(),'mb_position',true); ?></p>
                <a class="staff-email" href="mailto:<?php echo esc_attr($mb_email); ?>"><?php echo esc_attr($mb_email); ?></a>
                <a class="staff-phone" href="<?php echo smamo_tel($mb_phone); ?>"><?php echo esc_attr($mb_phone) ?></a>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</section>
<?php endif;

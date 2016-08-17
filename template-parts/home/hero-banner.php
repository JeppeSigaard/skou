<?php

$banner_items = new WP_Query(array(
    'post_type' => array('page','post','reference'),
    'posts_per_page' => 12,
    'meta_key' => 'show_in_slide',
    'meta_value' => 'active',
));

if($banner_items->have_posts()) :

?>
<section class="hero-banner">
    <?php
        while($banner_items->have_posts()) :
        $banner_items->the_post();

        $def_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'widescreen' );
        if(!isset($def_img[0])){
            $def_img = array(
                0 => get_template_directory_uri() . '/statics/def.jpg',
            );
        }

        $box_img =  wp_get_attachment_image_src(get_post_meta(get_the_ID(),'page_slide_image',true), 'widescreen');

        $box_title = get_post_meta(get_the_ID(),'page_slide_title',true);
    ?>
    <div class="banner-item loading" data-bg="<?php echo (isset($box_img[0])) ? esc_url($box_img[0]) : esc_url($def_img[0]) ?>">
        <a href="<?php the_permalink() ?>" class="banner-overlay"></a>
        <footer class="banner-item-footer">
            <h2><?php echo ($box_title !== '') ? esc_attr($box_title) : esc_attr(get_the_title()); ?></h2>
            <?php if('reference' === get_post_type(get_the_ID())) : ?>
            <a href="<?php the_permalink() ?>"><svg><use xlink:href="#icon-right"></use></svg></a>
            <a target="blank" href="<?php echo smamo_pdf_link(get_the_ID()); ?>"><svg><use xlink:href="#icon-print"></use></svg></a>
            <?php else : ?>
            <a target="blank" href="<?php echo smamo_share(get_the_ID(),'li') ?>"><svg><use xlink:href="#icon-linkedin"></use></svg></a>
            <a target="blank" href="<?php echo smamo_share(get_the_ID(),'fb') ?>"><svg><use xlink:href="#icon-facebook"></use></svg></a>
            <?php endif; ?>
        </footer>
    </div>
    <?php endwhile; ?>
</section>
<?php endif; wp_reset_postdata();?>

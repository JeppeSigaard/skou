<?php

$logos = new WP_Query(array(
    'post_type' => 'ikon',
    'posts_per_page' => 6,
));

if ( $logos->have_posts()) :

?>

<section class="logo-row">
    <?php

    while ($logos->have_posts()) : $logos->the_post();

    $ikon_img = wp_get_attachment_image_src(get_post_meta(get_the_ID(),'ikon_img',true), 'full' );
    if($ikon_img === '') { continue;}
    $ikon_url = get_post_meta(get_the_ID(),'ikon_url',true);

    ?>
    <a title="<?php the_title(); ?>" href="<?php echo ($ikon_url !== '') ? esc_url($ikon_url): '#'; ?>" class="row-logo" data-bg="<?php echo esc_url($ikon_img[0]); ?>"></a>
    <?php endwhile; ?>
</section>
<?php endif; wp_reset_postdata();

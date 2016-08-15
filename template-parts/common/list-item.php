<?php

$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'widescreen-half' );

?>

<article <?php post_class('list-item loading') ?> data-bg="<?php echo $image_url[0] ?>">
    <a class="list-item-link" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"></a>
    <div class="list-item-excerpt">
        <div class="inner">
            <h2><?php the_title(); ?></h2>
            <?php
                if( has_excerpt() ) { $excerpt = get_the_excerpt(); }
                else {$excerpt = wp_strip_all_tags( get_the_content(null) ); }

                echo wp_trim_words($excerpt, $num_words = 30, $more = null);
            ?>
        </div>
    </div>
    <footer class="list-item-footer">
        <?php if ('post' === get_post_type(get_the_ID())) : ?>
        <span class="item-footer-date"><?php the_date('d. F Y') ?></span>
        <a target="blank" href="<?php echo smamo_share(get_the_ID(),'li') ?>"><svg><use xlink:href="#icon-linkedin"></use></svg></a>
        <a target="blank" href="<?php echo smamo_share(get_the_ID(),'fb') ?>"><svg><use xlink:href="#icon-facebook"></use></svg></a>
        <?php elseif ('reference' === get_post_type(get_the_ID())) : ?>
        <a href="#"><svg><use xlink:href="#icon-download"></use></svg></a>
        <a href="#"><svg><use xlink:href="#icon-print"></use></svg></a>
        <?php endif; ?>
    </footer>
</article>

<section class="article-section">
    <main class="article-main">
        <?php
        $i = 0;

        while( have_posts()) : the_post();

        $i ++; if ($i === 1) :

        $has_thumbnail = false;

        if (has_post_thumbnail()) : $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'widescreen' );

        $has_thumbnail = true;

        ?>

        <div class="article-img loading" data-bg="<?php echo esc_url($image_url[0]) ?>"></div>
        <?php endif; ?>
        <article <?php post_class();  ?>>
            <?php get_template_part('template-parts/common/article-header'); ?>
            <div class="article-content wp-styles">
                <?php the_content(); ?>
            </div>
        </article>
        <div class="item-list internal">
            <div class="list-width">
            <?php else : ?>
                <?php get_template_part('template-parts/common/list-item'); ?>
            <?php endif; endwhile; ?>
            </div>
        </div>
    </main>
    <aside class="article-aside">
        <div class="aside-inner fixed-aside<?php echo ($has_thumbnail) ? ' no-padding' : ' padding'; ?>">
            <?php get_sidebar(); ?>
        </div>
    </aside>
</section>

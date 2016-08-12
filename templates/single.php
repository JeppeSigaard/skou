<?php if (is_single() || is_singular() ) : while( have_posts()) : the_post(); ?>
<section class="article-section">
    <main class="article-main">
        <?php if (has_post_thumbnail()) : $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'widescreen' ); ?>

        <div class="article-img loading" data-bg="<?php echo esc_url($image_url[0]) ?>"></div>
        <?php endif; ?>
        <article <?php post_class();  ?>>
            <header class="article-header">
                <h1 class="article-title"><?php the_title(); ?></h1>
                <?php if ('post' === get_post_type(get_the_ID())) : ?>
                <div class="article-byline">
                    <span class="article-date"><?php the_date('d. F Y') ?></span>
                    <a href="#"><svg><use xlink:href="#icon-linkedin"></use></svg></a>
                    <a href="#"><svg><use xlink:href="#icon-facebook"></use></svg></a>
                </div>
                <?php endif; ?>
            </header>
            <div class="article-content wp-styles">
                <?php the_content(); ?>
            </div>
        </article>
    </main>
    <aside class="article-aside">
        <div class="aside-inner fixed-aside">
            <?php get_sidebar(); ?>
        </div>
    </aside>
</section>
<?php endwhile; endif; ?>
<?php get_template_part('template-parts/common/news-section'); ?>

<section class="home-article section-padding">
    <div class="max-width">
        <main>
            <article>
                <h1 class="article-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </main>
        <aside>
            <?php wp_nav_menu(array(
                'theme_location' => 'home_links',
                'container' => false,
                'fallback_cb' => null,
                'menu_id' => 'home-links',
                'menu_class' => 'home-links',
            )); ?>
        </aside>
    </div>
</section>

<section class="no-results section-padding ">
    <header class="section-header max-width">
        <h1><?php echo ( isset($_GET['s']) ) ? '0 resultater for "' .  esc_attr($_GET['s']) . '"' : 'Siden ikke fundet'; ?></h1>
    </header>
    <div class="max-width">
        <form action="<?php echo esc_url(get_bloginfo('url')) ?>" method="get" class="no-res-search-form">
            <fieldset class="large">
                <input type="text" name="s" placeholder="Søg">
                <div class="icon">
                    <svg><use xlink:href="#icon-search"></use></svg>
                    <input type="submit">
                </div>
            </fieldset>
        </form>
        <div class="item-list">
            <?php
                $news = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,

                ));

                if($news->have_posts()) {


                while ($news->have_posts() ){
                    $news->the_post();
                    get_template_part('template-parts/common/list-item');
                }}
            ?>
        </div>
    </div>
</section>

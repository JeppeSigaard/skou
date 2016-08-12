<?php

$news = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 5,

));

if($news->have_posts()) :

?>


<section class="news-section section-padding">
    <div class="max-width">
        <header class="section-header">
            <h2>Aktuelt</h2>
        </header>
        <div class="item-list">
            <?php
                while ($news->have_posts() ){
                    $news->the_post();
                    get_template_part('template-parts/common/list-item');
                }
            ?>
        </div>
    </div>
</section>
<?php endif; ?>

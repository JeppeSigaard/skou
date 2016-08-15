<section class="search-results section-padding">
    <div class="max-width">
        <header class="section-header"><h1><?php echo sizeof($wp_query->posts) ?> resultater for "<?php echo esc_attr($_GET['s']) ?>"</h1></header>
        <div class="item-list">
            <?php while (have_posts()) { the_post(); get_template_part('template-parts/common/list-item'); } ?>
        </div>
    </div>

</section>

<?php

$submenu = new WP_Query(array(
    'post_type' => 'post',
));

?>


<nav class="sidebar-menu">
    <h3 class="menu-parent">Seneste nyt</h3>
    <ul>
        <?php while( $submenu->have_posts() ) : $submenu->the_post(); ?>
            <li class="menu-item">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span class="date"><?php the_date('d. F Y') ?></span>
            </li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
</nav>

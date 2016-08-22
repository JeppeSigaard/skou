<?php



$current_id = get_the_ID();
$parents = get_post_ancestors( $current_id );
$parent_id = ($parents) ? $parents[count($parents)-1]: $post->ID;

$submenu = new WP_Query(array(
    'post_type' => 'page',
    'posts_per_page' => -1,
    'post_parent' => $parent_id,
));

$parent = get_post($parent_id);

if ($submenu->have_posts()) :

?>

<nav class="sidebar-menu">
    <h3 class="menu-parent"><a href="<?php echo get_permalink($parent_id) ?>"><?php echo $parent->post_title ?></a></h3>
    <ul>
        <?php while( $submenu->have_posts() ) : $submenu->the_post(); ?>
            <li class="menu-item<?php if (get_the_ID() === $current_id ) { echo ' current-menu-item';}  ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
</nav>


<?php endif; ?>

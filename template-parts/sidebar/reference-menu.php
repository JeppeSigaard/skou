<?php $cats = get_terms('referencer'); ?>


<nav class="sidebar-menu">
    <h3 class="menu-parent">Referencer</h3>
    <ul>
        <?php foreach($cats as $c) : ?>
        <li class="menu-item<?php if (is_tax('referencer',$c->term_id)) { echo ' current-menu-item';} ?>"><a href="<?php echo get_term_link($c->term_id)?>"><?php echo $c->name ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

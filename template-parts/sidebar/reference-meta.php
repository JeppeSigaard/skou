<?php
$meta_header = get_post_meta(get_the_ID(),'meta_header',true) or false;
$meta_info = get_post_meta(get_the_ID(),'meta_data',true) or false;
?>


<div class="ref-meta">
    <?php if ($meta_header) : ?>
    <header class="ref-meta-header">
        <h2><?php echo $meta_header ?></h2>
    </header>
    <dl class="ref-meta-info">
        <?php if ($meta_info) : foreach($meta_info as $info) : ?>
        <dt><?php echo esc_attr($info['name']) ?></dt>
        <dd><?php echo esc_attr($info['value']) ?></dd>
        <?php endforeach; endif?>
    </dl>
    <?php endif;  ?>
    <footer class="ref-meta-footer">
        <span>Download sag</span>
        <a href="<?php echo smamo_pdf_link(get_the_ID(),true); ?>"><svg><use xlink:href="#icon-download"></use></svg></a>
        <a href="<?php echo smamo_pdf_link(get_the_ID()); ?>"><svg><use xlink:href="#icon-print"></use></svg></a>
    </footer>
</div>

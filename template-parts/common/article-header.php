<header class="article-header">
    <h1 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    <?php if ('post' === get_post_type(get_the_ID())) : ?>
    <div class="article-byline">
        <span class="article-date"><?php the_date('d. F Y') ?></span>
        <a target="blank" href="<?php echo smamo_share(get_the_ID(),'li') ?>"><svg><use xlink:href="#icon-linkedin"></use></svg></a>
        <a target="blank" href="<?php echo smamo_share(get_the_ID(),'fb') ?>"><svg><use xlink:href="#icon-facebook"></use></svg></a>
    </div>
    <?php elseif ('reference' === get_post_type(get_the_ID())) : ?>
    <div class="article-byline">
        <a href="#"><svg><use xlink:href="#icon-download"></use></svg></a>
        <a href="#"><svg><use xlink:href="#icon-print"></use></svg></a>
    </div>
    <?php endif; ?>
</header>

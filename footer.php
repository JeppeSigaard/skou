<?php get_template_part('template-parts/common/cta-section'); ?>
<?php get_template_part('template-parts/common/cta-form'); ?>
<footer class="site-footer section-padding">
    <div class="inner">
        <div class="footer-address">
            <span><?php echo esc_attr(get_theme_mod('info_name')) ?></span>
            <span><?php echo esc_attr(get_theme_mod('info_address')) ?></span>
            <span><?php echo esc_attr(get_theme_mod('info_post')) . ' ' . esc_attr(get_theme_mod('info_by')) ?></span>
        </div>
        <div class="footer-directory">
            <a href="<?php echo smamo_tel(esc_attr(get_theme_mod('info_telefon'))) ?>">Telefon: <?php echo esc_attr(get_theme_mod('info_telefon')) ?></a>
            <a href="<?php echo smamo_tel(esc_attr(get_theme_mod('info_telefax'))) ?>">Telefax: <?php echo esc_attr(get_theme_mod('info_telefax')) ?></a>
            <a href="mailto:<?php echo antispambot(get_theme_mod('info_email'),1) ?>">Email: <?php echo antispambot(get_theme_mod('info_email'),0) ?></a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

<?php

$cta_form = esc_attr(get_theme_mod('cta_form'));
if ( $cta_form && get_post($cta_form) !== '' )  :

$form_text = get_theme_mod('cta_form_pre_text');

?>
<section class="cta-form section-padding">
    <div class="inner max-width">
        <?php if ($form_text) : ?>
        <div class="form-text wp-styles"><p><?php echo esc_attr($form_text); ?></p><br/></div>
        <?php endif; ?>
        <?php echo do_shortcode('[contact-form-7 id="' . $cta_form . '"]'); ?>
    </div>
</section>
<?php endif;

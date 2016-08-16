<?php

$pdf_text = wp_trim_words(esc_attr(wp_strip_all_tags($post->post_content, $num_words = 20, $more = null)));

if (get_post_meta(get_the_ID(),'pdf_text',true) !== ''){
    $pdf_text = esc_attr(get_post_meta(get_the_ID(),'pdf_text',true));
}

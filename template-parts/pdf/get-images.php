<?php

$images = get_post_meta($post_id, 'pdf_img', false);
$pdf_img = array();
$i = 0;
while($i < 4){
    if(isset($images[$i]) && !empty($images[$i])){

        $l = wp_get_attachment_image_src($images[$i],'pdf-large');
        $m = wp_get_attachment_image_src($images[$i],'pdf-small');
        $s = wp_get_attachment_image_src($images[$i],'pdf-smaller');

        $pdf_img[] = array(

            'large' => $l[0],
            'small' => $m[0],
            'smaller' => $s[0],
        );
    }

    else{

        $pdf_img[] = array(
            'large' => get_template_directory_uri() . '/template-parts/pdf/img/missing-large.jpg',
            'small' => get_template_directory_uri() . '/template-parts/pdf/img/missing-small.jpg',
            'smaller' => get_template_directory_uri() . '/template-parts/pdf/img/missing-smaller.jpg',
        );
    }

    $i++;
}

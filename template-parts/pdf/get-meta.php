<?php

$pdf_meta = array(
    'header' => strtoupper(utf8_decode(get_post_meta(get_the_ID(),'meta_header',true))),
    'content' => get_post_meta(get_the_ID(),'meta_data',true),
);

if(empty($pdf_meta['header'])){
    $pdf_meta['header'] = utf8_decode('No header set');
}

if(empty($pdf_meta['content'])){
    $pdf_meta['content'] = array(

        0 => array(
            'name' => 'No data',
            'value' => ''
        )
    );
}

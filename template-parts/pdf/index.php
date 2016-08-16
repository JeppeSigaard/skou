<?php

$post_id = false;
global $wp_query;
if( null !== $wp_query->query_vars['pdf']){$post_id = esc_attr($wp_query->query_vars['pdf']);}
if(isset($_GET['pdf'])){$post_id = esc_attr($_GET['pdf']);}

if (!$post_id || !get_post_status($post_id)){
    status_header( 404 );
    get_header();
    get_template_part('templates/404');
    get_footer();
    die();
}

$post = get_post($post_id);

$type = get_post_meta($post_id,'pdf_type',true);
if($type === 'custom'){
    wp_redirect(wp_get_attachment_link(get_post_meta($post_id,'pdf_img',true)));
    die();
}

get_template_part('template-parts/pdf/class');
if(!class_exists('skou_pdf')){
    die('class not found');
}

$pdf = new skou_pdf();
$pdf->AliasNbPages();
$pdf->addFont('droidsans','','DroidSans.php');
$pdf->addFont('droidsans-bold','','DroidSans-Bold.php');
$pdf->SetTitle(iconv('UTF-8','cp1250//TRANSLIT',$post->post_title));
$pdf->SetAuthor(get_theme_mod('info_name'));
$pdf->SetMargins(0, 0);

$pdf->addPage();

require get_template_directory() . '/template-parts/pdf/get-images.php';
require get_template_directory() . '/template-parts/pdf/get-text.php';
require get_template_directory() . '/template-parts/pdf/get-meta.php';

require get_template_directory() . '/template-parts/pdf/header.php';

$template = get_post_meta($post_id,'pdf_layout', true);
require get_template_directory() . '/template-parts/pdf/template-' . ( $template !== '' ? $template : '1' ) . '.php';

require get_template_directory() . '/template-parts/pdf/footer.php';


if(isset($_GET['d']) && $_GET['d'] === '1'){
    $pdf->Output('D',iconv('UTF-8','cp1250//TRANSLIT',$post->post_title));
}
else{
    $pdf->Output();
}

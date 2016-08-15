<?php


get_functions_part(array(
    'menu',
    'scripts',
    'images',
));

get_functions_part(array(
    'reference',
    'medarbejder',
    'ikon',
),'post-types');


get_functions_part(array(
    'siteinfo',
),'kirki');

get_functions_part(array(
    'referencekategori',
),'terms');





// email
function sendEmail( $from_name, $from, $to, $subject, $message ){
    $header = "From: ".$from_name." <".$from.">\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=utf-8\r\n";
    $header.= "X-Priority: 1\r\n";
    $email = wp_mail($to, $subject, $message, $header);
    return $email;
}

// get_functions_part([$filnavn],[$undermappe]);
function smamo_include_functions_part_if_exists($fetch, $in = false){
    if ($in){$fetch = $in . '/' . $fetch;}
    $fetch = get_template_directory() . '/functions/' . $fetch . '.php';
    if(file_exists($fetch)){include_once $fetch;}
}

function get_functions_part($fetch, $in = false){
    if(is_array($fetch)){foreach($fetch as $p){smamo_include_functions_part_if_exists($p,$in);}}
    else{smamo_include_functions_part_if_exists($fetch,$in);}
}

// Rendér telefonnummer
function smamo_tel($str){
    $str = str_replace('+','00',$str);
    return 'tel:' . esc_attr(preg_replace('/[^0-9]/', '', $str));
}

// social knapper
function smamo_share($id = false, $platform = false){
    if(!$id || !$platform){return '#';}

    // Facebook
    if('fb' === $platform){
        return 'https://www.facebook.com/sharer/sharer.php?u=' . get_permalink($id);
    }


    if('li' === $platform){
        $share_post = get_post($id);
        $link = 'https://www.linkedin.com/shareArticle?mini=true';
        $link .= '&url=' . urlencode(get_permalink($id));
        $link .= '&title=' . urlencode($share_post->post_title);

        if(has_excerpt($id)){
            $link .= '&summary=' . urlencode($share_post->post_excerpt);
        }
        else{
            $link .= '&summary=' . urlencode(wp_trim_words(wp_strip_all_tags($share_post->post_content), $num_words = 20, $more = null));
        }

        $link .= '&source=' . urlencode(get_bloginfo('url'));


        return $link;
    }
}

function smamo_pdf_link($id){


}























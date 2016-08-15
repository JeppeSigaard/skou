<?php
 function smamo_pdf_rewrite() {
    add_rewrite_rule('^pdf/([0-9]+)/?', 'index.php?pdf=$matches[1]', 'top');
    add_rewrite_endpoint( 'pdf', EP_PERMALINK | EP_PAGES );
}
add_action('init', 'smamo_pdf_rewrite');

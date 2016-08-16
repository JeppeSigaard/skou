<?php

$pdf->SetFont('DroidSans','',9.5);
$pdf->setTextColor(255,255,255);

$box_height = 11;
$box_margin = 4;
$icon_width = 8;

$tel = get_theme_mod('info_telefon');
$tel_length = $pdf->GetStringWidth($tel);
$tel_box_width = $tel_length + ($box_margin * 2) + $icon_width;
$tel_png = get_template_directory() . '/template-parts/pdf/img/tel.png';

$email = get_theme_mod('info_email');
$email_length = $pdf->GetStringWidth($email);
$email_box_width = $email_length + ($box_margin * 2) + $icon_width;
$email_png = get_template_directory() . '/template-parts/pdf/img/email.png';

$fax = get_theme_mod('info_telefax');
$fax_length = $pdf->GetStringWidth($fax);
$fax_box_width = $fax_length + ($box_margin * 2) + $icon_width;
$fax_png = get_template_directory() . '/template-parts/pdf/img/fax.png';




$pdf->greenFill('3');
$pdf->rect($pdf->GetPageWidth() - $fax_box_width, $pdf->GetPageHeight() - $box_height, $fax_box_width, $box_height, 'F');
$pdf->image($fax_png,$pdf->GetPageWidth() - $fax_box_width + $box_margin/2, $pdf->GetPageHeight() - $box_height + 1.5, $icon_width, $icon_width);
$pdf->Text($pdf->GetPageWidth() - $fax_box_width + $box_margin + $icon_width, $pdf->GetPageHeight() - $box_height/2 + 1.2, $fax);

$pdf->greenFill('2');
$pdf->rect($pdf->GetPageWidth() - $fax_box_width - $tel_box_width, $pdf->GetPageHeight() - $box_height, $tel_box_width, $box_height, 'F');
$pdf->image($tel_png,$pdf->GetPageWidth() - $fax_box_width - $tel_box_width + $box_margin/2, $pdf->GetPageHeight() - $box_height + 1.9, $icon_width -1, $icon_width -1);
$pdf->Text($pdf->GetPageWidth() - $fax_box_width - $tel_box_width + $box_margin + $icon_width, $pdf->GetPageHeight() - $box_height/2 + 1.2, $tel);


$pdf->greenFill('1');
$pdf->rect($pdf->GetPageWidth() - $fax_box_width - $tel_box_width - $email_box_width, $pdf->GetPageHeight() - $box_height, $email_box_width, $box_height, 'F');
$pdf->image($email_png,$pdf->GetPageWidth() - $fax_box_width - $tel_box_width - $email_box_width + $box_margin/2, $pdf->GetPageHeight() - $box_height + 1.5, $icon_width, $icon_width);
$pdf->Text($pdf->GetPageWidth() - $fax_box_width - $tel_box_width - $email_box_width + $box_margin + $icon_width, $pdf->GetPageHeight() - $box_height/2 + 1.2, $email);


<?php

$pdf->SetTitle(iconv('UTF-8','cp1250//TRANSLIT',$post->post_title));

// Titel
$pdf->setXY(4,7);
$pdf->SetFont('DroidSans-Bold','',14);
$pdf->greenText('3');
$pdf->Write(0,get_theme_mod('info_name'));

// Tagline + kontaktinfo
$pdf->SetFont('DroidSans','',8.5);
$pdf->setTextColor(150,150,150);
$text = get_bloginfo('description');
$text .= $pdf->dot() . utf8_decode(get_theme_mod('info_address'));
$text .= $pdf->dot() . utf8_decode(get_theme_mod('info_post')) . ' ' . utf8_decode(get_theme_mod('info_by'));
$text .= $pdf->dot() . utf8_decode(str_replace('http://', '', get_bloginfo('url')));
$pos = $pdf->GetPageWidth() - $pdf->GetStringWidth($text) - 7;
$pdf->setXY($pos,7);
$pdf->cell($pdf->GetStringWidth($text), 0, $text);

// Streg
$pdf->greenFill('3');
$pdf->rect(0,13,210,.7,'F');

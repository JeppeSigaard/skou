<?php

// Topbillede
$pdf->image($pdf_img[0]['large'], 4,18,$pdf->GetPageWidth() - 8,0,'jpg');


// Overskrift
$pdf->setFont('DroidSans','',22);
$heading = utf8_decode(strtoupper($post->post_title));
$heading_len = $pdf->GetStringWidth($heading);

$pdf->setTextColor(80);
$pdf->setFillColor(250);

$pdf->rect(4,18,$heading_len + 18, 22, 'F');
$pdf->Text(12,31,$heading);

// Billede 2
$pdf->setFillColor(255);
$pdf->rect(4, 120, 210, 66, 'F');
$pdf->image($pdf_img[1]['small'], $pdf->GetPageWidth() / 2 + 2, 124, $pdf->GetPageWidth() / 2 - 6, 0, 'jpg');

// Billede 3
$pdf->image($pdf_img[2]['small'], 4, 124, $pdf->GetPageWidth() / 2 - 6, 0, 'jpg');

// Billede 4
$pdf->image($pdf_img[3]['small'], 4, 194, 0, 87.1, 'jpg');
$pdf->setFillColor(255);
$pdf->rect($pdf->GetPageWidth() / 2 - 1.9, 193.9, 4, 87.2, 'F');

// Metaboks
$top_margin = 205;


$pdf->greenFill('3');
$pdf->rect($pdf->GetPageWidth() / 2 + 2, 193.9, $pdf->GetPageWidth() / 2 - 6, 87.2, 'F');

$pdf->setFont('DroidSans-Bold','',11);
$pdf->setTextColor(255);
$pdf->Text($pdf->GetPageWidth() / 2 + 7, $top_margin, $pdf_meta['header']);

$pdf->setFont('DroidSans','',10);

foreach($pdf_meta['content'] as $data){

    $top_margin += 10;

    $pdf->Text($pdf->GetPageWidth() / 2 + 7, $top_margin, utf8_decode($data['name']));

    $pdf->Text($pdf->GetPageWidth() / 2 + 40, $top_margin, utf8_decode($data['value']));

}

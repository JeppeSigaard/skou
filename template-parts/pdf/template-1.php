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
$pdf->rect($pdf->GetPageWidth() - 99, 110, 95, 66, 'F');
$pdf->image($pdf_img[1]['smaller'], $pdf->GetPageWidth() - 95, 114, 91, 0, 'jpg');

// Billede 3
$pdf->setFillColor(255);
$pdf->rect(4, 140, $pdf->GetPageWidth() - 103.2, 66, 'F');
$pdf->image($pdf_img[2]['small'], 4, 144, $pdf->GetPageWidth() - 103.2, 0, 'jpg');



// Tekstboks
$pdf->setFont('DroidSans','',10);
$pdf->setTextColor(50);
$pdf->SetMargins(4, 0, $pdf->GetPageWidth() - 103.2);
$pdf->SetY(219);
$pdf->Write(6, $pdf_text);


// Metaboks
$top_margin = 189;

$pdf->greenFill('3');
$pdf->rect($pdf->GetPageWidth() - 95, 179, 91, 102, 'F');

$pdf->setFont('DroidSans-Bold','',11);
$pdf->setTextColor(255);
$pdf->Text($pdf->GetPageWidth() - 91, $top_margin, $pdf_meta['header']);

$pdf->setFont('DroidSans','',10);

foreach($pdf_meta['content'] as $data){

    $top_margin += 10;

    $pdf->Text($pdf->GetPageWidth() - 91, $top_margin, utf8_decode($data['name']));

    $pdf->Text($pdf->GetPageWidth() - 61, $top_margin, utf8_decode($data['value']));

}

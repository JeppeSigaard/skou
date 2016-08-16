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


// Billede 4
$top_margin = 189;
$pdf->image($pdf_img[3]['small'], $pdf->GetPageWidth() - 95, 179, 0, 102);
$pdf->rect($pdf->getPageWidth() - 4, 179, 4, 102, 'F');

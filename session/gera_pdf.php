<?php

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial','B',32);
$pdf -> Cell(40, 10, 'MIAU MIAU MIAU');
$pdf -> Image('https://www.pngkit.com/png/full/411-4114861_orange-cat-lay-down-cat-background.png', 30, 30, 514, 321, 'png');

$pdf -> AddPage();
$pdf -> SetFont('Arial','B',12);

// Tentativa sozinha:
$pdf -> Cell(75, 10, "PORTE DA EMPRESA", 1,0, "C", false);
$pdf -> Cell(120, 10, "SALARIO MEDIO", 1,1, "C", false);


$pdf -> Cell(75, 10, "", 1,0, "C", false);
$pdf -> Cell(24, 10, "Trainee", 1,0, "C", false);
$pdf -> Cell(24, 10, "Junior", 1,0, "C", false);
$pdf -> Cell(24, 10, "Pleno", 1,0, "C", false);
$pdf -> Cell(24, 10, "Senior", 1,0, "C", false);
$pdf -> Cell(24, 10, "Master", 1,1, "C", false);


$pdf -> Cell(75, 10, "Grande empresa", 1,0, "C", false);
$pdf -> SetFont('Arial','',10);
$pdf -> Cell(24, 10, "R$ 3.116,59", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 3.895,74", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 4.869,67", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 6.087,09", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 7.608,86", 1,1, "C", false);

$pdf -> SetFont('Arial','B',12);
$pdf -> Cell(75, 10, "Media empresa", 1,0, "C", false);
$pdf -> SetFont('Arial','',10);
$pdf -> Cell(24, 10, "R$ 2.397,38", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 2.996,72", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 3.745,90", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 4.682,38", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 5.852,98", 1,1, "C", false);

$pdf -> SetFont('Arial','B',12);
$pdf -> Cell(75, 10, "Pequena empresa", 1,0, "C", false);
$pdf -> SetFont('Arial','',10);
$pdf -> Cell(24, 10, "R$ 1.844,14", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 2.305,17", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 2.881,46", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 3.601,83", 1,0, "C", false);
$pdf -> Cell(24, 10, "R$ 4.502,29", 1,1, "C", false);




$pdf -> Output();




?>
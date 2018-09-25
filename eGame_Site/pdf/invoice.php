<?php
	require('fpdf181/fpdf.php');

	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();

	$pdf->SetFont('Arial','B',14);

	$pdf->Cell(120,5,'E GAME SITE',0,0);
	$pdf->Cell(69,5,'INVOICE',0,1);

	$pdf->Cell(120,5,'www.game.com',0,0);
	$pdf->Cell(69,5,'',0,1);

	$pdf->Cell(120,5,'Hazaribag,',0,0);
	$pdf->Cell(69,5,'Invoice No.:',0,1);

	$pdf->Cell(120,5,'Dhaka-1207',0,0);
	$pdf->Cell(69,5,'Customer ID:',0,1);

	$pdf->Cell(120,5,'Contact No.: 01534551539',0,0);
	$pdf->Cell(69,5,'Date of Order:',0,1);

	$pdf->Cell(189,5,'',0,1);

	$pdf->Cell(120,5,'',0,0);
	$pdf->Cell(69,5,'Payment By: MasterCard',0,1);

	$pdf->Cell(120,5,'',0,0);
	$pdf->Cell(69,5,'Card Number:',0,1);

	$pdf->Cell(189,5,'',0,1);
	$pdf->Cell(189,5,'',0,1);
	$pdf->Cell(189,5,'',0,1);
	$pdf->Cell(189,5,'',0,1);

	$pdf->SetFont('Arial','B',12);

	$pdf->Cell(20,5,'ITEM NO.',1,0,'C');
	$pdf->Cell(80,5,'DESCRIPTION',1,0,'C');
	$pdf->Cell(20,5,'QTY',1,0,'C');
	$pdf->Cell(30,5,'PRICE',1,0,'C');
	$pdf->Cell(39,5,'TOTAL',1,1,'C');

	$pdf->SetFont('Arial','',12);

	$pdf->Cell(20,5,'1',1,0);
	$pdf->Cell(80,5,'GTA V',1,0);
	$pdf->Cell(20,5,'2',1,0,'C');
	$pdf->Cell(30,5,'120',1,0,'C');
	$pdf->Cell(39,5,'240',1,1,'R');

	$pdf->Cell(20,5,'',1,0);
	$pdf->Cell(80,5,'',1,0);
	$pdf->Cell(20,5,'',1,0,'C');
	$pdf->Cell(30,5,'',1,0,'C');
	$pdf->Cell(39,5,'',1,1,'R');

	$pdf->Cell(20,5,'',1,0);
	$pdf->Cell(80,5,'',1,0);
	$pdf->Cell(20,5,'',1,0,'C');
	$pdf->Cell(30,5,'',1,0,'C');
	$pdf->Cell(39,5,'',1,1,'R');

	$pdf->Cell(20,5,'',1,0);
	$pdf->Cell(80,5,'',1,0);
	$pdf->Cell(20,5,'',1,0,'C');
	$pdf->Cell(30,5,'',1,0,'C');
	$pdf->Cell(39,5,'',1,1,'R');

	$pdf->Cell(20,5,'',1,0);
	$pdf->Cell(80,5,'',1,0);
	$pdf->Cell(20,5,'',1,0,'C');
	$pdf->Cell(30,5,'',1,0,'C');
	$pdf->Cell(39,5,'',1,1,'R');

	$pdf->SetFont('Arial','B',12);

	$pdf->Cell(120,5,'',0,0);
	$pdf->Cell(30,5,'SUBTOTAL',1,0);
	$pdf->Cell(10,5,'BDT',1,0);
	$pdf->Cell(29,5,'',1,1);

	$pdf->Cell(120,5,'',0,0);
	$pdf->Cell(30,5,'VAT (15%)',1,0);
	$pdf->Cell(10,5,'BDT',1,0);
	$pdf->Cell(29,5,'',1,1);

	$pdf->Cell(120,5,'',0,0);
	$pdf->Cell(30,5,'TOTAL',1,0);
	$pdf->Cell(10,5,'BDT',1,0);
	$pdf->Cell(29,5,'',1,1);

	$pdf->Cell(189,5,'',0,1);
	$pdf->Cell(189,5,'',0,1);
	$pdf->Cell(189,5,'',0,1);
	$pdf->Cell(189,5,'',0,1);

	$pdf->SetFont('Arial','I',12);

	$pdf->Cell(30,5,'',0,0);
	$pdf->Cell(129,5,'Thanks for purchasing from www.game.com!',0,0);
	$pdf->Cell(30,5,'',0,1);

	$pdf->Output();
?>
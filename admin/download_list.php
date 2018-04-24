<?php
    require('../fpdf/fpdf.php');
    session_start();
include_once("../includes/connection.php");
    if (isset($_POST["action"])){
		$j_id = $_POST['action'];
		$sql = "SELECT f_name,l_name from student_info where s_id in (Select s_id FROM applied WHERE j_id='$j_id')";
		$result = mysqli_query($db, $sql);

    class PDF extends FPDF {
        function createCell($y, $cellString, $offset = 10)
		{
			$x = $this->GetStringWidth($cellString);
			//$xy = $this->Image('institute.svg',10,6,30);
			$this->Cell($x + 10, $y, $cellString);
		}
    }

$pdf = new PDF();
    $pdf->AddPage();
    //$pdf->Image('download.png',10,6,30);
    $pdf->ln(5);
    $pdf->ln(5);
    $pdf->ln(5);
    //Heading
	$pdf->SetFont('courier', 'B', 20);
	$pdf->createCell(10, "List of applied Students for JOB-ID: ");
	$pdf->createCell(10, $_POST['action']);
	$pdf->ln();
    $pdf->SetFont('courier', 'B', 15);
	$i = 1;
	while($row = mysqli_fetch_array($result)){
	$pdf->createCell(10, $i++.".");
    $pdf->createCell(10, $row['f_name']);
	$pdf->createCell(10, $row['l_name']);
	$pdf->ln();
	}
	$pdf->Output();
}

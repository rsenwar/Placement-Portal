<?php
session_start();
require('fpdf/fpdf.php');
include_once("../includes/connection.php");
   if (isset($_SESSION['stu_username'])){
		$user = $_SESSION['stu_username'];
		$sql = "Select * from student_info where s_id='$user'";
		$result = mysqli_query($db, $sql);
    	$row = mysqli_fetch_array($result);
        $personname = $row['f_name']." ".$row['l_name'];
        $email = $row['email'];
        $phone = $row['contact_no'];
        $address = $row['perm_add'];
       // $objective = "objective";
        $exp1_cmpname = "exp1_cmpname";
        $exp1_role = "exp1_role";
        $exp1_period = "exp1_period";
        $exp1_highlights = "exp1_highlights";
        $exp2_cmpname = "exp2_cmpname";
        $exp2_role = "exp2_role";
        $exp2_period = "exp2_period";
        $exp2_highlights = "exp2_highlights";
        $btp1_cmpname = "btp1_cmpname";
        $btp1_role = "btp1_role";
        $btp1_period = "btp1_period";
        $btp1_highlights = "btp1_highlights";
        $btp2_cmpname = "btp2_cmpname";
        $btp2_role = "btp2_role";
        $btp2_period = "btp2_period";
        $btp2_highlights = "btp2_highlights";
        $rawskillstr = "skills";
        $skillset = explode(",",$rawskillstr);
        $college_name = "college_name";
        $college_period = "college_period";
        $college_cgpa = $row['cpi'];
        $seniorschool_name = "seniorschool_name";
        $seniorschool_year = "seniorschool_year";
        $seniorschool_percentage = "seniorschool_percentage";
        $school_name = "school_name";
        $school_year = "school_year";
        $school_percentage = "school_percentage";
        $interests = "interests";
        $r1_name = "r1_name";
	$r1_inst = "r1_inst";
	$r1_cont = "r1_cont";
        $r2_name = "r2_name";
	$r2_inst = "r2_inst";
	$r2_cont = "r2_cont";
        $r3_name = "r3_name";
	$r3_inst = "r3_inst";
	$r3_cont = "r3_cont";
   // }

    class PDF extends FPDF {
        function createCell($y, $cellString, $offset = 10)
		{
			$x = $this->GetStringWidth($cellString);
			//$xy = $this->Image('',10,6,30);
			$this->Cell($x + 10, $y, $cellString);
		}
    }
    
    $pdf = new PDF();
    $pdf->AddPage();
    //$pdf->Image('header.png',10,10,175);
    $pdf->ln(5);
    $pdf->ln(5);
    $pdf->ln(5);
    $pdf->ln(5);
    $pdf->ln(5);
    $pdf->ln(5);
    //Heading
    $pdf->SetFont('courier', 'B', 30);
    $pdf->createCell(10, $personname);
    $pdf->ln(10);
    $pdf->SetFont('courier', '', 10);
    $pdf->createCell(10, $email);
    $pdf->ln(5);
    $pdf->createCell(10, $phone);
    $pdf->ln(5);
    $pdf->createCell(10, $address);
    $pdf->ln(15);
    $pdf->setRightMargin(0);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->SetFont('courier', 'B', 10);
   // $pdf->cell(100, 5, $pdf->write(5, $objective), 0, 1, 'L');
    //$pdf->ln();
    //Education

    $pdf->setFont('courier', 'BU', 14);
    $pdf->write(5, 'Education');
    $pdf->ln(10);


	


    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $college_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $college_period);
    $pdf->ln();
    $pdf->createCell(5, "CGPA - ".$college_cgpa);
    $pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $seniorschool_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $seniorschool_year);
    $pdf->ln();
    $pdf->createCell(5, "Class 12 - ".$seniorschool_percentage);
    $pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $school_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $school_year);
    $pdf->ln();
    $pdf->createCell(5, "Class 10 - ".$school_percentage);
    $pdf->ln(10);
    //WorkEx
    $pdf->setFont('courier', 'BU', 14);
    $pdf->write(5, 'Work-Experience');
    $pdf->ln(10);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $exp1_cmpname);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $exp1_period);
    $pdf->ln();
    $pdf->createCell(5, $exp1_role);
    $pdf->ln(5);

    $pdf->setRightMargin(80);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->setRightMargin(0);
    $pdf->SetFont('courier', '', 10);
    $pdf->cell(200, 5, $pdf->write(5, $exp1_highlights), 0, 1, 'L');

    $pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $exp2_cmpname);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $exp2_period);
    $pdf->ln();
    $pdf->createCell(5, $exp2_role);
    $pdf->ln(5);

    $pdf->setRightMargin(80);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->setRightMargin(0);
    $pdf->SetFont('courier', '', 10);
    $pdf->cell(200, 5, $pdf->write(5, $exp2_highlights), 0, 1, 'L');
    $pdf->ln();
//BTP

    $pdf->setFont('courier', 'BU', 14);
    $pdf->write(5, 'BTP');
    $pdf->ln(10);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $btp1_cmpname);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $btp1_period);
    $pdf->ln();
    $pdf->createCell(5, $btp1_role);
    $pdf->ln(5);

    $pdf->setRightMargin(80);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->setRightMargin(0);
    $pdf->SetFont('courier', '', 10);
    $pdf->cell(200, 5, $pdf->write(5, $btp1_highlights), 0, 1, 'L');

    $pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $btp2_cmpname);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $btp2_period);
    $pdf->ln();
    $pdf->createCell(5, $btp2_role);
    $pdf->ln(5);

    $pdf->setRightMargin(80);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->setRightMargin(0);
    $pdf->SetFont('courier', '', 10);
    $pdf->cell(200, 5, $pdf->write(5, $btp2_highlights), 0, 1, 'L');
    $pdf->ln();
    //Skillset
    $pdf->setFont('courier', 'BU', 14);
	$pdf->write(5, 'Technical Skills');
    $pdf->ln(10);
    $pdf->SetFont('courier', '', 10);
    $count = 0;
    foreach ($skillset as $i) {
        if ($count > 3) {
            $pdf->ln();
            $count = 0;
        }
        $pdf->cell(50, 5, $i);
        $count++;
    }
    $pdf->ln(10);
  
    //Interests

    $pdf->setFont('courier', 'BU', 14);
    $pdf->write(5, 'Interests');
    $pdf->ln(10);

    $pdf->setRightMargin(0);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->SetFont('courier', '', 10);
    $pdf->cell(200, 5, $pdf->write(5, $interests), 0, 1, 'L');


    //References
    $pdf->setFont('courier', 'BU', 14);
    $pdf->write(5, 'References');
    $pdf->ln(10);
    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $r1_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $r1_inst);
    $pdf->ln();
    //$pdf->createCell(5, "".$r1_cont);
    //$pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $r2_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $r2_inst);
    $pdf->ln();
    //$pdf->createCell(5, "Class 12 - ".$r2_cont);
    //$pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $r3_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $r3_inst);
    $pdf->ln();
    //$pdf->createCell(5, "Class 10 - ".$r3_cont);
    //$pdf->ln(10);


    $pdf->Output();
}
?>

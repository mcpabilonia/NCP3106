<?php
require('fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=brgy_db', 'root', '');

class PDF extends FPDF
{
	// Page header
	function header()
	{
		$this->SetFont('Arial', 'B', 14);
		$this->Cell(190, 5, 'RESIDENT INFORMATION', 0, 0, 'C');
		$this->Ln();
		$this->SetFont('Times', '', 12);
		$this->Cell(190, 10, 'Barangay Balumpare', 0, 0, 'C');
		$this->Ln(20);
	}
	// Page footer
	function footer()
	{
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
	}

	function headerTable()
	{
		$this->SetFont('Times', 'B', 12);
		$this->Cell(32, 10, 'Resident ID', 1, 0, 'C');
		$this->Cell(32, 10, 'Family Name', 1, 0, 'C');
		$this->Cell(32, 10, 'First Name', 1, 0, 'C');
		$this->Cell(32, 10, 'Middle Name', 1, 0, 'C');
		$this->Cell(32, 10, 'Gender', 1, 0, 'C');
		$this->Cell(31, 10, 'Birthday', 1, 0, 'C');
		$this->Ln();
	}
	function viewTable($db)
	{
		$this->SetFont('Times', '', 12);
		$stmt = $db->query('select * from brgyy_db');
		while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
			$this->SetFont('Times', 'B', 12);
			$this->Cell(32, 10, $data->resident_id, 1, 0, 'C');
			$this->Cell(32, 10, $data->family_name, 1, 0, 'L');
			$this->Cell(32, 10, $data->first_name, 1, 0, 'L');
			$this->Cell(32, 10, $data->middle_name, 1, 0, 'L');
			$this->Cell(32, 10, $data->sex, 1, 0, 'L');
			$this->Cell(31, 10, $data->birth_date, 1, 0, 'L');
			$this->Ln();
		}
	}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();


<?php
/*********************************************************************
Teacher

Copyright 2013 by Sébastien Mabon and Samuel Degoul (sdegoul@gmail.com)

This file is part of Teacher.

Teacher is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Teacher is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Teacher.  If not, see <http://www.gnu.org/licenses/>
*********************************************************************/
?>


<?php
require (LIB_PATH.'fpdf/fpdf.php');

class PDF_table extends FPDF {
	// colored table
	function FancyTable($header, $data)
	{
		// Couleurs, épaisseur du trait et police grasse
		$this->SetFillColor(255,0,0);
		$this->SetTextColor(255);
		$this->SetDrawColor(128,0,0);
		$this->SetLineWidth(.3);
		$this->SetFont('','B');
		
		// header
		$w = array(300, 35, 60, 60, 60);
		for($i=0; $i < count($header); $i++) {
			$this->MultiCell($w[$i],15,$header[$i],1,'C',true);
			if ($i < count($header) -1) {
				$shift_X = 0;
				for ($n = 0; $n <= $i; $n ++) {
					$shift_X += $w[$n];
				}
				$this->setXY ($this->getX() + $shift_X, $this->getY() - 30);
			}
		}
		
		// Restauration des couleurs et de la police
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Données
		$fill_color = false;
		foreach($data as $row)
		{
			$this->MultiCell($w[0],10,$row[0],'LR','L',$row['fill_color']);
			$this->setXY ($this->getX() + $w[0], $this->getY() - 20);
			$this->Cell($w[1],20,$row[1],'LR',0,'C',$row['fill_color']);
			$this->Cell($w[2],20,$row[2],'LR',0,'C',$row['fill_color']);
			$this->Cell($w[3],20,$row[3],'LR',0,'C',$row['fill_color']);
			$this->Cell($w[4],20,$row[4],'LR',0,'C',$row['fill_color']);
			$this->Ln();
		}
		// Trait de terminaison
		$this->Cell(array_sum($w),0,'','T');
	}
}

function textFormat ($string) {
	return utf8_decode($string);
}


$pdf = new PDF_table('P','pt','A4');

//$pdf->SetMargins(1.5,1.5);
$pdf->SetFont('Arial','',12);

$pdf->AddPage();

$pdf->MultiCell(200,10,textFormat($_POST['letter_sender']),0,'L');
$pdf->Ln(5);

$pdf->MultiCell(0,10,textFormat($_POST['letter_recipient']),0,'R');
$pdf->Ln(5);

$pdf->Cell(0,50,_("le").' '.textFormat($_POST['letter_date']),0,0,'R');
$pdf->Ln(50);

$pdf->Cell(0,20,textFormat($_POST['letter_polite_phrase']),0,0,'L');
$pdf->Ln();

$pdf->MultiCell(0,10,textFormat($_POST['letter_introduction']),0,'J');
$pdf->Ln(30);


$pdf->Cell(0,20,textFormat(_("Objectifs travaillés pendant les séances d'éducation thérapeutique :")),0,0,'L');
$pdf->Ln(20);

$pdf->SetFontSize(8);

$header_table = array (textFormat(_("Objectifs éducatifs"))."\n\n", '', textFormat(_("Non acquis")), textFormat(_("Partiellement acquis")), textFormat(_("Acquis")));
define ('MAX_LENGTH_TITLE_COL', 13);
foreach ($header_table as $n => $title_col) {
	if (strlen ($title_col) < MAX_LENGTH_TITLE_COL )
		$header_table[$n] .= "\n\n";
}

$data_table = array();
define ('MAX_LENGTH_TITLE_LINE', 100);

foreach ($list_question_obj as $id_target => $features_question_obj) {

	$title_line = textFormat($features_question_obj['target_name']);
	
	if (strlen ($title_line) < MAX_LENGTH_TITLE_LINE )
		$title_line .= "\n\n";

	foreach ($features_question_obj['value_question'] as $nb_subquestion => $value_question) {

		if (is_string ($nb_subquestion)) {
			$id_group_questions = $id_target.'_'.$nb_subquestion;
			if ($nb_subquestion == 'a')
				$data_table[$id_group_questions][] = $id_target.'/ '.$title_line;
			else
				$data_table[$id_group_questions][] = "\n\n";
			$data_table[$id_group_questions][] = $id_target.' '.$nb_subquestion;
		}
		else {
			$id_group_questions = $id_target;
			$data_table[$id_group_questions][] = $id_target.'/ '.$title_line;
			$data_table[$id_group_questions][] = '';
		}

		foreach ($list_group_questions[$id_group_questions]['items_validation'] as $title_item => $value_item) {

			$title_cell = '';
			if ($value_question == $value_item) {
				$title_cell = 'X';
				$css_cell = 'synthesis_checked_cell';
			}
			elseif ($value_item === 'NA')
				$css_cell = 'synthesis_inactive_cell';
			else
				$css_cell = 'synthesis_cell';
				
			$data_table[$id_group_questions][] = $title_cell;
		}

		$data_table[$id_group_questions]['fill_color'] = FALSE;
		if ($features_question_obj['target_security'] == 1)
			$data_table[$id_group_questions]['fill_color'] = TRUE;
	}
}

$pdf->FancyTable($header_table,$data_table);
$pdf->Ln(30);

$pdf->SetFontSize(10);

$pdf->MultiCell(0,10,textFormat($_POST['letter_peakflow']),0,'J');
$pdf->Ln(30);

$pdf->MultiCell(0,10,textFormat($_POST['letter_conclusion']),0,'J');
$pdf->Ln(30);

$pdf->MultiCell(0,10,textFormat($_POST['letter_treatment']),0,'J');
$pdf->Ln(30);

$pdf->MultiCell(0,10,textFormat($_POST['letter_ending']),0,'J');
$pdf->Ln(30);

$pdf->Cell(0,10,textFormat($_POST['letter_signatory']),0,0,'R');

$random_chain = createRandomString (10);
$letter_name = $_SESSION['patient']['patient_surname'].'_'.$_SESSION['patient']['patient_firstname'].'_'.date('Y-m-d').'_'.$random_chain;

$pdf->Output(SECURED_PDF_PATH.$letter_name.'.pdf', 'F');


require (MODEL_PATH.'insert_summary_letter.php');

header ('location:.?module=patient_management&action=get_summary_letter_pdf&file='.$letter_name);

?>

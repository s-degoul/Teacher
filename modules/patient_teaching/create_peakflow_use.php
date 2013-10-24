  
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

	if (isset ($_GET['from'])) {
		$from_page = $_GET['from'];
		if ($from_page == 'target_6') {
			$from_page_link = '.?module=patient_teaching&action=show_target&id_target=6&type=user';
			$content_top .= '<p><a href=\''.$from_page_link.'\'>'._("revenir à l'objectif éducatif n°6").'</a></p>';
		}
		elseif ($from_page == 'show_peakflow_use') {
			$from_page_link = '.?module=patient_teaching&action=show_peakflow_use';
			$content_top .= '<p><a href=\''.$from_page_link.'\'>'._("revenir à la liste des évaluations du DEP").'</a></p>';
		}
/*
		elseif ($from_page == 'create_educ_diag') {
			$from_page_link = '.?module=patient_teaching&action=create_educ_diag&page_educ_diag=5';
			$content_top .= '<p><a href=\''.$from_page_link.'\'>'._("revenir au diagnostic éducatif").'</a></p>';
		}
		elseif ($from_page == 'show_educ_diag') {
			$from_page_link = '.?module=patient_teaching&action=show_educ_diag';
			$content_top .= '<p><a href=\''.$from_page_link.'\'>'._("revenir au diagnostic éducatif").'</a></p>';
		}
*/
	}
	else {
		$from_page = '';
	}


if (isset ($_POST['valid_eval_quit']) or isset ($_POST['valid_eval_add'])) {
	if (!isset ($_SESSION['patient']))
		$messages['error'][] = _("aucun dossier patient ouvert");
	
	$peakflow_use = checkVarPost();
	
	$list_questions = array('id_patient', 'peakflow_use_date');
	$one_answer_not_null = 0;
	
	for ($nb_question = 1; $nb_question <= 10; $nb_question ++) {
		$id_question = 'peakflow_use_q'.$nb_question;
		$list_questions[] = $id_question;
		
		if (!isset ($peakflow_use[$id_question]))
			$peakflow_use[$id_question] = NULL;
		else
			$one_answer_not_null = 1;
	}
	
	if ($one_answer_not_null == 0)
		$messages['error'][] = _("L'évaluation que vous voulez enregistrer est vide");
		
	// check of date sent
	$peakflow_use_date_parts = explode ('/', $peakflow_use['peakflow_use_date']);
	if ( !isset ($peakflow_use_date_parts[1]) or !isset ($peakflow_use_date_parts[2])) {
		$messages['error'][] = _("Le format de la date n'est pas correct");
		$peakflow_use['peakflow_use_date'] = '';	
	}
	else {
		$peakflow_use_date = prepareDateSQL ($peakflow_use_date_parts[2], $peakflow_use_date_parts[1], $peakflow_use_date_parts[0]);
		
		if (checkdate ($peakflow_use_date_parts[1], $peakflow_use_date_parts[0], $peakflow_use_date_parts[2]) == false)
			$messages['error'][] = _("La date entrée n'est pas correcte");
		elseif (calculateAge ($peakflow_use_date) < 0)
			$messages['error'][] = _("La date entrée n'est pas correcte (postérieure à aujourd'hui)");
	}
	
	if (empty ($messages['error'])) {
		require (MODEL_PATH.'insert_peakflow_use.php');
		$messages['info'][] = _("Les données ont été enregistrées");
		
		if (isset ($_POST['valid_eval_quit']) and isset ($from_page_link))
			header ('location:'.$from_page_link);
		else
			$peakflow_use = array();
	}
}

require ('list_questions_peakflow.php');

require (VIEW_RELATIVE_PATH.'create_peakflow_use.php');

?>

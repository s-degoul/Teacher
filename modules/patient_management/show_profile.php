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


if (!isset ($_GET['id_patient']) and !isset ($_SESSION['patient'])) {
	$messages['error'][] = _("Aucun patient sélectionné");
}
else {
	if (isset ($_GET['id_patient'])) {
		$id_patient = $_GET['id_patient'];
		$messages['info'][] = _("Vous pouvez revenir sur cette page à tout moment en cliquant sur le nom du patient dans le menu de gauche");
	}
	else {
		$id_patient = $_SESSION['patient']['id_patient'];
	}
	
	require (MODEL_PATH.'select_patient_all.php');
	if($nb_patient != 1)
		$messages['error'][] = _("Pas de patient unique correspondant à cet identifiant.").' '.pleaseContactAdmin();
	
	require (MODEL_PATH.'select_educ_diag_exist.php');
	if($nb_educ_diag > 1)
		$messages['error'][] = _("Plusieurs diagnostics éducatifs pour ce patient.").' '.pleaseContactAdmin();
	if($nb_educ_diag == 0)
		$messages['advice'][] = _("Vous êtes ici sur la page montrant l'état d'avancement du patient dans le programme éducatif, résumé dans le menu de gauche. Pour commencer le programme, veuillez cliquer sur &laquo;&nbsp;diagnostic éducatif &raquo;&nbsp;dans le menu.");
		
	require (MODEL_PATH.'select_list_cycle_educ.php');
	require (MODEL_PATH.'select_list_parent_eval.php');
	
	require (MODEL_PATH.'select_list_summary_letter.php');
}


if (empty($messages['error'])) {
	if (!empty ($patient['patient_date_birth'])) {
		$patient_age = calculateAge ($patient['patient_date_birth'], 'month');
	}

//	if (empty ($_SESSION['patient'])) {
		$_SESSION['patient'] = array (
					'id_patient' => $id_patient,
					'patient_surname' => $patient['patient_surname'],
					'patient_firstname' => $patient['patient_firstname'],
					'educ_diag_done' => 1
					);
		
		if (empty ($educ_diag) or $educ_diag['educ_diag_achieved'] == 0)
			$_SESSION['patient']['educ_diag_done'] = 0;
//	}



	
	ksort ($list_cycle_educ);

	$_SESSION['patient']['cycles_educ'] = $list_cycle_educ;
	$_SESSION['patient']['synthesis_to_do'] = 0;
		
	foreach ($list_cycle_educ as $cycle_start_date => $feature_cycle) {

		if (empty ($feature_cycle['cycle_educ_eval_date'])){
			$_SESSION['patient']['eval_to_do'] = 0;
			if (!empty ($feature_cycle['targets'])) {
				$_SESSION['patient']['eval_to_do'] = 1;
				foreach ($feature_cycle['targets'] as $id_target => $feature_target) {
					if ($feature_target['cycle_target_done'] == 0)
						$_SESSION['patient']['eval_to_do'] = 0;
				}
			}
			else {
				$_SESSION['patient']['synthesis_to_do'] = 1;
			}
		}
		elseif (preg_match ('#[a-zA-Zéû]{3,}#', showDate ($feature_cycle['cycle_educ_eval_date']))) {
			$_SESSION['patient']['eval_to_do'] = 1;
		}
		
		$id = $feature_cycle['id_cycle_educ'];
		if (array_key_exists ($id, $list_parent_eval)) {
			$liste_cycle_educ[$cycle_start_date]['id_parent_eval'] = $_SESSION['patient']['cycles_educ'][$cycle_start_date]['id_parent_eval'] = $list_parent_eval[$id];
		}
	}
/*
echo '<pre>';
print_r($list_parent_eval); 
echo '</pre>';
/**/
	require (VIEW_RELATIVE_PATH.'show_profile.php');
}
?>

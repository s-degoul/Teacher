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


if (! isset ($_SESSION['patient'])) {
	$messages['error'][] = _("Aucun patient sélectionné");
}
else {
	$id_patient = $_SESSION['patient']['id_patient'];
	$list_answers = array();
	
	require (MODEL_PATH.'select_educ_diag_exist.php');

	if ($nb_educ_diag > 1) {
		$messages['error'][] = _("Il y a déjà plusieurs diagnostics éducatifs pour ce patient").'. '.pleaseContactAdmin();
	}
	elseif ($nb_educ_diag != 0 and $educ_diag['educ_diag_achieved'] == 1) {
		// select the educational diagnosis in database. return an array ($educ_diag)
		$id_educ_diag = $educ_diag['id_educ_diag'];
		require (MODEL_PATH.'select_educ_diag_all.php');
		$list_answers['educ_diag'] = $educ_diag;
		
		require (MODEL_PATH.'select_cycle_educ_all.php');
		$list_answers = array_merge($list_answers, $cycle_educ_all);
	}
	else {
		$_SESSION['messages']['info'] = _("Le patient n'a pas fait d'évaluation pour l'instant");
		header('location:.?module=patient_teaching&action=show_profile');
	}
}

if (empty ($messages['error'])) {
	require ('group_questions_educ_diag.php');
	
	//require('list_questions_eval.php');

	
	// to make list of educational objectives
	require (MODEL_PATH.'select_target_list.php');

	// an array to store all answers given previously, with corresponding number of educational objective
	$list_question_obj = array();


	foreach ($list_answers as $key => $answers) {
		if (is_string($key) and $key == 'educ_diag') {
			$id_eval = $key;
		}
		else {
			$id_eval = $answers['id_cycle_educ'];
			if ($answers['cycle_educ_eval_date'] == '' or preg_match ('#[a-zA-Z]{3,}#', showDate ($answers['cycle_educ_eval_date']))) {
				continue;
			}
		}
		
		$list_question_obj[$id_eval] = array();
		
		// we scan all answers previously given (in educational diagnostic or final evaluation)
		foreach ($answers as $id_question => $value_question) {
			if (preg_match ('#obj#', $id_question)) {
				
				// to extract educational objective number ($id_target) from field name in database (named as ..._objx[_y] )
				$id_question_part = explode ('obj', $id_question);
				$num_question = $id_question_part[1];
				$num_question_part = explode ('_', $num_question);
				$id_target = $num_question_part[0];

				if (!isset ($list_question_obj[$id_eval][$id_target])) {
					$list_question_obj[$id_eval][$id_target] = array (
																//~ 'target_name' => $list_target[$id_target]['target_name'],
																//~ 'target_security' => $list_target[$id_target]['target_security'],
																'value_question' => '' // will be defined just after
																);							
				}
				
				// as some educational objectives are divided in two subquestions (a and b) ...
				if (empty ($list_question_obj[$id_eval][$id_target]['value_question'])) {
					if (isset ($num_question_part[1]))
						$list_question_obj[$id_eval][$id_target]['value_question'] = array ($num_question_part[1] => $value_question);
					else
						$list_question_obj[$id_eval][$id_target]['value_question'] = array (0 => $value_question);		
				}
				else {
					$nb_subquestion = $num_question_part[1];
					$list_question_obj[$id_eval][$id_target]['value_question'][$nb_subquestion] = $value_question;
				}
			}
			elseif (preg_match ('#subj_patient$#', $id_question)) {
				$list_question_obj[$id_eval]['subj_patient'] = $value_question;
			}
			elseif (preg_match ('#subj_parent$#', $id_question)) {
				$list_question_obj[$id_eval]['subj_parent'] = $value_question;
			}
			elseif (preg_match ('#cact$#', $id_question)) {
				$list_question_obj[$id_eval]['cact'] = $value_question;
			}
		}
	}

//~ echo '<pre>';
//~ print_r($list_question_obj);
//~ echo '</pre>';

	require (VIEW_RELATIVE_PATH.'show_summ_all_eval.php');
}
?>

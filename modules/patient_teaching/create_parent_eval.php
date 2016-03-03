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


if (!isset ($_SESSION['patient'])) {
	$messages['error'][] = _("Aucun patient sélectionné");
}
else {
	$id_patient = $_SESSION['patient']['id_patient'];
	
	require (MODEL_PATH.'select_last_cycle_educ_achieved.php');
	
	if (preg_match ('#[a-zA-Z]{3,}#', showDate ($cycle_educ_eval_date))) {
			$messages['error'][] = _("Il faut d'abord réaliser l'évaluation de l'enfant avant celle des parents");
	}
	
	require (MODEL_PATH.'select_parent_eval_exist.php');
		if ($nb_parent_eval > 0)
			$messages['error'][] = _("Il y a déjà une évaluation des parents pour ce cycle éducatif.");
}

if (empty ($messages['error'])) {
	require ('list_questions_parent_eval.php');

	if (isset ($_POST['valid_parent_eval'])) {
		$parent_eval = checkVarPost();
		
		$list_answers = array(
							'id_cycle_educ' => $id_cycle_educ,
							'parent_eval_date' => date('Y-m-d H:i:s')
							);
		
		foreach ($list_questions_parent_eval as $type_question => $list_questions) {
			
			foreach ($list_questions as $nb_question => $features_question) {
				if ($type_question == 'knowledge') {
					$id_question_answer = 'parent_eval_q'.$nb_question.'_answer';
					//$id_question_table_answer = 'parent_eval_'.$id_question_form_answer;
					if (isset ($parent_eval[$id_question_answer]))
						$list_answers[$id_question_answer] = $parent_eval[$id_question_answer];
					else
						$list_answers[$id_question_answer] = NULL;

					$id_question_belief = 'parent_eval_q'.$nb_question.'_belief';
					//$id_question_table_belief = 'parent_eval_'.$id_question_form_belief;
					if (isset ($parent_eval[$id_question_belief]))
						$list_answers[$id_question_belief] = $parent_eval[$id_question_belief];
					else
						$list_answers[$id_question_belief] = NULL;					
				}
				elseif ($type_question == 'skill') {
					$id_question = 'parent_eval_q'.$nb_question;
					//$id_question_table = 'parent_eval_'.$id_question_form;
					if (isset ($parent_eval[$id_question]))
						$list_answers[$id_question] = $parent_eval[$id_question];
					else
						$list_answers[$id_question] = NULL;	
				}
			}
		}
		
		require (MODEL_PATH.'insert_parent_eval.php');
		
		foreach ($_SESSION['patient']['cycles_educ'] as $cycle_educ_start_date => $features) {
			if ($features['id_cycle_educ'] == $id_cycle_educ)
				$_SESSION['patient']['cycles_educ'][$cycle_educ_start_date]['id_parent_eval'] = $id_parent_eval;
		}
		
		header('location:.?module=patient_teaching&action=show_summ_eval&type_eval=cycle_educ_eval');
		exit;
	}

	require (VIEW_RELATIVE_PATH.'parent_eval.php');
}
/*
echo '<pre>';
print_r($list_answers);
echo '</pre>';
*/
?>

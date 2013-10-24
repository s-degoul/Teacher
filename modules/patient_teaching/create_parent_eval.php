  
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

if (!isset ($_SESSION['patient'])) {
	$messages['error'][] = _("Aucun patient sélectionné");
}
else {
	require (MODEL_PATH.'select_cycle_educ_exist.php');
	if ($nb_response > 1) {
		$messages['error'][] = _("Il y a plusieurs cycles du programme éducatif inachevés pour ce patient. Veuillez contacter l'administrateur");
	}
	elseif ($nb_response < 1) {
		require (MODEL_PATH.'select_last_cycle_educ_achieved.php');
		require (MODEL_PATH.'select_cycle_educ_eval_date.php');
		
		if (! preg_match ('#[a-zA-Z]{3,}#', showDate ($cycle_educ_eval_date)))
			$messages['error'][] = _("Aucun nouveau cycle éducatif n'a pas été commencé pour ce patient. Vous ne pouvez donc réaliser cette évaluation");
	}
}

if (empty ($messages['error'])) {
	require ('list_questions_parent_eval.php');

	if (isset ($_POST['valid_parent_eval'])) {
		$parent_eval = checkVarPost();
		
		$list_answers = array(
							'id_cycle_educ' => $id_cycle_educ,
							'parent_eval_date' => date('Y-m-d h:i:s')
							);
		
		foreach ($list_questions_parent_eval as $type_question => $list_questions) {
			
			foreach ($list_questions as $nb_question => $features_question) {
				if ($type_question == 'knowledge') {
					$id_question_form_answer = 'q'.$nb_question.'_answer';
					$id_question_table_answer = 'parent_eval_'.$id_question_form_answer;
					if (isset ($parent_eval[$id_question_form_answer]))
						$list_answers[$id_question_table_answer] = $parent_eval[$id_question_form_answer];
					else
						$list_answers[$id_question_table_answer] = NULL;

					$id_question_form_belief = 'q'.$nb_question.'_belief';
					$id_question_table_belief = 'parent_eval_'.$id_question_form_belief;
					if (isset ($parent_eval[$id_question_form_belief]))
						$list_answers[$id_question_table_belief] = $parent_eval[$id_question_form_belief];
					else
						$list_answers[$id_question_table_belief] = NULL;					
				}
				elseif ($type_question == 'skill') {
					$id_question_form = 'q'.$nb_question;
					$id_question_table = 'parent_eval_'.$id_question_form;
					if (isset ($parent_eval[$id_question_form]))
						$list_answers[$id_question_table] = $parent_eval[$id_question_form];
					else
						$list_answers[$id_question_table] = NULL;	
				}
			}
		}
		
		require (MODEL_PATH.'insert_parent_eval.php');
	}


	require (VIEW_RELATIVE_PATH.'parent_eval.php');
}
/*
echo '<pre>';
print_r($list_answers);
echo '</pre>';
*/
?>

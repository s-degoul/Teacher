
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

if (isset ($_SESSION['patient'])) {
	require (MODEL_PATH.'select_last_cycle_educ_achieved.php'); // return $id_cycle_educ
	if (empty ($id_cycle_educ))
		$messages['error'][] = _("Vous ne pouvez faire de courrier tant que votre patient n'a pas eu au moins une évaluation autre que le diagnostic éducatif");
}
else {
	$messages['error'][] = _("Aucun patient sélectionné");
}

if (empty ($messages['error'])) {
	require (MODEL_PATH.'select_cycle_educ_summ.php'); // return $cycle_educ
	$list_answers = $cycle_educ;
	$cycle_educ_eval_date = $list_answers['cycle_educ_eval_date'];
	unset ($list_answers['cycle_educ_start_date']);
	unset ($list_answers['cycle_educ_eval_date']);
	
	if (preg_match ('#[a-zA-Z]{3,}#', showDate ($cycle_educ_eval_date))) {
		require (MODEL_PATH.'select_last_cycle_educ_really_achieved.php');
		require (MODEL_PATH.'select_cycle_educ_summ.php');
		$list_answers = $cycle_educ;
		$cycle_educ_eval_date = $list_answers['cycle_educ_eval_date'];
		unset ($list_answers['cycle_educ_start_date']);
		unset ($list_answers['cycle_educ_eval_date']);
	}

	require ('modules/patient_teaching/group_questions.php');

	// to make list of educational objectives
	require (MODEL_PATH.'select_target_list.php'); //return $list_target

	// an array to store all answers given previously, with corresponding number of educational objective
	$list_question_obj = array();

	// we scan all answers given (in educational diagnostic or final evaluation)
	foreach ($list_answers as $id_question => $value_question) {
		
		// to extract educational objective number ($id_target) from field name in database (named as ..._objx[_y] )
		$id_question_part = explode ('j', $id_question);
		$nb_question = $id_question_part[1];
		$nb_question_part = explode ('_', $nb_question);
		$id_target = $nb_question_part[0];

		if (!isset ($list_question_obj[$id_target])) {
			$list_question_obj[$id_target] = array (
													'target_name' => $list_target[$id_target]['target_name'],
													'target_security' => $list_target[$id_target]['target_security'],
													'value_question' => '' // will be defined just after
													);							
		}
		
		// as some educational objectives are divided in two subquestions (a and b) ...
		if (empty ($list_question_obj[$id_target]['value_question'])) {
			if (isset ($nb_question_part[1]))
				$list_question_obj[$id_target]['value_question'] = array ($nb_question_part[1] => $value_question);
			else
				$list_question_obj[$id_target]['value_question'] = array (0 => $value_question);		
		}
		else {
			$nb_subquestion = $nb_question_part[1];
			$list_question_obj[$id_target]['value_question'][$nb_subquestion] = $value_question;
		}
	}

	if (isset ($_GET['output']) and $_GET['output'] == 'pdf') {
		require (VIEW_RELATIVE_PATH.'create_summary_letter_pdf.php');
	}
	else {
		$id_patient = $_SESSION['patient']['id_patient'];
		require (MODEL_PATH.'select_patient_all.php'); // return $patient
		require (MODEL_PATH.'select_user_all.php'); // return $user
		
		require (VIEW_RELATIVE_PATH.'create_summary_letter.php');
	}
}
?>

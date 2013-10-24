  
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
			$messages['error'][] = _("Aucun nouveau cycle éducatif n'a pas été commencé pour ce patient. Vous ne pouvez donc réaliser d'évaluation finale");
	}
}


if (empty ($messages['error'])) {
	require ('list_questions_eval.php');
		
	require (MODEL_PATH.'select_target_list.php');



	if (isset ($_POST['valid_eval'])) {

		$cycle_educ = checkVarPost ();
/*
echo '<pre>';
print_r ($_POST);
echo '</pre>';
*/	
		$target_eval = $_POST['target_eval'];
		
		$list_item = array();

		foreach ($list_questions as $nb_question => $features_question) {
			$parts_nb_question = explode ('_', $nb_question);
			if ($parts_nb_question[0] == $target_eval and $nb_question !== '6_bonus') {

			$id_eval_obj = 'cycle_educ_eval_obj'.$nb_question;
						
				$list_item[] = $id_eval_obj;
				
				if (! isset ($cycle_educ[$id_eval_obj])) {
					if ( isset ($list_questions[$nb_question]['validation_items']['partially_valid']))
						$messages['error'][] = _("Veuillez préciser si l'objectif est validé, non validé ou partiellement validé)");
					else
						$messages['error'][] = _("Veuillez préciser si l'objectif est validé ou non validé");
				}
			}
		}

		

		if (empty ($messages['error'])) {
			require (MODEL_PATH.'update_cycle_educ_eval.php');
			if ($target_eval == 10) {
				$cycle_educ_eval_date = date('Y-m-d H:i:s');
				require (MODEL_PATH.'update_cycle_educ_eval_date.php');
			}
		}
	}





	if (isset ($messages['error'])) {
		$page_eval = $target_eval;
	}
	elseif (isset ($_GET['page_eval'])) {
		$page_eval = $_GET['page_eval'];
		require (MODEL_PATH.'select_cycle_educ_summ.php');
	}
	else {
		$page_eval = 'info';
	}





	if (is_numeric ($page_eval)) {
		require (VIEW_RELATIVE_PATH.'eval.php');
	}
	elseif ($page_eval == 'end') {
		header ('location:.?module=patient_teaching&action=show_summ_eval&type_eval=cycle_educ_eval&id_eval='.$id_cycle_educ);
	}
	else {
		require (VIEW_RELATIVE_PATH.'eval_'.$page_eval.'.php');
	}
}
/*
echo '<pre>';
print_r ($list_item);
echo '</pre>';
*/
?>

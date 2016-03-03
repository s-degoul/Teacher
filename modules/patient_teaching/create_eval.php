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

define ('MIN_CACT', 0);
define ('MAX_CACT', 27);


if (!isset ($_SESSION['patient'])) {
	$messages['error'][] = _("Aucun patient sélectionné");
}
else {
	$id_patient = $_SESSION['patient']['id_patient'];
	
	require (MODEL_PATH.'select_cycle_educ_exist.php');
	if ($nb_response > 1) {
		$messages['error'][] = _("Il y a plusieurs cycles du programme éducatif inachevés pour ce patient.").' '.pleaseContactAdmin();
	}
	elseif ($nb_response < 1) {
		require (MODEL_PATH.'select_last_cycle_educ_achieved.php');
		//require (MODEL_PATH.'select_cycle_educ_eval_date.php');
		
		if (! preg_match ('#[a-zA-Zéû]{3,}#', showDate ($cycle_educ_eval_date)))
			$messages['error'][] = _("Aucun nouveau cycle éducatif n'a été commencé pour ce patient. Vous ne pouvez donc réaliser d'évaluation finale");
	}
}


if (empty ($messages['error'])) {
	require (MODEL_PATH.'select_list_cycle_target.php');
	
	if (!empty ($list_cycle_target)) {
		require ('list_questions_eval.php');
		$maintain_eval = 0;
	}
	else {
		require ('list_questions_maintain_eval.php');
		$maintain_eval = 1;
	}
	
	
	require (MODEL_PATH.'select_target_list.php');



	if (isset ($_POST['valid_last_page']) or isset ($_POST['valid_next_page']) or isset ($_POST['valid_cact'])) {

		$cycle_educ = checkVarPost ();

		$target_eval = $_POST['target_eval'];
		
		$list_item = array();

		foreach ($list_questions as $num_question => $features_question) {
			$parts_num_question = explode ('_', $num_question);
			if ($parts_num_question[0] == $target_eval and $num_question !== '6_bonus') {
				if ($num_question != 'asthmacontrol') {
					$id_eval_obj = 'cycle_educ_eval_obj'.$num_question;
							
					$list_item[] = $id_eval_obj;
					
					if (! isset ($cycle_educ[$id_eval_obj])) {
						if ( isset ($list_questions[$num_question]['validation_items']['partially_valid']))
							$messages['error'][] = _("Veuillez préciser si l'objectif est validé, non validé ou partiellement validé.)");
						else
							$messages['error'][] = _("Veuillez préciser si l'objectif est validé ou non validé.");
					}
				}
				elseif ($num_question == 'asthmacontrol') {
					$list_item[] = 'cycle_educ_eval_subj_patient';
					$list_item[] = 'cycle_educ_eval_subj_parent';
					$list_item[] = 'cycle_educ_eval_cact';
					
					if (is_null ($cycle_educ['cycle_educ_eval_subj_patient']) or is_null ($cycle_educ['cycle_educ_eval_subj_parent']) or (is_null ($cycle_educ['cycle_educ_eval_cact']) and !isset ($_POST['valid_cact'])))
						$messages['error'][] = _("Veuillez renseigner les trois valeurs demandées.");
					if (!is_numeric ($cycle_educ['cycle_educ_eval_subj_patient']) or !is_numeric ($cycle_educ['cycle_educ_eval_subj_parent']) or (!is_numeric ($cycle_educ['cycle_educ_eval_cact']) and !isset ($_POST['valid_cact'])))
						$messages['error'][] = _("Les trois valeurs demandées doivent être des nombres.");	
					elseif ($cycle_educ['cycle_educ_eval_subj_patient'] < MIN_CACT or $cycle_educ['cycle_educ_eval_subj_patient'] > MAX_CACT or $cycle_educ['cycle_educ_eval_subj_parent'] < MIN_CACT or $cycle_educ['cycle_educ_eval_subj_parent'] > MAX_CACT or ($cycle_educ['cycle_educ_eval_cact'] < MIN_CACT and !isset ($_POST['valid_cact'])) or ($cycle_educ['cycle_educ_eval_cact'] > MAX_CACT and !isset ($_POST['valid_cact'])))
						$messages['error'][] = _("Les valeurs d'évaluation du contrôle de l'asthme doivent être comprises entre 0 et 27 inclus");
				}
			}
		}
/*
echo '<pre>';
print_r ($cycle_educ);
echo '</pre>';
/**/


		if (empty ($messages['error']) and !empty ($list_item)) {
			require (MODEL_PATH.'update_cycle_educ_eval.php');
		
			if ($target_eval == 'asthmacontrol'  and isset ($_POST['valid_next_page'])) {
				$cycle_educ_eval_date = date('Y-m-d H:i:s');
				require (MODEL_PATH.'update_cycle_educ_eval_date.php');
			}
		}
	}



	if (!empty ($messages['error'])) {
		$page_eval = $target_eval;
	}
	elseif (isset ($_POST['valid_last_page'])) {
		if ($target_eval == 1)
			$page_eval = 'info';
		elseif ($target_eval == 'asthmacontrol')
			$page_eval = 10;
		else
			$page_eval = (int) $target_eval - 1;
		
		require (MODEL_PATH.'select_cycle_educ_summ.php');
	}
	elseif (isset ($_POST['valid_next_page'])) {
		if ($target_eval == 'asthmacontrol')
			$page_eval = 'end';
		elseif ($target_eval == 10)
			$page_eval = 'asthmacontrol';
		else
			$page_eval = (int) $target_eval + 1;
		
		if ($page_eval != 'end')
			require (MODEL_PATH.'select_cycle_educ_summ.php');
	}
	elseif (isset ($_GET['page_eval'])) {
		$page_eval = $_GET['page_eval'];
		require (MODEL_PATH.'select_cycle_educ_summ.php');
	}

	else {
		$page_eval = 'info';
	}
	
	if (isset ($_POST['valid_cact']) and $target_eval == 'asthmacontrol') {
		header('location:.?module=patient_teaching&action=show_cACT&from='.$_GET['action'].'&from_page_eval=asthmacontrol');
		exit;
	}



	if (is_numeric ($page_eval) or $page_eval == 'asthmacontrol') {
		require (VIEW_RELATIVE_PATH.'progress_bar.php');
		require (VIEW_RELATIVE_PATH.'eval.php');
	}
	elseif ($page_eval == 'end') {
		$_SESSION['patient']['synthesis_to_do'] = 1;
		header ('location:.?module=patient_teaching&action=show_summ_eval&type_eval=cycle_educ_eval&id_eval='.$id_cycle_educ);
		exit;
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

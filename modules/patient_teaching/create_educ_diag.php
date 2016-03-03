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
	$messages['error'][] = _("aucun patient sélectionné");
}
else {
	$id_patient = $_SESSION['patient']['id_patient'];
	require (MODEL_PATH.'select_educ_diag_exist.php');
	
	if ($nb_educ_diag == 1) {
		if ($educ_diag['educ_diag_achieved'] == 1) {
			$messages['error'][] = _("Le diagnostic éducatif a déjà été réalisé");
		}
	}
	elseif ($nb_educ_diag > 1) {
		$messages['error'][] = _("Il y a déjà plusieurs diagnostics éducatifs pour ce patient").'. '.pleaseContactAdmin();
	}
}



if(empty ($messages['error'])) {

	if ($nb_educ_diag == 0)
		require (MODEL_PATH.'insert_educ_diag.php');


	require ('list_questions_educ_diag.php');
	require ('group_questions_educ_diag.php');
		
	require (MODEL_PATH.'select_target_list.php');



	if (isset ($_POST['valid_last_page']) or isset ($_POST['valid_next_page']) or isset ($_POST['valid_cact'])) {

		$educ_diag = checkVarPost();
		
		$target_educ_diag = $_POST['target_educ_diag'];
		
		$list_item = array();

		if ($target_educ_diag == 'team') {
			$list_item = array ('educ_diag_gp', 'educ_diag_allergo', 'educ_diag_pneumo', 'educ_diag_physio', 'educ_diag_er');
		}
		elseif ($target_educ_diag == 'asthmacontrol') {
			$list_item = array ('educ_diag_subj_patient', 'educ_diag_subj_parent', 'educ_diag_cact');
			
			if (is_null ($educ_diag['educ_diag_subj_patient']) or is_null ($educ_diag['educ_diag_subj_parent']) or (is_null ($educ_diag['educ_diag_cact']) and !isset ($_POST['valid_cact'])))
				$messages['error'][] = _("Veuillez renseigner les trois valeurs demandées.");
			if (!is_numeric ($educ_diag['educ_diag_subj_patient']) or !is_numeric ($educ_diag['educ_diag_subj_parent']) or (!is_numeric ($educ_diag['educ_diag_cact']) and !isset ($_POST['valid_cact'])))
				$messages['error'][] = _("Les trois valeurs demandées doivent être des nombres.");
			elseif ($educ_diag['educ_diag_subj_patient'] < MIN_CACT or $educ_diag['educ_diag_subj_patient'] > MAX_CACT or $educ_diag['educ_diag_subj_parent'] < MIN_CACT or $educ_diag['educ_diag_subj_parent'] > MAX_CACT or ($educ_diag['educ_diag_cact'] < MIN_CACT and !isset ($_POST['valid_cact'])) or ($educ_diag['educ_diag_cact'] > MAX_CACT and !isset ($_POST['valid_cact'])))
				$messages['error'][] = _("Les valeurs d'évaluation du contrôle de l'asthme doivent être comprises entre 0 et 27 inclus");
		}
		else {
			foreach ($list_group_questions as $num_group => $features_group) {
				$parts_num_group = explode ('_', $num_group);
				
				if ($parts_num_group[0] == $target_educ_diag) {
					
					if ($target_educ_diag == 8) {
						if ($num_group == '8_a')
							$nb_item_max = 17;
						elseif ($num_group == '8_b')
							$nb_item_max = 24;
							
						for ($nb_item = 1; $nb_item <= $nb_item_max; $nb_item ++)
							$list_item[] = 'educ_diag_q'.$list_group_questions[$num_group]['first_question'].'_'.$nb_item;
					}
					
					else {
						foreach ($list_questions as $num_question => $features_question) {
							$parts_num_question = explode ('_', $num_question);
							if ($parts_num_question[0] >= $list_group_questions[$num_group]['first_question']
								and $parts_num_question[0] <= $list_group_questions[$num_group]['last_question']
								and $features_question['type'] != 'other') {
								$list_item[] = 'educ_diag_q'.$num_question;
							}
						}
					}
					
					$id_educ_diag_obj = 'educ_diag_obj'.$num_group;
							
					if (is_numeric ($parts_num_group[0])) {
						$list_item[] = $id_educ_diag_obj;
						if (! isset ($educ_diag[$id_educ_diag_obj])) {
							if ($list_group_questions[$num_group]['validation_items']['partially_valid'] == 'NA')
								$messages['error'][] = _("Veuillez préciser si l'objectif est acquis ou non acquis");
							else
								$messages['error'][] = _("Veuillez préciser si l'objectif est acquis, partiellement acquis ou non acquis");
						}
					}
				}
				
			}
		}
		

		if (empty ($messages['error'])) {
			require (MODEL_PATH.'update_educ_diag.php');
			if ($target_educ_diag == 'asthmacontrol' and isset ($_POST['valid_next_page'])) {
				require (MODEL_PATH.'update_educ_diag_achievement.php');
				$_SESSION['patient']['educ_diag_achieved'] = 1;
			}
		}
	}





	if (!empty ($messages['error'])) {
		$page_educ_diag = $target_educ_diag;
	}
	elseif (isset ($_POST['valid_last_page'])) {
		if (isset ($list_group_questions[$target_educ_diag]['last_group_questions']))
			$page_educ_diag = $list_group_questions[$target_educ_diag]['last_group_questions'];
		else
			$page_educ_diag = (int) $target_educ_diag - 1;
		
		require (MODEL_PATH.'select_educ_diag_all.php');
	}
	elseif (isset ($_POST['valid_next_page'])) {
		if (isset ($list_group_questions[$target_educ_diag]['next_group_questions']))
			$page_educ_diag = $list_group_questions[$target_educ_diag]['next_group_questions'];
		elseif ($target_educ_diag == 'team')
			$page_educ_diag = 'start';
		else
			$page_educ_diag = (int) $target_educ_diag + 1;
		
		require (MODEL_PATH.'select_educ_diag_all.php');
	}
	elseif (isset ($_GET['page_educ_diag'])) {
		$page_educ_diag = $_GET['page_educ_diag'];
		require (MODEL_PATH.'select_educ_diag_all.php');
	}
	else {
		$page_educ_diag = 'info';
	}
	
	if (isset ($_POST['valid_cact']) and $target_educ_diag == 'asthmacontrol') {
		header('location:.?module=patient_teaching&action=show_cACT&from='.$_GET['action'].'&from_page_educ_diag=asthmacontrol');
		exit;
	}




	if (is_numeric ($page_educ_diag) or $page_educ_diag == 'start' or $page_educ_diag == 'asthmacontrol') {
		require (VIEW_RELATIVE_PATH.'progress_bar.php');
		require (VIEW_RELATIVE_PATH.'educ_diag.php');
	}
	elseif ($page_educ_diag == 'end') {
		$_SESSION['patient']['synthesis_to_do'] = 1;
		header ('location:.?module=patient_teaching&action=show_summ_eval&type_eval=educ_diag');
	}
	else {
		if ($page_educ_diag == 'team')
			require (VIEW_RELATIVE_PATH.'progress_bar.php');
			
		require (VIEW_RELATIVE_PATH.'educ_diag_'.$page_educ_diag.'.php');
	}
	
}
/*
echo '<pre>';
print_r ($educ_diag);
echo '</pre>';
*/
?>

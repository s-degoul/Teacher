  
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
	$messages['error'][] = _("aucun patient sélectionné");
}
else {

	require (MODEL_PATH.'select_educ_diag_exist.php');
	
	if (!empty ($educ_diag)) {
		if ($educ_diag['educ_diag_achieved'] == 1) {
			$messages['error'][] = _("Le diagnostic éducatif a déjà été réalisé");
		}
	}
	else {
		require (MODEL_PATH.'add_educ_diag.php');
	}


	require ('list_questions.php');
	require ('group_questions.php');
		
	require (MODEL_PATH.'select_target_list.php');



	if (isset ($_POST['valid_educ_diag'])) {

		$educ_diag = checkVarPost ();
		
		$target_educ_diag = $_POST['target_educ_diag'];
		
		$list_item = array();

		if ($target_educ_diag == 'team') {
			$list_item = array ('educ_diag_gp', 'educ_diag_allergo', 'educ_diag_pneumo', 'educ_diag_physio', 'educ_diag_er');
		}
		elseif ($target_educ_diag == 'asthmacontrol') {
			$list_item = array ('educ_diag_subj_patient', 'educ_diag_subj_parent', 'educ_diag_cact');
		}
		else {
			foreach ($list_group_questions as $nb_group => $features_group) {
				$parts_nb_group = explode ('_', $nb_group);
				if ($parts_nb_group[0] == $target_educ_diag) {
					if ($target_educ_diag == 8) {
						if ($nb_group == '8_a')
							$nb_item_max = 17;
						elseif ($nb_group == '8_b')
							$nb_item_max = 24;
						for ($nb_item = 1; $nb_item <= $nb_item_max; $nb_item ++)
							$list_item[] = 'educ_diag_q'.$list_group_questions[$nb_group]['first_question'].'_'.$nb_item;
					}
					else {
						foreach ($list_questions as $nb_question => $features_question) {
							$parts_nb_question = explode ('_', $nb_question);
							if ($parts_nb_question[0] >= $list_group_questions[$nb_group]['first_question']
								and $parts_nb_question[0] <= $list_group_questions[$nb_group]['last_question']
								and $features_question['type'] != 'other') {
								$list_item[] = 'educ_diag_q'.$nb_question;
							}
						}
					}
					
					$id_educ_diag_obj = 'educ_diag_obj'.$nb_group;
							
					if (is_numeric ($parts_nb_group[0])) {
						$list_item[] = $id_educ_diag_obj;
						if (! isset ($educ_diag[$id_educ_diag_obj])) {
							if ( isset ($list_group_questions[$nb_group]['items_validation']['partially_valid']))
								$messages['error'][] = _("Veuillez préciser si l'objectif est acquis, non acquis ou partiellement acquis)");
							else
								$messages['error'][] = _("Veuillez préciser si l'objectif est acquis ou non acquis");
						}
					}
				}
			}
		}
		

		if (empty ($messages['error'])) {
			require (MODEL_PATH.'update_educ_diag.php');
			if ($target_educ_diag == 'asthmacontrol')
				require (MODEL_PATH.'update_educ_diag_achievement.php');
		}
	}





	if (isset ($messages['error'])) {
		$page_educ_diag = $target_educ_diag;
	}
	elseif (isset ($_GET['page_educ_diag'])) {
		$page_educ_diag = $_GET['page_educ_diag'];
		require (MODEL_PATH.'select_educ_diag_all.php');
	}
	else {
		$page_educ_diag = 'info';
	}





	if (is_numeric ($page_educ_diag) or $page_educ_diag == 'start' or $page_educ_diag == 'asthmacontrol') {
		require (VIEW_RELATIVE_PATH.'educ_diag.php');
	}
	elseif ($page_educ_diag == 'end') {
		header ('location:.?module=patient_teaching&action=show_summ_eval&type_eval=educ_diag');
	}
	else {
		require (VIEW_RELATIVE_PATH.'educ_diag_'.$page_educ_diag.'.php');
	}
	
}
/*
echo '<pre>';
print_r ($educ_diag);
echo '</pre>';
*/
?>

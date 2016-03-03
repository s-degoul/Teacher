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


define ('NB_MONTHS_LATER', 6);
define ('LIMIT_NB_POINTS', 17);
define ('LIMIT_NB_PATIENTS', 3);


// which type of evaluation is about ? educational diagnosis or evaluation at the end of an educational cycle ?
if (isset ($_GET['type_eval'])) {
	$id_patient = $_SESSION['patient']['id_patient'];
	
	if ($_GET['type_eval'] == 'educ_diag') {
		// does educationnal diagnosis exists, and if so is it achieved ?
		
		require (MODEL_PATH.'select_educ_diag_exist.php');

		if ($nb_educ_diag == 0) {
			$messages['error'][] = _("Aucun diagnostic éducatif réalisé");
		}
		elseif ($nb_educ_diag > 1) {
			$messages['error'][] = _("Il y a déjà plusieurs diagnostics éducatifs pour ce patient").'. '.pleaseContactAdmin();
		}
		else {
			if ($educ_diag['educ_diag_achieved'] != 1) {
				$messages['error'][] = _("Le diagnostic éducatif concerné n'est pas terminé ! Vous ne pouvez donc visualisez sa synthèse");
			}
			else {
				// to select the summary of educational diagnosis in database. return an array ($educ_diag_summ)
				$id_educ_diag = $educ_diag['id_educ_diag'];
				require (MODEL_PATH.'select_educ_diag_summ.php');
				$list_answers = $educ_diag_summ;
				
				$eval_subj_patient = $list_answers['educ_diag_subj_patient'];
				$eval_subj_parent = $list_answers['educ_diag_subj_parent'];
				$eval_cact = $list_answers['educ_diag_cact'];
				unset ($list_answers['educ_diag_subj_patient']);
				unset ($list_answers['educ_diag_subj_parent']);
				unset ($list_answers['educ_diag_cact']);
			}
		}
		
		$content_top .= '<p><a href=\'.?module=patient_teaching&action=show_educ_diag\' class = \'link\'>'
							._("Consulter le diagnostic éducatif").'</a></p>'."\n";
							
		$_SESSION['patient']['educ_diag_done'] = 1;
	}

	elseif ($_GET['type_eval'] == 'cycle_educ_eval'){
		if (!isset ($_GET['id_cycle_educ'])) { // and !isset ($_GET['id_eval'])) { // rétrocompatibilité : supprimer 'id_eval'
			require (MODEL_PATH.'select_last_cycle_educ_achieved.php');
		}
		else {
/*			if (!isset ($_GET['id_cycle_educ']))
				$id_cycle_educ = $_GET['id_eval']; // rétrocompatibilité : supprimer 'id_eval'
			else*/
				$id_cycle_educ = $_GET['id_cycle_educ'];
		}

		// to select the summary of educational cycle in database. return an array ($cycle_educ)
		require (MODEL_PATH.'select_cycle_educ_summ.php');
		$list_answers = $cycle_educ;

		// if evaluation hasn't been finished, error
		if (empty ($list_answers['cycle_educ_eval_date']) or $list_answers['cycle_educ_eval_date'] == '0000-00-00 00:00:00')
			$messages['error'][] = _("Vous ne pouvez accéder à cette synthèse tant que l'évaluation finale n'a pas été finalisée");
		
		$cycle_educ_start_date = $list_answers['cycle_educ_start_date'];
		unset ($list_answers['cycle_educ_start_date']);
		unset ($list_answers['cycle_educ_eval_date']);
		
		$eval_subj_patient = $list_answers['cycle_educ_eval_subj_patient'];
		$eval_subj_parent = $list_answers['cycle_educ_eval_subj_parent'];
		$eval_cact = $list_answers['cycle_educ_eval_cact'];
		unset ($list_answers['cycle_educ_eval_subj_patient']);
		unset ($list_answers['cycle_educ_eval_subj_parent']);
		unset ($list_answers['cycle_educ_eval_cact']);
		
		// does a parent evaluation already exist ?
		require (MODEL_PATH.'select_parent_eval_exist.php');
		if ($nb_parent_eval > 1)
			$messages['error'][] = _("Il y a plus d'une évaluation des parents pour ce cycle éducatif").'. '.pleaseContactAdmin();
		
		$content_top .= '<p><a href=\'.?module=patient_teaching&action=show_eval&id_cycle_educ='.$id_cycle_educ.'\' class = \'link\'>'
							._("Consulter l'évaluation réalisée").'</a></p>'."\n";
	}
}
// if no type of evaluation defined, error
else {
	$messages['error'][] = _("Aucun type d'évaluation précisé");
}



// if no previous error
if (empty ($messages['error'])) {
	
	if($_GET['type_eval'] =='educ_diag')
		require ('group_questions_educ_diag.php');
	else {
		require('list_questions_eval.php');
		$list_group_questions = $list_questions;
	}
	
	// to make list of educational objectives
	require (MODEL_PATH.'select_target_list.php');

	// an array to store all answers given previously, with corresponding number of educational objective
	$list_question_obj = array();


	// we scan all answers previously given (in educational diagnostic or final evaluation)
	foreach ($list_answers as $id_question => $value_question) {
		
		// to extract educational objective number ($id_target) from field name in database (named as ..._objx[_y] )
		$id_question_part = explode ('j', $id_question);
		$num_question = $id_question_part[1];
		$num_question_part = explode ('_', $num_question);
		$id_target = $num_question_part[0];

		if (!isset ($list_question_obj[$id_target])) {
			$list_question_obj[$id_target] = array (
													'target_name' => $list_target[$id_target]['target_name'],
													'target_security' => $list_target[$id_target]['target_security'],
													'to_work' => '', // will be defined later
													'value_question' => '' // will be defined just after
													);							
		}
		
		// as some educational objectives are divided in two subquestions (a and b) ...
		if (empty ($list_question_obj[$id_target]['value_question'])) {
			if (isset ($num_question_part[1]))
				$list_question_obj[$id_target]['value_question'] = array ($num_question_part[1] => $value_question);
			else
				$list_question_obj[$id_target]['value_question'] = array (0 => $value_question);		
		}
		else {
			$nb_subquestion = $num_question_part[1];
			$list_question_obj[$id_target]['value_question'][$nb_subquestion] = $value_question;
		}



		// to fill "to_work" in, according to number of points and "compulsory, advised or not" character
		
		// if it's a safety objective and it isn't validated (value < 2)
		if ($value_question < 2 and $list_target[$id_target]['target_security'] == 1) {
				$list_question_obj[$id_target]['to_work'] = 1;
		}
		// if it isn't a safety objective and isn't validated (value < 1)
		elseif ($value_question < 1 and $list_target[$id_target]['target_security'] == 0) {
			$list_question_obj[$id_target]['to_work'] = 0.5;
		}
		// objectives which have been validated
		else {
			if (empty ($list_question_obj[$id_target]['to_work']))
				$list_question_obj[$id_target]['to_work'] = 0;
		}
	}



	// to select next educational cycle (which perhaps doesn't exist yet)
	
	// next eductional cycle is defined by a date posterior to this evaluation of concern
	if ($_GET['type_eval'] == 'educ_diag')
		$date_min = $educ_diag['educ_diag_date'];
	elseif ($_GET['type_eval'] == 'cycle_educ_eval')
		$date_min = $cycle_educ_start_date;

	require (MODEL_PATH.'select_next_cycle_educ.php');
	
	// if no next educational cycle exists, we create one
	if ($nb_response == 0) {
		require (MODEL_PATH.'insert_cycle_educ.php'); // return Id of educational cycle ($id_cycle_educ)
		$date_cycle = date('Y-m-d H:i:s');
		$_SESSION['patient']['cycles_educ'][$date_cycle] = array('id_cycle_educ' => $id_cycle_educ,
																'cycle_educ_eval_date' => '',
																'cycle_educ_end_programme' => 0);
		$list_cycle_target = array();
		$view_action = 'write';
	}
	// else if one exists, we select its informations
	elseif ($nb_response == 1) {
		$id_cycle_educ = $id_next_cycle_educ;
		require (MODEL_PATH.'select_list_cycle_target.php'); // return $list_cycle_target
		
		// have final evaluation of this cycle already made or sheduled (in six months) ?
		require (MODEL_PATH.'select_cycle_educ_eval_date.php');
		// if so, we could only read the list of scheduled objectives
		if ($cycle_educ_eval_date != '') {// and ! preg_match ('#[a-zA-Z]{3,}#', showDate ($cycle_educ_eval_date))) {
			$view_action = 'read';
		}
		// if not, modifications are still possible
		else {
			$view_action = 'write';
		}

	}
	else {
		$messages['error'][] = _("Il y a plusieurs cycles du programme éducatif avec la même date de début pour ce patient").'. '.pleaseContactAdmin();
	}


		
/*
echo '<pre>';
print_r ($list_cycle_target);
echo '</pre>';
/**/
	$one_compulsory_obj_non_valid = 0;
	$one_obj_non_valid = 0;
	$one_obj_done = 0;

	foreach ($list_question_obj as $id_target => $features_question_obj) {
		if ($features_question_obj['to_work'] == 1)// and (!isset ($list_cycle_target[$id_target]['cycle_target_done']) or $list_cycle_target[$id_target]['cycle_target_done'] == 0))
			$one_compulsory_obj_non_valid = 1;
		elseif ($features_question_obj['to_work'] == 0.5)//and (!isset ($list_cycle_target[$id_target]['cycle_target_done']) or $list_cycle_target[$id_target]['cycle_target_done'] == 0))
			$one_obj_non_valid = 1;
		
		if (isset ($list_cycle_target[$id_target]['cycle_target_done']) and $list_cycle_target[$id_target]['cycle_target_done'] == 1)
			$one_obj_done = 1;
	}


	// management of data sent, corresponding to registration of educational objectives in the programme
	if (isset ($_POST['valid_targets_to_work'])) {
		$targets_cycle = checkVarPost ();
		
		$one_target_inserted = 0;
		$one_target_updated = 0;
		
		// we go through the list of objectives previously defined	
		foreach ($list_question_obj as $id_target => $features_question_obj) {
			
			// if this objective hasn't been yet validated (if so, it can't been changed)
			if (! isset ($list_cycle_target[$id_target]['cycle_target_done'])
					or $list_cycle_target[$id_target]['cycle_target_done'] == 0) {

				// check of possible errors
				// check of date given
				if (!empty ($targets_cycle['date_target_'.$id_target])) {
					$targets_cycle['confirm_target_'.$id_target] = 1;
					
					$target_date_parts = explode ('/', $targets_cycle['date_target_'.$id_target]);

					if ( !isset ($target_date_parts[1]) or !isset ($target_date_parts[2])) {
						$messages['error'][$id_target] = _("Le format de la date n'est pas correct pour l'objectif n°").' '.$id_target;
						$targets_cycle['date_target_'.$id_target] = '';	
					}
					else {
						$target_date = prepareDateSQL ($target_date_parts[2], $target_date_parts[1], $target_date_parts[0]);
						
						if (checkdate ($target_date_parts[1], $target_date_parts[0], $target_date_parts[2]) == false)
							$messages['error'][$id_target] = _("La date entrée n'est pas correcte pour l'objectif n°").' '.$id_target;
						elseif (calculateAge($target_date)['year'] >= 0)
							$messages['error'][$id_target] = _("La date entrée appartient au passé pour l'objectif n°").' '.$id_target;

					}	
				}
				else {
					$target_date = '';
				}

				// if objective haven't been checked whereas it's compulsory (-> error) or advised (-> warning)
				if (!isset ($targets_cycle['confirm_target_'.$id_target])) {
					if ($features_question_obj['to_work'] == 1) {
						$messages['error'][$id_target] = _("Vous devez sélectionner l'objectif n°").' '.$id_target.' '._("car c'est un objectif obligatoire");
					}
					elseif ($features_question_obj['to_work'] == 0.5) {
						if (!isset ($_SESSION['patient']['warning']['summ_eval'][$id_target])) {
							$messages['warning'][$id_target] = _("Etes-vous sur de ne pas prévoir de travailler l'objectif n°").' '.$id_target.' ? ('._("conseillé parce que non validé").')';
							$_SESSION['patient']['warning']['summ_eval'][$id_target] = 1;
						}
						else {
							unset ($_SESSION['patient']['warning']['summ_eval'][$id_target]);
						}
					}
				}
				
			
				// if no error and no warning message (or warning message but exception confirmed by user) :
				// insertion or update in database
				if (isset ($targets_cycle['confirm_target_'.$id_target])
				and empty ($messages['error'][$id_target])
				and empty($messages['warning'][$id_target])) {

					$target_done = 0;
					if ($target_date == '')
						$target_date = NULL;
					
					require (MODEL_PATH.'select_cycle_target_exist.php');
					if (empty ($cycle_target)) {
						require (MODEL_PATH.'insert_cycle_target.php');
						$one_target_inserted = 1;
					}
					else {
						require (MODEL_PATH.'update_cycle_target.php');
						$one_target_updated = 1;
					}

					$messages['info'][] = _("Objectif").' '.$id_target.' : '._("planification enregistrée");
//					$_SESSION['patient']['synthesis_to_do'] = 0;
				}
			}
		}	

		if (empty ($messages['error']) and empty ($messages['warning'])) {
			$_SESSION['messages']['info'] = _("La planification a été enregistrée.");
			if ($one_target_inserted == 1 and $one_target_updated == 0)
				$_SESSION['messages']['advice'] .= _("Vous pouvez démarrer les séances éducatives (cliquez sur le(s) objectif(s) dans le menu de gauche). Néanmoins, pour un apprentissage optimal, il est fortement conseillé de les programmer lors d'une consultation ultérieure.");
				
			$_SESSION['patient']['synthesis_to_do'] = 0;
			header ('location:.?module=patient_management&action=show_profile');
			exit;
		}
	}
	
	elseif (isset ($_POST['valid_programme'])) {
	
		if ($one_compulsory_obj_non_valid == 1) {
			$messages['error'][] = _("Vous ne pouvez pas achever le programme éducatif tant qu'il reste au moins un objectif de sécurité non validé");
		}
		elseif ($one_obj_done == 1) {
			$messages['error'][] = _("Vous ne pouvez pas achever le programme éducatif puisqu'un objectif a déjà été travaillé dans ce cycle. Il faut d'abord réaliser l'évaluation du patient");
		}
		elseif ($one_obj_non_valid == 1 and !isset($_SESSION['patient']['warning']['programme_finished'])) {
			$messages['warning'][] = _("Êtes-vous sûr d'achever ce programme éducatif alors que certains objectifs ne sont pas validés ?");
			$_SESSION['patient']['warning']['programme_finished'] = 1;
		}
		else {
			require (MODEL_PATH.'select_last_cycle_educ_achieved.php');
			require (MODEL_PATH.'update_cycle_educ_end_programme.php');
			
			$id_user = $_SESSION['id_user'];
			require(MODEL_PATH.'select_user_eval_all.php');
			$user_eval = end($all_user_eval);
			require (MODEL_PATH.'select_user_eval_answers.php');
			$nb_points = 0;
			foreach ($list_answers as $right_answer) {
				if (isset ($user_eval[$right_answer]) and $user_eval[$right_answer] == 1)
					$nb_points ++;
			}
			require (MODEL_PATH.'select_patient_list.php');
			
			if ($nb_points < LIMIT_NB_POINTS or count($list_patient) <= LIMIT_NB_PATIENTS) {
				$user_eval_to_do = 1;
				require (MODEL_PATH.'update_user_eval_to_do.php');
				$_SESSION['user_eval_to_do'] = 1;
				$_SESSION['messages']['advice'] = _("Il ne vous reste plus qu'à procéder à l'évaluation en fin de programme de vos compétences pour dispenser l'ETP (cliquez sur &laquo;&nbsp;Je re-teste mes compétences&nbsp;&raquo; dans votre espace après avoir fermé le dossier du patient).");
			}
			else {
				$_SESSION['messages']['advice'] = _("Bravo !");
			}
			
			require (MODEL_PATH.'select_cycle_educ_exist.php');
			
			$future_eval_date_y = date('Y');
			$future_eval_date_m = date('m') + NB_MONTHS_LATER;
			
			if ($future_eval_date_m > 12) {
				$future_eval_date_y += 1;
				$future_eval_date_m -= 12;
			}
		
			$cycle_educ_eval_date = $future_eval_date_y.'-'.$future_eval_date_m.'-00 00:00:00';
			require (MODEL_PATH.'update_cycle_educ_eval_date.php');
			require (MODEL_PATH.'delete_cycle_target.php');
			
			if (isset ($_SESSION['patient']['warning']['programme_finished']))
				unset ($_SESSION['patient']['warning']['programme_finished']);
			
			$_SESSION['messages']['info'] = _("Fin du programme éducatif enregistré. Séance d'évaluation du maintien des compétences prévue dans 6 mois.");
			$_SESSION['patient']['synthesis_to_do'] = 0;
			$_SESSION['patient']['eval_to_do'] = 1;
			
			header ('location:.?module=patient_management&action=show_profile');
			exit;
		}
	}
	

	require (VIEW_RELATIVE_PATH.'show_summ_eval.php');
}

?>

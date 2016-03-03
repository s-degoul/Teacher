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


define ('LIMIT_NB_POINTS', 17);
define ('LIMIT_NB_PATIENTS', 3);


if (isset ($_GET['id_user_eval']) or isset ($_GET['first_eval'])) {
	
	$id_user = $_SESSION['id_user'];
	$no_response = 0;
	
//	if (isset ($_GET['no_response']))
//		$no_response = 1;
	
	require (MODEL_PATH.'select_user_eval_list.php');
	
	if (isset ($_GET['first_eval'])) {
		$id_user_eval = key($user_eval_list);
		if (count ($user_eval_list) <= 1)
			$no_response = 1;
	}
	else {
		$id_user_eval = $_GET['id_user_eval'];
		if ($id_user_eval == key($user_eval_list) and count ($user_eval_list) <= 1)
			$no_response = 1;
	}

	require ('list_questions.php');
	require ('group_questions.php');


    // how many correct answers for each question ?
	require (MODEL_PATH.'select_user_eval_answers.php');
	foreach ($list_questions as $num_question => $features_question) {
		$nb_right_answers = 0;
		foreach ($list_answers as $right_answer) {
			if (preg_match('#'.$num_question.'_#', $right_answer))
				$nb_right_answers ++;
		}
		
		$list_questions[$num_question]['nb_answers'] = $nb_right_answers;
	}
    
    require (MODEL_PATH.'select_user_eval.php');
    
    if (!empty ($user_eval)) {
		$nb_all_points = 0;
		$nb_max_points = 0;
		
		foreach ($list_questions as $id_question => $features_question) {
			$nb_max_points += $features_question['nb_answers'];
			foreach ($features_question['items'] as $nb_item => $title_item) {
				$id_item = 'user_eval_q'.$id_question.'_'.$nb_item;
				if (isset ($user_eval[$id_item]) and $user_eval[$id_item] == 1 and in_array ($id_item, $list_answers)) {
					$nb_all_points ++;
				}
			}
		}
		
		if (isset ($_GET['from_action']) and $_GET['from_action'] == 'create_eval') {
			if ($_SESSION['user_validation_essential'] == 0) {
				$messages['advice'][] = _("Votre score est de").' '.$nb_all_points.'/'.$nb_max_points.'. '._("Vous avez achevé l'évaluation de vos compétences pour dispenser l'ETP, avant la formation.").'<br/>'._("Veuillez lire &laquo;&nbsp;L'essentiel à savoir avant de commencer&nbsp;&raquo; (cliquez sur le lien dans le menu de gauche).");
			}
			elseif ($nb_all_points < LIMIT_NB_POINTS) {
				$messages['advice'][] = _("Votre score est de").' '.$nb_all_points.'/'.$nb_max_points.'. '._("Vous êtes sur le bon chemin. Cependant nous vous conseillons de relire &laquo;&nbsp;je rafraîchis mes connaissances&nbsp;&raquo; puis d'inclure un nouveau patient dans un cycle pédagogique en vous aidant des conducteurs.");
				$_SESSION['user_validation_essential'] = 2;
				$user_validation_Essential = 2;
				require (MODEL_PATH.'update_user_essential.php');
			}
			else {
				require(MODEL_PATH.'select_patient_list.php');
				
				if (count ($list_patient) <= LIMIT_NB_PATIENTS) {
					$messages['advice'][] = _("Votre score est de").' '.$nb_all_points.'/'.$nb_max_points.'. '._("Félicitations ! Nous vous conseillons d'inclure de nouveaux patients pour consolider votre apprentissage.");
				}
				else {
					$messages['advice'][] = _("Votre score est de").' '.$nb_all_points.'/'.$nb_max_points.'. '._("Félicitations ! Vous pouvez maintenant terminer le programme Teacher (cliquez sur &laquo;&nbsp;Terminer Teacher&nbsp;&raquo; au dessus)");
					
					$user_end_teacher = 1;
					require(MODEL_PATH.'update_user_end_teacher.php');
					
					$_SESSION['user_end_teacher'] = 1;
					$content_top .= '<p class=\'end_teacher\'><a href=\'.?module=user_teaching&action=end_teacher\' class=\'link_action\'>'._("Terminer Teacher").'</a></p>'."\n";
					//~ header('location:.?module=user_teaching&action=show_summ_all_eval');
					//~ exit;
				}
			}
		}
		
		if ($no_response == 1) {
			$messages['info'][] = _("Les items cochés correspondent aux réponses que vous avez données. Les bonnes réponses vous seront fournies lorsque vous effectuerez votre auto-évaluation après réalisation de la totalité du programme éducatif d'un enfant.");
		}
		else {
			$messages['info'][] = _("Les réponses justes sont en vert ; les items cochés correspondent aux réponses que vous avez données. Votre résultat se trouve en bas de page. En cas de réponses erronées, nous vous conseillons de cliquer sur le(les) lien(s) vers le chapitre correspondant de &laquo; je rafraîchis mes connaissance &raquo; situé(s) en regard de la question qui vous permettra(ont) d’obtenir rapidement la bonne réponse.");
			
			require ('questions_help.php');
		}

		$content_top .= '<p class=\'info_date\'>'._("Évaluation réalisée le").' '.showDate($user_eval['user_eval_date']).'</p>'."\n";
		$content_top .= '<a href = \'.?module=user_teaching&action=show_summ_eval&id_user_eval='.$id_user_eval.'\' class = \'link\'>'._("Voir la synthèse associée").'</a>'."\n";		
			   
		
		foreach ($list_group_questions as $group_questions => $features_group_questions) {
			$page_eval = $group_questions;
			require (VIEW_RELATIVE_PATH.'user_eval.php');
		}
	}
	else
		$messages['error'][] = _("Évaluation non retrouvée");
}
else {
	$messages['error'][] = _("Aucune évaluation sélectionnée");
}

?>

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


    
// to calculte what was the date x hours ago (x = TIME_LAST_EVAL)

define ('TIME_LAST_EVAL', 1); // unit = hour, maximum 23
// ATTENTION AUX DIFFÉRENCES D'HEURE ENTRE SERVEUR ET UTILISATEUR !!

$date_min_d = date('d');
$date_min_m = date('m');
$date_min_Y = date('Y');

if (date('H') >= TIME_LAST_EVAL) {
	$date_min_H = date('H') - TIME_LAST_EVAL;
}
else {
	$date_min_H = 24 - ( TIME_LAST_EVAL - date('H') );

	if (date ('d') == 01) {
		switch (date('m') ) {
				case 01 :
				case 03 :
				case 05 :
				case 07 :
				case 08 :
				case 10 :
				case 12 :
					$date_min_d = 31;
					break;
				case 02:
					// leap year (can be divided by 4 but not by 100, or can be divided by 400)
					if(($date_min_Y % 4 == 0 and $date_min_Y % 100 != 0) or $date_min_Y % 400 == 0)
						$date_min_d = 27;
					else
						$date_min_d = 28;
					break;
				default :
					$date_min_d = 30;
					break;
		}
		
		if (date ('m') == 01) {
			$date_min_m = 12;
			$date_min_Y = date('Y') - 1;
		}
		else {
			$date_min_m = date('m') - 1;
		}
	}
	else {
		$date_min_d = date('d') - 1;
	}
}

$date_min = $date_min_Y.'-'.$date_min_m.'-'.$date_min_d.' '.$date_min_H.':00:00';

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


// does a recent self-evaluation already exist ?
// (an evaluation made for a time < TIME_LAST_EVAL is considered as the same as this one)
$id_user = $_SESSION['id_user'];
require (MODEL_PATH.'select_user_eval_exist.php');

// if no, we create one
if ($id_user_eval == -1) {
	require (MODEL_PATH.'add_user_eval.php');
}
elseif (empty ($_POST) and ((isset ($_GET['page_eval']) and $_GET['page_eval'] == 'info') or !isset ($_GET['page_eval']))) {
	if ($user_eval['user_eval_achieved'] !=1) {
		$messages['warning'][] = _("La dernière auto-évaluation n'a pas été achevée et vous ne pouvez en réaliser une nouvelle. Les réponses que vous apportez ici remplaceront celles données lors de cette dernière auto-évaluation.");
	}
	else {
		$messages['warning'][] = _("La dernière auto-évaluation est très récente et vous ne pouvez en réaliser une nouvelle. Les réponses que vous apportez ici remplaceront celles données lors de cette dernière auto-évaluation.");
	}
}



if (isset ($_POST['valid_next_page']) or isset ($_POST['valid_last_page'])) {
// to get and make secured all vars sent by form
	$user_eval = checkVarPost();

// To define which items have to be updated in the database

	// which group of questions ? (see group_questions.php)

	$group_questions = $user_eval['target_eval'];

	// to deduce which items are of interest for update in the database ...

	$list_item = array();

	foreach ($list_questions as $num_question => $features_question) {
		if ($num_question >= $list_group_questions[$group_questions]['first_question'] and $num_question <= $list_group_questions[$group_questions]['last_question']) {
			
			// in the same time, calculation of number of items checked :
			//it mustn't be > max number of answer (define in list_questions.php)
			$nb_answers = 0;
			
			foreach ($features_question['items'] as $num_item => $title_item) {
				if ($num_item > 0)
					$list_item[] = 'user_eval_q'.$num_question.'_'.$num_item;
				if (isset ($user_eval['user_eval_q'.$num_question.'_'.$num_item]))
					$nb_answers ++;
			}
			
			if ($nb_answers != $features_question['nb_answers'])
				$messages['error'][] = _("question").' '.$num_question.' : '._("vous n'avez pas coché le bon nombre d'items");
		}
	}

	// if no error, update can be achieved !
	if (empty ($messages['error'])) {
		require (MODEL_PATH.'update_user_eval.php');
	}
}


// which page has to be shown now ?
if (isset ($user_eval['valid_next_page'])) {
	if (!empty ($messages['error']))
		$page_eval = $group_questions;
	elseif (array_key_exists($group_questions+1, $list_group_questions))
		$page_eval = $group_questions+1;
	else
		$page_eval = 'end';
}
elseif (isset ($user_eval['valid_last_page'])) {
	if (!empty ($messages['error']))
		$page_eval = $group_questions;
	elseif (array_key_exists($group_questions-1, $list_group_questions))
		$page_eval = $group_questions-1;
	else
		$page_eval = 'info';
}
elseif (isset ($_GET['page_eval']))
	$page_eval = $_GET['page_eval'];
else
	$page_eval = 'info';


if (empty ($messages['error']) and $page_eval != 'info' and $page_eval != 'end')
	require (MODEL_PATH.'select_user_eval.php');


// display page with questions ($page_eval is numeric)
// or page with explanations at the beginning ($page_eval = info)
// or with results at the end ($page_eval = end)
if ($page_eval == 'info')
	require (VIEW_RELATIVE_PATH.'user_eval_info.php');
elseif ($page_eval == 'end') {
	$_SESSION['user_first_eval'] = 1;
	
	$user_eval_to_do = 0;
	require (MODEL_PATH.'update_user_eval_to_do.php');
	require (MODEL_PATH.'update_user_eval_achieved.php');
	$_SESSION['user_eval_to_do'] = 0;
	
	
	header('location:.?module=user_teaching&action=show_eval&id_user_eval='.$id_user_eval.'&from_action=create_eval');
	exit;
}
else {
	require (VIEW_RELATIVE_PATH.'progress_bar.php');
	require (VIEW_RELATIVE_PATH.'user_eval.php');
}
//echo '<pre>';
//print_r ($list_answers);
//echo '</pre>';
?>

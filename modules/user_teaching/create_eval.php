  
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
    
// to calculte what was the date x hours ago (x = TIME_LAST_EVAL)

    $date_now = date ('Y-m-d H:i:s');
    
    define ('TIME_LAST_EVAL', 1); // unit = hour, maximum 23
    // ATTENTION AUX DIFFÉRENCES D'HEURE ENTRE SERVEUR ET UTILISATEUR !!

    $date_min_d = date ('d');
    $date_min_m = date('m');
    $date_min_Y = date('Y');

     if (date('H') >= TIME_LAST_EVAL) {
        $date_min_H = date('H') - TIME_LAST_EVAL;
    }
    else {
        $date_min_H = 24 - ( TIME_LAST_EVAL - date('H') );

        if (date ('d') == 01) {
            switch ($date('m') ) {
                    case 01 :
                    case 03 :
                    case 05 :
                    case 07 :
                    case 08 :
                    case 10 :
                    case 12 :
                        $date_min_d = 31;
                        break;
                    case 02 :
                        $date_min_d = 28 ; //pas de prise en compte de années bissextiles  ;) //
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
    
    $group_questions = 'info';
	include ('list_questions.php');



	
    if (isset ($_POST['valid_eval'])) {

// does a recent self-evaluation already exist ?
// (an evaluation made for a time < TIME_LAST_EVAL is considered as the same as this one)

        include (MODEL_PATH.'select_user_eval_exist.php');

	// if no, we create one
        if (empty ($user_eval)) {
                include (MODEL_PATH.'add_user_eval.php');
        }

// to get and make secured all vars sent by form
		$user_eval = checkVarPost();

// To define which items have to be updated in the database

	// which group of questions ? (see group_questions.php)

		$group_questions = $_POST['target_eval'];

	// to deduce which items are of interest for update in the database ...
		require ('group_questions.php');

		$list_item = array();

		foreach ($list_questions as $nb_question => $features_question) {
			if ($nb_question >= $first_question and $nb_question <= $last_question) {
				
				// in the same time, calculation of number of items checked :
				//it mustn't be > max number of answer (define in list_questions.php)
				$nb_answers = 0;
				
				foreach ($features_question['items'] as $nb_item => $title_item) {
					if ($nb_item > 0)
						$list_item[] = 'user_eval_q'.$nb_question.'_'.$nb_item;
					if (isset ($user_eval['user_eval_q'.$nb_question.'_'.$nb_item]))
						$nb_answers ++;
				}
				
				if ($nb_answers != $features_question['nb_answers'])
					$messages['error'][] = _('question').' '.$nb_question.' : '._("vous n'avez pas coché le bon nombre d'items");
			}
		}

		// if no error, update can be achieved !
		if (empty ($messages['error'])) {
			require (MODEL_PATH.'update_user_eval.php');
		}
	}

// which page has to be shown now ?
	if (!empty ($messages['error']))
		$page_eval = $group_questions;
	elseif (isset ($_POST['page_eval']))
		$page_eval = $_POST['page_eval'];
	elseif (isset ($_GET['page_eval']))
		$page_eval = $_GET['page_eval'];
	else
		$page_eval = 'info';
	
// display page with questions ($page_eval is numeric)
// or page with explanations at the beginning ($page_eval = info)
// or with results at the end ($page_eval = end)
	if ($page_eval == 'info')
		require (VIEW_RELATIVE_PATH.'user_eval_info.php');
	elseif ($page_eval == 'end') {
		$_SESSION['user_first_eval'] = 1;
		
		$user_eval_to_do = 0;
		require (MODEL_PATH.'update_user_eval_to_do.php');
		$_SESSION['user_eval_to_do'] = 0;
		header('location:.?module=user_teaching&action=show_eval&id_user_eval='.$id_user_eval.'&no_response=yes');
	}
	else {
		// which group of questions to show ?
		$group_questions = $page_eval;
		require ('group_questions.php');
		require (VIEW_RELATIVE_PATH.'user_eval.php');
	}
//echo '<pre>';
//print_r ($list_answers);
//echo '</pre>';
?>

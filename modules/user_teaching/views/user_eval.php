  
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

$title_view = _("J'évalue mes compétences en éducation thérapeutique du patient (ETP)");

$style[] = 'user_eval';

require_once ('user_eval_script_js.php');
?>



<?php
	if ($_GET['action'] == 'create_eval')
		echo '<form action=\'.?module=user_teaching&action=create_eval&page_eval='.$next_group_questions.'\' method=\'post\'>'."\n";
?>

	<div class="table_user_eval_info">

		<div class="user_eval_obj_img"><?php echo $page_eval; ?></div>
		<div class="user_eval_obj_q">


<?php
	echo $title_group_questions;
?>
		</div>
		

<?php

	foreach ($list_questions as $id_question => $features_question) {
		if ($id_question >= $first_question and $id_question <= $last_question) {
			
			$nb_points = 0;
			if (! isset ($nb_all_points))
				$nb_all_points = 0;
			if (! isset ($nb_max_points))
				$nb_max_points = 0;
?>
		<div>
			<div class="user_eval_obj_sq">
				<?php echo $id_question.'/ '.$features_question['title']; ?>
			</div>

	 		<div class="user_eval_obj_nbans">
<?php
			if ($features_question['nb_answers'] == 1) {
				$sentence_nb_answers = 'cliquez sur la bonne réponse'."\n";
				$sentence_nb_points = ' / 1 point';
			}
			else {
				$sentence_nb_answers = _("cliquez sur les").' '.$features_question['nb_answers'].' '._("bonnes réponses")."\n";
				$sentence_nb_points = ' / '.$features_question['nb_answers'].' points';
			}
			
			if ($_GET['action'] == 'create_eval')
				echo $sentence_nb_answers;
?>
	 		</div>

			<div class="user_eval_obj_qcm">

<?php
			foreach ($features_question['items'] as $nb_item => $title_item) {
				if ($nb_item > 0) {
					$id_item = 'user_eval_q'.$id_question.'_'.$nb_item;
					$css_item = 'user_eval_obj_qcm_item';
					$checked = '';
					
					if ($_GET['action'] == 'show_eval'){
						if (in_array ($id_item, $list_answers)) {
							$nb_max_points += 1;
							if (! isset ($_GET['no_response']))
								$css_item = 'user_eval_obj_qcm_answer';
						}
					}
					
					if ( isset ($user_eval[$id_item]) and $user_eval[$id_item] == 1) {
						$checked = 'checked';
						if ($_GET['action'] == 'show_eval' and in_array ($id_item, $list_answers)) {
							$nb_points += 1;
							$nb_all_points += 1;
						}
					}
					
					
					echo' <p class = \''.$css_item.'\'><input type="checkbox" id=\''.$id_item.'\'
							name=\''.$id_item.'\'
							value=\'1\' '.$checked.' onchange=\'TestGrp'.$id_question.'()\'/>'
							.$title_item.'</p>'."\n";
				}
				else {
					echo '<strong><em>'.$title_item.'</em></strong>'."\n";
				}
			}
?>

			</div>

			<div class="user_eval_obj_point">
<?php
	if ($_GET['action'] == 'show_eval')
		echo $nb_points.$sentence_nb_points."\n"; 
?>
			</div>
		</div>
<?php
		}
	}
?>

		<div class='user_eval_valid'>
<?php
	if ($_GET['action'] == 'create_eval') {
		echo'			<input type=\'hidden\' name = \'target_eval\' value = '.$page_eval.' />'."\n";
		echo'			<input type=\'submit\' name=\'valid_eval\' value=\''._("Page suivante").'\'/>'."\n";
	}
?>
		</div>
	</div>
<?php
	if ($_GET['action'] == 'create_eval')
		echo'</form>'."\n";
	elseif ($group_questions == 3)
		echo '<p>'._("Résultat global").' = '.$nb_all_points.' / '.$nb_max_points.'</p>';
?>

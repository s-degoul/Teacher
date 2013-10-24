  
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

$title_view = _("Évaluation du patient");
$style[] = 'patient_eval';

if (isset ($list_target[$page_eval]))
	$title_page_eval = $list_target[$page_eval]['target_name'];
else
	$title_page_eval = 'à voir';
?>
<div>
	<div class="eval_obj_img">
<?php
	if (is_file ('images/obj'.$page_eval.'-diag.gif'))
		echo '		<img src=\'images/obj'.$page_eval.'-diag.gif\' />'."\n";
?>
	</div>
	<div class = 'eval_obj_content'>
		<div class="eval_obj_title">
<?php	echo '		'.$title_page_eval; ?>
		</div>

<?php
if ($_GET['action'] == 'create_eval') {
	if ($page_eval == 10)
		$next_page_eval = 'end';
	elseif (is_numeric ($page_eval))
		$next_page_eval = $page_eval + 1;
	echo '	<form method = \'post\' action = \'.?module=patient_teaching&action=create_eval&page_eval='.$next_page_eval.'\' >'."\n";
}


foreach ($list_questions as $nb_question => $features_question) {
	
	$nb_question_part = explode ('_', $nb_question);
	if ($nb_question_part[0] == $page_eval) {

		if (isset ($features_question['title'])) {
			echo '	<div class = \'eval_subobj_title\'>'."\n";
			if (isset ($nb_question_part[1]) and $nb_question != '6_bonus')
				echo $page_eval.' '.$nb_question_part[1].'/ ';
				
			echo $features_question['title']."\n";
			echo '	</div>'."\n";
		}
		
		if (isset ($features_question['instruction']))
			echo '	<div class = \'eval_instruction\'>'.$features_question['instruction'].'	</div>'."\n";

		if (isset ($features_question['real_life_situation'])) {
			echo '	<div class = \'eval_real_life_situation\'>'."\n";
			echo '		<p class = \'eval_real_life_situation_title\'>'._("Mise en situation").'</p>'
							.'<p>'.$features_question['real_life_situation'].'</p>'."\n";
			echo '	</div>'."\n";
		}
			
		if (isset ($features_question['question_answer'])) {
			foreach ($features_question['question_answer'] as $question => $answer) {
				if (is_string ($question))
					echo '	<div class = \'eval_question\'><span class = \'eval_question_answer_title\'>'._("Question").' :</span> '.$question.'</div>'."\n";
				if (is_string ($answer))
					echo '	<div class = \'eval_answer\'><span class = \'eval_question_answer_title\'>'._("Réponse attendue").' :</span> '.$answer.'</div>'."\n";
			}
		}
		
		if (isset ($features_question['list_subquestions'])) {
			foreach ($features_question['list_subquestions'] as $nb_subquestion => $features_subquestion) {
				if (! is_numeric ($nb_subquestion))
					echo '<p class = \'eval_subquestion_statement\'>'.$features_subquestion.'</p>'."\n";
				else {
					echo '<p class = \'eval_subquestion_title\'>'.$nb_subquestion.'/ '.$features_subquestion['title'].'</p>'."\n";
					foreach ($features_subquestion['items'] as $nb_item => $title_item) {
						echo '<p>'.$nb_item.') '.$title_item.'</p>'."\n";
					}
				}
			}
		}
		
		if (isset ($features_question['validation_conditions']))
			echo '	<div class=\'eval_validation_conditions\'>'.$features_question['validation_conditions'].'</div>'."\n";
			
		if (isset ($features_question['validation_items'])) {
			echo '	<div class = \'eval_validation_items\'>'."\n";
			foreach ($features_question['validation_items'] as $name_item => $value_item) {
					switch ($name_item) {
						case 'non_valid' :
							$title_item = _("Non validé");
							break;
						case 'partially_valid' :
							$title_item = _("Partiellement validé");
							break;
						case 'valid' :
							$title_item = _("Validé");
							break;
					}
					
					if (isset ($cycle_educ['cycle_educ_eval_obj'.$nb_question]) and $cycle_educ['cycle_educ_eval_obj'.$nb_question] == $value_item)
						$checked = 'checked';
					else
						$checked = '';

					echo '			<p><input type = \'radio\' name = \'cycle_educ_eval_obj'.$nb_question.'\'
										id = \'valid_obj'.$value_item.'\' value = \''.$value_item.'\' '.$checked.' />
										<label for = \'valid_obj'.$value_item.'\'>'.$title_item.'</label></p>'."\n";
			}
			echo '	</div>'."\n";
		}
	}
}


if ($_GET['action'] == 'create_eval') {
	echo '	<div class = \'eval_validation_button\'><input type = \'hidden\' name = \'target_eval\' value = \''.$page_eval.'\' />'."\n";
	echo '<input type = \'submit\' name = \'valid_eval\' value = \''._("Page suivante").'\' /></div>'."\n";
	echo '</form>'."\n";
}

?>

	</div>
</div>

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


if ($maintain_eval == 0)
	$title_view = _("Évaluation finale");
else
	$title_view = _("Séance d'évaluation du maintien des compétences à distance");

$style[] = 'patient_eval';



if ($_GET['action'] == 'create_eval') {
?>
<form method = 'post' action = '.?module=patient_teaching&action=create_eval'>
<?php
}


if (isset ($list_target[$page_eval]))
	$title_page_eval = $list_target[$page_eval]['target_name'];
else
	$title_page_eval = _("Évaluations subjective et objective du niveau de contrôle de l'asthme");
?>
<div>
	<div class = 'target_image'>
<?php
if (is_file (IMAGE_PATH.'obj'.$page_eval.'-diag.gif')) {
?>
		<img src = '<?php echo IMAGE_PATH; ?>obj<?php echo $page_eval; ?>-diag.gif' />
<?php
}
?>
	</div>
	<div class = 'target_content'>
		<p class = 'target_title'>
			<?php echo $title_page_eval; ?>
		</p>

<?php

foreach ($list_questions as $num_question => $features_question) {
	
	$num_question_part = explode ('_', $num_question);
	if ($num_question_part[0] == $page_eval) {

		if (isset ($features_question['title'])) {
?>
		<p class = 'target_subtitle'>
<?php
			if (isset ($num_question_part[1]) and $num_question != '6_bonus')
				echo $page_eval.' '.$num_question_part[1].'/ ';
				
			echo $features_question['title']."\n";
?>
		</p>
<?php
		}
		
		if (isset ($features_question['instruction'])) {
?>
		<p class = 'instruction'>
			<?php echo $features_question['instruction']; ?>
		</p>
<?php
		}
		
		if (isset ($features_question['real_life_situation'])) {
?>
		<div class = 'real_life_situation'>
			<p class = 'real_life_situation_title'><?php echo _("Mise en situation"); ?></p>
			<p><?php echo $features_question['real_life_situation']; ?></p>
		</div>
<?php
		}
			
		if (isset ($features_question['question_answer'])) {
			foreach ($features_question['question_answer'] as $question => $answer) {
				if (is_string ($question)) {
?>
		<p class = 'question'>
			<span class = 'question_answer_title'><?php echo _("Question"); ?> :</span><?php echo $question; ?>
		</p>
<?php
				}
				if (is_string ($answer)) {
?>
		<p class = 'answer'>
			<span class = 'question_answer_title'><?php echo _("Réponse attendue"); ?> :</span> <?php echo $answer; ?>
		</p>
<?php
				}
			}
		}
		
		if (isset ($features_question['list_subquestions'])) {
			foreach ($features_question['list_subquestions'] as $nb_subquestion => $features_subquestion) {
				if (! is_numeric ($nb_subquestion)) {
?>
		<p class = 'subquestion_statement'>
			<?php echo $features_subquestion; ?>
		</p>
<?php
				}
				else {
?>
		<p class = 'subquestion_title'>
			<?php echo $nb_subquestion.'/ '.$features_subquestion['title']; ?>
		</p>
<?php
					foreach ($features_subquestion['items'] as $nb_item => $title_item) {
?>
		<p>
			<?php echo $nb_item.') '.$title_item; ?>
		</p>
<?php
					}
				}
			}
		}
		
		if (isset ($features_question['validation_conditions'])) {
?>
		<div class = 'validation_conditions'>
			<?php echo $features_question['validation_conditions']; ?>
		</div>
<?php
		}
		
		if (isset ($features_question['validation_items'])) {
?>
		<div class = 'validation'>
			<p class = 'validation_title'><?php echo _("Objectif").' '.$page_eval; ?>
<?php 
			if (isset ($num_question_part[1]))
				echo ' '.$num_question_part[1];
?>
			:</p>
<?php
			foreach ($features_question['validation_items'] as $name_item => $value_item) {
					switch ($name_item) {
						case 'non_valid' :
							$title_item = _("Non acquis");
							break;
						case 'partially_valid' :
							$title_item = _("Partiellement acquis");
							break;
						case 'valid' :
							$title_item = _("Acquis");
							break;
					}
				
					if (isset ($cycle_educ['cycle_educ_eval_obj'.$num_question]) and $cycle_educ['cycle_educ_eval_obj'.$num_question] == $value_item)
						$checked = 'checked';
					else
						$checked = '';
?>
			<p class = 'validation_item'>
<?php
					if ($_GET['action'] == 'create_eval') {
?>
				<input type = 'radio' name = 'cycle_educ_eval_obj<?php echo $num_question; ?>' id = 'valid_obj_<?php echo $num_question.'_'.$value_item; ?>' value = "<?php echo $value_item; ?>" <?php echo $checked; ?> />
				<label for = 'valid_obj_<?php echo $num_question.'_'.$value_item; ?>'><?php echo $title_item; ?></label>
<?php
					}
					elseif ($checked == 'checked') {
?>
				<img src = '<?php echo IMAGE_PATH.'icon_'.$name_item; ?>' alt = "<?php echo $name_item; ?>" width = 25px;/> <?php echo $title_item; ?>
<?php
					}
?>
			</p>
<?php
			}
?>
		</div>
<?php
		}
		
		// particular case : last page (cACT)
		if ($page_eval == 'asthmacontrol') {
			if (isset ($cycle_educ['cycle_educ_eval_subj_patient']) and !is_null ($cycle_educ['cycle_educ_eval_subj_patient']))
				$value_subj_patient = $cycle_educ['cycle_educ_eval_subj_patient'];
			else
				$value_subj_patient = '';
				
			if (isset ($cycle_educ['cycle_educ_eval_subj_parent']) and !is_null ($cycle_educ['cycle_educ_eval_subj_parent']))
				$value_subj_parent = $cycle_educ['cycle_educ_eval_subj_parent'];
			else
				$value_subj_parent = '';
?>
			<p class = 'target_subtitle'>
				<?php echo _("Évaluation subjective du contrôle de l'asthme."); ?>
			</p>
			
			<p class = 'instruction'>
				<?php echo _("Sur une échelle de 0 à 27, à quel niveau te placerais-tu, en sachant que 20 est la limite entre l’asthme contrôlé et l’asthme non contrôlé ?") ;?>
			</p>
			
			<p>
				<img src = '<?php echo IMAGE_PATH; ?>scale_control_asthma.jpg' alt = '<?php echo _("échelle de contrôle de l'asthme"); ?>' width = 400px /><br />
				<label for = 'cycle_educ_eval_subj_patient'><?php echo _("score de contrôle subjectif enfant"); ?> = </label>
<?php
			if ($_GET['action'] == 'create_eval') {
?>
				<input type = 'text' name = 'cycle_educ_eval_subj_patient' id = 'cycle_educ_eval_subj_patient' size = 3 value = "<?php echo $value_subj_patient; ?>" maxlength = 2 />
<?php
			}
			else {
?>
				<span class = 'answer_text'>
<?php
				echo $value_subj_patient;
?>
				</span>
<?php
			}
?>
			</p>
			
			<p class = 'instruction'>
				<?php echo _("Posez la même question aux parents"); ?>
			</p>
			
			<p>
				<img src = '<?php echo IMAGE_PATH; ?>scale_control_asthma.jpg' alt = '<?php echo _("échelle de contrôle de l'asthme"); ?>' width = 400px /><br />
				<label for = 'cycle_educ_eval_subj_parent'><?php echo _("score de contrôle subjectif parent(s)"); ?> = </label>
<?php
			if ($_GET['action'] == 'create_eval') {
?>
				<input type = 'text' name = 'cycle_educ_eval_subj_parent' id = 'cycle_educ_eval_subj_parent' size = 3 value = "<?php echo $value_subj_parent; ?>" maxlength = 2 />
<?php
			}
			else {
?>
				<span class = 'answer_text'>
<?php
				echo $value_subj_parent;
?>
				</span>
<?php
			}
?>
			</p>
			
			<p class = 'target_subtitle'>
				<?php echo _("Évaluation objective."); ?>
			</p>
<?php
			if (isset ($_GET['cact_score']) and is_numeric($_GET['cact_score']) and $_GET['cact_score'] <= 27)
				$value_cact = $_GET['cact_score'];
			elseif (isset ($cycle_educ['cycle_educ_eval_cact']) and !is_null ($cycle_educ['cycle_educ_eval_cact']))
				$value_cact = $cycle_educ['cycle_educ_eval_cact'];
			else
				$value_cact = '';
?>

			<p class = 'instruction'>
				<?php echo _("Faites remplir ou lire à haute voix ce questionnaire par l’enfant pour les 4 premières questions et par sa famille pour les 3 suivantes"); ?>
<?php
			if ($_GET['action'] == 'create_eval') {
?>
				<input type = 'submit' name = 'valid_cact' value = "<?php echo _("cliquez ici pour une aide au calcul du cACT"); ?>" class = 'link' />
<?php
			}
			else {
?>
				(<a href = '.?module=patient_teaching&action=show_cACT&from=show_eval&from_id_cycle_educ=<?php echo $id_cycle_educ; ?>' ><?php echo _("voir le cACT"); ?></a>)
<?php
			}
?>
			</p>
			<p>
				<img src = 'images/scale_control_asthma.jpg' alt = '<?php echo _("échelle de contrôle de l'asthme"); ?>' width = 400px />
				<label for = 'cycle_educ_eval_cact'><?php echo _("score de contrôle objectif"); ?> = </label>
<?php
			if ($_GET['action'] == 'create_eval') {
?>
				<input type = 'text' name = 'cycle_educ_eval_cact' id = 'cycle_educ_eval_cact' size = 3 value = "<?php echo $value_cact; ?>" maxlength = 2 />
<?php
			}
			else {
?>
				<span class = 'answer_text'>
<?php
				echo $value_cact."\n";
?>
				</span>
<?php
			}
		}
	}
}


if ($_GET['action'] == 'create_eval') {
?>
		<div class = 'eval_validation_button'>
			<input type = 'hidden' name = 'target_eval' value = "<?php echo $page_eval; ?>" />
<?php
	if ($page_eval > 1 or $page_eval == 'asthmacontrol') {
?>
			<input type = 'submit' name = 'valid_last_page' value = "<?php echo _("Enregistrer et revenir à l'étape précédente"); ?>" class = 'button_cancel' />
<?php
	}
	
	if ($page_eval == 'asthmacontrol')
		$text_button_validation = _("Terminer et valider l'évaluation");
	else
		$text_button_validation = _("Enregistrer et aller à l'étape suivante");
?>
			<input type = 'submit' name = 'valid_next_page' value = "<?php echo $text_button_validation; ?>" class = 'button_validation' />
		</div>
<?php
}

?>

	</div>
</div>
<?php
if ($_GET['action'] == 'create_eval') {
?>
</form>
<?php
}
?>

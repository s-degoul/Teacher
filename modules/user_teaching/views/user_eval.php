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


$title_view = _("J'évalue mes compétences en éducation thérapeutique du patient (ETP)");

$style[] = 'user_eval';



if ($_GET['action'] == 'create_eval') {
?>
<form action = '.?module=user_teaching&action=create_eval' method = 'post'>
<?php
}
elseif ($page_eval == 1) {
?>
<p class = 'eval_score'><?php echo _("Résultat global").' : '.$nb_all_points.' / '.$nb_max_points; ?></p>
<?php
}
?>
	<div class = 'group_questions_num'><?php echo $page_eval; ?></div>
	
	<div class = 'group_questions_title'>
		<?php echo $list_group_questions[$page_eval]['title']; ?>
	</div>
		

<?php

foreach ($list_questions as $id_question => $features_question) {
	if ($id_question >= $list_group_questions[$page_eval]['first_question'] and $id_question <= $list_group_questions[$page_eval]['last_question']) {
		
		$nb_points = 0;
		//~ if (! isset ($nb_all_points))
			//~ $nb_all_points = 0;
		
		//~ if (! isset ($nb_max_points))
			//~ $nb_max_points = 0;
		//~ $nb_max_points += $features_question['nb_answers'];
?>
	<div>
		<div class = 'question'>
			<?php echo $id_question.'/ '.$features_question['title']; ?>
		</div>

	 	<p class = 'question_detail'>
<?php
		if ($features_question['nb_answers'] == 1) {
			$sentence_nb_answers = _("cliquez sur la réponse qui vous paraît la plus pertinente")."\n";
			$sentence_nb_points = ' / 1 point';
		}
		else {
			$sentence_nb_answers = _("cliquez sur les").' '.$features_question['nb_answers'].' '._("réponses qui vous paraissent les plus pertinentes")."\n";
			$sentence_nb_points = ' / '.$features_question['nb_answers'].' points';
		}
			
		if ($_GET['action'] == 'create_eval') {
			echo $sentence_nb_answers;
		}
		elseif ($no_response != 1 and array_key_exists($id_question, $list_questions_help)) {
			echo _("Lien vers &laquo;je rafraîchis mes connaissances&raquo;").' :';
			foreach ($list_questions_help[$id_question] as $page_essential => $title) {
?>
			<a href = '.?module=user_teaching&action=show_essential&page_essential=<?php echo $page_essential; ?>&from=show_user_eval&from_id_user_eval=<?php echo $id_user_eval; ?>'>
				<?php echo $title; ?>
			</a>&nbsp;&nbsp;
<?php
			}
		}
?>
	 	</p>

		<div class = 'answers'>

<?php
		foreach ($features_question['items'] as $nb_item => $title_item) {
			if ($nb_item > 0) {
				$id_item = 'user_eval_q'.$id_question.'_'.$nb_item;
				$css_item = 'item';
				$checked = '';
				
				if ($_GET['action'] == 'show_eval' and in_array ($id_item, $list_answers) and $no_response != 1){
					$css_item = 'right_answer';
				}
				
				if ( isset ($user_eval[$id_item]) and $user_eval[$id_item] == 1) {
					$checked = 'checked';
					if ($_GET['action'] == 'show_eval' and in_array ($id_item, $list_answers)) {
						$nb_points += 1;
//						$nb_all_points += 1;
					}
				}
?>				
			<p class = '<?php echo $css_item; ?>'>
				<input type = 'checkbox' id = '<?php echo $id_item; ?>' name = '<?php echo $id_item; ?>' value = '1' <?php if ($_GET['action'] == 'show_eval') echo "disabled"; ?> <?php echo $checked; ?> onchange = 'TestGrp<?php echo $id_question; ?>()'/>
				<label for = '<?php echo $id_item; ?>'><?php echo $title_item; ?></label>
			</p>
<?php
			}
			else {
?>
			<p class = 'part_question'>
				<?php echo $title_item;?>
			</p>
<?php
			}
		}
?>
		</div>

		<p class = 'question_points'>
<?php
		if ($_GET['action'] == 'show_eval')
			echo $nb_points.$sentence_nb_points."\n"; 
?>
		</p>
	</div>
<?php
	}
}
?>

	<p class = 'valid_form'>
<?php
if ($_GET['action'] == 'create_eval') {
?>
		<input type = 'hidden' name = 'target_eval' value = '<?php echo $page_eval; ?>' />
		<input type = 'submit' name = 'valid_last_page' value = "<?php echo _("Enregistrer et aller à la page précédente"); ?>" class = 'button_cancel' />
<?php
	if ($page_eval == 3)
		$title_button = _("Enregistrer et terminer l'évaluation");
	else
		$title_button = _("Enregistrer et aller à la page suivante");
?>
		<input type = 'submit' name = 'valid_next_page' value = "<?php echo $title_button; ?>" class = 'button_validation' />
	</p>
</form>
<?php
}
elseif ($page_eval == 3) {
?>
	<p class = 'eval_score'><?php echo _("Résultat global").' : '.$nb_all_points.' / '.$nb_max_points; ?></p>

<?php
}

require_once ('user_eval_script_js.php');
?>

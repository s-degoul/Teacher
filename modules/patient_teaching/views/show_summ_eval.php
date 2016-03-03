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



if ($_GET['type_eval'] == 'educ_diag') {
	$title_view = _("Synthèse du diagnostic éducatif = contrat éducatif");
	$title_content = _("CONTRAT ÉDUCATIF").' : '._("les 10 objectifs éducatifs");
}
else {
	$title_view = _("Synthèse de l'évaluation finale");
	$title_content = _("SYNTHÈSE APRES ÉDUCATION").' : '._("les 10 objectifs éducatifs");
}
	
$style[] = 'summ_eval';


if ($view_action == 'write') {
/*	if (isset ($_GET['modify_target_cycle']))
		$param_get = '&type_eval='.$_GET['type_eval'].'&modify_target_cycle=1';
	else*/
		$param_get = '&type_eval='.$_GET['type_eval'];
	
	echo '	<form method=\'post\' action=\'.?module=patient_teaching&action=show_summ_eval'.$param_get.'\'>'."\n";
}


if ($_GET['type_eval'] == 'educ_diag' and $view_action == 'write' and $one_obj_done == 0) {
	$messages['advice'][] = _("Le diagnostic éducatif est terminé. Vous pouvez imprimer un exemplaire de cette synthèse : c'est le <strong>contrat éducatif</strong>.");
}

elseif ($_GET['type_eval'] == 'cycle_educ_eval' and $view_action == 'write' and $one_obj_done == 0) {
	$messages['advice'][] = _("L'évaluation de fin de cycle est terminée. Vous pouvez imprimer un exemplaire de cette synthèse.");
}


if($view_action == 'write') {
	if ($one_obj_done == 1) {
		$messages['advice'][] = _("Le renforcement éducatif a déjà été débuté. Vous pouvez modifier/ajouter des dates pour les objectifs éducatifs qui n'ont pas encore été travaillés. La validation de tous les objectifs prévus est nécessaire pour pouvoir réaliser une nouvelle évaluation (passez par le menu de gauche ou la page de synthèse du patient pour y accéder).");
	}
	elseif ($one_compulsory_obj_non_valid == 1 or $one_obj_non_valid == 1) {

		if ($one_compulsory_obj_non_valid == 1) {
			if ($_GET['type_eval'] == 'educ_diag')
				$messages['advice'][] = _("Au moins un objectif de &laquo;&nbsp;sécurité&nbsp;&raquo; n'est pas validé. Une séance éducative est nécessaire.");
			elseif ($_GET['type_eval'] == 'cycle_educ_eval')
				$messages['advice'][] = _("Au moins un objectif de &laquo;&nbsp;sécurité&nbsp;&raquo; n'est pas validé. Un &laquo; renforcement &raquo; éducatif est nécessaire. Il consistera à re-travailler les séances éducatives concernées.");
		}
		else {
			if ($_GET['type_eval'] == 'educ_diag')
				$messages['advice'][] = _("Au moins un objectif éducatif n'est pas validé. Vous pouvez donc prévoir de réaliser une séance éducative (conseillée) ou terminer ce programme éducatif.");
			elseif ($_GET['type_eval'] == 'cycle_educ_eval')
				$messages['advice'][] = _("Au moins un objectif éducatif n'est pas validé. Vous pouvez donc prévoir un renforcement éducatif (conseillé) ou terminer ce programme éducatif.");
		}
		
		$messages['advice'][] = _("Avec l'accord du patient et de sa famille, planifiez les séances éducatives.");
?>
<p>
<?php	
		echo _("Pour planifier les séances éducatives, cochez la case correspondant à chaque objectif éducatif à travailler (les objectifs suggérés sont pré-cochés). Vous pouvez choisir également de préciser une date de réalisation (conseillé).");

		if ($_GET['type_eval'] == 'educ_diag')
			echo ' '._("Cliquez ensuite sur &laquo;&nbsp;Réaliser les séances éducatives&nbsp;&raquo;.");
		elseif ($_GET['type_eval'] == 'cycle_educ_eval')
			echo ' '._("Cliquez ensuite sur &laquo;&nbsp;Réaliser un renforcement éducatif&nbsp;&raquo;.");
		
		if ($one_compulsory_obj_non_valid == 0) {
			echo ' '._("Si vous décidez d'achever le programme éducatif, cliquez sur &laquo;&nbsp;Terminer le programme éducatif&nbsp;&raquo;. Une évaluation du maintien des compétences sera alors à réaliser dans 6 mois.");
		}
?>
</p>
<?php
	}
	else {
		$messages['advice'][] = _("Tous les objectifs éducatifs sont validés. Votre patient semble posséder les connaissances et savoir-faire nécessaires pour gérer sa maladie au quotidien. Vous pouvez cliquer sur &laquo;&nbsp;Terminer le programme éducatif&nbsp;&raquo;.");
		$messages['advice'][] = _("Noubliez pas de féliciter l'enfant et de prévoir une séance d'évaluation du maintien des compétences dans 6 mois.");
	}
}





?>


<table class='table_synthesis'>
	<thead>
		<tr>
			<td class='synthesis_title' colspan = 4><?php echo $title_content; ?></td>
		</tr>
		<tr>
			<td colspan = 2 class = 'synthesis_subtitle'><?php echo _("Objectifs éducatifs"); ?></td>
			<td class = 'synthesis_subtitle'><?php echo _("Validation"); ?></td>
<!--			<td class='synthesis_title_1'><?php echo _("Non acquis"); ?></td>
			<td class='synthesis_title_2'><?php echo _("Partiellement acquis"); ?></td>
			<td class='synthesis_title_3'><?php echo _("Acquis"); ?></td>
-->
<?php
	if (($view_action == 'write' and ($one_compulsory_obj_non_valid == 1 or $one_obj_non_valid == 1 or $one_obj_done == 1)) or $view_action == 'read') {
?>
			<td class = 'synthesis_subtitle'>
				<?php echo _("Planification"); ?>
<?php
	if ($view_action == 'write') {
?>
				<span class = 'note'>(<?php echo _("date au format JJ/MM/AAAA"); ?>)</span>
<?php
	}
?>
			</td>
<?php
	}
?>
		</tr>
	</thead>
	<tbody>
<?php

/*
echo '<pre>';
print_r ($list_group_questions);
echo '</pre>';
/**/

foreach ($list_question_obj as $id_target => $features_question_obj) {
	
	$line = '';
	$beginning_line = '';
	$nb_line = 0;
	$nb_points = 0;

	$css_item = '';//'synthesis_item';
	if ($features_question_obj['target_security'] == 1)
		$css_item = 'synthesis_security_item';

	
	foreach ($features_question_obj['value_question'] as $nb_subquestion => $value_question) {
		$line .= $beginning_line;
		
		if (is_string ($nb_subquestion)) {
			$line .= '			<td class = \''.$css_item.'\'>'.$id_target.'&nbsp;'.$nb_subquestion.'</td>'."\n";
			$id_group_questions = $id_target.'_'.$nb_subquestion;
		}
		else {
			$line .= '			<td class = \''.$css_item.'\'></td>'."\n";
			$id_group_questions = $id_target;
		}

		foreach ($list_group_questions[$id_group_questions]['validation_items'] as $title_item => $value_item) {

			$css_cell = 'synthesis_cell';
			
			if ($value_question == $value_item) {
				$nb_points += $value_item;
/*				switch ($title_item) {
					case 'valid' :
						$css_cell = 'synthesis_valid_cell';
						break;
					case 'partially_valid' :
						$css_cell = 'synthesis_partially_valid_cell';
						break;
					case 'non_valid' :
					$css_cell = 'synthesis_non_valid_cell';
						break;
				}*/
				
				$line .= '			<td class = \'synthesis_validation\'><img src = \''.IMAGE_PATH.'icon_'.$title_item.'.png\' alt = \''.$title_item.'\' width = 25px /></td>'."\n";
			}	
		}

		$nb_line ++;
		
		if (($view_action == 'write' and ($one_compulsory_obj_non_valid == 1 or $one_obj_non_valid == 1 or $one_obj_done == 1)) or $view_action == 'read') {
		
			if ($nb_line == 1) {
				if (isset ($targets_cycle['date_target_'.$id_target]))
					$target_date = $targets_cycle['date_target_'.$id_target];
				elseif (isset ($list_cycle_target[$id_target]['cycle_target_date']))
					$target_date = showDate ($list_cycle_target[$id_target]['cycle_target_date'], 'day');
				else
					$target_date = '';
					
				if (isset ($targets_cycle['confirm_target_'.$id_target]) or isset ($list_cycle_target[$id_target]) or $features_question_obj['to_work'] > 0)
					$checked = 'checked';
				else
					$checked = '';
				
				$line .= '			<td rowspan = '.count($features_question_obj['value_question']).'>'."\n";

				if ($view_action == 'read') {
					if (!empty ($target_date)) {
	//					if (calculateAge($list_cycle_target[$id_target]['cycle_target_date']) > 0)
						if ($list_cycle_target[$id_target]['cycle_target_done'] == 0)
							$line .= _("prévu le").' '.$target_date;
						else
							$line .= _("fait le").' '.$target_date;
					}
					elseif (array_key_exists($id_target, $list_cycle_target)) {
						$line .= ("non fait (pas de date prévue)");
					}
				}
				elseif (isset ($list_cycle_target[$id_target]['cycle_target_date']) and $list_cycle_target[$id_target]['cycle_target_done'] == 1)
					$line .= _("fait le").' '.$target_date
							.'				<input type = \'hidden\' name = \'confirm_target_'.$id_target.'\' value = 1'
							.'				<input type=\'hidden\' name=\'date_target_'.$id_target.'\' value=\''.$target_date.'\' />'."\n";
				
				else
					$line .= '				<input type = checkbox name=\'confirm_target_'.$id_target.'\' id=\'confirm_target_'.$id_target.'\' value=1 '.$checked.'/>'
							.'				<input type=\'text\' name=\'date_target_'.$id_target.'\' id=\'date_target_'.$id_target.'\' value=\''.$target_date.'\' />'."\n";

				$line .= '			</td>';
			}
		}
		
		$line .= '		</tr>'."\n";
		$beginning_line = '		<tr>'."\n";
		
	}
?>

		<tr>
			<td rowspan = <?php echo $nb_line; ?> class = '<?php echo $css_item; ?>'><?php echo $id_target.'/ '.$features_question_obj['target_name']; ?></td>
		<?php echo $line; ?>
<?php
}
?>	
	</tbody>
</table>

<div class = 'control_eval'>
	<div class = 'legend'>
		<p class = 'legend_title'><?php echo _("Légende"); ?> :</p>
		<div>
			<p class = 'legend_image'>
				<img src = '<?php echo IMAGE_PATH; ?>icon_valid.png' alt = 'valid' width = 15px />
			</p>
			<p class = 'legend_text'>
				<?php echo _("validé"); ?>
			</p>
		</div>
		<div>
			<p class = 'legend_image'>
				<img src = '<?php echo IMAGE_PATH; ?>icon_partially_valid.png' alt = 'partially valid' width = 15px />
			</p>
			<p class = 'legend_text'>
				<?php echo _("partiellement validé"); ?>
			</p>
		</div>
		<div>
			<p class = 'legend_image'>
				<img src = '<?php echo IMAGE_PATH; ?>icon_non_valid.png' alt = 'non valid' width = 15px />
			</p>
			<p class = 'legend_text'>
				<?php echo _("non validé"); ?>
			</p>
		</div>
		<div>
			<p class = 'legend_image'>
				<span class = 'legend_security_item'></span>
			</p>
			<p class = 'legend_text'>
				<?php echo _("objectif de sécurité (à valider obligatoirement)"); ?>
			</p>
		</div>
	</div>

	<p class = 'control_eval_title'>
		<?php echo _("Évaluation du contrôle de l'asthme"); ?>
	</p>
	<div>
		<p class = 'control_eval_label'>
			<?php echo _("Évaluation subjective par l'enfant"); ?>
		</p>
		<p class = 'control_eval_text'>
			<?php echo $eval_subj_patient; ?>
		</p>
	</div>
	<div>
		<p class = 'control_eval_label'>
			<?php echo _("Évaluation subjective par les parents"); ?>
		</p>
		<p class = 'control_eval_text'>
			<?php echo $eval_subj_parent; ?>
		</p>
	</div>
	<div>
		<p class = 'control_eval_label'>
			<?php echo _("Évaluation objective par le cACT"); ?>
		</p>
		<p class = 'control_eval_text'>
			<?php echo $eval_cact; ?>
		</p>
	</div>
</div>


<?php
if ($_GET['type_eval'] == 'cycle_educ_eval') {
?>
<p>
<?php
	if ($nb_parent_eval == 1) {
?>
	<a href = '.?module=patient_teaching&action=show_parent_eval&id_parent_eval=<?php echo $id_parent_eval; ?>'><?php echo _("Voir l'évaluation des parents"); ?></a>
<?php
	}
	else {
		if($view_action == 'write') {
			echo _("Vous pouvez retranscrire");
?>
	<a href='.?module=patient_teaching&action=create_parent_eval' class = 'link'><?php echo _("l'auto-évaluation des parents"); ?></a>
<?php
			echo _("si vous le souhaitez");
		}
		else {
			echo _("Aucune évaluation des parents enregistrée");
		}
	}
?>
</p>
<?php
}


if ($_GET['type_eval'] == 'cycle_educ_eval' and $view_action == 'write') {
?>
<p>
	<?php echo _("Le cycle éducatif est achevé. Il est temps de rédiger le"); ?>
	<a href = '.?module=patient_management&action=create_summary_letter' class = 'link'><?php echo _("courrier de liaison"); ?></a>
	<?php echo _("pour les autres professionnels de santé qui accompagnent l'enfant."); ?>
</p>
<?php
}


/*
if ($view_action == 'write' and $one_compulsory_obj_non_valid == 0 and $one_obj_non_valid == 0) {
?>
<!--
<p class = 'message_advice_title'>
	<?php echo _("Il ne vous reste plus qu'à procéder à votre propre auto-évaluation de vos compétences pour dispenser l'ETP."); ?>
</p>
-->
<?php
}
* */
?>

<p>
<?php

if ($view_action == 'write') {

	if ($one_obj_done == 0) {
		if ($_GET['type_eval'] == 'educ_diag')
			$value_button = _("Réaliser les séances éducatives");
		elseif ($_GET['type_eval'] == 'cycle_educ_eval')
			$value_button = _("Réaliser un renforcement éducatif");
	}
	else
		$value_button = _("Enregistrer les modifications");
	
	if ($one_compulsory_obj_non_valid == 1 or $one_obj_non_valid == 1) {
?>
		<input class = 'button_validation' type='submit' name='valid_targets_to_work' value="<?php echo $value_button; ?>" title = "<?php echo _("Enregistrer la planification des objectifs à travailler"); ?>"/>

<?php
	}
	else {
?>
	<input class = 'button_validation_inactive' type = 'button' title = "<?php echo _("Un renforcement n'est pas justifié"); ?>" value = "<?php echo $value_button; ?>" />
<?php
	}
	
	
	if ($one_compulsory_obj_non_valid == 1 or $one_obj_done == 1) {
		if ($one_compulsory_obj_non_valid == 1)
			$comment = _("Vous ne pouvez pas achever le programme éducatif tant qu'il reste des objectifs de sécurité non validés");
		else
			$comment = _("Vous ne pouvez pas achever le programme éducatif car des objectifs ont déjà été travaillé au cours de ce cycle");
?>
	<input class = 'button_validation_inactive' type = 'button' title = "<?php echo $comment; ?>" value = "<?php echo _("Terminer le programme éducatif"); ?>" />
<?php
	}
	else {
?>
	<input class = 'button_validation' type='submit' name='valid_programme' value="<?php echo _("Terminer le programme éducatif"); ?>"
					title = "<?php echo _("Vous pouvez achever ce programme éducatif si vous jugez que la validation des objectifs est satisfaisante"); ?>"/>
<?php
	}
}
?>
</p>
</form>

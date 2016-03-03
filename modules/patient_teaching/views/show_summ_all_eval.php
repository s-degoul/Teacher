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

$title_view = _("Résumé des évaluations");
$style[] = 'patient_eval';

?>

<p class='return'>
	<a href='?module=patient_management&action=show_profile' class='link'>
		<img src='<?php echo IMAGE_PATH.'return_row.png'; ?>' alt="return" />
		<?php echo _("retour au détail du programme éducatif"); ?>
	</a>
</p>



<div class = 'one_table_eval'>
	<div class = 'table_eval_titles'>
		<table class = 'table_eval'>
			<thead>
				<tr>
					<th colspan = 3>
						<?php echo _("Évaluations"); ?>
					</th>
				</tr>
			</thead>
			<tbody>
<?php
foreach ($list_target as $id_target => $features_target) {
	$nb_line = 0;
	$line = $beginning_line = '';
	
	if ($features_target['target_security'] == 1)
		$css = 'table_eval_title_security';
	else
		$css = 'table_eval_title';
	
	foreach ($list_group_questions as $id_question => $features_question) {
		if (! preg_match('#^[0-9]#', $id_question)) {
			continue;
		}

		$id_question_part = explode ('_', $id_question);
		$num_question = $id_question_part[0];
		$num_subquestion = '';
		if (isset ($id_question_part[1]))
			$num_subquestion = $id_question_part[1];
		
		if ($num_question == $id_target) {
			$nb_line ++;
			$line .= $beginning_line.'<td class = \''.$css.'\'>'.$id_target.$num_subquestion.'</td>';
			$beginning_line = '</tr>'."\n".'<tr>';
		}
	}
?>
				<tr>
					<td rowspan = <?php echo $nb_line; ?> class = '<?php echo $css; ?>'>
						<?php echo $id_target.'/ '.$features_target['target_name']; ?>
					</td>
					<?php echo $line; ?>
				</tr>
<?php
}
?>

				<tr>
					<td colspan = 2 class = 'table_eval_asthma_control'>
						<?php echo _("Contrôle de l'asthme"); ?>
					</td>
				</tr>

<?php
$control_eval_items = array(
							'subj_patient' => _("Évaluation subjective par le patient"),
							'subj_parent' => _("Évaluation subjective par les parents"),
							'cact' => _("Évaluation objective par le cACT")
						);
foreach ($control_eval_items as $control_eval_item) {
?>
				<tr>
					<td colspan = 2 class = 'table_eval_title'>
						<?php echo $control_eval_item; ?>
					</td>
				</tr>
<?php
}
?>
			</tbody>
		</table>
	</div>


	<div class = 'table_eval_values'>
		<table class = 'table_eval'>
			<thead>
				<tr>
<?php
foreach ($list_question_obj as $id_eval => $features_eval) {
?>
					<th class = 'table_eval_type_eval'>
<?php
	if (is_string ($id_eval) and $id_eval == 'educ_diag') {
?>
					<a href='.?module=patient_teaching&action=show_educ_diag' title = '<?php echo _("consulter"); ?>'>
							<?php echo _("Diagnostic éducatif"); ?>
						</a>
<?php
	}
	else {
?>
						<a href='.?module=patient_teaching&action=show_eval&type_eval=cycle_educ_eval&id_cycle_educ=<?php echo $id_eval; ?>' title = '<?php echo _("consulter"); ?>'>
							<?php echo _("Évaluation"); ?>
						</a>
<?php
	}
?>
					</th>
<?php
}
?>				
				</tr>
			</thead>
			<tbody>
<?php
foreach ($list_group_questions as $id_question => $features_question) {
	if (! preg_match('#^[0-9]#', $id_question)) {
		continue;
	}
?>
				<tr>
<?php
	$id_question_part = explode ('_', $id_question);
	$num_question = $id_question_part[0];
	$num_subquestion = null;
	if (isset ($id_question_part[1]))
		$num_subquestion = $id_question_part[1];
		

	foreach ($list_question_obj as $id_eval => $features_eval) {
		foreach ($features_eval as $id_target => $features_answers) {
			if ($id_target == $num_question) {
				foreach ($features_answers['value_question'] as $id_subtarget => $value) {
					if (is_null ($num_subquestion) or $id_subtarget == $num_subquestion) {
						foreach ($features_question['validation_items'] as $title_item => $value_item) {
							if ($value == $value_item) {
?>
					<td class = 'table_eval_value'>
						<img src = '<?php echo IMAGE_PATH.'icon_'.$title_item.'.png'; ?>' alt = '<?php echo $title_item; ?>' width = 25px />
					</td>
<?php
							}
						}
					}
				}
			}
		}
	}

?>
				</tr>
<?php
}
?>

				<tr>
<?php
foreach ($list_question_obj as $i) {
?>
					<td class = 'table_eval_asthma_control'></td>
<?php
}
?>
				</tr>

<?php
foreach ($control_eval_items as $id_item => $control_eval_item) {
?>
				<tr>
<?php
	foreach ($list_question_obj as $id_eval => $features_eval) {
?>
					<td class = 'table_eval_value'>
						<?php echo $features_eval[$id_item]; ?>
					</td>
<?php		
	}
?>
				</tr>
<?php
}
?>
			</tbody>
		</table>
	</div>
</div>


<div>
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
</div>


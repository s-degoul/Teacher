  
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
if ($_GET['type_eval'] == 'educ_diag') {
	$title_view = _("Synthèse du diagnostic éducatif");
	$title_content = _("SYNTHÈSE AVANT ÉDUCATION").' : '._("les 10 objectifs éducatifs");
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
?>

<table class='table_synthesis'>
	<thead>
		<tr>
			<td class='synthesis_title' colspan = 6><?php echo $title_content; ?></td>
		</tr>
		<tr>
			<td class='synthesis_item'></td>
			<td class='synthesis_item'></td>
			<td class='synthesis_title_1'><?php echo _("Non acquis"); ?></td>
			<td class='synthesis_title_2'><?php echo _("Partiellement acquis"); ?></td>
			<td class='synthesis_title_3'><?php echo _("Acquis"); ?></td>
			<td class='synthesis_item'><?php echo _("Planification (date au format JJ/MM/AAAA)"); ?></td>
		</tr>
	</thead>
	<tbody>
<?php

foreach ($list_question_obj as $id_target => $features_question_obj) {
	
	$line = '';
	$beginning_line = '';
	$nb_line = 0;
	$nb_points = 0;

	$css_item = 'synthesis_item';
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

		foreach ($list_group_questions[$id_group_questions]['items_validation'] as $title_item => $value_item) {

			$title_cell = '';
			if ($value_question == $value_item) {
				$nb_points += $value_item;
				$title_cell = $value_item;
				$css_cell = 'synthesis_checked_cell';
			}
			elseif ($value_item === 'NA')
				$css_cell = 'synthesis_inactive_cell';
			else
				$css_cell = 'synthesis_cell';
				
			$line .= '			<td class = \''.$css_cell.'\'>'.$title_cell.'</td>'."\n";
		}

		$nb_line ++;
		
		if ($nb_line == 1) {
			if (isset ($targets_cycle['date_target_'.$id_target]))
				$target_date = $targets_cycle['date_target_'.$id_target];
			elseif (isset ($list_cycle_target[$id_target]['cycle_target_date']))
				$target_date = showDate ($list_cycle_target[$id_target]['cycle_target_date'], 'day');
			else
				$target_date = '';
				
			if (isset ($targets_cycle['confirm_target_'.$id_target]) or isset ($list_cycle_target[$id_target]) or $features_question_obj['to_work'] == 1)
				$checked = 'checked';
			else
				$checked = '';
			
			$line .= '			<td rowspan = '.count($features_question_obj['value_question']).'>'."\n";

			if ($view_action == 'read') {
				if (!empty ($target_date)) {
					if (calculateAge($list_cycle_target[$id_target]['cycle_target_date']) > 0)
						$line .= _("prévu le").' '.$target_date;
					else
						$line .= _("fait le").' '.$target_date;
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
		
		$line .= '		</tr>'."\n";
		$beginning_line = '		<tr>'."\n";
		
	}

	echo '		<tr>'."\n"
		.'			<td rowspan='.$nb_line.' class = \''.$css_item.'\'>'.$id_target.'/ '.$features_question_obj['target_name'].'</td>'."\n"
		.$line;
}
?>	
	</tbody>
</table>

<p>
<?php

if ($view_action == 'write') {
	echo '	<input class = \'button_validation\' type=\'submit\' name=\'valid_targets_to_work\' value=\''._("Valider cette planification").'\'
				title = "'._("Enregistrer la planification des objectifs à travailler").'"/>';
	
	if ($one_compulsory_obj_non_valid == 1 or $one_obj_done == 1) {
		if ($one_compulsory_obj_non_valid == 1)
			$comment = _("Vous ne pouvez pas achever le programme éducatif tant qu'il reste des objectifs de sécurité non validés");
		else
			$comment = _("Vous ne pouvez pas achever le programme éducatif car des objectifs ont déjà été travaillé au cours de ce cycle");
		echo '	<span class = \'button_validation_inactive\' title = "'.$comment.'">'._("Achever ce programme éducatif").'</span>';
	}
	else {
		echo '	<input class = \'button_validation\' type=\'submit\' name=\'valid_programme\' value=\''._("Achever ce programme éducatif").'\'
					title = "'._("Vous pouvez achever ce programme éducatif si vous jugez que la validation des objectifs est satisfaisante").'"/>';
	}
}
?>
</p>
</form>

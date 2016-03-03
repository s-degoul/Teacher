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

$title_view = _("Synthèse de l'auto-évaluation");
$style[] = 'user_eval';

$content_top .= '<a href = \'.?module=user_teaching&action=show_eval&id_user_eval='.$id_user_eval.'\' class = \'link\'>'._("Voir l'évaluation associée").'</a>'."\n";
?>

<p><?php echo _("Évaluation réalisée le ").showDate($user_eval['user_eval_date']); ?></p>

<table class = 'table_synthesis'>
	<thead>
		<tr>
			<th colspan=2><?php echo _("Questions"); ?></th>
			<th><?php echo _("Scores"); ?></th>
		</tr>
	</thead>
	<tbody>

<?php

foreach ($list_group_questions as $num_group_questions => $features_group_questions) {
?>
		<tr>
			<td rowspan = '<?php echo ($features_group_questions['last_question'] - $features_group_questions['first_question'] +1); ?>'>
				<?php echo $features_group_questions['title_small']; ?>
			</td>
<?php
	$start_line = '';
	for ($num_question = $features_group_questions['first_question']; $num_question <= $features_group_questions['last_question']; $num_question ++) {
		echo $start_line;
?>
			<td><?php echo $list_questions[$num_question]['title_small']; ?></td>
<?php
		$nb_points = 0;
		
		foreach ($list_questions[$num_question]['items'] as $num_item => $title_item) {
			if ($num_item > 0) {
				$id_item = 'user_eval_q'.$num_question.'_'.$num_item;
				
				if ($user_eval[$id_item] == 1 and in_array ($id_item, $list_answers)) {
					$nb_points += 1;
					$nb_all_points += 1;
				}
			}
		}
?>
			<td><?php echo $nb_points.' / '.$list_questions[$num_question]['nb_answers']; ?></td>
		</tr>
<?php
		$start_line = '		<tr>'."\n";
	}
	
}
?>

		<tr class = 'score_tot'>
			<td colspan = 2><?php echo _("Score total"); ?></td>
			<td><?php echo $nb_all_points.' / '.$nb_max_points; ?></td>
		</tr>

	</tbody>
</table>

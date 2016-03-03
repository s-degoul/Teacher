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

$title_view = _("Liste des résultats de vos auto-évaluations");
$style[] = 'user_eval';

?>
<div class = 'one_table_eval'>
	<div class = 'table_eval_titles'>
		<table class = 'table_eval'>
			<thead>
				<tr>
					<th colspan = 2>
						<?php echo _("Auto-évaluations"); ?>
					</th>
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
					<td class = 'table_eval_subtitle'>
						<?php echo $list_questions[$num_question]['title_small'].' ( /'.$list_questions[$num_question]['nb_answers'].' )'; ?>
					</td>
<?php
		$start_line = '		<tr>'."\n";
	}
	
}
?>
				<tr>
					<td colspan = 2 class = 'table_eval_score'><?php echo _("Score").' /'.$nb_max_points; ?></td>
				</tr>
			</tbody>
		</table>
	</div>


	
	<div class = 'table_eval_values'>
		<table class = 'table_eval'>
			<thead>
				<tr>
<?php
foreach ($all_user_eval as $user_eval_date => $features_user_eval) {
	if ($features_user_eval['user_eval_achieved'] != 1)
		continue;
?>
					<th class = 'table_eval_date'>
						<?php echo showDate($user_eval_date, 'day'); ?>
					</th>
<?php
}
?>				
				</tr>
			</thead>
			<tbody>
<?php
foreach ($list_questions as $num_question => $features_question) {
?>
				<tr>
<?php
	foreach ($all_user_eval as $user_eval_date => $features_user_eval) {
		if ($features_user_eval['user_eval_achieved'] != 1)
			continue;
			
		$nb_points = 0;
		if (!isset ($nb_all_points[$user_eval_date]))
			$nb_all_points[$user_eval_date] = 0;

		foreach ($features_question['items'] as $nb_item => $title_item) {
			if ($nb_item > 0) {
				$id_item = 'user_eval_q'.$num_question.'_'.$nb_item;
				
				if ($features_user_eval[$id_item] == 1 and in_array ($id_item, $list_answers)) {
					$nb_points += 1;
					$nb_all_points[$user_eval_date] += 1;
				}
			}
		}
?>
					<td class = 'table_eval_value'>
						<?php echo $nb_points; ?>
					</td>
<?php
	}
?>
				</tr>
<?php
}
?>

				<tr>
<?php
foreach ($nb_all_points as $all_points) {
?>
					<td class = 'table_eval_score'>
						<?php echo $all_points; ?>
					</td>
<?php
}


/*
echo '<pre>';
print_r ($nb_all_points);
echo '</pre>';
/**/
?>
				</tr>
			</tbody>
		</table>
	</div>
</div>

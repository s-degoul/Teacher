  
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
$title_view = _("Liste des résultats de vos auto-évaluations");
$style[] = 'device'; // à changer

?>
<div class = 'one_table_device'>
	<div class = 'table_device_titles'>
		<table class = 'table_device'>
			<thead>
				<tr>
					<th colspan = 2>
						<?php echo _("Auto-évaluations"); ?>
					</th>
				</tr>
			</thead>
			<tbody>
<?php
foreach ($group_questions as $nb_group_questions => $features_group_questions) {
	echo '		<tr>'."\n";
	echo '			<td rowspan = \''.($features_group_questions['last_question'] - $features_group_questions['first_question'] +1).'\'>'
						.$features_group_questions['title_small'].'</td>'."\n";
	
	$start_line = '';
	for ($nb_question = $features_group_questions['first_question']; $nb_question <= $features_group_questions['last_question']; $nb_question ++) {
		echo $start_line;
		echo '			<td>'.$list_questions[$nb_question]['title_small'].' ( /'.$list_questions[$nb_question]['nb_answers'].' )</td>'."\n";

		$start_line = '		<tr>'."\n";
	}
	
}
?>
				<tr>
					<td colspan = 2><?php echo _("Score").' /'.$nb_max_points; ?></td>
				</tr>
			</tbody>
		</table>
	</div>


	
	<div class = 'table_device_values'>
		<table class = 'table_device'>
			<thead>
				<tr>
<?php
foreach ($all_user_eval as $user_eval_date => $features_user_eval) {
	echo '						<th class = \'table_device_date\'>'
								.showDate($user_eval_date, 'day')
								.'</th>'."\n";
}
?>				
				</tr>
			</thead>
			<tbody>
<?php
foreach ($list_questions as $nb_question => $features_question) {
	echo '					<tr>'."\n";
	
	foreach ($all_user_eval as $user_eval_date => $features_user_eval) {
		$nb_points = 0;
		if (!isset ($nb_all_points[$user_eval_date]))
			$nb_all_points[$user_eval_date] = 0;

		foreach ($features_question['items'] as $nb_item => $title_item) {
			if ($nb_item > 0) {
				$id_item = 'user_eval_q'.$nb_question.'_'.$nb_item;
				
				if ($features_user_eval[$id_item] == 1 and in_array ($id_item, $list_answers)) {
					$nb_points += 1;
					$nb_all_points[$user_eval_date] += 1;
				}
			}
		}
		
		echo '					<td class = \'table_device_value\'>'.$nb_points.'</td>'."\n";
	}
	
	echo '					</tr>'."\n";
}
?>

				<tr>
<?php
foreach ($nb_all_points as $all_points) {
	echo '					<td class = \'table_device_value\'><strong>'.$all_points.'</strong></td>'."\n";
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

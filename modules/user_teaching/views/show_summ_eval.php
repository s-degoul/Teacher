  
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
$title_view = _("Synthèse de l'auto-évaluation");
$style[] = 'user_eval';

$content_top .= '<a href = \'.?module=user_teaching&action=show_eval&id_user_eval='.$id_user_eval.'\'>'._("Voir l'évaluation associée").'</a>'."\n";
?>

<table class = 'table_synthesis'>
	<thead>
		<tr>
			<th colspan=2><?php echo _("questions"); ?></th>
			<th><?php echo _("scores"); ?></th>
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
		echo '			<td>'.$list_questions[$nb_question]['title_small'].'</td>'."\n";
		
		$nb_points = 0;
		
		foreach ($list_questions[$nb_question]['items'] as $nb_item => $title_item) {
			if ($nb_item > 0) {
				$id_item = 'user_eval_q'.$nb_question.'_'.$nb_item;
				
				if ($user_eval[$id_item] == 1 and in_array ($id_item, $list_answers)) {
					$nb_points += 1;
					$nb_all_points += 1;
				}
			}
		}
		echo '			<td>'.$nb_points.' / '.$list_questions[$nb_question]['nb_answers'].'</td>'."\n";
		echo '		</tr>'."\n";
		
		$start_line = '		<tr>'."\n";
	}
	
}
?>

		<tr>
			<td colspan = 2><?php echo _("Score total"); ?></td>
			<td><?php echo $nb_all_points.' / '.$nb_max_points; ?></td>
		</tr>

	</tbody>
</table>

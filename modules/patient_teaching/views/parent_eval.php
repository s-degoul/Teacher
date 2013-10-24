  
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
$title_view = _("Évaluer vos connaissances et compétences en 25 questions");

$style[] = 'parent_eval';
?>

<form method = 'post' action = '.?module=patient_teaching&action=create_parent_eval'>

	<table class = 'table_parent_eval'>
		<thead>
			<tr>
				<td rowspan = 2><?php echo _("Vos connaissances"); ?></td>
				<td colspan = 2><?php echo _("Ma réponse"); ?></td>
				<td></td>
				<td colspan = 3><?php echo _("Je suis"); ?></td>
			</tr>
			<tr>
				<td class = 'parent_knowledge_2_items'><?php echo _("Vrai"); ?></td>
				<td class = 'parent_knowledge_2_items'><?php echo _("Faux"); ?></td>
				<td></td>
				<td class = 'parent_knowledge_3_items'><?php echo _("Pas du tout sûr"); ?></td>
				<td class = 'parent_knowledge_3_items'><?php echo _("Moyennement sûr"); ?></td>
				<td class = 'parent_knowledge_3_items'><?php echo _("Tout à fait sûr"); ?></td>
			</tr>
		</thead>
		<tbody>
			
<?php
foreach ($list_questions_parent_eval['knowledge'] as $nb_question => $features_question) {
	echo '			<tr>'."\n";
	echo '				<td class= \'parent_eval_text\'>'.$nb_question.'/ '.$features_question['title'].'</td>'."\n";
	
	$id_answer_item = 'q'.$nb_question.'_answer';
	$id_belief_item = 'q'.$nb_question.'_belief';
	
	for ($value_answer_item = 1; $value_answer_item >= 0; $value_answer_item --) {
		$checked = '';
		
		echo '				<td class = \'parent_eval_cell\'><input type = \'radio\' name = \''.$id_answer_item.'\' value = \''.$value_answer_item.'\' '.$checked.'></td>'."\n";
	}
?>

			<td class = 'parent_eval_cell_separation'></td>

<?php	
	for ($value_belief_item = 0; $value_belief_item <= 2; $value_belief_item ++) {
		$checked = '';
		
		echo '				<td class = \'parent_eval_cell\'><input type = \'radio\' name = \''.$id_belief_item.'\' value = \''.$value_belief_item.'\' '.$checked.'></td>'."\n";
	}

	echo '			</tr>'."\n";
}
?>
		</tbody>
	</table>


	<table class = 'table_parent_eval'>
		<thead>
			<tr>
				<td><?php echo _("Vos compétences"); ?></td>
				<td class = 'parent_skill_items'><?php echo _("Je suis d'accord et je le fais"); ?></td>
				<td class = 'parent_skill_items'><?php echo _("Je suis d'accord et je ne le fais pas"); ?></td>
				<td class = 'parent_skill_items'><?php echo _("Je ne suis pas d'accord"); ?></td>
			</tr>
		</thead>
		<tbody>

<?php
foreach ($list_questions_parent_eval['skill'] as $nb_question => $features_question) {
	echo '			<tr>'."\n";
	echo '				<td class = \'parent_eval_text\'>'.$nb_question.'/ '.$features_question['title'].'</td>'."\n";
	
	$id_item = 'q'.$nb_question;
	
	for ($value_item = 0; $value_item <= 2; $value_item ++) {
		$checked = '';
		
		echo '				<td class = \'parent_eval_cell\'><input type = \'radio\' name = \''.$id_item.'\' value = \''.$value_item.'\' '.$checked.'></td>'."\n";
	}

	echo '			</tr>'."\n";
}
?>
		</tbody>
	</table>
	
	<input type = 'submit' name = 'valid_parent_eval' value = '<?php echo _("Valider"); ?>' />
	<input type = 'reset' name = 'reset_parent_eval' value = '<?php echo _("Remettre à zéro"); ?>' />
</form>



<table class = 'table_parent_eval'>
	<thead>
		<tr>
			<td colspan = 3><?php echo _("Réponses aux connaissances"); ?></td>
		</tr>
	</thead>
	<tbody>

<?php

foreach ($list_questions_parent_eval['knowledge'] as $nb_question => $features_question) {
	echo '		<tr>'."\n";
	echo '			<td class = \'parent_eval_text\'>'.$nb_question.'</td>'."\n";
	
	echo '			<td class = \'parent_eval_text\'>';
	echo $features_question['answer'] == 1 ? _("Vrai") : _("Faux");
	echo '			</td>'."\n";
	
	echo '			<td class = \'parent_eval_text\'>'.$features_question['explanation'].'</td>'."\n";
	echo '		</tr>'."\n";
}
?>

	</tbody>
</table>


<table class = 'table_parent_eval'>
	<thead>
		<tr>
			<td colspan = 3><?php echo _("Réponses aux compétences"); ?></td>
		</tr>
	</thead>
	<tbody>

<?php

foreach ($list_questions_parent_eval['skill'] as $nb_question => $features_question) {
	echo '		<tr>'."\n";
	echo '			<td class = \'parent_eval_text\'>'.$nb_question.'</td>'."\n";
	
	echo '			<td class = \'parent_eval_text\'>'.$features_question['explanation'].'</td>'."\n";
	echo '		</tr>'."\n";
}
?>

	</tbody>
</table>

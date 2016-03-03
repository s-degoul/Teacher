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

$title_view = _("Évaluation des techniques de prise de médicaments inhalés");
$style[] = 'device';



if (isset ($_SESSION['patient'])) {
?>
<form method = 'post' action = '.?module=patient_teaching&action=create_device_eval&from=<?php echo $from_page; ?>'>
<?php
}
?>

	<table class = 'table_device'>
		<thead>
			<tr>
				<td class = 'table_device_main_title'>
					<?php echo $list_devices[$device]['title']; ?>
				</td>
<?php
if (isset ($device_eval['device_'.$device.'_date']))
	$value_date = $device_eval['device_'.$device.'_date'];
elseif ($from_page == 'target_5' or $from_page == 'create_educ_diag')
	$value_date = date('d/m/Y');
else
	$value_date = '';
?>
				<td colspan = 2>
					<label for = '<?php echo 'device_'.$device.'_date'; ?>'>* <?php echo _("Date"); ?> <span class = 'date_detail'>(<?php echo _("format JJ/MM/AAAA"); ?>)</span></label>
					<input type = 'text' name = '<?php echo 'device_'.$device.'_date'; ?>' id = '<?php echo 'device_'.$device.'_date'; ?>' value = '<?php echo $value_date; ?>' size = 10/>
				</td>
			</tr>
			<tr>
				<th><?php echo _("Étapes"); ?></th>
				<th><?php echo _("acquis"); ?></th>
				<th><?php echo _("non acquis"); ?></th>

			</tr>
		</thead>
		<tbody>
<?php
foreach ($list_devices[$device]['questions'] as $nb_question => $title_question) {
	if ($nb_question % 2 == 0)
		$css_line = 'table_device_even_line';
	else
		$css_line = 'table_device_odd_line';
		
	$checked_yes = $checked_no = '';
	if (isset ($device_eval['device_'.$device.'_q'.$nb_question])) {
		if ($device_eval['device_'.$device.'_q'.$nb_question] == 1)
			$checked_yes = 'checked';
		else
			$checked_no = 'checked';
	}
?>
			<tr class = '<?php echo $css_line?>'>
				<td><?php echo $title_question; ?></td>
				<td class = 'table_device_cell_radio'><input type = 'radio' name = '<?php echo 'device_'.$device.'_q'.$nb_question; ?>' value = 1 <?php echo $checked_yes; ?> /></td>
				<td class = 'table_device_cell_radio'><input type = 'radio' name = '<?php echo 'device_'.$device.'_q'.$nb_question; ?>' value = 0 <?php echo $checked_no; ?> /></td>
			</tr>
<?php
}

?>
		
		</tbody>
	</table>

<?php
if (isset ($_SESSION['patient'])) {
?>
	<input type = 'hidden' name = 'device' value = '<?php echo $device; ?>' />
	<input type = 'submit' name = 'valid_eval_quit' value = '<?php echo _("enregistrer et quitter"); ?>' class = 'button_validation' />
<?php
	if ($from_page != 'create_educ_diag') {
?>
	<input type = 'submit' name = 'valid_eval_add' value = '<?php echo _("ajouter une autre évaluation"); ?>' class = 'button_validation' />
<?php
	}
?>
	<input type = 'reset' name = 'reset_form' value = '<?php echo _("remettre à zéro"); ?>' class = 'button_cancel'/>
</form>
<?php
}
?>

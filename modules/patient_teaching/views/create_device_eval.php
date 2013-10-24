  
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
$title_view = _("Évaluation des techniques de prise de médicaments inhalés");
$style[] = 'device';

if (isset ($_SESSION['patient']))
	echo '<form method = \'post\' action = \'.?module=patient_teaching&action=create_device_eval&from='.$from_page.'\'>'."\n";

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
elseif ($from_page == 'target_5')
	$value_date = date('d/m/Y');
else
	$value_date = '';
?>
				<td colspan = 2>
<?php
	echo '<label for = \'device_'.$device.'_date\'>'._("Date").'</label>
		<input type = \'text\' name = \'device_'.$device.'_date\' id = \'device_'.$device.'_date\' value = \''.$value_date.'\' />';
?>
				</td>
			</tr>
			<tr>
				<th><?php echo _("Acquis"); ?></th>
				<th><?php echo _("oui"); ?></th>
				<th><?php echo _("non"); ?></th>

			</tr>
		</thead>
		<tbody>
<?php
foreach ($list_devices[$device]['questions'] as $nb_question => $title_question) {
	$checked_yes = $checked_no = '';
	if (isset ($device_eval['device_'.$device.'_q'.$nb_question])) {
		if ($device_eval['device_'.$device.'_q'.$nb_question] == 1)
			$checked_yes = 'checked';
		else
			$checked_no = 'checked';
	}
	
	echo '			<tr>'."\n"
		.'				<td>'.$title_question.'</td>'."\n";
		

	echo '				<td class = \'table_device_cell_radio\'><input type = \'radio\' name = \'device_'.$device.'_q'.$nb_question.'\' value = 1 '.$checked_yes.'/></td>'."\n"
		.'				<td class = \'table_device_cell_radio\'><input type = \'radio\' name = \'device_'.$device.'_q'.$nb_question.'\' value = 0 '.$checked_no.'/></td>'."\n";

		
	echo '			</tr>'."\n";
}

?>
		
		</tbody>
	</table>

<?php
if (isset ($_SESSION['patient'])) {
	echo '	<input type = \'hidden\' name = \'device\' value = \''.$device.'\' />'."\n";
	echo '	<input type = \'submit\' name = \'valid_eval_quit\' value = \''._("enregistrer et quitter").'\' />'."\n";
	echo '	<input type = \'submit\' name = \'valid_eval_add\' value = \''._("ajouter une autre évaluation").'\' />'."\n";
	echo '</form>'."\n";
}
?>

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

$title_view = _("Évaluation de la technique d'utilisation du débit expiratoire de pointe");
$style[] = 'peakflow_use';

if (isset ($_SESSION['patient']))
	echo '<form method = \'post\' action = \'.?module=patient_teaching&action=create_peakflow_use&from='.$from_page.'\'>'."\n";

?>

<table class = 'table_peakflow_use'>
	<thead>
		<tr>
			<td class = 'table_peakflow_use_main_title'>
				<?php echo _("Grille d'évaluation (DEP)"); ?>
			</td>
<?php
if (isset ($peakflow_use['peakflow_use_date']))
	$value_date = $peakflow_use['peakflow_use_date'];
elseif ($from_page == 'target_6')
	$value_date = date('d/m/Y');
else
	$value_date = '';
?>
			<td colspan = 2>
				<label for = 'peakflow_use_date'>* <?php echo _("Date"); ?> <span class = 'date_detail'>(<?php echo _("format JJ/MM/AAAA"); ?>)</span></label>
				<input type = 'text' name = 'peakflow_use_date' id = 'peakflow_use_date' value = '<?php echo $value_date; ?>' />
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

foreach ($list_questions_peakflow as $nb_question => $title_question) {
	if ($nb_question % 2 == 0)
		$css_line = 'table_peakflow_use_even_line';
	else
		$css_line = 'table_peakflow_use_odd_line';

	$checked_yes = $checked_no = '';
	if (isset ($peakflow_use['peakflow_use_q'.$nb_question])) {
		if ($peakflow_use['peakflow_use_q'.$nb_question] == 1)
			$checked_yes = 'checked';
		else
			$checked_no = 'checked';
	}
?>		
		<tr class = '<?php echo $css_line?>'>
			<td class = 'table_peakflow_use_cell_title'><label for = '<?php echo 'peakflow_use_q'.$nb_question; ?>'><?php echo $title_question; ?></label></td>
			<td class = 'table_peakflow_use_cell_radio'><input type = 'radio' name = '<?php echo 'peakflow_use_q'.$nb_question; ?>' id = '<?php echo 'peakflow_use_q'.$nb_question; ?>' value = 1 <?php echo $checked_yes; ?> /></td>
			<td class = 'table_peakflow_use_cell_radio'><input type = 'radio' name = '<?php echo 'peakflow_use_q'.$nb_question; ?>' id = '<?php echo 'peakflow_use_q'.$nb_question; ?>' value = 0 <?php echo $checked_no; ?> /></td>
		</tr>
<?php
}
?>
	</tbody>
</table>


<?php
if (isset ($_SESSION['patient'])) {
?>
	<input type = 'submit' name = 'valid_eval_quit' value = '<?php echo _("enregistrer et quitter"); ?>' class = 'button_validation' />
	<input type = 'submit' name = 'valid_eval_add' value = '<?php echo _("ajouter une autre évaluation"); ?>' class = 'button_validation' />
	<input type = 'reset' name = 'reset_form' value = '<?php echo _("remettre à zéro"); ?>' class = 'button_cancel'/>
</form>

<p class = 'return'>
	<a href='.?module=patient_teaching&action=show_peakflow_use' class = 'link'>
		<img src='<?php echo IMAGE_PATH.'return_row.png'; ?>' alt="return" />
		<?php echo _("revenir à la synthèse des évaluations"); ?>
	</a>
</p>
<?php
}
?>

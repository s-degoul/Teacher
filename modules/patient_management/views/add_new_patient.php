  
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
$title_view = 'Enregistrer un nouveau patient';

?>

<h1>Inscrire un nouveau patient</h1>
<form method='post' action=''>
	<p><label for='patient_surname'><?php echo _('Nom'); ?> : </label>
		<input type='text' name='patient_surname' id='patient_surname' value='<?php echo $patient['patient_surname']; ?>' /></p>
	<p><label for='patient_firstname'><?php echo _('Prénom'); ?> : </label>
		<input type='text' name='patient_firstname' id='patient_firstname' value='<?php echo $patient['patient_firstname']; ?>' /></p>
	<p><label for='patient_date_birth'><?php echo _('Date de naissance (format JJ/MM/AAAA)'); ?> : </label>
		<input type='text' name='patient_date_birth' id='patient_date_birth' value='<?php echo showDate ($patient['patient_date_birth']); ?>' /></p>
	<p><label for='patient_sex'><?php echo _('Sexe') ?> : </label>
		<select name='patient_sex' id='patient_sex'>
<?php
	$list_sex = array (
			-1 => '&nbsp;',
			0 => 'garçon',
			1 => 'fille'
		);
	foreach ($list_sex as $value_sex => $title_sex) {
		if ($patient['patient_sex'] == $value_sex)
			$selected = 'selected';
		else
			$selected = '';

		echo '				<option value=\''.$value_sex.'\' '.$selected.'>'.$title_sex.'</option>'."\n";
	}
?>
		</select>
	</p>
	<p><input type=submit name='valid_add_patient' value='valider'/></p>
</form>

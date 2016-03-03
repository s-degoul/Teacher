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

$title_view = _("Enregistrer un nouveau patient");

?>

<p>
	<?php echo _("Les champs marqués d'une étoile sont obligatoires"); ?>
</p>

<form method='post' action=''>
	<div>
		<p class = 'add_patient_title'>
			<label for='patient_surname'>* <?php echo _("Nom"); ?> : </label>
		</p>
		<p class = 'add_patient_field'>
			<input type='text' name='patient_surname' id='patient_surname' value='<?php echo $patient['patient_surname']; ?>' />
		</p>
	</div>
	<div>
		<p class = 'add_patient_title'>
			<label for='patient_firstname'>* <?php echo _("Prénom"); ?> : </label>
		</p>
		<p class = 'add_patient_field'>
			<input type='text' name='patient_firstname' id='patient_firstname' value='<?php echo $patient['patient_firstname']; ?>' />
		</p>
	</div>
	<div>
		<p class = 'add_patient_title'>
			<label for='patient_date_birth'>* <?php echo _("Date de naissance"); ?> : </label>
		</p>
		<p class = 'add_patient_field'>
			<input type='text' name='patient_date_birth' id='patient_date_birth' value='<?php echo showDate ($patient['patient_date_birth']); ?>' />
			<?php echo _("(format JJ/MM/AAAA)"); ?>
		</p>
	</div>
	<div>
		<p class = 'add_patient_title'>
			<label for='patient_sex'>* <?php echo _("Sexe") ?> : </label>
		</p>
		<p class = 'add_patient_field'>
			<select name='patient_sex' id='patient_sex'>
<?php
	$list_sex = array (
			-1 => '&nbsp;',
			0 => _("fille"),
			1 => _("garçon")
		);
	foreach ($list_sex as $value_sex => $title_sex) {
		if ($patient['patient_sex'] == $value_sex)
			$selected = 'selected';
		else
			$selected = '';
?>
				<option value='<?php echo $value_sex; ?>' <?php echo $selected; ?>>
					<?php echo $title_sex; ?>
				</option>
<?php
	}
?>
			</select>
		</p>
	</div>

	
	<div>
		<p class = 'add_patient_title'>
			<label for='patient_height'><?php echo _("Taille"); ?> : </label>
		</p>
		<p class = 'add_patient_field'>
			<input type='text' name='patient_height' id='patient_height' value='<?php echo $patient['patient_height']; ?>' size=3 />
			<?php echo _("cm"); ?>
		</p>
	</div>
	<div>
		<p class = 'add_patient_title'>
			<label for='patient_weight'><?php echo _("Poids"); ?> : </label>
		</p>
		<p class = 'add_patient_field'>
			<input type='text' name='patient_weight' id='patient_weight' value='<?php echo $patient['patient_weight']; ?>' size=3 />
			<?php echo _("kg"); ?>
		</p>
	</div>
	<div>
		<p class = 'add_patient_title'>
			<label for='patient_peakflow'><?php echo _("Débit expiratoire de pointe (DEP)"); ?> : </label>
		</p>
		<p class = 'add_patient_field'>
			<input type='text' name='patient_peakflow' id='patient_peakflow' value='<?php echo $patient['patient_peakflow']; ?>' size=3 />
			<?php echo _("L/min"); ?>
		</p>
	</div>
	
	
	<p class = 'add_patient_validation'>
		<input type = 'submit' name = 'valid_add_patient' value = '<?php echo _("valider"); ?>' class = 'button_validation' />
		<input type = 'submit' name = 'cancel_add_patient' value = '<?php echo _("annuler"); ?>' class = 'button_cancel' />
	</p>
</form>

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

$title_view = _("Profil de").' '.$patient['patient_firstname'].' '.strtoupper($patient['patient_surname']);
$style[] = 'patient_profile';
$style[] = 'patient_teaching';
?>


<div class='patient_profile'>
	<form method='post' action='.?module=patient_management&action=modify_profile'>
	<div class='patient_profile_side'>
		<h3><?php echo _("Identité"); ?></h3>
		<div>
			<p class = 'patient_profile_title'>
				<label for='patient_surname'><?php echo _("Nom"); ?> : </label>
			</p>
			<p class = 'patient_profile_field'>
				<input type='text' name='patient_surname' id='patient_surname'
					value = "<?php echo $patient['patient_surname']; ?>" />
			</p>
		</div>
		<div>
			<p class = 'patient_profile_title'>
				<label for='patient_firstname'><?php echo _("Prénom"); ?> : </label>
			</p>
			<p class = 'patient_profile_field'>
				<input type='text' name='patient_firstname' id='patient_firstname'
					value = "<?php echo $patient['patient_firstname']; ?>" />
			</p>
		</div>
		<div>
			<p class = 'patient_profile_title'>
				<label for='patient_sex'><?php echo _("Sexe"); ?> : </label>
			</p>
			<p class = 'patient_profile_field'>
				<select name='patient_sex' id='patient_sex'>
<?php

	$list_sex = array (
			0 => _("fille"),
			1 => _("garçon")
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
		</div>
		<div>
			<p class = 'patient_profile_title'>
				<label for='patient_date_birth'><?php echo _("Date de naissance (format JJ/MM/AAAA)"); ?> : </label>
			</p>
			<p class = 'patient_profile_field'>
				<input type='text' name='patient_date_birth' id='patient_date_birth'
					value = "<?php echo showDate ($patient['patient_date_birth']); ?>" />
			</p>
		</div>
	</div>
	
	
	<div class='patient_profile_side'>
		<h3><?php echo _("Données physiologiques"); ?></h3>
		<div>
			<p class = 'patient_profile_title'>
				<label for='patient_height'><?php echo _("Taille"); ?> : </label>
			</p>
			<p class = 'patient_profile_field'>
				<input type='text' name='patient_height' id='patient_height'
					value = "<?php echo $patient['patient_height']; ?>" size=3 /> <?php echo _("cm"); ?>
			</p>
		</div>
		<div>
			<p class = 'patient_profile_title'>
				<label for='patient_weight'><?php echo _("Poids"); ?> : </label>
			</p>
			<p class = 'patient_profile_field'>
				<input type='text' name='patient_weight' id='patient_weight'
					value = "<?php echo $patient['patient_weight']; ?>" size=3 /> <?php echo _("kg"); ?>
			</p>
		</div>
		<div>
			<p class = 'patient_profile_title'>
				<label for='patient_peakflow'><?php echo _("Débit expiratoire de pointe (DEP)"); ?> : </label>
			</p>
			<p class = 'patient_profile_field'>
				<input type='text' name='patient_peakflow' id='patient_peakflow'
					value = "<?php echo $patient['patient_peakflow']; ?>" size=3 /> <?php echo _("L/min"); ?>
			</p>
		</div>
	</div>

	<input type='submit' name='valid_modif_profile' value = "<?php echo _("Valider"); ?>" title = "<?php echo _("enregistrer les modifications"); ?>" class = 'button_validation' />
	<input type='submit' name='cancel_modif_profile' value = "<?php echo _("Annuler les modifications"); ?>" title = "<?php echo _("revenir au profil sans enregistrer"); ?>" class = 'button_cancel' />
	</form>
</div>


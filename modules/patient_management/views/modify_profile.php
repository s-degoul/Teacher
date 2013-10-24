  
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
$title_view = 'Ce patient';
$style[] = 'patient_profile';
$style[] = 'patient_teaching';
?>

<h1><?php echo strtoupper($patient['patient_surname']).' '.$patient['patient_firstname']; ?></h1>

<div class='patient_profile'>
	<form method='post' action='.?module=patient_management&action=modify_profile'>
	<div class='patient_profile_side'>
		<h3>Identité</h3>
		<ul>
			<li>
				<label for='patient_surname'>Nom : </label>
				<input type='text' name='patient_surname' id='patient_surname'
					value = "<?php echo $patient['patient_surname']; ?>" />
			</li>
			<li>
				<label for='patient_firstname'>Prénom : </label>
				<input type='text' name='patient_firstname' id='patient_firstname'
					value = "<?php echo $patient['patient_firstname']; ?>" />
			</li>
			<li>
				<label for='patient_sex'>Sexe : </label>
				<select name='patient_sex' id='patient_sex'>
<?php

	$list_sex = array (
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
			</li>
			<li>
				<label for='patient_date_birth'>Date de naissance (format JJ/MM/AAAA) : </label>
				<input type='text' name='patient_date_birth' id='patient_date_birth'
					value = "<?php echo showDate ($patient['patient_date_birth']); ?>" />
			</li>
		</ul>
	</div>
	<div class='patient_profile_side'>
		<h3>Données physiologiques</h3>
		<ul>
			<li>
				<label for='patient_height'>Taille : </label>
				<input type='text' name='patient_height' id='patient_height'
					value = "<?php echo $patient['patient_height']; ?>" /> cm
			</li>
			<li>
				<label for='patient_weight'>Poids : </label>
				<input type='text' name='patient_weight' id='patient_weight'
					value = "<?php echo $patient['patient_weight']; ?>" /> kg
			</li>
			<li>
				<label for='patient_peakflow'>Débit expiratoire de pointe (DEP) : </label>
				<input type='text' name='patient_peakflow' id='patient_peakflow'
					value = "<?php echo $patient['patient_peakflow']; ?>" /> L/min
			</li>

		</ul>
	</div>

	<input type='submit' name='valid_modif_profile' value='Valider' />
	</form>
</div>


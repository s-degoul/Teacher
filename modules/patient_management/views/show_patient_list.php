  
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
$title_view = 'Mes patients';
$style[] = 'patient_list';
?>

<h1>Mes patients</h1>

<a href='.?module=patient_management&action=add_new_patient'>Ajouter un nouveau patient</a>

<table class='patient_list'>
	<thead>
		<tr>
			<th><?php echo _("Nom"); ?> / ID ?</th>
			<th><?php echo _("Prénom"); ?></th>
			<th><?php echo _("Âge"); ?></th>
			<th><?php echo _("Sexe"); ?></th>
			<th><?php echo _("Avancement"); ?></th>
		</tr>
	</thead>
	<tbody>
<?php

foreach ($list_patient as $key => $features_patient) {
	echo'		<tr>';
	echo'			<td><a href=\'.?module=patient_management&action=show_profile&id_patient='.$features_patient['id_patient']
					.'\'>'.strtoupper($features_patient['patient_surname']).'</a></td>'."\n";
	echo'			<td>'.$features_patient['patient_firstname'].'</td>'."\n";
	
	$patient_age = calculateAge ($features_patient['patient_date_birth'], 'month');
	echo'			<td>'.sprintf (ngettext('%d an','%d ans',$patient_age['year']),$patient_age['year'])
						.' '.sprintf (ngettext('%d mois','%d mois',$patient_age['month']),$patient_age['month']).'</td>'."\n";

	$sex_title = '';
	if ($features_patient['patient_sex'] == 0)
		$sex_title = 'garçon';
	elseif ($features_patient['patient_sex'] == 1)
		$sex_title = 'fille';

	echo'			<td>'.$sex_title.'</td>'."\n";
	echo'			<td>'.$features_patient['comment'].'</td>'."\n";
	echo'		</tr>';	
}

?>
	</tbody>
</table>


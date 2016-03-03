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

$title_view = 'Mes patients';

?>

<p>
	<a class = 'link_action' href='.?module=patient_management&action=add_new_patient'>
		<?php echo _("Ajouter un nouveau patient"); ?>
	</a>
</p>

<p class = 'patient_list_instruction'>
	<?php echo _("Pour accéder aux dossiers des patients, cliquez sur leur nom."); ?>
</p>

<h2>
	<?php echo _("Dossiers en cours"); ?>
</h2>

<table class='patient_list'>
	<thead>
		<tr>
			<th><?php echo _("NOM Prénom"); ?></th>
			<th><?php echo _("Âge"); ?></th>
			<th><?php echo _("Sexe"); ?></th>
			<th><?php echo _("À prévoir"); ?></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php

foreach ($list_patient as $key => $features_patient) {
	if ($features_patient['patient_active'] == 1) {
?>
		<tr>
			<td>
				<a href='.?module=patient_management&action=show_profile&id_patient=<?php echo $features_patient['id_patient']; ?>' title = '<?php echo _("ouvrir le dossier"); ?>'>
					<?php echo strtoupper($features_patient['patient_surname']).' '.$features_patient['patient_firstname']; ?>
				</a>
			</td>
<?php	
	$patient_age = calculateAge ($features_patient['patient_date_birth'], 'month');
?>
			<td>
			<?php echo sprintf (ngettext('%d an','%d ans',$patient_age['year']),$patient_age['year']);
				if($patient_age['month'] != 0) echo ' '.sprintf (ngettext('%d mois','%d mois',$patient_age['month']),$patient_age['month']); ?>
			</td>
<?php
	$sex_title = '';
	if ($features_patient['patient_sex'] == 0)
		$sex_title = _("fille");
	elseif ($features_patient['patient_sex'] == 1)
		$sex_title = _("garçon");
?>
			<td>
				<?php echo $sex_title; ?>
			</td>
			<td>
				<?php echo $features_patient['comment']; ?>
			</td>
			<td>
				<form action = '' method = 'post'>
					<input type = 'hidden' name = 'id_patient' value = '<?php echo $features_patient['id_patient']; ?>' />
					<input type = 'submit' name = 'archive' value = <?php echo _("archiver"); ?> />
				</form>
			</td>
		</tr>
<?php
	}
}
?>
	</tbody>
</table>




<h2>
	<?php echo _("Dossiers archivés"); ?>
</h2>

<table class='patient_list'>
	<thead>
		<tr>
			<th><?php echo _("NOM Prénom"); ?></th>
			<th><?php echo _("Âge"); ?></th>
			<th><?php echo _("Sexe"); ?></th>
			<th></th>

		</tr>
	</thead>
	<tbody>
<?php
foreach ($list_patient as $key => $features_patient) {
	if ($features_patient['patient_active'] == 0) {
?>
		<tr>
			<td>
				<a href='.?module=patient_management&action=show_profile&id_patient=<?php echo $features_patient['id_patient']; ?>' title = '<?php echo _("ouvrir le dossier"); ?>'>
					<?php echo strtoupper($features_patient['patient_surname']).' '.$features_patient['patient_firstname']; ?>
				</a>
			</td>
<?php	
	$patient_age = calculateAge ($features_patient['patient_date_birth'], 'month');
?>
			<td>
			<?php echo sprintf (ngettext('%d an','%d ans',$patient_age['year']),$patient_age['year']);
				if($patient_age['month'] != 0) echo ' '.sprintf (ngettext('%d mois','%d mois',$patient_age['month']),$patient_age['month']); ?>
			</td>
<?php
	$sex_title = '';
	if ($features_patient['patient_sex'] == 0)
		$sex_title = _("fille");
	elseif ($features_patient['patient_sex'] == 1)
		$sex_title = _("garçon");
?>
			<td>
				<?php echo $sex_title; ?>
			</td>

			<td>
				<form action = '' method = 'post'>
					<input type = 'hidden' name = 'id_patient' value = '<?php echo $features_patient['id_patient']; ?>' />
					<input type = 'submit' name = 'activate' value = <?php echo _("activer"); ?> />
				</form>
			</td>
		</tr>
<?php
	}
}
?>
	</tbody>
</table>

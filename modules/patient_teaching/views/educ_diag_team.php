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


$title_view = _("Diagnostic éducatif");
$style[] = 'educ_diag';



if ($_GET['action'] == 'create_educ_diag') {
?>
<form action = '.?module=patient_teaching&action=create_educ_diag' method = 'post'>
<?php
}
?>
	
	<div class = 'target_image'>
		<img src = '<?php echo IMAGE_PATH; ?>team.gif' />
	</div>
	<div class = 'target_title'>
		<?php echo _("Equipe, autre que le pédiatre, soignant l'enfant en raison de son asthme"); ?>
	</div>

<?php
$list_team = array (
				'gp' => _("Médecin généraliste"),
				'allergo' => _("Allergologue"),
				'pneumo' => _("Pneumologue"),
				'physio' => _("Kinésithérapeute"),
				'er' => _("Service hospitalier de soins d'urgence")
			);
			
foreach ($list_team as $id_team => $title_team) {
	$id_item = 'educ_diag_'.$id_team;	
	if (isset ($educ_diag[$id_item]))
		$value_item = $educ_diag[$id_item];
	else
		$value_item = '';
?>

	<div>
		<div class = 'team_title'>
			<label for = '<?php echo $id_item; ?>'><?php echo $title_team;?> : </label>
		</div>
		<div class = 'team_value'>
<?php
	if ($_GET['action'] == 'create_educ_diag') {
?>
			<input type = 'text' name = '<?php echo $id_item; ?>' id = '<?php echo $id_item; ?>' size = 40 value = "<?php echo $value_item; ?>" />
<?php
	}
	else

		echo $value_item."\n";
?>	
		</div>
	</div>
<?php
}

if ($_GET['action'] == 'create_educ_diag'){
?>
	<input type = 'hidden' name = 'target_educ_diag' value = 'team'/>
	<input type = 'submit' name = 'valid_next_page' value = "<?php echo _("Enregistrer et aller à l'étape suivante"); ?>"  class = 'button_validation'/>
</form>
<?php
}
?>

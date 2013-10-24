  
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


﻿<?php
$title_view = _("Diagnostic éducatif");
$style[] = 'educ_diag';

if ($_GET['action'] == 'create_educ_diag')
	echo '<form action=\'.?module=patient_teaching&action=create_educ_diag&page_educ_diag=start\'
		method=\'post\'>'."\n";
?>
	
	<div class="educ_diag_objimg">
<?php
if (is_file ('images/objteam-diag.gif'))
	echo '	<img src=\'images/objteam-diag.gif\' />'."\n";
?>
	</div>
	<div class="educ_diag_objectivetitle">
		<?php echo _("Equipe, autre que le pédiatre, soignant l'enfant en raison de son asthme"); ?>
	</div>

<?php
$list_team = array (
				'gp' => _("médecin généraliste"),
				'allergo' => _("allergologue"),
				'pneumo' => _("pneumologue"),
				'physio' => _("kinésithérapeute"),
				'er' => _("service hospitalier de soins d'urgence")
			);
			
foreach ($list_team as $id_team => $title_team) {
	$id_item = 'educ_diag_'.$id_team;
	echo '	<p>'."\n";
	
	if (isset ($educ_diag['$id_item']))
		$value_item = $educ_diag['$id_item'];
	else
		$value_item = '';
	
	echo '		<label for=\''.$id_item.'\'>'.$title_team.' : </label>';
	
	if ($_GET['action'] == 'create_educ_diag')	
		echo '<input type = \'text\' name = \''.$id_item.'\' id = \''.$id_item.'\' size = 40 value = \''.$value_item.'\'/>'."\n";
	else
		echo $value_item."\n";
	
	echo '	</p>'."\n";
}
if ($_GET['action'] == 'create_educ_diag'){
	echo '	<input type=\'hidden\' name = \'target_educ_diag\' value = \'team\' />'."\n";
	echo '	<input type = \'submit\' name = \'valid_educ_diag\' value = \''._("page suivante").'\' />'."\n";
	echo '</form>'."\n";
}
?>

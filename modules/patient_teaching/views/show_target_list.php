  
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

$title_view = 'Liste des objectifs pédagogiques';

$style[] = 'target';

$messages['info'][] = _("Les objectifs de sécurité sont en rouge.");
?>

<table class = 'target_list_table'>
	<thead>
		<tr>
			<th><?php echo _("Objectif"); ?></th>
			<th><?php echo _("Intitulé"); ?></th>
		</tr>
	</thead>
	<tbody>

<?php

foreach ($list_target as $id_target => $features_target) {
	$css_cell = '';
	if($features_target['target_security'] == 1)
		$css_cell = 'target_list_security';
	
	$type = 'user';
	if (empty ($_SESSION['id_user'])) {
		$type = 'patient';
	}
?>
		<tr>
			<td class = '<?php echo $css_cell; ?>'>
				<a href='.?module=patient_teaching&action=show_target&type=<?php echo $type; ?>&id_target=<?php echo $id_target; ?>' class = 'target_list_num'><?php echo $id_target ; ?></a>
			</td>
			<td class = '<?php echo $css_cell; ?>'>
				<a href='.?module=patient_teaching&action=show_target&type=<?php echo $type; ?>&id_target=<?php echo $id_target; ?>' class = 'target_list_name'><?php echo $features_target['target_name']; ?></a>
			</td>
		</tr>
<?php
}
?>

	</tbody>
</table>


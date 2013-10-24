  
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
$title_view = 'Objectifs thérapeutiques';
?>

<h1>Liste des objectifs thérapeutiques</h1>
<table class=''>
	<thead>
		<tr>
			<th>Objectif</th>
			<th>Intitulé</th>
		</tr>
	</thead>
	<tbody>

<?php

foreach ($list_target as $id_target => $features_target) {
echo'		<tr>'."\n";
echo'			<td><a href=\'.?module=patient_teaching&action=show_target&type=patient&id_target='.$id_target.'\'>'.$id_target.'</a></td>'."\n";
echo'			<td>'.$features_target['target_name'].'</td>'."\n";
echo'		</tr>'."\n";
}
?>

	</tbody>
</table>


  
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

try {
	if (!isset ($db))
		$db = DBConnect();
/*
echo '<pre>';
print_r ($list_devices);
echo '</pre>';
*/
	$list_device_eval = array();
	
	foreach ($list_devices as $id_device => $features_device) {
		$table = 'table_device_'.$id_device;

		$request = $db -> prepare (
			'SELECT *
			FROM '.$table
			.' WHERE id_patient = :id_patient
			ORDER BY device_'.$id_device.'_date'
			);

		$request -> execute (array (
			'id_patient' => $_SESSION['patient']['id_patient']
		));

		$request -> setFetchMode(PDO::FETCH_ASSOC);

		while ($one_device_eval = $request -> fetch()) {
			$date_eval = $one_device_eval['device_'.$id_device.'_date'];
			$list_device_eval[$id_device][$date_eval] = $one_device_eval;
		}

		$request -> closeCursor();
	}
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

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

try {
	if (!isset ($db))
		$db = DBConnect();

	$request1 = $db -> prepare (
		'DELETE
		FROM table_user_speciality
		WHERE id_user = :id_user'
		);
		
	$request1 -> execute (array (
						'id_user' => $_SESSION['id_user']
					));

	$request1 -> closeCursor();
	

	foreach ($list_user_speciality as $type => $features_spe_type) {
		foreach ($features_spe_type as $id_speciality => $speciality_name) {
			$request2 = $db -> prepare (
				'INSERT INTO table_user_speciality (id_user, id_speciality)
				VALUES (:id_user, :id_speciality)'
				);

			$request2 -> execute (array (
					'id_user' => $_SESSION['id_user'],
					'id_speciality' => $id_speciality
				));

			$request2 -> closeCursor();
		}
	}
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

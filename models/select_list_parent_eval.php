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
	

	$request = $db -> prepare (
		'SELECT P.id_parent_eval, P.id_cycle_educ
		FROM table_parent_eval as P
			INNER JOIN table_cycle_educ as C ON P.id_cycle_educ = C.id_cycle_educ
		WHERE C.id_patient = :id_patient'
		);

	$request -> execute (array (
		'id_patient' => $id_patient
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$list_parent_eval = array ();
	
	while ($one_parent_eval = $request -> fetch() ){
		$id = $one_parent_eval['id_cycle_educ'];
		$list_parent_eval[$id] = $one_parent_eval['id_parent_eval'];;
	}
	
	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

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
		'SELECT id_cycle_educ, cycle_educ_eval_date, cycle_educ_start_date
		FROM table_cycle_educ
		WHERE id_patient = :id_patient AND cycle_educ_eval_date IS NOT NULL
		ORDER BY cycle_educ_start_date'
		);
/*A.cycle_educ_start_date = (
			SELECT MAX(cycle_educ_start_date)
			FROM table_cycle_educ as B
			WHERE B.id_patient = A.id_patient AND B.cycle_educ_eval_date IS NOT NULL)*/
			
	$request -> execute (array (
		'id_patient' => $id_patient
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	while ($one_cycle_educ = $request -> fetch()) {	
		$id_cycle_educ = $one_cycle_educ['id_cycle_educ'];
		$cycle_educ_eval_date = $one_cycle_educ['cycle_educ_eval_date'];
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

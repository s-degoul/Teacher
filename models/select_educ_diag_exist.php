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
		'SELECT id_educ_diag, educ_diag_date, educ_diag_achieved
		FROM table_educ_diag
		WHERE id_patient = :id_patient'
		);

	$request -> execute (array (
		'id_patient' => $id_patient
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);
	$nb_educ_diag = 0;
	
	while($one_educ_diag = $request -> fetch()) {
		$educ_diag = $one_educ_diag;
		$nb_educ_diag ++;
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

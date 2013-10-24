  
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
		$db = new PDO ('mysql:host='.HOST_DB.';dbname='.NAME_DB, LOGIN_DB, PASSWORD_DB);
	$db -> exec ('SET NAMES utf8');
	

	$request = $db -> prepare (
		'SELECT A.id_cycle_educ
		FROM table_cycle_educ as A
		WHERE A.id_patient = :id_patient AND A.cycle_educ_start_date = (
			SELECT MAX(cycle_educ_start_date)
			FROM table_cycle_educ as B
			WHERE B.id_patient = A.id_patient AND B.cycle_educ_eval_date IS NOT NULL
			)'
		);

	$request -> execute (array (
		'id_patient' => $_SESSION['patient']['id_patient']
	));

	$list_cycle_educ = array(); // ??

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$one_cycle_educ = $request -> fetch();
	
	$id_cycle_educ = $one_cycle_educ['id_cycle_educ'];

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

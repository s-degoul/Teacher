  
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
		'SELECT cycle_educ_start_date, cycle_educ_eval_date,
		cycle_educ_eval_obj1, cycle_educ_eval_obj2, cycle_educ_eval_obj3_a, cycle_educ_eval_obj3_b, cycle_educ_eval_obj4_a, cycle_educ_eval_obj4_b, 
		cycle_educ_eval_obj5, cycle_educ_eval_obj6, cycle_educ_eval_obj7, cycle_educ_eval_obj8_a, cycle_educ_eval_obj8_b, cycle_educ_eval_obj9, cycle_educ_eval_obj10
		FROM table_cycle_educ
		WHERE id_cycle_educ = :id_cycle_educ and id_patient = :id_patient' // double vérification : utilité ???
		);

	$request -> execute (array (
		'id_cycle_educ' => $id_cycle_educ,
		'id_patient' => $_SESSION['patient']['id_patient']
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$cycle_educ = $request -> fetch();

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

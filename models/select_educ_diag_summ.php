  
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
		'SELECT educ_diag_obj1, educ_diag_obj2, educ_diag_obj3_a, educ_diag_obj3_b, educ_diag_obj4_a, educ_diag_obj4_b, educ_diag_obj5,
				educ_diag_obj6, educ_diag_obj7, educ_diag_obj8_a, educ_diag_obj8_b, educ_diag_obj9, educ_diag_obj10
		FROM table_educ_diag
		WHERE id_educ_diag = :id_educ_diag and id_patient = :id_patient' // double vérification : utilité ???
		);

	$request -> execute (array (
		'id_educ_diag' => $id_educ_diag,
		'id_patient' => $_SESSION['patient']['id_patient']
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$educ_diag_summ = $request -> fetch();

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

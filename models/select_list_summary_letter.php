  
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

	$request = $db -> prepare (
		'SELECT S.id_cycle_educ as id_cycle_educ, summary_letter_date, summary_letter_name
		FROM table_summary_letter as S
		INNER JOIN table_cycle_educ as C ON S.id_cycle_educ = C.id_cycle_educ
		WHERE C.id_patient = :id_patient
		ORDER BY summary_letter_date'
		);

	$request -> execute (array (
		'id_patient' => $_SESSION['patient']['id_patient']
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$list_summary_letter = array();

	while ($one_summary_letter = $request -> fetch()) {
		$id_cycle_educ = $one_summary_letter['id_cycle_educ'];
		$list_summary_letter[$id_cycle_educ][] = array (
														'summary_letter_date' => $one_summary_letter['summary_letter_date'],
														'summary_letter_name' => $one_summary_letter['summary_letter_name']
													);
	}

	$request -> closeCursor();

}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

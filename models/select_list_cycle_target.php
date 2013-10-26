  
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
		'SELECT CT.cycle_target_date, CT.cycle_target_done, T.target_num
		FROM table_cycle_target as CT
			INNER JOIN table_target as T ON CT.id_target = T.id_target
		WHERE id_cycle_educ = :id_cycle_educ'
		);

	$request -> execute (array (
		'id_cycle_educ' => $id_cycle_educ
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$list_cycle_target = array();

	while ($one_cycle_target = $request -> fetch()) {
		$nb_target = $one_cycle_target['target_num'];
		$list_cycle_target[$nb_target] = array(
											'cycle_target_date' => $one_cycle_target['cycle_target_date'],
											'cycle_target_done' => $one_cycle_target['cycle_target_done']
											);
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

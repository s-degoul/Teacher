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
		'UPDATE table_cycle_educ
		SET cycle_educ_eval_date = :cycle_educ_eval_date
		WHERE id_cycle_educ = :id_cycle_educ and id_patient = :id_patient'
		);

	$request -> execute (array (
							'cycle_educ_eval_date' => $cycle_educ_eval_date,
							'id_cycle_educ' => $id_cycle_educ,
							'id_patient' => $id_patient
						));
 
	$request -> closeCursor();
	
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

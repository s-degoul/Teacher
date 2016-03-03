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
		'SELECT id_cycle_educ, cycle_educ_start_date, cycle_educ_eval_date,
		cycle_educ_eval_obj1, cycle_educ_eval_obj2, cycle_educ_eval_obj3_a, cycle_educ_eval_obj3_b, cycle_educ_eval_obj4_a, cycle_educ_eval_obj4_b, 
		cycle_educ_eval_obj5, cycle_educ_eval_obj6, cycle_educ_eval_obj7, cycle_educ_eval_obj8_a, cycle_educ_eval_obj8_b, cycle_educ_eval_obj9, cycle_educ_eval_obj10, cycle_educ_eval_subj_patient, cycle_educ_eval_subj_parent, cycle_educ_eval_cact
		FROM table_cycle_educ
		WHERE id_patient = :id_patient'
		);

	$request -> execute (array (
		'id_patient' => $id_patient
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$cycle_educ_all = array();
	
	while ($one_cycle_educ = $request -> fetch()) {
		$id = $one_cycle_educ['id_cycle_educ'];
		$cycle_educ_all[$id] = $one_cycle_educ;
	}

	$request -> closeCursor();
	
	uasort ($cycle_educ_all, function ($a,$b) {
			$date_a = new \DateTime($a['cycle_educ_eval_date']);
			$date_b = new \DateTime($b['cycle_educ_eval_date']);
			
			if ($date_a == $date_b) {
				return 0;
			}
			
			return ($date_a < $date_b) ? -1 : 1;
		});
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

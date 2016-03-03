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
		'SELECT CT.id_target,  CT.cycle_target_date, CT.cycle_target_done, CE.id_cycle_educ, CE.cycle_educ_start_date,
			CE.cycle_educ_eval_date, CE.cycle_educ_end_programme, T.target_name_'.$_SESSION['lang'].' as target_name
		FROM table_cycle_target as CT
			INNER JOIN table_target T ON CT.id_target = T.id_target
			RIGHT OUTER JOIN table_cycle_educ as CE ON CT.id_cycle_educ = CE.id_cycle_educ
		WHERE CE.id_patient = :id_patient'
		);

	$request -> execute (array (
		'id_patient' => $id_patient
	));

	$list_cycle_educ = array();

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	while ($one_cycle_educ = $request -> fetch()) {
		$cycle_educ_start_date = $one_cycle_educ['cycle_educ_start_date'];
		$id_target = $one_cycle_educ['id_target'];
		$list_cycle_educ[$cycle_educ_start_date]['id_cycle_educ']= $one_cycle_educ['id_cycle_educ'];
		$list_cycle_educ[$cycle_educ_start_date]['cycle_educ_eval_date'] = $one_cycle_educ['cycle_educ_eval_date'];
		$list_cycle_educ[$cycle_educ_start_date]['cycle_educ_end_programme'] = $one_cycle_educ['cycle_educ_end_programme'];
		
		if (!empty ($id_target))
			$list_cycle_educ[$cycle_educ_start_date]['targets'][$id_target]
			= array (
				'target_name' => $one_cycle_educ['target_name'],
				'cycle_target_date' => $one_cycle_educ['cycle_target_date'],
				'cycle_target_done' => $one_cycle_educ['cycle_target_done']
			);
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

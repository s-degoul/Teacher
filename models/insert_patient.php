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
			'INSERT INTO table_patient (id_user, patient_surname, patient_firstname, patient_date_birth,
				patient_date_inclusion, patient_sex, patient_height, patient_weight, patient_peakflow)
			VALUES (:id_user, :patient_surname, :patient_firstname, :patient_date_birth, :patient_date_inclusion,
				:patient_sex, :patient_height, :patient_weight, :patient_peakflow)'
		);

	$request -> execute (array (
					'id_user' => $_SESSION['id_user'],
					'patient_surname' => $patient['patient_surname'],
					'patient_firstname' => $patient['patient_firstname'],
					'patient_date_birth' => $patient['patient_date_birth'],
					'patient_date_inclusion' => date('Y-m-d'),
					'patient_sex' => $patient['patient_sex'],
					'patient_height' => $patient['patient_height'] == ''?null:$patient['patient_height'],
					'patient_weight' => $patient['patient_weight'] == ''?null:$patient['patient_weight'],
					'patient_peakflow' => $patient['patient_peakflow'] == ''?null:$patient['patient_peakflow']
				)
			);

	$id_patient = $db -> lastInsertId();

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}
	
?>

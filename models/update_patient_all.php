  
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
		'UPDATE table_patient
		SET patient_surname = :patient_surname, patient_firstname = :patient_firstname,
                patient_date_birth = :patient_date_birth, patient_sex = :patient_sex, 
                patient_height = :patient_height, patient_weight = :patient_weight, patient_peakflow = :patient_peakflow
		WHERE id_patient = :id_patient'
		);

	$request -> execute (array (
		'patient_surname' => $patient['patient_surname'],
		'patient_firstname' => $patient['patient_firstname'],
        'patient_date_birth' => $patient['patient_date_birth'],
        'patient_sex' => $patient['patient_sex'],
        'patient_height' => $patient['patient_height'],
        'patient_weight' => $patient['patient_weight'],
        'patient_peakflow' => $patient['patient_peakflow'],
		'id_patient' => $id_patient
	));

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

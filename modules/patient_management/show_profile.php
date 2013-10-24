  
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

if (!isset ($_GET['id_patient']) and !isset ($_SESSION['patient'])) {
	$messages['error'] = _("Aucun patient sélectionné");
}
else {
	if (isset ($_GET['id_patient'])) {
		$id_patient = $_GET['id_patient'];
		$messages['info'][] = _("Vous pouvez revenir sur cette page à tous moments en cliquant sur le nom du patient dans le menu de gauche");
	}
	else {
		$id_patient = $_SESSION['patient']['id_patient'];
	}
		
	require (MODEL_PATH.'select_patient_all.php');

	if (isset ($patient['patient_surname'])) {
		$patient_age = calculateAge ($patient['patient_date_birth'], 'month');

		$_SESSION['patient'] = array (
					'id_patient' => $id_patient,
					'patient_surname' => $patient['patient_surname'],
					'patient_firstname' => $patient['patient_firstname'],
					'patient_age' => $patient_age,
					'patient_peakflow' =>  $patient['patient_peakflow'],
					'targets' => array()
					);
	}

	require (MODEL_PATH.'select_educ_diag_exist.php');
	
	$_SESSION['patient']['educ_diag_done'] = !empty ($educ_diag);


	require (MODEL_PATH.'select_list_cycle_educ.php');
	
	$_SESSION['patient']['nb_cycle_educ'] = count ($list_cycle_educ);
	
	foreach ($list_cycle_educ as $cycle_start_date => $feature_cycle) {

		if (empty ($feature_cycle['cycle_educ_eval_date'])) {
			$_SESSION['patient']['id_cycle_educ'] = $feature_cycle['id_cycle_educ'];
			$_SESSION['patient']['targets'] = array();
			$_SESSION['patient']['eval_to_do'] = 1;
			if (!empty ($feature_cycle['targets'])) {
				foreach ($feature_cycle['targets'] as $id_target => $feature_target) {
					$_SESSION['patient']['targets'][$id_target] = array (
																		'target_done' => $feature_target['cycle_target_done']
																		);
					if ($feature_target['cycle_target_done'] == 0)
						$_SESSION['patient']['eval_to_do'] = 0;
				}
			}
		}
		elseif (preg_match ('#[a-zA-Z]{3,}#', showDate ($feature_cycle['cycle_educ_eval_date']))) {
			$_SESSION['patient']['id_cycle_educ'] = $feature_cycle['id_cycle_educ'];
			$_SESSION['patient']['targets'] = '';
			$_SESSION['patient']['eval_to_do'] = 1;
			$_SESSION['patient']['end_programme'] = 1;
		}
	}

	require (VIEW_RELATIVE_PATH.'show_profile.php');
}
?>

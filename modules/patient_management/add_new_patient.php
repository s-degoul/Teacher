  
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

	if ($_SESSION['user_first_eval'] == 0) {
			$messages['error'][] = _("Vous devez d'abord").' <a href=\'.?module=user_teaching&action=create_eval\'>'._("réaliser une première auto-évaluation")
								.'</a> '._("avant de pouvoir inclure un / des patient(s)")."\n";
	}
	elseif ($_SESSION['user_validation_essential'] == 0) {
			$messages['error'][] = _("Vous devez d'abord").' <a href=\'.?module=user_teaching&action=show_essential\'>'._("lire la formation théorique initiale &quot;l&apos;Essentiel&quot;")
								.'</a> '._("avant de pouvoir inclure un / des patient(s)")."\n";
	}
	else {
		if (isset ($_POST['valid_add_patient'])) {
			
			$patient = checkVarPost ();
			
			if (empty ($patient['patient_surname']) or empty ($patient['patient_firstname']))
				$messages['error'][] = _("Veuillez renseigner nom").' <em>'._("et").'</em> '._("prénom");
				
			if ($patient['patient_sex'] != 0 and $patient['patient_sex'] != 1)
				$messages['error'][] = _("Le sexe sélectionné n'est pas correct");

			$date_birth_parts = explode ('/', $patient['patient_date_birth']);
			if ( !isset ($date_birth_parts[1]) or !isset ($date_birth_parts[2])) {
				$messages['error'][] = _("Le format de la date de naissance n'est pas correct");
				$patient['patient_date_birth'] = '';	
			}
			else {
				$patient['patient_date_birth'] = prepareDateSQL ($date_birth_parts[2], $date_birth_parts[1], $date_birth_parts[0]);
//	echo $patient['patient_date_birth'];			
				if (checkdate ($date_birth_parts[1], $date_birth_parts[0], $date_birth_parts[2]) == false
					or calculateAge ($patient['patient_date_birth']) < 0)
					$messages['error'][] = _("La date de naissance n'est pas correcte");
			}
			
			if (empty ($messages['error'])) {
				require (MODEL_PATH.'insert_patient.php');
				header('location:.?module=patient_management&action=show_profile&id_patient='.$id_patient);
			}
		}
		else {
			$patient = array (
							'patient_surname' => '',
							'patient_firstname' => '',
							'patient_date_birth' => '',
							'patient_sex' => -1
						);
		}


		require (VIEW_RELATIVE_PATH.'add_new_patient.php');
	}
?>

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


if (! isset ($_SESSION['patient']))
	$messages['error'][] = _("aucun patient sélectionné");
	
else {
	$id_patient = $_SESSION['patient']['id_patient'];
	
	require (MODEL_PATH.'select_patient_all.php');

	
	if (isset ($_POST['cancel_modif_profile'])) {
		header('location:.?module=patient_management&action=show_profile');
	}	
	elseif (isset ($_POST['valid_modif_profile'])) {
		$old_sex = $patient['patient_sex'];
		$old_date_birth = $patient['patient_date_birth'];
		
		$patient = checkVarPost ();

		if (empty ($patient['patient_surname']) or empty ($patient['patient_firstname'])) {
			$messages['error'][] = _("Veuillez renseigner nom <em> et </em> prénom");
		}
		elseif (($patient['patient_surname'] != $_SESSION['patient']['patient_surname'] or $patient['patient_firstname'] != $_SESSION['patient']['patient_firstname'])
				and empty ($_SESSION['patient']['warning']['modify_profile']['name'])) {
			$messages['warning'][] = _("Êtes vous sûr de vouloir changer le nom ou prénom de ce patient ?");
			$_SESSION['patient']['warning']['modify_profile']['name'] = 1;
		}
		elseif (!empty ($_SESSION['patient']['warning']['modify_profile']['name'])) {
			unset ($_SESSION['patient']['warning']['modify_profile']['name']);
		}

		if ($patient['patient_sex'] != 0 and $patient['patient_sex'] != 1)
			$messages['error'][] = _("Le sexe sélectionné n'est pas correct");
		elseif ($patient['patient_sex'] != $old_sex and empty ($_SESSION['patient']['warning']['modify_profile']['sex'])) {
			$messages['warning'][] = _("Êtes vous sûr de vouloir changer le sexe de ce patient ?");
			$_SESSION['patient']['warning']['modify_profile']['sex'] = 1;
		}
		elseif (!empty ($_SESSION['patient']['warning']['modify_profile']['sex'])) {
			unset ($_SESSION['patient']['warning']['modify_profile']['sex']);
		}
		
		if (($patient['patient_height'] != '' and !is_numeric ($patient['patient_height']))
			or ($patient['patient_weight'] != '' and !is_numeric ($patient['patient_weight']))
			or ($patient['patient_peakflow'] != '' and !is_numeric ($patient['patient_peakflow'])))
			$messages['error'][] = _("Les paramètres physiologiques (poids, taille, DEP) doivent être des nombres");
		
		$date_birth_parts = explode ('/', $patient['patient_date_birth']);
		if ( !isset ($date_birth_parts[1]) or !isset ($date_birth_parts[2])) {
			$messages['error'][] = _("Le format de la date de naissance n'est pas correct");
			$patient['patient_date_birth'] = '00-00-00';	
		}
		else {
			$patient['patient_date_birth'] = prepareDateSQL ($date_birth_parts[2], $date_birth_parts[1], $date_birth_parts[0]);
			
			if (checkdate ($date_birth_parts[1], $date_birth_parts[0], $date_birth_parts[2]) == false
				or calculateAge ($patient['patient_date_birth'])['year'] < 0)
				$messages['error'][] = _("La date de naissance n'est pas correcte");
			elseif ($patient['patient_date_birth'] != $old_date_birth
				and empty ($_SESSION['patient']['warning']['modify_profile']['age'])) {
				$messages['warning'][] = _("Êtes vous sûr de vouloir changer la date de naissance de ce patient ?");
				$_SESSION['patient']['warning']['modify_profile']['age'] = 1;
			}
			elseif (!empty ($_SESSION['patient']['warning']['modify_profile']['age'])) {
				unset ($_SESSION['patient']['warning']['modify_profile']['age']);
			}
		}			



		if (empty ($messages['error']) and empty ($messages['warning'])) {
			require (MODEL_PATH.'update_patient_all.php');
			
			$_SESSION['messages']['info'] = _("Les modifications ont été enregistrées");
			header ('location:.?module=patient_management&action=show_profile');
			exit;
		}
	}


	require (VIEW_RELATIVE_PATH.'modify_profile.php');
}
?>

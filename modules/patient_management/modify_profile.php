  
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

if (! isset ($_SESSION['patient']))
	$messages['error'][] = _("aucun patient sélectionné");
	
else {
	$id_patient = $_SESSION['patient']['id_patient'];
	
	if (isset ($_POST['valid_modif_profile'])) {
		$patient = checkVarPost ();


		if ( empty ($patient['patient_surname']) or empty ($patient['patient_firstname']))
			$messages['error'][] = _('Veuillez renseigner nom').' <em>'._('et').'</em> '._('pr&eacute;nom');

		if ($patient['patient_sex'] != 0 and $patient['patient_sex'] != 1)
			$messages['error'][] = _('Le sexe s&eacute;lectionn&eacute; n&apos; pas correct');

		if (($patient['patient_height'] != '' and !is_numeric ($patient['patient_height']))
			or ($patient['patient_weight'] != '' and !is_numeric ($patient['patient_weight']))
			or ($patient['patient_peakflow'] != '' and !is_numeric ($patient['patient_peakflow'])))
			$messages['error'][] = _('Les param&egrave;tres physiologiques doivent &ecirc;tre des nombres');
		
		$date_birth_parts = explode ('/', $patient['patient_date_birth']);
		if ( !isset ($date_birth_parts[1]) or !isset ($date_birth_parts[2])) {
			$messages['error'][] = _('Le format de la date de naissance n&apos;est pas correct');
			$patient['patient_date_birth'] = '00-00-00';	
		}
		else {
			$patient['patient_date_birth'] = prepareDateSQL ($date_birth_parts[2], $date_birth_parts[1], $date_birth_parts[0]);
			
			if (checkdate ($date_birth_parts[1], $date_birth_parts[0], $date_birth_parts[2]) == false
				or calculateAge ($patient['patient_date_birth']) < 0)
				$messages['error'][] = _('La date de naissance n&apos;est pas correcte');
		}			

		/*
	Vérification des données :
	si modification nom, prénom ou date de naissance, demander confirmation  ++++
	*/

		if (empty ($messages['error'])) {
			require (MODEL_PATH.'update_patient_all.php');
			header ('location:.?module=patient_management&action=show_profile');
		}
	}
	else {
		require (MODEL_PATH.'select_patient_all.php');
	}

	require (VIEW_RELATIVE_PATH.'modify_profile.php');
}
?>

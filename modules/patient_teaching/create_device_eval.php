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


if (isset ($_GET['from'])) {
	$from_page = $_GET['from'];
	if ($from_page == 'target_5') {
		$from_page_link = '.?module=patient_teaching&action=show_target&id_target=5&type=user';
	}
	elseif ($from_page == 'show_device_eval') {
		$from_page_link = '.?module=patient_teaching&action=show_device_eval';
	}
	elseif ($from_page == 'create_educ_diag') {
		$from_page_link = '.?module=patient_teaching&action=create_educ_diag&page_educ_diag=5';
	}
	elseif ($from_page == 'show_educ_diag') {
		$from_page_link = '.?module=patient_teaching&action=show_educ_diag';
	}
}
else {
	$from_page = '';
}


if (! isset ($_REQUEST['device']) or empty($_REQUEST['device'])) {
	$_SESSION['messages']['error'] = _("aucun appareil d'inhalation sélectionné");
	header ('location:.?module=patient_teaching&action=show_device_eval');
	exit;
}
else {
	
	$device = $_REQUEST['device'];

	require ('list_devices.php');
	
	if (isset ($_POST['valid_eval_quit']) or isset ($_POST['valid_eval_add'])) {
		if (!isset ($_SESSION['patient']))
			$messages['error'][] = _("aucun dossier patient ouvert");
		
		$device_eval = checkVarPost();
		
		$list_questions = array('id_patient', 'device_'.$device.'_date');
		$one_answers_not_null = 0;
		
		foreach ($list_devices[$device]['questions'] as $nb_question => $title_question) {
			$id_question = 'device_'.$device.'_q'.$nb_question;
			$list_questions[] = $id_question;
			
			if (!isset ($device_eval[$id_question]))
				$device_eval[$id_question] = NULL;
			else
				$one_answers_not_null = 1;
		}
		
		if ($one_answers_not_null == 0)
			$messages['error'][] = _("L'évaluation que vous voulez enregistrer est vide");
			
		// check of date sent
		$device_eval_date_parts = explode ('/', $device_eval['device_'.$device.'_date']);
		if ( !isset ($device_eval_date_parts[1]) or !isset ($device_eval_date_parts[2])) {
			$messages['error'][] = _("Le format de la date n'est pas correct");
			$device_eval['device_'.$device.'_date'] = '';	
		}
		else {
			$device_eval_date = prepareDateSQL ($device_eval_date_parts[2], $device_eval_date_parts[1], $device_eval_date_parts[0]);
			
			if (checkdate ($device_eval_date_parts[1], $device_eval_date_parts[0], $device_eval_date_parts[2]) == false)
				$messages['error'][] = _("La date entrée n'est pas correcte");
			elseif (calculateAge ($device_eval_date)['year'] < 0)
				$messages['error'][] = _("La date entrée n'est pas correcte (postérieure à aujourd'hui)");
		}
		
		if (empty ($messages['error'])) {
			require (MODEL_PATH.'insert_device_eval.php');
			$messages['info'][] = _("Les données ont été enregistrées");
			
			if (isset ($_POST['valid_eval_quit']) and isset ($from_page_link))
				header ('location:'.$from_page_link);
			else
				$device_eval = array();
		}
	}

	require (VIEW_RELATIVE_PATH.'create_device_eval.php');

}
?>

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

if (! isset ($_SESSION['patient'])) {
	$messages['error'][] = _("Aucun patient sélectionné");
}
elseif (!isset ($_GET['id_summary_letter']) or ! is_numeric ($_GET['id_summary_letter']) ) {
	$messages['error'][] = _("Aucun courrier sélectionné");
}

if (empty ($messages['error'])) {
	$id_summary_letter = $_GET['id_summary_letter'];
	$id_patient = $_SESSION['patient']['id_patient'];
	require(MODEL_PATH.'select_summary_letter.php');
	
	if ($nb_response == 1) {
		if (isset ($_POST['rename_summary_letter']) or isset ($_POST['cancel_rename_summary_letter'])) {
			$new_summary_letter = checkVarPost();
			if (isset ($_POST['rename_summary_letter'])) {
				$summary_letter_title = $new_summary_letter['summary_letter_title'];
				require(MODEL_PATH.'update_summary_letter.php');
				$_SESSION['messages']['info'] = _("Courrier renommé");
			}
			header('location:.?module=patient_management&action=show_profile');
			exit;
		}
		else {
			require(VIEW_RELATIVE_PATH.'rename_summary_letter.php');
		}
	}
	//~ else {
		//~ $_SESSION['messages']['error'] = _("Courrier introuvable !");
		//~ header('location:.?module=patient_management&action=show_profile');
		//~ exit;
	//~ }
}

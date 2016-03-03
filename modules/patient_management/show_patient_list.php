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


if ($_SESSION['user_first_eval'] == 0) {
		$messages['error'][] = _("Vous devez d'abord").' <a href=\'.?module=user_teaching&action=create_eval\'>'._("réaliser une première auto-évaluation")
							.'</a> '._("avant de pouvoir inclure un / des patient(s)")."\n";
}
elseif ($_SESSION['user_validation_essential'] == 0) {
		$messages['error'][] = _("Vous devez d'abord").' <a href=\'.?module=user_teaching&action=show_essential\'>'._("lire la formation théorique initiale &quot;l&apos;Essentiel&quot;")
							.'</a> '._("avant de pouvoir inclure un / des patient(s)")."\n";
}
else {
	$id_user = $_SESSION['id_user'];
	
	if (isset ($_POST['archive'])) {
		$id_patient = $_POST['id_patient'];
		$patient_active = 0;
		require (MODEL_PATH.'update_patient_active.php');
	}
	else if (isset ($_POST['activate'])) {
		$id_patient = $_POST['id_patient'];
		$patient_active = 1;
		require (MODEL_PATH.'update_patient_active.php');
	}
	
	require (MODEL_PATH.'select_patient_list.php');

	foreach ($list_patient as $key => $features_patient) {
		$id_patient = $_SESSION['patient']['id_patient'] = $features_patient['id_patient'];
		$list_patient[$key]['comment'] = '';
		
		require (MODEL_PATH.'select_educ_diag_exist.php');
		if (empty ($educ_diag))
			$list_patient[$key]['comment'] = _("Diagnostic éducatif à réaliser");
		elseif ($educ_diag['educ_diag_achieved'] == 0)
			$list_patient[$key]['comment'] = _("Diagnostic éducatif à terminer");
		
		else {
			require (MODEL_PATH.'select_list_cycle_educ.php');
			
			foreach ($list_cycle_educ as $cycle_start_date => $features_cycle) {
				if (empty ($features_cycle['cycle_educ_eval_date'])) {
						if (count ($list_cycle_educ) == 1)
							$list_patient[$key]['comment'] = _("Cycle initial").'<br/>'
															._("Évaluation de fin de cycle à réaliser");
						else
							$list_patient[$key]['comment'] = _("Renforcement éducatif n°").' '.(count ($list_cycle_educ) -1).'<br/>'
															._("Évaluation de fin de cycle à réaliser");
					}
				elseif (preg_match ('#[a-z-A-Z]{3,}#', showDate ($features_cycle['cycle_educ_eval_date']))) {
					$list_patient[$key]['comment'] = _("Évaluation du maintien des compétences prévue vers ").showDate ($features_cycle['cycle_educ_eval_date']);
				}

				if (isset ($features_cycle['targets'])) {
					foreach ($features_cycle['targets'] as $id_target => $features_target) {
						if ($features_target['cycle_target_done'] == 0)
							if (count ($list_cycle_educ) == 1)
								$list_patient[$key]['comment'] = _("Travail sur les objectifs éducatifs en cours");
							else
								$list_patient[$key]['comment'] = _("Renforcement éducatif n°").' '.(count ($list_cycle_educ) -1).'<br/>'
															._("Travail sur les objectifs éducatifs en cours");
					}
				}
			}
			
		}
	}

	unset ($_SESSION['patient']);

	require (VIEW_RELATIVE_PATH.'show_patient_list.php');
}
?>

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

/*************************************************
 * configuration of left menu.
 * each item is associated with an array containing
 * informations for link's target ("module" and
 * "action") and link's title ("title").
 * Possibility of submenu with same model.
 *************************************************/

if (isset ($_SESSION['id_user'])) {
		
	if (!isset ($_SESSION['patient'])) {		
		$links_user = array(
						0 => array(
							'module' => 'user_teaching',
							'action' => 'create_eval',
							'title_short' => _("Auto-évaluation initiale"),
							'title_long' => _("J'évalue mes compétences pour dispenser l'ETP"),
							'active' => 0
									),
						1 => array(
							'module' => 'user_teaching',
							'action' => 'show_essential',
							'title_short' => _("Présentation de Teacher"),
							'title_long' => _("L'essentiel à savoir avant de commencer"),
							'active' => 0
									),
						2 => array(
							'module' => 'patient_teaching',
							'action' => 'show_educ_program',
							'title_short' => _("Éducation thérapeutique"),
							'title_long' => _("Le programme éducatif personnalisé"),
							'active' => 1
									),
						3 => array(
							'module' => 'user_teaching',
							'action' => 'create_eval',
							'title_short' => _("Auto-évaluation"),
							'title_long' => _("J'évalue mes compétences pour dispenser l'ETP en fin de programme"),
							'active' => 0
									),
						4 => array(
							'module' => 'user_teaching',
							'action' => 'show_essential',
							'title_short' => _("Rappels"),
							'title_long' => _("Je rafraîchis mes connaissances"),
							'active' => 1
									)										
						);

		if ($_SESSION['user_validation_essential'] == 0) {
			$links_user[2]['active'] = 0;
			$links_user[4]['active'] = 0;
													
			if ($_SESSION['user_first_eval'] == 0) {
				$links_user[0]['active'] = 1;
			}
			else {
				$links_user[1]['active'] = 1;
			}
			
		}
		else {
			if ($_SESSION['user_eval_to_do'] == 1)
				$links_user[3]['active'] = 1;
		}
		
		$links_patient = array();
	}
	else {
		$links_user = array();

		$links_patient = array(
						0 => array(
							'module' => 'patient_teaching',
							'action' => 'show_educ_diag',
							'title_short' => _("Diagnostic éducatif"),
							'title_long' => _("Voir le diagnostic éducatif"),
							'active' => 0,
							'submenu' => array (
										0 => array(
											'module' => 'patient_teaching',
											'action' => 'show_summ_eval&type_eval=educ_diag',
											'title_short' => _("Contrat éducatif"),
											'title_long' => _("Voir le contrat éducatif (synthèse)"),
											'active' => 0
												)
											)
									),
						1 => array(
							'module' => 'patient_management',
							'action' => 'show_profile',
							'title_short' => _("Séances éducatives"),
							'title_long' => _("Les séances éducatives"),
							'active' => 1
									),
						2 => array(
							'module' => 'patient_teaching',
							'action' => 'show_eval',
							'title_short' => _("Évaluation finale"),
							'title_long' => _("Voir l'évaluation finale"),
							'active' => 0,
							'submenu' => array (
											0 => array(
												'module' => 'patient_teaching',
												'action' => 'show_summ_eval',
												'title_short' => _("Synthèse"),
												'title_long' => _("Voir la synthèse"),
												'active' => 0
													)
											)
									)
							);

		if ($_SESSION['patient']['educ_diag_done'] == 0) {
			$links_patient[0] = array(
								'module' => 'patient_teaching',
								'action' => 'create_educ_diag',
								'title_short' => _("Diagnostic éducatif"),
								'title_long' => _("Faire le diagnostic éducatif"),
								'active' => 1
								);
			
			$links_patient[1]['active'] = 0;
			
			$links_patient[2] = array(
								'module' => 'patient_teaching',
								'action' => 'create_eval',
								'title_short' => _("Évaluation finale"),
								'title_long' => _("Faire l'évaluation finale"),
								'active' => 0
								);
		}
		
		if ($_SESSION['patient']['nb_cycle_educ'] > 2) {
			$links_patient[5] = array (
								'module' => '',
								'action' => '',
								'title_short' => _("Cycles éducatifs précédents"),
								'title_long' => _("Voir les cycles éducatifs réalisés"),
								'active' => 1
									);
		}
		
		if ($_SESSION['patient']['nb_cycle_educ'] > 1) {
			$links_patient[6] = array (
								'module' => '',
								'action' => '',
								'title_short' => _("Cycle éducatif en cours"),
								'title_long' => _("Voir le cycle éducatif en cours"),
								'active' => 1, 
								'submenu' => ''
									);
		}
		
		if (!empty ($_SESSION['patient']['targets'])) {
			foreach ($_SESSION['patient']['targets'] as $id_target => $features_target) {
				if ($features_target['target_done'] == 1) {
					$links_patient[1]['submenu'][] = array(
														'module' => 'patient_teaching',
														'action' => 'show_target&id_target='.$id_target,
														'title_short' => _("Objectif")." ".$id_target,
														'title_long' => _("Voir cet objectif éducatif"),
														'active' => 0
														);
				}
				else {
					$links_patient[1]['submenu'][] = array(
														'module' => 'patient_teaching',
														'action' => 'show_target&id_target='.$id_target,
														'title_short' => _("Objectif")." ".$id_target,
														'title_long' => _("Faire cet objectif éducatif"),
														'active' => 1
														);
				}
			}
		}
	}
}
?>

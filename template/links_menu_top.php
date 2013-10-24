  
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

/*************************************************
 * configuration of header top menu.
 * each item is associated with an array containing
 * informations for link's target ("module" and
 * "action") and link's title ("title").
 * Possibility of submenu with same model.
 *************************************************/

if (isset ($_SESSION['id_user'])) {
	$links_menu_top = array(
				0 => array('module' => 'start', 'action' => 'start_user', 'title' => _('Accueil')),
				1 => array('module' => 'start', 'action' => 'introduction', 'title' => _('Pourquoi ce site ?')),
				2 => array('module' => 'user_management', 'action' => 'show_profile', 'title' => _('Mon profil')),
				3 => array(
									'module' => 'user_teaching',
									'action' => 'show_teacher',
									'title' => _('Teacher pas à pas'),
									'submenu' => array(
												0 => array(
													'module' => 'user_teaching',
													'action' => 'create_eval',
													'title' => _("J'évalue mes compétences pour dispenser l'ETP"),
													'active' => 0
															),
												1 => array(
													'module' => 'user_teaching',
													'action' => 'show_essential',
													'title' => _("L'essentiel à savoir avant de commencer"),
													'active' => 0
															),
												2 => array(
													'module' => 'patient_teaching',
													'action' => 'show_educ_program',
													'title' => _("Le programme éducatif personnalisé"),
													'active' => 1
															),
												3 => array(
													'module' => 'user_teaching',
													'action' => 'create_eval',
													'title' => _("J'évalue mes compétences pour dispenser l'ETP en fin de programme"),
													'active' => 0
															),
												4 => array(
													'module' => 'user_teaching',
													'action' => 'show_essential',
													'title' => _("Je rafraîchis mes connaissances"),
													'active' => 1
															)											
												)
									),
				4 => array(
										'module' => 'patient_management',
										'action' => 'show_patient_list',
										'title' => _('Mes patients'),
										'submenu' => array(
													0 => array(
														'module' => 'patient_management',
														'action' => 'add_new_patient',
														'title' => _('Ajouter un patient'),
														'active' => 1
																),
													1 => array(
														'module' => 'patient_management',
														'action' => 'show_patient_list',
														'title' => _('Voir la liste de tous mes patients'),
														'active' => 1
																)
													)
										)
					);
					
	// to determine which item is active or not according to user's progress
	if ($_SESSION['user_validation_essential'] == 0) {
		$links_menu_top[3]['submenu'][2]['active'] = 0;
		$links_menu_top[3]['submenu'][4]['active'] = 0;
													
		$links_menu_top[4]['submenu'][0]['active'] = 0;
		$links_menu_top[4]['submenu'][1]['active'] = 0;
												
		if ($_SESSION['user_first_eval'] == 0) {
			$links_menu_top[3]['submenu'][0]['active'] = 1;
		}
		else {
			$links_menu_top[3]['submenu'][1]['active'] = 1;
		}
		
	}

	if ($_SESSION['user_eval_to_do'] == 1)
		$links_menu_top[3]['submenu'][3]['active'] = 1;
}

elseif (isset ($_SESSION['visitor'])) {
	$links_menu_top = array(
				0 => array('module' => 'start', 'action' => 'start_visitor', 'title' => _("Accueil")),
				1 => array('module' => 'patient_teaching', 'action' => 'show_target_list', 'title' => _("Objectifs pédagogiques")),
				2 => array('module' => 'patient_teaching', 'action' => 'show_eval', 'title' => _("Évaluation de l'enfant")),
				3 => array('module' => 'patient_teaching', 'action' => 'create_parent_eval', 'title' => _("Évaluation des parents"))
				);
}

?>

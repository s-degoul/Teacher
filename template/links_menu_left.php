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
 * Possibility of submenu with the same model.
 *************************************************/

if (isset ($_SESSION['id_user'])) {
	
	
	if (!isset ($_SESSION['patient'])) {		
		$links_user = array(
						0 => array(
							'module' => 'user_teaching',
							'action' => 'show_eval&first_eval=1',
							'title_short' => _("1- Je teste mes compétences"),
							'title_long' => _("Voir la première évaluation réalisée"),
							'active' => 1
									),
						1 => array(
							'module' => 'user_teaching',
							'action' => 'show_essential',
							'title_short' => _("2- L'essentiel à savoir"),
							'title_long' => _("L'essentiel à savoir avant de commencer"),
							'active' => 1
									),
						2 => array(
							'module' => 'patient_teaching',
							'action' => 'show_educ_program',
							'title_short' => _("3- Programme éducatif"),
							'title_long' => _("Parcourir un programme éducatif personnalisé"),
							'active' => 1
									),
						3 => array(
							'module' => 'user_teaching',
							'action' => 'create_eval',
							'title_short' => _("4- Je re-teste mes compétences"),
							'title_long' => _("Je ne pourrai re-tester mes compétences qu'après avoir achevé le programme éducatif d'un patient"),
							'active' => 0
									),
						4 => array(
							'module' => 'user_teaching',
							'action' => 'show_essential',
							'title_short' => _("5- Je rafraîchis mes connaissances"),
							'title_long' => _("Revoir l'essentiel à savoir"),
							'active' => 0
									)										
						);

		if ($_SESSION['user_validation_essential'] == 0) {
			$links_user[2]['active'] = 0;
			$links_user[3]['active'] = 0;
			$links_user[4]['active'] = 0;
													
			if ($_SESSION['user_first_eval'] == 0) {
				$links_user[0]['action'] = 'create_eval';
				$links_user[0]['active'] = 2;
				$links_user[0]['title_long'] = _("Je teste mes compétences à pratiquer l'ETP");
				$links_user[1]['active'] = 0;
			}
			else {
				$links_user[1]['active'] = 2;
			}
			
		}
		else {
			$links_user[1]['title_short'] = _("2- Rappel de l'essentiel");
			$links_user[1]['title_long'] = _("Rappel de l'essentiel à savoir");
			
			if ($_SESSION['user_eval_to_do'] == 1) {
				$links_user[3]['active'] = 2;
				$links_user[3]['title_long'] = _("Je teste mes compétences pour dispenser l'ETP en fin de programme");
			}
			else {
				if ($_SESSION['user_validation_essential'] == 2)
					$links_user[4]['active'] = 2;
				else
					$links_user[2]['active'] = 2;
				//~ $links_user[3] = array(
								//~ 'module' => 'user_teaching',
								//~ 'action' => 'show_summ_all_eval',
								//~ 'title_short' => _("4- Je re-teste mes compétences"),
								//~ 'title_long' => _("Voir les résultats de toutes les évaluations réalisées"),
								//~ 'active' => 1
								//~ );
			}
		}
		
		$links_patient = array();
	}
	
	
	
	
	
	else {
		$links_user = array();

		$nb_cycles_educ = count($_SESSION['patient']['cycles_educ']);

		$first_cycle_educ = reset ($_SESSION['patient']['cycles_educ']);
		$last_cycle_educ = end ($_SESSION['patient']['cycles_educ']);
		
		if (isset ($_GET['id_cycle_educ'])) {
			if ($_GET['id_cycle_educ'] == -1)
				$_SESSION['patient']['id_cycle_educ'] = $first_cycle_educ['id_cycle_educ'];
			else
				$_SESSION['patient']['id_cycle_educ'] = $_GET['id_cycle_educ'];
		}
		elseif (empty ($_SESSION['patient']['id_cycle_educ'])) {
			if ($_SESSION['patient']['synthesis_to_do'] == 1 and $nb_cycles_educ > 0)
				$_SESSION['patient']['id_cycle_educ'] = $last_cycle_educ['id_cycle_educ']-1;
			else
				$_SESSION['patient']['id_cycle_educ'] = $last_cycle_educ['id_cycle_educ'];
		}
		
//		if (!empty ($_SESSION['patient']['targets']))
//			unset ($_SESSION['patient']['targets']);
		
		
		//~ if (isset ($_GET['previous_cycles']) and $_GET['previous_cycles'] == 1)
			//~ $_SESSION['patient']['previous_cycles'] = 1;
		//~ elseif ($_SESSION['patient']['id_cycle_educ'] == $first_cycle_educ['id_cycle_educ']
				//~ or $_SESSION['patient']['id_cycle_educ'] == $last_cycle_educ['id_cycle_educ'])
			//~ unset ($_SESSION['patient']['previous_cycles']);

		$links_patient = array(
						0 => array(
							'module' => 'patient_teaching',
							'action' => 'show_educ_diag&id_cycle_educ=-1',
							'title_short' => _("1- Diagnostic éducatif"),
							'title_long' => _("Voir le diagnostic éducatif"),
							'active' => 1
							),
						1 => array(
							'module' => 'patient_teaching',
							'action' => 'show_summ_eval&type_eval=educ_diag&id_cycle_educ=-1',
							'title_short' => _("2- Contrat éducatif"),
							'title_long' => _("Voir le contrat éducatif (synthèse du diagnostic éducatif)"),
							'active' => 1
							),
						2 => array(
							'module' => 'patient_teaching',
							'action' => 'show_target_list&id_cycle_educ=-1',
							'title_short' => _("3- Séances éducatives"),
							'title_long' => _("Voir la liste des 10 objectifs pédagogiques"),
							'active' => 1
							),
						3 => array (
							'module' => 'patient_teaching',
							'action' => 'create_eval',
							'title_short' => _("4- Évaluation de l'enfant"),
							'title_long' => _("L'évaluation de l'enfant ne pourra être faite que quand tous les objectifs éducatifs seront validés"),
							'active' => 0
							),
						4 => array (
							'module' => 'patient_teaching',
							'action' => 'create_parent_eval',
							'title_short' => _("5- Évaluation des parents"),
							'title_long' => _("L'évaluation par les parents ne pourra être réalisée que lors de l'évaluation de l'enfant"),
							'active' => 0
							),
						5 => array (
							'module' => '',
							'action' => '',
							'title_short' => _("6- Synthèse"),
							'title_long' => _("Synthèse de l'évaluation de l'enfant"),
							'active' => 0
							),
						6 => array (
							'module' => 'patient_management',
							'action' => 'show_profile&previous_cycles=1',
							'title_short' => _("Suite..."),
							'title_long' => _("Après le programme éducatif"),
							'active' => 1,
							'submenu' => ''
							)
						);

		if ($_SESSION['patient']['educ_diag_done'] == 0) {
			$links_patient[0] = array(
								'module' => 'patient_teaching',
								'action' => 'create_educ_diag',
								'title_short' => _("1- Diagnostic éducatif"),
								'title_long' => _("Faire le diagnostic éducatif"),
								'active' => 2
								);
			$links_patient[1] = array(
								'module' => '',
								'action' => '',
								'title_short' => _("2- Contrat éducatif"),
								'title_long' => _("Ce sera la synthèse du diagnostic éducatif"),
								'active' => 0
								);
			
			$links_patient[2]['title_long'] = _("Elles seront faites après le diagnostic éducatif");
			$links_patient[2]['active'] = 0;
		}

		
		$num_cycle_menu = 0;
		
		foreach ($_SESSION['patient']['cycles_educ'] as $cycle_start_date => $features_cycle) {
			$num_cycle_menu ++;
			
			if ($num_cycle_menu == 1) {

				if ($nb_cycles_educ == 1) {
					if($_SESSION['patient']['synthesis_to_do'] == 1) {
						$links_patient[1]['active'] = 2;
						$links_patient[1]['title_long'] = _("Terminer le contrat éducatif");
						
						$links_patient[2]['title_long'] = _("Elles seront faites après avoir finalisé le contrat éducatif");
						$links_patient[2]['active'] = 0;
					}
					elseif ($_SESSION['patient']['eval_to_do'] == 1) {
						$links_patient[3]['active'] = 2;
						$links_patient[3]['title_long'] = _("Faire l'évaluation de l'enfant");
					}
					
				}
				else {
					$links_patient[3] = array(
										'module' => 'patient_teaching',
										'action' => 'show_eval&type_eval=cycle_educ_eval&id_cycle_educ='.$features_cycle['id_cycle_educ'],
										'title_short' => _("4- Évaluation de l'enfant"),
										'title_long' => _("Voir l'évaluation l'enfant"),
										'active' => 1
										);
					if (isset ($features_cycle['id_parent_eval']))
						$links_patient[4] = array(
											'module' => 'patient_teaching',
											'action' => 'show_parent_eval&id_parent_eval='.$features_cycle['id_parent_eval'],
											'title_short' => _("5- Évaluation des parents"),
											'title_long' => _("Voir l'évaluation des parents"),
											'active' => 1
											);
					else
						$links_patient[4]['title_long'] = _("L'évaluation des parents n'a pas été réalisée");
					
					$links_patient[5] = array(
										'module' => 'patient_teaching',
										'action' => 'show_summ_eval&type_eval=cycle_educ_eval'.'&id_cycle_educ='.$features_cycle['id_cycle_educ'],
										'title_short' => _("6- Synthèse"),
										'title_long' => _("Voir la synthèse de l'évaluation de l'enfant"),
										'active' => 1
										);
					
					if ($_SESSION['patient']['synthesis_to_do'] == 1 and $nb_cycles_educ == 2) {
						$links_patient[5]['active'] = 2;
						$links_patient[5]['title_long'] = _("Terminer la synthèse");
						if (!isset ($features_cycle['id_parent_eval'])) {
							$links_patient[4]['active'] = 2;
							$links_patient[4]['title_long'] = _("Faire l'évaluation des parents");
						}
					}
				}
				
				if (empty ($features_cycle['targets']) and (($nb_cycles_educ == 1 and $_SESSION['patient']['synthesis_to_do'] == 0 and $_SESSION['patient']['educ_diag_done'] == 1) or $nb_cycles_educ > 1)) {
					$links_patient[2]['active'] = 0;
					$links_patient[2]['title_long'] = _("Non applicable");
					$links_patient[3]['title_short'] = _("Évaluation du maintien des compétences");
				}
			}
			
			
			else {
				// educatif cycle without targets = assessment of skills at 6 months, or synthesis of previous cycle not achieved yet (-> not displayed in this case)
				if (empty ($features_cycle['targets']) and !($_SESSION['patient']['synthesis_to_do'] == 1 and $num_cycle_menu == $nb_cycles_educ)) {
					$links_patient[6]['submenu'][$cycle_start_date] = array(
																	'module' => 'patient_teaching',
																	'action' => 'show_eval&type_eval=cycle_educ_eval&id_cycle_educ='.$features_cycle['id_cycle_educ'],
																	'title_short' => _("Évaluation du maintien des compétences"),
																	'title_long' => _("Évaluation faite le ").showDate($features_cycle['cycle_educ_eval_date']),
																	'active' => 1
																	);
					
					if ($num_cycle_menu == $nb_cycles_educ and $_SESSION['patient']['eval_to_do'] == 1) {
						$links_patient[6]['submenu'][$cycle_start_date]['action'] = 'create_eval';
						$links_patient[6]['submenu'][$cycle_start_date]['title_long'] = _("Évaluation prévue en ").showDate($features_cycle['cycle_educ_eval_date'], 'month');
						$links_patient[6]['submenu'][$cycle_start_date]['active'] = 2;
					}
					
					if ($num_cycle_menu == $nb_cycles_educ -1 and $_SESSION['patient']['synthesis_to_do'] == 1) {
						$links_patient[6]['submenu'][$cycle_start_date]['action'] = 'show_summ_eval&type_eval=cycle_educ_eval&id_cycle_educ='.$features_cycle['id_cycle_educ'];
						$links_patient[6]['submenu'][$cycle_start_date]['title_long'] = _("Terminer la synthèse");
						$links_patient[6]['submenu'][$cycle_start_date]['active'] = 2;
					}
				}
				elseif (! empty ($features_cycle['targets'])) {
					$links_patient[6]['submenu'][$cycle_start_date] = array(
																	'module' => 'patient_management',
																	'action' => 'show_profile&id_cycle_educ='.$features_cycle['id_cycle_educ'],
																	'title_short' => _("Renforcement"),
																	'title_long' => _("Renforcement éducatif n°").'&nbsp;'.($num_cycle_menu - 1),
																	'active' => 1
																	);
				}
			}
			
			


			$list_target = array();
			if ($features_cycle['id_cycle_educ'] == $_SESSION['patient']['id_cycle_educ'] and !empty ($features_cycle['targets'])) {
				
				foreach ($features_cycle['targets'] as $id_target => $features_target) {
					
					$target = array(
								'module' => 'patient_teaching',
								'action' => 'show_target&id_target='.$id_target,
								'title_short' => _("Objectif")." ".$id_target
								);
					if ($features_target['cycle_target_done'] == 1
						or (isset ($_SESSION['patient']['targets'][$id_target]) and $_SESSION['patient']['targets'][$id_target]['target_done'] == 1)) {
						$target['title_long'] = _("Objectif éducatif validé");
						$target['active'] = 1;
						$_SESSION['patient']['targets'][$id_target]['target_done'] = 1;
					}
					else {
						$target['title_long'] = _("Faire cet objectif éducatif");
						$target['active'] = 2;
						$_SESSION['patient']['targets'][$id_target]['target_done'] = 0;
					}
					
					$list_target[] = $target;
				}
				
				
				if ($num_cycle_menu == 1) {
					$links_patient[2]['submenu'] = $list_target;
				}
				else {
					$links_patient[6]['submenu'][$cycle_start_date]['submenu'] = array (
												'targets' => array (
															'module' => 'patient_teaching',
															'action' => 'show_target_list',
															'title_short' => _("Séances éducatives"),
															'title_long' => _("Voir la liste des 10 objectifs pédagogiques"),
															'active' => 1,
															'submenu' => $list_target
															),
												'eval' => array (
															'module' => 'patient_teaching',
															'action' => 'show_eval&type_eval=cycle_educ_eval&id_cycle_educ='.$features_cycle['id_cycle_educ'],
															'title_short' => _("Évaluation après renforcement"),
															'title_long' => _("Voir l'évaluation après renforcement"),
															'active' => 1
															)
												);

					
					if ($_SESSION['patient']['eval_to_do'] == 1 and $num_cycle_menu == $nb_cycles_educ) {
						$links_patient[6]['submenu'][$cycle_start_date]['submenu']['eval'] = array (
													'module' => 'patient_teaching',
													'action' => 'create_eval',
													'title_short' => _("Évaluation après renforcement"),
													'title_long' => _("Faire l'évaluation après renforcement"),
													'active' => 2
													);
					}
						
					if ($_SESSION['patient']['synthesis_to_do'] == 1 and $num_cycle_menu == $nb_cycles_educ -1) {
						$links_patient[6]['submenu'][$cycle_start_date]['submenu']['eval'] = array (
														'module' => 'patient_teaching',
														'action' => 'show_summ_eval&type_eval=cycle_educ_eval&id_cycle_educ='.$features_cycle['id_cycle_educ'],
														'title_short' => _("Évaluation après renforcement"),
														'title_long' => _("Terminer la synthèse"),
														'active' => 2
														);
					}
				}
			}
		}


		if (empty ($links_patient[6]['submenu'])){
			
			$links_patient[6]['submenu'] = array(
										0 => array(
												'module' => '',
												'action' => '',
												'title_short' => _("Renforcement éducatif"),
												'title_long' => '',
												'active' => 0
												),
										1 => array(
												'module' => '',
												'action' => '',
												'title_short' => _("Évaluation du maintien des compétences"),
												'title_long' => _("Évaluation du maintien des compétences à 6 mois"),
												'active' => 0
												)
										);
			$links_patient[6]['active'] = 0;
		}	
	}
	
	ksort($links_user);
	ksort($links_patient);

}


//print_r($_SESSION['patient']); 

?>

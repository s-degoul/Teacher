<?php

$links_return = array (
					'target_5' => array ('link' => 'module=patient_teaching&action=show_target&id_target=5', 'title' => _("objectif éducatif n°5"), 'param' => array('from_type')),
					'target_6' => array ('link' => 'module=patient_teaching&action=show_target&id_target=6', 'title' => _("objectif éducatif n°6"), 'param' => array('from_type')),
					'show_device_eval' => array ('link' => 'module=patient_teaching&action=show_device_eval', 'title' => _("grilles d'évaluation des techniques d'inhalation des médicaments")),
					'create_educ_diag' => array ('link' => 'module=patient_teaching&action=create_educ_diag', 'title' => _("diagnostic éducatif"), 'param' => array('from_page_educ_diag')),
					'show_educ_diag' => array ('link' => 'module=patient_teaching&action=show_educ_diag', 'title' => _("diagnostic éducatif")),
					'show_eval' => array ('link' => 'module=patient_teaching&action=show_eval', 'title' => _("évaluation"), 'param' => array('from_page_eval', 'from_id_cycle_educ')),
					'show_user_eval' => array('link' => 'module=user_teaching&action=show_eval', 'title' => _("évaluation"), 'param' => array('from_id_user_eval')),
					'create_eval' => array ('link' => 'module=patient_teaching&action=create_eval', 'title' => _("évaluation"), 'param' => array ('from_page_eval')),
					'essential' => array ('link' => 'module=user_teaching&action=show_essential', 'title' => _("L'essentiel à savoir"), 'param' => array('from_page_essential')),
					'start_user' => array ('link' => 'module=start&action=start_user', 'title' => _("accueil")),
					'show_educ_program' => array('link' => 'module=patient_teaching&action=show_educ_program', 'title' => _("Aperçu du programme éducatif")),
					);

?>

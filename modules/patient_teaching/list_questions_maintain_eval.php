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


$list_questions = array (
					1 => array (
							'instruction' => _("Connais-tu tes signes de crise d’asthme ? (à comparer avec ceux identifiés et notés dans les caractéristiques de l’asthme de l’enfant) ? Connais-tu tes signes annonciateurs (= signes avant la crise) ?"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					2 => array (
							'instruction' => _("Connais-tu les signes de crise d’asthme grave ?"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					'3_a' => array (
							'instruction' => _("Que fais-tu quand tu ressens un début de crise d’asthme ?"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					'3_b' => array (
							'instruction' => _("Sais –tu où se trouve ton plan d’action personnalisé (PAPE) ?"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					'4_a' => array (
							'title' => _("Comprendre son corps et s’expliquer les mécanismes de l’asthme"),
							'instruction' => '',
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					'4_b' => array (
							'title' => _("Faire la différence entre son traitement de fond et traitement de crise (Comprendre l’intérêt de prendre son traitement de fond)"),
							'instruction' => _("Donne le nom du médicament que tu prends quand tu es gêné(e) pour respirer.  Quelle est sa couleur ? Donne le nom du médicament que tu prends tous les jours. Sais-tu à quoi il sert ?"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					5 => array (
							'instruction' => _("Montre-moi comment tu prends ton traitement inhalé"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					6 => array (
							'instruction' => _("Connais-tu ta valeur habituelle de débit de pointe (= mesure du souffle) ? Montre-moi comment tu mesures ton souffle avec le débitmètre de pointe."),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 1
													)
							),
					7 => array (
							'instruction' => _("En dessous de quel chiffre  dois-tu t’inquiéter ? ( seuil alerte)"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					'8_a' => array (
							//~ 'title' => _("Utiliser l’image de").' &laquo; <a href = \'.?module=patient_teaching&action=show_target&id_target=8&type=patient&from=create_eval\'>'._("la maison des allergies").'</a> &raquo;',
							'title' => _("Utiliser l’image de").' &laquo; <a href = \'.?module=patient_teaching&action=show_target&id_target=8&type=patient&from='.$_GET['action'].'&from_page_eval=8&from_id_cycle_educ='.$id_cycle_educ.'\'>'._("la maison des allergies").'</a> &raquo;',
							'instruction' => _("Dis moi les situations (allergies/irritants) qui te provoquent une crise d’asthme."),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					'8_b' => array (
							'title' => _("Aménager un environnement favorable à sa santé"),
							'instruction' => _("Dis moi ce que tu fais pour éviter que tes crises arrivent."),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					9 => array (
							'instruction' => _("Si l’enfant a un bronchospasme induit par l’exercice, lui demander les précautions qu’il prend pour l’éviter."),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					10 => array (
							'instruction' => _("Connais-tu les précautions que tu dois prendre quand tu es en dehors de la maison (école, vacances,...) ?"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					'asthmacontrol' => array ()
				);
?>

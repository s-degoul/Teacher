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

$title_view = _("Diagnostic éducatif");
$style[] = 'educ_diag';


if ($_GET['action'] == 'create_educ_diag') {
?>
<form action = '.?module=patient_teaching&action=create_educ_diag' method = 'post'>
<?php
}
?>

	<div class = 'target_image'>
<?php
	if (is_file (IMAGE_PATH.'obj'.$page_educ_diag.'-diag.gif')) {
?>
		<img src = '<?php echo IMAGE_PATH.'obj'.$page_educ_diag.'-diag.gif'; ?>' />
<?php
	}
?>
	</div>
	<p class = 'target_title'>
<?php
		if (isset ($list_target[$page_educ_diag]))
			$title_group_questions = $list_target[$page_educ_diag]['target_name'];
		elseif (isset ($list_group_questions[$page_educ_diag]['title']))
			$title_group_questions = $list_group_questions[$page_educ_diag]['title'];
			
		echo $title_group_questions;
?>
	</p>

<?php
	if (isset ($list_group_questions[$page_educ_diag]['subtitle'])) {
?>
	<p>
<?php
		echo $list_group_questions[$page_educ_diag]['subtitle'];
?>
	</p>
<?php
	}


	foreach ($list_group_questions as $num_group => $features_group) {
		$parts_num_group = explode ('_', $num_group);


	
		if ($parts_num_group[0] == $page_educ_diag) {

			foreach ($list_questions as $num_question => $features_question) {
				$parts_num_question = explode ('_', $num_question);
				if ($parts_num_question[0] >= $list_group_questions[$num_group]['first_question']
					and $parts_num_question[0] <= $list_group_questions[$num_group]['last_question']) {
?>		
	<div>
<!--		
		<div class = 'question_number'>	
<?php
					if (is_file (IMAGE_PATH.'num'.$num_question.'.gif')) {
?>
			<img src = '<?php echo IMAGE_PATH.'num'.$num_question.'.gif'; ?>' />
<?php
					}
?>
		</div>
-->
		<div class = 'question_number'>
<?php
					if (!preg_match('#_#', $num_question)) {
?>
			<span><?php echo $num_question; ?></span>
<?php
					}
?>
		</div>
		<div class = 'question'>
<?php
					$id_item = 'educ_diag_q'.$num_question;
?>
			<label for = '<?php echo $id_item; ?>'><?php echo $features_question['title']; ?></label>
<?php
					if (isset ($features_question['subtitle'])) {
?>
			<p class = 'question_detail'><?php echo $features_question['subtitle']; ?></p>
<?php
					}
?>
		</div>
		<div class = 'answer'>
<?php
					if (isset ($educ_diag[$id_item]))
						$value_item = $educ_diag[$id_item];
					else
						$value_item = '';



					switch ($features_question['type']) {
						
						
						case 'text' :
							if ($_GET['action'] == 'create_educ_diag') {
?>
			<input type = 'text' name = '<?php echo $id_item; ?>' id = '<?php echo $id_item; ?>' value = "<?php echo $value_item; ?>" size = '<?php echo $features_question['size']; ?>' />
<?php
							}
							elseif (!empty ($value_item)) {
?>
			<p class = 'answer_text'><?php echo $value_item; ?></p>
<?php
							}
							break;
							
						case 'textarea' :
							if ($_GET['action'] == 'create_educ_diag') {
?>
			<textarea name = '<?php echo $id_item; ?>' id = '<?php echo $id_item; ?>' rows = '4' cols = '<?php echo $features_question['size']; ?>'><?php echo $value_item; ?></textarea>
<?php
							}
							elseif (!empty ($value_item)) {
?>
			<p class = 'answer_text'><?php echo $value_item; ?></p>
<?php
							}
							break;
							
							
						case 'radio' :
							$checked_yes = $checked_no = '';
							if ($value_item === 0)
								$checked_no = 'checked';
							elseif ($value_item == 1)
								$checked_yes = 'checked';
?>	
			<input type = 'radio' name = '<?php echo $id_item; ?>' id = '<?php echo $id_item; ?>yes' value = 1 <?php echo $checked_yes; ?>>
			<label for = '<?php echo $id_item; ?>yes'><?php echo _("OUI"); ?></label>
			<input type = 'radio' name = '<?php echo $id_item; ?>' id = '<?php echo $id_item; ?>no' value = 0 <?php echo $checked_no; ?>>
			<label for = '<?php echo $id_item; ?>no'><?php echo _("NON"); ?></label>
<?php
							break;
							
							
						case 'other' :
						
						
							switch ($num_question) {
								
								
								case 12 : //5
								
									if ($_GET['action'] == 'create_educ_diag')
										$from_page = 'create_educ_diag';
									else
										$from_page = 'show_educ_diag';
?>
			<div class = 'device_image'>
				<a href = '?module=patient_teaching&action=create_device_eval&device=aerosolchb&from=<?php echo $from_page; ?>&from_page_educ_diag=5' >
					<img src = '<?php echo IMAGE_PATH; ?>appareil-asthme_01.gif'/>
					<p><?php echo _("aérosol doseur avec chambre"); ?></p>
				</a>
			</div>
			<div class = 'device_image'>
				<a href = '?module=patient_teaching&action=create_device_eval&device=aerosol&from=<?php echo $from_page; ?>&from_page_educ_diag=5'>
					<img src = '<?php echo IMAGE_PATH; ?>appareil-asthme_02.gif'/>
					<p><?php echo _("aérosol doseur sans chambre"); ?></p>
				</a>
			</div>
			<div class = 'device_image'>
				<a href = '?module=patient_teaching&action=create_device_eval&device=diskus&from=<?php echo $from_page; ?>&from_page_educ_diag=5'>
					<img src = '<?php echo IMAGE_PATH; ?>appareil-asthme_03.gif'/>
					<p><?php echo _("Diskus"); ?></p>
				</a>
			</div>
			<div class = 'device_image'>
				<a href = '?module=patient_teaching&action=create_device_eval&device=turbuhaler&from=<?php echo $from_page; ?>&from_page_educ_diag=5'>
					<img src = '<?php echo IMAGE_PATH; ?>appareil-asthme_04.gif'/>
					<p><?php echo _("Turbuhaler"); ?></p>
				</a>
			</div>
			<div class = 'device_image'>
				<a href = '?module=patient_teaching&action=create_device_eval&device=novolizer&from=<?php echo $from_page; ?>&from_page_educ_diag=5'>
					<img src = '<?php echo IMAGE_PATH; ?>appareil-asthme_05.gif'/>
					<p><?php echo _("Novolizer"); ?></p>
				</a>
			</div>
			<div class = 'device_image'>
				<a href = '?module=patient_teaching&action=create_device_eval&device=autohaler&from=<?php echo $from_page; ?>&from_page_educ_diag=5'>
					<img src = '<?php echo IMAGE_PATH; ?>appareil-asthme_06.gif'/>
					<p><?php echo _("Autohaler"); ?></p>
				</a>
			</div>
<?php						
									break;
									
									
								case 19 : //8_a
							
									$list_questions_19 = array (
														'allergens' => array (
																		'title' => _("Allergènes"),
																		'items' => array (1 => _("Acariens"), 2 => _("Animaux"), 3 => _("Moisissures"),
																				4 => _("Pollens"), 5 => _("Aliments"))
																		),
														'irritants' => array (
																		'title' => _("Irritants"),
																		'items' => array (6 => _("Tabac"), 7 => _("Pollution"), 8 => _("Brouillard"),
																				9 => _("Humidité"), 10 => _("Vent"), 11 => _("Odeurs"), 12 => _("Désodorisant"))
																		),
														'activities' => array (
																		'title' => _("Activités"),
																		'items' => array (13 => _("Effort"), 14 => _("Sport"), 15 => _("Sorties"))
																		),
														'others' => array (
																		'title' => _("Autres"),
																		'items' => array (16 => _("Infections"), 17 => _("Stress"))
																		)
													);
									foreach ($list_questions_19 as $group_question_19 => $features_group) {
?>
			<div>
				<p class = 'crisis_trigger_title'><?php echo $features_group['title']; ?></p>
				<div class = 'crisis_trigger_items'>
<?php
										foreach ($features_group['items'] as $nb_item => $title_item){
											$id_item = 'educ_diag_q19_'.$nb_item;
											if (isset ($educ_diag[$id_item]) and $educ_diag[$id_item] == 1)
												$checked = 'checked';
											else
												$checked = '';
?>
					<div class = 'crisis_trigger_item'>
						<input type = 'checkbox' name = '<?php echo $id_item; ?>' id = '<?php echo $id_item; ?>' value = '1' <?php echo $checked; ?> />
						<label for = '<?php echo $id_item; ?>'><?php echo $title_item; ?></label>
					</div>
<?php
										}
?>
				</div>
			</div>
<?php
									}

									break;
								
									
								case 20 : //8_b
							
									$list_questions_20 = array (
															1 => array (
																		'type' => 'text',
																		'title' => _("Est-ce que tu as une chambre pour toi tout seul ?")
																	),
															2 => array (
																		'type' => 'text',
																		'title' => _("Est ce que tu dors dans un lit superposé ? si oui, en haut ou en bas ?")
																	),
															3 => array (
																		'type' => 'checkbox',
																		'title' => _("Sais-tu en quoi est fait ton matelas ? ton oreiller ? ton traversin ? "),
																		'items' => array (3 => _("synthétique"), 4 => _("laine"), 5 => _("plumes"))
																	),
															6 => array (
																		'type' => 'text',
																		'title' => _("As-tu une housse anti-acariens ?")
																	),
															7 => array (
																		'type' => 'text',
																		'title' => _("Est ce qu’il y a des peluches ? combien ?")
																	),
															8 => array (
																		'type' => 'checkbox',
																		'title' => _("Qu’est ce qui recouvre le sol ?"),
																		'items' => array (8 => _("du balatum"), 9 => _("un tapis"), 10 => _("de la moquette"), 11 => _("du parquet"))
																	),
															12 => array (
																		'type' => 'text',
																		'title' => _("Est-ce que tu vis dans une maison ou dans un appartement ?")
																	),
															13 => array (
																		'type' => 'checkbox',
																		'title' => _("Est-ce que tu sais comment ton appartement/ ta maison est chauffé (e) ?"),
																		'items' => array (13 => _("chauffage central"), 14 => _("convecteur électrique"))
																	),
															15 => array (
																		'type' => 'checkbox',
																		'title' => _("As-tu un chauffage d’appoint ?"),
																		'items' => array (15 => _("chauffage au bois"), 16 => _("au charbon"), 17 => _("au pétrole"), 18 => _("au fuel"))
																	),
															19 => array (
																		'type' => 'text',
																		'title' => _("Y a-t-il des travaux actuellement ?")
																	),
															20 => array (
																		'type' => 'checkbox',
																		'title' => _("Est-ce qu’il y a"),
																		'items' => array (20 => _("des bougies parfumées"), 21 => _("des désodorisants"), 22 => _("de l'encens"))
																	),
															23 => array (
																		'type' => 'text',
																		'title' => _("As-tu un jardin ?")
																	),
															24 => array (
																'type' => 'text',
																'title' => _("Est-ce que quelqu’un fume à la maison ?")
															)
														);
									foreach ($list_questions_20 as $num_question => $features_question) {
										if ($num_question == 1) {
?>
			<div>
				<img src = '<?php echo IMAGE_PATH; ?>maison-neige.gif'/>
				<img src = '<?php echo IMAGE_PATH; ?>appartment.gif'/>
			</div>
			
			<p class = 'place_live'><?php echo _("Ta chambre"); ?> :</p>
<?php
										}
										elseif ($num_question == 12) {
?>
			<p class = 'place_live'><?php echo _("Ton appartement / ta maison"); ?> :</p>
<?php
										}
										
										if ($features_question['type'] == 'text') {
											$id_question = 'educ_diag_q20_'.$num_question;
											if (isset ($educ_diag[$id_question]))
												$value_question = $educ_diag[$id_question];
											else
												$value_question = '';
?>
			<div>
				<div class = 'place_live_question'>
					<label for= '<?php echo $id_question; ?>'><?php echo $features_question['title']; ?></label>
				</div>
				<div class = 'place_live_items'>
<?php
											if ($_GET['action'] == 'create_educ_diag') {
?>
					<input type = 'text' name = '<?php echo $id_question; ?>' id = '<?php echo $id_question; ?>' value = "<?php echo $value_question; ?>" size = 40 />
<?php
											}
											elseif (!empty ($value_question)) {
?>
					<p class = 'answer_text'><?php echo $value_question; ?></p>
<?php
											}
?>
				</div>
			</div>
<?php
										}
										
										elseif ($features_question['type'] == 'checkbox') {
?>
			<div>
				<div class = 'place_live_question'>
					<?php echo $features_question['title']; ?>
				</div>
				<div class = 'place_live_items'>
<?php
											foreach ($features_question['items'] as $nb_item => $title_item) {
												$id_item = 'educ_diag_q20_'.$nb_item;
												
												if (isset ($educ_diag[$id_item]) and $educ_diag[$id_item] ==1)
													$checked = 'checked';
												else
													$checked = '';
?>
					<input type = 'checkbox' name = '<?php echo $id_item; ?>' id = '<?php echo $id_item; ?>' value = '1' <?php echo $checked; ?>>
					<label for = '<?php echo $id_item; ?>'><?php echo $title_item; ?></label>
<?php
											}
?>
				</div>
			</div>
<?php
										}
									}
									break;
									
									
								case 24 :
									if (isset ($educ_diag['educ_diag_subj_patient']))
										$value_subj_patient = $educ_diag['educ_diag_subj_patient'];
									else
										$value_subj_patient = '';
										
									if (isset ($educ_diag['educ_diag_subj_parent']))
										$value_subj_parent = $educ_diag['educ_diag_subj_parent'];
									else
										$value_subj_parent = '';
?>
			<p><?php echo _("Sur une échelle de 0 à 27, à quel niveau te placerais-tu, en sachant que 20 est la limite entre l’asthme contrôlé et l’asthme non contrôlé ?") ;?></p>
			<p>
				<img src = '<?php echo IMAGE_PATH; ?>scale_control_asthma.jpg' alt = '<?php echo _("échelle de contrôle de l'asthme"); ?>' width = 400px />
				<label for = 'educ_diag_subj_patient'><?php echo _("score de contrôle subjectif enfant"); ?> = </label>
<?php
									if ($_GET['action'] == 'create_educ_diag') {
?>
				<input type = 'text' name = 'educ_diag_subj_patient' id = 'educ_diag_subj_patient' size = 4 value = "<?php echo $value_subj_patient; ?>" maxlength = 2 />
<?php
									}
									else {
?>
				<span class = 'answer_text'>
<?php
										echo $value_subj_patient;
?>
				</span>
<?php
									}
?>
			</p>
			<p><?php echo _("Posez la même question aux parents"); ?></p>
			<p>
				<img src = '<?php echo IMAGE_PATH; ?>scale_control_asthma.jpg' alt = '<?php echo _("échelle de contrôle de l'asthme"); ?>' width = 400px />
				<label for = 'educ_diag_subj_parent'><?php echo _("score de contrôle subjectif parent(s)"); ?> = </label>
<?php
									if ($_GET['action'] == 'create_educ_diag') {
?>
				<input type = 'text' name = 'educ_diag_subj_parent' id = 'educ_diag_subj_parent' size = 4 value = "<?php echo $value_subj_parent; ?>" maxlength = 2 />
<?php
									}
									else {
?>
				<span class = 'answer_text'>
<?php
										echo $value_subj_parent;
?>
				</span>
<?php
									}
?>
			</p>
<?php
									break;
									
									
								case 25 :
									if (isset ($_GET['cact_score']) and is_numeric($_GET['cact_score']) and $_GET['cact_score'] <= 27)
										$value_cact = $_GET['cact_score'];
									elseif (isset ($educ_diag['educ_diag_cact']))
										$value_cact = $educ_diag['educ_diag_cact'];
									else
										$value_cact = '';
?>

			<p><?php echo _("Faites remplir ou lire à haute voix ce questionnaire par l’enfant pour les 4 premières questions et par sa famille pour les 3 suivantes"); ?>
<?php
									if ($_GET['action'] == 'create_educ_diag') {
?>
				<input type = 'submit' name = 'valid_cact' value = "<?php echo _("cliquez ici pour une aide au calcul du cACT"); ?>" class = 'link' />
<?php
									}
									else {
?>
				(<a href = '.?module=patient_teaching&action=show_cACT&from=show_educ_diag' ><?php echo _("voir le cACT"); ?></a>)
<?php
									}
?>
			</p>
			<p>
				<img src = 'images/scale_control_asthma.jpg' alt = '<?php echo _("échelle de contrôle de l'asthme"); ?>' width = 400px />
				<label for = 'educ_diag_cact'><?php echo _("score de contrôle objectif"); ?> = </label>
<?php
									if ($_GET['action'] == 'create_educ_diag') {
?>
				<input type = 'text' name = 'educ_diag_cact' id = 'educ_diag_cact' size = 4 value = "<?php echo $value_cact; ?>" maxlength = 2 />
<?php
									}
									else {
?>
				<span class = 'answer_text'>
<?php
										echo $value_cact."\n";
?>
				</span>
<?php
									}
?>	
			</p>
<?php
									break;
							}
							break;
					}
?>
		</div>
	</div>

<?php
				}
			}






			if (isset ($list_group_questions[$num_group]['validation_items'])) {
?>
		<div class = 'validation'>
			<p class = 'validation_title'><?php echo _("Objectif").' '.$page_educ_diag; ?>
<?php 
			if (isset ($parts_num_group[1]))
				echo ' '.$parts_num_group[1];
?>
			:</p>
<?php

				foreach ($list_group_questions[$num_group]['validation_items'] as $name_item => $value_item) {
					switch ($name_item) {
						case 'non_valid' :
							$title_item = _("Non acquis");
							break;
						case 'partially_valid' :
							$title_item = _("Partiellement acquis");
							break;
						case 'valid' :
							$title_item = _("Acquis");
							break;
					}
					
					if (isset ($educ_diag['educ_diag_obj'.$num_group]) and $educ_diag['educ_diag_obj'.$num_group] == $value_item)
						$checked = 'checked';
					else
						$checked = '';
					
					if (!is_string ($value_item)) {
?>
			<p class = 'validation_item'>
<?php
						if ($_GET['action'] == 'create_educ_diag') {
?>
				<input type = 'radio' name = 'educ_diag_obj<?php echo $num_group; ?>' id = 'valid_obj_<?php echo $num_group.'_'.$value_item; ?>' value = '<?php echo $value_item; ?>' <?php echo $checked; ?> />
				<label for = 'valid_obj_<?php echo $num_group.'_'.$value_item; ?>'><?php echo $title_item; ?></label>
<?php
						}
						elseif ($checked == 'checked') {
?>
				<img src = '<?php echo IMAGE_PATH.'icon_'.$name_item; ?>' alt = "<?php echo $name_item; ?>" width = 25px;/> <?php echo $title_item; ?>
<?php
						}
?>
			</p>
<?php
					}
				}
?>
		</div>
<?php	
			}



		}
	}
?>

		<div>
<?php
	if ($_GET['action'] == 'create_educ_diag') {
?>
			<input type = 'hidden' name = 'target_educ_diag' value = '<?php echo $page_educ_diag; ?>' />
			<input class = 'button_cancel' type = 'submit' name = 'valid_last_page' value = "<?php echo _("Enregistrer et revenir à l'étape précédente"); ?>" />
			
<?php
	if ($page_educ_diag == 'asthmacontrol')
		$text_button_validation = _("Terminer et valider le diagnostic éducatif");
	else
		$text_button_validation = _("Enregistrer et aller à l'étape suivante");
?>
			<input class = 'button_validation' type = 'submit' name = 'valid_next_page' value = "<?php echo $text_button_validation; ?>" />

		</div>
</form>

<?php
	}
?>

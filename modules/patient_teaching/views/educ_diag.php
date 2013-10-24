  
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


﻿<?php
$title_view = _("Diagnostic éducatif");
$style[] = 'educ_diag';
	
?>

<?php

		
if (isset ($list_target[$page_educ_diag]))
	$title_group_questions = $list_target[$page_educ_diag]['target_name'];
else
	$title_group_questions = $list_group_questions[$page_educ_diag]['title'];


if ($_GET['action'] == 'create_educ_diag') {
	
	if (isset ($list_group_questions[$page_educ_diag]['next_group_questions']))
		$next_group_questions = $list_group_questions[$page_educ_diag]['next_group_questions'];
	else
		$next_group_questions = (int) $page_educ_diag + 1;

	echo '<form action=\'.?module=patient_teaching&action=create_educ_diag&page_educ_diag='.$next_group_questions.'\'
			method=\'post\'>';
}
?>		
	<div class="educ_diag_objimg">
<?php
	if (is_file ('images/obj'.$page_educ_diag.'-diag.gif'))
		echo'	<img src=\'images/obj'.$page_educ_diag.'-diag.gif\' />'."\n";
?>
	</div>
	<div class="educ_diag_objectivetitle">
		<?php echo $title_group_questions; ?>
	</div>

<?php
	if (isset ($list_group_questions[$page_educ_diag]['subtitle']))
		echo $list_group_questions[$page_educ_diag]['subtitle'];


	foreach ($list_group_questions as $nb_group => $features_group) {
		$parts_nb_group = explode ('_', $nb_group);
		if ($parts_nb_group[0] == $page_educ_diag) {

			foreach ($list_questions as $nb_question => $features_question) {
				$parts_nb_question = explode ('_', $nb_question);
				if ($parts_nb_question[0] >= $list_group_questions[$nb_group]['first_question']
					and $parts_nb_question[0] <= $list_group_questions[$nb_group]['last_question']) {
?>		
	<p>
		
		<div class="educ_diag_logoimg">&nbsp;	
<?php
					if (is_file ('images/num'.$nb_question.'.gif')) {
						echo '			<img src=\'images/num'.$nb_question.'.gif\'/>';
					}
?>
		</div>
		<div class="educ_diag_question">
<?php
					$id_item = 'educ_diag_q'.$nb_question;
					
					echo '		<label for=\''.$id_item.'\'>'.$features_question['title'].'</label>'."\n";
					
					if (isset ($features_question['subtitle'])) {
						echo '		<div class=\'educ_diag_othertext\'>'.$features_question['subtitle'].'</div>'."\n";
					}
?>
		</div>
		<div class="educ_diag_answer">
<?php
					if (isset ($educ_diag[$id_item]))
						$value_item = $educ_diag[$id_item];
					else
						$value_item = '';

					switch ($features_question['type']) {
						case 'text' :
							if ($_GET['action'] == 'create_educ_diag')
								echo '			<input type = \'text\' name = \''.$id_item.'\' id = \''.$id_item.'\' value = \''.$value_item.'\'
												size = '.$features_question['size'].' />'."\n";
							else
								echo '			<p>'.$value_item.'</p>'."\n";
							break;
						case 'radio' :
							$checked_yes = $checked_no = '';
							if ($value_item === 0)
								$checked_no = 'checked';
							elseif ($value_item == 1)
								$checked_yes = 'checked';
								
							echo '			<input type = \'radio\' name = \''.$id_item.'\' id = \''.$id_item.'yes\' value=1>
											<label for = \''.$id_item.'yes\' '.$checked_yes.'>OUI</label>'."\n";
							echo '			<input type = \'radio\' name = \''.$id_item.'\' id = \''.$id_item.'no\' value=0>
											<label for = \''.$id_item.'no\' '.$checked_no.'>NON</label>'."\n";
							break;
						case 'other' :
							switch ($nb_question) {
								case 12 : //5
								
									if ($_GET['action'] == 'create_educ_diag')
										$from_page = 'create_educ_diag';
									else
										$from_page = 'show_educ_diag';
?>
			<div class="educ_diag_otherimg">
				<div class="educ_diag_otherimg_list">
					<a href = '?module=patient_teaching&action=create_device_eval&device=aerosolchb&from=<?php echo $from_page; ?>' >
						<img src="images/appareil-asthme_01.gif"/></a></br>
					<?php echo _("aérosol doseurs avec chambre"); ?>
				</div>
				<div class="educ_diag_otherimg_list">
					<a href = '?module=patient_teaching&action=create_device_eval&device=aerosol&from=<?php echo $from_page; ?>'>
						<img src="images/appareil-asthme_02.gif"/></a></br>
					<?php echo _("aérosel doseur sans chambre"); ?>
				</div>
				<div class="educ_diag_otherimg_list">
					<a href = '?module=patient_teaching&action=create_device_eval&device=diskus&from=<?php echo $from_page; ?>'>
						<img src="images/appareil-asthme_03.gif"/></a></br>
					<?php echo _("Diskus"); ?>
				</div>
				<div class="educ_diag_otherimg_list">
					<a href = '?module=patient_teaching&action=create_device_eval&device=turbuhaler&from=<?php echo $from_page; ?>'>
						<img src="images/appareil-asthme_04.gif"/></a></br>
					<?php echo _("Turbuhaler"); ?>
				</div>
				<div class="educ_diag_otherimg_list">
					<a href = '?module=patient_teaching&action=create_device_eval&device=novolizer&from=<?php echo $from_page; ?>'>
						<img src="images/appareil-asthme_05.gif"/></a></br>
					<?php echo _("Novolizer"); ?>
				</div>
				<div class="educ_diag_otherimg_list">
					<a href = '?module=patient_teaching&action=create_device_eval&device=autohaler&from=<?php echo $from_page; ?>'>
						<img src="images/appareil-asthme_06.gif"/></a></br>
					<?php echo _("Autohaler"); ?>
				</div>
			</div>
<?php						
									break;
									
								case 19 : //8_a
							
								$list_questions_19 = array (
														'allergens' => array (
																		'title' => _("allergènes"),
																		'items' => array (1 => _("Acariens"), 2 => _("Animaux"), 3 => _("Moisissures"),
																				4 => _("Pollens"), 5 => _("Aliments"))
																		),
														'irritants' => array (
																		'title' => _("irritants"),
																		'items' => array (6 => _("Tabac"), 7 => _("Pollution"), 8 => _("Brouillard"),
																				9 => _("Humidités"), 10 => _("Vent"), 11 => _("Odeurs"), 12 => _("Désodorisants"))
																		),
														'activities' => array (
																		'title' => _("activités"),
																		'items' => array (13 => _("Efforts"), 14 => _("Sports"), 15 => _("Sorties"))
																		),
														'others' => array (
																		'title' => _("autres"),
																		'items' => array (16 => _("Infections"), 17 => _("Stress"))
																		)
													);
									foreach ($list_questions_19 as $group_question_19 => $features_group) {
										echo'			<div class=\'educ_diag_othertext4\'>'."\n"
											.'				<p>'.$features_group['title'].'</p>'."\n";
										foreach ($features_group['items'] as $nb_item => $title_item){
											$id_item = 'educ_diag_q19_'.$nb_item;
											if (isset ($educ_diag[$id_item]) and $educ_diag[$id_item] == 1)
												$checked = 'checked';
											else
												$checked = '';
										
											echo '				<input type=\'checkbox\' name=\''.$id_item.'\' id=\''.$id_item.'\' value=\'1\' '.$checked.'>'
												.'<label for = \''.$id_item.'\'>'.$title_item.'</label>'."\n";
										}
										echo'			</div>'."\n";

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
																		'items' => array (8 => _("du balatum ?"), 9 => _("un tapis ?"),
																						10 => _("de la moquette ?"), 11 => _("du parquet ?"))
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
																		'items' => array (15 => _("chauffage au bois"), 16 => _("au charbon"),
																						17 => _("au pétrole"), 18 => _("au fuel"))
																	),
															19 => array (
																		'type' => 'text',
																		'title' => _("Y a-t-il des travaux actuellement ?")
																	),
															20 => array (
																		'type' => 'checkbox',
																		'title' => _("Est-ce qu’il y a"),
																		'items' => array (20 => _("des bougies parfumées"), 21 => _("des désodorisants"),
																						22 => _("de l'encens"))
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
									foreach ($list_questions_20 as $nb_question => $features_question) {
										if ($nb_question == 1)
											echo '			<div class=\'educ_diag_q10\'>'."\n"
												.'				<div class=\'educ_diag_logoimg_q10\'>'."\n"
												.'					<img src="images/maison-neige.gif"/>'."\n"
												.'				</div>'."\n"
												.'				<div class="educ_diag_question_q10">'."\n"
												.'					<p><font color="green"> Ta chambre : </font></p>'."\n";
										elseif ($nb_question == 12)
											echo '				</div>'."\n"
												.'			</div>'."\n"
												.'			<div class=\'educ_diag_q10\'>'."\n"
												.'				<div class=\'educ_diag_q10_imgright\'>'."\n"
												.'					<img src=\'images/appartment.gif\'>'."\n"				
												.'				</div>'."\n"
												.'				<p><font color="green"> Ton appartement / ta maison : </font></p>'."\n";
											
										echo '			<div class=\'educ_diag_othertext3\'>'."\n";
										
										if ($features_question['type'] == 'text') {
											$id_question = 'educ_diag_q20_'.$nb_question;
											if (isset ($educ_diag[$id_question]))
												$value_question = $educ_diag[$id_question];
											else
												$value_question = '';
												
											echo '					<label for=\''.$id_question.'\'>'.$features_question['title'].'</label>'."\n";
											if ($_GET['action'] == 'create_educ_diag')
												echo '					<input type=\'text\' name=\''.$id_question.'\' id=\''.$id_question.'\'
																			value=\''.$value_question.'\' size="40"/>'."\n";
											else
												echo '					<p>'.$value_question.'</p>'."\n";
										}
										elseif ($features_question['type'] == 'checkbox') {
											echo '			<div>'.$features_question['title']."\n";
											foreach ($features_question['items'] as $nb_item => $title_item) {
												$id_item = 'educ_diag_q20_'.$nb_item;
												
												if (isset ($educ_diag[$id_item]) and $educ_diag[$id_item] ==1)
													$checked = 'checked';
												else
													$checked = '';
													
												echo '				<input type=\'checkbox\' name=\''.$id_item.'\' id=\''.$id_item.'\' value=\'1\' '.$checked.'>'
													.'<label for = \''.$id_item.'\'>'.$title_item.'</label>'."\n";
											}
											echo '			</div>'."\n";
										}
										
										echo '			</div>'."\n";
									}
									echo '			</div>'."\n";
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
								
									echo '			<div><img src = \'images/scale_control_asthma.jpg\' alt = \''._("échelle de contrôle de l'asthme").'\'/>';
									if ($_GET['action'] == 'create_educ_diag')
										echo '				<input type = \'text\' name = \'educ_diag_subj_patient\' id = \'educ_diag_subj_patient\' size = 4 
															value = \''.$value_subj_patient.'\' />'."\n";
									else
										echo '				'.$value_subj_patient."\n";
										
									echo '				<label for = educ_diag_subj_patient>'._("score de contrôle subjectif enfant").'</label>'."\n";
									echo '			</div>'."\n";
									echo '			<div>'._("Posez la même question aux parents").'</div>'."\n";
									echo '			<div><img src = \'images/scale_control_asthma.jpg\' alt = \''._("échelle de contrôle de l'asthme").'\'/>';
									if ($_GET['action'] == 'create_educ_diag')
										echo '				<input type = \'text\' name = \'educ_diag_subj_parent\' id = \'educ_diag_subj_parent\' size = 4 
															value = \''.$value_subj_parent.'\' />'."\n";
									else
										echo '				'.$value_subj_parent."\n";
										
									echo '				<label for = educ_diag_subj_parent>'._("score de contrôle subjectif parent(s)").'</label>'."\n";
									echo '			</div>'."\n";
									break;
									
								case 25 :
									if (isset ($educ_diag['educ_diag_cact']))
										$value_cact = $educ_diag['educ_diag_cact'];
									else
										$value_cact = '';
								
									echo '				<p>'._("Faites remplir ou lire à haute voix ce questionnaire")
															.' (<a href = \'.?module=patient_teaching&action=show_cACT&from='.$_GET['action'].'\'>'._("cliquez ici").'</a>) '
															._("par l’enfant pour les 4 premières questions	et par sa famille pour les 3 suivantes").'</p>'."\n";
									echo '			<div><img src = \'images/scale_control_asthma.jpg\' alt = \''._("échelle de contrôle de l'asthme").'\'/>';
									if ($_GET['action'] == 'create_educ_diag')
										echo '				<input type = \'text\' name = \'educ_diag_cact\' id = \'educ_diag_cact\' size = 4 
															value = \''.$value_cact.'\' />'."\n";
									else
										echo '				'.$value_cact."\n";
										
									echo '				<label for = educ_diag_cact>'._("score de contrôle objectif").'</label>'."\n";
									echo '			</div>'."\n";
									break;
							}
							break;
					}
?>
		</div>
	</p>

<?php
				}
			}
?>

<?php
			if (isset ($list_group_questions[$nb_group]['items_validation'])) {
?>
		<div class="educ_diag_answerobj">
			<p><em>
<?php 
			if (isset ($parts_nb_group[1]))
				echo _("Objectif").' '.$page_educ_diag.' '.$parts_nb_group[1];
			else
				echo _("Objectif").' '.$page_educ_diag;

?>
			:</em></p>
<?php

				foreach ($list_group_questions[$nb_group]['items_validation'] as $name_item => $value_item) {
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
					
					if (isset ($educ_diag['educ_diag_obj'.$nb_group]) and $educ_diag['educ_diag_obj'.$nb_group] == $value_item)
						$checked = 'checked';
					else
						$checked = '';
					
					if (!is_string ($value_item))
						echo '			<p><input type = \'radio\' name = \'educ_diag_obj'.$nb_group.'\'
										id = \'valid_obj'.$value_item.'\' value = \''.$value_item.'\' '.$checked.' />
										<label for = \'valid_obj'.$value_item.'\'>'.$title_item.'</label></p>';
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
		echo'			<input type=\'hidden\' name = \'target_educ_diag\' value = \''.$page_educ_diag.'\' />'."\n";
		echo'			<input type=\'submit\' name=\'valid_educ_diag\' id=\'valid_educ_diag\' value=\''._("page suivante").'\' />'."\n";
	}
?>

		</div>
</form>


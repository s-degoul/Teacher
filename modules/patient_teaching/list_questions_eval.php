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
							'instruction' => _("Montrez à l’enfant la planche avec les illustrations des signes de crise mêlés").' (<a href=\''.CheckPDFExists('t1_all_asthma_signs').'\' target=\'blank\'>'._("télécharger").'</a>). '._("Demandez lui de désigner les signes qu’il ressent en cas de crise d’asthme et les signes avant la crise."),
							'validation_conditions' => _("L’objectif 1 est validé s’il choisit au moins 2 images correspondant à ses signes propres de crise, qui ont été identifiés au moment du Diagnostic Educatif ou de la séance sur l’objectif 1"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					2 => array (
							'instruction' => _("Montrez à l’enfant la planche avec les illustrations des signes de crise mêlés, demandez lui de désigner les signes qu’il ressent en cas de crise grave et ce qu’il doit faire en ce cas"),
							'question_answer' => array (
												_("Difficulté à parler, gêne respiratoire importante, traitement bronchodilatateur inefficace, DEP < 60 % de la valeur normale (zone rouge"),
												_("Prévenir l’entourage qu’il faut consulter immédiatement un médecin ou appeler le service médical d’urgence")
												),
							'validation_conditions' => _("L’objectif 2 validé s’il dit 1 des 4 signes énoncés ci-dessus et qu’il prévient immédiatement quelqu’un quand il les ressent"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					'3_a' => array (
							'title' => '',
							'real_life_situation' => _("tu es à la maison et tu te rends compte que tu commences une crise d’asthme. Que fais-tu ? A chaque étape de la réponse on peut solliciter l’enfant en lui disant : « Et si ça ne passe pas,  que dois-tu faire ?»"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					'3_b' => array (
							'title' => _("Le plan d'action personnalisé"),
							'question_answer' => array (
													_("As-tu un document qui s’appelle « Plan d’Action Personnalisé » et qui explique ce qu’il faut faire en cas de gêne respiratoire
													ou de crise d’asthme débutante? Où se trouve-t-il ?") => 0
													),
							'validation_conditions' => _("L’objectif 3b « plan d’action » est validé si l’enfant sait où il se trouve"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					'4_a' => array (
							'title' => _("Comprendre son corps et s’expliquer les mécanismes de l’asthme"),
							'instruction' => _("Montrez la planche &laquo; comprendre son corps &raquo;").' (<a href=\''.CheckPDFExists('t4_asthma_physiopathology').'\' target=\'blank\'>'._("télécharger").'</a>). ',//.' ( <a href=\'.?module=patient_teaching&action=show_target&id_target=4&from='.$_GET['action'].'\'>'._("objectif 4").'</a> )',
							'question_answer' => array (
												_("Demandez à l’enfant s’il a une idée de l’endroit du corps qui est malade quand on fait de l’asthme")
													=> _("« bronches », et si répond uniquement « poumons » lui faire préciser
														« Sais-tu quel endroit exactement dans les poumons ? »"),
												_("Comment est la bronche en cas de crise ?")
													=> _("« resserrée » ( spasmée)"),
												_("Comment est ta bronche en dehors des crises?")
													=> _("« Gonflée » (enflammée)")
											),
							'validation_conditions' => _("- validé si répond aux 3 questions (maladie des bronches / bronche serrée en cas de crise / bronche inflammatoire en dehors des crises)<br/>
															- partiellement validé si 1 ou 2 réponses exactes<br/>
															- non validé si ne sait pas que l’asthme est une maladie des bronches"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					'4_b' => array (
							'title' => _("Faire la différence entre son traitement de fond et traitement de crise (Comprendre l’intérêt de prendre son traitement de fond)"),
							'instruction' => _("Montrez à l’enfant pèle-mêle tous les médicaments inhalés. Vérifiez que son bronchodilatateur et son traitement de fond figurent parmi eux.
											Demandez à l’enfant de montrer le médicament en cas de gêne respiratoire et celui qu’il prend tous les jours.
											Prends-tu un autre traitement ? Quand ? Pourquoi ?"),
							'validation_conditions' => _("- validé s’il reconnait son broncho dilatateur d’action rapide ET a bien reconnu son traitement de fond,
														sait qu’il doit le prendre tous les jours et qu’il sert à réparer l’inflammation des bronches<br/>
															- partiellement validé si connait son traitement de crise et ne connaît pas le traitement de fond ou  son action<br/>
															- non validé si ne reconnait pas son traitement de crise"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					5 => array (
							'instruction' => _("Présentez le dispositif d’inhalation factice ou vide qui correspond à celui utilisé habituellement par l’enfant.
												Demandez-lui de mimer la façon dont il prend son médicament inhalé et comparez-la à la grille d’évaluation du dispositif correspondant").' ( <a href=\'.?module=patient_teaching&action=show_target&id_target=5&from='.$_GET['action'].'&from_page_eval=5&from_id_cycle_educ='.$id_cycle_educ.'\'>'._("voir les grilles des dispositifs d'inhalation").'</a> )',
							'validation_conditions' => _("validé si l’enfant est capable d’inhaler son médicament en respectant toutes les étapes de la grille"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 2
													)
							),
					6 => array (
							'instruction' => _("Présentez à l’enfant son débitmètre de pointe et demandez-lui de mesurer son souffle.
												Comparez sa technique avec la grille d’évaluation").' ( <a href=\'.?module=patient_teaching&action=create_peakflow_use&from='.$_GET['action'].'&from_page_eval=6\'>'._("voir ici").'</a> )',
							'validation_conditions' => _("- validé si l’enfant reproduit toutes les étapes<br/>
															- partiellement validé si 1 erreur (sauf «je me mets debout»)<br/>
															- non validé si 2 erreurs ou plus"),
							'validation_items' => array (
													'non_valid' => 0,
													'valid' => 1
													)
							),
					'6_bonus' => array (
							'title' => _("Q bonus : quand dois-tu mesurer ton DEP ?"),
							'question_answer' => array (
												_("au moins une fois par mois et en cas de gêne respiratoire, de pic de pollution ou brouillard,
													et parfois avant le sport")
											)
							),
					7 => array (
							'instruction' => _("Quel est ton chiffre de DEP normal, habituel, celui en dehors des crises ?<br/>
												Quel est ton chiffre d’alerte, c’est-à-dire celui en dessous duquel tu ne dois pas descendre ?<br/>
												Que fais tu quand la mesure de ton souffle est en dessous de ton chiffre d’alerte ?"),
							'validation_conditions' => _("- validé si l’enfant: connaît son chiffre habituel  et son chiffre d’alerte et s’il sait que,
															quand il a un DEP inférieur à son chiffre d’alerte , il doit le signaler à son entourage
															et/ou prendre son traitement de secours matin midi et soir<br/>
															- Partiellement validé si connaît son chiffre habituel  et son chiffre d’alerte, mais ne sait pas ce qu’il doit faire<br/>
															- Non validé dans les autres cas"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					'8_a' => array (
							'title' => _("Utiliser l’image de").' &laquo; <a href = \'.?module=patient_teaching&action=show_target&id_target=8&type=patient&from='.$_GET['action'].'&from_page_eval=8&from_id_cycle_educ='.$id_cycle_educ.'\'>'._("la maison des allergies").'</a> &raquo;',
							'instruction' => _("Montre-moi sur l’image ce qui déclenche tes gênes respiratoires ou tes crises"),
							'validation_conditions' => _("validé si l’enfant retrouve les facteurs déclenchant ses crises d’asthme,
														qui ont été identifiés lors du diagnostic éducatif ou de la séance sur l’objectif 8"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					'8_b' => array (
							'title' => _("Aménager un environnement favorable à sa santé"),
							'instruction' => _("Demandez à l’enfant : « A ton avis, que faut-il faire pour éviter ou limiter les allergènes
												ou les irritants  qui déclenchent tes gênes respiratoires ou tes crises ? »"),
							'validation_conditions' => _("validé :<br/>
															- Si l’enfant allergique  aux acariens  sait qu’il faut éviter la poussière et aérer la chambre<br/>
															- Si l’enfant est allergique aux animaux sait qu’il doit éviter les contacts avec eux<br/>
															- Si l’enfant allergique aux pollens connaît la période de l’année où il risque de faire des crises quand il va jouer dehors<br/>
															- Si l’enfant est sujet aux infections ORL, sait qu’il doit se nettoyer le nez au serum physiologique puis se moucher et se laver les mains régulièrement<br>
															- Si l’enfant est gêné par les irritants (peinture, tabac) il doit s’éloigner des fumeurs et des irritants<br/>
															- Si l’enfant est gêné à l’effort ou lors d’activités physiques, voir objectif 9"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					9 => array (
							'title_extension' => _("(à n’aborder que si l’enfant a un bronchospasme induit par l’exercice)"),
							'real_life_situation' => _("Un cross va être bientôt organisé à l’école. Ton professeur a décidé de commencer les entraînements. Tu sais que, lorsque tu cours, tu es gêné(e) pour respirer. Que peux-tu faire pour éviter que cela n’arrive pendant le cross ?"),
							'question_answer' => array (_("s’échauffer progressivement ; si mon médecin me l’a conseillé,
															prendre 2 bouffées de bronchodilatateur d’action immédiate ou rapide avant le sport ; pas de sport quand je ressens des signes de gêne respiratoire")
													),
							'validation_conditions' => _("- Validé si l’enfant sait qu’il doit s’échauffer progressivement et prendre son bronchodilatateur avant le sport<br/>
															- Partiellement validé si énonce un des 2 items"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					10 => array (
							'real_life_situation' => _("Zoé a 11 ans, elle est asthmatique et allergique aux acariens et aux poils de chat.
														Elle part en voyage de classe pendant une semaine dans un gîte en Savoie et est toute contente."),
							'list_subquestions' => array (
														1 => array (
																'title' => _("Que doivent faire les parents de Zoé avant le voyage ?"),
																'items' => array (
																				'a' => _("Signaler au professeur que Zoé est asthmatique et allergique ?"),
																				'b' => _("Ne rien dire au professeur : Il pourrait refuser sa participation au voyage")
																			)
																),
														2 => array (
																'title' => _("Que doit mettre Zoé dans sa valise ?"),
																'items' => array (
																				'a' => _("Ses vêtements"),
																				'b' => _("Sa console de jeu"),
																				'c' => _("Son traitement de crise (médicament de secours),
																							chambre d’inhalation et plan d’action en cas de crise"),
																				'd' => _("Pas de traitement pour l’asthme, elle va bien et n’a pas fait de crise depuis plusieurs mois,
																							et en plus, elle va à la montagne")
																			)
																),
														'sentence_1' => _("En Savoie, les accompagnateurs de Zoé ont organisé des jeux d’extérieur, Zoé s’amuse bien, court,
																		mais elle prend froid et commence à avoir le nez qui coule"),
														3 => array (
																'title' => _("Que doit faire Zoé ?"),
																'items' => array (
																				'a' => _("Rien de spécial : ce n’est qu’un petit rhume"),
																				'b' => _("Prendre un pull pour les jeux de plein air demain"),
																				'c' => _("Se nettoyer le nez au sérum physiologique plusieurs fois par jour"),
																				'd' => _("Surveiller son souffle par le DEP")
																			)
																),
														'sentence_2' => _("Deux jours plus tard, le rhume est toujours là et elle commence à tousser
																			(la même petite toux que quand elle fait une crise d’asthme)"),
														4 => array (
																'title' => _("Que lui conseilles-tu ?"),
																'subtitle' => _("(une seule réponse)"),
																'items' => array (
																				'a' => _("Se calmer, avec le repos, la toux va passer"),
																				'b' => _("Le signaler aux accompagnateurs pour qu’ils la surveillent cette nuit"),
																				'c' => _("Téléphoner à ses parents pour dire qu’elle tousse"),
																				'd' => _("Dire aux accompagnateurs qu’elle tousse comme quand elle va faire une crise d’asthme
																						et/ou demander son traitement de secours Ventoline ou autre bronchodilatateur"),
																				'e' => _("Manger un petit bonbon au miel")
																			)
																),
														'sentence_3' => _("La nuit elle se réveille car elle tousse et n’arrive pas à dormir. Elle n’ose pas sortir de sa chambre
																			et pleure car elle a peur de faire une crise d’asthme"),
														5 => array (
																'title' => _("Et toi que ferais-tu à sa place ?"),
																'items' => array (
																				'a' => _("Comme Zoé je resterais dans ma chambre
																							car les accompagnateurs ne veulent pas que l’on se lève la nuit"),
																				'b' => _("Je m’assoie dans le lit, je me calme et respire doucement"),
																				'c' => _("Je me lève et vais réveiller l’accompagnant, je dis que je tousse,
																							il me donne un sirop contre la toux"),
																				'd' => _("Je me lève et demande mon médicament de secours")
																			)
																),
														'sentence_4' => _("Zoé va beaucoup mieux le lendemain et participe à la visite d’une ferme savoyarde :
																			sur place il y a plusieurs chats"),
														6 => array (
																'title' => _("Que doit faire Zoé qui adore les chats ?"),
																'items' => array (
																				'a' => _("Les caresser et se laver les mains après"),
																				'b' => _("Les prendre dans ses bras et leur faire des câlins"),
																				'c' => _("Eviter de s’en approcher")
																			)
																),
														'sentence_5' => _("Zoé a bien aimé les chats mais le soir elle est de plus en plus essoufflée, elle tousse et n’arrive pas bien à respirer.<br/>
																			Elle se décide à aller réveiller l’accompagnateur et reçoit 2 bouffées de son médicament de secours ou Ventoline.
																			¼ d’heure plus tard cela ne va pas mieux."),
														7 => array (
																'title' => _("A ton avis, que faut-il faire ?"),
																'subtitle' => _("(Cette question se propose aux enfants de PLUS DE 10 ANS)"),
																'items' => array (
																				'a' => _("Rien : la Ventoline met du temps à agir,
																							il faut attendre 2h pour qu’elle soit efficace"),
																				'b' => _("Se calmer, respirer assis calmement"),
																				'c' => _("Reprendre 2 bouffées de médicament de secours
																							avec la chambre d’inhalation jusqu’à 3 fois en une heure"),
																				'd' => _("Si après les prises répétées de médicament de secours la gène respiratoire ne passe pas,
																							il faut prendre des comprimés ou gouttes de cortisone et appeler les secours (SAMU=15)")
																			)
																)
													),
							'validation_conditions' => _("bonnes réponses 1a 2a et c ( b est toléré)  3b,c et d 4d 5b et d 6c (a toléré) 7c et d ( et b en complément)"),
							'validation_items' => array (
													'non_valid' => 0,
													'partially_valid' => 0.5,
													'valid' => 1
													)
							),
					'asthmacontrol' => array ()
							//~ 'instruction' => _("Niveau de contrôle subjectif enfant").'<br/><img src = \''.IMAGE_PATH.'scale_control_asthma.jpg\' alt = '._("échelle de contrôle de l'asthme").' width = 400px /><br/><br/>'._("Niveau de contrôle subjectif parent").'<br/><img src = \''.IMAGE_PATH.'scale_control_asthma.jpg\' alt = '._("échelle de contrôle de l'asthme").' width = 400px /><br/><br/>'._("CACT").' <a href = \'.?module=patient_teaching&action=show_cACT&from='.$_GET['action'].'\'>'._("cliquez ici").'</a>'
							//~ )
				);
				
if (isset ($_SESSION['patient']['patient_age'])) {
	if ($_SESSION['patient']['patient_age'] < 10) {
		$list_questions['3_a']['question_answer'] = array (
														_("J’avertis mes parents ou un adulte et je dis que je fais une crise d’asthme et/ou
															que j’ai besoin de mon médicament de secours (nommer le médicament) je me calme et je m’assieds,
															je respire par le nez et souffle par la bouche")
														);
		$list_questions['3_a']['validation_conditions']	= _("- Validé si l’enfant dit qu’il prévient un adulte car il fait une crise d’asthme et/ou
																qu’il a besoin de son traitement de secours.<br/>
																S’il répond d’emblée « je prends mon traitement, ma ventoline » faite lui préciser comment en pratique
																il accède à son traitement (pour s’assurer qu’il prévient)<br/>
																- non validé si n’avertit pas");
	}
	else {
		$list_questions['3_a']['question_answer'] = array (
														_("Je me calme et je m’assieds, je respire par le nez et souffle par la bouche.<br/>
															- si ma gêne respiratoire ne passe pas je prends immédiatement 2 bouffées de mon traitement de secours
																(bronchodilatateur d’action immédiate)<br/>
															- si ça ne va pas mieux, je peux renouveler la prise 10 mn après, je peux prendre jusqu’à 3 fois en 1 h
																2 bouffées de mon médicament de secours si ma gène respiratoire ne se passe pas.<br/>
															- si ma gêne respiratoire ne passe pas j’avertis un adulte et je dis que je fais une crise d'asthme qui ne
																passe pas malgré la prise répétée de mon médicament de secours (nommer le médicament)")
														);
		$list_questions['3_a']['validation_conditions']	= _("- validé si l’enfant prend son médicament de secours.<br/>
																- non validé si ne prend pas son broncho dilatateur d’action rapide ou n’avertit pas son entourage
																	que les traitements sont inefficaces.");
	}
}
else {
	$list_questions['3_a']['question_answer'] = array (
													_("<br/><strong>Enfant < 10 ans</strong> : J’avertis mes parents ou un adulte et je dis que je fais une crise d’asthme et/ou
															que j’ai besoin de mon médicament de secours (nommer le médicament) je me calme et je m’assieds,
															je respire par le nez et souffle par la bouche<br/>
														<strong>Enfant > 10 ans</strong> : Je me calme et je m’assieds, je respire par le nez et souffle par la bouche.<br/>
														- si ma gêne respiratoire ne passe pas je prends immédiatement 2 bouffées de mon traitement de secours
															(bronchodilatateur d’action immédiate)<br/>
														- si ça ne va pas mieux.je peux renouveler la prise 10 mn après, je peux prendre jusqu’à 3 fois en 1 h
															2 bouffées de mon médicament de secours si ma gène respiratoire ne se passe pas.<br/>
														- si ma gêne respiratoire ne passe pas j’avertis un adulte et je dis que je fais une crise d'asthme qui ne
															passe pas malgré la prise répétée de mon médicament de secours (nommer le médicament)")
													);
	$list_questions['3_a']['validation_conditions']	= _("<strong>Enfant < 10 ans</strong> :<br />
															- validé si l’enfant dit qu’il prévient un adulte car il fait une crise d’asthme et/ou
																qu’il a besoin de son traitement de secours.<br/>
																S’il répond d’emblée « je prends mon traitement, ma ventoline » faite lui préciser comment en pratique
																il accède à son traitement (pour s’assurer qu’il prévient)<br/>
															- non validé si n’avertit pas
															<br /><strong>Enfant > 10 ans</strong> :<br />
															- validé si l’enfant prend son médicament de secours.<br/>
															- non validé si ne prend pas son broncho dilatateur d’action rapide ou n’avertit pas son entourage
																que les traitements sont inefficaces.");
}

?>

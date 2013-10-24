  
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

$list_questions = array (
			'1' => array (
				'nb_answers' => 2,
				'title' => _("Parmi les concepts suivants, quels sont ceux que j'associe à l'ETP ?"),
				'title_small' => _("concepts"),
				'items' => array (
						1 => 'expliquer',
						2 => 'informer',
						3 => 'évaluer',
						4 => 'soigner',
						5 => 'transmettre'
						)
				),
			'2' => array (
				'nb_answers' => 2,
				'title' => _("Quels sont les grands principes de l'ETP ?"),
				'title_small' => _("principes"),
				'items' => array (
						1 => 'elle est centrée sur le soignant',
						2 => 'elle s&apos;adresse à des patients atteints de maladie chronique',
						3 => 'pour la dispenser, il suffit d&apos;avoir un bon contact avec le patient',
						4 => 'c&apos;est une démarche structurée',
						5 => 'après la fin du programme, elle est acquise'
						)
				),
			'3' => array (
				'nb_answers' => 3,
				'title' => _("Quels sont les objectifs de l'ETP ?"),
				'title_small' => _("objectifs"),
				'items' => array (
						1 => 'que le patient soit capable d’adapter son traitement/environnement aux circonstances',
						2 => 'que le patient ait une meilleure qualité de vie',
						3 => 'que le patient puisse se passer des soignants',
						4 => 'que le patient accepte sa maladie chronique',
						5 => 'que le patient fasse moins d’exacerbations/complications',
						6 => 'que le patient retrouve son état de santé antérieur'
						)
				),
			'4' => array (
				'nb_answers' => 3,
				'title' => _("1<sup>ère</sup> étape - le diagnostic éducatif ou bilan éducatif partagé"),
				'title_small' => _("diagnostic éducatif"),
				'items' => array (
						1 => 'il consiste à examiner le patient pour préciser le diagnostic de la maladie',
						2 => 'il repère ce qui facilite ou entrave l&apos;apprentissage',
						3 => 'il permet au patient de mieux connaître les répercussions de la maladie dans son quotidien',
						4 => 'il permet au soignant de définir le niveau de contrôle de la maladie',
						5 => 'il permet de mieux connaître le patient et de repérer ses besoins par rapport à sa maladie.'
						)
				),
			'5' => array (
				'nb_answers' => 1,
				'title' => _("2<sup>ème</sup> étape - le contrat éducatif ou programme éducatif personnalisé"),
				'title_small' => _("contrat éducatif"),
				'items' => array (
						1 => 'c’est une synthèse médicale établie par le soignant à partir du diagnostic éducatif',
						2 => 'il oblige le patient à poursuivre le programme éducatif jusqu’à obtention du contrôle
							optimal de la maladie',
						3 => 'il permet de négocier avec le patient les objectifs à travailler et le nombre
							de séances éducatives pour y arriver',
						4 => 'il n’est pas indispensable pour la poursuite de la démarche éducative'
						)
				),
			'6' => array (
				'nb_answers' => 1,
				'title' => _("3<sup>ème</sup> étape - les séances éducatives"),
				'title_small' => _("séances d'apprentissage"),
				'items' => array (
						1 => 'le but des séances est d’informer le patient afin qu’il améliore ses connaissances
							sur la maladie chronique',
						2 => 'ce sont des séances d’apprentissage basées sur un échange avec le patient'
						)
				),
			'7' => array (
				'nb_answers' => 2,
				'title' => _("4<sup>ème</sup> étape - L’évaluation"),
				'title_small' => _("évaluation"),
				'items' => array (
						1 => 'elle est optionnelle',
						2 => 'elle permet de vérifier les compétences acquises en fin de programme éducatif par le patient',
						3 => 'elle met un terme à la démarche éducative',
						4 => 'elle permet de repérer les renforcements éducatifs nécessaires'
						)
				),
			'8' => array (
				'nb_answers' => 4,
				'title' => _("Les séances éducatives : comment j’aide l’enfant à apprendre à utiliser 
						les ressources disponibles et à gérer son traitement, ses crises, et les 
						facteurs qui interfèrent avec la gestion normale de son mode de vie"),
				'title_small' => _("séances éducatives"),
				'items' => array (
						-1 => 'Leur déroulement : ',
						1 => 'pour rendre l’apprentissage attractif, j’évite les conducteurs pré-établis',
						2 => 'au contraire, j’ai relu attentivement le conducteur de séance avant de la démarrer',
						3 => 'je préfère organiser une longue séance pour donner toutes les informations en une fois: c’est plus pratique pour le patient',
						-2 => 'Leur contenu : ',
						4 => 'je lis les messages-clé au patient',
						5 => 'je m’assure que j’ai les outils pédagogiques adaptés (matériel de démonstration, documents) et que je sais les manipuler',
						6 => 'rien de tel que les mises en situation et les jeux!',
						-3 => 'Et à la fin de chaque séance : ',
						7 => 'je félicite le patient de m’avoir écouté tout au long de la séance',
						8 => 'je félicite le patient, je m’assure qu’il maîtrise les messages-clés et je lui remets la fiche travaillée',
						9 => 'je félicite le patient, je lui fais réciter les messages-clé et je lui remets un petit cadeau pour l’encourager'						
						)
				),
			'9' => array (
				'nb_answers' => 1,
				'title' => _("Quelle est ma posture éducative ?"),
				'title_small' => _("posture éducative"),
				'items' => array (
						1 => 'je propose les réponses pour ne pas embarrasser le patient',
						2 => 'je fais parler le patient en premier et j’écoute ses réflexions pour répondre à ses préoccupations',
						3 => 'pour ne pas compliquer l’apprentissage, j’évite de prendre en compte l’état émotionnel du patient, ses craintes ou ses attentes',
						4 => 'je ne laisse pas le patient poser trop de questions, car sinon il ne retiendra pas les messages importants'
						)
				),
			'10' => array (
				'nb_answers' => 2,
				'title' => _("Qu’est ce que je fais au terme du programme éducatif ?"),
				'title_small' => _("à la fin du programme éducatif ..."),
				'items' => array (
						1 => 'je clos le dossier éducatif du patient',
						2 => 'je prévois de travailler de nouvelles séances éducatives de renforcement en fonction des résultats de l’évaluation',
						3 => 's’ils en font la demande, j’informe du contenu du programme éducatif les autres professionnels de terrain 
								médicaux et paramédicaux qui accompagnent la famille',
						4 => 'je propose de revoir le patient et sa famille à distance du programme éducatif pour m’assurer du maintien de ses compétences'
						)
				)
		);
?>

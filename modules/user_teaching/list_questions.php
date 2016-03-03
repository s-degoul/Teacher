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
				'title' => _("Parmi les concepts suivants, quels sont ceux que j'associe à l'ETP ?"),
				'title_small' => _("concepts"),
				'items' => array (
						1 => _("guérir"),
						2 => _("informer"),
						3 => _("évaluer"),
						4 => _("soigner"),
						5 => _("accompagner")
						)
				),
			2 => array (
				'title' => _("Quels sont les grands principes de l'ETP ?"),
				'title_small' => _("principes"),
				'items' => array (
						1 => _("elle est centrée sur le soignant"),
						2 => _("elle ne concerne que  des patients atteints de maladie chronique"),
						3 => _("tout soignant peut la dispenser,  même sans  formation particulière"),
						4 => _("la structure de sa démarche est la même quelle que soit la pathologie"),
						5 => _("pour qu’elle soit acquise, il faut accomplir la totalité d’un programme")
						)
				),
			3 => array (
				'title' => _("Quels sont les objectifs de l'ETP ?"),
				'title_small' => _("objectifs"),
				'items' => array (
						1 => _("que le patient soit capable d’adapter son traitement"),
						2 => _("que le patient ait une meilleure qualité de vie"),
						3 => _("que le patient  devienne soignant"),
						4 => _("que le patient accepte sa maladie chronique"),
						5 => _("que le patient fasse moins de symptômes aigus"),
						6 => _("que le patient retrouve son état de santé antérieur")
						)
				),
			4 => array (
				'title' => _("1<sup>ère</sup> étape - le diagnostic éducatif ou bilan éducatif partagé"),
				'title_small' => _("diagnostic éducatif"),
				'items' => array (
						1 => _("il consiste à examiner le patient pour affiner le diagnostic"),
						2 => _("il permet au patient de repérer ce qui entrave l’apprentissage"),
						3 => _("il permet au soignant de définir le niveau de contrôle de la maladie"),
						4 => _("il permet au soignant de mieux connaître les besoins du patient")
						)
				),
			5 => array (
				'title' => _("2<sup>ème</sup> étape - le &laquo;&nbsp;contrat éducatif&nbsp;&raquo; ou &laquo;&nbsp;programme éducatif personnalisé&nbsp;&raquo;"),
				'title_small' => _("contrat éducatif"),
				'items' => array (
						1 => _("c’est une synthèse médicale établie par le soignant à partir du diagnostic éducatif"),
						2 => _("il engage le patient à poursuivre le programme éducatif jusqu’à obtention du contrôle
							optimal de la maladie"),
						3 => _("il permet de définir les objectifs à travailler"),
						4 => _("il est optionnel")
						)
				),
			6 => array (
				'title' => _("3<sup>ème</sup> étape - les séances éducatives"),
				'title_small' => _("séances d'apprentissage"),
				'items' => array (
						1 => _("le but des séances est d’informer le patient afin qu’il améliore ses connaissances et compétences sur la maladie chronique"),
						2 => _("ce sont des temps d’échange avec le patient")
						)
				),
			7 => array (
				//'nb_answers' => 2,
				'title' => _("4<sup>ème</sup> étape - L’évaluation"),
				'title_small' => _("évaluation"),
				'items' => array (
						1 => _("elle est conseillée en fin de programme"),
						2 => _("elle vérifie les compétences du patient"),
						3 => _("elle met un terme à la démarche éducative"),
						4 => _("elle permet de repérer les renforcements nécessaires")
						)
				),
			8 => array (
				//'nb_answers' => 4,
				'title' => _("Les séances éducatives : comment est-ce que j’aide l’enfant à apprendre à utiliser les ressources disponibles et à gérer son traitement, ses crises, et les facteurs qui interfèrent avec la gestion optimale de son mode de vie"),
				'title_small' => _("séances éducatives"),
				'items' => array (
						-1 => 'Leur déroulement : ',
						1 => _("la lecture préalable du conducteur de séance par le soignant rend l’apprentissage du patient moins spontané"),
						2 => _("la lecture préalable du conducteur par le soignant facilite la guidance des séances"),
						3 => _("il est plus profitable de concentrer l’apprentissage sur une seule séance que de l’éparpiller sur plusieurs"),
						-2 => 'Leur contenu : ',
						4 => _("je lis plusieurs fois les messages-clé au patient"),
						5 => _("j’ai tous les outils pédagogiques"),
						6 => _("rien de tel que les mises en situation et les jeux !"),
						-3 => 'Et à la fin de chaque séance : ',
						7 => _("je demande au patient s’il a bien compris mes informations"),
						8 => _("je m’assure que le patient maîtrise les messages-clé"),
						9 => _("je demande au patient d’apprendre les messages-clé et de me les réciter à la prochaine consultation")
						)
				),
			9 => array (
				//'nb_answers' => 1,
				'title' => _("Quelle est ma posture éducative ?"),
				'title_small' => _("posture éducative"),
				'items' => array (
						1 => _("pour aider le patient, je lui suggère certaines réponses"),
						2 => _("pour mieux personnaliser l’entretien, je fais parler le patient en premier"),
						3 => _("pour ne pas compliquer l’apprentissage du patient, je m’efforce de ne pas tenir compte de son état émotionnel"),
						4 => _("pour ne pas gêner l’assimilation des messages importants, je limite les questions du patient")
						)
				),
			10 => array (
				//'nb_answers' => 2,
				'title' => _("Qu'est-ce que je fais au terme du programme éducatif ?"),
				'title_small' => _("au terme du programme éducatif"),
				'items' => array (
						1 => _("j’informe du  contenu du programme éducatif les autres professionnels de terrain médicaux et paramédicaux  qui accompagnent la famille s’ils en font la demande"),
						2 => _("si nécessaire, je programme des séances éducatives de renforcement"),
						3 => _("je clos le dossier éducatif du patient"),
						4 => _("je prévois une séance d’évaluation éducative à distance")
						)
				)
		);
?>

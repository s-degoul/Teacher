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


define ('FIELD_LONG', 75);
define ('TEXTAREA_LONG', 100);

$list_questions = array (
					1 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Sais-tu depuis combien de temps tu es asthmatique ?"),
							),
					2 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Comment et par qui l'as tu appris ?"),
							),
					3 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Y a-t-il dans ta famille quelqu'un qui est asthmatique ?"),
							),
					4 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Est-ce que tu peux me décrire ta dernière crise d'asthme ?")
							),
					5 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Quels sont tes signes d'asthme ?")
							),
					6 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Est-ce qu'il y a des signes qui sont toujours les mêmes au début de ta crise ?")
							),
					7 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("A ton avis, quels sont les signes d'une crise d'asthme grave ?")
							),
					8 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Comment réagis-tu quand tu fais une crise d'asthme :"),
							'subtitle' => _("Est-ce que tu préviens quelqu'un ?</br>
										Est-ce que tu prends des médicaments ? lesquels ?</br>
										Est-ce que tu essaies de te calmer ?</br>
										Est-ce que tu fais autre chose ?")
							),
					9 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Est ce que tu as une fiche qui explique ce que tu dois faire en cas de crise ?"),
							'subtitle' => _("les médicaments que tu dois prendre et les personnes que tu dois prévenir ?</br>
											Si oui, où est cette fiche : à l'école ? à la maison ? ailleurs ?")
							),
					10 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("As-tu une idée de ce qui se passe dans ton corps quand tu fais une crise d'asthme ?"),
							),
					11 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Peux-tu nommer les médicaments que tu prends pour ton asthme ?"),
							'subtitle' => _("(bronchodilatateurs, anti inflammatoires, désensibilisation)")
							),
					'11_2' => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Sais-tu à quoi ils servent ?")
							),
					'11_3' => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("A quel moment les prends-tu ?")
							),
					12 => array (
							'type' => 'other',
							'title' => _("Demandez à l’enfant d'expliquer comment il  prend ses médicaments inhalés et comparer avec la grille de validation qui s'affiche en cliquant sur le dispositif.")
							//'title' => _("Cliquez sur le dispositif utilisé par l'enfant pour afficher la grille de validation du geste.")
							),
					13=> array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Est-ce que c'est difficile pour toi de prendre tes médicaments ?</br>Pourquoi ?")
							),
					'13_2' => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Est-ce que tu voudrais changer de dispositif ?")
							),						
					14 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("As-tu tes médicaments de secours près de toi ?"),
							'subtitle' => _("à la maison, à l'école, quand je vais au sport, quand je sors...")
							),
					15 => array (
							'type' => 'radio',
							'title' => _("As-tu un appareil pour mesurer ton souffle ? (débitmètre de pointe)")
							),
					16 => array (
							'type' => 'other',
							'title' => _("Montre-moi comment tu t'en sers")
							),
					17 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Est-ce que tu connais la valeur normale de ton DEP ? (en L/min)")
							),
					18 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Et la valeur en-dessous de laquelle tu dois prendre ton médicament de secours 
										et/ou prévenir un adulte ?")
							),
					19 => array (
							'type' => 'other',
							'title' => _("Qu'est-ce qui déclenche tes crises ?")
							),
					20 => array (
							'type' => 'other',
							'title' => _("Parlons maintenant de l'endroit où tu vis")
							),
					21 => array (
							'type' => 'radio',
							'title' => _("Es-tu gêné(e) quand tu fais du sport ?")
							),
					'21_2' => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Pour quels sports ?")
							),
					'21_3' => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Que fais-tu pour éviter les gênes respiratoires ?")
							),
					22 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("A l'école : as-tu déjà été gêné(e)
											pour respirer ?")
							),
					'22_2' => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Est-ce que tu sais qui tu dois prévenir quand tu es gêné(e) ?"),
							'subtitle' => _("(Demander à l'adulte accompagnant si un protocole d'accueil
										individualisé (PAI) a été établi)")
							),
					23 => array (
							'type' => 'textarea',
							'size' => TEXTAREA_LONG,
							'title' => _("Est-ce que tu penses à faire des choses spéciales pour empêcher une crise quand :
										tu as un rhume ? tu es invité chez un copain ?")
							),
					24 => array (
							'type' => 'other',
							'title' => _("Niveau de contrôle subjectif : selon toi, est-ce que ton asthme est bien contrôlé ou non contrôlé ?"),
							'subtitle' => _("Ton asthme est bien contrôlé s’il te permet d’avoir une bonne qualité de vie, par exemple faire les activités que tu aimes, bien dormir la nuit, faire du sport, ne pas manquer la classe")
							),
					25 => array (
							'type' => 'other',
							'title' => _("Niveau de contrôle objectif : le Childhood Asthma Control Test (cACT)"),
							'subtitle' => _("Test de contrôle de l'asthme réservé aux enfants de 4 à 11 ans")
							)
				);

?>

  
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
define ('FIELD_LONG', 75);

$list_questions = array (
					1 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Sais-tu depuis combien de temps tu es asthmatique ?'),
							),
					2 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Comment et par qui l&apos;as tu appris ?'),
							),
					3 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Y a-t-il dans ta famille quelqu&apos;un qui est asthmatique ?'),
							),
					4 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Est-ce que tu peux me d&eacute;crire ta derni&egrave;re crise d&apos;asthme ?')
							),
					5 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Quels sont tes signes d&apos;asthme ?')
							),
					6 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Est-ce qu&apos;il y a des signes qui sont toujours les m&ecirc;mes au début de ta crise ?')
							),
					7 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('A ton avis, quels sont les signes d&apos;une crise d’asthme grave ?')
							),
					8 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Comment r&eacute;agis-tu quand tu fais une crise d&apos;asthme :'),
							'subtitle' => _('Est-ce que tu pr&eacute;viens quelqu&apos;un ?</br>
										Est-ce que tu prends des m&eacute;dicaments ? lesquels ?</br>
										Est-ce que tu essaies de te calmer ?</br>
										Est-ce que tu fais autre chose ?')
							),
					9 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Est ce que tu as une fiche qui explique ce que tu dois faire en cas de crise ?'),
							'subtitle' => _('les m&eacute;dicaments que tu dois prendre et les personnes que tu dois pr&eacute;venir ?</br>
											Si oui, o&ugrave; est cette fiche : à l&apos;&eacute;cole ? à la maison ? ailleurs ?')
							),
					10 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('As-tu une id&eacute;e de ce qui se passe dans ton corps quand tu fais une crise d&apos;asthme ?'),
							),
					11 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Peux-tu nommer les m&eacute;dicaments que tu prends pour ton asthme ?'),
							'subtitle' => _('(bronchodilatateurs, anti inflammatoires, d&eacute;sensibilisation)')
							),
					'11_2' => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Sais-tu à quoi ils servent ?')
							),
					'11_3' => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('A quel moment les prends-tu ?')
							),
					12 => array (
							'type' => 'other',
							'title' => _('Cliquez sur le dispositif utilis&eacute; par l&apos;enfant pour afficher la grille de validation du geste.')
							),
					13=> array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Est-ce que c&apos;est difficile pour toi de prendre tes m&eacute;dicaments ?</br>Pourquoi ?')
							),
					'13_2' => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Est-ce que tu voudrais changer de dispositif ?')
							),						
					14 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('As-tu tes m&eacute;dicaments de secours pr&egrave;s de toi ?'),
							'subtitle' => _('&agrave; la maison, &agrave; l&apos;&eacutecole, quand je vais au sport, quand je sors...')
							),
					15 => array (
							'type' => 'radio',
							'title' => _('As-tu un appareil pour mesurer ton souffle ? (débitmètre de pointe)')
							),
					16 => array (
							'type' => 'other',
							'title' => _('Montre-moi comment tu t&apos;en sers')
							),
					17 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Est-ce que tu connais la valeur normale de ton DEP ? (en L/min)')
							),
					18 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Et la valeur en-dessous de laquelle tu dois prendre ton m&eacute;dicament de secours 
										et/ou pr&eacute;venir un adulte ?')
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
							'title' => _('Es-tu g&ecirc;n&eacute;(e) quand tu fais du sport ?')
							),
					'21_2' => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Pour quels sports ?')
							),
					'21_3' => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _('Que fais-tu pour &eacute;viter les g&ecirc;nes respiratoires ?')
							),
					22 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _("A l'école : as-tu d&eacute;j&agrave; &eacute;t&eacute; g&ecirc;n&eacute;(e)
											pour repirer ?")
							),
					'22_2' => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _("Est-ce que tu sais qui tu dois prévenir quand tu es gêné(e) ?"),
							'subtitle' => _("(Demander à l'adulte accompagnant si un protocole d'accueil
										individualisé -PAI- a été établi)")
							),
					23 => array (
							'type' => 'text',
							'size' => FIELD_LONG,
							'title' => _("Est-ce que tu penses à faire des choses spéciales pour empêcher une crise quand :
										tu as un rhume ? tu es invité chez un copain ?")
							),
					24 => array (
							'type' => 'other',
							'title' => _("Niveau de contrôle subjectif : selon toi, est-ce que ton asthme est bien contrôlé ou non contrôlé ?"),
							'subtitle' => _("ton asthme est bien contrôlé s’il te permet d’avoir une bonne qualité de vie, par exemple faire les activités 
											que tu aimes, bien dormir la nuit, faire du sport, ne pas manquer la classe <br/>
											sur une échelle de 1 à 27, à quel niveau te placerais-tu, en sachant que 20 est la limite 
											entre l’asthme contrôlé et l’asthme non contrôlé")
							),
					25 => array (
							'type' => 'other',
							'title' => _("Niveau de contrôle objectif : le Childhood Asthma Control Test (cACT)"),
							'subtitle' => _("Test de contrôle de l'asthme réservé aux enfants de 4 à 11 ans")
							)
				);

?>

  
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

$list_questions_parent_eval = array (
									'knowledge' => array (
												1 => array (
															'title' => _("L'asthme concerne un enfant par classe"),
															'answer' => 0,
															'explanation' => _("10% des enfants européens sont asthmatiques : dans une classe en moyenne de 30 enfants,
																				on peut considérer que 3 enfants sont concernés par la maladie.")
															),
												2 => array (
															'title' => _("Dans l’asthme, entre les crises, les bronches peuvent rester enflammées"),
															'answer' => 1,
															'explanation' => _("Il arrive que l’inflammation des bronches persiste entre deux crises. C’est pourquoi,
																				il est important de donner à votre enfant un traitement anti-inflammatoire
																				(traitement de fond) même quand il n’a pas de symptômes.")
															),
												3 => array (
															'title' => _("Il ne faut pas traiter l’asthme de l’enfant, car il disparaîtra après l’adolescence"),
															'answer' => 0,
															'explanation' => _("L’asthme peut durer toute la vie (même si parfois il est en rémission à l’adolescence).
																				Il ne faut le négliger au risque d’altérer sa fonction respiratoire.")
															),
												4 => array (
															'title' => _("L’allergie est la cause principale de l’asthme de l’enfant"),
															'answer' => 1,
															'explanation' => _("Vrai à 70%. Même si d’autres facteurs peuvent être également responsables de crise")
															),
												5 => array (
															'title' => _("Les infections respiratoires favorisent les crises d’asthme"),
															'answer' => 1,
															'explanation' => _("Il est important d’éviter les infections (vaccinations, nettoyage des mains...)")
															),
												6 => array (
															'title' => _("La qualité de l’air à l’intérieur des habitations a une influence sur l’état des bronches"),
															'answer' => 1,
															'explanation' => _("On recommande d’éviter les parfums et désodorisants d’intérieur et d’aérer la chambre de 
																				l’enfant et le logement en général")
															),
												7 => array (
															'title' => _("Un enfant asthmatique a souvent les mêmes signes qui précèdent, qui «  annoncent  » ses crises"),
															'answer' => 1,
															'explanation' => _("Connaissez vous ceux de votre enfant ?")
															),
												8 => array (
															'title' => _("La toux lors d’efforts physiques peut être un signe de crise d’asthme"),
															'answer' => 1,
															'explanation' => _("De même que la toux sèche nocturne peut être un équivalent asthme")
															),
												9 => array (
															'title' => _("Lors des crises, les bronches sont dilatées"),
															'answer' => 0,
															'explanation' => _("Elles sont resserrées : c’est le bronchospasme")
															),
												10 => array (
															'title' => _("Le débit de pointe (ou peak-flow) permet de mesurer l’obstruction des bronches"),
															'answer' => 1,
															'explanation' => _("C’est un moyen simple de voir si l’enfant commence une crise d’asthme
																				(le chiffre de son débit de pointe est alors en dessous de sa valeur alerte)")
															),
												11 => array (
															'title' => _("Les chiffres de débit de pointe sont fixes toute la vie"),
															'answer' => 0,
															'explanation' => _("Les chiffres augmentent avec la croissance d’où la nécessité de réévaluer les chiffres
																				du débit de pointe de l’enfant tous le 6-12 mois chez le pédiatre ou médecin")
															),
												12 => array (
															'title' => _("En cas de crise, si l’enfant a des difficultés pour parler, c’est qu’il fait une crise grave"),
															'answer' => 1,
															'explanation' => _("Rappelez-vous que les signes de crise grave sont les difficultés à parler,
																				l’essoufflement au repos, l’inefficacité des traitements de secours")
															),
												13 => array (
															'title' => _("Le bronchodilatateur est à prendre tous les jours sans oublier, matin et soir, au moins 3 mois"),
															'answer' => 0,
															'explanation' => _("C’est le traitement anti-inflammatoire (= traitement de fond) qui se prend tous les jours,
																				à ne pas arrêter sans avis médical !!")
															),
												14 => array (
															'title' => _("Le bronchodilatateur est de couleur bleue"),
															'answer' => 1,
															'explanation' => _("C’est le médicament de secours, le médicament de couleur bleu, aussi appelé
																				bronchodilatateur d’action rapide")
															),
												15 => array (
															'title' => _("Le traitement de fond ou traitement anti-inflammatoire permet de « réparer » les bronches enflammées"),
															'answer' => 1,
															'explanation' => _("cf réponse de la question 2")
															),
												16 => array (
															'title' => _("On ne doit pas faire de sport quand on est asthmatique"),
															'answer' => 0,
															'explanation' => _("Le sport est recommandé chez les asthmatiques")
															),
												17 => array (
															'title' => _("Le sport peut déclencher une crise"),
															'answer' => 1,
															'explanation' => _("Et c’est pourquoi on recommande aux asthmatiques de s’échauffer progressivement et de
																			prendre un bronchodilatateur d’action rapide avant le sport si le pédiatre ou le médecin l’a prescrit")
															)
												),
									'skill' => array (
												18 => array (
															'title' => _("Le traitement de fond ou anti-inflammatoire doit se prendre tous les jours"),
															'explanation' => _("il permet de réparer les bronches")
															),
												19 => array (
															'title' => _("Mon enfant asthmatique doit avoir son bronchodilatateur d’action immédiate près de lui"),
															'explanation' => _("Ainsi il ne se fera pas surprendre par une crise")
															),
												20 => array (
															'title' => _("Je sais où se trouve le « plan d’action personnalisé » de mon enfant et je l’utilise régulièrement"),
															'explanation' => _("c’est un document qui vous est très précieux car il est adapté à votre enfant et qui vous permettra d’agir efficacement")
															),
												21 => array (
															'title' => _("Pour faciliter la prise des médicaments inhalés en cas de crise grave, il faut avoir à disposition une chambre d’inhalation"),
															'explanation' => _("Oui et quel que soit l’âge")
															),
												22 => array (
															'title' => _("La mesure du débit de pointe (ou peak flow) se fait une fois par mois, tous les 6 mois chez le pédiatre, et en cas de gêne respiratoire"),
															'explanation' => _("en cas de crise, c’est un bon marqueur de l’obstruction des bronches de votre enfant et en dehors des crises,
																				il permet de connaître le chiffre habituel (de base) de votre enfant")
															),
												23 => array (
															'title' => _("Il faut inciter l’enfant asthmatique à pratiquer régulièrement un sport"),
															'explanation' => _("cela permet de faire travailler ses muscles et d’augmenter sa capacité respiratoire mais avec quelques précautions
																				comme citées réponse 17")
															),
												24 => array (
															'title' => _("Fumer près d’un asthmatique aggrave son asthme"),
															'explanation' => _("le tabagisme passif (et actif) en entretenant l’inflammation des bronches, aggrave l’asthme")
															),
												25 => array (
															'title' => _("En cas de voyage scolaire, ou de séjour en dehors de la maison, mon enfant asthmatique part avec ses médicaments et son Plan d’Action Personnalisé"),
															'explanation' => _("il est important que les adultes responsables disposent des outils nécessaires à gérer une crise")
															)
												)
								);

?>

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

<div class='content_target'>
	
	<div class='pict_how_to_guide'>
	</div>
	<div class='how_to_guide'>
		<h2><?php echo _("Présentez la feuille PAPE à l’enfant, inscrivez son nom-prénom et la date et découvrez-la ensemble"); ?></h2>

		<div>
			<div class = 'nb_how_to_guide'>1.</div>
			<div class = 'chapter_how_to_guide_green'>
				<span><?php echo _("Mon asthme va bien !"); ?></span>
				<ul>
					<li><?php echo _("Si l’enfant prend un traitement anti-inflammatoire, demandez-lui de le dessiner ou de le noter"); ?></li>
					<li><?php echo _("Demandez-lui quel est son médicament de secours (faites lui remarquer qu’il est de couleur bleue) et demandez lui de le dessiner ou le noter"); ?></li>
					<li><?php echo _("Demandez à l’enfant s’il connaît ses signes annonciateurs de crise"); ?></li>
					<li><?php echo _("Si l’enfant prend des anti-histaminiques tous les jours, expliquez-lui que ce sont des médicaments efficaces sur les allergies des yeux,
										du nez et de la peau, mais qu’ils n’ont aucune action sur les bronches"); ?></li>
				</ul>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("L’enfant sait que :<br/>
																	Le traitement anti-inflammatoire se prend tous les jours :<br/>
																	il s’appelle : .....................................................<br/>
																	En cas de crise d’asthme ou gêne respiratoire, il doit prendre le médicament de secours,
																	il s’appelle .................................... et qui est de couleur bleue"); ?></div>
				</div>
			</div>
		</div>
		
			
		<div>
			<div class = 'nb_how_to_guide'>2.</div>
			<div class = 'chapter_how_to_guide_red'>
				<span><?php echo _("Gestion de la crise d'asthme"); ?></span>
				<ul>
					<li><?php echo _("Demandez à l’enfant s’il se souvient de SES signes de crise d’asthme (objectif de sécurité 1)"); ?></li>
					<li><?php echo _("Demandez-lui ce qu’il doit faire quand il ressent ses signes de crise.
										(L’aider si besoin : prévenir quelqu’un ? que lui dire ? quel médicament prendre ? de quelle couleur ?)"); ?></li>
					<li><?php echo _("Laissez-lui le temps de réfléchir, l’aidez à formuler les réponses"); ?></li>
					<li><?php echo _("Puis commentez avec lui la première ligne d’images"); ?></li>
					<li><?php echo _("Demandez-lui ce qu’il ressent quand il a reçu deux bouffées de médicament de secours"); ?></li>
					<li><?php echo _("Ensuite prenez connaissance avec lui de la 2ème ligne d’images"); ?></li>
				</ul>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("En cas de crise d’asthme, l’enfant doit"); ?>
						<ol>
							<li><?php echo _("prévenir un adulte"); ?></li>
							<li><?php echo _("respirer calmement par le nez et souffler par la bouche"); ?></li>
							<li><?php echo _("demander (ou prendre) son médicament de secours"); ?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
		<div>
			<div class = 'nb_how_to_guide'>3.</div>
			<div class = 'chapter_how_to_guide_red'>
				<span><?php echo _("Je fait une crise d'asthme grave"); ?></span>
				<p><?php echo _("Demandez lui ce qu'on doit faire"); ?></p>
				<ul>
					<li><?php echo _("si des signes de crise d’asthme grave apparaissent (et pour lui, quels sont-ils ? objectif de sécurité 2)"); ?></li>
					<li><?php echo _("ou si malgré la prise de médicament de secours, la gêne respiratoire ne passe pas"); ?></li>
				</ul>
				<p><?php echo _("La gestion d’une crise d’asthme grave a déjà été vue avec l’enfant dans l’objectif de sécurité 2 : demandez-lui ce dont il se souvient)"); ?></p>
				<p><?php echo _("Donnez à l’enfant son PAPE complété"); ?></p>
				<p><?php echo _("Remplissez avec les parents le PAPP et remettez-le leur
									(Les chiffres de DEP seront complétés ultérieurement si objectifs 6 et 7 sont travaillés)"); ?></p>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("En cas d’inefficacité du médicament de secours (ou si signes de gravité), c’est une crise grave !<br/>Il faut :"); ?>
						<ol>
							<li><?php echo _("prévenir un adulte"); ?></li>
							<li><?php echo _("répéter la prise de médicaments de secours (3 fois 2 bouffées en moins d’une heure)"); ?></li>
							<li><?php echo _("prendre des comprimés ou gouttes de cortisone"); ?></li>
							<li><?php echo _("demander un avis médical"); ?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
		<div>
			<div class = 'nb_how_to_guide'>4.</div>
			<div class = 'chapter_how_to_guide'>
				<h2><?php echo _("Mise en situation"); ?></h2>
				<p><a href = '.?module=patient_teaching&action=show_target&id_target=10&type=patient'><?php echo _("voir la fiche «objectifs 10» «Julie fait une crise d’asthme à l’école»"); ?></a></p>
			</div>
		</div>

	</div>
</div>

<?php
TargetInfoBox(array(
				'learning_method' => array (
										_("Mises en situation"),
										_("Questions-réponses avec support à remplir")
										),
				'duration' => '20 min',
				'print' => array (
								't3_plan_action_child' => array (
											'title' => _("plan d’action personnalisé enfant (PAPE)"),
											'before_title' => '',
											'after_title' => ''
											),
								't3_plan_action_parent' => array (
											'title' => _("plan d’action personnalisé parents (PAPP)"),
											'before_title' => '',
											'after_title' => ''
											)
								),
				'material' => array (_("Des crayons de couleur ou feutres"))
				));
?>

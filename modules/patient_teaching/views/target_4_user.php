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
		<div>
			<div class = 'nb_how_to_guide'>1.</div>
			<div class = 'chapter_how_to_guide'>
				<h2><?php echo _("Présentez à l’enfant les images de la planche couleur «comprendre son corps et s’expliquer les mécanismes de l’asthme»"); ?></h2>
				<p><?php echo _("Demandez à l’enfant s’il sait quelle partie du corps est atteinte quand on fait de l’asthme ?"); ?></p>
				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("L’enfant sait que l’asthme est une maladie des bronches"); ?></div>
				</div>
				<p><?php echo _("Demandez s’il sait ce qui se passe quand on fait une crise d’asthme ?
								Demandez ensuite à l’enfant comment est la bronche quand la crise est passée. Est-elle redevenue normale ? reste-elle « abîmée » ?"); ?></p>
				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("L’enfant connaît les notions de spasme de la bronche lors des crises d’asthme ou gêne respiratoire
																	et d’inflammation résiduelle des bronches en dehors des crise"); ?></div>
				</div>
			</div>	
		</div>

		<div>
			<div class = 'nb_how_to_guide'>2.</div>
			<div class = 'chapter_how_to_guide'>
				<h2><?php echo _("Poser les questions sans fiche"); ?></h2>
				<p><?php echo _("Demandez à l’enfant s’il connaît un médicament pour « ouvrir, desserrer, dilater » les bronches
									lorsqu’elles sont serrées en cas de crise d’asthme ou de gêne respiratoire."); ?></p>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("L’enfant sait qu’en cas de gêne respiratoire il doit réclamer ou prendre son médicaments de secours 
																(bronchodilatateur d’action immédiate) qui desserre les bronches. Sa couleur est bleue"); ?></div>
				</div>

				<p><?php echo _("Demandez à l’enfant s’il connaît un médicament pour «réparer» les bronches qui se prend tous les jours"); ?></p>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("L’enfant sait que le médicament anti-inflammatoire sert à réparer les bronches.<br/>
															Il se prend tous les jours. L’anti-histaminique agit sur les allergies oculaires, nasales et/ou cutanées,
															mais ne répare pas les bronches"); ?></div>
				</div>
				
				<p><?php echo _("Réajustez et validez ce que dit l’enfant en reprenant les images &laquo; comprendre son corps et s’expliquer les mécanismes de l’asthme &raquo; en complétant le texte à trous avec lui."); ?></p>
				<p><?php echo _("Donnez à l’enfant la fiche qu’il a remplie pour qu’il se constitue un dossier. Il la retravaillera à la maison
								afin de consolider les acquis."); ?></p>
			</div>
		</div>
	</div>

</div>

<?php
TargetInfoBox(array(
				'learning_method' => array (
										_("reconnaissance par image"),
										_("entretien et réflexion")
										),
				'duration' => '10 min',
				'print' => array (
								_("les 2 fiches"),
								't4_asthma_physiopathology' => array (
											'title' => _("Je sais ce qui se passe quand on fait une crise d'asthme"),
											'before_title' => '',
											'after_title' => ''
											),
								't4_difference_acute_chronic_treatment' => array (
											'title' => _("Je sais faire la différence entre traitement de crise et traitement de fond"),
											'before_title' => '',
											'after_title' => ''
											)
								),
				'material' => array (_("des crayons de couleur"))
				));
?>

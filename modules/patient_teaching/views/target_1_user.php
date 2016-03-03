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

	<div class='pict_good_to_know'>
	</div>
	<div class='good_to_know'>
		<?php echo _("Les signes annonciateurs de la crise étant toujours identiques pour un même patient, leur connaissance permet au patient de repérer la crise à un stade précoce."); ?>

	</div>

	<div class='pict_how_to_guide'>
	</div>
	<div class='how_to_guide'>
		<div>
			<div class='nb_how_to_guide'>1.</div>
			<div class='chapter_how_to_guide'>
				<p><?php echo _("Présentez les images de la fiche <strong>Objectif 1 Enfant : &laquo;&nbsp;Savoir repérer les signes de la crise&nbsp;&raquo;</strong>. Demandez-lui de montrer les signes qu’il ressent quand il fait une crise d’asthme, puis de les entourer."); ?></p>
			
				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("L'enfant sait reconnaître ses signes de crise"); ?></div>
				</div>
			</div>
		</div>
		
		<div>
			<div class = 'nb_how_to_guide'>2.</div>
			<div class = 'chapter_how_to_guide'>
				<p><?php echo _("Présentez les images de la fiche <strong>Objectif 1 Enfant : &laquo;&nbsp;Savoir repérer les signes annonciateurs de la crise &raquo;</strong>.<br />
				Procédez de la même façon qu’avec la fiche &laquo;&nbsp;savoir repérer les signes de crise&nbsp;&raquo;.<br />
				Précisez-lui que ce sont des signaux qui lui indiquent qu’il risque de faire une crise."); ?></p>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("L'enfant sait reconnaître ses  signes annonciateurs de crise. Il sait qu’ils représentent un signal d’alerte	et qu’il faut prévenir son entourage."); ?></div>
				</div>
				
				<p><?php echo _("Donnez les deux fiches à l’enfant."); ?></p>
			</div>
		</div>
	</div>

</div>

<?php
TargetInfoBox(array(
				'learning_method' => array (_("reconnaissance d’images")),
				'duration' => '15 min',
				'print' => array (
								_("Objectif 1 enfant :"),
								't1_asthma_attack_signs' => array (
											'title' => _("savoir repérer les signes de crise"),
											'before_title' => '',
											'after_title' => ''
											),
								't1_asthma_attack_warning_signs' => array (
											'title' => _("savoir repérer les signes annonciateurs"),
											'before_title' => '',
											'after_title' => ''
											)
								),
				'material' => array (_("prévoir un crayon :)"))
				));
?>

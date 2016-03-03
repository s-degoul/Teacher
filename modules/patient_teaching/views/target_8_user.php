  
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
				<h2><?php echo _("Le médecin montre la maison des allergies à l’enfant et lui demande de repérer les bulles qui correspondent
									à ses facteurs déclenchants."); ?></h2>
				<p><?php echo _("L’enfant réfléchit et propose des images"); ?></p>
				<p><?php echo _("Le médecin réajuste et complète en fonction des allergies et/ou irritants connus de l’enfant"); ?></p>
			</div>	
		</div>

		<div>
			<div class = 'nb_how_to_guide'>2.</div>
			<div class = 'chapter_how_to_guide'>
				<h2><?php echo _("Le médecin prend une bulle sélectionnée par l’enfant :"); ?></h2>
				<p><?php echo _("Pour chaque bulle, on demande à l’enfant ce qu’il faut faire pour éviter ou limiter les allergies ou les irritations
									que provoque le facteur dessiné."); ?></p>
				<p><?php echo _("En cliquant sur la bulle, la fiche de conseils correspondants s’imprime."); ?></p>
				<p><?php echo _("Le médecin la découvre avec l’enfant et la lui remet."); ?></p>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'>
						<p><?php echo _("L’enfant connaît ses allergènes et/ou irritants qui lui provoquent des crises ou gênes respiratoires."); ?></p>
						<p><?php echo _("L’enfant connaît les moyens de les éviter."); ?></p>
					</div>
				</div>
			</div>
		</div>
		
	</div>

</div>

<?php
TargetInfoBox(array(
				'learning_method' => array (_("réflexion en lien avec les connaissances et le vécu de l’enfant")),
				'duration' => '20 min',
				'print' => array (
								_("les moyens d’éviction des allergènes ou irritants correspondant à l’enfant (accessible à partir de chaque fiche de &laquo;&nbsp;la maison des allergies&nbsp;&raquo;)")
								),
				'material' => array (
								array (
									'link' => '.?module=patient_teaching&action=show_target&id_target=8&type=patient',
									'title' => _("la maison des allergies"),
									'before_title' => _("Affichez sur l’écran"),
									'after_title' => ''
									)
								)
				));
?>

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
		<p><?php echo _("Les systèmes d'inhalation les plus utilisés sont"); ?> :</p>
		<p><?php echo _("Aérosols doseurs (Spray)"); ?></p>
		<div>
			<div class='good_to_know_2_cols'>
				<a href = '.?module=patient_teaching&action=create_device_eval&device=aerosolchb&from=target_5&from_type=user'>
					<?php echo _("avec chambre"); ?>
					<img src = '<?php echo IMAGE_PATH; ?>aerosolchb.gif' alt = '<?php echo _("aérosol avec chambre"); ?>' />
				</a>
				<br/>
				<a href = '.?module=patient_teaching&action=show_video_devices&device=aerosolchb&from=target_5&from_type=user' class = 'link_video'>
					<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />
				</a>
			</div>
			<div class='good_to_know_2_cols'>
				<a href = '.?module=patient_teaching&action=create_device_eval&device=aerosol&from=target_5&from_type=user'>
					<?php echo _("sans chambre"); ?>
					<img src = '<?php echo IMAGE_PATH; ?>aerosol.gif' alt = '<?php echo _("aérosol sans chambre"); ?>' />
				</a>
				<br/>
				<a href = '.?module=patient_teaching&action=show_video_devices&device=aerosol&from=target_5&from_type=user' class = 'link_video'>
					<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
				</a>
			</div>
		</div>
		<p><?php echo _("Inhalateurs de poudre sèche"); ?></p>
		<div>
			<div class='good_to_know_3_cols'>
				<a href = '.?module=patient_teaching&action=create_device_eval&device=diskus&from=target_5&from_type=user'>
					<?php echo _("Diskus"); ?>
					<img src = '<?php echo IMAGE_PATH; ?>diskus.gif' alt = '<?php echo _("Diskus"); ?>' />
				</a>
				<br/>
				<a href = '.?module=patient_teaching&action=show_video_devices&device=diskus&from=target_5&from_type=user' class = 'link_video'>
					<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
				</a>
			</div>
			<div class='good_to_know_3_cols'>
				<a href = '.?module=patient_teaching&action=create_device_eval&device=turbuhaler&from=target_5&from_type=user'>
					<?php echo _("Turbuhaler"); ?>
					<img src = '<?php echo IMAGE_PATH; ?>turbuhaler.gif' alt = '<?php echo _("Turbuhaler"); ?>' />
				</a>
				<br/>
				<a href = '.?module=patient_teaching&action=show_video_devices&device=turbuhaler&from=target_5&from_type=user' class = 'link_video'>
					<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
				</a>
			</div>
			<div class='good_to_know_3_cols'>
				<a href = '.?module=patient_teaching&action=create_device_eval&device=novolizer&from=target_5&from_type=user'>
					<?php echo _("Novolizer"); ?>
					<img src = '<?php echo IMAGE_PATH; ?>novolizer.gif' alt = '<?php echo _("Novolizer"); ?>' />
				</a>
				<br/>
				<a href = '.?module=patient_teaching&action=show_video_devices&device=novolizer&from=target_5&from_type=user' class = 'link_video'>
					<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
				</a>
			</div>
		</div>
		<p>
			<a href = '.?module=patient_teaching&action=create_device_eval&device=autohaler&from=target_5&from_type=user'>
				<?php echo _("Autohaler"); ?>
				<img src = '<?php echo IMAGE_PATH; ?>autohaler.gif' alt = '<?php echo _("Autohaler"); ?>' />
			</a>
			<br/>
			<a href = '.?module=patient_teaching&action=show_video_devices&device=autohaler&from=target_5&from_type=user' class = 'link_video'>
					<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
			</a>
		</p>
		<p><?php echo _("En cas d’utilisation de corticoïdes inhalés, il faut se rincer la bouche quel que soit le dispositif utilisé
					(risque moindre de candidose buccale avec le système spray+chambre d’inhalation)"); ?></p>
	</div>

	<div class='pict_how_to_guide'>
	</div>
	<div class='how_to_guide'>
		<p><strong><?php echo _("Partez des remarques du diagnostic éducatif : est-ce que le dispositif actuel que l’enfant utilise lui convient
							ou veut-il en découvrir d’autres ?"); ?></strong></p>
		<ul>
			<li><?php echo _("Montrez la vidéo correspondant au dispositif d’inhalation choisi"); ?></li>
			<li><?php echo _("Présentez un dispositif inhalé factice ou vide"); ?></li>
			<li><?php echo _("Demandez à l’enfant de mimer en expliquant comment il prend son médicament inhalé
								(les parents peuvent éventuellement aider)"); ?></li>
			<li><?php echo _("Réajustez ce qu’a mimé et expliqué l’enfant en se servant de la grille d’évaluation du système d’inhalation correspondant,
								et en cochant ce qui est acquis et non acquis"); ?></li>
			<li><?php echo _("Faites refaire le geste à l’enfant jusqu’à ce qu’il l’ait acquis"); ?></li>
			<li><?php echo _("Imprimez et donnez à l’enfant la grille d’évaluation du système d’inhalation qu’il utilise"); ?></li>
		</ul>
		<p><?php echo _("NB : la fiche d’évaluation  «Spray utilisé avec chambre» doit être abordée systématiquement avec les parents
							si ce n’est pas le système habituellement utilisé par l’enfant. Ce système est le plus efficace en cas de crise sévère.
							Remettez-leur la fiche en leur recommandant de la garder avec les médicaments de secours"); ?></p>

		<div class='key_message'>
			<div class='pict_key_message'></div>
			<div class='content_key_message'><?php echo _("l’enfant est capable d’ inhaler son médicament en respectant toutes les étapes
															selon la grille d’évaluation."); ?></div>
		</div>
	</div>
</div>

<?php
TargetInfoBox(array(
				'learning_method' => array (_("acquisition de geste")),
				'duration' => '10 min',
				'print' => array (
								_("Fiche d’évaluation du système d’inhalation utilisé par l’enfant (pour y accéder, cliquez sur l’image du dispositif choisi)")
								),
				'material' => array (
									_("Dispositif de démonstration du système d’inhalation utilisé par l’enfant"),
									_("Possibilité de visionner un clip de démonstration de chaque technique d’inhalation"),
									_("(Temps par clip: une minute. Pour y accéder cliquez sur la caméra située à côté du dispositif choisi)")
									)
				));
?>

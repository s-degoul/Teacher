  
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

<p>
	<a href = '.?module=patient_teaching&action=show_device_eval'>
		<?php echo _("Grille d'évaluation des techniques d'utilisation des dispositifs d'inhalation"); ?>
	</a>
</p>

<p><?php echo _("Aérosols doseurs (Spray)"); ?></p>
<div>
	<div class='good_to_know_2_cols'>
		<a href = '.?module=patient_teaching&action=create_device_eval&device=aerosolchb&from=target_5&from_type=patient'>
			<?php echo _("avec chambre"); ?>
			<img src = '<?php echo IMAGE_PATH; ?>aerosolchb.gif' alt = '<?php echo _("aérosol avec chambre"); ?>' /></a>
		<a href = '.?module=patient_teaching&action=show_video_devices&device=aerosolchb&from=target_5&from_type=patient' class = 'link_video'>
			<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />
		</a>
	</div>
	<div class='good_to_know_2_cols'>
		<a href = '.?module=patient_teaching&action=create_device_eval&device=aerosol&from=target_5&from_type=patient'>
			<?php echo _("sans chambre"); ?>
			<img src = '<?php echo IMAGE_PATH; ?>aerosol.gif' alt = '<?php echo _("aérosol sans chambre"); ?>' /></a>
		<a href = '.?module=patient_teaching&action=show_video_devices&device=aerosol&from=target_5&from_type=patient' class = 'link_video'>
			<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
		</a>
	</div>
</div>
<p><?php echo _("Inhalateurs de poudre sèche"); ?></p>
<div>
	<div class='good_to_know_3_cols'>
		<a href = '.?module=patient_teaching&action=create_device_eval&device=diskus&from=target_5&from_type=patient'>
			<?php echo _("Diskus"); ?>
			<img src = '<?php echo IMAGE_PATH; ?>diskus.gif' alt = '<?php echo _("Diskus"); ?>' /></a>
		<a href = '.?module=patient_teaching&action=show_video_devices&device=diskus&from=target_5&from_type=patient' class = 'link_video'>
			<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
		</a>
	</div>
	<div class='good_to_know_3_cols'>
		<a href = '.?module=patient_teaching&action=create_device_eval&device=turbuhaler&from=target_5&from_type=patient'>
			<?php echo _("Turbuhaler"); ?>
			<img src = '<?php echo IMAGE_PATH; ?>turbuhaler.gif' alt = '<?php echo _("Turbuhaler"); ?>' /></a>
		<a href = '.?module=patient_teaching&action=show_video_devices&device=turbuhaler&from=target_5&from_type=patient' class = 'link_video'>
			<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
		</a>
	</div>
	<div class='good_to_know_3_cols'>
		<a href = '.?module=patient_teaching&action=create_device_eval&device=novolizer&from=target_5&from_type=patient'>
			<?php echo _("Novolizer"); ?>
			<img src = '<?php echo IMAGE_PATH; ?>novolizer.gif' alt = '<?php echo _("Novolizer"); ?>' /></a>
		<a href = '.?module=patient_teaching&action=show_video_devices&device=novolizer&from=target_5&from_type=patient' class = 'link_video'>
			<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
		</a>
	</div>
</div>
<p>
	<a href = '.?module=patient_teaching&action=create_device_eval&device=autohaler&from=target_5&from_type=patient'>
		<?php echo _("Autohaler"); ?>
		<img src = '<?php echo IMAGE_PATH; ?>autohaler.gif' alt = '<?php echo _("Autohaler"); ?>' /></a>
	<a href = '.?module=patient_teaching&action=show_video_devices&device=autohaler&from=target_5&from_type=patient' class = 'link_video'>
			<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
	</a>
</p>

  
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
$title_view = '<span class=\'start_header_high_letters\'>T</span>raining to
				<span class=\'start_header_high_letters\'>E</span>ducate
				<span class=\'start_header_high_letters\'>A</span>sthmatic 
				<span class=\'start_header_high_letters\'>C</span>hildren in 
				<span class=\'start_header_high_letters\'>E</span>u<span class=\'start_header_high_letters\'>R</span>ope';
$style[] = 'start_general';
?>


<?php
$header_top = '';
foreach ($list_language as $id_language => $features_language) {
	$header_top .= '<a href=\'.?lang='.$features_language['language_code'].'\' title = \''.$features_language['language_name'].'\'>
			<img src = \''.IMAGE_PATH.'flag_'.$features_language['language_code'].'\' alt = \''.$features_language['language_name'].'\'/>
			</a>';
}
?>

<div class='start_title'>
	<?php echo _("Initier le soignant à l'éducation thérapeutique des enfants asthmatiques en Europe"); ?>
</div>

<div>
	<div class='start_subtitle'>
		<?php echo _("Un <span class='start_subtitle_green'>site</span> conçu pour la pratique en <span class='start_subtitle_green'>pédiatrie ambulatoire</span>"); ?>
	</div>

	<div class='choice_user_type'>
		<div class='choice_user_title'>
			<?php echo strtoupper(_("Qui etes-vous ?")); ?>
		</div>
		<p>
			<a href='.?module=user_management&action=connection'><?php echo _("Je suis un médecin inscrit à Teacher"); ?></a>
			<?php echo _("nécessite une authentification"); ?>
		</p>

		<p>
			<a href='.?module=user_management&action=connection&visitor=1'><?php echo _("Je suis un patient, ou un visiteur intéressé"); ?></a>
			<?php echo _("accès libre"); ?>
		</p>
	</div>
</div>

<div>
	<p class = 'start_logo'><a href = 'http://ecpcp.eu/' target = '_blank'>
		<img src = '<?php echo IMAGE_PATH; ?>logo_ECPCP.png' alt = 'ECPCP' title = 'European Confederation of Primary Care Paediatricians'/></a></p>
	<p class = 'start_logo'><a href = 'http://www.afpa.org/' target = '_blank'>
		<img src = '<?php echo IMAGE_PATH; ?>logo_AFPA.png' alt = 'AFPA' title = '<?php echo _("Association Française de Pédiatrie Ambulatoire"); ?>'/></a></p>
	<p class = 'start_logo'><a href = 'http://www.mps-dunkerque.com/services/ecole-asthme.html' target = '_blank'>
		<img src = '<?php echo IMAGE_PATH; ?>logo_asthma_school_Dunkerque.png' alt = "école de l'asthme de Dunkerque" title = "<?php echo _("École de l'Asthme de Dunkerque"); ?>"/></a></p>
</div>

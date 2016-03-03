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

$title_view = _("Diagnostic éducatif");
$style[] = 'educ_diag';

?>

	<p class = 'advices_title'>
<?php
	if (is_file(IMAGE_PATH.'advice_'.$_SESSION['lang'].'.gif'))
		$file = IMAGE_PATH.'advice_'.$_SESSION['lang'].'.gif';
	else
		$file = IMAGE_PATH.'advice'.DEFAULT_LOCALE.'.gif';
?>
		<img src = '<?php echo $file; ?>'/>
		<?php echo _("Conseils pour une réalisation optimale du bilan éducatif partagé :"); ?>
	</p>
	<div class = 'advices'>
		<div class= 'advice'>
			<p class = 'advice_number'><span>1</span></p>
			<p><?php echo _("Prévoyez 30 minutes"); ?></p>
		</div>
		<div class = 'advice'>
			<p class = 'advice_number'><span>2</span></p>
			<p><?php echo _("Pour gagner du temps, demandez à la famille de remplir le test de contrôle de l’asthme (cACT) avant le diagnostic éducatif, par exemple en salle d’attente."); ?>
			<a href = '.?module=patient_teaching&action=show_cACT&from=create_educ_diag' class = 'link'><?php echo _("voir le cACT"); ?></a></p>
		</div>
		<div class = 'advice'>
			<p class = 'advice_number'><span>3</span></p>
			<p><?php echo _("Expliquez à l’enfant en quoi le bilan est utile. Par exemple : ce bilan va nous aider à mieux connaître les conséquences de ton asthme, et ce qu’il faut améliorer pour qu’il te gêne le moins possible."); ?></p>
		</div>
		<div class = 'advice'>
			<p class = 'advice_number'><span>4</span></p>
			<p><?php echo _("Adressez-vous en priorité à l’enfant. Ne faites compléter par les adultes que si  nécessaire."); ?></p>
		</div>
		
	</div>
	
	<p class = 'advices_title'>
<?php
	if (is_file(IMAGE_PATH.'material_'.$_SESSION['lang'].'.gif'))
		$file = IMAGE_PATH.'material_'.$_SESSION['lang'].'.gif';
	else
		IMAGE_PATH.'advice'.DEFAULT_LOCALE.'.gif';
?>
		<img src = '<?php echo $file; ?>' />
		<?php echo _("Matériel nécessaire :"); ?>
	</p>
	<div class = 'advices'>
		<p class = 'advice'>
			<img src = '<?php echo IMAGE_PATH; ?>aerosol_2.gif' /><br/>
			<?php echo _("Spray, inhalateur de poudre sèche, Autohaler de démonstration"); ?>
		</p>
		<p class = 'advice'>
			<img src = '<?php echo IMAGE_PATH; ?>aerosolchb_2.gif' /><br/>
				<?php echo ("Chambre d'inhalation"); ?>
		</p>
		<p class = 'advice'>
			<img src = '<?php echo IMAGE_PATH; ?>peakflow_2'/ ><br/>
				<?php echo _("Débimètre de pointe"); ?>
		</p>
		<p class = 'advice'>
			<?php echo _("Embouts jetables"); ?>
		</p>	
	</div>
	
	<p class = 'advices_title'>
		<?php echo _("Important"); ?> !
	</p>
	<p class = 'advice_important'>
		<?php echo _("Le diagnostic éducatif  ne doit être qu’un recueil d’informations. Ne cédez pas à l’envie de corriger une réponse  erronée ou d'apporter un complément d’information dans l’immédiat : la séance deviendrait trop longue. L’apprentissage fera l’objet des séances ultérieures."); ?>
	</p>

	<p class = 'go'>
		<a href = '.?module=patient_teaching&action=create_educ_diag&page_educ_diag=team'>
			<img src = '<?php echo IMAGE_PATH; ?>row_go.png' />
			<?php echo _("C'est parti !"); ?>
		</a>
	</p>	


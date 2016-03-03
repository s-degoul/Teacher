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


$title_view = _("Coup d'oeil sur le parcours TEACHER");
$style[] = 'start_user';
?>


<!--
<p class='return'>
	<a href='?module=start&action=start_user' class='link'>
		<img src='<?php echo IMAGE_PATH.'return_row.png'; ?>' alt="return" />
		<?php echo _("retour à l'accueil"); ?>
	</a>
</p>
-->


<div class = 'synopsis'>

	<div class = 'synopsis_user_stage'><?php echo _("<strong>Étape 1</strong><br/>Je teste mes compétences à l'éducation thérapeutique du patient (E.T.P.)"); ?></div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_user_stage'><?php echo _("<strong>Étape 2</strong><br/>Je prends connaissance de &quot;l'essentiel à savoir avant de commencer&quot;"); ?></div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_user_stage'><?php echo _("<strong>Étape 3</strong><br/>J'inclus un patient"); ?></div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_row_angle'><img src = 'images/row_angles_blue.png' class = 'synopsis_img_row_angle' /></div>
	
	<div class = 'synopsis_patient'>
		<div class = 'synopsis_patient_show'>
			<p class = 'synopsis_patient_title'><?php echo _("Programme éducatif d'un patient inclus"); ?></p>
			<p class = 'synopsis_patient_note'><?php echo _("À partir de ce stade, TEACHER se décline à <strong>2 voix</strong> (celle de l’enfant et celle du médecin) jusqu’à la fin du programme. À chaque support destiné à l’enfant (et/ou à ses parents) correspond le conducteur proposant au médecin une méthode pour repérer les besoins,	évaluer les connaissances de l’enfant, ou lui transmettre un message."); ?></p>
			<div class = 'synopsis_patient_stage'><?php echo _("Diagnostic éducatif"); ?></div>
			<div class = 'synopsis_patient_row'><img src = 'images/row_bottom_green.png' /></div>
			<div class = 'synopsis_patient_stage'><?php echo _("Synthèse = contrat éducatif personnalisé"); ?></div>
			<div class = 'synopsis_patient_row'><img src = 'images/row_bottom_green.png' /></div>
			<div>
				<div class= 'synopsis_patient_cycle_row'><img src = 'images/row_rounded_top_right.png' /></div>
				<div class= 'synopsis_patient_cycle_stage_top'><?php echo _("Séances d'apprentissage, parmi 10 objectifs éducatifs"); ?></div>
				<div class= 'synopsis_patient_cycle_row'><img src = 'images/row_rounded_bottom_right.png' /></div>
			</div>
			<div>
				<div class= 'synopsis_patient_cycle_stage_left'><?php echo _("Éventuel renforcement éducatif"); ?></div>
				<div class= 'synopsis_patient_cycle_stage_right'><?php echo _("Évaluation en fin de cycle de l'enfant et de ses parents"); ?></div>
			</div>
			<div>
				<div class= 'synopsis_patient_cycle_row'><img src = 'images/row_rounded_top_left.png' /></div>
				<div class= 'synopsis_patient_cycle_stage_bottom'><?php echo _("Synthèse de l'évaluation"); ?></div>
				<div class= 'synopsis_patient_cycle_row'><img src = 'images/row_rounded_bottom_left.png' /></div>
			</div>
			<div class = 'synopsis_patient_row'><img src = 'images/row_bottom_green.png' /></div>
			<div class = 'synopsis_patient_stage'><?php echo _("Fin du programme éducatif"); ?></div>
			<div class = 'synopsis_patient_row'><img src = 'images/row_bottom_green.png' /></div>
			<div class = 'synopsis_patient_stage'><?php echo _("Lettre de liaison avec les autres soignants"); ?></div>
			<div class = 'synopsis_patient_row'><img src = 'images/row_bottom_green.png' /></div>
			<div class = 'synopsis_patient_stage'><?php echo _("Évaluation du maintien des compétences à 6 mois"); ?></div>
		</div>
<!--
		<div class = 'synopsis_patient_other'>
			<p class = 'synopsis_patient_title'><?php echo _("Patient y"); ?></p>
		</div>
		<div class = 'synopsis_patient_other'>
			<p class = 'synopsis_patient_title'><?php echo _("Patient z"); ?></p>
		</div>
-->
	</div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_user_stage'><?php echo _("<strong>Étape 4</strong><br/>Je teste mes compétences à l'E.T.P. en fin de programme"); ?></div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_user_stage'><?php echo _("<strong>Étape 5</strong><br/>Je rafraîchis mes connaissances"); ?></div>
</div>

<!--
<div class = 'link_last'></div>
<div class = 'link_next'>
	<p><a href='?module=start&action=start_user'><?php echo _("retour à l'accueil"); ?></a></p>
</div>
-->

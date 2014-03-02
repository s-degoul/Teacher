  
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
$title_view = _("Ce que Teacher peut vous offrir");
$style[] = 'start_user';

if (isset ($_GET['from']) and $_GET['from'] == 'connection')
	$messages['info'][] = _("Vous pouvez à tous moments cliquer sur &quot;Accueil&quot; en haut à gauche pour revenir sur cette page.");
?>

<p><?php echo _("Bienvenue sur Teacher."); ?><p>
<p><?php echo _("Ce site est destiné à vous initier à l'éducation thérapeutique du patient
				par sa pratique au quotidien auprès des enfants asthmatiques et de leur famille."); ?><p>
<p><?php echo _("Étape après étape, il vous guidera dans votre démarche pédagogique."); ?><p>

<div class = 'synopsis'>

	<div><h1><?php echo _("Coup d'oeil sur le parcours TEACHER"); ?></h1></div>
	<div class = 'synopsis_user_stage'><?php echo _("Testez vos compétences à l'éducation thérapeutique (E.T.) du patient"); ?></div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_user_stage'><?php echo _("Prenez connaissance de &quot;l'essentiel à savoir avant de commencer&quot;"); ?></div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_user_stage'><?php echo _("Vous pouvez inclure un/des patient(s)"); ?></div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_row_angle'><img src = 'images/row_angles_blue.png' class = 'synopsis_img_row_angle' /></div>
	
	<div class = 'synopsis_patient'>
		<div class = 'synopsis_patient_show'>
			<p class = 'synopsis_patient_title'><?php echo _("LEPETIT Quinquin"); ?></p>
			<p class = 'synopsis_patient_note'><?php echo _("À partir de ce stade, TEACHER se décline à <strong>2 voix</strong> (celle de l’enfant et celle du médecin).
							Jusqu’à la fin du programme, chaque élément de chaque étape de la démarche pédagogique est dédoublé :
							à un support destiné à l’enfant (et/ou à ses parents) correspond le conducteur proposant au pédiatre une méthode pour repérer les besoins,
							évaluer les connaissances de l’enfant, ou lui transmettre un message"); ?></p>
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
	<div class = 'synopsis_user_stage'><?php echo _("Évaluez vos compétences à l'E.T. en fin de programme"); ?></div>
	<div class = 'synopsis_user_row'><img src = 'images/row_bottom_blue.png' /></div>
	<div class = 'synopsis_user_stage'><?php echo _("Rafraîchissez vos connaissances"); ?></div>
</div>

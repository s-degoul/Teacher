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
		<p><?php echo _("L’évaluation de la sévérité d’une crise se base sur 3 critères principaux :"); ?></p>
		<div>
			<p class='good_to_know_3_cols'>
				<span class='nb_good_to_know'>1.</span>
				<?php echo _("L’intensité de la gêne respiratoire, évaluée par la persistance des symptômes au repos,
			et l’impossibilité de prononcer une phrase sans reprendre son souffle"); ?>
			</p>
			<p class='good_to_know_3_cols'>
				<span class='nb_good_to_know'>2.</span>
				<?php echo _("L’inefficacité des bronchodilatateurs d’action immédiate"); ?>
			</p>
			<p class='good_to_know_3_cols'>
				<span class='nb_good_to_know'>3.</span>
				<?php echo _("La valeur du débit de pointe inférieure à 60% de la valeur normale (zone rouge)"); ?>
			</p>
		</div>
		
		<p><?php echo _("D’autres signes peuvent s’y associer :"); ?></p>
		<div>
			<p class='good_to_know_2_cols'>
				<span class='nb_good_to_know'>1.</span>
				<?php echo _("tirage sus-sternal ou/et intercostal, balancement thoraco-abdominal, battement des ailes du nez"); ?>
			</p>
			<p class='good_to_know_2_cols'>
				<span class='nb_good_to_know'>2.</span>
				<?php echo _("agitation ou somnolence, sueur"); ?>
			</p>
		</div>
		<div>
			<p class='good_to_know_2_cols'>
				<span class='nb_good_to_know'>3.</span>
				<?php echo _("pâleur, coloration bleutée des lèvres"); ?>
			</p>
			<p class='good_to_know_2_cols'>
				<span class='nb_good_to_know'>4.</span>
				<?php echo _("anomalies de la fréquence cardiaque ou respiratoire"); ?>
			</p>
		</div>
	</div>

	<div class='pict_how_to_guide'>
	</div>
	<div class='how_to_guide'>
		<h2><?php echo _("Présentez les images de la fiche Objectif 2 Enfant."); ?></h2>
		<p><?php echo _("Deux cas se présentent :"); ?></p>
		<div>
			<div class = 'nb_how_to_guide'>1.</div>
			<div class = 'chapter_how_to_guide'>
				<p><?php echo _("<strong>Il a déjà présenté une crise grave (recours aux urgences et/ou hospitalisation) :</strong> Aidez l’enfant à identifier SES signes : demandez-lui ce qu’il a ressenti de particulier, en quoi sa crise était différente de d’habitude ?<br/>
				En vous aidant de la première partie du document sur la crise d’asthme grave, rajustez et validez ce que dit l’enfant.<br/>
				Demandez aux parents s’ils veulent rajouter d’autres signes qu’ils avaient constatés et faites-les figurer sur le document."); ?></p>
			</div>	
		</div>

		<div>
			<div class = 'nb_how_to_guide'>2.</div>
			<div class = 'chapter_how_to_guide'>
				<p>
					<?php echo _("<strong>Il n’a jamais eu de crise grave : </strong> prenez connaissance ensemble des signes listés dans la première partie et demandez à l’enfant et aux parents ce qu’ils en pensent."); ?>
				</p>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("Une crise grave, c’est : difficulté à respirer même au repos,
					difficulté à parler, inefficacité des traitements de secours, DEP &lsaquo; 60%"); ?></div>
				</div>

				<p><?php echo _("Le médecin regarde la 2<sup>ème</sup> partie du document avec l’enfant et sa famille et le commente"); ?></p>

				<div class='key_message'>
					<div class='pict_key_message'></div>
					<div class='content_key_message'><?php echo _("C’est une <strong>URGENCE</strong> ! Il faut immédiatement prévenir ton entourage
					que tu as tout de suite besoin de traitement et qu’il faut avoir un avis médical"); ?></div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php
TargetInfoBox(array(
				'learning_method' => array (_("réflexion en lien avec le vécu de l'enfant")),
				'duration' => '10 min',
				'print' => array (
								_("Objectif 2 enfant"),
								't2_recognize_asthme_attack' => array (
											'title' => _("je sais reconnaître les signes d’une crise grave : c’est une URGENCE !"),
											'before_title' => '',
											'after_title' => ''
											)
								),
				'material' => array (_("prévoir un crayon :)"))
				));
?>

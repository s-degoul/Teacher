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

$style[] = 'patient_eval';


if ($maintain_eval == 0) {
	$title_view = _("Évaluation de l'enfant");
?>
<p>
	<?php echo _("Cette évaluation en fin de parcours éducatif concerne aussi bien l'enfant que ses parents."); ?>
</p>

<p>
	<?php echo _("Remettez aux parents le questionnaire qui leur est destiné"); ?>
<?php
$file = '';
if (is_file (STATIC_PDF_PATH.'parent_eval_'.$_SESSION['lang'].'.pdf'))
	$file = STATIC_PDF_PATH.'parent_eval_'.$_SESSION['lang'].'.pdf';
elseif (is_file (STATIC_PDF_PATH.'parent_eval_'.DEFAULT_LOCALE.'.pdf'))
	$file = STATIC_PDF_PATH.'parent_eval_'.DEFAULT_LOCALE.'.pdf';

if($file != '') {
?>
	(<a href = '<?php echo $file; ?>'><?php echo _("cliquez ici pour y accéder"); ?></a>).
<?php
}
?>
	<?php echo _("Demandez-leur de le remplir en salle d’attente. Ils pourront ainsi évaluer leurs connaissances de la maladie, car ils auront accès au corrigé en fin de questionnaire. Expliquez-leur que c’est un questionnaire vrai-faux, avec degré de certitude. &laquo; je suis... pas du tout sûr, moyennement sûr, tout à fait sûr... de ma réponse &raquo;. A la fin de la séance, les parents vous remettront leur questionnaire auto-corrigé."); ?>
</p>
<p>
	<?php echo _("L’enfant reste seul avec vous. Il aura ainsi tout loisir pour s’exprimer. Abordez avec lui le questionnaire d’évaluation finale en vous laissant guider par les questions: elles vérifient que l’enfant maîtrise les connaissances, les gestes techniques et les compétences d’adaptation (mises en situation) définis dans le programme éducatif personnalisé et que ses acquis antérieurs sont stables."); ?>
</p>
<p>
	<?php echo _("Le score s’établit automatiquement après avoir cliqué, pour chaque objectif, sur &laquo; validé &raquo;, &laquo; partiellement validé &raquo; ou &laquo; non validé &raquo;. Les objectifs de sécurité (1, 2, 3 et 5) ne donnent pas lieu à des réponses partielles."); ?>
</p>
<p>
	<?php echo _("Ce résultat servira à décider si un renforcement éducatif ultérieur est nécessaire ou non. Si c'est le cas, programmez-le. Sinon prévoyez de revoir l’enfant 6 mois plus tard, pour vérifierà distance le maintien de ses connaissances et compétences."); ?>
</p>

<?php
}



else {
?>
<p><?php echo _("Votre patient a validé son cycle éducatif initial. L'objectif de cette séance est d'évaluer à distance, environ six mois, le maintien des capacités de l'enfant à l'auto-soin et à s'adapter à sa maladie."); ?></p>

<p><?php echo _("Quelques conseils"); ?> :</p>
<ul>
	<li><?php echo _("Prévoyez 20 minutes"); ?>,</li>
	<li><?php echo _("expliquez à l'enfant en quoi cette séance est utile"); ?>,</li>
	<li><?php echo _("adressez-vous en priorité à l'enfant. Il pourra se faire aider de ses parents."); ?></li>
</ul>

<p><?php echo _("Matériel nécessaire"); ?> :</p>
<ul>
	<li><?php echo _("le dispositif d'inhalation de l'enfant"); ?>,</li>
	<li><?php echo _("sa chambre d'inhalation"); ?>,</li>
	<li><?php echo _("son débimètre de pointe"); ?>.</li>
</ul>

<p><?php echo _("Au terme de la séance, vous pourrez décider, en concertation avec l'enfant et ses parents"); ?> :</p>
<ul>
	<li><?php echo _("soit de renforcer un(des) objectif(s) pédagogique(s) non validé(s)"); ?>,</li>
	<li><?php echo _("soit de programmer un suivi pédagogique à distance d'environ un an."); ?></li>
</ul>

<p><?php echo _("N'oubliez pas d'encourager et de féliciter l'enfant et sa famille !"); ?></p>
<?php
}
?>

<p class = 'go'>
	<a href='.?module=patient_teaching&action=create_eval&page_eval=1'>
		<img src = '<?php echo IMAGE_PATH; ?>row_go.png' alt = "go" />
		<?php echo _("C'est parti !"); ?>
	</a> 
</p>	

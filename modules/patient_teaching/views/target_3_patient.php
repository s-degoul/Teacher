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

$subtype = 'PAPE';
$css_PAPE = 'active';
$css_PAPP = 'inactive';

if (isset ($_GET['subtype']) and $_GET['subtype'] == 'PAPP') {
	$subtype = 'PAPP';
	$css_PAPE = 'inactive';
	$css_PAPP = 'active';
}
?>


<div>
	<p class = 't3_subtype'>
		<a class = '<?php echo 't3_subtype_'.$css_PAPE; ?>'href = '.?module=patient_teaching&action=show_target&id_target=3&type=patient&subtype=PAPE'>
				<?php echo _("Plan d'Action Personnalisé de l'Enfant (PAPE)"); ?></a>
	</p>
	<p class = 't3_subtype'>
		<a class = '<?php echo 't3_subtype_'.$css_PAPP; ?>' href = '.?module=patient_teaching&action=show_target&id_target=3&type=patient&subtype=PAPP'>
				<?php echo _("Plan d'Action Personnalisé pour les Parents (PAPP)"); ?></a>
	</p>
</div>

<?php
if ($subtype == 'PAPE') {
?>

<div class = 't3_chapter_green'>
	<h2><span><?php echo _("Mon asthme va bien"); ?></span></h2>
	<p>
		<?php echo _("Mon médecin m'a dit de prendre tous les jours"); ?>
		<?php echo ("le matin"); ?>
		<img src  = '<?php echo IMAGE_PATH.'target/3/sun.jpg'; ?>' alt = '<?php echo _("soleil"); ?>' />
		<?php echo ("et/ou le soir"); ?>
		<img src  = '<?php echo IMAGE_PATH.'target/3/moon.jpg'; ?>' alt = '<?php echo _("lune"); ?>' />
		<?php echo ("un médicament anti-inflammatoire (= traitement de fond) que j'écris ou dessine"); ?>
		: ..........................
	</p>
	<p>
		<?php echo _("J'ai mon médicament de secours (médicament de couleur bleue = bronchodilatateur d'action rapide) près de moi en cas de crise ; c'est"); ?>
		: ..........................
	</p>
	<p>
		<?php echo _("Je connais mes petits signes qui peuvent annoncer une crise d'asthme ; c'est"); ?>
		: ..........................
	</p>
</div>

<div class = 't3_chapter_red'>
	<h2><span><?php echo _("J'ai une gêne pour respirer : je commence peut-être une crise d'asthme"); ?></span></h2>
	<div class = 't3_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/warn_adult.jpg'; ?>' alt='<?php echo _("prévenir un adulte"); ?>' />
		<p><?php echo _("je préviens un adulte"); ?></p>
	</div>
	<div class = 't3_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/breathe_throw_nose.jpg'; ?>' alt='<?php echo _("respirer par le nez"); ?>' />
		<p>+ <?php echo _("je respire lentement par le nez"); ?></p>
	</div>
	<div class = 't3_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/blow_throw_mouse.jpg'; ?>' alt='<?php echo _("souffler par la bouche"); ?>' />
		<p>+ <?php echo _("je souffle par la bouche"); ?></p>
	</div>
	<div class = 't3_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/aerosol.jpg'; ?>' alt='<?php echo _("prendre médicament de secours"); ?>' />
		<p>+ <?php echo _("je prends 2 bouffées de médicament de secours"); ?></p>
	</div>
	
	<div><hr></div>
	
	<div class = 't3_2_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/run.jpg'; ?>' alt='<?php echo _("enfants courent"); ?>' />
		<p><?php echo _("Je ne suis plus du tout gêné pour respirer"); ?></p>
		<p><?php echo _("je me surveille 1 à 2 jours et je réfléchis à ce qui aurait pu provoquer cette gêne respiratoire"); ?></p>
	</div>
	<div class = 't3_2_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/support.jpg'; ?>' alt='<?php echo _("soutenir"); ?>' />
		<p><?php echo _("Je reste encore gêné pour respirer"); ?></p>
		<p><?php echo _("je prends 2 bouffées de mon médicament de secours 15 minutes plus tard"); ?></p>
	</div>
	
	<p class = 't3_important'><?php echo _("Si malgré la prise de mon médicament de secours la gêne respiratoire ne se calme pas, je suis les consignes de la crise grave"); ?></p>
</div>

<div class = 't3_chapter_red'>
	<h2><span><?php echo _("Je fais une crise d'asthme grave. Il faut :"); ?></span></h2>
	<div class = 't3_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/warn_adult_urgent.jpg'; ?>' alt='<?php echo _("prévenir un adulte"); ?>' />
		<p><?php echo _("prévenir un adulte"); ?><br/><br/><br/></p>
	</div>
	<div class = 't3_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/repeat_drug.jpg'; ?>' alt='<?php echo _("répéter les médicaments"); ?>' />
		<p><?php echo _("répéter les médicaments de secours : 2 bouffées toutes les 15 minutes jusqu'à 3 fois en 1 heure"); ?></p>
	</div>
	<div class = 't3_3_images'>
		<img src='<?php echo IMAGE_PATH.'target/3/tablet.jpg'; ?>' alt='<?php echo _("comprimé de cortisone"); ?>' />
		<p><?php echo _("augmenter mon traitement en prenant de la cortisone par comprimé ou sirop à la dose prescrite par mon médecin"); ?></p>
	</div>
	<div>
<!--		<p><?php echo _("et appeler mon médecin Dr"); ?> .................</p>-->
		<p>
			<?php echo _("et si ça ne passe pas en 1 heure appeler le SAMU"); ?>
			<img src='<?php echo IMAGE_PATH.'target/2/phone_emergency.jpg'; ?>' alt='<?php echo _("numéro urgent : 15 ou 112"); ?>' height = 40/>
		</p>
	</div>
	<div class = 't3_important'>
		<p><?php echo _("En cas de crise grave, l'appel du médecin sera toujours nécessaire"); ?></p>
		<ul>
			<li><?php echo _("soit dans l'heure qui suit (pédiatre, médecin de garde ou si indisponible le SAMU) en cas de persistance de la gêne respiratoire"); ?></li>
			<li><?php echo _("soit dans les 24 heures pour adapter le traitement si la gêne respiratoire s'est améliorée.
							En attendant, il faut continuer à prendre 2 bouffées de médicament de secours toutes les 4 à 6 heures jusqu'à la consultation"); ?></li>
		</ul>
	</div>
</div>
<?php
}



else {
?>

<div class = 't3_chapter_green'>
	<h2><span><?php echo _("Son asthme va bien"); ?></span></h2>
	<p><?php echo _("Tous les jours, si le médecin l'a prescrit, mon enfant prend"); ?> ................................... </p>
	<p><?php echo _("Avant le sport, mon enfant prend"); ?> ................................... </p>
	<p><?php echo _("Son débit de pointe est stable et est au dessus de"); ?> ................................... </p>

	<p>
		<?php echo ("Il a son médicament de secours près de lui, c'est"); ?> ..............................................
		<?php echo ("et il l'utilise <strong>en cas de crise d'asthme</strong> (toux sèche, sifflement, douleur dans la poitrine, essouflement) en faisant 2 bouffées par prise."); ?>
	</p>
	<img src  = '<?php echo IMAGE_PATH.'target/3/aerosol.jpg'; ?>' alt = '<?php echo _("aérosol"); ?>' />
</div>

<div class = 't3_chapter_red'>
	<h2><span><?php echo _("Quand augmenter le traitement ?"); ?></span></h2>
	<p class = 't3_strong'><?php echo _("Si mon enfant a ressenti 2 ou plusieurs de ces symptômes dans la semaine écoulée"); ?></p>
	
	<table class = 't3_table'>
		<tbody>
			<tr>
				<td><?php echo _("Toux sèche, sifflement, douleur dans la poitrine (signes d’asthme) plus de 2 par semaine"); ?></td>
				<td><?php echo _("oui"); ?></td>
				<td><?php echo _("non"); ?></td>
			</tr>
			<tr>
				<td><?php echo _("Activités de tous les jours ou sport limités par l’asthme"); ?></td>
				<td><?php echo _("oui"); ?></td>
				<td><?php echo _("non"); ?></td>
			</tr>
			<tr>
				<td><?php echo _("Réveil la nuit à cause de l’asthme"); ?></td>
				<td><?php echo _("oui"); ?></td>
				<td><?php echo _("non"); ?></td>
			</tr>
			<tr>
				<td><?php echo _("Besoins de médicaments de secours (bleu) plus de 2 par semaine"); ?></td>
				<td><?php echo _("oui"); ?></td>
				<td><?php echo _("non"); ?></td>
			</tr>
			<tr>
				<td><?php echo _("Débit de pointe inférieur à ............................................."); ?></td>
				<td><?php echo _("oui"); ?></td>
				<td><?php echo _("non"); ?></td>
			</tr>
		</tbody>
	</table>
	
	<p class = 't3_important'><?php echo _("Il renforce son traitement en prenant 2 bouffées de son médicament de secours (bleu) matin midi et soir
											(+/- 2 bouffées la nuit) pendant 3 jours. Si ses symptômes persistent au-delà de 3 jours, je contacte mon médecin"); ?></p>
	<ul>
		<li><?php echo _("En cas de gêne respiratoire importante (essoufflement au repos, difficulté à parler)"); ?> ,</li>
		<li><?php echo _("Et/ou si la gêne ne se calme pas après avoir pris 2 bouffées de médicament de secours (bleu), ou réapparaît moins de 4 heures après la prise"); ?> ,</li>
		<li><?php echo _("Et/ou si le débit de pointe est inférieur à ............................. ou ne remonte pas après avoir pris des médicaments de secours"); ?></li>
	</ul>
	<p class = 't3_important'><?php echo _("Il doit prendre le médicament de secours : 2 bouffées toutes les 15 mn jusqu’à 3 fois en 1 heure, puis un corticoïde oral
									(ex : Prednisolone, Bétaméthasone) à la dose de"); ?> .............................</p>
									
	<p class = 't3_strong'><?php echo _("30 minutes plus tard"); ?> :</p>
	<ul>
		<li><?php echo _("soit sa gêne respiratoire (et/ou le DEP) s’améliore(nt)"); ?> :</li>
	</ul>
	<p class = 't3_important'><?php echo _("Il continue le médicament de secours 2 bouffées toutes les 4 à 6 heures par jour et le corticoïde oral le matin et je contacte le médecin pour qu’il (elle) soit examiné(e) dans les 24 heures"); ?> ;</p>
	<ul>
		<li><?php echo _("soit sa gêne respiratoire ne s’améliore pas"); ?> :</li>
	</ul>
	<p class = 't3_important'><?php echo _("Il faut demander en urgence un avis médical (pédiatre, médecin de garde, SAMU(=15), urgences hospitalières) et en attendant il faut continuer
												le médicament de secours 2 bouffées toutes les 15 mn"); ?>.</p>

	<p class = 't3_strong'><?php echo _("Numéro de téléphone à joindre en urgence :"); ?> ...........................</p>
	<p class = 't3_strong'><?php echo _("Pour plus d’efficacité, il est souhaitable d’utiliser un médicament de secours en spray avec une chambre d’inhalation"); ?></p>
	<p class = 't3_strong'><?php echo _("Médicament de secours=médicament bleu=bronchodilatateur d’action rapide"); ?></p>


</div>

<?php
}
?>

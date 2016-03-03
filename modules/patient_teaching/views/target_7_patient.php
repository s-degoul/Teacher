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

<div>
	<h2><?php echo _("Rappel"); ?></h2>
	<p>
		<?php echo _("Ma valeur de débit expiratoire de pointe (DEP) est de"); ?>
		..........		
		<?php echo _("L/min en moyenne"); ?>
	</p>
	<p>
		<?php echo _("Ma valeur <span class = 'target_text_orange'>&laquo; alerte &raquo; </span> est de"); ?> : ..........
	</p>
	<p>
		<?php echo _("Ma valeur <span class = 'target_text_red'>&laquo; alerte grave &raquo; </span> est de"); ?> : ..........
	</p>
</div>

<div class = 't7_chapter_green'>
	<h2><span><?php echo _("Mon asthme va bien. Mon DEP est au dessus de"); ?></span></h2>
	<p>
		<?php echo _("Mon médecin m'a dit de prendre tous les jours"); ?>
		<?php echo ("le matin"); ?>
		<img src  = '<?php echo IMAGE_PATH.'target/7/sun.jpg'; ?>' alt = '<?php echo _("soleil"); ?>' />
		<?php echo ("et/ou le soir"); ?>
		<img src  = '<?php echo IMAGE_PATH.'target/7/moon.jpg'; ?>' alt = '<?php echo _("lune"); ?>' />
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

<div class = 't7_chapter_orange'>
	<h2><span><?php echo _("J'ai une gêne pour respirer : je commence peut-être une crise d'asthme"); ?></span></h2>
	<div class = 't7_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/warn_adult.jpg'; ?>' alt='<?php echo _("prévenir un adulte"); ?>' />
		<p><?php echo _("je préviens un adulte"); ?></p>
	</div>
	<div class = 't7_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/breathe_throw_nose.jpg'; ?>' alt='<?php echo _("respirer par le nez"); ?>' />
		<p>+ <?php echo _("je respire lentement par le nez"); ?></p>
	</div>
	<div class = 't7_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/blow_throw_mouse.jpg'; ?>' alt='<?php echo _("souffler par la bouche"); ?>' />
		<p>+ <?php echo _("je souffle par la bouche"); ?></p>
	</div>
	<div class = 't7_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/aerosol.jpg'; ?>' alt='<?php echo _("prendre médicament de secours"); ?>' />
		<p>+ <?php echo _("je prends 2 bouffées de médicament de secours"); ?></p>
	</div>
	
	<div>
		<div class='t7_row_left'>
			<img src='<?php echo IMAGE_PATH.'row_bottom_left_orange.jpg'; ?>' alt="fisrt possibility" />
		</div>
		<div class='t7_row_right'>
			<img src='<?php echo IMAGE_PATH.'row_bottom_right_orange.jpg'; ?>' alt="second possibility" />
		</div>
	</div>
	
	<div class = 't7_2_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/run.jpg'; ?>' alt='<?php echo _("enfants courent"); ?>' />
		<p><span class = 'target_text_orange'><?php echo _("Je ne suis plus du tout gêné pour respirer"); ?></span></p>
		<p><?php echo _("Je réfléchis à ce qui aurait pu provoquer cette gêne respiratoire, et j'en parle à mon médecin"); ?></p>
	</div>
	<div class = 't7_2_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/support.jpg'; ?>' alt='<?php echo _("soutenir"); ?>' />
		<p><span class = 'target_text_orange'><?php echo _("Je reste encore gêné pour respirer"); ?></span></p>
		<p><?php echo _("Je prends 2 bouffées de mon médicament de secours 10 à 15 minutes plus tard"); ?></p>
	</div>

	<div class = 't7_2_images'>
		<p><span class = 'target_text_orange'><?php echo _("Si je respire mieux, je surveille mon débit de pointe."); ?></span></p>
		<p><?php echo _("Si la valeur de mon débit de pointe est normale (au-dessus de ...............), je surveille mon souffle 1 à 2 jours. Si la valeur de mon souffle est en-dessous de ma valeur alerte (..............) je continue à prendre mon médicament de secours matin midi et soir jusqu’à que les chiffres de mon souffle soient redevenus normaux. Au-delà de 3 jours, j’en parle à mon médecin."); ?></p>
	</div>
	<div class = 't7_2_images'>
		<p><span class = 'target_text_orange'><?php echo _("Si malgré la prise de mon médicament de secours, la gêne respiratoire ne se calme pas, je suis les consignes de la crise grave"); ?></span></p>
	</div>
</div>

<div class = 't7_chapter_red'>
	<h2><span><?php echo _("JE FAIS UNE CRISE D'ASTHME GRAVE !"); ?></span></h2>
	<div class = 't7_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/breathless.jpg'; ?>' alt='<?php echo _("très essoufflé"); ?>' />
		<p><?php echo _("Je suis très essoufflé"); ?></p>
	</div>
	<div class = 't7_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/difficulty_speak.jpg'; ?>' alt='<?php echo _("difficulté à parler"); ?>' />
		<p><?php echo _("Je n'arrive pas à parler sans être essoufflé"); ?></p>
	</div>
	<div class = 't7_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/ineffectiveness_drugs.jpg'; ?>' alt='<?php echo _("médicaments pas efficaces"); ?>' />
		<p><?php echo _("Les médicaments de secours ne sont pas efficaces"); ?></p>
	</div>
	<div class = 't7_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/7/peakflow_red.jpg'; ?>' alt='<?php echo _("DP en zone rouge"); ?>' />
		<p><?php echo _("Les débit de pointe est en zone rouge"); ?></p>
	</div>

	<p class = 'target_text_red'><?php echo _("C'est une urgence ! Il faut immédiatement :"); ?></p>
	<div>
		<div class = 't7_2_divs'><img src='<?php echo IMAGE_PATH.'target/2/warn_adult.jpg'; ?>' alt='<?php echo _("prévenir un adulte"); ?>' /></div>
		<p class = 't7_2_divs'><?php echo _("prévenir un adulte"); ?></p>
	</div>
	<div>
		<div class = 't7_2_divs'><img src='<?php echo IMAGE_PATH.'target/2/aerosol_boy.jpg'; ?>' alt='<?php echo _("répéter les médicaments"); ?>' /></div>
		<p class = 't7_2_divs'>
			<?php echo _("Répéter les médicaments de secours : 2 bouffées toutes les 15 minutes"); ?>
			<br />
			<?php echo _("Augmenter ton traitement en prenant de la cortisone"); ?> =
			<img src='<?php echo IMAGE_PATH.'target/2/tablet.jpg'; ?>' alt='<?php echo _("comprimé"); ?>' height = 25/>
			<?php echo _("béthaméthasone / prednisolone"); ?>
		</p>
	</div>
	<div>
		<div class = 't7_2_divs'>
			<img src='<?php echo IMAGE_PATH.'target/2/ambulance.jpg'; ?>' alt='<?php echo _("alerter les secours"); ?>' />
			<br/>
			<img src='<?php echo IMAGE_PATH.'target/2/phone_emergency.jpg'; ?>' alt='<?php echo _("numéro urgent : 15 ou 112"); ?>' />
		</div>
		<div class = 't7_2_divs'>
			<p class = 'target_text_red'><?php echo _("L’appel au médecin sera toujours nécessaire :"); ?></p>
			<ul>
				<li><?php echo _("soit dans l’heure qui suit (pédiatre, médecin de garde, ou si indisponibles le SAMU =15), si la gêne respiratoire persiste malgré la prise des comprimés de cortisone (amélioration attendue en 30 à 60 minutes)"); ?></li>
				<li><?php echo _("soit dans les 24 heures, pour adapter le traitement si la gêne respiratoire s’est améliorée. En attendant, il faut continuer à prendre 2 bouffées de médicament de secours toutes les 4 à 6 heures jusqu’à la consultation."); ?></li>
			</ul>
		</div>
	</div>
</div>

<div class = 't7_remember'>
	<h2><?php echo _("Ce que je dois retenir"); ?> :</h2>
	<ul>
		<li><?php echo _("mon asthme va bien, je ne suis pas gêné(e) pour respirer : mon souffle est au-dessus de la valeur alerte"); ?></li>
		<li><?php echo _(" je suis gêné(e) pour respirer"); ?> :</li>
		<ul>
			<li><?php echo _("mon souffle est entre les 2 valeurs alerte : j'avertis mes parents, je prends mon médicament de secours et je continue à surveiller mon souffle"); ?></li>
			<li><?php echo _("mon souffle est en dessous de la valeur alerte grave : j'avertis un adulte que j’ai besoin de mon médicament de secours, peut-être de cortisone, et d’une consultation médicale."); ?></li>
		</ul>
	</ul>
</div>

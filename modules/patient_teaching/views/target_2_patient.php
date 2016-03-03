  
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


<div class = 't2_chapter_red'>
	<h2><span><?php echo _("Que ressent-on en cas de crise d'asthme grave ? Attention si :"); ?></span></h2>
	<div class = 't2_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/2/breathless.jpg'; ?>' alt='<?php echo _("très essoufflé"); ?>' />
		<p><?php echo _("Je suis très essoufflé"); ?></p>
	</div>
	<div class = 't2_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/2/difficulty_speak.jpg'; ?>' alt='<?php echo _("difficulté à parler"); ?>' />
		<p><?php echo _("Je n'arrive pas à parler sans être essoufflée"); ?></p>
	</div>
	<div class = 't2_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/2/ineffectiveness_drugs.jpg'; ?>' alt='<?php echo _("médicaments pas efficaces"); ?>' />
		<p><?php echo _("Les médicaments de secours ne sont pas efficaces"); ?></p>
	</div>
	<div class = 't2_4_images'>
		<img src='<?php echo IMAGE_PATH.'target/2/peakflow_red.jpg'; ?>' alt='<?php echo _("DP en zone rouge"); ?>' />
		<p><?php echo _("Les débit de pointe est en zone rouge"); ?></p>
	</div>
	
	<p><?php echo _("Autres signes :"); ?> .........................................................................</p>
</div>


<div class = 't2_chapter_red'>
	<h2><span><?php echo _("C'est une urgence ! Il faut immédiatement :"); ?></span></h2>
	<div>
		<div class = 't2_2_divs'><img src='<?php echo IMAGE_PATH.'target/2/warn_adult.jpg'; ?>' alt='<?php echo _("prévenir un adulte"); ?>' /></div>
		<p class = 't2_2_divs'><?php echo _("prévenir un adulte"); ?></p>
	</div>
	<div>
		<div class = 't2_2_divs'><img src='<?php echo IMAGE_PATH.'target/2/aerosol_boy.jpg'; ?>' alt='<?php echo _("répéter les médicaments"); ?>' /></div>
		<p class = 't2_2_divs'><?php echo _("répéter les médicaments de secours : 2 bouffées toutes les 15 minutes"); ?></p>
	</div>
	<div>
		<div class = 't2_2_divs'><img src='<?php echo IMAGE_PATH.'target/2/aerosol_girl.jpg'; ?>' alt='<?php echo _("prendre de la cortisone"); ?>' /></div>
		<p class = 't2_2_divs'>
		</p>
	</div>
	<p>
		<?php echo _("augmenter ton traitement en prenant de la cortisone"); ?> =
		<img src='<?php echo IMAGE_PATH.'target/2/tablet.jpg'; ?>' alt='<?php echo _("comprimé"); ?>' height = 25/>
		<?php echo _("bétaméthasone / prednisolone"); ?>
	</p>
	<div>
		<div class = 't2_2_divs'><img src='<?php echo IMAGE_PATH.'target/2/ambulance.jpg'; ?>' alt='<?php echo _("alerter les secours"); ?>' /></div>
		<p class = 't2_2_divs'>
			<?php echo _("alerter immédiatement ton médecin le Dr").' ....................<br/>'. _("ou le SAMU"); ?>
			<img src='<?php echo IMAGE_PATH.'target/2/phone_emergency.jpg'; ?>' alt='<?php echo _("numéro urgent : 15 ou 112"); ?>' />
		</p>
	</div>
</div>


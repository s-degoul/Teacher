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

<h2><?php echo _("Je sais mesurer mon souffle"); ?></h2>
<div>
	<div class = 't6_image_near_text'>
		<img src='<?php echo IMAGE_PATH.'target/6/peakflow_device.jpg'; ?>' alt='peakflow_device' height = 150/>
	</div>
	<div class = 't6_text_near_image'>
		<p><?php echo _("Ma valeur de débit expiratoire de pointe (DEP) aujourd’hui est  de"); ?> ............... <?php echo _("L/min"); ?></p>
	</div>
</div>

<h3><?php echo _("Quand je fais une crise d'asthme"); ?></h3>
<div>
	<div class = 't6_text_near_image'>
		<p><?php echo _("Mes bronches se resserrent, je n’arrive pas à souffler et les chiffres de mon débit de pointe baissent."); ?></p>
	</div>
	<div class = 't6_image_near_text'>
		<img src='<?php echo IMAGE_PATH.'target/6/tight_bronchi.jpg'; ?>' alt='tight bronchi' height = 150/>
	</div>
</div>

<div>
	<div class = 't6_image_near_text'>
		<img src='<?php echo IMAGE_PATH.'target/6/cough.jpg'; ?>' alt='cough'/>
	</div>
	<div class = 't6_text_near_image'>
		<p><?php echo _("Si mon débit de pointe est en dessous de ma valeur <span class = 'target_text_orange'>&laquo; alerte &raquo;</span> qui est de"); ?> ............... <?php echo _("L/min"); ?></p>
		<p><?php echo _("C’est que je commence une <span class = 'target_text_orange'>crise d’asthme</span>"); ?></p>
	</div>
</div>

<div>
	<div class = 't6_text_near_image'>
		<p><?php echo _("Si mon débit de pointe est en dessous de ma valeur <span class = 'target_text_red'>« alerte grave »</span> qui est de"); ?> ............... <?php echo _("L/min"); ?></p>
		<p><?php echo _("C’est une <span class = 'target_text_red'>crise d’asthme grave</span>"); ?></p>
	</div>
	<div class = 't6_image_near_text'>
		<img src='<?php echo IMAGE_PATH.'target/6/breathless.jpg'; ?>' alt='breathless'/>
	</div>
</div>


<h3><?php echo _("Quand mesurer mon débit de pointe ?"); ?></h3>
<ul>
	<li><?php echo _("Au départ, matin et soir avant la prise de mon traitement, pour mieux connaître mon souffle puis 1 fois par semaine ou par mois"); ?></li>
	<li><?php echo _("Avant le sport, ou en cas de pic de pollution ou de brouillard, pour m’assurer que mes bronches ne sont pas resserrées"); ?></li>
	<li><?php echo _("Chez mon médecin, 2 fois par an car la valeur du débit de pointe change en grandissant"); ?></li>
	<li><?php echo _("En cas de gêne respiratoire ou crise d’asthme, pour m’aider à adapter mon traitement"); ?></li>
</ul>


<h3><?php echo _("Pour la prochaine visite je remplis ce tableau."); ?></h3>

<p>
<?php
if (CheckPDFExists ('target_6_table_peakflow'))
	echo '<a href = \''.CheckPDFExists ('t6_table_peakflow').'\'>'._("Télécharger").'</a><br/>'."\n";
else
	echo _("Erreur: fichier introuvable")."\n";
?>

	<?php echo _("J’ y inscris ma valeur alerte et je tire un trait horizontal dans le tableau : au-dessus de la valeur alerte, tout va bien; 
				en dessous : je dois en parler avec un adulte pour adapter éventuellement mon traitement."); ?>
</p>

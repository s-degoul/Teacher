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

$title_view = _("Codes couleur de Teacher");
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

<h2>
	<?php echo _("Parcours dans Teacher"); ?>
</h2>

<div>
	<div class = 'show_user_color'></div>
	<p class = 'comment_color'>
		<?php echo _("cette couleur est en rapport avec votre parcours : auto-évaluations, formation, conducteur médecin pour les séances éducatives,..."); ?>
	</p>
</div>

<div>
	<div class = 'show_patient_color'></div>
	<p class = 'comment_color'>
		<?php echo _("cette couleur concerne le parcours de l'enfant."); ?>
	</p>
</div>


<h2>
	<?php echo _("Liens du menu de gauche"); ?>
</h2>

<p><?php echo _("Les liens en <span class = 'attractive_color'>rouge et gras</span> correspondent aux actions à réaliser."); ?></p>
<p><?php echo _("Les liens en <span class = 'active_color'>noir</span> sont actifs et vous permettent en général de visualiser ce qui a déjà été fait."); ?></p>
<p><?php echo _("Les liens en <span class = 'inactive_color'>gris</span> sont inactifs et correspondent généralement à des actions qu'il ne sera possible de réaliser qu'à un stade plus avancé dans le parcours."); ?></p>

<!--

<h2>
	<?php echo _("Messages"); ?>
</h2>

<p><?php echo _("Ces messages apparaissent en haut des pages sur <span class = 'message_bg_color'>fond jaune clair</span>."); ?></p>

<p><?php echo _("Les messages en <span class = 'error_color'>rouge et gras</span> indiquent une erreur qui bloque l'action en court et nécessite souvent une(des) correction(s) de votre part."); ?></p>
<p><?php echo _("Les messages en <span class = 'warning_color'>orange et gras</span> vous demandent en général la confirmation de votre action."); ?></p>
<p><?php echo _("Les messages en <span class = 'advice_color'>bleu et gras</span> comportent des conseils destinés à vous aider dans votre parcours."); ?></p>
<p><?php echo _("Enfin, les messages en <span class = 'info_color'>vert</span> vous donnent une simple information."); ?></p>
-->

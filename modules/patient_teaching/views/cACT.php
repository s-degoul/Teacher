  
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
$title_view = _("Test de Contrôle de l'Asthme");

$style[] = 'cACT';

?>

<p>
<?php echo _("Demandez à votre enfant de répondre aux 4 questions suivantes (en l'aidant si besoin mais sans l'influencer)."); ?>
</p>

<table class = 'cACT_child_table'>
	<thead>
		<tr>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class = 'cACT_child_title'><?php echo _("Comment va ton asthme aujourd'hui ?"); ?></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>0</div><img src = '<?php echo IMAGE_PATH.'child_very_bad.png'; ?>' alt = ''/></p>
				<p><?php echo _("Très mal"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>1</div><img src = '<?php echo IMAGE_PATH.'child_bad.png'; ?>' alt = ''/></p>
				<p><?php echo _("Mal"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>2</div><img src = '<?php echo IMAGE_PATH.'child_good.png'; ?>' alt = ''/></p>	
			<p><?php echo _("Bien"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>3</div><img src = '<?php echo IMAGE_PATH.'child_very_good.png'; ?>' alt = ''/></p>
				<p><?php echo _("Très bien"); ?></p></td>
		</tr>
		<tr>
			<td class = 'cACT_child_title'><?php echo _("Est-ce que ton asthme est un problème quand tu cours, quand tu fais de la gymnastique ou quand tu fais du sport ?"); ?></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>0</div><img src = '<?php echo IMAGE_PATH.'child_very_bad.png'; ?>' alt = ''/></p>
				<p><?php echo _("C'est un gros problème, je ne peux pas faire ce que je veux"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>1</div><img src = '<?php echo IMAGE_PATH.'child_bad.png'; ?>' alt = ''/></p>
				<p><?php echo _("C'est un problème et je n'aime pas ça"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>2</div><img src = '<?php echo IMAGE_PATH.'child_good.png'; ?>' alt = ''/></p>
				<p><?php echo _("C'est un petit problème mais ça va"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>3</div><img src = '<?php echo IMAGE_PATH.'child_very_good.png'; ?>' alt = ''/></p>
				<p><?php echo _("Ce n'est pas un problème"); ?></p></td>
		</tr>
		<tr>
			<td class = 'cACT_child_title'><?php echo _("Est-ce que tu tousses à cause de ton asthme ?"); ?></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>0</div><img src = '<?php echo IMAGE_PATH.'child_very_bad.png'; ?>' alt = ''/></p>
				<p><?php echo _("Oui, tout le temps"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>1</div><img src = '<?php echo IMAGE_PATH.'child_bad.png'; ?>' alt = ''/></p>
				<p><?php echo _("Oui, la plupart du temps"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>2</div><img src = '<?php echo IMAGE_PATH.'child_good.png'; ?>' alt = ''/></p>
				<p><?php echo _("Oui, parfois"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>3</div><img src = '<?php echo IMAGE_PATH.'child_very_good.png'; ?>' alt = ''/></p>
				<p><?php echo _("Non, jamais"); ?></p></td>
		</tr>
		<tr>
			<td class = 'cACT_child_title'><?php echo _("Est-ce que tu te réveilles la nuit à cause de ton asthme ?"); ?></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>0</div><img src = '<?php echo IMAGE_PATH.'child_very_bad.png'; ?>' alt = ''/></p>	
			<p><?php echo _("Oui, tout le temps"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>1</div><img src = '<?php echo IMAGE_PATH.'child_bad.png'; ?>' alt = ''/></p>
				<p><?php echo _("Oui, la plupart du temps"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>2</div><img src = '<?php echo IMAGE_PATH.'child_good.png'; ?>' alt = ''/></p>
				<p><?php echo _("Oui, parfois"); ?></p></td>
			<td class = 'cACT_child_item'><p><div class = 'cACT_child_nb'>3</div><img src = '<?php echo IMAGE_PATH.'child_very_good.png'; ?>' alt = ''/></p>
				<p><?php echo _("Non, jamais"); ?></p></td>
		</tr>

	</tbody>
</table>

<p><?php echo _("Veuillez répondre seul(e) aux 3 questions suivantes (sans vous laisser influencer par les réponses de votre enfant aux questions précédentes."); ?></p>

<div class = 'cACT_parent_question'>
	<div class = 'cACT_parent_title'><?php echo _("Au cours des 4 dernières semaines, combien de jours votre enfant a-t-il eu des symptômes dans la journée ?"); ?></div>
	<div>
		<div class = 'cACT_parent_nb'>5</div>
		<div class = 'cACT_parent_item'><?php echo _("Aucun"); ?></div>
		<div class = 'cACT_parent_nb'>4</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 1 et 3 jours"); ?></div>
		<div class = 'cACT_parent_nb'>3</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 4 et 10 jours"); ?></div>
		<div class = 'cACT_parent_nb'>2</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 11 et 18 jours"); ?></div>
		<div class = 'cACT_parent_nb'>1</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 19 et 24 jours"); ?></div>
		<div class = 'cACT_parent_nb'>0</div>
		<div class = 'cACT_parent_item'><?php echo _("Tous les jours"); ?></div>
	</div>
</div>
<div class = 'cACT_parent_question'>
	<div class = 'cACT_parent_title'><?php echo _("Au cours des 4 dernières semaines, combien de jours votre enfant a-t-il eu une respiration sifflante dans la journée à cause de son asthme ?"); ?></div>
	<div>
		<div class = 'cACT_parent_nb'>5</div>
		<div class = 'cACT_parent_item'><?php echo _("Aucun"); ?></div>
		<div class = 'cACT_parent_nb'>4</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 1 et 3 jours"); ?></div>
		<div class = 'cACT_parent_nb'>3</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 4 et 10 jours"); ?></div>
		<div class = 'cACT_parent_nb'>2</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 11 et 18 jours"); ?></div>
		<div class = 'cACT_parent_nb'>1</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 19 et 24 jours"); ?></div>
		<div class = 'cACT_parent_nb'>0</div>
		<div class = 'cACT_parent_item'><?php echo _("Tous les jours"); ?></div>
	</div>
</div>
<div class = 'cACT_parent_question'>
	<div class = 'cACT_parent_title'><?php echo _("Au cours des 4 dernières semaines, combien de jours votre enfant s'est-il réveillé pendant la nuit à cause de son asthme ?"); ?></div>
	<div>
		<div class = 'cACT_parent_nb'>5</div>
		<div class = 'cACT_parent_item'><?php echo _("Aucun"); ?></div>
		<div class = 'cACT_parent_nb'>4</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 1 et 3 jours"); ?></div>
		<div class = 'cACT_parent_nb'>3</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 4 et 10 jours"); ?></div>
		<div class = 'cACT_parent_nb'>2</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 11 et 18 jours"); ?></div>
		<div class = 'cACT_parent_nb'>1</div>
		<div class = 'cACT_parent_item'><?php echo _("Entre 19 et 24 jours"); ?></div>
		<div class = 'cACT_parent_nb'>0</div>
		<div class = 'cACT_parent_item'><?php echo _("Tous les jours"); ?></div>
	</div>
</div>

<p><?php echo _("Additionnez tous les points pour obtenir un score total"); ?></p>

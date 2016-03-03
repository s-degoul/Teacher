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


$title_view = _("Test de Contrôle de l'Asthme (childhood Asthma Control Test, cACT)");

$style[] = 'cACT';


if (CheckPDFExists ('cact') != 1) {
?>
<p class='print'>
	<a href = '<?php echo CheckPDFExists('cact'); ?>'>
		<img src='<?php echo IMAGE_PATH.'print_green.png'; ?>' alt = "<?php echo _("imprimer"); ?>" />
		<?php echo _("Imprimer"); ?>
	</a>
</p>
<?php
}


if(isset ($cact_score)) {
?>
<p class = 'cACT_score'>
	<span>
<?php
	echo _("Score").' : '.$cact_score.'/27';
?>
	</span>
</p>
<?php
}
?>

<p>
<?php echo _("Demandez à votre enfant de répondre aux 4 questions suivantes (en l'aidant si besoin mais sans l'influencer)."); ?>
</p>

<form method = 'post' action = '' >

	<table class = 'cACT_child_table'>
		<thead>
			<tr>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class = 'cACT_child_title'><?php echo _("Comment va ton asthme aujourd'hui ?"); ?></td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>0</div><img src = '<?php echo IMAGE_PATH.'child_very_bad.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'global' id = 'global_0' value = 0 />
						<label for = 'global_0'><?php echo _("Très mal"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>1</div><img src = '<?php echo IMAGE_PATH.'child_bad.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'global' id = 'global_1' value = 1 />
						<label for = 'global_1'><?php echo _("Mal"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>2</div><img src = '<?php echo IMAGE_PATH.'child_good.png'; ?>' alt = ''/></p>	
					<p>
						<input type = 'radio' name = 'global' id = 'global_2' value = 2 />
						<label for = 'global_2'><?php echo _("Bien"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>3</div><img src = '<?php echo IMAGE_PATH.'child_very_good.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'global' id = 'global_3' value = 3 />
						<label for = 'global_3'><?php echo _("Très bien"); ?></label>
					</p>
			</tr>
			<tr>
				<td class = 'cACT_child_title'><?php echo _("Est-ce que ton asthme est un problème quand tu cours, quand tu fais de la gymnastique ou quand tu fais du sport ?"); ?></td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>0</div><img src = '<?php echo IMAGE_PATH.'child_very_bad.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'sport' id = 'sport_0' value = 0 />
						<label for = 'sport_0'><?php echo _("C'est un gros problème, je ne peux pas faire ce que je veux"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>1</div><img src = '<?php echo IMAGE_PATH.'child_bad.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'sport' id = 'sport_1' value = 1 />
						<label for = 'sport_1'><?php echo _("C'est un problème et je n'aime pas ça"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>2</div><img src = '<?php echo IMAGE_PATH.'child_good.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'sport' id = 'sport_2' value = 2 />
						<label for = 'sport_2'><?php echo _("C'est un petit problème mais ça va"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>3</div><img src = '<?php echo IMAGE_PATH.'child_very_good.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'sport' id = 'sport_3' value = 3 />
						<label for = 'sport_3'><?php echo _("Ce n'est pas un problème"); ?></label>
					</p>
				</td>
			</tr>
			<tr>
				<td class = 'cACT_child_title'><?php echo _("Est-ce que tu tousses à cause de ton asthme ?"); ?></td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>0</div><img src = '<?php echo IMAGE_PATH.'child_very_bad.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'cough' id = 'cough_0' value = 0 />
						<label for = 'cough_0'><?php echo _("Oui, tout le temps"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>1</div><img src = '<?php echo IMAGE_PATH.'child_bad.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'cough' id = 'cough_1' value = 1 />
						<label for = 'cough_1'><?php echo _("Oui, la plupart du temps"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>2</div><img src = '<?php echo IMAGE_PATH.'child_good.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'cough' id = 'cough_2' value = 2 />
						<label for = 'cough_2'><?php echo _("Oui, parfois"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>3</div><img src = '<?php echo IMAGE_PATH.'child_very_good.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'cough' id = 'cough_3' value = 3 />
						<label for = 'cough_3'><?php echo _("Non, jamais"); ?></label>
					</p>
				</td>
			</tr>
			<tr>
				<td class = 'cACT_child_title'><?php echo _("Est-ce que tu te réveilles la nuit à cause de ton asthme ?"); ?></td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>0</div><img src = '<?php echo IMAGE_PATH.'child_very_bad.png'; ?>' alt = ''/></p>	
					<p>
						<input type = 'radio' name = 'awake' id = 'awake_0' value = 0 />
						<label for = 'awake_0'><?php echo _("Oui, tout le temps"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>1</div><img src = '<?php echo IMAGE_PATH.'child_bad.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'awake' id = 'awake_1' value = 1 />
						<label for = 'awake_1'><?php echo _("Oui, la plupart du temps"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>2</div><img src = '<?php echo IMAGE_PATH.'child_good.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'awake' id = 'awake_2' value = 2 />
						<label for = 'awake_2'><?php echo _("Oui, parfois"); ?></label>
					</p>
				</td>
				<td class = 'cACT_child_item'>
					<p><div class = 'cACT_child_nb'>3</div><img src = '<?php echo IMAGE_PATH.'child_very_good.png'; ?>' alt = ''/></p>
					<p>
						<input type = 'radio' name = 'awake' id = 'awake_3' value = 3 />
						<label for = 'awake_3'><?php echo _("Non, jamais"); ?></label>
					</p>
				</td>
			</tr>

		</tbody>
	</table>

	<p><?php echo _("Veuillez répondre seul(e) aux 3 questions suivantes (sans vous laisser influencer par les réponses de votre enfant aux questions précédentes."); ?></p>

	<div class = 'cACT_parent_question'>
		<div class = 'cACT_parent_title'><?php echo _("Au cours des 4 dernières semaines, combien de jours votre enfant a-t-il eu des symptômes dans la journée ?"); ?></div>
		<div>
			<div class = 'cACT_parent_nb'>5</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'symptom' id = 'symptom_5' value = 5 />
				<label for = 'symptom_5'><?php echo _("Aucun"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>4</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'symptom' id = 'symptom_4' value = 4 />
				<label for = 'symptom_4'><?php echo _("Entre 1 et 3 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>3</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'symptom' id = 'symptom_3' value = 3 />
				<label for = 'symptom_3'><?php echo _("Entre 4 et 10 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>2</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'symptom' id = 'symptom_2' value = 2 />
				<label for = 'symptom_2'><?php echo _("Entre 11 et 18 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>1</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'symptom' id = 'symptom_1' value = 1 />
				<label for = 'symptom_1'><?php echo _("Entre 19 et 24 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>0</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'symptom' id = 'symptom_0' value = 0 />
				<label for = 'symptom_0'><?php echo _("Tous les jours"); ?></label>
			</div>
		</div>
	</div>
	<div class = 'cACT_parent_question'>
		<div class = 'cACT_parent_title'><?php echo _("Au cours des 4 dernières semaines, combien de jours votre enfant a-t-il eu une respiration sifflante dans la journée à cause de son asthme ?"); ?></div>
		<div>
			<div class = 'cACT_parent_nb'>5</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'wheezing' id = 'wheezing_5' value = 5 />
				<label for = 'wheezing_5'><?php echo _("Aucun"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>4</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'wheezing' id = 'wheezing_4' value = 4 />
				<label for = 'wheezing_4'><?php echo _("Entre 1 et 3 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>3</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'wheezing' id = 'wheezing_3' value = 3 />
				<label for = 'wheezing_3'><?php echo _("Entre 4 et 10 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>2</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'wheezing' id = 'wheezing_2' value = 2 />
				<label for = 'wheezing_2'><?php echo _("Entre 11 et 18 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>1</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'wheezing' id = 'wheezing_1' value = 1 />
				<label for = 'wheezing_1'><?php echo _("Entre 19 et 24 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>0</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'wheezing' id = 'wheezing_0' value = 0 />
				<label for = 'wheezing_0'><?php echo _("Tous les jours"); ?></label>
			</div>
		</div>
	</div>
	<div class = 'cACT_parent_question'>
		<div class = 'cACT_parent_title'><?php echo _("Au cours des 4 dernières semaines, combien de jours votre enfant s'est-il réveillé pendant la nuit à cause de son asthme ?"); ?></div>
		<div>
			<div class = 'cACT_parent_nb'>5</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'days_awake' id = 'days_awake_5' value = 5 />
				<label for = 'days_awake_5'><?php echo _("Aucun"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>4</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'days_awake' id = 'days_awake_4' value = 4 />
				<label for = 'days_awake_4'><?php echo _("Entre 1 et 3 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>3</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'days_awake' id = 'days_awake_3' value = 3 />
				<label for = 'days_awake_3'><?php echo _("Entre 4 et 10 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>2</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'days_awake' id = 'days_awake_2' value = 2 />
				<label for = 'days_awake_2'><?php echo _("Entre 11 et 18 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>1</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'days_awake' id = 'days_awake_1' value = 1 />
				<label for = 'days_awake_1'><?php echo _("Entre 19 et 24 jours"); ?></label>
			</div>
		</div>
		<div>
			<div class = 'cACT_parent_nb'>0</div>
			<div class = 'cACT_parent_item'>
				<input type = 'radio' name = 'days_awake' id = 'days_awake_0' value = 0 />
				<label for = 'days_awake_0'><?php echo _("Tous les jours"); ?></label>
			</div>
		</div>
	</div>

<?php
	if(isset ($_GET['from'])) {
?>
		<input type = 'hidden' name = 'from' value = '<?php echo $_GET['from']; ?>' />
<?php
	}
?>
	<div>
		<input type = 'submit' name = 'valid_cact' value = <?php echo _("Calculer"); ?> class = 'button_validation' />
		<input type = 'reset' value = 'remettre à zéro' class = 'button_cancel' />
	</div>

</form>


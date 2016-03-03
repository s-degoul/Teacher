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

$title_view = _("Ma progression dans Teacher");
$style[] = 'user_profile';
?>


 <div class = 'user_profile'>

	<div class = 'user_profile_part'>
<!--
		<h3><?php echo _("Ma progression dans le programme Teacher"); ?></h3>
-->

		<h2><?php echo _("Auto-évaluations réalisées"); ?></h2>
<!--
		<ul class = 'list_no_point'>
			<li>
-->
		<p>
			<a href = '.?module=user_teaching&action=show_summ_all_eval' class = 'link'><?php echo _("Voir la synthèse de toutes les évaluations"); ?></a>
		</p>
		

<?php
	if (empty ($user_eval_list)) {
?>
		<p><?php echo _("Aucune auto-évaluation réalisée"); ?></p>
		<p>
			<a href='.?module=user_teaching&action=create_eval' class = 'link_action'>
				<?php echo _("Faire la première maintenant"); ?>
			</a>
		</p>
<?php
	}
	else {
?>
		<table class = 'table_user_eval'>
			<thead>
				<tr>
					<th class = 'table_user_eval_nb'><?php echo _("N°"); ?></th>
					<th class = 'table_user_eval_date'><?php echo _("date"); ?></th>
					<th class = 'table_user_eval_eval'><?php echo _("lien vers l'évaluation"); ?></th>
					<th class = 'table_user_eval_synthesis'><?php echo _("lien vers la synthèse"); ?></th>
				</tr>
			</thead>
			<tbody>
<?php
		$nb_eval = 1;
		foreach ($user_eval_list as $id_eval => $features_eval) {
			
?>
			<tr>
				<td><?php echo $nb_eval; ?></td>
				<td><?php echo showDate($features_eval['date']); ?></td>
<?php
			if ($features_eval['achieved'] == 1) {
?>
				<td>
					<a href='.?module=user_teaching&action=show_eval&id_user_eval=<?php echo $id_eval; ?>'><?php echo _("voir l'évaluation"); ?></a>
				</td>
				<td>
					<a href='.?module=user_teaching&action=show_summ_eval&id_user_eval=<?php echo $id_eval; ?>'><?php echo _("voir la synthèse"); ?></a>
				</td>
<?php
			}
			else {
?>
				<td><?php echo _("évaluation inachevée"); ?></td>
				<td></td>
<?php
			}
?>
			</tr>
<?php

			$nb_eval ++;
		}
?>
			</tbody>
		</table>
<!--
			</li>
-->
<?php
		
		if ($_SESSION['user_eval_to_do'] == 1) {
?>
		<p>
			<a href='.?module=user_teaching&action=create_eval' class = 'link_action'><?php echo _("En faire une autre maintenant"); ?></a>
		</p>
<?php
		}
	}
?>

<!--
		</ul>
-->
		
		<h2>
			<?php echo _("<em>&quot;l'Essentiel à savoir avant de commencer&quot;</em>"); ?>
		</h2>
<?php 
	if ($_SESSION['user_validation_essential'] == 1) {

		echo _("consulté");?> ( <a href='.?module=user_teaching&action=show_essential'><?php echo _("Y accéder"); ?></a> )
<?php
	}
	else {
		echo _("non consulté");
	}
?>
		</p>

	</div>

</div>

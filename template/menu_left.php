  
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


﻿	<div class='middle_page'>
		<nav class="menu_left">

<?php
if (isset ($_SESSION['id_user'])) {
	if (isset ($_SESSION['patient'])) {
?>
			<p class = 'menu_left_close'><a href='.?module=patient_management&action=close_patient'><?php echo _("Fermer ce dossier patient"); ?></a></p>

			<p class = 'menu_left_title' title = "<?php echo _("Afficher le profil du patient"); ?>"><a href='.?module=patient_management&action=show_profile'>
			<?php echo strtoupper($_SESSION['patient']['patient_surname']).' '
					.$_SESSION['patient']['patient_firstname']; ?></a></p>

			<p><?php echo sprintf (ngettext('%d an','%d ans',$_SESSION['patient']['patient_age']['year']),$_SESSION['patient']['patient_age']['year'])
								.' '.sprintf (ngettext('%d mois','%d mois',$_SESSION['patient']['patient_age']['month']),$_SESSION['patient']['patient_age']['month']); ?></p>

			<p class = 'menu_left_subtitle'><?php echo _("Parcours dans Teacher"); ?></p>
<?php
		if ($_SESSION['patient']['educ_diag_done'] == 0) {
?>
			<p><a href='.?module=patient_teaching&action=create_educ_diag'><?php echo _("Faire le diagnostic éducatif"); ?></a></p>
<?php
		}
		else  {
?>
			<p><a href='.?module=patient_teaching&action=show_educ_diag'><?php echo _("Voir le diagnostic éducatif"); ?></a></p>
<?php
		}

		if ($_SESSION['patient']['nb_cycle_educ'] == 1) {
?>
			<p><?php echo _("Cycle initial"); ?></p>
<?php
		}
		elseif ($_SESSION['patient']['nb_cycle_educ'] > 1) {
			if (isset ($_SESSION['patient']['end_programme']) and $_SESSION['patient']['end_programme'] == 1) {
?>
			<p title = "<?php echo _("Programme éducatif terminé, réévaluation nécessaire à 6 mois"); ?>"><?php echo _("Programme éducatif terminé"); ?></p>
<?php
			}
			else {
?>
			<p><?php echo _("Renforcement éducatif n° ").($_SESSION['patient']['nb_cycle_educ'] -1); ?></p>
<?php
			}
		}

		if (!empty ($_SESSION['patient']['targets'])) {
?>
			<p title = "<?php echo _("Objectifs éducatifs prévus dans le cycle/renforcement éducatif en cours"); ?>"><?php echo _("Objectifs éducatifs"); ?></p>
			<ul>
<?php
			foreach ($_SESSION['patient']['targets'] as $nb_target => $features_target) {
				if ($features_target['target_done'] == 1)
					echo '				<li title = "'._("fait").'">'._("objectif").' '.$nb_target.'</li>'."\n";
				else
					echo '				<li><a href=\'.?module=patient_teaching&action=show_target&id_target='.$nb_target.'\'>'._("objectif").' '.$nb_target.'</a></li>'."\n";
			}
		}
		elseif (empty ($_SESSION['patient']['end_programme'])) {
			echo '			<p>'._("Aucun objectif éducatif prévu").'</p>'."\n";
		}
?>
			</ul>
<?php
		if (isset ($_SESSION['patient']['eval_to_do']) and $_SESSION['patient']['eval_to_do'] == 1) {
			if (isset ($_SESSION['patient']['end_programme']) and $_SESSION['patient']['end_programme'] == 1)
				echo '				<p><a href=\'.?module=patient_teaching&action=create_eval\'>'._("L'évaluation de contrôle peut être réalisée").'</a></p>'."\n";
			else
				echo '				<p><a href=\'.?module=patient_teaching&action=create_eval\'>'._("L'évaluation finale peut être réalisée").'</a></p>'."\n";
		}
		else {
			echo '				<p title = "'._("L'évaluation finale pourra être réalisée après la validation des objectifs prévus").'">'._("Évaluation finale").'</p>'."\n";
		}
?>
			
<?php
		$style[] = 'patient';
	}
	
	else {
		echo '<p><a href=\'.?module=user_management&action=show_profile\'>'._("Accéder à mon profil").'</a></p>'."\n";
		echo '<p>'._("Que m'est-il possible de faire à ce stade ?").'</p>'."\n";
		
		require (TEMPLATE_PATH.'links_menu_top.php');
		foreach ($links_menu_top[3]['submenu'] as $id_submenu => $features_submenu) {
			echo '<p class = \'link_menu_left\'>'."\n";
			
			if ($features_submenu['active'] == 1)
				echo '<a href=\'.?module='.$features_submenu['module'].'&action='.$features_submenu['action'].'\'>'.$features_submenu['title'].'</a>'."\n";
			else
				echo $features_submenu['title'];
			
			echo '</p>'."\n";
		}
		
		$style[] = 'user';
	}
}
elseif (isset ($_SESSION['visitor'])) {
?>
		<p><?php echo _("Actions possibles"); ?> :</p>
		<ul>
			<li><a href = '.'><?php echo _("Accueil"); ?></a></li>
			<li><a href = '.?module=patient_teaching&action=show_target_list' title = '<?php echo _("Voir les objectifs pédagogiques"); ?>'><?php echo _("Objectifs pédagogiques"); ?></a></li>
			<li><a href = '.?module=patient_teaching&action=show_eval' title = '<?php echo _("Voir un formulaire d'évaluation pour l'enfant"); ?>'><?php echo _("Évaluation enfant"); ?></a></li>
			<li><a href = '.?module=patient_teaching&action=create_parent_eval' title = '<?php echo _("Voir un formulaire d'évaluation pour les parents"); ?>'><?php echo _("Évaluation parents"); ?></a></li>
		</ul>
<?php
	$style[] = 'visitor';
}

?>

		</nav>


<?php
/*************************************************
 * start of main section, containing specific
 * informations of the page
 *************************************************/
 ?>
		<section>
			<div class='content_top'>
<?php


/*************************************************
 * displaying messages previously generated :
 * - "error" : action can't be performed
 * - "warning" : ask for user's confirmation
 * - "info" : just an information
 *************************************************/
foreach ($messages as $type_message => $list_message) {
	switch ($type_message) {
		case 'error' :
			$css_message = 'message_error';
			$introduction = _("Erreur (vous devez apporter des modifications pour continuer)");
			break;
		case 'warning' :
			$css_message = 'message_warning';
			$introduction = _("Avertissement
						(re-cliquez sur le bouton de validation en bas de page pour confirmer)");
			break;
		case 'info' : default :
			$css_message = 'message_info';
			$introduction = _("Information");
			break;
	}

	$content_top .= '<ul class=\''.$css_message.'\'>'.$introduction.' :'."\n";
	
	foreach ($list_message as $key_message => $message) {

		$content_top .= '<li>'.$message.'</li>';
	}
	
	$content_top .= '</ul>'."\n";
}

// $content_top can contain other information, such as page specific links ...
?>
				<?php echo $content_top; ?>
			</div>

			<div class = 'content'>

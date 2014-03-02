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


/*************************************************
 * left menu
 *************************************************/
?>

<div class='middle_page'>
	<nav class="menu_left">

<?php
if (isset ($_GET['close_patient']) and $_GET['close_patient'] == 1) {
	unset ($_SESSION['patient']);
}

require (TEMPLATE_PATH.'links_menu_left.php');	

//menu for logged-in visitor
if (isset ($_SESSION['id_user'])) {

	$menu_parts = array(
						0 => array (
								'title_short' => _("Médecin"),
								'title_long' => _("Mon espace"),
								'main_page' => '.?module=user_management&action=show_profile&close_patient=1',
								'links' => $links_user
								),
						1 => array (
								'title_short' => _("Patients"),
								'title_long' => _("Voir la liste des patients"),
								'main_page' => '.?module=patient_management&action=show_patient_list',
								'links' => $links_patient
								)
						);
	if (isset ($_SESSION['patient'])) {
		$menu_parts[1]['title_long'] .= _("\n(ferme le dossier actuel)");
	}
	
	foreach ($menu_parts as $one_menu_part) {
?>
		<p class = 'menu_left_title' title = '<?php echo $one_menu_part['title_long'] ?>'>
			<a href = '<?php echo $one_menu_part['main_page'] ?>'><?php echo $one_menu_part['title_short']; ?></a>
		</p>
<?php	
		foreach ($one_menu_part['links'] as $n => $features):

			if ($features['module'] == $module and $action == $features['action']) {
				$css_link_menu_top = '';
			}
			else {
				$css_link_menu_top = '';
			}
?>			
		<p class = '<?php echo $css_link_menu_top; ?>' title = "<?php echo $features['title_long']; ?>">
			<a href = '.?module=<?php echo $features['module']; ?>&action=<?php echo $features['action']; ?>'><?php echo $features['title_short']; ?></a>
		</p>
<?php		
			if (isset ($features['submenu']) and !empty ($features['submenu'])):
				foreach ($features['submenu'] as $i => $features_submenu) :
					if ($features_submenu['active'] == 1) {
						$css_link_submenu = "";
					}
					else {
						$css_link_submenu = "";
					}
?>
				<p class = '<?php echo $css_link_submenu; ?>' title = "<?php echo $features_submenu['title_long']; ?>">
					<a href='.?module=<?php echo $features_submenu['module']; ?>&action=<?php echo $features_submenu['action']; ?>'>
						<?php echo $features_submenu['title_short']; ?>
					</a>
				</p>
<?php
				endforeach;
			endif;
		endforeach;
	}		
/*
?>
		<p class = 'menu_left_close'><a href='.?module=patient_management&action=close_patient'><?php echo _("Fermer ce dossier patient"); ?></a></p>

		<p class = 'menu_left_title' title = "<?php echo _("Afficher le profil du patient"); ?>"><a href='.?module=patient_management&action=show_profile'>
		<?php echo strtoupper($_SESSION['patient']['patient_surname']).' '
				.$_SESSION['patient']['patient_firstname']; ?></a></p>

		<p><?php echo sprintf (ngettext('%d an','%d ans',$_SESSION['patient']['patient_age']['year']),$_SESSION['patient']['patient_age']['year'])
							.' '.sprintf (ngettext('%d mois','%d mois',$_SESSION['patient']['patient_age']['month']),$_SESSION['patient']['patient_age']['month']); ?></p>

		<hr />
		<p class = 'menu_left_subtitle'><?php echo _("Parcours dans Teacher"); ?></p>


		<div class = 'menu_left_part'>
<?php
		// link toward educational diagnosis
		if ($_SESSION['patient']['educ_diag_done'] == 0) {
?>
			<p class = 'menu_left_active'>
				<a href='.?module=patient_teaching&action=create_educ_diag'><?php echo _("Diagnostic éducatif"); ?></a>
			</p>
<?php
		}
		else  {
?>
			<p class = 'menu_left_inactive'>
				<img src = '<?php echo IMAGE_PATH.'done.png'; ?>' alt = 'OK' />
				<a href='.?module=patient_teaching&action=show_educ_diag'><?php echo _("Diagnostic éducatif"); ?></a>
			</p>
			<ul class = 'menu_left_list'>
				<li class = 'menu_left_inactive'>
					<img src = '<?php echo IMAGE_PATH.'done.png'; ?>' alt = 'OK' />
					<a href='.?module=patient_teaching&action=show_summ_eval&type_eval=educ_diag'><?php echo _("Contrat éducatif"); ?></a>
				</li>
			</ul>
<?php
		}
?>
		</div>
		<div class = 'menu_left_part'>
<?php
		// links toward educational objectives to work on or achieved
		if ($_SESSION['patient']['nb_cycle_educ'] == 1) {
?>
			<p><?php echo _("Cycle initial"); ?></p>
<?php
		}
		elseif ($_SESSION['patient']['nb_cycle_educ'] > 1) {
			if (isset ($_SESSION['patient']['end_programme']) and $_SESSION['patient']['end_programme'] == 1) {
?>
			<p title = "<?php echo _("Programme éducatif terminé, réévaluation nécessaire à 6 mois"); ?>">
				<?php echo _("Programme éducatif terminé"); ?>
			</p>
<?php
			}
			else {
?>
			<p>
				<?php echo _("Renforcement éducatif n° ").($_SESSION['patient']['nb_cycle_educ'] -1); ?>
			</p>
<?php
			}
		}


		if (!empty ($_SESSION['patient']['targets'])) {

			<ul class = 'menu_left_list'>
<?php

			foreach ($_SESSION['patient']['targets'] as $nb_target => $features_target) {
				if ($features_target['target_done'] == 1) {
?>
				<li class = 'menu_left_inactive' title = '<?php echo _("fait"); ?>'>
					<img src = '<?php echo IMAGE_PATH.'done.png'; ?>' alt = 'OK' />
					<a href='.?module=patient_teaching&action=show_target&id_target=<?php echo $nb_target; ?>'> <?php echo _("objectif").' '.$nb_target; ?></a>
				</li>
<?php
				} 
				else {
?>
				<li  class = 'menu_left_active'>
					<a href='.?module=patient_teaching&action=show_target&id_target=<?php echo $nb_target; ?>'> <?php echo _("objectif").' '.$nb_target; ?></a>
				</li>
<?php
				}
			}
?>
			</ul>
<?php
		}
		elseif (empty ($_SESSION['patient']['end_programme'])) {
?>
			<p>
				<?php echo _("Aucun objectif éducatif prévu"); ?>
			</p>
<?php
		}
?>
			
			

<?php
		// link toward final evaluation
		if (isset ($_SESSION['patient']['eval_to_do']) and $_SESSION['patient']['eval_to_do'] == 1) {
			if (isset ($_SESSION['patient']['end_programme']) and $_SESSION['patient']['end_programme'] == 1) {
?>
			<p class = 'menu_left_active'>
				<a href=\'.?module=patient_teaching&action=create_eval\'>
					<?php echo _("L'évaluation de contrôle peut être réalisée"); ?>
				</a>
			</p>
<?php
			}
			else {
?>
			<p class = 'menu_left_active'>
				<a href=\'.?module=patient_teaching&action=create_eval\'>
					<?php echo _("Évaluation finale"); ?>
				</a>
			</p>
<?php
			}
		}
		else {
?>
			<p  class = 'menu_left_inactive' title = "<?php echo _("L'évaluation finale pourra être réalisée après la validation des objectifs prévus"); ?>">
				<?php echo _("Évaluation finale"); ?>
			</p>
<?php
		}
?>
		</div>
<?php
*/

	// if patient record is open
	if (isset ($_SESSION['patient'])) {
		$style[] = 'patient';
	}
	

	
	// if no patient record open
	else {
/*
?>
		<p class = 'menu_left_title'>
			<?php echo _("Médecin"); ?>
		</p>
<?php	
		foreach ($links_user as $n => $features):

			if ($features['active'] == 1) {
?>			
			<p class = 'menu_left_active' title = "<?php echo $features['title_long']; ?>">
				<a href = '.?module=<?php echo $features['module']; ?>&action=<?php echo $features['action']; ?>'>
					<?php echo $features['title_short']; ?>
				</a>
			</p>

<?php
			}
			else {
?>
			<p class = 'menu_left_inactive' title = "<?php echo $features['title_long']; ?>">
				<?php echo $features['title_short']; ?>
			</p>
<?php
			}
		endforeach;
?>
		<p class = 'menu_left_title'>
			<?php echo _("Patient"); ?>
		</p>
<?php
*/
		$style[] = 'user';
	}
}


// menu for free visitor
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
 if (!empty ($messages)) {
	foreach ($messages as $type_message => $list_message) {
		switch ($type_message) {
			case 'error' :
				$css_message = 'message_error';
				$css_message_title = 'message_error_title';
				$introduction = _("Erreur (vous devez apporter des modifications pour continuer)");
				break;
			case 'warning' :
				$css_message = 'message_warning';
				$css_message_title = 'message_warning_title';
				$introduction = _("Avertissement
							(re-cliquez sur le bouton de validation en bas de page pour confirmer)");
				break;
			case 'info' : default :
				$css_message = 'message_info';
				$css_message_title = 'message_info_title';
				$introduction = _("Information");
				break;
		}

		$content_top .= '<ul class=\''.$css_message_title.'\'>'.$introduction.' :'."\n";
		
		foreach ($list_message as $key_message => $message) {
			$content_top .= '<li class = '.$css_message.'>'.$message.'</li>';
		}

		$content_top .= '</ul>'."\n";
	}
}
elseif (isset ($_SESSION['messages']['info'])) {
	if (!isset ($_SESSION['messages']['counter'])) {
		$_SESSION['messages']['counter'] = 1;
		$content_top .= '<ul class=\'message_info_title\'>'._("Information").' :'."\n"
						.'<li class=\'message_info\'>'.$_SESSION['messages']['info'].'</li>'."\n"
						.'</ul>'."\n";
	}
	else
		$_SESSION['messages'] = array();
}

// $content_top can contain other information, such as page specific links ...
?>
				<?php echo $content_top; ?>
			</div>

			<div class = 'content'>

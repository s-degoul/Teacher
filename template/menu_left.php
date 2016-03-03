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



function DisplayMenu ($menu, $level_menu = 1) {
		
	foreach ($menu as $features_menu) :

		if ($features_menu['active'] == 2) {
			$css_link_menu_left = 'menu_left_attractive_'.$level_menu;
		}
		elseif ($features_menu['active'] == 1) {
			$css_link_menu_left = 'menu_left_active_'.$level_menu;
		}
		else {
			$css_link_menu_left = 'menu_left_inactive_'.$level_menu;
		}
		
?>			
<p class = '<?php echo $css_link_menu_left; ?>' title = "<?php echo $features_menu['title_long']; ?>">
<?php
		if ($features_menu['active'] == 0) {
			echo $features_menu['title_short'];
		}
		else {
?>
	<a href = '.?module=<?php echo $features_menu['module']; ?>&action=<?php echo $features_menu['action']; ?>'>
		<?php echo $features_menu['title_short']; ?>
	</a>
<?php
		}
?>
</p>
<?php		
		if (isset ($features_menu['submenu']) and !empty ($features_menu['submenu'])) {
			DisplayMenu ($features_menu['submenu'], $level_menu +1);
		}
	endforeach;
}


require (TEMPLATE_PATH.'links_menu_left.php');	

//menu for logged-in visitor
if (isset ($_SESSION['id_user'])) {
	
	// if patient record is open
	if (isset ($_SESSION['patient'])) {
		$style[] = 'patient';
		$logo = 'logo_patient.png';
	}
	
	// if no patient record open
	else {
		$style[] = 'user';
		$logo = 'logo_doctor.png';
	}
?>
	<div class = 'menu_left_logo'>
		<img src = '<?php echo IMAGE_PATH.$logo; ?>' alt = '<?php echo _("logo"); ?>' />
	</div>

<?php
	$menu_parts = array(
						0 => array (
								'title_short' => _("Ma progression"),
								'title_long' => _("Récapitulatif de la progression (auto-évaluations,...)"),
								'main_page' => '.?module=user_teaching&action=show_training&close_patient=1',
								'css' => 'menu_left_user',
								'links' => $links_user
								),
						1 => array (
								'title_short' => _("Mes patients"),
								'title_long' => _("Voir la liste des patients"),
								'main_page' => '.?module=patient_management&action=show_patient_list',
								'css' => 'menu_left_patient',
								'links' => $links_patient
								)
						);
	if (isset ($_SESSION['patient'])) {
		$menu_parts[0]['title_short'] = _("Fermer le dossier");
		$menu_parts[0]['main_page'] = '.?module=patient_management&action=show_patient_list';
		$menu_parts[0]['title_long'] = _("Espace médecin");
		$menu_parts[1] = array (
							'title_short' => strtoupper($_SESSION['patient']['patient_surname']).' '.$_SESSION['patient']['patient_firstname']."<br/><span class = 'menu_left_subtitle'>"._("Programme éducatif")."</span>",
							'title_long' => _("Voir le profil du patient"),
							'main_page' => '.?module=patient_management&action=show_profile',
							'css' => 'menu_left_patient',
							'links' => $links_patient
							);
	}
	
	foreach ($menu_parts as $one_menu_part) {
?>
		<p class = '<?php echo $one_menu_part['css']; ?>' title = '<?php echo $one_menu_part['title_long'] ?>'>
<?php
		$confirm_action = '';
		if (isset ($_SESSION['patient']) and $one_menu_part['main_page'] == '.?module=patient_management&action=show_patient_list') {
			$confirm_action = 'onclick = \'return confirm("'._("Êtes vous sûr de fermer ce dossier ?").'")\'';
		}
?>
			<a href = '<?php echo $one_menu_part['main_page'] ?>' <?php echo $confirm_action; ?>><?php echo $one_menu_part['title_short']; ?></a>
		</p>

<?php
		DisplayMenu ($one_menu_part['links']);
	}
?>

		<p class = 'menu_left_tip'>
			<img src='<?php echo IMAGE_PATH.'bulb.png'; ?>' width=25px alt=<?php echo _("astuce")?> />
			<?php echo _("Positionnez la souris sur les liens pour obtenir plus d'informations"); ?>
		</p>
<?php
}


// menu for free visitor
elseif (isset ($_SESSION['visitor'])) {
?>
<!--
		<p><?php echo _("Actions possibles"); ?> :</p>
		<ul>
			<li><a href = '.'><?php echo _("Accueil"); ?></a></li>
			<li><a href = '.?module=patient_teaching&action=show_target_list' title = '<?php echo _("Voir les objectifs pédagogiques"); ?>'><?php echo _("Objectifs pédagogiques"); ?></a></li>
			<li><a href = '.?module=patient_teaching&action=show_eval' title = '<?php echo _("Voir un formulaire d'évaluation pour l'enfant"); ?>'><?php echo _("Évaluation enfant"); ?></a></li>
			<li><a href = '.?module=patient_teaching&action=create_parent_eval' title = '<?php echo _("Voir un formulaire d'évaluation pour les parents"); ?>'><?php echo _("Évaluation parents"); ?></a></li>
		</ul>
-->
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
			
					
			<h1>
			 <?php echo $title_view; ?>
			</h1>
		
			<div class='content_top'>
<?php

/*************************************************
 * displays "return" button from content of
 * $_GET['from'] (if exists)
 *************************************************/
 
 if (!empty ($_GET['from'])) {
	 $from = $_GET['from'];
	 require (TEMPLATE_PATH.'links_return.php');
	 
	 if (!empty ($links_return[$from])) {
		 $params = '';
		 if (!empty ($links_return[$from]['param'])) {
			 foreach ($links_return[$from]['param'] as $param) {
				if (!empty ($_GET[$param])) {
					$params .= '&'.strtr($param, array('from_' => '')).'='.$_GET[$param];
				}
			 }
		 }
?>
				<p class='return'>
					<a href='.?<?php echo $links_return[$from]['link'].$params; ?>' class='link'>
						<img src='<?php echo IMAGE_PATH.'return_row.png'; ?>' alt="return" />
						<?php echo _("retour").' &laquo;&nbsp;'.$links_return[$from]['title'].'&nbsp;&raquo;'; ?>
					</a>
				</p> 
<?php
	 }
 }

/*************************************************
 * displays messages previously generated :
 * - "error" : action can't be performed
 * - "warning" : ask for user's confirmation
 * - "info" : just an information
 *************************************************/
if (!empty ($messages) or !empty ($_SESSION['messages'])) {
	
	if (!empty ($_SESSION['messages'])) {
		foreach($_SESSION['messages'] as $type_message => $value_message) {
			$messages[$type_message][] = $value_message;
		}
		
		unset ($_SESSION['messages']);
	}
	
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
			case 'advice' :
				$css_message = 'message_advice';
				$css_message_title = 'message_advice_title';
				$introduction = _("Conseil");
				break;
			case 'info' : default :
				$css_message = 'message_info';
				$css_message_title = 'message_info_title';
				$introduction = _("Information");
				break;
		}

		$content_top .= '<ul class=\''.$css_message_title.'\'>'.$introduction.'&nbsp;:'."\n";
		
		foreach ($list_message as $key_message => $message) {
			$content_top .= '<li class = '.$css_message.'>'.$message.'</li>';
		}

		$content_top .= '</ul>'."\n";
	}
}


/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
/**/

// $content_top can contain other information, such as page specific links ...

?>
				<?php echo $content_top; ?>
			</div>

			<div class = 'content'>

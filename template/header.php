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

header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html>
	
<?php
/*************************************************
 * HTML head
 * inclusion of all css sheets contained in array
 * "$style"
 *************************************************/
 ?>
<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<!--[if lt IE 9]>
			<script 
			src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<title>Teacher</title>

<?php

foreach ($style as $file_style) {
	echo'		<link rel =\'stylesheet\' type=\'text/css\' href= \''.STYLE_PATH.$file_style.'.php\' />'."\n";
}
?>

</head>


<?php
/*************************************************
 * Begin of HTML body
 *************************************************/
 ?>
<body>

	<header>
		
		<div class = 'header_title'>
			<div class = 'header_left'>
<?php
if ($module == 'start' and $action == 'start')
	$teacher_logo_width = 150;
else
	$teacher_logo_width = 70;
?>
				<a href = '.'>
					<img src = 'images/teacher_logo.png' alt = '<?php echo _("logo de Teacher"); ?>' title = '<?php echo _("Accueil"); ?>' width = <?php echo $teacher_logo_width; ?>px/>
				</a>

			</div>
			
			<div class = 'header_right'>




<?php
/*************************************************
 * Displaying top right content =
 * welcome message and link to website's first
 * page (disconnection)
 *************************************************/
 ?>
<!--
				<div class='header_top'>
<?php
	if (isset ($_SESSION['user_surname'])) {
		echo _("Bonjour").' '.$_SESSION['user_title'].' '.$_SESSION['user_surname'];
?>
					<a href=.?module=user_management&action=disconnection>
						<?php echo _("se déconnecter"); ?>
					</a>
<?php
	}
	elseif (isset ($_SESSION['visitor'])) {
		echo _("Bienvenue sur Teacher");
?>
					<a href=.?module=user_management&action=disconnection>
						<?php echo _("retourner à la page d'accueil"); ?>
					</a>
<?php
	}
	elseif (isset ($header_top)) {
		echo $header_top;
	}
?>

				</div>
-->




<?php
/*************************************************
 * Displaying main title of the page
 *************************************************/
 ?>
				<div class = 'header_middle'>
					<span class='header_high_letters'>T</span>raining to
					<span class='header_high_letters'>E</span>ducate
					<span class='header_high_letters'>A</span>sthmatic 
					<span class='header_high_letters'>C</span>hildren in 
					<span class='header_high_letters'>E</span>u<span class='header_high_letters'>R</span>ope
					<!--<?php echo $title_view; ?>-->
				</div>
			</div>
		</div>



<?php
/*************************************************
 * Displaying items (+/- subitems) for top menu,
 * from configuration in "links_menu_top.php"
 * Only active items are links,
 * others (inactive) are juste static text
 *************************************************/
?>
		<div class = 'header_menu'>
			<nav class='menu_top'>


<?php
if ((isset ($_SESSION['id_user']) or isset ($_SESSION['visitor'])) and !isset ($_SESSION['patient'])){
?>
		
				<ul class = 'items_menu_top'>
<?php
	require (TEMPLATE_PATH.'links_menu_top.php');

	foreach ($links_menu_top as $n => $features):

		$css_link_menu_top = 'item_menu_top_inactive';
		
		if ($features['module'] == $module and $features['action'] == $action) {
/*			if (($action == 'start_user' and $features['action'] == 'introduction')
				or ($action == 'introduction' and $features['action'] == 'start_user'))
				$css_link_menu_top = 'item_menu_top_inactive';
			else*/
			$css_link_menu_top = 'item_menu_top_active';
		}
		elseif (isset ($features['submenu'])) {
			foreach ($features['submenu'] as $i => $features_submenu) {
				if ($features_submenu['module'] == $module and $features_submenu['action'] == $action) {
					$css_link_menu_top = 'item_menu_top_active';
				}
			}
		}
?>			
					<li class = '<?php echo $css_link_menu_top; ?>'>
<?php
		if ($features['module'] != '') {
?>
						<a href = '.?module=<?php echo $features['module']; ?>&action=<?php echo $features['action']; ?>'>
							<?php echo $features['title']; ?>
						</a>
<?php
		}
		else {
?>
						<span>
							<?php echo $features['title']; ?>
							<img src='<?php echo IMAGE_PATH.'down.png'; ?>' alt='down' width=10 height=10 />
						</span>
<?php
		}
		
		if (isset ($features['submenu'])):
?>
					<ul class = 'submenu_top'>
<?php	
			foreach ($features['submenu'] as $i => $features_submenu) :
				if ($features_submenu['active'] == 1) {
?>
						<li>
							<a href='.?module=<?php echo $features_submenu['module']; ?>&action=<?php echo $features_submenu['action']; ?>'>
								<?php echo $features_submenu['title']; ?>
							</a>
						</li>
<?php
				}
				else {
?>
						<li>
							<?php echo $features_submenu['title']; ?>
						</li>
<?php
				}
			endforeach;
?>		
					</ul>
<?php
		endif;
?>
					</li>
<?php
	endforeach;
?>
				</ul>
<?php
}
?>
			</nav>
			<div class = 'menu_decoration'>
				<div class = 'header_session'>
<?php
	if (isset ($_SESSION['user_surname'])) {
?>
					<p class = 'header_session_notice'>
<?php
		echo _("Session").' : '.$_SESSION['user_title'].' '.$_SESSION['user_surname'];
?>
					</p>
					<p class = 'header_session_action'>
						<a href='.?module=user_management&action=disconnection'>
							<?php echo _("se déconnecter"); ?>
						</a>
					</p>
<?php
	}
	elseif (isset ($_SESSION['visitor'])) {
?>
					<p class = 'header_session_notice'>&nbsp;</p>
					<p class = 'header_session_action'>
						<a href='.?module=user_management&action=disconnection'>
							<?php echo _("retourner à l'accueil"); ?>
						</a>
					</p>
<?php
	}
?>				
				</div>
			</div>
		</div>

	</header>



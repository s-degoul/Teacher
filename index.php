  
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

// !!  TO BE CHANGED ON PRODUCTION VERSION  !!
error_reporting (E_ALL);
//error_reporting(0);


header('Content-Type: text/html; charset=utf-8');


/*************************************************
 * session management
 * note that "user" and "visitor" status are not
 * compatible each other
 *************************************************/
session_start();

if (isset ($_SESSION['id_user']) and isset($_SESSION['visitor'])) {
	$_SESSION = array();
	$_SESSION['visitor'] = 1;
}


/*************************************************
 * inclusion of configuration files
 * set default values
 *************************************************/
// to include file with general configuration
require ('configuration/config.php');

// some functions sometimes used
require ('functions.php');

// management of languages
require (CONFIG_PATH.'localization.php');


// array to list all necessary css sheets
$style = array ('default');

// initialization of vars for views
$title_view = 'TEACHER';
$content_top = '';
$messages = array();


/*************************************************
 * determination of module and action to handle
 *************************************************/
// by default, action "start" in module "start" is executed
$module = $action = 'start';

if (isset ($_SESSION['id_user']) or isset ($_SESSION['visitor'])) {
	if (isset ($_GET['module']) and is_dir (MODULE_PATH.$_GET['module'])
		and isset ($_GET['action']) and is_file (MODULE_PATH.$_GET['module'].'/'.$_GET['action'].'.php')) {
		$module = $_GET['module'];
		$action = $_GET['action'];
	}
	else {
		// module already defined (= "start")
		if (isset ($_SESSION['id_user']))
			$action = 'start_user';
		elseif (isset ($_SESSION['visitor']))
			$action = 'start_visitor';
	}
}
elseif (isset ($_GET['module']) and isset ($_GET['action']) and $_GET['module'] == 'user_management') {
	$module = 'user_management';

	if ($_GET['action'] == 'connection')
		$action = 'connection';
	elseif ($_GET['action'] == 'password_forgotten')
		$action = 'password_forgotten';
}

// path to this module's views
define ('VIEW_RELATIVE_PATH', 'modules/'.$module.'/views/');


/*************************************************
 * check if module and action (with options)
 * are reachable by "visitor" status
 *************************************************/
if (isset ($_SESSION['visitor'])) {
	require (CONFIG_PATH.'list_modules_actions_visitor.php');

	$error = 0;

	if (array_key_exists ($module, $list_modules_actions_visitor)) {
		if (array_key_exists ($action, $list_modules_actions_visitor[$module])) {
			$list_vars_get = $_GET;

			foreach ($list_modules_actions_visitor[$module][$action] as $key => $value) {
				if (!isset ($list_vars_get[$key]) or $list_vars_get[$key] != $value)
					$error = 1;
			}
		}
		else {
			$error = 1;
		}
	}
	else {
		$error = 1;
	}
	
	if ($error == 1) {
		$messages['error'][] = _("Désolé, vous ne pouvez accéder à cette partie du site");
		$module = 'error';
		$action = 'void';
	}
}


/*************************************************
 * adding css sheet specific to the module
 * (or the action)
 *************************************************/
require (TEMPLATE_PATH.'list_modules_actions.php');

if (!empty ($list_modules_actions[$module][$action]))
	$style[] = $list_modules_actions[$module][$action];
elseif (is_file (STYLE_PATH.$module.'.css'))
	$style[] = $module;


/*************************************************
 * PAGE'S CONSTRUCTION
 * note that header.php need informations defined
 * in action's specific script
 * or script for left menu
 *************************************************/
ob_start();
	include (MODULE_PATH.$module.'/'.$action.'.php');
$main_content = ob_get_clean();


ob_start();
	require (TEMPLATE_PATH.'menu_left.php');
$menu_left = ob_get_clean();


require (TEMPLATE_PATH.'header.php');

echo $menu_left;

echo $main_content;

require (TEMPLATE_PATH.'footer.php');


// DEBUG
/*
echo'<pre>';
print_r($_SESSION);
echo '</pre>';
/**/

?>


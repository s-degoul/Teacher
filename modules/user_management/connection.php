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

// max number of connection trials
define('NB_MAX_TRIALS', 3);


if (isset ($_GET['visitor'])) {
	$_SESSION['visitor'] = 1;
	header ('location:.?module=start&action=start_visitor');
}
else {
	if (isset ($_POST['cancel_connection'])) {
		header('location:.?module=start&action=start');
		exit;
	}
	
	if (isset ($_SESSION['connection_counter']) and $_SESSION['connection_counter'] >= NB_MAX_TRIALS) {
		$messages['error'][] = _("Vous avec utilisé un nombre maximal de tentatives de connexions. Fermer toutes les fenêtres de votre navigateur web et ré-ouvrez le pour essayer de nouveau.");
	}
	elseif (isset ($_POST['user_connection'])) {
		
		if (isset ($_SESSION['connection_counter']))
			$_SESSION['connection_counter'] ++;
		else
			$_SESSION['connection_counter'] = 1;

		if (! empty ($_POST['user_login']) and !empty ($_POST['user_password'])) {
			$connection_data = checkVarPost();
			
			$login_input = $connection_data['user_login'];
			$password_input = crypt($connection_data['user_password'], SALT);
			
			require (MODEL_PATH.'select_user_session.php');
			
			if ($nb_response > 1) {
				$messages['error'][] = _("Problème d'identification.").' '.pleaseContactAdmin();
			}
			elseif (empty ($user) or $nb_response == 0) {
				$password_input = $connection_data['user_password'];
				$change_password = 1;
				require (MODEL_PATH.'select_user_session.php');
				
				if (empty ($user) or $nb_response == 0) {
					if ($_SESSION['connection_counter'] < NB_MAX_TRIALS)
						$messages['error'][] = _("identifiant ou mot de passe incorrect");
					else
						$messages['error'][] = _("Vous avec utilisé un nombre maximal de tentatives de connexions. Fermer toutes les fenêtres de votre navigateur web et ré-ouvrez le pour essayer de nouveau.");
				}
			}
			
			if (empty ($messages['error'])) {
				$_SESSION = array (
					'id_user' => $user['id_user'],
					'user_surname' => $user['user_surname'],
					'lang' => $user['language_code'],
					'lang_name' => $user['language_name'],
					'user_title' => $user['user_title'],
					'user_validation_essential' => $user['user_validation_Essential'],
					'user_eval_to_do' => $user['user_eval_to_do'],
					'user_end_teacher' => $user['user_end_teacher'],
					'timezone' => $user['country_timezone'],
					'user_rights' => $user['user_rights']
					);
				
				$id_user = $user['id_user'];
				$date_min = '2013-01-01 00:00:00';
				require (MODEL_PATH.'select_user_eval_exist.php');

				if ($id_user_eval == -1)
					$_SESSION['user_first_eval'] = 0;
				else
					$_SESSION['user_first_eval'] = 1;

				if (isset ($_SESSION['visitor']))
					unset ($_SESSION['visitor']);
					
				unset ($_SESSION['connection_counter']);
				
				if (isset ($change_password)) {
					$_SESSION['user_rights'] = 'change_password';
					header('location:.?module=user_management&action=change_password');
					exit;
				}
				else {
					header ('location:.?from=connection');
					exit;
				}
			}
		}
		else {
			$messages['error'][] = _('vous devez entrer un identifiant <em>et</em> un mot de passe');
		}
	}

	include (VIEW_RELATIVE_PATH.'connection.php');
}

?>

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


	$action_form = 'insert';

	if (isset ($_POST['valid_add_user'])) {
		
		$user = checkVarPost ();

		if (isset ($user['id_user'])) {
			$action_form = 'update';
			$id_user = $user['id_user'];
		}
				
		if (empty ($user['user_surname']) or empty ($user['user_firstname']))
			$messages['error'][] = _("Veuillez renseigner nom").' <em>'._("et").'</em> '._("prénom");
			
		if (empty ($user['user_mail']))
			$messages['error'][] = _("Veuillez renseigner une adresse mail");
		
		if (empty ($user['id_country'])) 
			$messages['error'][] = _("Veuillez renseigner un pays");

		if (empty ($user['id_language']))
			$messages['error'][] = _("Veuillez renseigner une langue");
		
		if (empty ($user['user_rights'])) 
			$messages['error'][] = _("Veuillez préciser les droits de l'utilisateur (normal ou administrateur)");
		
		if (empty ($user['user_login'])) {
			$user['user_login'] = strtolower(substr($user['user_firstname'],0,1).substr($user['user_surname'],0,10));
		}
		
		if ($action_form == 'insert') {
			$login = $user['user_login'];
			require (MODEL_PATH.'select_user_same_login.php');
			if ($nb_user_same_login != 0)
				$messages['error'][] = _("Un autre utilisateur existe déjà avec le login").' '.$user['user_login'];
		}
		elseif ($user['user_rights'] != 'admin') {
			require (MODEL_PATH.'select_user_rights.php');
			require (MODEL_PATH.'select_nb_user_admin.php');
			if ($user_rights == 'admin' and $nb_user_admin == 1) {
				$messages['error'][] = _("Vous ne pouvez pas changer les droits de cet utilisateur puisqu'il en faut au moins un ayant les droits administrateur");
				$user['user_rights'] = 'admin';
			}
		}

/*		$possible_caracters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
		$random_password = '';
		for ($i = 1; $i <= 10; $i ++) {
			$random_nb = rand(0,35);
			$random_password .= $possible_caracters[$random_nb];
		}*/
		$user['user_password'] = createRandomString(15);


		if (empty ($messages['error'])) {
			if ($action_form == 'insert')
				require (MODEL_PATH.'insert_user.php');
			elseif ($action_form == 'update') {
				require (MODEL_PATH.'update_user.php');
				
				if (isset ($user['reinit_password'])) {
					$password_new = $user['user_password'];
					require (MODEL_PATH.'update_user_password.php');
				}
			}
			
			if (isset ($user['send_mail']) or isset ($user['reinit_password'])) {
				$mail_content = _("Voici vos identifiant sur le site ").WEB_ADRESS."\n"._("identifiant").' : '.$user['user_login']."\n"._("mot de passe").' : '.$user['user_password'];
				mail($user['user_mail'], _("Votre compte sur Teacher"), $mail_content);
//				echo $mail_content;
			}
			
			$_SESSION['messages']['info'] = _("Modifications enregistrées");
			header('location:.?module=administration&action=show_user_list');
			exit;
		}
	}
	elseif (isset ($_POST['cancel_add_user'])) {
		header('location:.?module=administration&action=show_user_list');
	}
	elseif (isset ($_GET['id_user'])) {
		$id_user = $_GET['id_user'];
		require (MODEL_PATH.'select_user_all.php');
		$action_form = 'update';
	}
	else {
		$user = array (
						'user_surname' => '',
						'user_firstname' => '',
						'user_title' => '',
						'user_login' => '',
						'user_street' => '',
						'user_postal_code' => '',
						'user_city' => '',
						'user_mail' => '',
						'user_phone' => '',
						'id_country' => '',
						'id_language' => '',
						'user_rights' => 'normal'
					);
	}

	require (MODEL_PATH.'select_language_list.php');
	require (MODEL_PATH.'select_country_list.php');

	require (VIEW_RELATIVE_PATH.'add_update_user.php');

?>

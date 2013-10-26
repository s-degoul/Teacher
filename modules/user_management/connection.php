  
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
if (isset ($_GET['visitor'])) {
	$_SESSION['visitor'] = 1;
	header ('location:.?module=start&action=start_visitor');
}
else {
	if (isset ($_POST['user_connection'])) {
		if (! empty ($_POST['user_login']) and !empty ($_POST['user_password'])) {
			$connection_data = checkVarPost();
			
			$login_input = $connection_data['user_login'];
			$password_input = crypt($connection_data['user_password'], SALT);
			
			include (MODEL_PATH.'select_user_session.php');

			if (!empty ($user) and $nb_response == 1) {
				$_SESSION = array (
					'id_user' => $user['id_user'],
					'user_surname' => $user['user_surname'],
					'lang' => $user['language_code'],
					'lang_name' => $user['language_name'],
					'user_title' => $user['user_title'],
					'user_validation_essential' => $user['user_validation_Essential'],
					'user_eval_to_do' => $user['user_eval_to_do'],
					'timezone' => $user['country_timezone']
					);
					
				$date_min = '2013-01-01 00:00:00';
				require (MODEL_PATH.'select_user_eval_exist.php');

				if (empty ($id_user_eval))
					$_SESSION['user_first_eval'] = 0;
				else
					$_SESSION['user_first_eval'] = 1;

				if (isset ($_SESSION['visitor']))
					unset ($_SESSION['visitor']);
				
				require (MODEL_PATH.'select_patient_list.php');
				$_SESSION['nb_patients'] = count ($list_patient);
				
				header ('location:.?from=connection');
			}
			else {
				$messages['error'][] = _('login ou mot de passe incorrect');
			}
		}
		else {
			$messages['error'][] = _('vous devez entrer un identifiant <em>et</em> un mot de passe');
		}
	}

	include (VIEW_RELATIVE_PATH.'connection.php');
}

?>

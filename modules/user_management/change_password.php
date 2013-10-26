  
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

if (isset ($_POST['valid_password'])) {
	if (isset ($_POST['user_password_old']) and isset ($_POST['user_password_new_1']) and isset ($_POST['user_password_new_2'])) {
	
		$password_old = $_POST['user_password_old'];
		$password_new_1 = $_POST['user_password_new_1'];
		$password_new_2 = $_POST['user_password_new_2'];
		
		require (MODEL_PATH.'select_user_password.php');
		
		if (crypt ($password_old, SALT) == $user_password and $password_new_1 == $password_new_2) {
			$wrong_character = preg_match('#[ <>\'"&]#', $password_new_1);
			
			if ($password_old == $password_new_1) {
				$messages['error'][] = _("vous avez entré le même mot de passe que l'ancien !");
			}
			elseif (strlen ($password_new_1) >= 8
				and preg_match ('#[0-9]#', $password_new_1) and preg_match ('#[A-Z]#', $password_new_1) and preg_match('#[a-z]#', $password_new_1)
				and ! $wrong_character) {

				$password_new = crypt ($password_new_1, SALT);
				$id_user = $_SESSION['id_user'];
				require (MODEL_PATH.'update_user_password.php');

				$_SESSION['messages']['info'] = _("Votre nouveau mot de passe a été enregistré");
				header ('location:.?module=user_management&action=show_profile');
			}
			else {
				if ($wrong_character)
					$messages['error'][] = _("le nouveau mot de passe ne doit pas contenir de guillemet ni espace ni signes supérieur ou inférieur ni le &quot;et&quot; commercial (&)");
				elseif (strlen ($password_new_1) < 8)
					$messages['error'][] = _("le nouveau mot de passe doit au moins contenir 8 caractères");
				else
					$messages['error'][] = _("le nouveau mot de passe doit contenir chiffre, lettre minuscule <em>et</em> lettre majuscule");
			}
		}
		else {
			$messages['error'][] = _("Erreur de mot de passe");
		}
	}
	
	require (VIEW_RELATIVE_PATH.'change_password.php');
}
else {
	require (VIEW_RELATIVE_PATH.'change_password.php');
}


?>

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


require (CONFIG_PATH.'contacts.php');

if (isset ($_POST['valid_password_forgotten'])) {
	$user = checkVarPost();
	
	require (MODEL_PATH.'select_user_with_login_mail.php');
	
	if ($nb_response == 1) {
		$password_new = createRandomString (15);
		
		require (MODEL_PATH.'update_user_password.php');
		
		$mail_subject = 'TEACHER : '._("nouveau mot de passe");

		$mail_content = _("Vous recevez ce mail parce que vous avez dit avoir oublié votre mot de passe pour accéder au site TEACHER.")."\r\n"
						._("Votre nouveau mot de passe est :")."\r\n\r\n"
						.$password_new."\r\n\r\n"
						._("Merci de le changer dès votre première re-connexion !")."\r\n\r\n"
						._("Si vous n'êtes pas à l'origine de ce mail, prière de vous connecter de tout urgence à TEACHER avec ce nouveau mot de passe et de le modifier, et de contacter l'administrateur du site").' ( '.MAIL_ADMIN.' )';
				
		mail ($user['user_mail'], $mail_subject, $mail_content);

		
		$_SESSION['messages']['info'] = _("un mail a été envoyé (à l'adresse mail de votre profil) avec un nouveau mot de passe");
		header ('location:.?module=user_management&action=connection');
		exit();
	}
	else {
		$messages['error'][] = _("aucun utilisateur trouvé dans la base de données");
	}
	
	
}

require (VIEW_RELATIVE_PATH.'password_forgotten.php');

?>

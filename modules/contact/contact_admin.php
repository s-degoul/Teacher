  
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

require (CONFIG_PATH.'contacts.php');

if (isset ($_POST['send_message'])) {
	$message = checkVarPost();

	if (empty ($message['message_content'])) {
		$messages['error'][] = _("votre message n'a pas été envoyé puisqu'il est vide !");
	}
	else {
		require (MODEL_PATH.'insert_message.php');
		
		require (MODEL_PATH.'select_user_all.php');

		$message_subject = 'TEACHER : '.$message['message_subject'];

		// to be translated in admin language !!
		$message_content = 'Message envoyé par '.$_SESSION['user_title'].' '.$_SESSION['user_surname']."\r\n"
							.'téléphone : '.$user['user_phone']."\r\n"
							.'adresse mail : '.$user['user_mail']."\r\n"
							.'pays : '.$user['country_name']."\r\n".'----------'."\r\n\r\n"; 
		$message_content .= wordwrap ($message['message_content'], 70, "\r\n");
		
		$message_header = 'Reply-To: '.$user['user_mail']."\r\n";
				
		mail (MAIL_ADMIN, $message_subject, $message_content, $message_header);
		
		$messages['info'][] = _("votre message a été envoyé");
		
		unset ($message);
	}
}

if (empty ($messages['info']))
	require (VIEW_RELATIVE_PATH.'contact_admin.php');

?>

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


function utf8ToLatin2($str)
{
    return iconv ( 'utf-8', 'ISO-8859-2' , $str );
}


if (isset ($_POST['send_message'])) {
	$message = checkVarPost();

	if (empty ($message['message_content'])) {
		$messages['error'][] = _("votre message n'a pas été envoyé puisqu'il est vide !");
	}
	else {
		
		$message_header = 'Content-Type: text/plain;charset=utf-8\r\n';
		
		if (isset ($_SESSION['id_user'])) {
			$id_user = $_SESSION['id_user'];
			require (MODEL_PATH.'select_user_all.php');
			
			$message_detail = 'Message envoyé par '.$_SESSION['user_title'].' '.$_SESSION['user_surname']."\r\n"
					.'téléphone : '.$user['user_phone']."\r\n"
					.'adresse mail : '.$user['user_mail']."\r\n"
					.'pays : '.$user['country_name']."\r\n".'----------'."\r\n\r\n";
			$message_header .= 'Reply-To: '.$user['user_mail']."\r\n";
		}
		else {
			$id_user = -1;
			
			$message_detail = 'Message envoyé par une personne anonyme'."\r\n".'----------'."\r\n\r\n";
		}
		
		require (MODEL_PATH.'insert_message.php');
		

		$message_subject = 'TEACHER : '.$message['message_subject'];

		// to be translated in admin language !!
		$message_content = $message_detail.wordwrap ($message['message_content'], 70, "\r\n");

				
		mail (MAIL_ADMIN, $message_subject, $message_content, $message_header);
		
		$messages['info'][] = _("votre message a été envoyé");
		
		unset ($message);
	}
}

if (empty ($messages['info']))
	require (VIEW_RELATIVE_PATH.'contact_admin.php');

?>

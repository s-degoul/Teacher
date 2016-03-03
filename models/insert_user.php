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



try {
	if (!isset ($db))	
		$db = DBConnect();
	
	$request = $db -> prepare (
			'INSERT INTO table_user (user_surname, user_firstname, user_title, user_login, user_password, user_phone, user_mail, user_street, user_postal_code, user_city, id_country, id_language, user_rights)
			VALUES (:user_surname, :user_firstname, :user_title, :user_login, :user_password, :user_phone, :user_mail, :user_street, :user_postal_code, :user_city, :id_country, :id_language, :user_rights)'
		);

	$request -> execute (array (
					'user_surname' => $user['user_surname'],
					'user_firstname' => $user['user_firstname'],
					'user_title' => $user['user_title'],
					'user_login' => $user['user_login'],
					'user_password' => $user['user_password'],
					'user_phone' => $user['user_phone'],
					'user_mail' => $user['user_mail'],
					'user_street' => $user['user_street'],
					'user_postal_code' => $user['user_postal_code'],
					'user_city' => $user['user_city'],
					'id_country' => $user['id_country'],
					'id_language' => $user['id_language'],
					'user_rights' => $user['user_rights']
				)
			);

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}
	
?>

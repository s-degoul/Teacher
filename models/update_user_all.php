  
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

try {
	if (!isset ($db))
		$db = new PDO ('mysql:host='.HOST_DB.';dbname='.NAME_DB, LOGIN_DB, PASSWORD_DB);
	$db -> exec ('SET NAMES utf8');

	$request = $db -> prepare (
		'UPDATE table_user
		SET user_surname = :user_surname, user_firstname = :user_firstname,
			id_country = :id_country, user_street = :user_street, user_postal_code = :user_postal_code, user_city = :user_city,
			user_phone = :user_phone, user_mail = :user_mail, user_title = :user_title, user_practice = :user_practice,
			id_language = :id_language, user_therap_educ = :user_therap_educ
		WHERE id_user = :id_user'
		);

//	array_walk_recursive ($user, 'urlencode');

	$request -> execute (array (
		'user_surname' => $user['user_surname'],
		'user_firstname' => $user['user_firstname'],
		'id_country' => $user['id_country'],
		'user_street' => $user['user_street'],
		'user_postal_code' => $user['user_postal_code'],
		'user_city' => $user['user_city'],
		'user_phone' => $user['user_phone'],
		'user_mail' => $user['user_mail'],
		'user_title' => $user['user_title'],
		'user_practice' => $user['user_practice'],
		'id_language' => $user['id_language'],
		'user_therap_educ' => $user['user_therap_educ'],
		'id_user' => $_SESSION['id_user']
	));

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

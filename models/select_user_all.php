  
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
		'SELECT user_login, user_surname, user_firstname, user_title, user_validation_Essential,
			user_street, user_postal_code, user_city, user_phone, user_mail,
			user_practice, C.country_name, U.id_country, U.id_language, user_therap_educ
		FROM table_user as U
			INNER JOIN table_country as C ON U.id_country = C.id_country
		WHERE U.id_user = :id_user'
		);

	$request -> execute (array (
		'id_user' => $_SESSION['id_user']
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$user = $request -> fetch();

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

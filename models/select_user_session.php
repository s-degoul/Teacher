  
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
		$db = DBConnect();

	$request = $db -> prepare (
		'SELECT id_user, user_surname, user_title, language_code, language_name, user_validation_Essential, user_eval_to_do, country_timezone
		FROM table_user as U
			INNER JOIN table_language as L ON U.id_language = L.id_language
			INNER JOIN table_country as C ON U.id_country = C.id_country
		WHERE user_login = :user_login and user_password = :user_password'
		);

	$request -> execute (array (
		'user_login' => $login_input,
		'user_password' => $password_input
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$nb_response = 0;
	while ($one_user = $request -> fetch()) {
		$user = $one_user;
		$nb_response ++;
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

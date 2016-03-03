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
		'SELECT U.id_user, U.user_surname, U.user_firstname, U.user_title, U.user_login, U.user_street, U.user_postal_code, U.user_city, U.user_mail, U.user_phone, U.user_rights, C.country_name
		FROM table_user as U
			INNER JOIN table_country as C on U.id_country = C.id_country
		ORDER BY user_surname'
		);

	$request -> execute();

	$list_user = array();

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	while ($one_user = $request -> fetch()) {
		$list_user[] = $one_user;
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}
	
?>

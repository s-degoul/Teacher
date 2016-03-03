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
	
	$request = $db -> query (
		'SELECT id_language, language_code, language_name
		FROM table_language'
		);

	$list_language = array();

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	while ($one_lang = $request -> fetch()) {
		$id_language = $one_lang['id_language'];
		$list_language[$id_language] = $one_lang;
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}
	
?>

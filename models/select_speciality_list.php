  
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
	
//	$code_lang_format = $_SESSION['lang'];

	$request = $db -> query (
		'SELECT id_speciality, speciality_name_'.$_SESSION['lang'] .' as speciality_name, speciality_type
		FROM table_speciality'
		);

	$list_speciality = array();

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	while ($one_spe = $request -> fetch()) {
		$speciality_type = $one_spe['speciality_type'];
		$id_speciality = $one_spe['id_speciality'];

		$list_speciality[$speciality_type][$id_speciality] = $one_spe['speciality_name'];
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}
	
?>

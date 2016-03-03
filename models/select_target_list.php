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
	
	$code_lang_format = $_SESSION['lang'];

	$request = $db -> query (
		'SELECT target_num, target_name_'.$code_lang_format .' as target_name, target_security
		FROM table_target'
		);

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$list_target = array();
	
	while ($one_target = $request -> fetch()) {
		$id_target = $one_target['target_num'];
		$list_target[$id_target] = array (
										'target_name' => $one_target['target_name'],
										'target_security' => $one_target['target_security']
										);
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}
	
?>

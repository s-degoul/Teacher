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
	

	$list_tables = array('user_eval', 'user_speciality', 'message', 'user');
	
	foreach ($list_tables as $name_table) {
		$request = $db -> prepare (
				'DELETE
				FROM table_'.$name_table
				.' WHERE id_user = :id_user'
			);
		
		$request -> execute (array (
			'id_user' => $id_user
			));
		
		$request -> closeCursor();
	}

}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}
?>

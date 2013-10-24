  
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
		'SELECT id_user_eval
		FROM table_user_eval
		WHERE id_user = :id_user and user_eval_date BETWEEN :date_min AND :date_max'
		);

	$request -> execute (array (
		'id_user' => $_SESSION['id_user'],
        'date_min' => $date_min,
        'date_max' => date ('Y-m-d H:i:s')
	));

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	$id_user_eval = '';
	while ($user_eval = $request -> fetch()) {
		$id_user_eval = $user_eval['id_user_eval'];
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

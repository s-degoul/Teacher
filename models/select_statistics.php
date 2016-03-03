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
	
	/* patients */
	$request = $db -> query (
		'SELECT *
		FROM table_patient'
		);

	$list_patient = array();

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	while ($one_patient = $request -> fetch()) {
		$list_patient[] = $one_patient;
	}
	
	/* users */
	$request = $db -> query (
		'SELECT *
		FROM table_user'
		);

	$list_user = array();

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	while ($one_user = $request -> fetch()) {
		$list_user[] = $one_user;
	}

	/* user evaluations */
	$request = $db -> query (
		'SELECT *
		FROM table_user_eval'
		);

	$list_user_eval = array();

	$request -> setFetchMode(PDO::FETCH_ASSOC);

	while ($one_user_eval = $request -> fetch()) {
		$list_user_eval[] = $one_user_eval;
	}

	$request -> closeCursor();
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}
	
?>

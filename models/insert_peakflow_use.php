  
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
	
	$field_list = '';
	$value_list = '';
	$comma = '';
	$list_answers = array();
	
	foreach ($list_questions as $key => $id_question) {
		$field_list .= $comma.$id_question;
		$value_list .= $comma.':'.$id_question;
		
		$comma = ', ';
		
		if ($id_question == 'id_patient')
			$list_answers['id_patient'] = $_SESSION['patient']['id_patient'];
		elseif ($id_question == 'peakflow_use_date')
			$list_answers['peakflow_use_date'] = $peakflow_use_date;
		else
			$list_answers[$id_question] = $peakflow_use[$id_question];
			
	}
	
	$request = $db -> prepare (
			'INSERT INTO table_peakflow_use ('.$field_list.')
			VALUES ('.$value_list.')'
		);

	$request -> execute ($list_answers);

   
	$request -> closeCursor();

}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

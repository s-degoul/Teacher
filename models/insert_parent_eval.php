  
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
	
	$field_list = 'id_cycle_educ, parent_eval_date, ';
	$value_list = ':id_cycle_educ, :parent_eval_date, ';
	$comma = '';
	
	foreach ($list_questions_parent_eval as $type_question => $list_questions) {
		foreach ($list_questions as $nb_question => $features_question) {
			if ($type_question == 'knowledge') {
				$field_list .= $comma.'parent_eval_q'.$nb_question.'_answer, parent_eval_q'.$nb_question.'_belief';
				$value_list .= $comma.':parent_eval_q'.$nb_question.'_answer, :parent_eval_q'.$nb_question.'_belief';
				
				$comma = ', ';			
			}
			elseif ($type_question == 'skill') {
				$field_list .= $comma.'parent_eval_q'.$nb_question;
				$value_list .= $comma.':parent_eval_q'.$nb_question;
				
				$comma = ', ';
			}
		}
	}
	
	$request = $db -> prepare (
			'INSERT INTO table_parent_eval ('.$field_list.')
			VALUES ('.$value_list.')'
		);

	$request -> execute ($list_answers);

   
	$request -> closeCursor();

}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

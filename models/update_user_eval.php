  
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
	
    $request_prepared = '';
    $comma = '';
    
    $list_answers = array();
    
    foreach ($list_item as $title_item) {
        $request_prepared .= $comma.' `'.$title_item.'` = :'.$title_item;
        $comma = ',';
 
        if (isset ($user_eval[$title_item]))
            $list_answers[$title_item] = 1;
        else
            $list_answers[$title_item] = 0;
    }

    $list_answers['id_user_eval'] = $id_user_eval;

	$request = $db -> prepare (
		'UPDATE table_user_eval
		SET '.$request_prepared
		.' WHERE id_user_eval = :id_user_eval'
		);

	$request -> execute ($list_answers);
 
	$request -> closeCursor();
	
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

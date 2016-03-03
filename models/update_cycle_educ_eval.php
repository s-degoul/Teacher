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
	
    $request_prepared = '';
    $comma = '';
    
    $list_answers = array();
    
    foreach ($list_item as $title_item) {
        $request_prepared .= $comma.' `'.$title_item.'` = :'.$title_item;
        $comma = ',';
 
        if (isset ($cycle_educ[$title_item]))
            $list_answers[$title_item] = $cycle_educ[$title_item];
        else
            $list_answers[$title_item] = '';
    }

    $list_answers['id_cycle_educ'] = $id_cycle_educ;
    $list_answers['id_patient'] = $id_patient;
/*
echo $request_prepared;
echo '<pre>';
print_r ($list_answers);
echo'</pre>';
*/
	$request = $db -> prepare (
		'UPDATE table_cycle_educ
		SET '.$request_prepared
		.' WHERE id_cycle_educ = :id_cycle_educ and id_patient = :id_patient'
		);

	$request -> execute ($list_answers);
 
	$request -> closeCursor();
	
}
catch (Exception $e) {
	die ('Erreur : '.$e->getMessage());
}

?>

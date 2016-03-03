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


function ArrayToCSV($array, $filename, $path = STATISTICS_PATH.'statistics/', $delimiter = ',') {
	if (! $file = fopen($path.$filename.'.csv', 'w')) {
		echo "Error in creating file ".$filename.".csv";
		return false;
	}
	
	fputcsv($file, array_keys($array[1]), $delimiter);
	
	foreach ($array as $row) {
		fputcsv($file, $row, $delimiter);
	}
	
	fclose ($file);
	
	return true;
}


require (MODEL_PATH.'select_statistics.php');

/*
echo '<pre>';
print_r($list_patient);
echo '</pre>';
/**/

ArrayToCSV($list_patient, 'patients');
ArrayToCSV($list_user, 'users');
ArrayToCSV($list_user_eval, 'user_evals');



exec('Rscript '.STATISTICS_PATH.'statistics.R');

header('location:.?module=administration&action=show_statistics');
//require (VIEW_RELATIVE_PATH.'show_statistics.php');
?>

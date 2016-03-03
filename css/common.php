<?php
/*********************************************************************
Teacher

Copyright 2013 by the contributors

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

$user_color = 'rgb(143,20,124)'; //'rgb(212,20,90)';
$patient_color = 'rgb(0,150,102)';//'rgb(0,190,0)';
$visitor_color = 'rgb(100,100,100)';

$menu_left_width = 180;
$content_width = 810;
$body_width = 1024;

$link_bgcolor = 'rgb(31,193,205)';//'rgba(220,150,50,0.5)';

$message_bg_color = 'rgb(250,250,200)';
$message_error_color = 'rgb(255,0,0)';
$message_warning_color = 'rgb(255,150,0)';
$message_info_color = 'rgb(0,150,50)';
$message_advice_color = 'blue';//'rgb(235,90,255)';

$menu_left_attractive_color = 'rgb(255,0,0)';
$menu_left_active_color = 'rgb(0,0,0)';
$menu_left_inactive_color = 'rgb(100,100,100)';

$valid_color = $message_info_color;
$partially_valid_color = $message_warning_color;
$non_valid_color = $message_error_color;

$todo_color = 'rgb(255,0,0)';

$target_security_bgcolor = 'rgb(255,102,102)';

$table_patient_color = $patient_color;//rgb(143,20,124)

// function to extract RGB values (x, y and z) from color named as "rgb(x,y,z)"
function extractRGBValues($color) {
	return explode(')', explode('(', $color)[1])[0];
}

?>

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

header("Content-type: text/css; charset: UTF-8");

$button_selected_bgcolor = 'rgb(254,254,254)';
$button_selected_color = 'rgb(100,100,100)';
$button_bgcolor = 'rgb(200,200,200)';
$button_color = 'rgb(254,254,254)';

require('common.php');

$target_list_color = 'rgb(100,100,100)';

?>


.security_notification {
	margin: 0;
	color: <?php echo $target_security_bgcolor; ?>;
	font-size: 0.5em;
}

.target_list {
	margin-top: 30px;
	margin-bottom: 20px;
}

.target_list_title {
	display: inline-block;
	width: 150px;
	vertical-align: top;
	margin: 0;
	padding-left: 10px;
	padding-right: 10px;
	text-align: right;
	font-weight: bold;
}

.target_list_title a {
	color: rgb(100,100,100);
}

.target_list_title a:hover {
	color: rgb(0,0,0);
}

.target_num {
	display: inline-block;
	width: 50px;
	vertical-align: top;
	margin: 0;
	margin-left: 3px;
	margin-right: 0px;
	padding: 2px;
	border: 1px solid black;
	border-radius: 5px;
	text-align: center;
	background-color: <?php echo $button_bgcolor; ?>;
	text-decoration: none;
	font-weight: bold;
	color: <?php echo $button_color; ?>;
}

.target_num_selected, .target_num:hover {
	display: inline-block;
	width: 50px;
	vertical-align: top;
	margin-left: 3px;
	margin-right: 0px;
	margin-top: 0;
	margin-bottom: 0;
	padding: 2px;
	border: 1px solid black;
	border-radius: 5px;
	text-align: center;
	background-color: <?php echo $button_selected_bgcolor; ?>;
	text-decoration: none;
	font-weight: bold;
	color: <?php echo $button_selected_color; ?>;
}


.target_type_user_selected {
	display: inline-block;
	height: 20px;
	width: 200px;
	padding: 5px;
	background-color: <?php echo $user_color; ?>;
	border: 1px solid  <?php echo $user_color; ?>;
	text-align: center;
	color: <?php echo $button_color; ?>;
	font-weight: bold;
	text-decoration: none;
}


.target_type_user {
	display: inline-block;
	height: 20px;
	width: 200px;
	padding: 5px;
	background-color: <?php echo $button_selected_bgcolor; ?>;
	border: 1px solid  <?php echo $user_color; ?>;
	text-align: center;
	color: <?php echo $user_color; ?>;
	text-decoration: none;
}

.target_type_patient_selected {
	display: inline-block;
	height: 20px;
	width: 200px;
	padding: 5px;
	background-color: <?php echo $patient_color; ?>;
	border: 1px solid <?php echo $patient_color; ?>;
	text-align: center;
	color: <?php echo $button_color; ?>;
	font-weight: bold;
	text-decoration: none;
}


.target_type_patient {
	display: inline-block;
	height: 20px;
	width: 200px;
	padding: 5px;
	background-color: <?php echo $button_selected_bgcolor; ?>;
	border: 1px solid <?php echo $patient_color; ?>;
	text-align: center;
	color: <?php echo $patient_color; ?>;
	text-decoration: none;
}

.target_list_table {
	width: <?php echo $content_width; ?>px;
	margin: 0;
	margin-top: 15px;
	border: 2px solid <?php echo $target_list_color; ?>;
	text-align: center;
	border-collapse: collapse;
}


.target_list_table thead th {
	height: 30px; 
	color: rgb(255,255,255);
	background-color: <?php echo $target_list_color; ?>;
}

.target_list_table tbody td {
	padding: 5px;
	text-align: left;
	vertical-align: top;
/*	background-color: rgba(<?php echo extractRGBValues($target_list_color); ?>,0.1); */
}

.target_list_num {
	display: block;
	width: 30px;
	margin: 0;
	margin-left: 3px;
	margin-right: 0px;
	padding: 2px;
	text-align: center;
	border: 1px solid black;
	border-radius: 5px;
	background-color: <?php echo $button_bgcolor; ?>;
	text-decoration: none;
	font-weight: bold;
	color: <?php echo $button_color; ?>;
}

.target_list_num:hover {
	background-color: <?php echo $button_selected_bgcolor; ?>;
	color: <?php echo $button_selected_color; ?>;	
}

.target_list_name {
	text-decoration: none;
	color: rgb(0,0,0);
}

.target_list_name:hover {
	text-decoration: underline;
}

.target_list_security {
	background-color: <?php echo $target_security_bgcolor; ?>;
	font-weight: bold;
	color: rgb(255,255,255);
}

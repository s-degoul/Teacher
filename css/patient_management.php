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

require('common.php');

$patient_list_color = $patient_color;
?>

.patient_list_instruction {
	margin-top: 45px;
	font-size: 0.8em;
}

table.patient_list {
	width: <?php echo $content_width; ?>px;
	margin: 0;
	margin-top: 15px;
	border: 2px solid <?php echo $patient_list_color; ?>;
	text-align: center;
	border-collapse: collapse;
}

table.patient_list thead th {
	height: 30px; 
	border: 1px solid rgb(255,255,255);
	color: rgb(255,255,255);
	background-color: <?php echo $patient_list_color; ?>;
}

table.patient_list tbody td {
	border: 1px solid <?php echo $patient_list_color; ?>;
	padding: 5px;
	text-align: left;
	vertical-align: top;
	background-color: rgba(<?php echo extractRGBValues($patient_list_color); ?>,0.1); 
}

.add_patient_title {
	display: inline-block;
	width: 200px;
	vertical-align: top;
	padding-right: 10px;
	text-align: right;
}

.add_patient_field {
	display: inline-block;
	width: 400px;
	vertical-align: top;
	text-align: left;
}

.add_patient_field input, .add_patient_field select, .add_patient_field option {
	background-color: rgba(<?php echo extractRGBValues($patient_list_color); ?>,0.1);
}

.add_patient_validation {
	padding-left: 200px;
}

.delete_patient_password {
	background-color: rgba(<?php echo extractRGBValues($patient_list_color); ?>,0.1);
}

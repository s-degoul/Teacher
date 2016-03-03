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
?>


.table_synthesis {
	border: 1px solid black;
	border-collapse: collapse;
	margin-top: 30px;
}

.synthesis_title {
	height: 40px;
	text-align: center;
	vertical-align: middle;
	color: rgb(254,254,254);
	font-size: 1.8em;
	font-weight: bold;
	background-color: <?php echo $patient_color; ?>;/*rgb(82,164,87);*/
}

.synthesis_subtitle {
	height: 20px;
	padding-left: 5px;
	padding-right: 5px;
	font-weight: bold;
	border: 1px solid black;
	text-align: center;
	background-color: rgb(200,200,200);
}

.synthesis_subtitle .note {
	font-weight: normal;
	font-size: 0.8em;
}

/*
.synthesis_title_1{
	height: 40px;
	width: 60px;
	background-color: rgb(254,0,0);
	text-align: center;
}

.synthesis_title_2{
	width: 60px;
	background-color: rgb(254,170,0);
	text-align: center;
}

.synthesis_title_3{
	width: 60px;
	background-color: rgb(0,254,0);
	text-align: center;
}
*/

.table_synthesis tbody tr {
	height: 30px;
}

.table_synthesis tbody td {
	border: 1px solid black;
}

.synthesis_item {
	color: rgb (0,0,0);
	background-color: rgba(192,125,251,0.8);
}

.synthesis_security_item {
	color: rgb(254,254,254);
	background-color: <?php echo $target_security_bgcolor; ?>;
	font-weight: bold;
}

.legend {
	float: right;
	width: 200px;
<!--
	margin-left: <?php echo ($content_width - 200); ?>px;
-->
	margin-bottom: 20px;
	margin-right: 0px;
	padding: 3px;
	border: 0.5px solid black;
	background-color: rgb(230,230,230);
}

.legend p {
	margin: 0;
	margin-top: 5px;
	padding: 0;
}

.legend_title {
	font-weight: bold;
	font-size: 0.8em;
}

.legend_image {
	display: inline-block;
	vertical-align: middle;
	width: 40px;
}

.legend_text {
	display: inline-block;
	vertical-align: middle;
	width: 140px;
	font-size: 0.8em;
}

.legend_security_item {
	margin-right: 5px;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 3px;
	padding-bottom: 3px;
	background-color: <?php echo $target_security_bgcolor; ?>;
}

.control_eval {
	min-height: 150px;
	margin-top: 20px;
}


.control_eval_title {
	margin-top: 20px;
	margin-bottom: 15px;
	font-weight: bold;
}

.control_eval_label {
	display: inline-block;
	width: 250px;
	vertical-align: top;
	margin: 0;
	padding-top: 3px;
}

.control_eval_text {
	display: inline-block;
	width: 100px;
	vertical-align: top;
	margin: 0;
	padding-top: 3px;
}


/*
.synthesis_cell {
	background-color: none;
}

.synthesis_checked_cell {
	background-color: rgb(0,254,237);
	text-align: center;
}

.synthesis_inactive_cell {
	background-color: grey;
}*/

.synthesis_validation {
	width: 50px;
	text-align: center;
}
/*
.synthesis_valid_cell, .synthesis_partially_valid_cell, .synthesis_non_valid_cell {
	width: 50px;
}

.synthesis_valid_cell {
	background-color: <?php echo $valid_color; ?>;
}

.synthesis_partially_valid_cell {
	background-color: <?php echo $partially_valid_color; ?>;
}

.synthesis_non_valid_cell {
	background-color: <?php echo $non_valid_color; ?>;
}
*/

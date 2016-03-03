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

include('common.php');

$table_device_titles_width = 300;
?>


.one_table_device {
	padding: 5px;
	margin-top: 5px;
	border: 3px solid <?php echo $table_patient_color; ?>;
	background-color: rgba(<?php echo extractRGBValues($table_patient_color); ?>,0.1);
}

.one_table_device label {
	font-weight: bold;
}



.table_device {
	border: 1px solid <?php echo $table_patient_color; ?>;
	border-collapse: collapse;
	background-color: rgb(254,254,254);
	text-align: left;
}

	.table_device thead tr {
		height: 50px;
	}

	.table_device thead th {
		text-align: center;
		background-color: <?php echo $table_patient_color; ?>;
		color: rgb(254,254,254);
	}

	.table_device tbody tr {
		height: 40px;
		border: 1px solid <?php echo $table_patient_color; ?>;
	}

	.table_device_title {
		padding-left: 3px;
		padding-right: 3px;
		font-size: 0.8em;
		text-align: justify;
	}

	.table_device_value {
		min-width: 100px;
		text-align: center;
	}
	
	.table_device_value img {
		height: 25px;
	}

	.table_device_main_title {
		padding-left: 3px;
		padding-right: 3px;
		font-weight: bold;
		font-size: 1.2em;
		color: <?php echo $table_patient_color; ?>;
	}

	.table_device_date {
		border: 1px solid rgb(254,254,254);
		font-size: 0.9em;
	}

	.table_device_date p {
		margin: 0;
		font-size: 0.6em;
	}

	.table_device_date p a {
		color: rgb(254,254,254);
	}
	
	.date_detail {
		font-size: 0.8em;
	}

	.table_device_cell_radio {
		text-align: center;
	}

.table_device_titles {
	display: inline-block;
	width: <?php echo $table_device_titles_width; ?>px;
	vertical-align: top;
}

.table_device_titles table thead th {
	font-weight: bold;
}

.table_device_values {
	display: inline-block;
	width: <?php echo ($content_width-$table_device_titles_width-25); ?>px;
	overflow: auto;
	vertical-align: top;
}

.table_device_odd_line {
	background-color: rgba(<?php echo extractRGBValues($table_patient_color); ?>,0.2);
}

.table_device_even_line {
	background-color: rgba(<?php echo extractRGBValues($table_patient_color); ?>,0.3);
}

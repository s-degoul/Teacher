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



.patient_profile {
		margin: 15px;
		padding: 10px;	
		border-style: solid;
		border-width: 2px;
		border-color: <?php echo $patient_color; ?>;/*#49BFDD;*/
		border-radius: 10px;
}

.patient_profile_part {
/*	display: inline-block;
	width: 350px;
	vertical-align: top;*/
	background-color: rgba(<?php echo extractRGBValues($patient_color); ?>,0.2);
	margin: 10px;
	padding: 5px;
	border-style: solid;
	border-width: 2px;
	border-color: <?php echo $patient_color; ?>;
	border-radius: 10px;	
}

.patient_profile_side {
	display: inline-block;
	width: <?php echo (($content_width-50)/2 - 40)?>px;
	vertical-align: top;
	background-color: rgba(<?php echo extractRGBValues($patient_color); ?>,0.2); /* =#49BFDD */
	margin: 10px;
	padding: 5px;
	border-style: solid;
	border-width: 2px;
	border-color: <?php echo $patient_color; ?>;
	border-radius: 10px;	
}

.patient_profile_wide {
	width: 750px;
	background-color: rgba(<?php echo extractRGBValues($patient_color); ?>,0.2); /* =#49BFDD */
	margin-right: 15px;
	margin-bottom: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: <?php echo $patient_color; ?>;
	border-radius: 10px;
	padding: 5px;	
}

.patient_profile_title {
	display: inline-block;
	width: 130px;
	vertical-align: top;
	padding-right: 10px;
	text-align: right;
}

.patient_profile_field {
	display: inline-block;
	width: 190px;
	vertical-align: top;
	text-align: left;
}

/*
.button {
	font-size: large;
	padding-left: 190px;
	margin-left: .5em;
}


	.user_main_1 {

	}
	
	.user_main_1 > h3 {
		text-align: center;
		font-weight: bold;
		font-size: normal;
		padding: 1px;
		margin: auto;
	}

.user_main_right {
	display:inline-block;
	vertical-align: top;
	width: 300px;
}

.user_main_bottom {
	display:block;
}

.item_patient_profile {
	display:inline-block;
	text-align: center;
	background-color: silver;
	margin: 10px;
	border-radius: 5px;
	padding: 8px;
}
.item_patient_profile > a {
	color: black;
	font-weight: bold;
	text-decoration: none;		
}


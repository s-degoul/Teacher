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

.start_user_content {
	text-align: justify;
}
/*
.button_summary {
	margin-top: 30px;
	margin-bottom:20px;
	text-align: right;
}

.button_summary a {
	border-radius: 5px;
	padding: 5px;
	text-decoration: none;
	background-color: rgb(220,150,50);
	color: rgb(254,254,254);
}
*/

.synopsis {
	width: <?php echo ($content_width-20); ?>px;
	margin: 0;
	padding: 10px;
	text-align: center;
	background-color: rgba(<?php echo extractRGBValues($user_color); ?>,0.3);
}

.synopsis_user_stage {
	width: 400px;
	margin: auto;
	padding: 10px;
	background-color: rgb(255,255,255);
	color: rgb(0,0,0);
}

.synopsis_row_angle {
	display: inline-block;
	max-height: 0px;
	position: relative;
	top: -110px;
	left: 220px;
	border-right: 2px solid blue;
}

.synopsis_img_row_angle {
	position: absolute;
	height: 1080px;
	width: 180px;
}

.synopsis_user_row {
	margin: 0;
	padding: 0;
}

.synopsis_patient {
	margin: 0;
	padding: 0;
}

	.synopsis_patient_note {
		margin: 0;
		margin-bottom: 10px;
		text-align: justify;
		padding: 0;
		font-size: 0.8em;
	}

	.synopsis_patient_show {
		display: inline-block;
		width: 580px;
		height: 95%;
		margin: 5px;
		padding: 5px;
		background-color: rgba(<?php echo extractRGBValues($patient_color); ?>, 0.7);
	}

	.synopsis_patient_other {
		display: inline-block;
		vertical-align: top;
		height: 95%;
		margin: 5px;
		padding: 5px;
		background-color: rgba(8,227,0,0.5);
	}

	.synopsis_patient_title {
		font-weight: bold;
		font-size: 1.1em;
	}

	.synopsis_patient_stage {
		width: 300px;
		margin: auto;
		margin-bottom: 5px;
		border-radius: 5px;
		background-color: rgb(254,254,254);
	}

	.synopsis_patient_row {
		margin-top: 5px;
	}

	.synopsis_patient_cycle_stage_top {
		display: inline-block;
		vertical-align: top;
		width: 150px;
		margin-left: 20px;
		margin-right: 20px;
		border-radius: 5px;
		background-color: rgb(254,254,254);
	}

	.synopsis_patient_cycle_stage_bottom {
		display: inline-block;
		width: 150px;
		margin-left: 20px;
		margin-right: 20px;
		border-radius: 5px;
		background-color: rgb(254,254,254);
	}

	.synopsis_patient_cycle_stage_left {
		display: inline-block;
		vertical-align: middle;
		width: 150px;
		margin-right: 170x;
		margin-top: 10px;
		margin-bottom: 10px;
		border-radius: 5px;
		background-color: rgb(254,254,254);
	}

	.synopsis_patient_cycle_stage_right {
		display: inline-block;
		vertical-align: top;
		width: 150px;
		margin-left: 170px;
		margin-top: 10px;
		margin-bottom: 10px;
		border-radius: 5px;
		background-color: rgb(254,254,254);
	}

	.synopsis_patient_cycle_row {
		display: inline-block;
	}

.introduction_content {
	text-align: justify;
}


.show_user_color, .show_patient_color {
	display: inline-block;
	vertical-align: middle;
	width: 100px;
	height: 30px;
	margin-top: 10px;
	margin-bottom: 10px;
}

.show_user_color {
	background-color : <?php echo $user_color; ?>;
}

.show_patient_color {
	background-color : <?php echo $patient_color; ?>;
}

.comment_color {
	display: inline-block;
	vertical-align: middle;
	margin-left: 20px;
	width: <?php echo ($content_width - 125); ?>px;
}

.attractive_color {
	color: <?php echo $menu_left_attractive_color; ?>;
	font-weight: bold;
}

.active_color {
	color: <?php echo $menu_left_active_color; ?>;
}

.inactive_color {
	color: <?php echo $menu_left_inactive_color; ?>;
}

.message_bg_color {
	padding: 3px;
	background-color: <?php echo $message_bg_color; ?>;
}

.error_color {
	font-weight: bold;
	color: <?php echo $message_error_color; ?>;
}

.warning_color {
	font-weight: bold;
	color: <?php echo $message_warning_color; ?>;
}

.advice_color {
	font-weight: bold;
	color: <?php echo $message_advice_color; ?>;
}

.info_color {
	color: <?php echo $message_info_color; ?>;
}

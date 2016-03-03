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

$essential_color = $user_color;
?>

.content p, .content li {
	text-align: left;/*justify;*/
}

.references_bottom {
	padding: 5px;
	border: 1px solid rgb(200,200,200);
	font-size: 0.8em;
	color: rgb(100,100,100);
}

.references_bottom p {
	margin-top: 4px;
	margin-bottom: 2px;
}

table.essential {
	width: <?php echo $content_width; ?>px;
	border: 2px solid <?php echo $essential_color; ?>;
	text-align: center;
	vertical-align: top;
	background-color: rgba(<?php echo extractRGBValues($essential_color); ?>, 0.1);/*rgba(64,191,221,0.2);*/
	border-collapse: collapse;
}

table.essential thead th {
	height: 30px;
	width: <?php echo ($content_width/4); ?>px;
	border: 1px solid #FFFFFF;
	color: #FFFFFF;
	background-color: <?php echo $essential_color; ?>;/*#49BFDD;*/
}

table.essential tbody td {
	border: 1px solid <?php echo $essential_color; ?>;
	padding: 5px;
	text-align: left;
	vertical-align: top;
}

table.essential > tbody > tr > td > ul > li {
	list-style-type: square;
	text-align: left;
}



table.cycle {
	width: <?php echo $content_width; ?>px;
	text-align: center;
}

table.cycle thead tr th span {
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 20px;
	padding-left: 20px;
	border-radius: 10px;
	font-size: 1.2em;
	background-color: <?php echo $essential_color; ?>;/*rgb(114,214,223);*/
	color: rgb(254,254,254);
}

table.cycle tbody tr td {
/*	border: 1px solid rgb(0,0,0);*/
}

table.cycle tbody tr td div {
	margin: 0;
	display: inline-block;
	vertical-align: top;
}

table.cycle tbody tr td div p {
	margin: 0;
}



.one_in_two {
	text-align: left;
	padding-left: 130px;
}

.nb_stage {
	color: rgb(176,176,176);
}

.nb_stage div {
	margin: 0;
	display: inline-block;
	vertical-align: top;
}

.numeral {
	font-size: 3em;
}

.superscript {
	padding-top: 10px;
	text-align: left;
	font-size: 0.5em;
}

.description_stage {
	width: 250px;
	height: 100%;
	padding-left: 10px;
	border-left: 2px solid rgb(0,0,0);
	text-align: center;
	color: <?php echo $essential_color; ?>;/*rgb(143,18,125);*/
}

.title_stage a {
	font-size: 1.2em;
	font-weight: bold;
	text-decoration: underline;
	color: <?php echo $essential_color; ?>;
}

/*
.description_stage {
	color: rgb(143,18,125);
}
*/

.row_bottom {
	text-align: left;
	padding-left: 310px;
	padding-top: 20px;
}

.row_left {
	padding-top: 20px;
	padding-bottom: 20px;
	padding-right: 120px;
	text-align: right;
}

.row_right {
	padding-top: 20px;
	padding-bottom: 20px;
	text-align: left;
}


.progress_bar div {
	width: <?php echo ($content_width/8 - 3); ?>px;	
}

.step_done {
	background-color: <?php echo $user_color; ?>;
}

.step_to_do {
	background-color: rgba(<?php echo extractRGBValues($user_color); ?>,0.1);
}

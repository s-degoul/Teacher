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
require ('common.php');

$table_eval_titles_width = 360;

header("Content-type: text/css; charset: UTF-8");
?>

.advices_image {
	display: inline-block;
	vertical-align: top;
	width: 100px;
	margin: 0;
	padding: 0;
}

.advices {
	display: inline-block;
	vertical-align: top;
	width: <?php echo ($content_width-125); ?>px;
	margin: 0;
	margin-left: 20px;
}

.go {
	margin-top: 20px;
	text-align: center;
	font-size: 1.4em;
}

.go a {
	color: <?php echo $user_color; ?>;
	text-decoration: none;
}

.go a:hover {
	text-decoration: underline;
}

.group_questions_num {
	display: inline-block;
	vertical-align: middle;
	width: 70px;
	height: 75px;
	margin: 0;
	padding: 0;
	padding-top: 18px;
	background: url("../images/picto_obj.png");
	background-repeat: no-repeat;
	text-align: center;
	font-size: 2em;
	color: <?php echo $user_color; ?>;
}

.group_questions_title {
	display: inline-block;
	vertical-align: middle;
	width: <?php echo ($content_width-105); ?>px;
	font-size: 1.5em;
	font-weight: bold;
	color: <?php echo $user_color; ?>;
	margin: 0;
	margin-left: 20px;
	margin-bottom: 10px;
	padding-right: 7px;
	padding-bottom: 7px;
	border-bottom: 1px solid <?php echo $user_color; ?>;
	border-right: 1px solid <?php echo $user_color; ?>;
	border-radius: 0px 0px 10px 0px;
}

.question {
	margin-top: 20px;
	font-weight: bold;
	color: <?php echo $user_color; ?>;
}

.question_detail {
	margin-bottom: 10px;
	padding-left: 50px;
	font-size: 0.8em;
	font-style: italic;
}

.answers {
	margin-left: 50px;
}

.item, .right_answer {
	margin: 0;
	padding: 0;
	text-indent: -24px;
}

.right_answer {
	color: green;
	font-weight: bold;
}

.part_question {
	margin: 0;
	margin-top: 10px;
	padding: 0;
	font-weight: bold;
}

.question_points {
	margin: 0;
	padding: 0;
	text-align: right;
	font-weight: bold;
}

.valid_form {
	text-align: center;
}

.eval_score {
	padding: 5px;
	text-align: center;
	font-size: 1.2em;
	font-weight: bold;
	color: rgb(255,255,255);
	background-color: <?php echo $user_color; ?>;
}



.table_synthesis {
	border: 1px solid black;
	border-collapse: collapse;
}

.table_synthesis td {
	padding-left: 5px;
	padding-right: 5px;
}

.table_synthesis thead {
	background-color: <?php echo $user_color; ?>;
	color: rgb(255,255,255);
}

.table_synthesis thead tr {
	height: 35px;
}

.table_synthesis thead th {
	text-align: center;
}

.table_synthesis tbody td {
	border: 1px solid black;
}

.table_synthesis .score_tot {
	background-color: <?php echo $user_color; ?>;
	color: rgb(255,255,255);
	text-align: center;
}



.one_table_eval {
	padding: 5px;
	margin-top: 5px;
	border: 3px solid <?php echo $user_color; ?>;
	background-color: rgba(<?php echo extractRGBValues($user_color); ?>,0.1);
}

.table_eval {
	border: 1px solid <?php echo $user_color; ?>;
	border-collapse: collapse;
	background-color: rgb(254,254,254);
}

	.table_eval thead tr {
		height: 50px;
	}

	.table_eval thead th {
		background-color: <?php echo $user_color; ?>;
		color: rgb(254,254,254);
	}

	.table_eval tbody tr {
		height: 40px;
		border: 1px solid <?php echo $user_color; ?>;
	}

	.table_eval_subtitle {
		padding-left: 3px;
		padding-right: 3px;
		font-size: 0.8em;
		text-align: justify;
	}

	.table_eval_value {
		min-width: 85px;
		text-align: center;
	}

	.table_eval_date {
		border: 1px solid rgb(254,254,254);
		font-size: 0.9em;
		text-align: center;
	}

.table_eval_titles {
	display: inline-block;
	width: <?php echo $table_eval_titles_width; ?>px;
	vertical-align: top;
}

.table_eval_titles table thead th {
	font-weight: bold;
}

.table_eval_values {
	display: inline-block;
	width: <?php echo ($content_width-$table_eval_titles_width-25); ?>px;
	overflow: auto;
	vertical-align: top;
}

.table_eval_score {
	text-align: center;
	font-weight: bold;
}


.progress_bar div {
	width: <?php echo ($content_width/3 - 3); ?>px;	
}

.step_done {
	background-color: <?php echo $user_color; ?>;
}

.step_to_do {
	background-color: rgba(<?php echo extractRGBValues($user_color); ?>,0.1);
}




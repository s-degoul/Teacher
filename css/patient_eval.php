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

require('common.php');

$form_color = $patient_color;/*rgb(143,18,125);  =  #8F127D;*/
$input_color = 'rgba('.extractRGBValues($form_color).',0.1)';
$table_eval_titles_width = 360;


header("Content-type: text/css; charset: UTF-8");
?>


.target_image {
	display: inline-block;
	vertical-align: top;
	max-width: 70px;
	margin-bottom: 20px;
}

.target_content {
	display: inline-block;
	vertical-align: top;
	width: <?php echo ($content_width - 95); ?>px;
	margin: 0;
	padding: 0;
	padding-left: 10px;
	padding-top: 30px;
}

.target_title {
	padding-bottom: 10px;
	margin-bottom: 10px;
	padding-right: 10px;
	border-right: solid 1px <?php echo $form_color; ?>;
	border-bottom: solid 1px <?php echo $form_color; ?>;
	border-radius: 0px 0px 10px 0px;
	font-size: 1.4em;
	font-weight: bold;
	color: <?php echo $form_color; ?>;
}

.target_subtitle {
	font-size: 1.2em;
	font-weight: bold;
	color: <?php echo $form_color; ?>;
}

.instruction {
	margin-top: 20px;
	margin-bottom: 20px;
	padding: 0;
	font-weight: bold;
}

.real_life_situation {
	margin-bottom: 20px;
	padding: 5px;
	background-color: <?php echo $input_color; ?>;
}

.real_life_situation_title {
	margin-bottom: 10px;
	color: <?php echo $form_color; ?>;
	font-weight: bold;
}

.validation_conditions {
	margin-top: 20px;
	font-weight: bold;
	color: <?php echo $form_color; ?>;
}

.question {
	margin-bottom: 10px;
	margin-top: 20px;
}

.answer {
	margin-bottom: 10px;
	margin-top: 10px;
}

.question_answer_title {
	text-decoration: underline;
	color: <?php echo $form_color; ?>;
}

.subquestion_title {
	font-weight: bold;
	color: <?php echo $form_color; ?>;
}

.subquestion_statement {
	background-color: <?php echo $input_color; ?>;
	padding: 5px;
}

.validation {
	margin-top: 40px;
	margin-bottom: 20px;
	text-align: center;
	background-color: rgba(<?php echo extractRGBValues($form_color); ?>,0.3);
}

.validation_title {
	margin: 0;
	margin-bottom: 5px;
	font-style: italic;
}

.validation_item {
	display: inline-block;
}

.validation_button {
	text-align: center;
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

.progress_bar div {
	width: <?php echo ($content_width/11 - 3); ?>px;	
}

.step_done {
	background-color: <?php echo $form_color; ?>;
}

.step_to_do {
	background-color: <?php echo $input_color; ?>;
}



.one_table_eval {
	padding: 5px;
	margin-top: 5px;
	border: 3px solid <?php echo $patient_color; ?>;
	background-color: rgba(<?php echo extractRGBValues($patient_color); ?>,0.1);
}

.table_eval {
	border: 1px solid <?php echo $patient_color; ?>;
	border-collapse: collapse;
	background-color: rgb(254,254,254);
}

	.table_eval thead tr {
		height: 50px;
	}

	.table_eval thead th {
		background-color: <?php echo $patient_color; ?>;
		color: rgb(254,254,254);
		text-align: center;
	}

	.table_eval tbody tr {
		height: 40px;
		border: 1px solid <?php echo $patient_color; ?>;
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

	.table_eval_type_eval {
		border: 1px solid rgb(254,254,254);
		font-size: 0.9em;
		text-align: center;
	}
	
	.table_eval_type_eval a {
		color: rgb(254,254,254);
	}

.table_eval_titles {
	display: inline-block;
	width: <?php echo $table_eval_titles_width; ?>px;
	vertical-align: top;
}

.table_eval_title {
	padding-right: 2px;
	padding-left: 3px;
	border: 1px solid <?php echo $patient_color; ?>;
	font-size: 0.9em;
}

.table_eval_title_security {
	padding-right: 2px;
	padding-left: 2px;
	border: 1px solid <?php echo $patient_color; ?>;
	color: rgb(254,254,254);
	background-color: <?php echo $target_security_bgcolor; ?>;
	font-weight: bold;
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

.table_eval_asthma_control {
	background-color: rgba(<?php echo extractRGBValues($patient_color); ?>,0.1);
	font-weight: bold;
	text-align: center;
}


.legend {
	float: right;
	width: 200px;
	margin-top: 20px;
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

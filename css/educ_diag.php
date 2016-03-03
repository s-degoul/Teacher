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

$form_color = $patient_color;// #8F127D;
$input_color = 'rgba('.extractRGBValues($form_color).',0.1)';

header("Content-type: text/css; charset: UTF-8");
?>


.target_image {
	display: inline-block;
	vertical-align: middle;
	max-width: 70px;
	margin-bottom: 20px;
}

.target_title {
	display: inline-block;
	vertical-align: middle;
	max-width: <?php echo ($content_width - 95); ?>px;
	margin: 0;
	padding: 0;
	margin-left: 10px;
	margin-bottom: 20px;
	padding-right: 10px;
	padding-bottom: 10px;
	font-size: 18px;
	font-weight: bold;
	color: <?php echo $form_color;?>;
	border-right: 1px solid <?php echo $form_color;?>;
	border-bottom : 1px solid <?php echo $form_color;?>;
	border-radius: 0px 0px 10px 0px;
}

.question_number {
	display: inline-block;
	vertical-align: top;
	width: 30px;
	margin: 0;
	padding: 0;
	margin-top: 10px;
	margin-bottom: 5px;
	margin-right: 5px;
	text-align: center;
}

.question_number span {
	display: block;
	width: 20px;
	text-align: center;
	border: 1px solid transparent;
	border-radius: 50%;
	color: rgb(255,255,255);
	background-color: <?php echo $form_color; ?>
}

.question {
	display: inline-block;
	vertical-align: middle;
	max-width: <?php echo ($content_width - 40); ?>px;
	margin-top: 20px;
	margin-bottom: 5px;
}

.question_detail {
	font-size: 0.8em;
	font-style: italic;
}

.answer {
	margin: 0;
	padding: 0;
	margin-bottom: 10px;
}

.answer input {
	background-color: <?php echo $input_color; ?>;
}

.answer_text {
	margin: 0;
	padding: 5px;
	background-color: <?php echo $input_color; ?>;
	font-style: italic;
}

.validation {
	margin-top: 40px;
	margin-bottom: 20px;
	text-align: center;
	background-color: rgba(<?php echo extractRGBValues($form_color); ?>,0.3);
}

.validation_title {
	margin: 0;
	margin-bottom: 10px;
	font-style: italic;
}

.validation_item {
	display: inline-block;
	vertical-align: top;
	margin: 0;
	margin-bottom: 30px;
	margin-right: 10px;
	padding: 0;
	max-width: <?php echo ($content_width/3 -10); ?>px;
	font-weight: bold;
}



/* page "team" */

.team_title {
	display: inline-block;
	vertical-align: top;
	width: 200px;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-right: 10px;
}

.team_value {
	display: inline-block;
	vertical-align: top;
	width: <?php echo ($content_width - 220); ?>px;
	margin-top: 10px;
	margin-bottom: 10px;
}

.team_value input {
	background-color: <?php echo $input_color; ?>;
}


/* target 5 */

.device_image {
	display: inline-block;
	vertical-align: bottom;
	text-align: center;
	margin-top: 5px;
	padding-right: 5px;
	margin-bottom: 5px;
	padding: 0;
}

.device_image:hover {
	background-color: <?php echo $input_color; ?>;
}

.device_image p {
	font-size: 0.8em;
}


/* target 8 */

.crisis_trigger_title {
	display: inline-block;
	vertical-align: top;
	width: 100px;
	padding: 0;
	margin: 0;
	margin-top: 10px;
	margin-right: 10px;
	font-weight: bold;
}

.crisis_trigger_items {
	display: inline-block;
	vertical-align: top;
	width: <?php echo ($content_width -115); ?>px;
	padding: 0;
	margin: 0;
	margin-top: 10px;
}

.crisis_trigger_item {
	display: inline-block;
	vertical-align: top;
	margin-left: 20px;
}


/* target 9 */

.place_live {
	font-weight: bold;
}

.place_live_question {
	display: inline-block;
	vertical-align: top;
	width: 300px;
	margin: 0;
	margin-top: 10px;
	margin-right: 10px;
	padding: 0;
}

.place_live_items {
	display: inline-block;
	vertical-align: top;
	margin: 0;
	margin-top: 10px;
	padding: 0;
	width: <?php echo ($content_width -315); ?>px;
}



/* Beginning : advices */


.advices_title {
	line-height: 1.2em;
	font-size: 1.4em;
	font-weight: bold;
	color: <?php echo $user_color; ?>;
}

	.advices_title img {
		vertical-align: middle;
	}

.advices {
	margin-top: 10px;
	margin-bottom: 10px;
}

.advice {
	display: inline-block;
	vertical-align: top;
/*	text-align: justify;*/
	width: <?php echo ($content_width/4 -15); ?>px;
	margin: 0;
	margin-right: 10px;
	padding: 0;
}

.advice_number {
	margin: 0;
	padding: 0;
	text-align: center;
}

.advice_number span {
	padding-left: 7px;
	padding-right: 7px;
	padding-top: 2px;
	padding-bottom: 2px;
	border: 1px solid transparent;
	border-radius: 50%;
	color: rgb(255,255,255);
	background-color: <?php echo $user_color; ?>
}

.advice_important {
	font-weight: bold;
	color: <?php echo $user_color; ?>;
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
	width: <?php echo ($content_width/13 - 3); ?>px;	
}

.step_done {
	background-color: <?php echo $form_color; ?>;
}

.step_to_do {
	background-color: <?php echo $input_color; ?>;
}

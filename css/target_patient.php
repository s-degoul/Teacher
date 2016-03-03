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

header("Content-type: text/css; charset: UTF-8");
?>



.link_video {
	text-decoration: none;
}

.link_video img {
	border: 2px solid grey;
}

.target_text_red {
	font-weight: bold;
	color: rgb(254,0,0);
}

.target_text_orange {
	color: rgb(254,170,0);
}


/***************************
* therapeutic objective 1  *
****************************/

.t1_3_images {
	display: inline-block;
	max-width: 250px;
	text-align: center;
}

/***************************
* therapeutic objective 2  *
****************************/

.t2_4_images {
	display: inline-block;
	max-width: 200px;
	text-align: center;
}

.t2_2_divs {
	display: inline-block;
	vertical-align: middle;
}

.t2_chapter_red {
	margin-top: 30px;
	padding-left: 15px;
	border: 3px solid rgb(254,0,0);
}

.t2_chapter_red h2 {
	width: 400px;
	position: relative;
	bottom: 30px;
	left: 20px;
}

.t2_chapter_red h2 span {
	padding-left: 10px;
	padding-right: 10px;
	background-color: rgb(254,254,254);
}

/***************************
* therapeutic objective 3  *
****************************/

.t3_subtype {
	display: inline-block;
	padding-left: 20px;
}

.t3_subtype_active {
	color: rgb (0,0,0);
	font-weight: bold;
}

.t3_subtype_inactive {
	color: rgb (0,0,0);
}

.t3_chapter_green {
	margin-top: 30px;
	margin-bottom: 20px;
	border: 3px solid rgb(41,188,0);
	padding: 10px;
}

.t3_chapter_green h2 {
	width: 400px;
	position: relative;
	bottom: 35px;
	left: 20px;
}

.t3_chapter_green h2 span {
	padding-left: 10px;
	padding-right: 10px;
	background-color: rgb(254,254,254);
}

.t3_chapter_red {
	border: 3px solid rgb(254,0,0);
	text-align: center;
	padding: 10px;
}

.t3_chapter_red h2 {
	width: 400px;
	position: relative;
	bottom: 35px;
	left: 20px;
	text-align: left;
}

.t3_chapter_red h2 span {
	padding-left: 10px;
	padding-right: 10px;
	background-color: rgb(254,254,254);
}

.t3_chapter_red p, ul, table {
	text-align: justify;
}

.t3_4_images {
	display: inline-block;
	vertical-align: middle;
	max-width: 200px;
	padding-left: 10px;
	padding-right: 10px;
}

.t3_2_images {
	display: inline-block;
	vertical-align: middle;
	max-width: 380px;
	padding-left: 10px;
	padding-right: 10px;
}

.t3_3_images {
	display: inline-block;
	vertical-align: bottom;
	max-width: 265px;
	padding-left: 10px;
	padding-right: 10px;
}

.t3_important {
	text-align: left;
	font-weight : bold;
	color: rgb(254,0,0);
}

.t3_strong {
	font-weight: bold;
}

.t3_table {
	border: 1px solid rgb(0,0,0);
	border-collapse: collapse;
}

.t3_table tbody tr td {
	padding: 5px;
	border: 1px solid rgb(0,0,0);
}

/***************************
* therapeutic objective 4  *
****************************/

.t4_1_image {
	text-align: center;
}

.t4_2_images {
	display: inline-block;
	vertical-align: top;
	max-width: 350px;
	height: 350px;
	margin-left: 10px;
	margin-right: 10px;
	padding-left: 5px;
	padding-right: 5px;
	border: 2px solid rgb(254,0,0);
	text-align: center;
}

.t4_2_images h3 {
	font-size: 1em;
	font-weight: bold;
	color: rgb(254,0,0);
}

.t4_image_near_text {
	display: inline-block;
	vertical-align: top;
	width: 300px;
}

.t4_text_near_image {
	display: inline-block;
	vertical-align: top;
	max-width: 500px;
}

/***************************
* therapeutic objective 6  *
****************************/

.t6_image_near_text {
	display: inline-block;
	vertical-align: top;
	width: 200px;
}

.t6_text_near_image {
	display: inline-block;
	max-width: 500px;
}

/***************************
* therapeutic objective 7  *
****************************/

.t7_chapter_green {
	margin-top: 30px;
	margin-bottom: 20px;
	border: 3px solid rgb(41,188,0);
	padding: 10px;
}

.t7_chapter_green h2 {
	width: 500px;
	position: relative;
	bottom: 35px;
	left: 20px;
}

.t7_chapter_green h2 span {
	padding-left: 10px;
	padding-right: 80px;
	background-color: rgb(254,254,254);
}

.t7_chapter_orange {
	margin-top: 30px;
	margin-bottom: 20px;
	border: 3px solid rgb(254,170,0);
	padding: 10px;
}

.t7_chapter_orange h2 {
	width: 400px;
	position: relative;
	bottom: 35px;
	left: 20px;
}

.t7_chapter_orange h2 span {
	padding-left: 10px;
	padding-right: 10px;
	background-color: rgb(254,254,254);
}

.t7_chapter_red {
	margin-top: 30px;
	margin-bottom: 20px;
	border: 3px solid rgb(254,0,0);
	padding: 10px;
}

.t7_chapter_red h2 {
	width: 400px;
	position: relative;
	bottom: 35px;
	left: 20px;
	text-align: left;
}

.t7_chapter_red h2 span {
	padding-left: 10px;
	padding-right: 10px;
	background-color: rgb(254,254,254);
}

.t7_4_images {
	display: inline-block;
	vertical-align: middle;
	width: 200px;
	text-align: center;
}

.t7_2_images {
	display: inline-block;
	vertical-align: middle;
	max-width: 360px;
	padding-left: 10px;
	padding-right: 10px;
}

.t7_2_divs {
	display: inline-block;
	vertical-align: middle;
	max-width: 600px;
	min-width: 200px;
}

.t7_row_left {
	display: inline-block;
	width: 360px;
	margin-bottom: 20px;
	padding-right: 20px;
	text-align: right;
}

.t7_row_left img, .t7_row_right img {
	height: 60px;
}

.t7_row_right {
	display: inline-block;
	width: 360px;
	margin-bottom: 20px;
	padding-left: 20px;
	text-align: left;
}

.t7_remember {
	padding: 5px;
	background-color: rgb(254,0,0);
	color: rgb(254,254,254);
}

.t7_remember h2 {
	color: rgb(254,254,254);
	font-weight: bold;
}

/***************************
* therapeutic objective 8  *
****************************/

.t8_3_images {
	display: inline-block;
	vertical-align: top;
	max-width: 250px;
}

.t8_4_images {
	display: inline-block;
	vertical-align: top;
	max-width: 200px;
}

.t8_4_links_groups {
	display: inline-block;
	vertical-align: top;
	width: 180px;
}

.t8_explanations {
	margin-top: 40px;
	padding: 10px;
	border: 1px solid rgb(41,188,0); 
}

.t8_explanations_title {
	display: inline-block;
	vertical-align: top;
	margin: 0;
	padding-left: 20px;
	height: 30px;
	max-width: 600px;
	font-weight: bold;
}

.t8_explanations_title img {
	position: relative;
	bottom: 45px;
}

/***************************
* therapeutic objective 9  *
****************************/

.t9_idea_num {
	font-weight: bold;
	margin-top: 20px;
	margin-bottom: 3px;
}

.t9_idea_text {
	margin: 0;
	margin-bottom: 5px;
}

.t9_possible_answers {
	text-align: left;
}

.t9_answer_right, .t9_answer_wrong {
	display: inline-block;
	vertical-align: top;
	width: 50px;
	margin-left: 5px;
	color: rgb(255,255,255);
	border-radius: 3px;
	text-align: center;
}

.t9_answer_right {
	background-color: green;
}

.t9_answer_wrong {
	background-color: red;
}

.t9_image {
	display: inline-block;
	vertical-align: top;
	width: 200px;
	margin: 0;
	padding: 0;
}

.t9_comment {
	float: right;
	width: 250px;
	margin-left: 20px;
	margin-bottom: 20px;
	padding: 5px;
	background-color: rgba(<?php echo extractRGBValues($patient_color); ?>,0.2);
}

.t9_comment_title {
	font-weight: bold;
}

.t9_sep {
	height: 50px;
}


/***************************
* therapeutic objective 10 *
****************************/

.t10_story {
	margin-top: 20px;
	margin-bottom: 20px;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	border: 1px solid <?php echo $patient_color; ?>;
	border-radius: 10px;
}

.t_10_story_text {
	margin: 0;
	padding: 0;
}

.t_10_story_text_side {
	display: inline-block;
	vertical-align: top;
	width: <?php echo ($content_width-180); ?>px;
	margin: 0;
	padding: 0;
}

.t10_story_image {
	display: inline-block;
	vertical-align: top;
	width: 150px;
	margin: 0;
	padding: 0;
}

.t10_title {
	margin-top: 10px;
	margin-bottom: 10px;
	font-weight: bold;
	color: <?php echo $patient_color; ?>;
}

.t10_num_question {
	display: inline-block;
	vertical-align: top;
	width: 30px;
	margin: 0;
	padding: 0;
	margin-right: 10px;
	margin-top: 10px;
}

.t10_num_question span {
	padding-top: 2px;
	padding-bottom: 2px;
	padding-left: 5px;
	padding-right: 5px;
	color: rgb(255,255,255);
	font-weight: bold;
	background-color: <?php echo $patient_color; ?>;
	border-radius: 50%;
}

.t10_question_answer_text {
	display: inline-block;
	vertical-align: top;
	width: <?php echo ($content_width-50) ;?>px;
	margin: 0;
	margin-top: 10px;
	padding: 0;
}

.t10_question_answer_text p {
	margin: 0;
	padding: 0;
}

.t10_pict_good_to_know {
	float: left;
	height: 80px;
	width: 72px;
	background-color: rgb(255,255,255);
	background-image: url('../images/good_to_know.gif');
}

.t10_good_to_know {
	margin-top: 30px;
	margin-left: 40px;
	margin-bottom: 60px;
	padding-bottom: 5px;
	padding-left: 60px;
	border-bottom: 1px solid rgb(57,138,23);
	border-left: 1px solid rgb(57,138,23);
	border-radius: 0px 0px 0px 10px;
	background-repeat: no-repeat;
	color: rgb(57,138,23);
}

.t10_tricks {
	margin: 0;
	margin-top: 20px;
	padding: 10px;
	border: 2px solid rgb(0,0,0);
	border-radius: 10px;
}

.t10_tricks_part_title span {
	padding: 3px;
	color: rgb(255,255,255);
	background-color: rgb(0,0,0);
	font-weight: bold;
}



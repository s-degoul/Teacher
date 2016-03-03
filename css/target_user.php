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

header("Content-type: text/css; charset: UTF-8");
?>


.content_target {
	display: inline-block;
	width: <?php echo ($content_width - 250); ?>px;
	margin: 0px;
	padding: 10px;
}




.advice_target {
	margin: 0px;
	padding-left: 20px;
	padding-right: 5px;
	padding-top: 10px;
	padding-bottom: 15px;
	display: inline-block;
	vertical-align: top;
	width: 200px;
	word-wrap: break-word;
	background-color: rgb(143,189,66); /*rgb(57,138,23);*/
	color: rgb(0,0,0);/*#FFFFFF;*/
}

.advice_target p {
	margin: 0px;
}

.advice_target a {
	color: rgb(0,0,0);
	font-weight: bold;
	text-decoration: none;
}

.advice_target a:hover {
	text-decoration: underline;
}

.title_advice_target {
	padding-top: 10px;
	text-decoration: underline;
	font-weight: bold;
}



.content_target > strong {
	font-weight: bold;
}




.pict_good_to_know {
	float: left;
	height: 80px;
	width: 72px;
	background-color: #FFFFFF;
	background-image: url('../images/good_to_know.gif');
}

.good_to_know {
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

.good_to_know_3_cols {
	display: inline-block;
	margin: 0;
	padding: 0;
	padding-right: 10px;
	width: 140px;
	vertical-align: top;
	text-align: left;
	font-size: 0.8em;
}

.good_to_know_2_cols {
	display: inline-block;
	margin: 0;
	padding: 0px;
	padding-right: 10px;
	width: 190px;
	vertical-align: top;
	text-align: left;
	font-size: 0.8em;
}

.nb_good_to_know {
	font-weight: bold;
	font-size: 1.2em;
}

.good_to_know a {
	text-decoration: underline;
	color: rgb(57,138,23);
}

.pict_how_to_guide {
	float: left;
	height: 115px;
	width: 72px;
	background-color: #FFFFFF;
	background-image: url('../images/how_to_guide.gif');
}

.how_to_guide {
	margin-top: 30px;
	margin-left: 40px;
	margin-bottom: 60px;
	padding-bottom: 5px;
	padding-left: 60px;
/*	text-indent: -30px;*/
	border-bottom: 1px solid rgb(143,20,124);
	border-left: 1px solid rgb(143,20,124);
	border-radius: 0px 0px 0px 10px;
	background-repeat: no-repeat;
	color: rgb(143,20,124);
}

.nb_how_to_guide {
	display: inline-block;
	vertical-align: top;
	width: 25px;
	margin: 0;
	margin-top: 20px;
	padding: 0;
	font-size: 1.5em;
	font-weight: bold;
}

.chapter_how_to_guide {
	display: inline-block;
	vertical-align: top;
	width: 430px;
	margin: 0;
	margin-top: 20px;
	padding: 0;
}

.chapter_how_to_guide p {
	margin: 0;
	padding: 0;
}


.how_to_guide h2 {
	font-size: 1.1em;
	color: rgb(143,20,124);
}

.how_to_guide a {
	color: rgb(143,20,124);
}

.chapter_how_to_guide h2 {
	margin-top: 3px;
	font-size: 1.1em;
}






.chapter_how_to_guide_green {
	display: inline-block;
	vertical-align: top;
	padding: 0;
	padding-right: 5px;
	margin-bottom: 20px;
	width: 448px;
	border: 3px solid rgb(143,189,66);/*rgb(41,188,0);*/
}

.chapter_how_to_guide_green span {
	position: relative;
	bottom: 12px;
	left: 20px;
	padding-left: 10px;
	padding-right: 10px;
	background-color: rgb(254,254,254);
	font-weight: bold;
	font-size: 1.1em;
}

.chapter_how_to_guide_green p {
	padding: 5px;
}

.chapter_how_to_guide_red {
	display: inline-block;
	vertical-align: top;
	padding: 0;
	padding-right: 5px;
	width: 448px;
	border: 3px solid rgb(254,0,0);
}

.chapter_how_to_guide_red span {
	position: relative;
	bottom: 12px;
	left: 20px;
	padding-left: 10px;
	padding-right: 10px;
	background-color: rgb(254,254,254);
	font-weight: bold;
	font-size: 1.1em;
}

.chapter_how_to_guide_red p {
	padding: 5px;
}

/*.how_to_guide ul li {
	text-indent: 0px;
}*/



.key_message {
	margin-top: 30px;
	margin-bottom: 30px;
}

.content_key_message {
	display: inline-block;
	vertical-align: middle;
	width: 355px;
	padding: 5px;
	margin-left: 10px;
	border-radius: 10px;
	background-color: rgb(0,162,175);
	color: #FFFFFF;
	text-indent: 0px;
}

.pict_key_message {
	display: inline-block;
	vertical-align: middle;
	height: 50px;
	width: 50px;
	background-color: #FFFFFF;
	background-image: url('../images/key_message.gif');
}

.nb_key_message {

}




.link_video img {
	border: 2px solid grey;
}



.text_red {
	color: rgb(254,0,0);
}

.text_orange {
	color: rgb(254,170,0);
}

.text_green {
	color: rgb(41,188,0);
}

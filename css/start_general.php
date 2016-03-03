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


body {
	background-color: rgb(200,255,200);
}

	.header_title {
		background-color: rgba(254,254,254,0);
	}

	.header_menu {
		background-color: rgba(254,254,254,0);
	}

	.header_top a {
		padding: 0px;
		margin-left: 0px;
		border: none;
		color: rgb(0,0,0);
	}

	.header_middle {
		padding-left: 140px;
		padding-top: 60px;
		color: rgb(0,0,0);
	}
	
	h1 {
		color: rgb(255,255,255);
	}

	.header_high_letters {
		color: rgb(103,34,178);
	}

	.menu_top, .items_menu_top, .menu_decoration, .menu_decoration2 {
		display: none;
	}




.middle_page {
	background-color: rgb(29,23,95);
}

.menu_left {
	display: none;
}

section {
	margin: 0;
	padding: 0;
	width: <?php echo $body_width; ?>px;
}

.content {
	color: rgb(254,254,254);
}

.start_title {
	margin-bottom: 30px;
	padding: 30px;
	text-align: justify;
	font-size: 2.5em;
}

.start_subtitle {
	display: inline-block;
	vertical-align: top;
	padding: 50px;
	padding-right: 30px;
	width: <?php echo ($body_width-320); ?>px;
	font-size: 2em;
}

.start_subtitle_green {
	color: rgb(147,208,31);
}

.choice_user_type {
	display: inline-block;
	width: 200px;
	height: 250px;
	padding: 10px;
	margin-bottom: 50px;
	border-radius: 10px;
	background-color: rgb(147,208,31);
	color: rgb(0,0,0);
}

.choice_user_type p {
	margin: 0;
	margin-top: 20px;
	padding: 0px;
	font-size: 0.7em;
}

.choice_user_title {
	border-bottom: 1px solid rgb(254,254,254);
	font-size: 1.3em;
	color: rgb(254,254,254);
}

.choice_user_type a {
	display: block;
	margin-bottom: 8px;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 6px;
	padding-right: 6px;
	text-align: center;
	text-decoration: none;
	border-radius: 15px;
	background-color: rgb(224,224,224);
	font-size: 1.4em;
	color: rgb(0,0,0);
}

.choice_user_type a:hover {
	text-decoration: underline;
}

.start_logos {
		text-align: center;
}

.start_logo {
	display: inline-block;
	vertical-align: middle;
	margin-left: 10px;
}

.connection {
	width: 500px;
	padding: 10px;
	margin: auto;
	margin-top: 100px;
	margin-bottom: 30px;
	border-radius: 10px;
	background-color: rgb(147,208,31);
	color: rgb(0,0,0);
}
	
	.connection_title {
		display: inline-block;
		vertical-align: top;
		margin: 5px;;
		width: 130px;
	}
	
	.connection_field {
		display: inline-block;
		vertical-align: top;
		margin: 5px;
		width: 250px;
	}

footer {
	display: none;
}

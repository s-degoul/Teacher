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

$input_color = 'rgba('.extractRGBValues($user_color).',0.1)';

?>

.user_profile {
	margin: 15px;
	padding: 10px;	
	border-style: solid;
	border-width: 2px;
	border-color: <?php echo $user_color; ?>;
	border-radius: 10px;
}

.user_profile_part {
	background-color: rgba(<?php echo extractRGBValues($user_color); ?>,0.2);
	margin: 10px;
	padding: 5px;
	border-style: solid;
	border-width: 2px;
	border-color: <?php echo $user_color; ?>;
	border-radius: 10px;	
}

.user_profile_label {
	display: inline-block;
	vertical-align: top;
	margin: 5px;
	margin-left: 20px;
	width: 150px;
	text-align: left;
	font-weight: bold;
}

.user_profile_field {
	display: inline-block;
	vertical-align: top;
	margin: 5px;
	width: <?php echo ($content_width-130-150); ?>px;
}

.user_profile_field p {
	margin: 0;
}


.user_password_label {
	display: inline-block;
	vertical-align: top;
	margin: 5px;
	margin-left: 20px;
	width: 200px;
	text-align: left;
	font-weight: bold;
}

.user_password_field {
	display: inline-block;
	vertical-align: top;
	margin: 5px;
	width: <?php echo ($content_width-130-200); ?>px;
}

.user_password_field input {
	background-color: <?php echo $input_color; ?>;
}



.user_form {
	display: inline-block;
	width: 500px;
}

.button {
	font-size: large;
	padding-left: 190px;
	margin-left: .5em;
}

.user_main_left {
	display: inline-block;
	width: 350px;
}

	.user_main_1 {
		background-color: #D9E9F7;
		margin-right: 15px;
		margin-bottom: 15px;
		border-style: solid;
		border-width: 2px;
		border-color: grey;
		border-radius: 10px;
		padding: 5px;	
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

.item_user {
	display:inline-block;
	text-align: center;
	background-color: silver;
	margin: 10px;
	border-radius: 5px;
	padding: 8px;
}
.item_user > a {
	color: black;
	font-weight: bold;
	text-decoration: none;		
}



.table_user_eval {
	border-collapse: collapse;
}

.table_user_eval thead tr {
	border-bottom: 2px solid black;
}

.table_user_eval tbody tr {
	height: 1.6em;
}

.table_user_eval_nb {
	width: 50px;
}

.table_user_eval_date {
	width: 200px;
}

.table_user_eval_eval {
	width : 200px;
}

.table_user_eval_synthesis {
	width: 200px;
}

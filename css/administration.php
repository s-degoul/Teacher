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

include('common.php');

$admin_color = 'rgb(255,150,0)';
?>

.header_title {
	background-color: <?php echo $admin_color; ?>;
}

.header_menu {
	background-color: <?php echo $admin_color; ?>;
}

.header_session {
	background-color: <?php echo $admin_color; ?>;
}

.table_user_list {
	border: 1px solid <?php echo $admin_color; ?>;
	border-collapse: collapse;
	text-align: center;
}

.table_user_list th {
	padding: 3px;
	border: 1px solid rgb(255,255,255);
	background-color: <?php echo $admin_color; ?>;
}

.table_user_list td {
	padding-top: 5px;
	padding-bottom: 5px;
	border-right: 1px solid <?php echo $admin_color; ?>;
	background-color: rgba(<?php echo extractRGBValues($admin_color); ?>,0.2);
}

.add_user_label {
	display: inline-block;
	vertical-align: top;
	margin: 5px;
	width: 150px;
	text-align: left;
	font-weight: bold;
}

.add_user_field {
	display: inline-block;
	vertical-align: top;
	margin: 5px;
	width: <?php echo ($content_width-180); ?>px;
}

.add_user_field input, .add_user_field select {
	background-color: rgba(<?php echo extractRGBValues($admin_color); ?>,0.2);
}

footer {
	background-color: <?php echo $admin_color; ?>;
}

.menu_left {
	display: none;
}

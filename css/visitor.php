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

$item_menu_top_color_inactive = $visitor_color;
$item_menu_top_bgcolor_active = $visitor_color;
?>

	.header_title {
		background-color: <?php echo $visitor_color; ?>;
	}

	.header_menu {
		background-color: <?php echo $visitor_color; ?>;
	}

	.header_session {
		background-color: <?php echo $visitor_color; ?>;
	}

	.item_menu_top_active,
	.item_menu_top_inactive {
		display: inline-block;
		vertical-align: top;
		width: 200px;
		text-align: center;
		margin-left: 5px;
	}
	
	.item_menu_top_active a {
		color: <?php echo $item_menu_top_color_active; ?>;
		background-color: <?php echo $item_menu_top_bgcolor_active; ?>;
	}

	.item_menu_top_inactive a {
		color: <?php echo $item_menu_top_color_inactive; ?>;
		background-color: <?php echo $item_menu_top_bgcolor_inactive; ?>;
	}

	.item_menu_top_inactive:hover > a {
		background-color: <?php echo $item_menu_top_bgcolor_active; ?>;
		color:  <?php echo $item_menu_top_color_active; ?>;
	}

.menu_left {
	min-height: 100px;
	padding-top: 140px;
	padding-left: 5px;
	padding-right: 5px;
	color: rgb(0,0,0);
}

.menu_left a {
	color: rgb(0,0,0);
}

footer {
	background-color: <?php echo $visitor_color; ?>;
	background-image:linear-gradient(to top, <?php echo $visitor_color; ?>, rgb(254,254,254));
}

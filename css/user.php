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

$menu_left_1_bdcolor = $user_color;
$menu_left_1_bgcolor = 'rgb(255,197,229)';//'rgb(200,100,190)';//'rgb(229,114,156)';
$menu_left_2_bdcolor = $user_color;
$menu_left_2_bgcolor = 'rgba(212,20,90,0.3)';
$menu_left_3_bdcolor = $user_color;
$menu_left_3_bgcolor = 'rgba(212,20,90,0.1)';
?>

	.header_title {
		background-color: <?php echo $user_color; ?>;
	}

	.header_menu {
		background-color: <?php echo $user_color; ?>;
	}

	.header_session {
		background-color: <?php echo $user_color; ?>;
	}

.menu_left {
	background-color: <?php echo $user_color; ?>;
	border-top-right-radius: 100px;
}

	.menu_left_attractive_1 {
		margin: 0;
		padding: 3px;
		border: 1px solid <?php echo $menu_left_1_bdcolor; ?>;
		background-color: <?php echo $menu_left_1_bgcolor; ?>;
		/*background-color: rgba(254,254,254,0.3);*/
	}
	
	.menu_left_attractive_1 a {
		color: <?php echo $menu_left_attractive_color; ?>;
		font-weight: bold;
		text-decoration: none;
	}
	
	.menu_left_attractive_2 {
		margin: 0;
		padding: 3px;
		padding-left: 20px;
		border: 1px solid <?php echo $menu_left_2_bdcolor; ?>;
		background-color: <?php echo $menu_left_2_bgcolor; ?>;
		font-size: 0.9em;
		/*background-color: rgba(254,254,254,0.3);*/
	}
	
	.menu_left_attractive_2 a {
		color: <?php echo $menu_left_attractive_color; ?>;
		text-decoration: none;
	}
	
	.menu_left_attractive_3 {
		margin: 0;
		padding: 3px;
		padding-left: 30px;
		border: 1px solid <?php echo $menu_left_3_bdcolor; ?>;
		background-color: <?php echo $menu_left_3_bgcolor; ?>;
		font-size: 0.8em;
		/*background-color: rgba(254,254,254,0.3);*/
	}
	
	.menu_left_attractive_3 a {
		color: <?php echo $menu_left_attractive_color; ?>;
		text-decoration: none;
	}

	.menu_left_active_1 {
		margin: 0;
		padding: 3px;
		border: 1px solid <?php echo $menu_left_1_bdcolor; ?>;
		background-color: <?php echo $menu_left_1_bgcolor; ?>;
	}
	
	.menu_left_active_1 a {
		color: <?php echo $menu_left_active_color; ?>;
		font-weight: normal;
		text-decoration: none;
	}
	
	.menu_left_active_2 {
		margin: 0;
		padding: 3px;
		padding-left: 20px;
		border: 1px solid <?php echo $menu_left_2_bdcolor; ?>;
		background-color: <?php echo $menu_left_2_bgcolor; ?>;
		font-size: 0.9em;
	}
	
	.menu_left_active_2 a {
		color: <?php echo $menu_left_active_color; ?>;
		text-decoration: none;
	}
	
	.menu_left_active_3 {
		margin: 0;
		padding: 3px;
		padding-left: 30px;
		border: 1px solid <?php echo $menu_left_3_bdcolor; ?>;
		background-color: <?php echo $menu_left_3_bgcolor; ?>;
		font-size: 0.8em;
	}
	
	.menu_left_active_3 a {
		color: <?php echo $menu_left_active_color; ?>;
		text-decoration: none;
	}

	.menu_left_inactive_1 {
		margin: 0;
		padding: 3px;
		border: 1px solid <?php echo $menu_left_1_bdcolor; ?>;
		background-color: <?php echo $menu_left_1_bgcolor; ?>;
		color: <?php echo $menu_left_inactive_color; ?>;
	}
	
	.menu_left_inactive_2 {
		margin: 0;
		padding: 3px;
		padding-left: 20px;
		border: 1px solid <?php echo $menu_left_2_bdcolor; ?>;
		background-color: <?php echo $menu_left_2_bgcolor; ?>
		color: <?php echo $menu_left_inactive_color; ?>;
		font-size: 0.9em;
	}
	
	.menu_left_inactive_3 {
		margin: 0;
		padding: 3px;
		padding-left: 30px;
		border: 1px solid <?php echo $menu_left_3_bdcolor; ?>
		background-color: <?php echo $menu_left_3_bgcolor; ?>;
		color: <?php echo $menu_left_inactive_color; ?>;
		font-size: 0.8em;
		/*background-color: rgba(254,254,254,0.3);*/
	}

footer {
	background-color: <?php echo $user_color; ?>;
	background-image:linear-gradient(to top, <?php echo $user_color; ?>, rgb(254,254,254));
}

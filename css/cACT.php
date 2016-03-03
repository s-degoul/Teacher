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

$color_cact = 'rgb(255,102,0)';

header("Content-type: text/css; charset: UTF-8");
?>

.cACT_child_table {
	margin-bottom: 10px;
	border: 1px solid <?php echo $color_cact; ?>;
	background-color: rgba(<?php echo extractRGBValues($color_cact); ?>,0.2);
}

	.cACT_child_table tbody tr td {
		border-bottom: 2px solid rgb(254,254,254);
	}

	.cACT_child_title {
		width: 200px;
		text-align: justify;
		vertical-align: middle;
		color: <?php echo $color_cact; ?>;
	}

	.cACT_child_item {
		width: 150px;
		vertical-align: top;
		text-align: center;
	}

	.cACT_child_nb {
		display: inline-block;
		vertical-align: top;
		margin-right: 10px;
		padding-left: 5px;
		padding-right: 5px;
		border-radius: 15px;
		background-color: rgb(0,0,0);
		color: rgb(254,254,254);
	}


.cACT_parent_question {
	margin: 0;
	padding: 5px;
	border: 1px solid <?php echo $color_cact; ?>;
	background-color: rgba(<?php echo extractRGBValues($color_cact); ?>,0.3);
}

.cACT_parent_title {
	color: <?php echo $color_cact; ?>;
}

.cACT_parent_nb {
	display: inline-block;
	padding-left: 5px;
	padding-right: 5px;
	border-radius: 15px;
	font-size: 0.8em;
	background-color: rgb(0,0,0);
	color: rgb(254,254,254);
}

.cACT_parent_item {
	display: inline-block;
	margin-right: 10px;
	font-size: 0.8em;
}

.cACT_score {
	text-align: center
}

.cACT_score span {
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 3px;
	padding-bottom: 3px;
	font-size: 1.2em;
	font-weight: bold;
	background-color: <?php echo $color_cact; ?>;
}

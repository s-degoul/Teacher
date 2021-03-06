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

$eval_color = $patient_color;//rgb(143,20,124)

header("Content-type: text/css; charset: UTF-8");
?>


.table_parent_eval {
	margin-top: 10px;
	padding: 5px;
	border: 3px solid <?php echo $eval_color; ?>;
	border-collapse: collapse;
	text-align: justify;
	background-color: rgba(<?php echo extractRGBValues($eval_color); ?>,0.1);
}

.table_parent_eval thead tr td {
	text-align: center;
	font-weight: bold;
}

.parent_knowledge_2_items {
	width: 50px;
	font-size: 0.8em;
}

.parent_knowledge_3_items {
	width: 70px;
	font-size: 0.8em;
}

.parent_skill_items {
	width: 100px;
	font-size: 0.8em;
}

.table_parent_eval tbody tr td {
	border: 1px solid <?php echo $eval_color; ?>;
}

.parent_eval_text {
	padding: 5px;
}

.parent_eval_cell {
	text-align: center;
}

.parent_eval_cell_separation {
	max-width: 5px;
	margin: 0;
	padding: 0;
	border: none;
	background-color: <?php echo $eval_color; ?>;
}

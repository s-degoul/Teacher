  
<?php
/*********************************************************************
Teacher

Copyright 2013 by Sébastien Mabon and Samuel Degoul (sdegoul@gmail.com)

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
?>


<?php

$list_modules_actions_visitor = array (
									'patient_teaching' => array (
																'show_target_list' => array(),
																'show_target' => array (
																						'type' => 'patient'
																					),
																'show_eval' => array(),
																'create_parent_eval' => array()
															),
									'start' => array (
													'start_visitor' => array()
												),
									'user_management' => array (
																'connection' => array(
																						'visitor' => 1
																					),
																'disconnection' => array()
															),
									'legal_notices' => array (
															'show_licence' => array()
														)
								);

?>

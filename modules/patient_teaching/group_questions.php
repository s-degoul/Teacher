  
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

$list_group_questions = array (
						'start' => array (
										'title' => _("Histoire de la maladie"),
										'first_question' => 1,
										'last_question' => 3,
										'next_group_questions' => 1
									),
						1 => array (
										'first_question' => 4,
										'last_question' => 6,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 'NA',
																'valid' => 2										
															)
									),
						2 => array (
										'first_question' => 7,
										'last_question' => 7,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 'NA',
																'valid' => 2										
															)
									),
						'3_a' => array (
										'first_question' => 8,
										'last_question' => 8,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 'NA',
																'valid' => 2										
															)
									),
						'3_b' => array (
										'first_question' => 9,
										'last_question' => 9,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 'NA',
																'valid' => 2										
															)
									),
						'4_a' => array (
										'first_question' => 10,
										'last_question' => 10,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 0.5,
																'valid' => 1								
															)
									),
						'4_b' => array (
										'first_question' => 11,
										'last_question' => 11,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 0.5,
																'valid' => 1										
															)
									),
						5 => array (
										'first_question' => 12,
										'last_question' => 14,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 'NA',
																'valid' => 2										
															)
									),
						6 => array (
										'first_question' => 15,
										'last_question' => 16,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 'NA',
																'valid' => 1										
															)
									),
						7 => array (
										'first_question' => 17,
										'last_question' => 18,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 0.5,
																'valid' => 1											
															)
									),
						'8_a' => array (
										'first_question' => 19,
										'last_question' => 19,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 0.5,
																'valid' => 1											
															)
									),
						'8_b' => array (
										'first_question' => 20,
										'last_question' => 20,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 0.5,
																'valid' => 1										
															)
									),
						9 => array (
										'first_question' => 21,
										'last_question' => 21,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 0.5,
																'valid' => 1									
															)
									),
						10 => array (
										'first_question' => 22,
										'last_question' => 23,
										'items_validation' => array(
																'non_valid' => 0,
																'partially_valid' => 0.5,
																'valid' => 1										
															),
										'next_group_questions' => 'asthmacontrol'
									),
						'asthmacontrol' => array (
										'title' => _("Evaluation subjective et objective du niveau de contrôle de l'asthme"),
										'subtitle' => _("permet de déceler l'état d'esprit de la famille par rapport à l'asthme :
														inquiétude excessive versus banalisation des symptômes"),
										'first_question' => 24,
										'last_question' => 25,
										'next_group_questions' => 'end'
										)
					);

?>

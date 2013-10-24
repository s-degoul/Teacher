  
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

$group_questions = array (
					1 => array (
								'title' => _("Evaluation de mes connaissances en matières d'éducation thérapeutique du Patient"),
								'title_small' => _("Connaissances générales"),
								'first_question' => 1,
								'last_question' => 3
							),
					2 => array (
								'title' => _("Je donne brièvement le ou les objectifs de chaque étape de la démarche éducative"),
								'title_small' => _("Démarche éducative"),
								'first_question' => 4,
								'last_question' => 7
							),
					3 => array (
								'title' => _("Les bonnes questions à me poser pour savoir si j'ai la « <em>pedagogic attitude</em> »"),
								'title_small' => _("Attitude pédagogique"),
								'first_question' => 8,
								'last_question' => 10
							)
					);
?>

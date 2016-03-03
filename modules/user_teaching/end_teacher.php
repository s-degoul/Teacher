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

if($_SESSION['user_end_teacher'] == 1) {
	$user_end_teacher = 2;
	require(MODEL_PATH.'update_user_end_teacher.php');
	
	$_SESSION['user_end_teacher'] = 2;

	require (VIEW_RELATIVE_PATH.'end_teacher.php');
}
else {
	if($_SESSION['user_end_teacher'] == 0) {
		$_SESSION['messages']['error'] = _("Vous ne pouvez pas terminer le programme Teacher");
	}
	elseif($_SESSION['user_end_teacher'] == 2) {
		$_SESSION['messages']['info'] = _("Le programme Teacher est déjà terminé");
	}
	
	header('location:.?module=start&action=start_user');
}

?>

  
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
/*
if ($_SESSION['user_first_eval'] == 0) {
		$messages['error'][] = _("Vous devez d'abord").' <a href=\'.?module=user_teaching&action=create_eval\'>'._("réaliser une première auto-évaluation")
							.'</a> '._("avant de pouvoir inclure un / des patient(s)")."\n";
}
elseif ($_SESSION['user_validation_essential'] == 0) {
		$messages['error'][] = _("Vous devez d'abord").' <a href=\'.?module=user_teaching&action=show_essential\'>'._("lire la formation théorique initiale &quot;l&apos;Essentiel&quot;")
							.'</a> '._("avant de pouvoir inclure un / des patient(s)")."\n";
}
else {*/

		
require (MODEL_PATH.'select_target_list.php');

require (VIEW_RELATIVE_PATH	.'show_target_list.php');
	

?>

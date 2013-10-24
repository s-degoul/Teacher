  
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
if (empty ($_SESSION['patient']))
	$messages['error'][] = _("Aucun patient sélectionné");
else {
	if (isset ($_POST['confirm_delete_patient'])) {
		require (MODEL_PATH.'select_user_password.php');
		
		if (md5($_POST['user_password']) !== $user_password) {
			$messages['error'][] = _("Vous avez fait une erreur de mot de passe");
			require (VIEW_RELATIVE_PATH.'delete_patient.php');
		}
		else {
			require (MODEL_PATH.'delete_patient.php');
			
//			$_SESSION['info'] = _("Le patient").' '.$_SESSION['patient']['patient_surname'].' '.$_SESSION['patient']['patient_firstname'].' '._("a été supprimé de Teacher");
			unset ($_SESSION['patient']);
			header ('location:.?module=patient_management&action=show_patient_list');
		}
	}
	else {
		$messages['warning'][] = _("Êtes vous sur/sûre de vouloir supprimer le patient").' '
									.strtoupper($_SESSION['patient']['patient_surname']).' '.$_SESSION['patient']['patient_firstname'].' ?';
		require (VIEW_RELATIVE_PATH.'delete_patient.php');
	}
}
?>

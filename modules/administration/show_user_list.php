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

/*	
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
/**/

	if (isset ($_POST['valid_del_user'])) {
		$user_del = checkVarPost();
		
		$del_admin = 0;
		$del_itself = 0;
		foreach ($user_del as $value) {
			if ($value == 2)
				$del_admin ++;
			elseif ($value == 3) {
				$del_itself ++;
				$del_admin ++;
			}
		}

		
		require (MODEL_PATH.'select_nb_user_admin.php');
		if ($nb_user_admin - $del_admin < 1)
			$messages['error'][] = _("Vous ne pouvez supprimer tous les utilisateurs ayant une fonction d'administrateur.");

		elseif (!isset ($_SESSION['warning']['delete_user'])) {
			$messages['warning'][] = _("La suppression d'un/plusieurs utilisateur(s) est irréversible et entraîne la suppression de tous les dossiers patients qui leur sont attachés.");
			
			if ($del_admin > 0) // todo : check that one user with admin rights remains
				$messages['warning'][] = _("Un(des) utilisateur(s) que vous voulez supprimer est(sont) administrateur(s).");
			if ($del_itself == 1)
				$messages['warning'][] = _("Confirmez-vous vouloir supprimer votre propre compte utilisateur ? Dans ce cas, vous serez déconnecté et n'aurez plus accès au système.");
			
			$_SESSION['warning']['delete_user'] = 1;
		}		
		
		
		if (empty ($messages['error']) and empty ($messages['warning'])) {
			if (isset ($_SESSION['warning']['delete_user']))
				unset ($_SESSION['warning']['delete_user']);
			
			unset ($user_del['valid_del_user']);
			foreach ($user_del as $id => $value) {
				$id = explode('_', $id);
				$id_user = $id[2];

				require(MODEL_PATH.'select_patient_list.php');
				
				foreach ($list_patient as $features_patient) {
					$id_patient = $features_patient['id_patient'];
					require (MODEL_PATH.'delete_patient.php');
				}
		
				require (MODEL_PATH.'delete_user.php');
			}
			
			if ($del_itself == 1) {
				header('location:.?module=user_management&action=disconnection');
			}
		}
	}
	
	require (MODEL_PATH.'select_user_list.php');

	require (VIEW_RELATIVE_PATH.'show_user_list.php');
?>

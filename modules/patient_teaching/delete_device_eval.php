  
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

if (!isset ($_SESSION['patient']))
	$messages['error'][] = _("aucun dossier patient ouvert");
elseif (! isset ($_GET['device']) or empty($_GET['device'])) {
	$messages['error'][] = _("aucun appareil d'inhalation sélectionné");
}
elseif (! isset ($_GET['id']) or empty($_GET['id'])) {
	$messages['error'][] = _("aucune évaluation sélectionnée");
}
else {	
	$device = $_GET['device'];
	$id_table_device = $_GET['id'];
		
	if (empty ($_SESSION['warning'][$id_table_device])) {
		$messages['warning'][] = _("Êtes-vous sur de vouloir supprimer cette évaluation ?");
		$_SESSION['warning'][$id_table_device] = 1;
		
		require (VIEW_RELATIVE_PATH.'delete_device_eval.php');
	}
	else {

		require (MODEL_PATH.'delete_device_eval.php');
		unset ($_SESSION['warning']);

		header ('location:.?module=patient_teaching&action=show_device_eval');
	}
}
?>

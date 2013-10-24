  
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

if (isset ($_GET['from'])) {
	$from_page = $_GET['from'];
	if ($from_page == 'target_5') {
		$from_page_link = '.?module=patient_teaching&action=show_target&id_target=5&type=user';
		$content_top .= '<p><a href=\''.$from_page_link.'\'>'._("revenir à l'objectif éducatif n°5").'</a></p>';
	}
	elseif ($from_page == 'show_device_eval') {
		$from_page_link = '.?module=patient_teaching&action=show_device_eval';
		$content_top .= '<p><a href=\''.$from_page_link.'\'>'._("revenir aux évaluations de l'utilisation des dispositifs").'</a></p>';
	}
/*
	elseif ($from_page == 'create_device_eval') {
		$from_page_link = '.?module=patient_teaching&action=create_device_eval&page_educ_diag=5';
		$content_top .= '<p><a href=\''.$from_page_link.'\'>'._("revenir au diagnostic éducatif").'</a></p>';
	}

	elseif ($from_page == 'show_educ_diag') {
		$from_page_link = '.?module=patient_teaching&action=show_educ_diag';
		$content_top .= '<p><a href=\''.$from_page_link.'\'>'._("revenir au diagnostic éducatif").'</a></p>';
	}
*/
}
else {
	$from_page = '';
}

if (! isset ($_REQUEST['device']) or empty($_REQUEST['device'])) {
	$messages['error'][] = _("aucun appareil d'inhalation sélectionné");
}
else {
	
	$device = $_REQUEST['device'];

	$video_file = 'device_'.$device.'_'.$_SESSION['lang'].'.ogg';
	
	if (file_exists ('videos/'.$video_file)) {
		require (VIEW_RELATIVE_PATH.'show_video_devices.php');
	}
	else {
		$messages['error'][] = _("Vidéo introuvable");
	}
}
?>

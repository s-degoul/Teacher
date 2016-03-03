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

if (isset ($_GET['licence']))
	$target_licence = $_GET['licence'];
else
	$target_licence = 'program';


if (file_exists (VIEW_RELATIVE_PATH.'licence_'.$target_licence.'_'.$_SESSION['lang'])) {
	$file_licence = fopen (VIEW_RELATIVE_PATH.'licence_'.$target_licence.'_'.$_SESSION['lang'], 'r');
}
elseif (file_exists (VIEW_RELATIVE_PATH.'licence_'.$target_licence.'_'.DEFAULT_LOCALE)) {
	$messages['warning'][] = _("la licence n'est pas traduite dans votre langue");
	$file_licence = fopen (VIEW_RELATIVE_PATH.'licence_'.$target_licence.'_'.DEFAULT_LOCALE, 'r');
}
else {
	$messages['error'][] = _("licence introuvable");
}

if (empty ($messages['error'])) {
	$date_update = fgets ($file_licence);
	$date_update_parts = explode ('-', $date_update);
	$date_update_parts[2] = trim ($date_update_parts[2]);

	if (!isset ($date_update_parts[1]) or !isset ($date_update_parts[2]) or checkdate ($date_update_parts[1], $date_update_parts[2], $date_update_parts[0]) == false) {
		$date_update = '';
		rewind ($file_licence);
	}
	
	$content_licence = '';
	while (!feof ($file_licence)) {
		$content_licence .= '<p>'.fgets ($file_licence).'</p>';
	}
	
	fclose ($file_licence);
	
	
	$content_top .= '<p class = \'\'><a href = \'.?module=legal_notices&action=show_licence&licence=program\' class = \'link\'>'._("Programme").'</a></p></div>'
	.'<div><p class = \'\'><a href = \'.?module=legal_notices&action=show_licence&licence=content\' class = \'link\'>'._("Contenu (texte, illustrations, ...").'</a></p>';
	
	if ($target_licence == 'program')
		$messages['info'][] = _("Cette licence concerne le programme supportant Teacher (scripts PHP, HTML, SQL, CSS, Javascript) dont les sources sont disponibles sur <a href = 'https://github.com/s-degoul/Teacher'>GitHub</a>.");
	elseif ($target_licence == 'content')
		$messages['info'][] = _("Cette licence concerne le contenu de Teacher (textes, images, vidéos).");
	
	require (VIEW_RELATIVE_PATH.'show_licence.php');
}

?>

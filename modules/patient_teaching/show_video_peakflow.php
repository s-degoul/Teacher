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

if (isset ($_GET['from'])) {
	$from_page = $_GET['from'];
	
	if ($from_page == 'target_6') {
		$from_page_link = '.?module=patient_teaching&action=show_target&id_target=6&type=user';
	}
	elseif ($from_page == 'show_peakflow_use') {
		$from_page_link = '.?module=patient_teaching&action=show_peakflow_use';
	}
}
else {
	$from_page = '';
}


$lang = $_SESSION['lang'];
$no_video = 0;
do {
	$video_name = 'videos/peakflow_'.$lang;
	$video_ogg = $video_name.'.ogg';
	$video_mp4 = $video_name.'.mp4';
	
	if (!file_exists($video_ogg) and !file_exists($video_mp4))
	{
		if ($lang == DEFAULT_LOCALE) {
			$no_video = 1;
			break;
		}
		else
			$lang = DEFAULT_LOCALE;
	}
} while ($no_video == 1);

if ($no_video == 0) {
	require (VIEW_RELATIVE_PATH.'show_video_peakflow.php');
}
else {
	$messages['error'][] = _("Vidéo introuvable");
}

?>

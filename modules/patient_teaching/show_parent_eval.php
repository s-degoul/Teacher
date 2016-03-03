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
if (isset ($_GET['from'])) {
	if ($_GET['from'] == 'essential')
		$content_top .= '<a href = \'.?module=user_teaching&action=show_essential&page_essential=4\'>'
						._("retourner à &quot;l'Essentiel à savoir&quot;").'</a>';
}
*/

if (isset ($_SESSION['patient']['id_patient']) or isset ($_GET['demo'])) {
//	$id_user_eval = $_GET['id_user_eval'];

	if (isset ($_GET['demo']) and !isset ($_SESSION['patient']['id_patient']))
		$messages['info'][] = _("Ceci est une évaluation vide pour démonstration");
		
	elseif (isset ($_SESSION['patient']['id_patient'])) {
			if (isset ($_GET['id_parent_eval']))
				$id_parent_eval = $_GET['id_parent_eval'];
			else
				$messages['error'][] = _("Aucune évaluation sélectionnée");
	}
	else
		$messages['error'][] = _("Aucune évaluation sélectionnée");
}	

if (empty ($messages['error'])) {
	require ('list_questions_parent_eval.php');
	
    if (isset ($_SESSION['patient']['id_patient'])) {
		require (MODEL_PATH.'select_parent_eval.php');
		
		$content_top .= '<p>'._("Évaluation réalisée le").' '.showDate($parent_eval['parent_eval_date']).'</p>'."\n";
	}
    
    
	require (VIEW_RELATIVE_PATH.'parent_eval.php');
}

?>

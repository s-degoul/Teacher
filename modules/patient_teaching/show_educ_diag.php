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


	if (!isset ($_SESSION['patient']['id_patient'])) {
		$messages['info'][] = _('Ceci est une démonstration en lecture seule');
		//~ if (isset ($_GET['from']) and $_GET['from'] == 'essential')
			//~ $content_top .= '<a href = \'.?module=user_teaching&action=show_essential&page_essential=1\' class = \'link\'>' ._("retourner à &quot;l'Essentiel à savoir&quot;").'</a>';
	}
	else
		$id_patient = $_SESSION['patient']['id_patient'];



	require ('list_questions_educ_diag.php');
	require ('group_questions_educ_diag.php');
	require (MODEL_PATH.'select_target_list.php');
	
    if (isset ($_SESSION['patient']['id_patient'])) {
		require (MODEL_PATH.'select_educ_diag_all.php');
		
		$content_top .= '<p>'._("Diagnostic éducatif réalisé le").' '.showDate($educ_diag['educ_diag_date']).'</p>'."\n";
		$content_top .= $content_bottom = '<p><a href=\'.?module=patient_teaching&action=show_summ_eval&type_eval=educ_diag\' class = \'link\'>'
							._("Consulter le contrat éducatif").'</a></p>'."\n";
	}
    
    for ($page = -1; $page <= 11 ; $page ++) {
		if ($page == -1) {
			$page_educ_diag = 'team';
			require (VIEW_RELATIVE_PATH.'educ_diag_team.php');
		}
		else {
			if ($page == 0)
				$page_educ_diag = 'start';
			elseif ($page == 11)
				$page_educ_diag = 'asthmacontrol';
			else
				$page_educ_diag = $page;
				
			require (VIEW_RELATIVE_PATH.'educ_diag.php');
		}
	}
?>

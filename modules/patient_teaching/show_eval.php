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

//~ 
//~ if (isset ($_GET['from'])) {
	//~ if ($_GET['from'] == 'essential')
		//~ $content_top .= '<a href = \'.?module=user_teaching&action=show_essential&page_essential=4\' class = \'link\'>'
						//~ ._("retourner à &quot;l'Essentiel à savoir&quot;").'</a>';
//~ }

if (isset ($_SESSION['patient']['id_patient'])) {// or isset ($_GET['demo'])) {
//	$id_user_eval = $_GET['id_user_eval'];

	//~ if (isset ($_GET['demo']) and !isset ($_SESSION['patient']['id_patient']))
		//~ $messages['info'][] = _("Ceci est une évaluation vide pour démonstration");
	if (isset ($_SESSION['patient']['id_patient'])) {
			if (isset ($_GET['id_cycle_educ']))
				$id_cycle_educ = $_GET['id_cycle_educ'];
//			elseif (isset ($_GET['id_eval'])) // rétrocompatibilité : supprimer 'id_eval'
//				$id_cycle_educ = $_GET['id_eval'];
			elseif (isset ($_GET['demo']))
				require (MODEL_PATH.'select_last_cycle_educ_achieved.php');
			else
				$messages['error'][] = _("Aucune évaluation sélectionnée");
	}
	else
		$messages['error'][] = _("Aucune évaluation sélectionnée");
}
else {
	$messages['info'][] = _("Ceci est une évaluation vide pour démonstration");
	$id_cycle_educ = '';
}

if (empty ($messages['error'])) {
	require (MODEL_PATH.'select_list_cycle_target.php');
	
	$maintain_eval = 0;
	if (!empty ($list_cycle_target) or isset ($_GET['demo']) or !isset ($_SESSION['patient']['id_patient'])) {
		require ('list_questions_eval.php');
	}
	else {
		require ('list_questions_maintain_eval.php');
//		if (!isset ($_GET['demo']))
//			$maintain_eval = 1;
	}
	
	require (MODEL_PATH.'select_target_list.php');
	
    if (isset ($_SESSION['patient']['id_patient'])) {
		$id_patient = $_SESSION['patient']['id_patient'];
		require (MODEL_PATH.'select_cycle_educ_summ.php');
		
		$content_top .= '<p class=\'info_date\'>'._("Évaluation de fin de programme réalisée le").' '.showDate($cycle_educ['cycle_educ_eval_date']).'</p>'."\n";
		$content_top .= $content_bottom = '<p><a href=\'.?module=patient_teaching&action=show_summ_eval&type_eval=cycle_educ_eval&show_target_cycle=1&id_cycle_educ='.$id_cycle_educ.'\' class = \'link\'>' // rétrocompatibilité : supprimer 'id_eval'
							._("Consulter la synthèse associée").'</a></p>'."\n";
	}
    
    for ($page = 1; $page <= 11 ; $page ++) {
		if ($page == 11)
			$page_eval = 'asthmacontrol';
		else
			$page_eval = $page;
			
		require (VIEW_RELATIVE_PATH.'eval.php');
	}
}

?>

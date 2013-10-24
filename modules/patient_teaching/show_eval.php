  
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
	if ($_GET['from'] == 'essential')
		$content_top .= '<a href = \'.?module=user_teaching&action=show_essential&page_essential=4\'>'
						._("retourner à &quot;l'Essentiel à savoir&quot;").'</a>';
}

if (isset ($_SESSION['patient']['id_patient']) or isset ($_GET['demo'])) {
//	$id_user_eval = $_GET['id_user_eval'];

	if (isset ($_GET['demo']) and !isset ($_SESSION['patient']['id_patient']))
		$messages['info'][] = _("Ceci est évaluation vide pour démonstration");
	elseif (isset ($_SESSION['patient']['id_patient'])) {
			if (isset ($_GET['id_eval']))
				$id_cycle_educ = $_GET['id_eval'];
			elseif (isset ($_GET['demo']))
				require (MODEL_PATH.'select_last_cycle_educ_achieved.php');
			else
				$messages['error'][] = _("Aucune évaluation sélectionnée");
	}
	else
		$messages['error'][] = _("Aucune évaluation sélectionnée");
}	

if (empty ($messages['error'])) {
	require ('list_questions_eval.php');
	require (MODEL_PATH.'select_target_list.php');
	
    if (isset ($_SESSION['patient']['id_patient'])) {
		require (MODEL_PATH.'select_cycle_educ_summ.php');
		$content_top .= '<p>'._("Évaluation de fin de programme réalisée le").' '.showDate($cycle_educ['cycle_educ_eval_date']).'</p>'."\n"
							.'<p><a href=\'.?module=patient_teaching&action=show_summ_eval&type_eval=cycle_educ_eval&show_target_cycle=1&id_eval='.$id_cycle_educ.'\'>'
								._("consulter la synthèse associée").'</a></p>'."\n";
	}
    
    for ($page_eval = 1; $page_eval <= 10 ; $page_eval ++) {
		require (VIEW_RELATIVE_PATH.'eval.php');
	}
}

?>

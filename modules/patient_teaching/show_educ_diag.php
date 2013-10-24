  
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

//if (isset ($_SESSION['patient']['id_patient']) or isset ($_GET['demo'])) {
//	$id_user_eval = $_GET['id_user_eval'];

//	if (isset ($_GET['demo']) and !isset ($_SESSION['patient']['id_patient']))
	if (!isset ($_SESSION['patient']['id_patient']))
		$messages['info'][] = _('Ceci est une démonstration en lecture seule');
/*	else
		$messages['info'][] = _('Les réponses justes sont en vert ; les réponses que vous avez données sont celles cochées. Votre résultat se trouve tout en bas');
*/
	if (isset ($_GET['from'])) {
		if ($_GET['from'] == 'essential')
			$content_top .= '<a href = \'.?module=user_teaching&action=show_essential&page_essential=1\'>'
							._("retourner à &quot;l'Essentiel à savoir&quot;").'</a>';
	}

	require ('list_questions.php');
	require ('group_questions.php');
	require (MODEL_PATH.'select_target_list.php');
	
    if (isset ($_SESSION['patient']['id_patient']))
		require (MODEL_PATH.'select_educ_diag_all.php');
    
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
/*}
else {
	$messages['error'][] = _("Aucune évaluation sélectionnée");
}*/

?>

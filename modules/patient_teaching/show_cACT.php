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


//~ if (isset ($_GET['from'])) {
	//~ if ($_GET['from'] == 'show_educ_diag')
		//~ $content_top .= '<p><a href = \'?module=patient_teaching&action=show_educ_diag&page_educ_diag=asthmacontrol\' class = \'link\'>'._("Revenir au diagnostic éducatif").'</a></p>';
	//~ if ($_GET['from'] == 'show_eval')
		//~ $content_top .= '<p><a href = \'?module=patient_teaching&action=show_eval&id_cycle_educ='.$_GET['id_cycle_educ'].'&page_eval=asthmacontrol\' class = \'link\'>'._("Revenir à l'évaluation").'</a></p>';
//~ }

if (isset ($_POST['valid_cact'])) {
	$cact_score = 0;
	
	$cact_responses = checkVarPOST();

	foreach ($cact_responses as $item => $score) {
		if(is_numeric($score) and $item != 'valid_cact' and $item != 'from') {
			$cact_score += $score;
		}
	}
	
	if(isset($_POST['from'])) {
		if ($_POST['from'] == 'create_educ_diag')
			header('location:.?module=patient_teaching&action=create_educ_diag&page_educ_diag=asthmacontrol&cact_score='.$cact_score);
		elseif ($_POST['from'] == 'create_eval')
			header('location:.?module=patient_teaching&action=create_eval&page_eval=asthmacontrol&cact_score='.$cact_score);
		exit;
	}
}

require (VIEW_RELATIVE_PATH.'cACT.php');
?>

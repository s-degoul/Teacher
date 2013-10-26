  
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

if (isset ($_GET['id_user_eval'])) {
	$id_user_eval = $_GET['id_user_eval'];

	if (isset ($_GET['no_response'])) {
		if ($_SESSION['user_validation_essential'] == 0)
			$messages['info'][] = _("Vous avez achevé votre évaluation").'.<br/>'
								._("Veuillez lire").' &quot;<a href=\'.?module=user_teaching&action=show_essential\'>'
								._("L'essentiel à savoir avant de commencer").'</a>&quot;';
		else
			$messages['info'][] = _("Votre évaluation a bien été enregistrée").'<br/>'._("Voici vos résultats");
	}
	else
		$messages['info'][] = _("Les réponses justes sont en vert ; les réponses que vous avez données sont celles cochées. Votre résultat se trouve tout en bas");

	$content_top .= '<a href = \'.?module=user_teaching&action=show_summ_eval&id_user_eval='.$id_user_eval.'\'>'._("Voir la synthèse associée").'</a>'."\n";

	require ('list_questions.php');

    require (MODEL_PATH.'select_user_eval_answers.php');
    
    require (MODEL_PATH.'select_user_eval.php');
    
    $nb_all_points = 0;
	$nb_max_points = 0;
    
    for ($group_questions = 1; $group_questions <= 3; $group_questions ++) {
		require ('group_questions.php');
		$page_eval = $group_questions;
		require (VIEW_RELATIVE_PATH.'user_eval.php');
	}
}
else {
	$messages['error'][] = _("Aucune évalution sélectionnée");
}

?>

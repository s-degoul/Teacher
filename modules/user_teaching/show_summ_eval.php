  
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
	require ('list_questions.php');
	require ('group_questions_bis.php');

    require (MODEL_PATH.'select_user_eval_answers.php');
    
    $id_user_eval = $_GET['id_user_eval'];
    require (MODEL_PATH.'select_user_eval.php');
    
    $nb_all_points = 0;
	$nb_max_points = count ($list_answers);

	require (VIEW_RELATIVE_PATH.'show_summ_eval.php');
}
else {
	$_SESSION['messages']['info'] = _("Aucune évaluation précisée. Voici donc toute la liste.");
	header ('location:.?module=user_teaching&action=show_summ_all_eval');
}

?>

  
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

$style[] = 'target';

require (MODEL_PATH.'select_target_list.php');

if (isset ($_GET['id_target'])) {
	if ((int) $_GET['id_target'] >= 1 and (int) $_GET['id_target'] <= 10) {
		$id_target = (int) $_GET['id_target'];
	}
	else {
		$messages['error'][] = _("Aucun objectif sélectionné");
	}
}
else {
	$messages['error'][] = _("Aucun objectif sélectionné");
}

if (empty ($messages['error'])) {

	$type_reader = 'patient';
	if (isset ($_GET['type']) and $_GET['type'] != 'patient') {
		$type_reader = 'user';
		$style[] = 'user_help';
	}

	$title_view = $list_target[$id_target]['target_name'];
	// affichage à faire si c'est un objectif de sécurité ($list_target[$id_target]['target_security'] = 1)

	if (isset ($_GET['from'])) {
		if ($_GET['from'] == 'essential')
			$content_top .= '<a href = \'.?module=user_teaching&action=show_essential&page_essential=3\'>'
							._("retourner à &quot;l'Essentiel à savoir&quot;").'</a>';
							
		$from_page = '&from='.$_GET['from'];
	}
	else {
		$from_page = '';
	}

	$menu_list_target = '<div>'._("Objectifs").' ';
	for ($nb_target = 1; $nb_target <= 10; $nb_target ++) {
		$menu_list_target .= ' <a href=\'.?module=patient_teaching&action=show_target&id_target='
					.$nb_target.'&type='.$type_reader.$from_page.'\'>'.$nb_target.'</a> ';
	}
	$content_top .= $menu_list_target.'</div>';


	if (isset ($_SESSION['user'])) {
		$css_user = $css_patient = 'nav_target';
		if ($type_reader == 'patient')
			$css_patient = 'nav_target_selected';
		else
			$css_user = 'nav_target_selected';

		$content_top .= '<div class=\''.$css_user.'\'><a href=\'.?module=patient_teaching&action=show_target&id_target='
						.$id_target.'&type=user'.$from_page.'\'>Conducteur médecin</a></div>'
						.'<div class=\''.$css_patient.'\'><a href=\'.?module=patient_teaching&action=show_target&id_target='
						.$id_target.'&type=patient'.$from_page.'\'>Fiche enfant</a></div>';
	}

	if (isset ($_POST['valid_target'])){
		$target_done = 1;
		$target_date = date('Y-m-d H:i:s');
		$id_cycle_educ = $_SESSION['patient']['id_cycle_educ'];
		require (MODEL_PATH.'update_cycle_target.php');
		
		$_SESSION['patient']['targets'][$id_target]['target_done'] = 1;
		$messages['info'][] = _("Cet objectif éducatif est validé");
	}

	if (isset ($_SESSION['patient']['targets'][$id_target])) {
		if ($_SESSION['patient']['targets'][$id_target]['target_done'] == 0)
			require (VIEW_RELATIVE_PATH.'target_form_validation.php');
		elseif (! isset ($_POST['valid_target']))
			$messages['info'][] = _("Cet objectif éducatif est déjà validé");
	}
	

	if (is_file (VIEW_RELATIVE_PATH.'target_'.$id_target.'_'.$type_reader.'.php'))
		require (VIEW_RELATIVE_PATH.'target_'.$id_target.'_'.$type_reader.'.php');
	else
		$messages['error'][] = _("impossible d'accéder à la page correspondant à cet objectif éducatif");
}

?>

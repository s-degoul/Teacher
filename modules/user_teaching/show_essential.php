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


$id_user = $_SESSION['id_user'];
//~ require (MODEL_PATH.'select_user_eval_list.php');

if ($_SESSION['user_first_eval'] == 0) {
		$messages['error'][] = _("Vous devez d'abord").' <a href=\'.?module=user_teaching&action=create_eval\'>'._("réaliser une première auto-évaluation")
							.'</a> '._("avant de pouvoir accéder à la formation théorique initiale")."\n";	
}

else {
	if (isset ($_GET['page_essential']) and is_file (VIEW_RELATIVE_PATH.'essential_'.$_GET['page_essential'].'.php'))
		$page_essential = $_GET['page_essential'];
	else
		$page_essential = 'what';


	
	function nextpage_essential ($adress, $sentence='page suivante', $css_lien='link_next') {
		$link = '<div class=\''.$css_lien.'\'>'."\n";
		if(!empty($adress))
			$link .= '<a href=\'.?module=user_teaching&action=show_essential&page_essential='
					.$adress.'\'>'.$sentence.'</a>'."\n";
		$link .= '</div>'."\n";
			
		return($link);
	}

	function lastpage_essential ($adress, $sentence='page précédente', $css_lien='link_last') {
		return nextpage_essential ($adress, $sentence, $css_lien);
	}



	if ($_SESSION['user_validation_essential'] == 0)
		$title_view= _("L'Essentiel à savoir avant de commencer");
	elseif ($_SESSION['user_validation_essential'] == 2)
		$title_view= _("Je rafraîchis mes connaissances");
	else
		$title_view = _("Rappel de l'essentiel à savoir");

	if ($page_essential == 'ref') {
		require (MODEL_PATH.'update_user_essential.php');
		if ($_SESSION['user_validation_essential'] == 0)
			$messages['advice'][] = _("Vous avez achevé votre formation théorique à l'Éducation Thérapeutique Personnalisée.<br/>Vous pouvez maintenant inscrire votre premier enfant pour démarrer son programme d'ETP (cliquez sur &laquo;&nbsp;Programme éducatif&nbsp;&raquo; dans le menu de gauche).");
		else
			$messages['advice'][] = _("Vous pouvez maintenant inscrire d'autre(s) enfant(s) pour démarrer son(leur) programme d'ETP (cliquez sur &laquo;&nbsp;Mes patients&nbsp;&raquo; > &laquo;&nbsp;Ajouter un patient&nbsp;&raquo; dans le menu en haut).");
			
		$_SESSION['user_validation_essential'] = 1;
	}

	
	if (isset ($_GET['from'])) {
		if ($_GET['from'] == 'show_eval' and isset ($_GET['id_user_eval']))
			$content_top .= '<p><a href = \'.?module=user_teaching&action=show_eval&id_user_eval='.$_GET['id_user_eval'].'\' class = \'link\'>'._("revenir à la consultation de votre évaluation").'</a></p>';
	}

	$style[] = 'essential';
	
	require (VIEW_RELATIVE_PATH.'progress_bar.php');
	
	require (VIEW_RELATIVE_PATH.'essential_'.$page_essential.'.php');
}
?>

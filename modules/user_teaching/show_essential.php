  
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
	
	require (MODEL_PATH.'select_user_eval_list.php');

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
			return '<div class=\''.$css_lien.'\'><a href=\'.?module=user_teaching&action=show_essential&page_essential='
				.$adress.'\'>'.$sentence.'</a></div>'."\n";
		}

		function lastpage_essential ($adress, $sentence='page précédente', $css_lien='link_last') {
			return nextpage_essential ($adress, $sentence, $css_lien);
		}

		if ($_SESSION['user_validation_essential'] == 0)
			$title_view= _("L'Essentiel à savoir avant de commencer");
		else
			$title_view= _("Je rafraîchis mes connaissances");

		if ($page_essential == 'ref') {
			require (MODEL_PATH.'update_user_essential.php');
			if ($_SESSION['user_validation_essential'] == 0)
				$messages['info'][] = _("Vous avez achevé votre formation théorique à l'Éducation Thérapeutique Personnalisée.<br/>
										Vous pouvez maintenant").' <a href=\'.?module=patient_management&action=add_new_patient\'>'.
										_("inscrire votre premier enfant").'</a> '._("pour démarrer son programme d'ETP");
			$_SESSION['user_validation_essential'] = 1;
		}

		$style[] = 'essential';
		require (VIEW_RELATIVE_PATH.'essential_'.$page_essential.'.php');
	}
?>

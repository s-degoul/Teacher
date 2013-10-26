  
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

if (isset ($_POST['valid_modif_profile'])) {
	$user = checkVarPost();
	if (!isset ($user['user_therap_educ']))
		$user['user_therap_educ'] = 0;

	$list_user_speciality = array();
	
	foreach ($user as $id_item => $value_item) {
		$id_item_parts = explode ('_', $id_item);
		if ($id_item_parts[0] == 'subspeciality') {
			$id_subspeciality = $id_item_parts[1];
			$list_user_speciality['subspeciality'][$id_subspeciality] = $value_item;
		}
		if ($id_item_parts[0] == 'speciality') {
			$list_user_speciality['speciality'][$value_item] = $value_item;
		}
	}
}
else {
	require (MODEL_PATH.'select_user_all.php');
	require (MODEL_PATH.'select_user_speciality.php');
}
/*
echo '<pre>';
print_r ($list_user_speciality);
echo '</pre>';
*/

require (MODEL_PATH.'select_language_list.php');
require (MODEL_PATH.'select_speciality_list.php');
require (MODEL_PATH.'select_country_list.php');
require ('list_practice.php');

// Check of vars received
if (isset ($_POST['valid_modif_profile'])) {
	
	if (empty ($user['user_surname']) or empty($user['user_firstname']))
		$messages['error'][] = _('Veuillez renseigner nom').' <em>'._('et').'</em> '._('pr&eacute;nom');

	if (empty ($user['user_phone']) or empty ($user['user_mail']))
		$messages['error'][] = _('Veuillez renseigner un num&eacute;ro de t&eacute;l&eacute;phone')
								.' <em>'._('et').'</em> '._('une adresse mail');

	if (! empty ($user['user_phone']) and ! preg_match ('#[0-9]#', $user['user_phone']))			// to be improved, but becareful on differences in phone number between countries
		$messages['error'][] = _('Le num&eacute;ro de t&eacute;l&eacute;phone ne semble pas conforme');

	if (! empty ($user['user_mail']) and ! preg_match ('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $user['user_mail'])) {
		if (preg_match ('#[A-Z]+#', $user['user_mail']))
			$messages['error'][] = _("L'adresse mail ne semble pas conforme (il ne faut pas de majuscule)");
		else
			$messages['error'][] = _("L'adresse mail ne semble pas conforme");
	}

	if (! array_key_exists ($user['id_language'], $list_language))
		$messages['error'][] = _('Le language s&eacute;lectionn&eacute; n&apos; pas valide');
		
	if (! array_key_exists ($user['id_country'], $list_country))
		$messages['error'][] = _('Le pays s&eacute;lectionn&eacute; n&apos; pas valide');
	
	if (! array_key_exists ($user['user_practice'], $list_practice))
		$messages['error'][] = _("Le mode d'exercice sélectionné n'est pas valide");

	if (empty ($messages['error'])) {
		require (MODEL_PATH.'update_user_all.php');
		require (MODEL_PATH.'update_user_speciality.php');
		
		$_SESSION['user_surname'] = $user['user_surname'];
		$_SESSION['user_title'] = $user['user_title'];
	
		$id_language = $user['id_language'];
		$_SESSION['lang'] = $list_language[$id_language]['language_code'];
		$_SESSION['lang_name'] = $list_language[$id_language]['language_name'];
		
		$id_country = $user['id_country'];
		$_SESSION['timezone'] = $list_country[$id_country]['country_timezone'];

		$_SESSION['messages']['info'] = _("Les modifications ont été enregistrées");
		header('location:.?module=user_management&action=show_profile');
	}
}


require (VIEW_RELATIVE_PATH.'modify_profile.php');


?>

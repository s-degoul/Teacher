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

$title_view = 'Mon profil';
$style[] = 'user_profile';
?>

<form action = '' method = 'post'>

<div class = 'user_profile'>
	
	<div class = 'user_profile_part'>
		<h2><?php echo _("Accessibilité"); ?></h2>
		<div>
			<p class = 'user_profile_label'><?php echo _("Identifiant"); ?></p>
			<p class = 'user_profile_field'><?php echo $user['user_login']; ?>
			<input type = 'hidden' name = 'user_login' value = '<?php echo $user['user_login']; ?>'/></p>
		</div>

		<p><a href='.?module=user_management&action=change_password' class = 'link_action'><?php echo _("Changer le mot de passe"); ?></a></p> 
			
			<!-- identifiant (login) non modifiable-->
	</div>
	
	<div class = 'user_profile_part'>
		<h2><?php echo _("Identification"); ?></h2>
		<div>
			<p class = 'user_profile_label'><label for="user_title"><?php echo _("Titre"); ?> : </label></p>
			<p class = 'user_profile_field'>
				<select name='user_title' id="user_title">
<?php
	$list_title = array (
			'' => '',
			'M.' => 'M.',
			'Mme.' => 'Mme.',
			'Dr.' => 'Dr.',
			'Pr.' => 'Pr.'
			);
	foreach ($list_title as $value_title => $name_title) {
		if ($value_title == $user['user_title'])		
			$selected = 'selected';
		else
			$selected = '';
?>
		<option value = '<?php echo $value_title; ?>' <?php echo $selected; ?> ><?php echo $name_title; ?></option>
<?php
	}
?>
				</select>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="user_surname"><?php echo _("Nom"); ?> : </label></p>
			<p class = 'user_profile_field'>
				<input type="text" name='user_surname' id="user_surname" value="<?php echo $user['user_surname']; ?>"/>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="user_name"><?php echo _("Prénom"); ?> : </label></p>
			<p class = 'user_profile_field'>
				<input type="text" name='user_firstname' id="user_name" value="<?php echo $user['user_firstname']; ?>"/>
			</p>
		</div>
	</div>

	<div class = 'user_profile_part'>
		<h2><?php echo _("Contacts"); ?></h2>
		<div>
			<p class = 'user_profile_label'><label for="user_phone"><?php echo _("Téléphone"); ?> : </label></p>
			<p class = 'user_profile_field'>
				<input type="text" name='user_phone' id="user_phone" value="<?php echo $user['user_phone']; ?>"/>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="user_mail"><?php echo _("E-mail"); ?> : </label></p>
			<p class = 'user_profile_field'>
				<input size=30 type="text" name='user_mail' id="user_mail" value="<?php echo $user['user_mail']; ?>"/>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="user_street"><?php echo _("Rue (et numéro)"); ?> : </label></p>
			<p class = 'user_profile_field'>
					<input size=30 type="text" name='user_street' id="user_street" value="<?php echo $user['user_street']; ?>"/>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="user_postal_code"><?php echo _("Code postal"); ?> : </label></p>
			<p class = 'user_profile_field'>
					<input size=30 type="text" name='user_postal_code' id="user_postal_code" value="<?php echo $user['user_postal_code']; ?>"/>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="user_city"><?php echo _("Ville"); ?> : </label></p>
			<p class = 'user_profile_field'>
				<input size=40 type='text' name='user_city' id='user_city' value="<?php echo $user['user_city']; ?>" />
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="id_country"><?php echo _("Pays"); ?> : </label></p>
			<p class = 'user_profile_field'>
				<select name='id_country' id="id_country">


<?php
	foreach ($list_country as $key => $feature_country) {
		if ($feature_country['id_country'] == $user['id_country'])		
			$selected = 'selected';
		else
			$selected = '';
?>
				<option value = '<?php echo $feature_country['id_country']; ?>' <?php echo $selected; ?>><?php echo $feature_country['country_name']; ?></option>
<?php
	}
?>

				</select>
				<?php echo _("NB : les heures enregistrées avec les formulaires seront celles correspondant au pays indiqué ici"); ?>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="id_language"><?php echo _("Langue"); ?> : </label></p>
			<p class = 'user_profile_field'>
				<select name='id_language' id="id_language">


<?php
	foreach ($list_language as $key => $feature_lang) {
		if ($feature_lang['id_language'] == $user['id_language'])		
			$selected = 'selected';
		else
			$selected = '';
?>
				<option value = '<?php echo $feature_lang['id_language']; ?>' <?php echo$selected; ?>><?php echo $feature_lang['language_name']; ?></option>
<?php
	}
?>

				</select>
			</p>
		</div>
	</div>

	<div class = 'user_profile_part'>
		<h2><?php echo _("Activités"); ?></h2>
		<div>
<?php
	foreach ($list_speciality as $type => $features_spe_type) {
		if ($type == 'speciality') {
?>
			<p class = 'user_profile_label'><label for='speciality'><?php echo _("Spécialité médicale"); ?></label></p>
			<p class = 'user_profile_field'>
				<select name='speciality' id="speciality">
					<option value = ''></option>
<?php
			foreach ($features_spe_type as $id_speciality => $speciality_name) {
				if (isset ($list_user_speciality[$type][$id_speciality]))
					$selected = 'selected';
				else
					$selected = '';
?>
				<option value = '<?php echo $id_speciality; ?>' <?php echo $selected; ?>><?php echo $speciality_name; ?></option>
<?php
			}
?>
				</select>
			</p>
<?php
		}
		elseif ($type == 'subspeciality') {
?>
			<p class = 'user_profile_label'><?php echo _("Sur-spécialité"); ?></p>
			<div class = 'user_profile_field'>
<?php
			foreach ($features_spe_type as $id_speciality => $speciality_name) {
				if (isset ($list_user_speciality[$type][$id_speciality]))
					$checked = 'checked';
				else
					$checked = '';
?>	
				<p>
					<input type = 'checkbox' name = 'subspeciality_<?php echo $id_speciality; ?>' id = 'subspeciality_<?php echo $id_speciality; ?>' value = '1' <?php echo $checked; ?>/>
					<label for = 'subspeciality_<?php echo $id_speciality; ?>'><?php echo $speciality_name; ?></label>
				</p>
<?php
			}
?>
			</div>
<?php
		}
	}
?>
		</div>
		<div>
			<p class = 'user_profile_label'><label for="user_practice"><?php echo _("Mode d'exercice"); ?> :</label></p>
			<p class = 'user_profile_field'>
				<select name = 'user_practice', id = 'user_practice'>
<?php
	foreach ($list_practice as $value_practice => $name_practice) {
		if ($user['user_practice'] == $value_practice)
			$selected = 'selected';
		else
			$selected = '';
?>
				<option value = '<?php echo $value_practice; ?>' <?php echo $selected; ?>><?php echo $name_practice; ?></option>
<?php
	}
?>				
				</select>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><label for = 'user_therap_educ'><?php echo _("Cochez si vous êtes-vous éducateur thérapeute à l'origine"); ?> :</label></p>
<?php
	if ($user['user_therap_educ'] == 1)
		$checked = 'checked';
	else
		$checked = '';
?>				
			<p class = 'user_profile_field'>
				<input type = 'checkbox' name = 'user_therap_educ' id = 'user_therap_educ' value = '1' <?php echo $checked; ?> />
			</p>
		</div>
	</div>
</div>

<div>
	<input type = 'submit' name = 'valid_modif_profile' value = "<?php echo _("Valider"); ?>" title = "<?php echo _("enregistrer les modifications"); ?>" class = 'button_validation' />
	<input type = 'submit' name = 'cancel_modif_profile' value = "<?php echo _("Annuler les modifications"); ?>" title = "<?php echo _("revenir au profil sans enregistrer"); ?>" class = 'button_cancel' />
</div>


</form>


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

$title_view = _("Ajouter un nouvel utilisateur");

$style[] = 'user_profile';
?>

<p>
	<?php echo _("Les champs marqués d'une astérique doivent obligatoirement être renseignés"); ?>
</p>

<form method='post' action=''>
<?php
	if ($action_form == 'update') {
?>
	<input type = 'hidden' name = 'id_user' value = '<?php echo $id_user; ?>' />
<?php
	}
?>
	<div>
		<p class = 'add_user_label'>
			<label for='user_surname'><?php echo _("Nom"); ?> * : </label>
		</p>
		<p class = 'add_user_field'>
			<input type='text' name='user_surname' id='user_surname' value='<?php echo $user['user_surname']; ?>' />
		</p>
	</div>
	<div>
		<p class = 'add_user_label'>
			<label for='user_firstname'><?php echo _("Prénom"); ?> * : </label>
		</p>
		<p class = 'add_user_field'>
			<input type='text' name='user_firstname' id='user_firstname' value='<?php echo $user['user_firstname']; ?>' />
		</p>
	</div>
	<div>
		<p class = 'add_user_label'><label for="user_title"><?php echo _("Titre"); ?> : </label></p>
		<p class = 'add_user_field'>
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
		<p class = 'add_user_label'>
			<label for='user_login'><?php echo _("Identifiant"); ?> : </label>
		</p>
		<p class = 'add_user_field'>
			<input type='text' name='user_login' id='user_login' value='<?php echo $user['user_login']; ?>' /> <?php echo _("Vous n'êtes pas obligés de mentionner un identifiant (par défaut : première lettre du prénom suivi des 10 premières lettres du nom)."); ?>
		</p>
	</div>
	
	<div>
		<p class = 'add_user_label'><label for="user_phone"><?php echo _("Téléphone"); ?> : </label></p>
		<p class = 'add_user_field'>
			<input type="text" name='user_phone' id="user_phone" value="<?php echo $user['user_phone']; ?>"/>
		</p>
	</div>
	<div>
		<p class = 'add_user_label'><label for="user_mail"><?php echo _("E-mail"); ?> * : </label></p>
		<p class = 'add_user_field'>
			<input size=30 type="text" name='user_mail' id="user_mail" value="<?php echo $user['user_mail']; ?>"/>
		</p>
	</div>
	<div>
		<p class = 'add_user_label'><label for="user_street"><?php echo _("Rue (et numéro)"); ?> : </label></p>
		<p class = 'add_user_field'>
				<input size=30 type="text" name='user_street' id="user_street" value="<?php echo $user['user_street']; ?>"/>
		</p>
	</div>
	<div>
		<p class = 'add_user_label'><label for="user_postal_code"><?php echo _("Code postal"); ?> : </label></p>
		<p class = 'add_user_field'>
				<input size=30 type="text" name='user_postal_code' id="user_postal_code" value="<?php echo $user['user_postal_code']; ?>"/>
		</p>
	</div>
	<div>
		<p class = 'add_user_label'><label for="user_city"><?php echo _("Ville"); ?> : </label></p>
		<p class = 'add_user_field'>
			<input size=40 type='text' name='user_city' id='user_city' value="<?php echo $user['user_city']; ?>" />
		</p>
	</div>
	<div>
		<p class = 'add_user_label'><label for="id_country"><?php echo _("Pays"); ?> * : </label></p>
		<p class = 'add_user_field'>
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
		<p class = 'add_user_label'><label for="id_language"><?php echo _("Langue"); ?> * : </label></p>
		<p class = 'add_user_field'>
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
	<div>
		<p class = 'add_user_label'><label for='user_rights'><?php echo _("Droits"); ?> * : </label></p>
		<p class = 'add_user_field'>
			<select name='user_rights' id="user_rights">
<?php
	$list_rights = array(
					'normal' => 'normal',
					'admin' => 'administrateur');

	foreach ($list_rights as $value_right => $name_right) {
		if ($value_right == $user['user_rights'] or ($value_right == 'normal' and empty ($messages['error'])))		
			$selected = 'selected';
		else
			$selected = '';
?>
			<option value = '<?php echo $value_right; ?>' <?php echo$selected; ?>><?php echo $name_right; ?></option>
<?php
	}
?>
			</select>
		</p>
	</div>

<?php
	if ($action_form == 'insert') {
?>
	<div>
		<p class = 'add_user_label'><label for = 'send_mail'><?php echo _("Envoyer les identifiants à l'utilisateur par mail"); ?></label></p>
<?php
	$checked = 'checked';
	if (!isset ($user['send_mail']) and !empty ($messages['error']))
		$checked = '';
?>
		<input type = 'checkbox' name = 'send_mail' id = 'send_mail' value = 1 <?php echo $checked; ?>/>
	</div>
<?php
	}
	
	if ($action_form == 'update') {
?>
	<div>
		<p class = 'add_user_label'><label for = 'reinit_password'><?php echo _("Réinitialiser et envoyer par mail le mot de passe"); ?></label></p>
<?php
	$checked = '';
	if (isset ($user['reinit_password']))
		$checked = 'checked';
?>
		<input type = 'checkbox' name = 'reinit_password' id = 'reinit_password' value = 1 <?php echo $checked; ?> />
	</div>
<?php
	}
?>
	
	<div>
		<p class = 'add_user_validation'>
			<input type = 'submit' name = 'valid_add_user' value = '<?php echo _("valider"); ?>' class = 'button_validation' />
			<input type = 'submit' name = 'cancel_add_user' value = '<?php echo _("annuler"); ?>' class = 'button_cancel' />
		</p>
	</div>
</form>

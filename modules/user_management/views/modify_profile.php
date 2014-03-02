  
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
	$title_view = 'Mon profil';
	$style[] = 'user_profile';
?>

<form action='' method="post">
<div class="user_form">
	<div class="user_main_1">
			<h3><?php echo _("Accessibilité"); ?></h3>
			<ul class="list_no_point">
				<li><?php echo _("Identifiant").' : '.$user['user_login']; ?>
					<input type = 'hidden' name = 'user_login' value = '<?php echo $user['user_login']; ?>'/></li>
				<li><a href='.?module=user_management&action=change_password'><?php echo _("Changer le mot de passe"); ?></a></li> 
				
				<!-- identifiant login non modifiable-->
			
			</ul>
	</div>
	
	<div class="user_main_1">
		<h3><?php echo _("Identification"); ?></h3>
		<ul class="list_no_point">
			<li><label for="user_title"><?php echo _("Titre"); ?> : </label>
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

		echo '					<option value=\''.$value_title.'\' '.$selected.'>'.$name_title.'</option>'."\n";
	}
?>
				</select>
			</li>
			<li><label for="user_surname"><?php echo _("Nom"); ?> : </label>
				<input type="text" name='user_surname' id="user_surname" value="<?php echo $user['user_surname']; ?>"/>
			</li>
			<li><label for="user_name"><?php echo _("Prénom"); ?> : </label>
				<input type="text" name='user_firstname' id="user_name" value="<?php echo $user['user_firstname']; ?>"/>
			</li>
		</ul>
	</div>
	<div class="user_main_1">
		<h3><?php echo _("Contacts"); ?></h3>
		<ul class="list_no_point">
			<li><label for="user_phone"><?php echo _("Téléphone"); ?> : </label>
				<input type="text" name='user_phone' id="user_phone" value="<?php echo $user['user_phone']; ?>"/>
			</li>
			<li><label for="user_mail"><?php echo _("E-mail"); ?> : </label>
				<input size=30 type="text" name='user_mail' id="user_mail" value="<?php echo $user['user_mail']; ?>"/>
			</li>
			<li><label for="user_street"><?php echo _("Rue (et numéro)"); ?> : </label>
					<input size=30 type="text" name='user_street' id="user_street" value="<?php echo $user['user_street']; ?>"/>
			</li>
			<li><label for="user_postal_code"><?php echo _("Code postal"); ?> : </label>
					<input size=30 type="text" name='user_postal_code' id="user_postal_code" value="<?php echo $user['user_postal_code']; ?>"/>
			</li>
			<li><label for="user_city"><?php echo _("Ville"); ?> : </label>
				<input size=40 type='text' name='user_city' id='user_city' value="<?php echo $user['user_city']; ?>" />
			</li>

			<li><label for="id_country"><?php echo _("Pays"); ?> : </label>
				<select name='id_country' id="id_country">


<?php
	foreach ($list_country as $key => $feature_country) {
		if ($feature_country['id_country'] == $user['id_country'])		
			$selected = 'selected';
		else
			$selected = '';

		echo '					<option value=\''.$feature_country['id_country'].'\' '.$selected.'>'
							.$feature_country['country_name'].'</option>'."\n";
	}
?>

				</select>
				<?php echo _("NB : les heures enregistrées avec les formulaires seront celles correspondant au pays indiqué ici"); ?>
			</li>


			<li><label for="id_language"><?php echo _("Langue"); ?> : </label>
				<select name='id_language' id="id_language">


<?php
	foreach ($list_language as $key => $feature_lang) {
		if ($feature_lang['id_language'] == $user['id_language'])		
			$selected = 'selected';
		else
			$selected = '';

		echo '					<option value=\''.$feature_lang['id_language'].'\' '.$selected.'>'
							.$feature_lang['language_name'].'</option>'."\n";
	}
?>

				</select>
			</li>
		</ul>
	</div>
	<div class="user_main_1">
		<h3><?php echo _("Activités"); ?></h3>
		<ul class="list_no_point">



<?php
	foreach ($list_speciality as $type => $features_spe_type) {
		if ($type == 'speciality') {
?>
			<li>
				<label for='speciality'><?php echo _("Spécialité médicale"); ?></label>
				<select name='speciality' id="speciality">
<?php
			foreach ($features_spe_type as $id_speciality => $speciality_name) {
				if (isset ($list_user_speciality[$type][$id_speciality]))
					$selected = 'selected';
				else
					$selected = '';

				echo '					<option value=\''.$id_speciality.'\' '.$selected.'>'
								.$speciality_name.'</option>'."\n";
			}
?>
				</select>
			</li>
<?php
		}
		elseif ($type == 'subspeciality') {
			echo '				<li>'._("Sur-spécialité").'<ul>'."\n";
			foreach ($features_spe_type as $id_speciality => $speciality_name) {
				if (isset ($list_user_speciality[$type][$id_speciality]))
					$checked = 'checked';
				else
					$checked = '';
					
				echo '					<li>
						<input type = \'checkbox\' name = \'subspeciality_'.$id_speciality.'\' id = \'subspeciality_'.$id_speciality.'\' value = \'1\' '.$checked.'/>
						<label for = \'subspeciality_'.$id_speciality.'\'>'.$speciality_name.'</label></li>'."\n";
			}
			echo '				</ul></li>'."\n";
		}
	}
?>

			<li>
<?php
	if ($user['user_therap_educ'] == 1)
		$checked = 'checked';
	else
		$checked = '';

	echo '				<label for=\'user_therap_educ\'>'._("Cochez si vous êtes-vous éducateur thérapeute à l'origine").' : </label>
				<input type = \'checkbox\' name = \'user_therap_educ\' id = \'user_therap_educ\' value = \'1\' '.$checked.'/>'."\n";
?>
			</li>

			<li><label for="user_practice"><?php echo _("Mode d'exercice"); ?> : </label>
				<select name = 'user_practice', id = 'user_practice'>
<?php
	foreach ($list_practice as $value_practice => $name_practice) {
		if ($user['user_practice'] == $value_practice)
			$selected = 'selected';
		else
			$selected = '';

		echo '					<option value = \''.$value_practice.'\' '.$selected.'>'.$name_practice.'</option>'."\n";
	}
?>				
				</select>
			</li>
		</ul>
	</div>
</div>

<div class="button">
	<input type="submit" name='valid_modif_profile' value='Valider' />
</div>


</form>


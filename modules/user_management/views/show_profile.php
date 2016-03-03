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

<div class = 'user_profile'>
	
	<div class = 'user_profile_part'>
		<h2><?php echo _("Identification"); ?></h2>
		<div>
			<p class = 'user_profile_label'><?php echo _("Titre"); ?> :</p>
			<p class = 'user_profile_field'><?php echo $user['user_title']; ?></p>
		</div>
		<div>
			<p class = 'user_profile_label'><?php echo _("Nom"); ?> :</p>
			<p class = 'user_profile_field'><?php echo $_SESSION['user_surname']; ?></p>
		</div>
		<div>
			<p class = 'user_profile_label'><?php echo _("Prénom"); ?> :</p>
			<p class = 'user_profile_field'><?php echo $user['user_firstname']; ?></p>
		</div>
	</div>
	<div class="user_profile_part">
		<h2><?php echo _("Pour ma correspondance"); ?></h2>
		<div>
			<p class = 'user_profile_label'><?php echo _("Téléphone"); ?> :</p>
			<p class = 'user_profile_field'><?php echo $user['user_phone']; ?></p>
		</div>
		<div>
			<p class = 'user_profile_label'><?php echo _("Mail"); ?> :</p>
			<p class = 'user_profile_field'><?php echo $user['user_mail']; ?></p>
		</div>
		<div>
			<p class = 'user_profile_label'><?php echo _("Adresse"); ?> :</p>
			<p class = 'user_profile_field'>
				<?php echo $user['user_street'] == ''?'':$user['user_street'].', ';
					echo $user['user_postal_code'] == ''?'':$user['user_postal_code'].', ';
					echo $user['user_city'] == ''?'':$user['user_city'];?>
					<br/>
					<?php echo $user['country_name'];?></p>
		</div>
		<div>
			<p class = 'user_profile_label'><?php echo _("Langue"); ?> :</p>
			<p class = 'user_profile_field'><?php echo $_SESSION['lang_name']; ?></p>
		</div>
	</div>
	<div class = 'user_profile_part'>
		<h2><?php echo _("Activités"); ?></h2>

<?php
	foreach ($list_user_speciality as $type => $features_spe_type) {
?>
		<div>
			<p class = 'user_profile_label'>
<?php
		if ($type == 'speciality')
			echo _("Spécialité");
		elseif ($type == 'subspeciality')
			echo _("Sur-spécialité(s)");
		$comma = '';
?>
			:</p>
			<p class = 'user_profile_field'>
<?php
		foreach ($features_spe_type as $id_speciality => $speciality_name) {
			echo $comma.$speciality_name;
			$comma = ', ';
		}
?>		
			</p>
		</div>
<?php
	}
?>
		<div>
			<p class = 'user_profile_label'><?php echo _("Formation"); ?> :</p>
			<p class = 'user_profile_field'>
<?php
	if ($user['user_therap_educ'] == 1)
		$sentence_therap_educ = _("Je suis éducateur thérapeute");
	else
		$sentence_therap_educ = _("Je ne suis pas éducateur thérapeute");
		
	echo $sentence_therap_educ;
?>
			</p>
		</div>
		<div>
			<p class = 'user_profile_label'><?php echo _("Mode d'exercice"); ?> :</p>
			<p class = 'user_profile_field'>
<?php
	$id_practice = $user['user_practice'];
	if (array_key_exists ($id_practice, $list_practice))
		echo $list_practice[$id_practice];
?>
			</p>
		</div>
	</div>
</div>


<div>
		<a class = 'link_action' href=".?module=user_management&action=modify_profile"><img src='<?php echo IMAGE_PATH.'edit.png'; ?>' alt="edit" width=20 /><?php echo _("Modifier"); ?></a>
		<a class = 'link_action' href='.?module=user_management&action=change_password'><?php echo _("Changer le mot de passe"); ?></a>
</div>


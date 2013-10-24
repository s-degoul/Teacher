  
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

<div class="user_main_left">
	
	<div class="user_main_1">
		<h3>Identification</h3>
		<ul class="list_no_point">
			<li>Titre : <?php echo $user['user_title']; ?></li>
			<li>Nom : <?php echo $_SESSION['user_surname']; ?></li>
			<li>Prénom : <?php echo $user['user_firstname']; ?></li>
		</ul>
	</div>
	<div class="user_main_1">
		<h3><?php echo _("Pour ma correspondance"); ?></h3>
		<ul class="list_no_point">
			<li>Téléphone : <?php echo $user['user_phone']; ?></li>
			<li>Mail : <?php echo $user['user_mail']; ?></li>
			<li>Adresse : <?php echo $user['user_street'].', '
						.$user['user_postal_code'].', '
						.$user['user_city'].'.<br/>'
						.$user['country_name'];
					?></li>
			<li>Langue : <?php echo $_SESSION['lang_name']; ?></li>
		</ul>
	</div>
	<div class="user_main_1">
		<h3>Activités</h3>
		<ul class="list_no_point">

<?php
	foreach ($list_user_speciality as $type => $features_spe_type) {
		if ($type == 'speciality')
			echo '			<li>'._("Spécialité").' : ';
		elseif ($type == 'subspeciality')
			echo '			<li>'._("Sur-spécialité(s)").' : ';
		$comma = '';
		
		foreach ($features_spe_type as $id_speciality => $speciality_name) {
			echo $comma.$speciality_name;
			$comma = ', ';
		}
		
		echo '			</li>'."\n";
	}
?>
			<li>
<?php
	if ($user['user_therap_educ'] == 1)
		$sentence_therap_educ = _("Je suis éducateur thérapeute");
	else
		$sentence_therap_educ = _("Je ne suis pas éducateur thérapeute");
		
	echo $sentence_therap_educ;
?>
			</li>
			<li><?php echo _("Mode d'exercice"); ?> : 
<?php
	$id_practice = $user['user_practice'];
	if (array_key_exists ($id_practice, $list_practice))
		echo $list_practice[$id_practice];
?>
			</li>
		</ul>
	</div>
</div>
	
 <div class="user_main_right">
<!--	<div class="user_main_1">
		<h3>Accessibilité</h3>
		<ul class="list_no_point">
			<li>Login : <?php //echo $user['user_login']; ?></li>
		</ul>
	</div>	-->
	<div class="user_main_1">
		<h3><?php echo _("Ma progression dans le programme Teacher"); ?></h3>

		<ul class="list_no_point">
				<li><strong>Auto-évaluations réalisées :</strong></li>
<?php
	if (empty ($user_eval_list)) {
		echo '			<li>'._("Aucune auto-évaluation réalisée").'</li>'."\n";
		echo '			<a href=\'.?module=user_teaching&action=create_eval\'>'._("Faire la première maintenant").'</a>'."\n";
	}
	else {
		$nb_eval = 1;
		foreach ($user_eval_list as $id_eval => $date_eval) {
				echo '			<li><a href=\'.?module=user_teaching&action=show_eval&id_user_eval='.$id_eval.'\'>'._("évaluation n°").' '.$nb_eval.'</a> '
								.'<a href=\'.?module=user_teaching&action=show_summ_eval&id_user_eval='.$id_eval.'\'>('._("synthèse").')</a>'
								.("faite le").' '.showDate($date_eval).'</li>'."\n";
				$nb_eval ++;
		}
		if ($_SESSION['user_eval_to_do'] == 1)
			echo '			<a href=\'.?module=user_teaching&action=create_eval\'>'._("en faire une autre maintenant").'</a>'."\n";
	}
?>

		</ul>
		
		<ul class="list_no_point">
			<li><strong><?php echo _("<em>&quot;l'Essentiel à savoir avant de commencer&quot;</em> consulté"); ?> :</strong>
<?php 
	if ($user['user_validation_Essential'] == 1) {
		echo 'oui'."\n";
		echo'			<li><a href=\'.?module=user_teaching&action=show_essential\'>'._("Y accéder").'</a></li>'."\n";
	}
	else {
		echo 'non'."\n";
	}
?>
			</li>
		</ul>

	</div>

</div>
<div class="user_main_bottom">
	<div class="item_user">
		<a href=".?module=user_management&action=modify_profile"><?php echo _("Modifier"); ?></a>
	</div>
	<div class="item_user">
		<a href='.?module=user_management&action=change_password'><?php echo _("Changer le mot de passe"); ?></a>
	</div>
</div>


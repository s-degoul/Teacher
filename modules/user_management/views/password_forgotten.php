  
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
	$title_view = _("Mot de passe oublié");
	$style[] = 'user_profile';
	
	$header_top = '<a href=.>'._("retourner à la page d'accueil").'</a>';
	$content_top .= '<a href = \'.?module=user_management&action=connection\'>'._("Revenir à la page de connexion").'</a>';
?>

<h1><?php echo _("Mot de passe oublié"); ?></h1> 

<p><?php echo ("Veuillez saisir ci-dessous votre login et l'adresse courriel indiquée dans votre profil et validez"); ?></p> 

<form method = 'post' action = '.?module=user_management&action=password_forgotten'>
	<p>
		<label for='user_login'><?php echo _("Votre login"); ?> : </label> 
		<input size='50' name='user_login' type='text' id='user_login'><br/>
	</p>
	<p>
		<label for='user_mail'><?php echo _("Adresse email"); ?> : </label> 
		<input size='50' name='user_mail' type='text' id='user_mail'>
	</p>
	
	<input type='submit' name='valid_password_forgotten' value='<?php echo _("Valider"); ?>'> 
</form> 

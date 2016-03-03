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

$title_view = _("Mot de passe oublié");
$style[] = 'start_general';

$header_top = '<a href = \'.?module=user_management&action=connection\'>'._("Revenir à la page de connexion").'</a>';
?>

<div class = 'connection'>
	<p><?php echo ("Veuillez saisir ci-dessous votre login et l'adresse courriel indiquée dans votre profil et validez"); ?></p> 

	<form method = 'post' action = '.?module=user_management&action=password_forgotten'>
		<div>
			<p class = 'connection_title'>
				<label for='user_login'><?php echo _("Votre login"); ?> : </label>
			</p>
			<p class = 'connection_field'>
				<input size='30' name='user_login' type='text' id='user_login' /><br/>
			</p>
		</div>
		<div>
			<p class = 'connection_title'>
				<label for='user_mail'><?php echo _("Adresse email"); ?> : </label>
			</p>
			<p class = 'connection_field'>
				<input size='30' name='user_mail' type='text' id='user_mail' />
			</p>
		</div>
		
		<p>
			<input type='submit' name='valid_password_forgotten' value='<?php echo _("Valider"); ?>' class = 'button_validation' />
		</p>
	</form> 
</div>

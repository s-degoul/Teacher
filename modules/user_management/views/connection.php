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

$title_view = _("Connexion");
$style[] = 'start_general';
$header_top = '<a href=.>'._("retourner à la page d'accueil").'</a>';
?>

	<div class = 'connection'>
		<p><?php echo _("Veuillez renseigner vos identifiants pour vous connecter à Teacher"); ?></p>
		<form method='post' action='.?module=user_management&action=connection'>
			<div>
				<p class = 'connection_title'>
					<label for='user_login'><?php echo _("Identifiant"); ?> : </label>
				</p>
				<p class = 'connection_field'>
					<input type='text' name='user_login' id='user_login' value='' size=20 maxlength=30 tabindex='1'/>
				</p>
			</div>
			<div>
				<p class = 'connection_title'>
					<label for='user_password'><?php echo _("Mot de passe"); ?> : </label>
				</p>
				<p class = 'connection_field'>
					<input type='password' name='user_password' id='user_password' value='' size=20 maxlength=30 tabindex='2'/>
				</p>
			</div>
			<p>
				<input class = 'button_validation' type='submit' name='user_connection' value='Connexion' tabindex='3'/>
				<input class = 'button_cancel' type='submit' name='cancel_connection' value='Annuler' tabindex='3'/>
			</p>
		</form>
		
		<p><a href='.?module=user_management&action=password_forgotten' tabindex='4'><?php echo _("Mot de passe oublié ?"); ?></a></p>
	</div>

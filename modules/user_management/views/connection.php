  
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
	$title_view = 'Connexion';

	$header_top = '<a href=.>'._("retourner à la page d'accueil").'</a>';
?>

	<p><?php echo _("Veuillez renseigner vos identifiants pour vous connecter à Teacher"); ?> :</p>
	<form method='post' action='.?module=user_management&action=connection'>
		<p>
			<label for='user_login'><?php echo _("Identifiant"); ?> : </label>
			<input type='text' name='user_login' id='user_login' value='' size=20 maxlenght=30 />
		</p>
		<p>
			<label for='user_password'><?php echo _("Mot de passe"); ?> : </label>
			<input type='password' name='user_password' id='user_password' value='' size=20 maxlenght=30 />
		</p>
		<p>
			<input type='submit' name='user_connection' value='Connexion' />
		</p>
	</form>
	
	<p><a href='.?module=user_management&action=password_forgotten'><?php echo _("Mot de passe oublié ?"); ?></a></p>

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

$title_view = _("Changer le mot de passe");
$style[] = 'user_profile';
?>

<form action = '.?module=user_management&action=change_password' method = 'post'>
	<div>
		<p class = 'user_password_label'>
			<label for = 'user_password_old'><?php echo _("Entrez votre mot de passe actuel"); ?></label>
		</p>
		<p class = 'user_password_field'>
			<input type = 'password' id = 'user_password_old' name = 'user_password_old' value = ''/>
		</p>
	</div>
	
	<p><?php echo("Votre nouveau mot de passe doit respecter les conditions suivantes :"); ?></p>
	<ul>
		<li><?php echo _("longueur d'au moins 8 caractères");?></li>
		<li><?php echo _("contient au moins 1 chiffre");?></li>
		<li><?php echo _("contient au moins 1 lettre minuscule et 1 lettre majuscule");?></li>
		<li><?php echo _("caractères interdits : guillemets, >, <, &. Par contre, n'hésitez pas à utiliser les autres caractères spéciaux !");?></li>
	</ul>
	
	<div>
		<p class = 'user_password_label'>
			<label for = 'user_password_new_1'><?php echo _("Entrez votre nouveau mot de passe : "); ?></label>
		</p>
		<p class = 'user_password_field'>
			<input type = 'password' id = 'user_password_new_1' name = 'user_password_new_1' value = ''/>
		</p>
	</div>
	
	<div>
		<p class = 'user_password_label'>
			<label for = 'user_password_new_2'><?php echo _("Entrez le une deuxième fois : "); ?></label>
		</p>
		<p class = 'user_password_field'>
			<input type = 'password' id = 'user_password_new_2' name = 'user_password_new_2' value = ''/>
		</p>
	</div>
	
	<p>
		<input type = 'submit' name = 'valid_password' value = '<?php echo _("Valider");?>' class = 'button_validation' />
		<input type = 'submit' name = 'cancel' value = '<?php echo _("Annuler les modifications");?>' class = 'button_cancel' />
	</p>

</form>

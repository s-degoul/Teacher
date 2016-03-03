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

$title_view = _("Suppression de dossier patient");
?>

<form method = 'post' action = '.?module=patient_management&action=delete_patient'>
	<p><?php echo _("La suppression de ce patient entraînera la perte de tout son dossier en ligne").', <em>'._("sans aucune possibilité de retour en arrière !").'</em>'; ?></p>
	
	<p>
		<?php echo _("Si vous voulez vraiment faire cela, veuillez saisir votre mot de passe :"); ?>
		<input class = 'delete_patient_password' type = 'password' name = 'user_password' value = '' size = 15 />
	</p>
	<p>
		<input type = 'submit' name = 'confirm_delete_patient' value = '<?php echo _("je confirme la suppression de ce patient"); ?>' class = 'button_validation_critical'/>
	</p>
	<p>
		<input type = 'submit' name = 'cancel_delete_patient' value = "<?php echo _("Annuler"); ?>" title = "<?php echo _("ne pas supprimer ce patient"); ?>" class = 'button_cancel' />
	</p>
</form>

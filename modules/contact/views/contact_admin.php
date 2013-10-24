  
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
$title_view = _("Contacter l'administrateur");

?>

<p><?php echo _("Vous pouvez envoyer un message à l'administrateur du site Teacher. Une réponse vous sera donnée à l'adresse mail précisée dans votre profil."); ?></p>

<form method = 'post' action = '.?module=contact&action=contact_admin'>
	<p>
		<label for = 'message_subject'><?php echo _("Sujet"); ?> :</label>
		<input type = 'text' name = 'message_subject' id = 'message_subject'
				value = '<?php isset ($message['message_subject'])?$message['message_subject']:'' ?>'
				size = 50 maxlength = 100 />
	</p>
	<p>
		<label for = 'message_content'><?php echo _("Votre message"); ?> :</label><br/>
		<textarea name = 'message_content' id = 'message_content' cols = 50 rows = 10><?php isset ($message['message_content'])?$message['message_content']:'' ?></textarea>
	</p>
	<p>
		<input type = 'submit' name = 'send_message' value = '<?php echo _("Envoyer"); ?>' />
	</p>
</form>

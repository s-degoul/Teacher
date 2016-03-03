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

$title_view = 'Renommer le courrier  '.$summary_letter['summary_letter_title'].'';
$style[] = 'patient_profile';
?>

<form method='post' action='.?module=patient_management&action=rename_summary_letter&id_summary_letter=<?php echo $id_summary_letter; ?>'>
	<div>
		<p class = 'patient_profile_title'>
			<label for='summary_letter_title'><?php echo _("Nouveau titre"); ?> : </label>
		</p>
		<p class = 'patient_profile_field'>
			<input type='text' name='summary_letter_title' id='summary_letter_title' value = "" size=40 />
		</p>
	</div>
	<input type='submit' name='rename_summary_letter' value = "<?php echo _("Valider"); ?>" title = "<?php echo _("enregistrer les modifications"); ?>" class = 'button_validation' />
	<input type='submit' name='cancel_rename_summary_letter' value = "<?php echo _("Annuler les modifications"); ?>" title = "<?php echo _("revenir au profil sans enregistrer"); ?>" class = 'button_cancel' />
</form>



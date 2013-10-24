  
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
$title_view = _("Ce que Teacher peut vous offrir");
$style[] = 'start_user';

if (isset ($_GET['from']) and $_GET['from'] == 'connection')
	$messages['info'][] = _("Vous pouvez à tous moments cliquer sur &quot;Accueil&quot; en haut à gauche pour revenir sur cette page.");
?>

<p><?php echo _("Bienvenue sur Teacher."); ?><p>

<p><?php echo _("Vous pouvez"); ?> :</p>
<ul>
	<li><a href = '.?module=patient_teaching&action=show_target_list'><?php echo _("Voir les objectifs pédagogiques"); ?></a></li>
	<li><a href = '.?module=patient_teaching&action=show_eval'><?php echo _("Voir un formulaire d'évaluation pour l'enfant"); ?></a></li>
	<li><a href = '.?module=patient_teaching&action=create_parent_eval'><?php echo _("Voir un formulaire d'évaluation pour les parents"); ?></a></li>
</ul>

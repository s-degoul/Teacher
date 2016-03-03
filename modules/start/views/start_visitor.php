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

$title_view = _("Ce que Teacher peut vous offrir");
$style[] = 'start_user';

if (isset ($_GET['from']) and $_GET['from'] == 'connection')
	$messages['info'][] = _("Vous pouvez à tous moments cliquer sur &quot;Accueil&quot; en haut à gauche pour revenir sur cette page.");
?>

<h2><?php echo _("Bienvenue sur Teacher."); ?></h2>

<p>
	<?php echo ("<em>Teacher</em> est un outil d'initiation à l'Éducation Thérapeutique du Patient (ETP) destiné aux pédiatres et médecins généralistes. Il repose sur un programme d’apprentissage individuel, conçu pour être intégré dans le temps de la consultation ambulatoire."); ?>
</p>

<p><?php echo _("Vous pouvez avoir un aperçu des quelques fonctionnalités du site"); ?> :</p>
<ul>
	<li><a href = '.?module=patient_teaching&action=show_target_list'><?php echo _("objectifs pédagogiques"); ?></a></li>
	<li><a href = '.?module=patient_teaching&action=show_eval'><?php echo _("formulaire d'évaluation de l'enfant"); ?></a></li>
<!--
	<li><a href = '.?module=patient_teaching&action=create_parent_eval'><?php echo _("Voir un formulaire d'évaluation pour les parents"); ?></a></li>
-->
</ul>

<p>
	<?php echo _("Si vous désirez intégrer le projet, vous pouvez contacter l'administrateur du site via le lien en bas de page."); ?>
</p>

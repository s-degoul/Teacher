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

$title_view = _("Le programme éducatif personnalisé");
?>

<h2><?php echo _("Aperçu des étapes du programme éducatif"); ?></h2>

<p>
	<?php echo _("Les liens ci-dessous vous permettent d'avoir un aperçu des documents concernant chaque étape du programme éducatif. Cet aperçu est à but démonstratif et concerne donc un enfant virtuel."); ?>
</p>

<p>
	<ul>
		<li>
			<?php echo _("le questionnaire lié au diagnostic éducatif de l'enfant"); ?> :
			<div class = 'link_container'>
				<a href='.?module=patient_teaching&action=show_educ_diag&demo=1&from=show_educ_program' class = 'link'>
					<?php echo _("Diagnostic éducatif personnalisé"); ?>
				</a>
			</div>
		</li>
		<li>
			<?php echo _("les dix objectifs pédagogiques et les supports aux séances d'apprentissage"); ?> :
			<div class = 'link_container'>
				<a href='.?module=patient_teaching&action=show_target_list&demo=1&from=show_educ_program' class = 'link'>
					<?php echo _("Séances d'apprentissage"); ?>
				</a>
			</div>
		</li>
		<li>
			<?php echo _("le questionnaire servant à évaluer l'enfant en fin de programme"); ?> :
			<div class = 'link_container'>
				<a href='.?module=patient_teaching&action=show_eval&demo=1&from=show_educ_program' class = 'link'>
					<?php echo _("Évaluation finale du patient"); ?>
				</a>
			</div>
		</li>
	</ul>
</p>



<h2><?php echo _("Mes patients"); ?></h2>

<p><?php echo _("Il est maintenant temps de travailler avec un enfant réel."); ?></p>
<p class = 'link_container'>
	<a href='.?module=patient_management&action=show_patient_list&from=show_educ_program' class = 'link'><?php echo _("Mes patients"); ?></a>
</p>

  
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
$title_view = 'Ce patient';
$style[] = 'patient_profile';
$style[] = 'patient_teaching';
?>

<h1><?php echo strtoupper($patient['patient_surname']).' '.$patient['patient_firstname']; ?></h1>

<div class='patient_profile'>
	<h3><?php echo _("Données patient"); ?></h3>
	<div>
		<div class='patient_profile_side'>
			<h3><?php echo _("Identité"); ?></h3>
			<ul>
<?php
	$sex_title = '';
	if ($patient['patient_sex'] == '0')
		$sex_title = 'garçon';
	elseif ($patient['patient_sex'] == '1')
		$sex_title = 'fille';
?>
				<li><?php echo _("Sexe").' : '.$sex_title; ?></li>
				<li><?php echo _("Âge").' : '.sprintf (ngettext('%d an','%d ans',$_SESSION['patient']['patient_age']['year']),$_SESSION['patient']['patient_age']['year'])
								.' '.sprintf (ngettext('%d mois','%d mois',$_SESSION['patient']['patient_age']['month']),$_SESSION['patient']['patient_age']['month']); ?></li>
				<li><?php echo _("Date de naissance").' : '.showDate ($patient['patient_date_birth']); ?></li>
			</ul>
		</div>
		<div class='patient_profile_side'>
			<h3><?php echo _("Données physiologiques"); ?></h3>
			<ul>
				<li><?php echo _("Taille").' : '; if ($patient['patient_height'] != 0) echo $patient['patient_height'].' cm'; ?></li>
				<li><?php echo _("Poids").' : '; if ($patient['patient_weight'] != 0) echo $patient['patient_weight'].' kg'; ?></li>
				<li><?php echo _("Débit expiratoire de pointe (DEP)"); ?> :
<?php 
		if ($patient['patient_peakflow'] != 0) {
			echo $patient['patient_peakflow'].'L/min</li>'."\n";
			$peakflow_80 = 0.8 * $patient['patient_peakflow'];
			$peakflow_60 = 0.6 * $patient['patient_peakflow'];
			echo '				<li>DEP 80% : '.$peakflow_80.' L/min</li>'."\n";
			echo '				<li>DEP 60% : '.$peakflow_60.' L/min</li>'."\n";
		}
		else {
			echo '				</li>'."\n";
		}
?>							
			</ul>
		</div>
	</div>
    <p>
    <?php echo '<a href=\'.?module=patient_management&action=modify_profile&id_patient='.$_SESSION['patient']['id_patient'].'\'>'
        ._("Modifier ces données patient").'</a>'."\n"; ?>
    </p>
    <p>
    <?php echo '<a href=\'.?module=patient_management&action=delete_patient\'>'._("Supprimer ce patient").'</a>'."\n"; ?>
    </p>
</div>


<div class='patient_profile'>
	<h3><?php echo _("Diagnostic éducatif"); ?></h3>
	<div class='patient_profile_side'>
		<ul>
<?php
	if (!empty ($educ_diag)) {
		if ($educ_diag['educ_diag_achieved'] == 1) {
			echo'			<li>'._("Réalisé le").'  '.showDate ($educ_diag['educ_diag_date']).'</li>';
			echo'			<li><a href=\'.?module=patient_teaching&action=show_educ_diag\'>'
							._("Le consulter").'</a></li>';
			echo'			<li><a href=\'.?module=patient_teaching&action=show_summ_eval&type_eval=educ_diag&show_target_cycle=1\'>'
						._("Voir la synthèse").'</a></li>';
		}
		else {
			echo '			<li>'._("Le diagnostic éducatif a été débuté le").' '
							.showDate ($educ_diag['educ_diag_date']).' '.("mais n'est pas terminé").'.</li>';
			echo'			<li><a href=\'.?module=patient_teaching&action=create_educ_diag\'>'
							._("le réaliser maintenant").'</a></li>';
		}
	}
	else {
		echo '			<li>Non réalisé</li>';
		echo'			<li><a href=\'.?module=patient_teaching&action=create_educ_diag\'>'
						._("Le réaliser maintenant").'</a></li>';
	}
?>
		</ul>
	</div>
</div>

<div class='patient_profile'>
	<h3><?php echo _("Programme éducatif"); ?></h3>

	<div>
<?php

$nb_cycle = 0;

ksort ($list_cycle_educ);

foreach ($list_cycle_educ as $cycle_start_date => $feature_cycle) {

	$nb_cycle ++;
	if (!empty ($list_cycle_educ[$cycle_start_date]['targets']))
		ksort ($list_cycle_educ[$cycle_start_date]['targets']);

	if (preg_match ('#[a-zA-Z]{3,}#', showDate ($feature_cycle['cycle_educ_eval_date']))) {
?>
	<div class = 'patient_profile_wide'>
		<p><?php echo _("Programme éducatif terminé"); ?></p>
		<p><?php echo _("Date de réévaluation prévue (approximativement)").' : '
							.showDate ($feature_cycle['cycle_educ_eval_date'])
							.' <a href=\'.?module=patient_teaching&action=create_eval\'>'._("la réaliser maintenant"); ?></a></p>
	</div>
<?php
	}
	else {
?>
	<div class='patient_profile_side'>
		<h3>
<?php
		if ($nb_cycle == 1)
			echo _("Cycle initial");
		else
			echo _("Renforcement éducatif n°").' '.($nb_cycle-1);
?>
		</h3>
		<p><?php echo _("Période"); ?></p>
			<ul>
				<li><?php echo _('date de début'); ?> : <?php echo showDate ($cycle_start_date) ?></li>
				<li><?php echo _('date de fin'); ?> : <?php echo showDate ($feature_cycle['cycle_educ_eval_date']) ?></li>
			</ul>
			
		<p><?php echo _("Objectifs à travailler"); ?></p>

		<ul>
<?php
		if (!empty ($feature_cycle['targets'])) {
			foreach ($feature_cycle['targets'] as $num_target => $feature_target) {
				if ($feature_target['cycle_target_done'] == 1) {
					echo'				<li>'._('Objectif').' '.$num_target.' : '._('fait').' ( '
											.showDate ($feature_target['cycle_target_date']).' )</li>'."\n";
					}
				else {
					if ($feature_target['cycle_target_date'] != '')
						$planned_date = '('._("date prévue").' : '.showDate($feature_target['cycle_target_date'], 'day').')';
					else
						$planned_date = '('._("pas de date prévue").')';
					echo'				<li>'._("Objectif").' '.$num_target.' : '._("non réalisé").' '.$planned_date.'</li>'."\n";
				}	
			}
		}
		
		if (empty ($feature_cycle['cycle_educ_eval_date'])) {
			if ($nb_cycle == 1)
				$param_get = 'type_eval=educ_diag&modify_target_cycle=1';
			else
				$param_get = 'type_eval=cycle_educ_eval&id_eval='.$last_cycle_educ.'&modify_target_cycle=1';
				
			echo '		<a href=\'.?module=patient_teaching&action=show_summ_eval&'.$param_get.'\'>'
								._("Modifier cette planification").'</a>';
		}
?>

		</ul>
		<p><?php echo _("Evaluation finale"); ?></p>
			<ul>
<?php
		if (!empty ($feature_cycle['cycle_educ_eval_date'])) {
			echo '				<li>'._("réalisée le").' '.showDate ($feature_cycle['cycle_educ_eval_date']).'</li>'."\n";
			echo '				<li><a href=\'.?module=patient_teaching&action=show_eval&id_eval='.$feature_cycle['id_cycle_educ'].'\'>'
									._("consulter l'évaluation").'</a></li>'."\n";
			echo '				<li><a href=\'.?module=patient_teaching&action=show_summ_eval&type_eval=cycle_educ_eval&show_target_cycle=1
									&id_eval='.$feature_cycle['id_cycle_educ'].'\'>'._("consulter la synthèse").'</a></li>'."\n";
		}
		elseif ($_SESSION['patient']['eval_to_do'] == 1){
			echo '				<li>'._("non réalisée").'</li>'."\n";
			echo '				<li>'._("Comme tous les objectifs prévus ont été travaillés, vous pouvez")
								.' <a href=\'.?module=patient_teaching&action=create_eval\'>'._("la réaliser maintenant").'</a></li>'."\n";
		}
		else {
			echo '				<li>'._("L'évaluation finale ne pourra être faite qu'après avoir travaillé tous les objectifs éducatifs prévus").'</li>'."\n";
		}
?>
			</ul>
<?php
		if ($feature_cycle['cycle_educ_end_programme'] == 1)
			echo '		<p>'._("Fin provisoire du programme éducatif").'</p>'."\n";
?>
	</div>
<?php

		if ($nb_cycle % 2 == 0 or $feature_cycle['cycle_educ_end_programme'] == 1) {
			echo '	</div>'."\n".'	<div>';
		}
		
		$last_cycle_educ = $feature_cycle['id_cycle_educ'];
	}
}
?>
	</div>
</div>


<div class='patient_profile'>
	<h3><?php echo _("Divers"); ?></h3>
	
	<p><a href = '.?module=patient_teaching&action=show_device_eval'>
		<?php echo _("Gestion des évaluations de la technique d'utilisation des dispositifs d'inhalation"); ?>
	</a></p>

	<p><a href = '.?module=patient_teaching&action=show_peakflow_use'>
		<?php echo _("Gestion des évaluation de la technique de mesure du débit de pointe"); ?>
	</a></p>
</div>

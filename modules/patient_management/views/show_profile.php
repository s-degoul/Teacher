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

$title_view = _("Programme éducatif de").' '.$patient['patient_firstname'].' '.strtoupper($patient['patient_surname']);
$style[] = 'patient_profile';
?>



<?php 
 if (!empty($educ_diag) and $educ_diag['educ_diag_achieved'] == 1) {
?>
<br/><br/>
<center>
	<div>
		<a href='.?module=patient_teaching&action=show_summ_all_eval' class='link_action'>
			<?php echo _("Voir la synthèse de toutes les évaluations"); ?>
		</a>
	</div>
</center>
<?php
}
?>



<div class='patient_profile'>
	<h3><?php echo _("Données patient"); ?></h3>
	<div>
		<div class='patient_profile_side'>
			<h3><?php echo _("Identité"); ?></h3>
			<ul>
				<li><?php echo _("Sexe").' : '; echo $patient['patient_sex']==1?_("garçon"):_("fille"); ?></li>
				<li><?php echo _("Âge").' : '.sprintf (ngettext('%d an','%d ans',$patient_age['year']),$patient_age['year']);
					if($patient_age['month'] != 0) echo ' '.sprintf (ngettext('%d mois','%d mois',$patient_age['month']),$patient_age['month']); ?></li>
				<li><?php echo _("Date de naissance").' : '.showDate ($patient['patient_date_birth']); ?></li>
			</ul>
			<ul>
				<li><?php echo _("Date d'inclusion dans Teacher").' : '.showDate ($patient['patient_date_inclusion']); ?></li>
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
			$peakflow_80 = 0.8 * $patient['patient_peakflow'];
			$peakflow_60 = 0.6 * $patient['patient_peakflow'];

			echo $patient['patient_peakflow'].' '._("L/min");
?>
					<ul>
						<li><?php echo _("DEP 80%").' : '.$peakflow_80.' '._("L/min"); ?></li>
						<li><?php echo _("DEP 60%").' : '.$peakflow_60.' '._("L/min"); ?></li>
					</ul>
<?php
		}
?>				</li>			
			</ul>
		</div>
	</div>
    <p>
		<a class = 'link_action' href='.?module=patient_management&action=modify_profile&id_patient=<?php echo $_SESSION['patient']['id_patient']; ?>'>
		<img src='<?php echo IMAGE_PATH.'edit.png'; ?>' alt="edit" width=20 />
			<?php echo _("Modifier ces données patient"); ?>
		</a>
		<a class = 'link_action_critical' href='.?module=patient_management&action=delete_patient'>
			<img src='<?php echo IMAGE_PATH.'delete.png'; ?>' alt="delete" width=20 />
			<?php echo _("Supprimer ce patient"); ?>
		</a>

    </p>
</div>



<div class='patient_profile'>
	<h3><?php echo _("Programme éducatif"); ?></h3>

	<ul>
		<li><?php echo _("Date de début"); ?> : <?php echo !empty($educ_diag)?showDate ($educ_diag['educ_diag_date']):_("non débuté"); ?></li>
<?php
$first_cycle_educ = reset ($_SESSION['patient']['cycles_educ']);
$date_end_first_cycle = '';
if(!empty($first_cycle_educ['cycle_educ_eval_date']))
	$date_end_first_cycle = $first_cycle_educ['cycle_educ_eval_date']
?>
		<li><?php echo _("Date de fin"); ?> : <?php echo $date_end_first_cycle == ''?showDate ($date_end_first_cycle):''; ?></li>
	</ul>
	

	<div class='patient_profile_part'>
		<h4><?php echo _("Diagnostic éducatif"); ?></h4>
			
		<ul>
<?php
	if (!empty ($educ_diag)) {
		if ($educ_diag['educ_diag_achieved'] == 1) {
?>
			<li><?php echo _("Réalisé"); ?></li>
			<li><a href='.?module=patient_teaching&action=show_educ_diag'><?php echo _("Le consulter"); ?></a></li>
			<li><a href='.?module=patient_teaching&action=show_summ_eval&type_eval=educ_diag'><?php echo _("Voir la synthèse = contrat éducatif"); ?></a></li>
<?php
		}
		else {
?>
			<li><?php echo _("Le diagnostic éducatif a été débuté le").' '
							.showDate ($educ_diag['educ_diag_date']).' '.("mais n'est pas terminé"); ?></li>
			<li><a href='.?module=patient_teaching&action=create_educ_diag'><?php echo _("le réaliser maintenant"); ?></a></li>
<?php
		}
	}
	else {
?>
		<li><?php echo _("Non réalisé"); ?></li>
		<li><a href='.?module=patient_teaching&action=create_educ_diag'><?php echo _("Le réaliser maintenant"); ?></a></li>
<?php
	}
?>
		</ul>
	</div>


<?php

$num_cycle = 0;
$nb_cycle_educ = count($list_cycle_educ);

foreach ($list_cycle_educ as $cycle_start_date => $feature_cycle) {

	$id_cycle_educ = $feature_cycle['id_cycle_educ'];

	$num_cycle ++;
	
	if ($num_cycle == 2) {
?>
</div>
<div class='patient_profile'>
	<h3><?php echo _("Après le programme éducatif..."); ?></h3>
<?php
	}
	
	$id_anchor_cycle = '';
	if ($num_cycle == count($list_cycle_educ))
		$id_anchor_cycle = 'current_cycle';
	elseif ($num_cycle == 1)
		$id_anchor_cycle = 'first_cycle';
?>
	<div class = 'patient_profile_part' id = '<?php echo $id_anchor_cycle; ?>'>
<?php

			
	if (empty ($feature_cycle['targets'])) {
		if (! ($num_cycle == $nb_cycle_educ and $_SESSION['patient']['synthesis_to_do'] == 1)) {
?>
		<h4><?php echo _("Évaluation du maintien des compétences"); ?></h4>
<?php
		}
	}
	
		
	else {
		ksort ($feature_cycle['targets']);
		
?>
		<h4>
<?php
		if ($num_cycle == 1)
			echo _("Séances éducatives et évaluation");
		else
			echo _("Renforcement éducatif n°").' '.($num_cycle-1);
?>
		</h4>

		<p><?php echo _("Objectifs éducatifs à travailler"); ?></p>

		<ul>
<?php

		foreach ($feature_cycle['targets'] as $num_target => $feature_target) {
			if ($feature_target['cycle_target_done'] == 1) {
?>
			<li>
				<?php echo _("Objectif").' '.$num_target.' : '._('fait').' ( '
							.showDate ($feature_target['cycle_target_date']).' )'; ?>
			</li>
<?php
				}
			else {
				if ($feature_target['cycle_target_date'] != '')
					$planned_date = '('._("date prévue").' : '.showDate($feature_target['cycle_target_date'], 'day').')';
				else
					$planned_date = '('._("pas de date prévue").')';
?>
			<li>
				<?php echo _("Objectif").' '.$num_target.' : '._("non réalisé").' '.$planned_date; ?>
			</li>
<?php
			}	
		}

		
		if (empty ($feature_cycle['cycle_educ_eval_date'])) {
			if ($num_cycle == 1)
				$param_get = 'type_eval=educ_diag&modify_target_cycle=1';
			else
				$param_get = 'type_eval=cycle_educ_eval&id_cycle_educ='.$last_cycle_educ.'&modify_target_cycle=1';
?>				
			<a href='.?module=patient_teaching&action=show_summ_eval&<?php echo $param_get; ?>'>
				<?php echo _("Modifier cette planification"); ?>
			</a>
<?php
		}
?>

		</ul>
		<p>
			<?php echo _("Evaluation finale"); ?>
		</p>
<?php
	}
	
	

?>
		<ul>
<?php
	if (!empty ($feature_cycle['cycle_educ_eval_date'])
		and !preg_match ('#[a-zA-Zéû]{3,}#', showDate ($feature_cycle['cycle_educ_eval_date']))) {
		if ($num_cycle == 1) {
?>
			<li><?php echo _("réalisée"); ?></li>
<?php
		}
		else {
?>
			<li><?php echo _("réalisée le ").showDate ($feature_cycle['cycle_educ_eval_date']); ?></li>
<?php			
		}
?>
			<li><a href='.?module=patient_teaching&action=show_eval&id_cycle_educ=<?php echo $id_cycle_educ; ?>'>
					<?php echo _("consulter l'évaluation"); ?></a></li>
			<li><a href='.?module=patient_teaching&action=show_summ_eval&type_eval=cycle_educ_eval&show_target_cycle=1
									&id_cycle_educ=<?php echo $id_cycle_educ; ?>'><?php echo _("consulter la synthèse"); ?></a></li>
<?php
	}
	elseif ($_SESSION['patient']['eval_to_do'] == 1){
		if (preg_match ('#[a-zA-Zéû]{3,}#', showDate ($feature_cycle['cycle_educ_eval_date']))) {
?>
			<li><?php echo _("Prévue en").' '.showDate ($feature_cycle['cycle_educ_eval_date']); ?></li>
			<li><a href='.?module=patient_teaching&action=create_eval'><?php echo _("la réaliser maintenant"); ?></a></li>
<?php
		}
		else {
?>
			<li><?php echo _("non réalisée"); ?></li>
			<li><?php echo _("comme tous les objectifs ont été validés, vous pouvez"); ?> <a href='.?module=patient_teaching&action=create_eval'><?php echo _("la réaliser maintenant"); ?></a></li>
<?php
		}
	}
	else {
		if ($_SESSION['patient']['synthesis_to_do'] != 1) {
?>
			<li><?php echo _("L'évaluation finale ne pourra être faite qu'après avoir travaillé tous les objectifs éducatifs prévus"); ?></li>
<?php
		}
		else {
?>
			<li><?php echo _("La suite dépendra de la conclusion de la synthèse de la dernière évaluation"); ?></li>
<?php
		}
	
	}
?>
		</ul>
<?php
	
		
	if (isset ($list_summary_letter[$id_cycle_educ])) {
?>
		<p><?php echo _("Courrier(s) de liaison créé(s)"); ?></p>
		<ul>
<?php
		foreach ($list_summary_letter[$id_cycle_educ] as $id_summary_letter => $one_summary_letter) {
?>
			<li>
				<a href = '.?module=patient_management&action=get_summary_letter_pdf&file=<?php echo $one_summary_letter['summary_letter_name']; ?>' title='<?php echo _("télécharger ce courrier"); ?>'>
<?php
					if (null != $one_summary_letter['summary_letter_title']) 
						echo $one_summary_letter['summary_letter_title'].' ('.showDate ($one_summary_letter['summary_letter_date'], 'day').')';
					else
						echo _("courrier du").' '.showDate ($one_summary_letter['summary_letter_date'], 'day');
?>
				</a>
				&nbsp;
				<a href='.?module=patient_management&action=delete_summary_letter&id_summary_letter=<?php echo $id_summary_letter; ?>' title='<?php echo _("supprimer ce courrier"); ?>' onclick = 'return confirm("<?php echo _("Êtes-vous sûr de vouloir supprimer ce courrier ? (irréversible)"); ?>")' ><img src='<?php echo IMAGE_PATH.'delete.png'; ?>' alt="delete" width=20 /><!--<?php echo _("supprimer"); ?>--></a>
				<a href='.?module=patient_management&action=rename_summary_letter&id_summary_letter=<?php echo $id_summary_letter; ?>' title='<?php echo _("modifier le titre de ce courrier"); ?>' ><img src='<?php echo IMAGE_PATH.'edit.png'; ?>' alt="edit" width=20 /><!--<?php echo _("renommer"); ?>--></a>
			</li>
<?php
		}
?>
		</ul>
<?php
	}
?>
	</div>
<?php
	
		$last_cycle_educ = $id_cycle_educ;
}



if ($num_cycle > 1) {
?>
	<a href = '.?module=patient_management&action=create_summary_letter'><?php echo _("Créer un courrier de liaison"); ?></a>
<?php
}
?>
</div>



<div class='patient_profile'>
	<h3><?php echo _("Grilles d'évaluation des savoir-faire"); ?></h3>
	
	<p><a href = '.?module=patient_teaching&action=show_device_eval'>
		<?php echo _("Technique d'utilisation des dispositifs d'inhalation"); ?>
	</a></p>

	<p><a href = '.?module=patient_teaching&action=show_peakflow_use'>
		<?php echo _("Technique de mesure du débit de pointe"); ?>
	</a></p>
</div>

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

$title_view = _("Lettre de synthèse");
$style[] = 'summ_eval';

$messages['info'][] = _("Ces informations sont celles correspondant à la dernière évaluation en date");
?>

<form method = 'post' action = '.?module=patient_management&action=create_summary_letter&output=pdf'>
	<p>
		<label for = 'letter_title'><?php echo _("Titre du document (optionnel)"); ?> :</label>
		<input type = 'text' name = 'letter_title' id = 'letter_title' size = 50 value = '' />
	</p>
	<p>
		<?php echo _("Les cases de texte vides seront ignorées pour la génération du courrier"); ?>
	</p>
	
	<hr />
	
	<p>
		<label for = 'letter_sender'><?php echo _("Expéditeur"); ?> :</label>
		<textarea name = 'letter_sender' rows = 4 cols = 50><?php	echo $user['user_title'].' '.strtoupper($user['user_surname']).' '.$user['user_firstname']."\n"
				.$user['user_street'].', '.$user['user_postal_code'].' '.$user['user_city']."\n"
				._("Tél").' : '.$user['user_phone']."\n"
				._("Mail").' : '.$user['user_mail']; ?></textarea>
	</p>
	<p>
		<label for = 'letter_recipient'><?php echo _("Destinataire"); ?> :</label>
		<textarea name = 'letter_recipient' rows = 3 cols = 50><?php	echo _("Dr "); ?></textarea>
	</p>
	<p>
		<label for = 'letter_date'><?php echo _("le"); ?></label>
		<input type = 'text' name = 'letter_date' id = 'letter_date' size = 8 value = '<?php echo showDate(date('Y-m-d')); ?>' />
	</p>
	<p>
		<input type = 'text' name = 'letter_polite_phrase' id = 'letter_polite_phrase' size = 50 value = '<?php echo _("Cher (Chère) collègue,"); ?>' />

<?php
if ($patient['patient_sex'] == 0)
	$sentence_patient = _("patiente");
else
	$sentence_patient = _("patient");
?>
		<textarea name = 'letter_introduction' rows = 3 cols = 100><?php	echo _("Voici les résultats de votre jeune").' '.$sentence_patient.' '.strtoupper($_SESSION['patient']['patient_surname'])
		.' '.$_SESSION['patient']['patient_firstname'].' '
		._("au terme du programme d'éducation thérapeutique pour enfants asthmatiques et leur famille dont il a bénéficié du").' '
		.showDate($patient['patient_date_inclusion'], 'day').' '._("au").' '.showDate($cycle_educ_eval_date, 'day');?></textarea>
	</p>
	
	<p>
		<?php echo _("Objectifs travaillés pendant les séances d'éducation thérapeutique :"); ?>
	</p>
	
	<table>
		<thead>
			<tr>
				<th class='synthesis_item'></th>
				<th class='synthesis_item'></th>
				<th class='synthesis_title_1'><?php echo _("Non acquis"); ?></th>
				<th class='synthesis_title_2'><?php echo _("Partiellement acquis"); ?></th>
				<th class='synthesis_title_3'><?php echo _("Acquis"); ?></th>
			</tr>
		</thead>
		<tbody>
<?php
foreach ($list_question_obj as $id_target => $features_question_obj) {
	
	$line = '';
	$beginning_line = '';
	$nb_line = 0;
	$nb_points = 0;

	$css_item = 'synthesis_item';
	if ($features_question_obj['target_security'] == 1)
		$css_item = 'synthesis_security_item';

	
	foreach ($features_question_obj['value_question'] as $nb_subquestion => $value_question) {
		$line .= $beginning_line;
		
		if (is_string ($nb_subquestion)) {
			$line .= '			<td class = \''.$css_item.'\'>'.$id_target.'&nbsp;'.$nb_subquestion.'</td>'."\n";
			$id_group_questions = $id_target.'_'.$nb_subquestion;
		}
		else {
			$line .= '			<td class = \''.$css_item.'\'></td>'."\n";
			$id_group_questions = $id_target;
		}

		foreach ($list_group_questions[$id_group_questions]['validation_items'] as $title_item => $value_item) {

			$title_cell = '';
			if ($value_question == $value_item) {
				$nb_points += $value_item;
				$title_cell = 'X';
				$css_cell = 'synthesis_checked_cell';
			}
			elseif ($value_item === 'NA')
				$css_cell = 'synthesis_inactive_cell';
			else
				$css_cell = 'synthesis_cell';
				
			$line .= '			<td class = \''.$css_cell.'\'>'.$title_cell.'</td>'."\n";
		}

		$nb_line ++;
		
		$line .= '		</tr>'."\n";
		$beginning_line = '		<tr>'."\n";
		
	}

	echo '		<tr>'."\n"
		.'			<td rowspan='.$nb_line.' class = \''.$css_item.'\'>'.$id_target.'/ '.$features_question_obj['target_name'].'</td>'."\n"
		.$line;
}
?>
		</tbody>
	</table>

	<p>
		<textarea name = 'letter_peakflow' rows = 2 cols = 100><?php	echo _("Après apprentissage, le chiffre du débit de pointe habituel est de ").$patient['patient_peakflow'].' L/min '
		._("et son seuil d'alerte de").' '.$patient['patient_peakflow'] * 0.6 .' L/min';?></textarea>
	</p>

	<p>
		<textarea name = 'letter_conclusion' rows = 3 cols = 100><?php	echo _("À la fin du programme éducatif, il nous paraît utile d'insister sur les points suivants :");?></textarea>
	</p>

	<p>
		<textarea name = 'letter_treatment' rows = 5 cols = 100><?php	echo _("Son traitement actuel est :")."\n"
		._("traitement quotidien")."\n"
		._("médicament de secours (= bronchodilatateur d'action rapide)");?></textarea>
	</p>

	<p>
		<textarea name = 'letter_ending' rows = 2 cols = 100><?php	echo _("Je reste à votre disposition pour tous renseignements, informations ou remarques.")."\n"
		._("Veuillez, Madame, Monsieur, cher Confrère, recevoir l'expression de mes salutations cordiales.");?></textarea>
	</p>

	<p>
		<label for = 'letter_signatory'><?php echo _("Signataire"); ?></label>
		<input type = 'text' name = 'letter_signatory' id = 'letter_signatory' size = 20 maxlength = 50 value = '<?php echo 'Dr '.$user['user_surname']; ?>' />
	</p>
	
	<p>
		<input class = 'button_validation' type = 'submit' name = 'create_PDF' value = '<?php echo _("Créer le courrier en PDF"); ?>' />
	</p>	
</form>

<?php
/*
echo '<pre>';
print_r ($list_question_obj);
echo '</pre>';
/**/
?>

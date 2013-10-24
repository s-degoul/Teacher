  
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
$title_view = _("Liste des évaluations de la technique de mesure du DEP");
$style[] = 'device';
/*
echo '<pre>';
print_r ($list_peakflow_use);
echo '</pre>';
*/

?>
<div class = 'one_table_device'>

	<div class = 'table_device_titles'>
		<table class = 'table_device'>
			<thead>
				<tr>
					<th>
						<?php echo _("évaluations (DEP)"); ?>
						<a href = '.?module=patient_teaching&action=show_video_peakflow&from=show_peakflow_use'>
							<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
						</a>
					</th>
				</tr>
			</thead>
			<tbody>
<?php
foreach ($list_questions_peakflow as $nb_question => $title_question) {
?>
				<tr>
					<td><?php echo $title_question; ?></td>
				</tr>
<?php
	}
?>
			</tbody>
		</table>
	</div>
		
	<div class = 'table_device_values'>
		<table class = 'table_device'>
			<thead>
				<tr>

<?php
	foreach ($list_peakflow_use as $features_peakflow_use) {
			echo '						<th class = \'table_device_date\'>'
										.showDate($features_peakflow_use['peakflow_use_date'], 'day')
										.'<p><a href=\'.?module=patient_teaching&action=delete_peakflow_use&id='.$features_peakflow_use['id_peakflow_use'].'\'>'
											._("supprimer").'</a></p>'
										.'</th>'."\n";
	}
?>				
					</tr>
				</thead>
				<tbody>
<?php
	foreach ($list_questions_peakflow as $nb_question => $title_question) {
		echo '					<tr>'."\n";
		
		foreach ($list_peakflow_use as $features_peakflow_use) {

			$value = '';
			if ($features_peakflow_use['peakflow_use_q'.$nb_question] == 1)
				$value = _("acquis");
			elseif (is_null ($features_peakflow_use['peakflow_use_q'.$nb_question]))
				$value = _("non renseigné");
			else
				$value = _("non acquis");
				
			echo '					<td class = \'table_device_value\'>'.$value.'</td>'."\n";
		}
		
		echo '					</tr>'."\n";
	}
?>
				</tbody>
			</table>
		</div>

		<p>
			<a href = '.?module=patient_teaching&action=create_peakflow_use&from=show_peakflow_use'>
			<?php echo _("Ajouter d'autres évaluations"); ?></a>
		</p>
	</div>

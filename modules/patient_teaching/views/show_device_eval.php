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

$title_view = _("Liste des évaluations des techniques de prise de médicaments inhalés");
$style[] = 'device';
$style[] = 'patient_eval'; // for legende


foreach ($list_device_eval as $id_device => $features_device_eval) {
?>
	<div class = 'one_table_device'>
		<div class = 'table_device_titles'>
			<table class = 'table_device'>
				<thead>
					<tr>
						<th>
							<?php echo $list_devices[$id_device]['title']; ?>
							&nbsp;&nbsp;
							<a href = '.?module=patient_teaching&action=show_video_devices&device=<?php echo $id_device; ?>&from=show_device_eval'>
								<img src = 'images/picto_video.jpg' alt = '<?php echo _("voir la vidéo"); ?>' />				
							</a>
						</th>
					</tr>
				</thead>
				<tbody>
<?php
	foreach ($list_devices[$id_device]['questions'] as $nb_question => $title_question) {
?>
				<tr>
					<td class = 'table_device_title'><?php echo $title_question; ?></td>
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
	foreach ($features_device_eval as $date_eval => $questions) {
			echo '						<th class = \'table_device_date\'>'
										.showDate($date_eval, 'day')
										.'<p><a href=\'.?module=patient_teaching&action=delete_device_eval&device='.$id_device.'&id='.$questions['id_device_'.$id_device].'\'>'
											._("supprimer").'</a></p>'
										.'</th>'."\n";
	}
?>				
					</tr>
				</thead>
				<tbody>
<?php
	foreach ($list_devices[$id_device]['questions'] as $nb_question => $title_question) {
?>
					<tr>
<?php	
		foreach ($features_device_eval as $date_eval => $questions) {

			$value = '';
			if ($questions['device_'.$id_device.'_q'.$nb_question] == 1)
				$value = 'valid';
			elseif (is_null ($questions['device_'.$id_device.'_q'.$nb_question]))
				$value = 'unknown';
			else//if ($list_device_eval[$id_device][$date_eval]['device_'.$id_device.'_q'.$nb_question] == 0)
				$value = 'non_valid';
?>
						<td class = 'table_device_value'>
							<img src='<?php echo IMAGE_PATH.'icon_'.$value; ?>' alt='<?php echo $value; ?>' />
						</td>
<?php
		}
?>
					</tr>
<?php
	}
?>
				</tbody>
			</table>
		</div>

		<p>
			<a href = '.?module=patient_teaching&action=create_device_eval&device=<?php echo $id_device; ?>&from=show_device_eval' class = 'link_action'>
			<?php echo _("Ajouter d'autres évaluations pour ce dispositif"); ?></a>
		</p>
	</div>

<?php
}
?>
	<div class = 'one_table_device'>
		<form method = 'post' action = '.?module=patient_teaching&action=create_device_eval&from=show_device_eval'>
			<label for = 'device'><?php echo _("Ajouter des évaluations pour un des dispositifs :"); ?></label>
			<select name = 'device' id = 'device'>
				<option value = ''><?php echo _("-- choisir le dispositif --"); ?></option>
<?php
	foreach ($list_devices as $id_device => $features_device) {
		echo '				<option value = \''.$id_device.'\'>'.$features_device['title'].'</option>'."\n";
	}
?>
			</select>
			<input type = 'submit' name = 'add_device_eval' value = '<?php echo _("On y va !"); ?>' class = 'button_validation' />
		</form>
	</div>


<div>
	<div class = 'legend'>
		<p class = 'legend_title'><?php echo _("Légende"); ?> :</p>
		<div>
			<p class = 'legend_image'>
				<img src = '<?php echo IMAGE_PATH; ?>icon_valid.png' alt = 'valid' width = 15px />
			</p>
			<p class = 'legend_text'>
				<?php echo _("validé"); ?>
			</p>
		</div>
		<div>
			<p class = 'legend_image'>
				<img src = '<?php echo IMAGE_PATH; ?>icon_non_valid.png' alt = 'non valid' width = 15px />
			</p>
			<p class = 'legend_text'>
				<?php echo _("non validé"); ?>
			</p>
		</div>
		<div>
			<p class = 'legend_image'>
				<img src = '<?php echo IMAGE_PATH; ?>icon_unknown.png' alt = 'unknown' width = 15px />
			</p>
			<p class = 'legend_text'>
				<?php echo _("non déterminé"); ?>
			</p>
		</div>
	</div>
</div>

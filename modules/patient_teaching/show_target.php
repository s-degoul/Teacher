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

function TargetInfoBox (array $content) {
?>
<div class='advice_target'>

<?php
	if (!empty ($content['learning_method']) and is_array ($content['learning_method'])) {
?>
	<p class='title_advice_target'><?php echo _("Méthode d’apprentissage").' :'; ?></p>
<?php
		foreach ($content['learning_method'] as $method) {
?>
	<p><?php echo $method; ?></p>
<?php
		}
	}
	if (!empty ($content['duration'])) {
?>
	<p class='title_advice_target'><?php echo _("Durée de la séance").' :'; ?></p>
	<p><?php echo $content['duration']; ?></p>
<?php
	}
	
	if (!empty ($content['print']) and is_array($content['print'])) {
?>
	<p class='title_advice_target'><?php echo _("Imprimer").' :'; ?></p>

<?php
		foreach ($content['print'] as $pdf => $features) {
?>
	<p>
<?php
			if (is_array ($features)) {
?>
		<?php echo $features['before_title'];?>
		<a href='<?php echo CheckPDFExists($pdf) != 1 ?CheckPDFExists($pdf):''; ?>'>
			<img src='<?php echo IMAGE_PATH.'print.png'; ?>' width=25px height=20px alt='print' />
			<?php echo $features['title'];?>
		</a>
<?php
				if (CheckPDFExists($pdf) == 1) {
					echo '('._("Erreur : fichier inaccessible").')';
				}
?>
		<?php echo $features['after_title']; ?>
<?php
			}
			else {
				echo $features;
			}
?>
	</p>
<?php
		}
	}
	
	if (!empty ($content['material']) and is_array ($content['material'])) {
?>
	<p class='title_advice_target'><?php echo _("Matériel nécessaire").' :'; ?></p>
<?php
		foreach ($content['material'] as $material) {
?>
		<p>
<?php
			if (is_array ($material)) {
?>
		<?php echo $material['before_title']; ?>
		<a href='<?php echo $material['link']; ?>'>
			<?php echo $material['title']; ?>
		</a>
		<?php echo $material['after_title']; ?>
<?php
			}
			else {
				echo $material;
			}
?>
		</p>
<?php
		}
	}
?>
</div>
<?php
}





require (MODEL_PATH.'select_target_list.php');

$style[] = 'target';

if (isset ($_GET['id_target'])) {
	if ((int) $_GET['id_target'] >= 1 and (int) $_GET['id_target'] <= 10) {
		$id_target = (int) $_GET['id_target'];
	}
	else {
		$messages['error'][] = _("Aucun objectif sélectionné");
	}
}
else {
	$messages['error'][] = _("Aucun objectif sélectionné");
}

if (empty ($messages['error'])) {

	$type_reader = 'user';
	
	if ((isset ($_GET['type']) and $_GET['type'] != 'user')) {
		$type_reader = 'patient';
//		$style[] = 'user_help';
		$style[] = 'target_patient';
	}
	else {
		$style[] = 'target_user';
	}

	$title_view = '';
	if ($list_target[$id_target]['target_security'] == 1) {
		$title_view = '<p class = \'security_notification\'>'._("Objectif de sécurité").'</p>'."\n";
	}
	$title_view .= $id_target.' - '.$list_target[$id_target]['target_name'];
	// affichage à faire si c'est un objectif de sécurité ($list_target[$id_target]['target_security'] = 1)

	if (isset ($_GET['from'])) {
		//~ if ($_GET['from'] == 'essential')
			//~ $content_top .= '<a href = \'.?module=user_teaching&action=show_essential&page_essential=3\' class = \'link\'>'
							//~ ._("retourner à &laquo; l'Essentiel à savoir &raquo;").'</a>';
		//~ elseif ($_GET['from'] == 'create_eval')
			//~ $content_top .= '<a href = \'.?module=patient_teaching&action=create_eval&page_eval=8\' class = \'link\'>'
							//~ ._("retourner à &laquo; l'évaluation du maintien des compétences &raquo;").'</a>';
			//~ 
		$from_page = '&from='.$_GET['from'];
	}
	else {
		$from_page = '';
	}

	$menu_list_target = '<div class = \'target_list\'><p class = \'target_list_title\'><a href = \'.?module=patient_teaching&action=show_target_list\' title = "'._("retourner à la liste des objectifs éducatifs").'">'._("Liste des objectifs").'</a> :</p>';
	for ($nb_target = 1; $nb_target <= 10; $nb_target ++) {
		if($nb_target == $id_target)
			$css_target_list = 'target_num_selected';
		else
			$css_target_list = 'target_num';
		$menu_list_target .= '<a href=\'.?module=patient_teaching&action=show_target&id_target='
					.$nb_target.'&type='.$type_reader.$from_page.'\' class = \''.$css_target_list.'\'>'.$nb_target.'</a>';//<p class = \''.$css_target_list.'\'></p>';
	}
	$content_top .= $menu_list_target.'</div>';
	
	if (empty ($_SESSION['advice']['show_target'])) {
		$messages['advice'][] = _("À chaque support destiné à l’enfant correspond un conducteur qui vous est destiné. Pour un bénéfice de séance optimal, lisez le attentivement avant d'aborder la fiche pédagogique avec l'enfant.");
		$_SESSION['advice']['show_target'] = 1;
	}

	if (isset ($_SESSION['id_user'])) {
		$css_user = 'target_type_user';
		$css_patient = 'target_type_patient';
		if ($type_reader == 'patient')
			$css_patient = 'target_type_patient_selected';
		else
			$css_user = 'target_type_user_selected';

		$content_top .= '<a class=\''.$css_user.'\' href=\'.?module=patient_teaching&action=show_target&id_target='.$id_target.'&type=user'.$from_page.'\'>Conducteur médecin</a>';

		$content_top .= '<a class=\''.$css_patient.'\' href=\'.?module=patient_teaching&action=show_target&id_target='.$id_target.'&type=patient'.$from_page.'\'>Fiche enfant</a>';
	}

	if (isset ($_POST['valid_target'])){
		$target_done = 1;
		$target_date = date('Y-m-d H:i:s');
		$id_cycle_educ = $_SESSION['patient']['id_cycle_educ'];
		require (MODEL_PATH.'update_cycle_target.php');
		
		$_SESSION['patient']['targets'][$id_target]['target_done'] = 1;
		$_SESSION['patient']['eval_to_do'] = 1;
		foreach ($_SESSION['patient']['targets'] as $id => $features) {
			if ($features['target_done'] == 0)
				$_SESSION['patient']['eval_to_do'] = 0;
		}
		$messages['info'][] = _("Cet objectif pédagogique est validé");
		
		if ($_SESSION['patient']['eval_to_do'] == 1) {
			$_SESSION['messages']['advice'] = _("Toutes les séances éducatives prévues ont été validées. Vous pouvez maintenant réaliser l'évaluation de l'enfant, et éventuellement de ses parents. Néanmoins, pour un bénéfice optimal, il est fortement conseillé de la programmer lors d'une consultation ultérieure.");
			
			header('location:.?module=patient_management&action=show_profile');
			exit;
		}
	}

	if (is_file (VIEW_RELATIVE_PATH.'target_'.$id_target.'_'.$type_reader.'.php'))
		require (VIEW_RELATIVE_PATH.'target_'.$id_target.'_'.$type_reader.'.php');
	else
		$messages['error'][] = _("impossible d'accéder à la page correspondant à cet objectif pédagogique");
		
	if (isset ($_SESSION['patient']['targets'][$id_target])) {
		if ($_SESSION['patient']['targets'][$id_target]['target_done'] == 0) {
			
			if ($type_reader == 'user') {
?>
		<p>
			<a href = '.?module=patient_teaching&action=show_target&id_target=<?php echo $id_target; ?>&type=patient' class = 'link_action'><?php echo _("Aller vers l'objectif pédagogique enfant"); ?></a>
		</p>
<?php
			}
			else {
				require (VIEW_RELATIVE_PATH.'target_form_validation.php');
			}
		}
		elseif (! isset ($_POST['valid_target']))
			$messages['info'][] = _("Cet objectif pédagogique est déjà validé");
	}
}
?>

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

$title_view = _("Auto-évaluation");
$style[] = 'user_eval';


if (is_file(IMAGE_PATH.'advice_'.$_SESSION['lang'].'.gif'))
	$file = IMAGE_PATH.'advice_'.$_SESSION['lang'].'.gif';
else
	$file = IMAGE_PATH.'advice'.DEFAULT_LOCALE.'.gif';
?>
<p class = 'advices_image'>
	<img src = '<?php echo $file; ?>' width = 75px alt = 'advices' >
</p>

<div class = 'advices'>
	<h2><?php echo _("Pourquoi et quand m’évaluer ?"); ?></h2>
	<ul>
		<li><?php echo _("pour connaître mon niveau de compétences pédagogiques, avant de commencer le programme éducatif avec un enfant,"); ?></li>
		<li><?php echo _("pour évaluer mes progrès, après avoir réalisé le programme éducatif avec au moins trois enfants"); ?></li>
	</ul>
	
	<h2><?php echo _("Comment m’évaluer ?"); ?></h2>
	<p><?php echo _("En répondant au questionnaire (cliquez sur les bonnes réponses). <em>Il est conseillé de réaliser cette évaluation en une fois (3 pages).</em>"); ?></p>
	<p><?php echo _("1 point par bonne réponse, score total sur 20"); ?></p>

	<h2><?php echo _("Comment progresser ?"); ?></h2>
	<p><?php echo _("Si je n’ai pas obtenu le nombre maximal de points sur un item, je relis le paragraphe correspondant"); ?></p>
</div>

<p class = 'go'>
	<a href='.?module=user_teaching&action=create_eval&page_eval=1'>
		<img src = '<?php echo IMAGE_PATH; ?>row_go.png' alt = "go" />
		<?php echo _("C'est parti !"); ?>
	</a> 
</p>	


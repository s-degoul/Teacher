  
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
$content_top = lastpage_essential ('why') . nextpage_essential ('1');
?>

<h1><?php echo _("Le programme éducatif TEACHER : mode d'emploi"); ?></h1>

<p><?php echo _("L'objectif de Teacher est d'initier le soignant à l'ETP, par sa pratique auprès des enfants asthmatiques âgés de 6 à 12 ans
et de leur parents."); ?></p>
	
<p><?php echo _("En premier lieu, faites une proposition d’éducation thérapeutique, en expliquant"); ?> :</p>
<ul>
	<li><?php echo _("<strong>la finalité du programme éducatif</strong>, c‘est à dire que l’enfant devienne plus autonome
		dans la gestion de sa maladie au quotidien,"); ?></li>
	<li><?php echo _("<strong>son déroulement :</strong> pour que le programme ait une utilité, il faudra le poursuivre jusqu’au bout.
		L’enfant, ses parents et le pédiatre/médecin s’engagent donc l’un vis-à-vis des autres à réaliser le programme dans sa totalité."); ?></li>

<p><?php echo _("Chacun reste toutefois libre d’adhérer ou non. Si l’enfant et/ou sa famille ne se sentent pas concernés, renouvelez cette
proposition d’éducation thérapeutique ultérieurement."); ?></p>

<p><?php echo _("Le déroulement du programme d’éducation thérapeutique est basé sur quatre grandes étapes"); ?> :</p>

<table class = 'cycle'>
	<thead>
		<tr>
			<th colspan = 2><span><?php echo _("PROPOSITION D'ÉDUCATION THÉRAPEUTIQUE"); ?></span></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		
		</tr>
		<tr>
			<td colspan = 2 class = 'row_bottom'><img src = 'images/row_bottom.jpg'></td>
		</tr>
		<tr>
			<td colspan = 2 class = 'one_in_two'>
				<div class = 'nb_stage'>
					<div class = 'numeral'>1</div>
					<div class = 'superscript'>e<br/><br/>ETAPE</div>
				</div>
				<div class = 'description_stage'>
					<p class = 'title_stage'><a href = '?module=user_teaching&action=show_essential&page_essential=1'><?php echo _("DIAGNOSTIC ÉDUCATIF"); ?></a></p>
					<p><?php echo _("Repérer les besoins"); ?></p>
				</div>
			</td>
		</tr>
		<tr>
			<td class = 'row_left'><img src = 'images/row_top_right.jpg'></td>
			<td class = 'row_right'><img src = 'images/row_bottom_right.jpg'></td>
		</tr>
		<tr>
			<td>
				<div class = 'nb_stage'>
					<div class = 'numeral'>4</div>
					<div class = 'superscript'>e<br/><br/>ETAPE</div>
				</div>
				<div class = 'description_stage'>
					<p class = 'title_stage'><a href = '?module=user_teaching&action=show_essential&page_essential=4'><?php echo _("ÉVALUATION"); ?></a></p>
					<p><?php echo _("Les acquis du patient et de ses parents"); ?></p>
				</div>
			</td>
			<td>
				<div class = 'nb_stage'>
					<div class = 'numeral'>2</div>
					<div class = 'superscript'>e<br/><br/>ETAPE</div>
				</div>
				<div class = 'description_stage'>
					<p class = 'title_stage'><a href = '?module=user_teaching&action=show_essential&page_essential=2'><?php echo _("PROGRAMME ÉDUCATIF PERSONNALISÉ"); ?></a></p>
					<p><?php echo _("Lister les compétences à acquérir par le patient"); ?></p>
				</div>
			</td>
		</tr>
		<tr>
			<td class = 'row_left'><img src = 'images/row_top_left.jpg'></td>
			<td class = 'row_right'><img src = 'images/row_bottom_left.jpg'></td>
		</tr>
		<tr>
			<td colspan = 2 class = 'one_in_two'>
				<div class = 'nb_stage'>
					<div class = 'numeral'>3</div>
					<div class = 'superscript'>e<br/><br/>ETAPE</div>
				</div>
				<div class = 'description_stage'>
					<p class = 'title_stage'><a href = '?module=user_teaching&action=show_essential&page_essential=3'><?php echo _("SÉANCES ÉDUCATIVES"); ?></a></p>
					<p><?php echo _("L'apprentissage"); ?></p>
				</div>
			</td>		
		</tr>
	</tbody>
</table>

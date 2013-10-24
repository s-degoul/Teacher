  
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
	$title_view = 'Auto-évaluation';
	$style[] = 'user_eval';
?>

<table class="table_user_eval_info">
	<tbody>
		<tr>
			<td width="90" align="center" valign="top">
				<img src="images/conseils.png" align="middle">
			</td>
			
			<td class="table_conseil_eval">
			<p>
				<h1>Pourquoi et quand m’évaluer ?</h1>
				<ul>
					<li>pour connaître mon niveau de compétences pédagogiques, avant de commencer le programme éducatif avec un enfant</li>
					<li>pour évaluer mes progrès, après avoir réalisé le programme éducatif avec au moins trois enfants</li>
				</ul>
			</p>
			<p>
				<h1>Comment m’évaluer ?</h1>
				<ul class="list_no_point">
					<li><strong>En répondant au questionnaire.</strong></li>
					<li>1 point par bonne réponse, Cliquez sur les bonnes réponses</li>
					<li>Score total sur 20</li>
				</ul>
			</p>
			<p>
				<h1>Comment progresser ?</h1>
				<ul class="list_no_point">
					<li>Si je n’ai pas obtenu le nombre maximal de points sur un item, 
					je relis le paragraphe correspondant</li>
				</ul>
			</p>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center>
					<a href=".?module=user_teaching&action=create_eval&page_eval=1" class="user_eval_info_go">
					<img src="images/fleche_bas.png" align="middle">
					C'est parti !</a> 
				<center>
			</td>
		</tr>
	</tbody>
</table>


  
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
$content_top = lastpage_essential ('2') . nextpage_essential ('4');
?>

<h1><?php echo _("3<sup>ème</sup> ETAPE : les séances éducatives ou l’apprentissage des objectifs fixés"); ?></h1>

<a href = '?module=patient_teaching&action=show_target&id_target=1&from=essential'>
	<?php echo _("En voir un aperçu (exemple de l'objectif éducatif n°1)"); ?>
</a>

<p><?php echo _("Elles sont basées sur des supports « prêts-à-l’emploi » ludiques et imagés."); ?></p>
<p><?php echo _("Le nombre de séances à prévoir dépend du nombre d’objectifs à travailler avec l’enfant et sa famille."); ?></p>
<p><?php echo _("Chaque objectif nécessite environ 10 minutes. Ils peuvent être groupés pendant une même séance. Elle dure alors entre
20 et 30 minutes."); ?></p>

<table class='essential'>
<caption><?php echo _("Exemples de regroupement de séances :"); ?></caption>
<thead>
	<tr>
		<th><?php echo _("Exemple"); ?> 1</th>
		<th><?php echo _("Exemple"); ?> 2</th>
		<th><?php echo _("Exemple"); ?> 3</th>
		<th><?php echo _("Exemple"); ?> 4</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>
			<ul>
				<li><?php echo _("Repérer les signes de la crise et les signes annonciateurs"); ?></li>
				<li><?php echo _("Identifier les signes de gravité d’une crise d’asthme"); ?></li>
				<li><?php echo _("Avoir une attitude adaptée en cas de crise + plan d’action personnalisé"); ?></li>
			</ul>
		</td>
		<td>
			<ul>
				<li><?php echo _("Pratiquer les techniques de prise de médicaments inhalés"); ?></li>
				<li><?php echo _("Faire la différence entre traitement de fond et traitement de crise : comprendre son corps 
				et s’expliquer les mécanismes de l’asthme"); ?></li>
			</ul>
		</td>
		<td>
			<ul>
				<li><?php echo _("Identifier pour les réduire les facteurs déclenchant et aggravant mes crises"); ?></li>
				<li><?php echo _("Aménager un environnement favorable à ma santé"); ?></li>
			</ul>
		</td>
		<td>
			<ul>
				<li><?php echo _("Prévenir le bronchospasme induit par l’exercice"); ?></li>
				<li><?php echo _("Adapter son traitement en fonction du contexte de vie (vacances, sorties, infection)"); ?></li>
			</ul>
			<?php echo _("Ou"); ?>
			<ul>
				<li><?php echo _("Mesurer son DEP"); ?></li>
				<li><?php echo _("Appliquer la conduite à tenir en fonction des chiffres du débitmètre de pointe"); ?></li>
			</ul>
		</td>
</tbody>
</table>

<p><?php echo _("L’enfant repart avec un support écrit à imprimer, comprenant les messages-clé travaillés."); ?></p>

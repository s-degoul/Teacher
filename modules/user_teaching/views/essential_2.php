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


$content_bottom = lastpage_essential ('1') . nextpage_essential ('3');
$content_top .= $content_bottom;
?>

<h2><?php echo _("2<sup>ème</sup> ETAPE : le programme éducatif personnalisé."); ?></h2>

<p><?php echo _("Au terme du diagnostic éducatif, le médecin, l’enfant et sa famille font une synthèse et se concertent sur les
points forts du patient vis-à-vis de sa maladie chronique (ex « bonne compréhension de la maladie », « motivation à se
soigner ») et les points à améliorer (ex « gestion d’une crise d’asthme »)."); ?></p>

<p><?php echo _("À partir de ces constatations, ils définissent des objectifs à travailler : c’est le <strong>programme éducatif personnalisé.</strong>"); ?></p>
	
<ul>
	<li><?php echo _("Il y a des objectifs de sécurité : compétences indispensables que le jeune patient asthmatique et sa famille
doivent acquérir prioritairement"); ?></li>
	<li><?php echo _("Et d’autres objectifs qui permettent à l’enfant de mieux comprendre sa maladie et donc de mieux la gérer au quotidien."); ?></li>
	<li><?php echo _("Les attentes du jeune sont également abordées et devront faire l’objet d’objectifs spécifiques."); ?></li>
</ul>
<p><?php echo _("Tous s’engagent à les travailler lors de rencontres prochaines : c’est le contrat éducatif. Il prévoit les dates de séances d’apprentissage."); ?></p>
<p><?php echo _("Un exemplaire du programme éducatif personnalisé est remis à la famille."); ?></p>

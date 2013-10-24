  
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
$content_top = lastpage_essential ('how') . nextpage_essential ('2');
?>

<h1><?php echo _("1<sup>ère</sup> ETAPE : le diagnostic éducatif ou bilan éducatif partagé"); ?></h1>

<a href='?module=patient_teaching&action=show_educ_diag&demo=1&from=essential'><?php echo _("En voir un aperçu"); ?></a>

<p><?php echo _("C’est un entretien semi-directif qui se réalise en environ 30 minutes."); ?></p>

<p><?php echo _("Il se compose de questions pré-établies explorant la situation du patient dans ses dimensions <strong>biomédicale</strong> «  qu’est-ce
qu’il a ? », <strong>psychoaffective</strong> « qui est-il? que ressent-il ? », <strong>socioprofessionnelle</strong> « que fait-il ? comment vit-il ?, »
<strong>cognitive</strong> « que sait-il ? que croit-il ? » et <strong>identitaire</strong> « quel est son projet ? qu’est-ce qui le motive ? »."); ?></p>

<p><?php echo _("<strong>Le diagnostic éducatif</strong> repère les besoins du patient mais aussi ses compétences et ses centres d’intérêt, leviers pour
faciliter l’apprentissage."); ?></p>

<p><?php echo _("Il pointe aussi sa réflexion, sa capacité de réaction et aussi bien ses comportements inadaptés, par manque de connaissance, de savoir-faire
ou d’analyse de situation, qui empêchent une bonne gestion de la maladie."); ?></p>

<p><?php echo _("C’est également un temps d’apprentissage pour le patient et sa famille, car il sollicite sa réflexion et ses capacités de réaction.
Il se sent ainsi mieux compte des répercussions de la maladie dans son quotidien."); ?></p>

<p><?php echo _("Il comporte des mini-synthèses dont le contenu sera reporté de façon automatisée dans la synthèse finale."); ?></p>

  
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
$content_top = lastpage_essential ('','') . nextpage_essential ('why');
?>

<h1><?php echo _("L’Education Thérapeutique du Patient (ETP) : qu’est-ce que c’est ?"); ?></h1>

<p><?php echo _("Selon l’OMS, « L’éducation thérapeutique vise à aider les patients (et leurs familles) à acquérir et maintenir des compétences
permettant une gestion optimale de leur maladie chronique »"); ?> (<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>1</a>).</p>
	
<p><?php echo _("L’ETP a modifié radicalement la prise en charge des personnes vivant avec une maladie chronique. Initiée au départ chez 
les patients diabétiques, cet enseignement a été adapté à d’autres maladies comme l’asthme, les maladies cardio-vasculaires,
l’insuffisance rénale, le cancer, ou le SIDA . De nombreuses d’études "); ?>
 (<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>2</a>,
<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>3</a>,
<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>4</a>)
<?php echo _("ont prouvé que les patients avaient
moins de crises, de complications, d’hospitalisations après programme éducatif.<br/>
Par ailleurs, l’ETP devient incontournable dans une société qui évolue vers un plus grand partage des décisions.<br/>
Et enfin, l’augmentation croissante des maladies chroniques couplée à une baisse de la démographie médicale oblige les
patients (et/ou de leur entourage) à l’auto-surveillance et l’auto-soin."); ?></p>

<p><?php echo _("Le but de l’éducation thérapeutique du patient (ETP) est de l’aider à mieux comprendre sa maladie et son traitement,
éviter les complications et les exacerbations, augmenter sa réactivité en cas d’urgence et améliorer sa qualité de vie."); ?></p>

<p><?php echo _("Pour bien comprendre la démarche d’éducation thérapeutique, il est nécessaire d’intégrer ces quelques « postulats »"); ?>
(<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>5</a>) :
<ol>
	<li><?php echo _("elle s’adresse à des patients atteints de maladie chronique"); ?></li>
	<li><?php echo _("l’ETP est centrée sur le patient"); ?></li>
	<li>
		<?php echo _("Elle est structurée : on part du patient"); ?>
		(<a href = '.?module=patient_teaching&action=show_educ_diag&demo=1'><?php echo _("diagnostic éducatif"); ?></a>)
		<?php echo _("pour mieux le connaître. Au terme de cet entretien, on définit avec lui les compétences qui lui manquent"); ?>
		(<a href = '.?module=patient_teaching&action=show_educ_program'><?php echo _("programme éducatif personnalisé"); ?></a>)
		<?php echo _("et qui lui permettront de mieux vivre avec sa maladie chronique.
		Ces compétences seront travaillées sous forme d’objectifs pendant plusieurs entretiens"); ?>
		(<a href = '.?module=patient_teaching&action=show_target&id_target=1'><?php echo _("séances d’apprentissage"); ?></a>).
		<?php echo _("Les méthodes et techniques pédagogiques pour amener le patient aux changements de comportement sont variées :
		les plus efficaces sont les résolutions de problèmes : « on n’apprend bien qu’en faisant.. »"); ?>
		(<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>6</a>).
		<?php echo _("On termine par une"); ?> <a href = '.?module=patient_teaching&action=show_eval&demo=1'><?php echo _("évaluation"); ?></a>, 
		<?php echo _("nécessaire pour vérifier les compétences acquises ou non par le patient"); ?>
		(<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>7</a>,
		<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>8</a>).
		<?php echo _("D’autres compétences peuvent être retravaillées par la suite car,
		le patient évoluant avec sa maladie, ses besoins peuvent se modifier, et avec le temps,
		ses connaissances et sa compliance au traitement peuvent diminuer"); ?>.
	</li>
	<li>
		<?php echo _("L’ETP est un véritable échange entre patient et soignant(s) : le soignant transmet son « savoir », et accompagne son
		patient dans le changement de comportement nécessaire pour mieux vivre avec sa maladie chronique"); ?>
		(<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>9</a>,
		<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>10</a>).
		<?php echo _("De son côté, le patient va apporter « son vécu » avec sa maladie chronique, source d’apprentissage pour le patient
		et pour les soignants. Ceci est novateur dans les relations soignant-soigné"); ?>.
	</li>
</ol>

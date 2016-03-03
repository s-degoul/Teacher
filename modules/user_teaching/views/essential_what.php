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


$content_bottom = lastpage_essential ('','') . nextpage_essential ('why');
$content_top .= $content_bottom;
?>

<h2><?php echo _("L’Education Thérapeutique du Patient (ETP) : qu’est-ce que c’est ?"); ?></h2>

<p>
	<?php echo _("Selon l’OMS, &laquo;&nbsp;L’éducation thérapeutique vise à aider les patients (et leurs familles) à acquérir et maintenir des compétences permettant une gestion optimale de leur maladie chronique&nbsp;&raquo;"); ?>
	[1].
<!--
	<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>1</a>).
-->
</p>
	
<p>
	<?php echo _("L’ETP a modifié radicalement la prise en charge des personnes vivant avec une maladie chronique. Initiée au départ chez les patients diabétiques, cet enseignement a été adapté à d’autres maladies comme l’asthme, les maladies cardio-vasculaires, l’insuffisance rénale, le cancer, ou le SIDA . De nombreuses d’études "); ?>
	[2-4]
<!--
 (<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>2</a>,
<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>3</a>,
<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>4</a>)
-->
<?php echo _("ont prouvé que les patients avaient
moins de crises, de complications, d’hospitalisations après programme éducatif.<br/>
Par ailleurs, l’ETP devient incontournable dans une société qui évolue vers un plus grand partage des décisions.<br/>
Et enfin, l’augmentation croissante des maladies chroniques couplée à une baisse de la démographie médicale oblige les
patients (et/ou de leur entourage) à l’auto-surveillance et l’auto-soin."); ?></p>

<p><?php echo _("Le but de l’éducation thérapeutique du patient (ETP) est de l’aider à mieux comprendre sa maladie et son traitement,
éviter les complications et les exacerbations, augmenter sa réactivité en cas d’urgence et améliorer sa qualité de vie."); ?></p>

<p>
	<?php echo _("Pour bien comprendre la démarche d’éducation thérapeutique, il est nécessaire d’intégrer ces quelques &laquo;&nbsp;postulats&nbsp;&raquo;"); ?>
	[5] :
<!--
(<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>5</a>)
-->
	<ol>
		<li><?php echo _("elle s’adresse à des patients atteints de maladie chronique"); ?></li>
		<li><?php echo _("l’ETP est centrée sur le patient"); ?></li>
		<li>
			<?php echo _("elle est structurée : on part du patient"); ?>
			(<a href='?module=patient_teaching&action=show_educ_diag&demo=1&from=essential&from_page_essential=what'><?php echo _("diagnostic éducatif"); ?></a>)
			<?php echo _("pour mieux le connaître. Au terme de cet entretien, on définit avec lui les compétences qui lui manquent"); ?>
			(<a href = '.?module=patient_teaching&action=show_educ_program&from=essential&from_page_essential=what'><?php echo _("programme éducatif personnalisé"); ?></a>)
			<?php echo _("et qui lui permettront de mieux vivre avec sa maladie chronique.
			Ces compétences seront travaillées sous forme d’objectifs pendant plusieurs entretiens"); ?>
			(<a href = '.?module=patient_teaching&action=show_target&id_target=1&from=essential&from_page_essential=what'><?php echo _("séances d’apprentissage"); ?></a>).
			<?php echo _("Les méthodes et techniques pédagogiques pour amener le patient aux changements de comportement sont variées :
			les plus efficaces sont les résolutions de problèmes : &laquo;&nbsp;on n’apprend bien qu’en faisant...&nbsp;&raquo;"); ?>
			[6].
<!--
			(<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>6</a>).
-->
			<?php echo _("On termine par une"); ?> <a href = '.?module=patient_teaching&action=show_eval&from=essential&from_page_essential=what'><?php echo _("évaluation"); ?></a>, 
			<?php echo _("nécessaire pour vérifier les compétences acquises ou non par le patient"); ?>
			[7,8].
<!--
			(<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>7</a>,
			<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>8</a>).
-->
			<?php echo _("d’autres compétences peuvent être retravaillées par la suite car,
			le patient évoluant avec sa maladie, ses besoins peuvent se modifier, et avec le temps,
			ses connaissances et sa compliance au traitement peuvent diminuer"); ?>.
		</li>
		<li>
			<?php echo _("L’ETP est un véritable échange entre patient et soignant(s) : le soignant transmet son &laquo;&nbsp;savoir&nbsp;&raquo;, et accompagne son
			patient dans le changement de comportement nécessaire pour mieux vivre avec sa maladie chronique"); ?>
			[9,10].
<!--
			(<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>9</a>,
			<a href = '.?module=user_teaching&action=show_essential&page_essential=ref'>10</a>).
-->
			<?php echo _("De son côté, le patient va apporter &laquo;&nbsp;son vécu&nbsp;&raquo; avec sa maladie chronique, source d’apprentissage pour le patient
			et pour les soignants. Ceci est novateur dans les relations soignant-soigné"); ?>.
		</li>
	</ol>
</p>

<div class = 'references_bottom'>
	<p><?php echo _("Références");?></p>
	<p>1- Organisation Mondiale de la Santé (O.M.S.), Bureau régional pour l’Europe, Programme de formation continue pour professionnels de soins dans le domaine de la prévention des maladies chronique. Recommandations d’un groupe de travail OMS : 1998</p>
	<p>2- Cabana MD, Slish KH, Evans D, et al. Impact of physician asthma care education on patient outcomes. Pediatrics 2006 ; 117(6):2149-57</p>
	<p>3- Coffman JM, Cabana MD, Halpin HA, et al. Effects of Asthma Education on Children’s Use of Acute Care Services: A Meta-analysis. Paediatrics 2008 ; 121(3):575-86</p>
	<p>4- Guevara JP, Wolf FM, Grum CM, et al. Effects of educational interventions for self management of asthma in children and adolescents: systematic review and meta-analysis. BMJ 2003 ; 326: 1308-13.</p>
	<p>5- D’Ivernois JF, Gagnayre R. Apprendre à éduquer le patient : approche pédagogique. 4e éd. Collection « L’Éducation du patient », Paris : Maloine ; 2011, 62 p.</p>
	<p>6- Lacroix A, Assal JP « L’Education Thérapeutique des Patients- Des méthodes d’enseignement qui favorisent l’apprentissage », in L’éducation thérapeutique des patients : nouvelle approche de la maladie chronique» Paris Maloine, 2003, p.130-137</p>
	<p>7- Mihoubi N, D’Ivernois JF « Nouvelles approches dans l’évaluation de l’Education thérapeutique du Patient : nouvelles preuves » in D’Ivernois JF, Gagneyre R, DEccache A et al, « l’évaluation de l’Education thérapeutique du Patient : Actes de la XIIIè journée de l’IPCEM-20 juin 2003 » (en ligne) Puteaux IPCEM 2003 , p.11-13</p>
	<p>8- Education thérapeutique du Patient : modèles, pratiques et évaluation Foucaud J, Bury J-A et al.juin 2010 408 pages</p>
	<p>9- Lagger G, Chambouleyron M, et al. « Education thérapeutique - 1ère partie : origines et modèles » , Médecine, vol 4, N°5 mai 2008, p.223-226</p>
	<p>10- Lagger G, Giordan A, et al. « Education thérapeutique - 2ème partie mise en pratique des modèles en 5 dimensions » , Médecine, vol 4, N°6 mai 2008, p.2269-273 Version 17 juin 2013</p>
</div>

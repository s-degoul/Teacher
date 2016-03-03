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


$content_bottom = lastpage_essential ('3') . nextpage_essential ('ref');
$content_top .= $content_bottom;
?>

<h2><?php echo _("4<sup>ème</sup> ETAPE : en fin de programme : l’évaluation des compétences acquises par l’enfant et sa famille. (durée : environ 30 minutes.)"); ?></h2>

<a href = '?module=patient_teaching&action=show_eval&demo=1&from=essential&from_page_essential=4'><?php echo _("En voir un aperçu"); ?></a>

<p><?php echo _("Cette étape est indispensable."); ?></p>

<p><?php echo _("Elle s’effectue à distance (au moins un mois) des séances d’apprentissage. L’enfant et le médecin, à partir d’un guide
écrit"); ?>
 (<a href = '.?module=patient_teaching&action=show_eval&demo=1&from=essential&from_page_essential=4'><?php echo _("cf : évaluation enfant"); ?></a>)
<?php echo _("font le point sur les connaissances, les gestes techniques et les capacités de réflexion et
d’adaptation de l’enfant vis-à-vis de sa maladie."); ?></p>

<p><?php echo _("Pendant ce temps, les parents remplissent (cf : évaluation parents) en précisant le degré de certitude de leur réponse.
On espère des réponses correctes avec un haut degré de certitude («je suis tout à fait sûr(e)»), une réponse correcte ou incorrecte avec un degré
de certitude moyen mérite d’être retravaillée ou ré-expliquée. Plus dangereuses sont les réponses incorrectes avec un
haut degré de certitude : la réponse est mauvaise mais la personne est sûre qu’elle a raison ..."); ?></p>
<p><?php echo _("Les objectifs de sécurité doivent être acquis, par l’enfant et ses parents."); ?></p>

<p><?php echo _("Les autres objectifs partiellement ou non acquis en fin de programme peuvent faire l’objet d’un renforcement
par de nouvelles séances éducatives."); ?></p>

<p><?php echo _("Même s’il estime que l’ensemble des objectifs pédagogiques est validé, le médecin propose une séance à distance (6 mois). Elle servira à évaluer le maintien des compétences de l’enfant et de sa famille compétences à l’auto-soin et à l’adaptation à la  maladie."); ?></p>

<p><a href = ''><?php echo _("Un courrier de synthèse"); ?></a>
<?php echo _("avec le résultat de l’évaluation est remis aux autres médecins (traitant, allergologue, pneumologue, équipe hospitalière) qui soignent l'enfant."); ?></p>

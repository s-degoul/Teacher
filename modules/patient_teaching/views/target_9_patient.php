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

<h2>
	<?php echo _("Je suis asthmatique et je suis sportif(ve) !"); ?>
</h2>
<p>
	<?php echo _("tordons le cou aux idées fausses..."); ?>
</p>


<p class = 't9_idea_num'><?php echo _("Idées n°"); ?> 1</p>
<p class = 't9_idea_text'><?php echo _("Je fais de l’asthme, donc je ne peux pas faire de sport."); ?></p>
<div class = 't9_possible_answers'>
	<div class = 't9_answer_right'><?php echo _("VRAI"); ?></div>
	<div class = 't9_answer_wrong'><?php echo _("FAUX"); ?></div>
</div>

<p class = 't9_idea_num'><?php echo _("Idées n°"); ?> 2</p>
<p class = 't9_idea_text'><?php echo _("Quand on fait de l’exercice, on peut faire des crises d’asthme."); ?></p>
<div class = 't9_possible_answers'>
	<div class = 't9_answer_right'><?php echo _("VRAI"); ?></div>
	<div class = 't9_answer_wrong'><?php echo _("FAUX"); ?></div>
</div>

<p class = 't9_idea_num'><?php echo _("Idées n°"); ?> 3</p>
<p class = 't9_idea_text'><?php echo _("Faire du sport dehors, c’est toujours mieux qu'à l'intérieur parce qu’on est au bon air."); ?></p>
<div class = 't9_possible_answers'>
	<div class = 't9_answer_right'><?php echo _("VRAI"); ?></div>
	<div class = 't9_answer_wrong'><?php echo _("FAUX"); ?></div>
</div>

<p class = 't9_idea_num'><?php echo _("Idées n°"); ?> 4</p>
<p class = 't9_idea_text'><?php echo _("Quand je fais du sport, je dois prendre des précautions pour éviter de faire une crise d’asthme."); ?></p>
<div class = 't9_possible_answers'>
	<div class = 't9_answer_right'><?php echo _("VRAI"); ?></div>
	<div class = 't9_answer_wrong'><?php echo _("FAUX"); ?></div>
</div>


<div class = 't9_sep'></div>


<h2>
	<?php echo _("Réponses"); ?>
</h2>

<div class = 't9_comment'>
	<p class = 't9_comment_title'><?php echo _("Tu n'as aucune réponse ou juste un point"); ?> :</p>
	<p><?php echo _("Pas de panique ! parles-en avec ton médecin. Il t’aidera à apprendre comment t’y prendre pour faire du sport en toute sécurité."); ?></p>
	
	<p class = 't9_comment_title'><?php echo _("Tu as 2 ou 3 points"); ?> :</p>
	<p><?php echo _("Tu sais beaucoup de choses, mais tu peux encore t’ am éliorer. Relis attentivement les bonnes réponses au test : elles t’aideront à prendre les bons réflexes quand tu veux faire du sport."); ?></p>
	
	<p class = 't9_comment_title'><?php echo _("Tu as 4 points"); ?> :</p>
	<p><?php echo _("Bravo ! tu es un(e) vrai(e) champion(ne) ! Tu connais parfaitement les précautions prendre avec ton asthme pour profiter à fond du plaisir et des bienfaits du sport. Vas-y, fonce !"); ?></p>
</div>

<p class = 't9_idea_num'><?php echo _("Idées n°"); ?> 1</p>
<div class = 't9_possible_answers'>
	<div class = 't9_answer_wrong'><?php echo _("FAUX"); ?></div>
</div>
<p class = 't9_idea_text'>
	<?php echo _("Je peux faire tous les sports (sauf la plongée sous marine avec bouteilles). Encore mieux ! plus je fais de l’exercice, plus mes poumons sont capables de bien respirer. Il y a même des champions olympiques qui sont asthmatiques."); ?>
</p>

<p class = 't9_idea_num'><?php echo _("Idées n°"); ?> 2</p>
<div class = 't9_possible_answers'>
	<div class = 't9_answer_right'><?php echo _("VRAI"); ?></div>
</div>
<p class = 't9_idea_text'>
	<?php echo _("On l’appelle l’asthme d’effort. Il arrive soit 5 à 10 minutes après le début d’un sport d’endurance, comme la course à pied, ou juste après avoir arrêté de faire du sport."); ?>
</p>

<p class = 't9_idea_num'><?php echo _("Idées n°"); ?> 3</p>
<div class = 't9_possible_answers'>
	<div class = 't9_answer_wrong'><?php echo _("FAUX"); ?></div>
</div>
<div>
	<p class = 't9_image'>
		<img src = '<?php echo IMAGE_PATH.'target/9/pollution_TV.jpg'; ?>' alt = "<?php echo _("pollution"); ?>" width = 150px />
	</p>
</div>
<p class = 't9_idea_text'>
	<?php echo _("Pas toujours ! Quand il fait froid et sec, ou en cas de pic de pollution, mes bronches risquent de se resserrer, et je peux faire une crise. Il vaut donc mieux éviter de faire du sport dehors quand il y a du vent, quand il fait très froid ou en cas de pic de pollution."); ?>
</p>

<p class = 't9_idea_num'><?php echo _("Idées n°"); ?> 4</p>
<div class = 't9_possible_answers'>
	<div class = 't9_answer_right'><?php echo _("VRAI"); ?></div>
</div>
<div>
	<p class = 't9_image'>
		<img src = '<?php echo IMAGE_PATH.'target/9/warm_up.jpg'; ?>' alt = "<?php echo _("échauffement"); ?>" width = 150px />
	</p>
	<p class = 't9_image'>
		<img src = '<?php echo IMAGE_PATH.'target/9/have_medication.jpg'; ?>' alt = "<?php echo _("j'emporte mon médicament"); ?>"  width = 150px />
	</p>
</div>
<div class = 't9_idea_text'>
	<ul>
		<li><?php echo _("j’emporte toujours mon médicament de secours bleu avec moi,"); ?></li>
		<li><?php echo _("je m’échauffe toujours au début d’une séance de sport,"); ?></li>
		<li><?php echo _("je n’arrête pas brutalement,"); ?></li>
		<li><?php echo _("quand je fais du sport dehors par temps froid ou s’il y a du vent, je couvre mon nez et ma bouche avec un foulard, et je respire par le nez pour réchauffer l’air,"); ?></li>
		<li><?php echo _("si j’ai déjà fait des crises en pratiquant mon sport, je prends une double bouffée de mon médicament de secours bleu avant de commencer à faire des efforts."); ?></li>
	</ul>
</div>

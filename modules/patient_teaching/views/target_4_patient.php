  
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

<h2><?php echo _("Qu'est-ce qui se passe dans le corps quand on fait une crise d’asthme ?"); ?></h2>

<div class = 't4_1_image'>
	<img src='<?php echo IMAGE_PATH.'target/4/child_x-ray.jpg'; ?>' alt='chest X-ray'/>
	<p><?php echo _("Dans mes poumons, il y a des bronches<br/>(sortes de tuyaux par lesquels passe l’air que je respire)"); ?></p>
</div>

<div class = 't4_1_image'>
	<div class = 't4_2_images'>
		<h3><?php echo _("En cas de crise d’asthme :"); ?></h3>
		<p><?php echo _("Les muscles autour de mes bronches se resserrent = bronchopasme"); ?></p>
		<img src='<?php echo IMAGE_PATH.'target/4/tight_bronchi.jpg'; ?>' alt='tight bronchi'/>
	</div>
	<div class = 't4_2_images'>
		<h3><?php echo _("Après la crise d’asthme :"); ?></h3>
		<p><?php echo _("L'intérieur des bronches est gonflé = inflammation"); ?></p>
		<img src='<?php echo IMAGE_PATH.'target/4/swollen_bronchi.jpg'; ?>' alt='swollen bronchi'/>
	</div>
</div>


<h2><?php echo _("Je sais faire la différence entre traitement de crise et traitement de fond"); ?></h2>

<h3><?php echo _("Quand je fais une crise d’asthme, les muscles autour de mes bronches se resserrent."); ?></h3>

<div>
	<div class = 't4_image_near_text'>
		<img src='<?php echo IMAGE_PATH.'target/4/tight_bronchi.jpg'; ?>' alt='tight bronchi'/>
	</div>
	<div class = 't4_text_near_image'>
		<p><?php echo _("Pour desserrer les bronches, et que l’air passe à nouveau facilement, on utilise un médicament de secours qui est de couleur bleue."); ?></p>
		<p><?php echo _("On l’appelle un «bronchodilatateur d’action rapide» car il agit en quelques minutes."); ?></p>
	</div>
</div>

<p><?php echo _("Mon médicament de secours s’appelle"); ?> ............................................</p>
<p><?php echo _("Je dois prendre ou demander rapidement ce médicament au moment de la crise ou de la gêne respiratoire."); ?></p>
<p><?php echo _("Je ne dois pas le prendre tout le temps, car il ne sert à rien quand mes bronches ne sont pas resserrées."); ?></p>


<h3><?php echo _("Entre les crises d’asthme ou entre les gênes respiratoires, l’intérieur des bronches peut rester gonflé, enflammé."); ?></h3>

<div>
	<div class = 't4_image_near_text'>
		<img src='<?php echo IMAGE_PATH.'target/4/swollen_bronchi.jpg'; ?>' alt='swollen bronchi'/>
	</div>
	<div class = 't4_text_near_image'>
		<p><?php echo _("L’inflammation de mes bronches existe même si je ne me sens pas gêné pour respirer. Si mes bronches sont enflammées
		et qu’elles ne sont pas soignées, elles s’abîment, et elles s’irritent plus facilement. Je risque d’être gêné(e) quand je fais des efforts
		et de faire des crises d’asthme encore plus souvent."); ?></p>
		<p><?php echo _("Le médicament qui répare les bronches est un anti-inflammatoire."); ?></p>
	</div>
</div>

<p><?php echo _("Mon(es) médicament(s) anti-inflammatoire(s) s’appelle(nt)"); ?> ............................................</p>
<p><?php echo _("Si mon pédiatre/médecin le prescrit, je dois le prendre tous les jours même si je ne me sens pas gêné(e) pour respirer. Je ne l’arrête pas sans son autorisation."); ?></p>
<p><?php echo _("Il faut au moins 3 mois pour réparer les bronches."); ?></p>

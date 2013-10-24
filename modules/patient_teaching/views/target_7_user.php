  
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



<div class='content_target'>
	
	<div class='pict_good_to_know'>
	</div>
	<div class='good_to_know'>
		<ul>
			<li><?php echo _("Quand le DEP est au dessus de la valeur alerte, et que l’enfant est asymptomatique, tout va bien, l’asthme est contrôlé
							<span class = 'text_green'><strong>(zone verte)</strong></span>"); ?></li>
			<li><?php echo _("Quand l’enfant a des signes de gêne respiratoire ou début de crise et que les valeurs du DEP sont entre les 2 valeurs « alerte »
							<span class = 'text_orange'><strong>(zone orange)</strong></span>
							l’asthme est déstabilisé : il faut renforcer le traitement par la prise de bronchodilatateur d’action immédiate = médicament de secours"); ?></li>
			<li><?php echo _("Quand l’enfant a des signes de crise d’asthme grave ou la crise d’asthme débutante ne cède pas après prise de bronchodilateur d’action immédiate,
							et/ou que le DEP est en dessous de la valeur alerte grave <span class = 'text_red'><strong>(zone rouge)</strong></span>, c’est une crise d’asthme grave :
							le traitement nécessite la prise répétée de bronchodilatateur d’action immédiate, peut-être de cortisone, et une consultation médicale."); ?></li>
		</ul>
	</div>

	<div class='pict_how_to_guide'>
	</div>
	<div class='how_to_guide'>
		<p><?php echo _("Demandez à l’enfant s’il se souvient de la valeur de son débit de pointe quand tout va bien ?"); ?></p>
		<p><?php echo _("Et de ses valeurs alerte et alerte grave ?"); ?></p>
		<p><?php echo _("L’enfant les note sur la feuille"); ?></p>

		<p><?php echo _("Rappelez-lui que <strong>la valeur alerte est un seuil en dessous duquel les bronches sont rétrécies</strong>
							(début d’une crise d’asthme, d’une gêne respiratoire)"); ?></p>

		<p><?php echo _("Prenez connaissance et complétez avec l’enfant le contenu des trois encadrés :"); ?></p>
		<ul>
			<li><?php echo _("<span class = 'text_green'><strong>Le vert «mon asthme va bien»</strong></span>"); ?></li>
			<li><?php echo _("<span class = 'text_orange'><strong>Le orange « j’ai une gêne pour respirer ou je commence une crise légère »</strong></span>"); ?></li>
			<li><?php echo _("<span class = 'text_red'><strong>Le rouge « j’ai une crise d’asthme grave »</strong></span>"); ?></li>
		</ul>

		<div class='key_message'>
			<div class='pict_key_message'></div>
			<div class='content_key_message'>
				<p><?php echo _("L’enfant connaît au moins sa valeur habituelle de DEP et sa valeur alerte"); ?></p>
				<p><?php echo _("L’enfant sait qu’en cas de crise d’asthme débutante, il faut :"); ?></p>
				<ul>
					<li><?php echo _("prévenir un adulte,"); ?></li>
					<li><?php echo _("prendre 2 bouffées de médicament de secours, et surveiller ses symptômes et son DEP"); ?></li>
				</ul>
				<p><?php echo _("L’enfant sait qu’en cas de crise d’asthme sévère, de DEP en dessous de la valeur alerte grave, il faut :"); ?></p>
				<ul>
					<li><?php echo _("prévenir un adulte,"); ?></li>
					<li><?php echo _("prendre le médicament de secours plusieurs fois,"); ?></li>
					<li><?php echo _("prendre des comprimés ou gouttes de cortisone,"); ?></li>
					<li><?php echo _("et demander un avis médical"); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class='advice_target'>

	<p class='title_advice_target'><?php echo _("Méthode d’apprentissage").' :'; ?></p>
	<p><?php echo _("analyse de situation"); ?></p>

	<p class='title_advice_target'><?php echo _("Durée de la séance").' :'; ?></p>
	<p><?php echo _("15 min"); ?></p>

	<p class='title_advice_target'><?php echo _("Imprimer").' :'; ?></p>
	<p><?php echo _("Objectif 7 enfant : « Je sais adapter mon traitement selon les résultats de mon débit de pointe. » (recto/verso)»"); ?></p>

	<p class='title_advice_target'><?php echo _("Matériel nécessaire").' :'; ?></p>
	<p><?php echo _("Prévoir que les parents aient le PAP"); ?></p>

</div>
